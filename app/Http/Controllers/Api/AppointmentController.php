<?php

namespace App\Http\Controllers\Api;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Resources\AppointmentResource;
use Illuminate\Http\Response;
use Carbon\Carbon;

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
    public function store(StoreAppointmentRequest $request)
    {
        $data = $request->validated();
        $data['date'] = \Carbon\Carbon::parse($data['date'])->format('Y-m-d');
        $data['status'] = "Pending";
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
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        return new AppointmentResource($appointment);
    }

    //get all the pending appointment which needs to be confirm or cancel
    public function getPending()
    {
        $appointments = Appointment::where('status', 'Pending')->orderBy('date', 'desc')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No pending appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }

    //the appointment is pending and this function will comfirm the appointment for that schedule
    public function confirm($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Pending") {
            return response()->json(['message' => 'Appointment is not pending'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'Confirmed']);

        return new AppointmentResource($appointment);
    }

     //get all the appointments scheduled even if wala pa na occur ana nga day 
     public function getConfirmed()
     {
         $appointments = Appointment::where('status', 'Confirmed')->get();
         
         if ($appointments->isEmpty()) {
             return response()->json(['message' => 'No scheduled appointments found'], Response::HTTP_NOT_FOUND);
         }
         
         return AppointmentResource::collection($appointments);
     }

    //the appointment is pending and this function will cancel the appointment for that schedule
    public function cancel($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Pending") {
            return response()->json(['message' => 'Appointment is not pending'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'Cancelled']);

        return new AppointmentResource($appointment);
    }

    public function getCancelled()
    {
        $appointments = Appointment::where('status', 'Cancelled')->where('status','No Show')->orderBy('date', 'desc')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No cancelled appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }

   

    //the appointment has been scheduled and the client arrived and the appointment was completed
    public function completed($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Confirmed") {
            return response()->json(['message' => 'Appointment is not scheduled'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'Completed']);

        return new AppointmentResource($appointment);
    }

    //get all the completed appointments
    public function getCompleted()
    {
        $appointments = Appointment::where('status', 'Completed')->orderBy('date', 'desc')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No completed appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }

    public function noshow($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "Confirmed") {
            return response()->json(['message' => 'Appointment is not scheduled'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'No Show']);

        return new AppointmentResource($appointment);
    }


    //get the appointments within that day
    public function getbyDate()
    {
        // Get the current date
        $today = Carbon::now()->toDateString();

        // Find appointments with the specified date
        $appointments = Appointment::where('status', 'Confirmed')
        ->whereDate('date', $today)
        ->get();

        if ($appointments->isEmpty()) {
            return response([
                'message' => 'No appointments confirmed for today.'
            ], 404);
        }

        return AppointmentResource::collection($appointments);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment, $id)
    {

        $appointment = Appointment::findOrFail($id);
        $data = $request->validated();

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
