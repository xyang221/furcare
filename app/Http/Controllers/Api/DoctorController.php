<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Http\Resources\DoctorResource;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->paginate(50);

        if ($doctors->isEmpty()) {
            return response()->json(['message' => 'No veterinarian doctors found.'], 404);
        }

        return DoctorResource::collection($doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->validated(); //get the data
        $doctor = Doctor::create($data);
        return new DoctorResource($doctor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor, $id)
    {
        $doctor = Doctor::findOrFail($id);
        return new DoctorResource($doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $data = $request->validated();
        $doctor->update($data);

        return new DoctorResource($doctor);
    }

    public function archive($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return new DoctorResource($doctor);
    }


    public function archivelist()
    {

        $doctors = Doctor::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($doctors->isEmpty()) {
            return response()->json(['message' => 'No veterinarian archives found.'], 404);
        }

        return DoctorResource::collection($doctors);
    }

    public function restore($id)
    {
        $doctor = Doctor::withTrashed()->findOrFail($id);
        $doctor->restore();
        return response("Vet restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor, $id)
    {
        $doctor = Doctor::withTrashed()->findOrFail($id);
        $doctor->forceDelete();
        return response("Permanently Deleted", 200);
    }
}
