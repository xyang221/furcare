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
        $appointments = Appointment::orderBy('date', 'desc')->get();
        return AppointmentResource::collection($appointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request)
    {
        $data = $request->validated();
        $data['status'] = "pending";
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

    public function getPending()
    {
        $appointments = Appointment::where('status', 'pending')->orderBy('date', 'desc')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No pending appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }

    public function schedule($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "pending") {
            return response()->json(['message' => 'Appointment is not pending'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'scheduled']);

        return new AppointmentResource($appointment);
    }

    public function cancel($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "pending") {
            return response()->json(['message' => 'Appointment is not pending'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'cancelled']);

        return new AppointmentResource($appointment);
    }

    public function getScheduled()
    {
        $appointments = Appointment::where('status', 'scheduled')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No scheduled appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }

    public function done($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Appointment not found'], Response::HTTP_NOT_FOUND);
        }

        if ($appointment->status !== "scheduled") {
            return response()->json(['message' => 'Appointment is not scheduled'], Response::HTTP_BAD_REQUEST);
        }

        $appointment->update(['status' => 'done']);

        return new AppointmentResource($appointment);
    }

    public function getDone()
    {
        $appointments = Appointment::where('status', 'done')->orderBy('date', 'desc')->get();
        
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'No done appointments found'], Response::HTTP_NOT_FOUND);
        }
        
        return AppointmentResource::collection($appointments);
    }


    public function getbyDate()
    {
        // Get the current date
        $today = Carbon::now()->toDateString();

        // Find appointments with the specified date
        $appointments = Appointment::where('status', 'scheduled')
        ->whereDate('date', $today)
        ->get();

        if ($appointments->isEmpty()) {
            return response([
                'message' => 'No appointments found for the specified date'
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
