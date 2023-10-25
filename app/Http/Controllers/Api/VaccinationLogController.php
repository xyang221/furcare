<?php

namespace App\Http\Controllers\Api;

use App\Models\VaccinationLog;
use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccinationLogRequest;
use App\Http\Requests\UpdateVaccinationLogRequest;
use App\Http\Resources\VaccinationLogResource;


class VaccinationLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccinationLog = VaccinationLog::query()->orderBy('id', 'desc')->get();
        return VaccinationLogResource::collection($vaccinationLog);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccinationLogRequest $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $data = $request->validated();
        $data['pet_id'] = $id;
        $vaccinationLog = VaccinationLog::create($data); 
        return new VaccinationLogResource($vaccinationLog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccinationLog $vaccinationLog)
    {
        return new VaccinationLogResource($vaccinationLog);
    }

    public function getbyPet($id)
    {
        
        $vaccinationLogs = VaccinationLog::where('pet_id', $id)->get();

        if ($vaccinationLogs->isEmpty()) {
            return response()->json(['message' => 'No vaccination logs found.'], 404);
        }

        return VaccinationLogResource::collection($dewormingLogs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVaccinationLogRequest $request, VaccinationLog $vaccinationLog)
    {
        $data = $request->validated();
        $vaccinationLog->update($data);

        return new VaccinationLogResource($vaccinationLog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccinationLog $vaccinationLog)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $vaccinationLog->delete();
        return response("Permanently Deleted", 201);
    }
}
