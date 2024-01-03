<?php

namespace App\Http\Controllers\Api;

use App\Models\Appointment;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Resources\AppointmentResource;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::orderBy('date', 'desc')->paginate(50);
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

        return new AppointmentResource($appointment);
    }

    //get all the appointments scheduled even if wala pa na occur ana nga day 
    public function getConfirmed()
    {
        $appointments = Appointment::where('status', 'Confirmed')->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No scheduled appointments found.'], Response::HTTP_NOT_FOUND);
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

        if ($appointment->status !== "Pending") {
            return response()->json(['message' => 'Appointment is not pending.'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'Cancelled']);

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
        $appointments = Appointment::whereIn('status', ['Confirmed', 'Pending'])
            ->orderBy('date')
            ->get();

        if ($appointments->isEmpty()) {
            return response([
                'message' => 'No pending and confirmed appointments found.'
            ], 404);
        }

        return AppointmentResource::collection($appointments);
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
