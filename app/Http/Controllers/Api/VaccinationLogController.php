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
            'client_service_id' => $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $vaccinationLog = VaccinationLog::create([
            'pet_id' => $servicesAvailed->pet_id,
            'weight' => $request->input('weight'),
            'description' => $request->input('description'),
            'administered' => $request->input('administered'),
            'return' => $request->input('return'),
            'vaccination_againsts' => $request->input('vaccination_againsts'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new VaccinationLogResource($vaccinationLog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        return new VaccinationLogResource($vaccinationLog);
    }

    public function getbyPet($id)
    {

        $vaccinationLogs = VaccinationLog::where('pet_id', $id)->orderBy('id', 'desc')->get();

        if ($vaccinationLogs->isEmpty()) {
            return response()->json(['message' => 'No vaccination logs found.'], 404);
        }

        return VaccinationLogResource::collection($vaccinationLogs);
    }

    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_service_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $vaccinationLogs = VaccinationLog::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($vaccinationLogs->isEmpty()) {
            return response()->json(['message' => 'No list of pet diagnosis found.'], 404);
        }

        return VaccinationLogResource::collection($vaccinationLogs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVaccinationLogRequest $request, VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $data = $request->validated();
        $vaccinationLog->update($data);

        return new VaccinationLogResource($vaccinationLog);
    }

    public function archive($id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $vaccinationLog->delete();
        return new VaccinationLogResource($vaccinationLog);
    }

    public function archivelist()
    {
        return VaccinationLogResource::collection(
            VaccinationLog::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $vaccinationLog = VaccinationLog::withTrashed()->findOrFail($id);
        $vaccinationLog->restore();
        return response("Deworming was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $vaccinationLog->forceDelete();
        return response("Permanently Deleted", 201);
    }
}
