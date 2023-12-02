<?php

namespace App\Http\Controllers\Api;

use App\Models\VaccinationLog;
use App\Models\Pet;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\ClientService;
use App\Models\VaccinationAgainst;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccinationLogRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\StoreVaccinationAgainstRequest;
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
    public function store(StoreVaccinationLogRequest $request, StoreServicesAvailedRequest $sarequest, StoreVaccinationAgainstRequest $varequest, $id, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $id)->first();

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_service_id'=> $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $vaccinationLog = VaccinationLog::create([
            'pet_id' => $servicesAvailed->pet_id,
            'weight' =>$request->input('weight'),
            'description' => $request->input('description'),
            'administered' => $request->input('administered'),
            'return' => $request->input('return'),
            'vaccination_againsts' => $request->input('vaccination_againsts'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

    //     $vaccinationAgainst = $request->vaccinationAgainst;
    //     $against = $request->against_id;

    //     foreach($against as $against_id) {
    //     VaccinationAgainst::create([
    //         'vaccinationlog_id' => $vaccinationLog->id,
    //         'against_id' => $varequest->input('against_id')
    //     ]);
    // }

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
