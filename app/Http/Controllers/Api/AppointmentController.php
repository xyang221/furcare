<?php

namespace App\Http\Controllers\Api;

use App\Events\AppointmentEvent;
use App\Models\Appointment;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Resources\AppointmentResource;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{

    public function listenForTodayAppointments()

    {
        // $today = Carbon::now()->subHour();
        $today = Carbon::now();
        // $user = User::findOrFail($id);

        try {

            $appointments = Appointment::whereDate('date', $today)
                ->where('status', 'Confirmed')
                ->get();

            if ($appointments->isNotEmpty()) {
                foreach ($appointments as $appointment) {
                    event(new AppointmentEvent($appointment));
                }
                return response()->json(['message' => 'Event triggered for today\'s appointments']);
            } else {
                return response()->json(['message' => 'No appointments found for today.']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::orderBy('date', 'desc')->get();
        return AppointmentResource::collection($appointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request, $id)
    {
        $user = Auth::user();
        $petowner = PetOwner::find($id);

        $data = $request->validated();

        if ($user->role_id === 1 && 2) {
            $data['status'] = "Confirmed";
        } else {
            $data['status'] = "Pending";
        }

        $data['petowner_id'] = $petowner->id;

        $appointment = Appointment::create($data);
        event(new AppointmentEvent($appointment));

        if ($appointment->status === "Pending") {
            $admins = User::whereIn('role_id', [1, 2])->whereNull('deleted_at')->get();
            $dateTime = Carbon::parse($appointment->date);
            $formattedDateTime = $dateTime->format('F j, Y h:i a');
            foreach ($admins as $admin) {
                Notification::create([
                    'user_id' => $admin->id,
                    'type' => 'Appointment',
                    'message' => "$petowner->firstname $petowner->lastname has created an appointment for $formattedDateTime.",
                    'status' => 1, // to notify, not opened, not clicked
                ]);
            }
        }

        return new AppointmentResource($appointment, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        return new AppointmentResource($appointment);
    }

    public function appointmentToday($id)
    {
        $today = Carbon::now()->toDateString(); // Format as a date string

        $appointment = Appointment::where('petowner_id', $id)
            ->where('status', 'Completed')
            ->whereDate('date', $today) // Use whereDate for precise date comparison
            ->first();

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        return new AppointmentResource($appointment);
    }

    //get all the pending appointment which needs to be confirm or cancel
    public function getPending()
    {
        $appointments = Appointment::where('status', 'Pending')->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No pending appointments found.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }

    //the appointment is pending and this function will comfirm the appointment for that schedule
    public function confirm($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Pending") {
            return response()->json(['message' => 'Appointment is not pending.'], Response::HTTP_BAD_REQUEST);
        }


        $appointment->update(['status' => 'Confirmed']);
        // event(new AppointmentEvent($appointment));
        event(new AppointmentEvent($appointment, $appointment->petowner->user->id));

        if ($appointment->status === "Confirmed") {
            $dateTime = Carbon::parse($appointment->date);
            $formattedDateTime = $dateTime->format('F j, Y h:i a');
            Notification::create([
                'user_id' => $appointment->petowner->user->id,
                'type' => 'Appointment',
                'message' => "Your appointment on $formattedDateTime has been confirmed.",
                'status' => 1, // to notify, not opened, not clicked
            ]);
        }

        return new AppointmentResource($appointment);
    }

    //get all the appointments scheduled even if wala pa na occur ana nga day 
    public function getConfirmed()
    {
        $appointments = Appointment::where('status', 'Confirmed')->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No confirmed appointments found.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }

    //the appointment is pending and this function will cancel the appointment for that schedule
    public function cancel($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        $appointment->update(['status' => 'Cancelled']);
        event(new AppointmentEvent($appointment));

        if ($appointment->status === 'Cancelled') {
            $dateTime = Carbon::parse($appointment->date);
            $formattedDateTime = $dateTime->format('F j, Y h:i a');
            $admins = User::whereIn('role_id', [1, 2])->whereNull('deleted_at')->get();

            $user = Auth::user();
            $userId = null;
            $message = '';

            if ($user->role_id === 3) {
                $dateTime = Carbon::parse($appointment->date);
                $formattedDateTime = $dateTime->format('F j, Y h:i a');

                // Assuming $admins is an array of admins
                foreach ($admins as $admin) {
                    $userId = $admin->id;
                    $message = "{$appointment->petowner->firstname} {$appointment->petowner->lastname} has cancelled the appointment on $formattedDateTime.";

                    // Notification for each admin 
                    Notification::create([
                        'user_id' => $userId,
                        'type' => 'Appointment',
                        'message' => $message,
                        'status' => 1, // to notify, not opened, not clicked
                    ]);
                }
            } elseif ($user->role_id === 1 || $user->role_id === 2) {
                $message = "Your appointment on $formattedDateTime has been cancelled.";

                // Notification for the user
                Notification::create([
                    'user_id' => $appointment->petowner->user->id,
                    'type' => 'Appointment',
                    'message' => $message,
                    'status' => 1, // to notify, not opened, not clicked
                ]);
            }
        }

        return new AppointmentResource($appointment);
    }


    public function noshow($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Confirmed") {
            return response()->json(['message' => 'Appointment is not scheduled.'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'No Show']);

        return new AppointmentResource($appointment);
    }

    public function getCancelled()
    {
        $appointments = Appointment::whereIn('status', ['Cancelled', 'No Show'])
            ->orderBy('date', 'desc')
            ->get();


        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No cancelled appointments found.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }



    //the appointment has been scheduled and the client arrived and the appointment was completed
    public function completed($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found.'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Confirmed") {
            return response()->json(['message' => 'Appointment is not scheduled.'], Response::HTTP_BAD_REQUEST);
        }
        event(new AppointmentEvent($appointment));

        $appointment->update(['status' => 'Completed']);

        return new AppointmentResource($appointment);
    }

    //get all the completed appointments
    public function getCompleted()
    {
        $appointments = Appointment::where('status', 'Completed')->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No completed appointments found.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }

    //get the appointments within that day
    public function getCurrent()
    {
        $today = now()->toDateString();

        $confirmedAppointments = Appointment::where('status', 'Confirmed')
            ->whereDate('date', $today)
            ->orderBy('date')
            ->get();

        $pendingAppointments = Appointment::where('status', 'Pending')
            ->orderBy('date')
            ->get();

        $c1 = AppointmentResource::collection($pendingAppointments);
        $c2 = AppointmentResource::collection($confirmedAppointments);
        $mergedCollection = $c1->merge($c2);
        if ($mergedCollection->isEmpty()) {
            return response([
                'message' => 'No pending and confirmed appointments found today.'
            ], 404);
        }
        return AppointmentResource::collection($mergedCollection);
    }


    public function getCurrentbyPetowner($id)
    {
        $today = now()->toDateString();

        $confirmedAppointments = Appointment::where('status', 'Confirmed')
            ->where('petowner_id', $id)
            ->whereDate('date', $today)
            ->orderBy('date')
            ->get();

        $pendingAppointments = Appointment::where('status', 'Pending')
            ->where('petowner_id', $id)
            ->orderBy('date')
            ->get();

        $c1 = AppointmentResource::collection($pendingAppointments);
        $c2 = AppointmentResource::collection($confirmedAppointments);
        $mergedCollection = $c1->merge($c2);
        if ($mergedCollection->isEmpty()) {
            return response([
                'message' => 'No pending and confirmed appointments found today.'
            ], 404);
        }
        return AppointmentResource::collection($mergedCollection);
    }

    public function getDoctorAppointments($id)
    {
        $appointments = Appointment::where('vet_id', $id)->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'This doctor have no appointments.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment, $id)
    {
        $user = Auth::user();

        $appointment = Appointment::findOrFail($id);
        $data = $request->validated();

        if ($user->role_id === 1 && 2) {
            $data['status'] = "Confirmed";
        } else {
            $data['status'] = "Pending";
        }

        $appointment->update($data);
        return new AppointmentResource($appointment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(['message' => 'Appointment deleted'], Response::HTTP_OK);
    }
}
