<?php

namespace App\Http\Controllers\Api;

use App\Models\VaccinationLog;
use App\Models\Pet;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccinationLogRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateVaccinationLogRequest;
use App\Http\Resources\VaccinationLogResource;
use Carbon\Carbon;


class VaccinationLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccinationLog = VaccinationLog::query()->orderBy('id', 'desc')->get();
        if ($vaccinationLog->isEmpty()) {
            return response()->json(['message' => 'No vaccination logs found.'], 404);
        }
        return VaccinationLogResource::collection($vaccinationLog);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccinationLogRequest $request, StoreServicesAvailedRequest $sarequest, $id)
    {
        $pet = Pet::findOrFail($id);

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $sarequest->input('service_id'),
            'unit_price' => Service::findOrFail($sarequest['service_id'])->price,
            'petowner_id' => $pet->petowner_id,
            'pet_id' => $pet->id,
        ]);

        $dewormingLog = DewormingLog::create([
            'pet_id' => $pet->id,
            'weight' =>$drequest->input('weight'),
            'description' => $drequest->input('description'),
            'administered' => $drequest->input('administered'),
            'status' => $drequest->input('status'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

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

        return VaccinationLogResource::collection($vaccinationLogs);
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
