<?php

namespace App\Http\Controllers\Api;

use App\Models\DewormingLog;
use App\Models\Pet;
use App\Models\ServicesAvailed;
use App\Models\Service;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDewormingLogRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateDewormingLogRequest;
use App\Http\Resources\DewormingLogResource;
use Carbon\Carbon;


class DewormingLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dewormingLog = DewormingLog::query()->orderBy('id', 'desc')->paginate(50);

        if ($dewormingLog->isEmpty()) {
            return response()->json(['message' => 'No deworming logs found.'], 404);
        }

        return DewormingLogResource::collection($dewormingLog);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDewormingLogRequest $drequest, StoreServicesAvailedRequest $sarequest, $id, $sid)
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

        $dewormingLog = DewormingLog::create([
            'pet_id' => $servicesAvailed->pet_id,
            'weight' =>$drequest->input('weight'),
            'description' => $drequest->input('description'),
            'administered' => $drequest->input('administered'),
            //??? ang status/return kay sched date kanus a mubalik?
            'return' => $drequest->input('return'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new DewormingLogResource($dewormingLog, 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(DewormingLog $dewormingLog,$id)
    {
        $dewormingLog = DewormingLog::find($id);
        return new DewormingLogResource($dewormingLog);
    }

    public function getbyPet($id)
    {
        
        $dewormingLogs = DewormingLog::where('pet_id', $id)->get();

        if ($dewormingLogs->isEmpty()) {
            return response()->json(['message' => 'No deworming logs found.'], 404);
        }

        return DewormingLogResource::collection($dewormingLogs);
    }

    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');
        
        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_service_id', $clientServiceIds)
            ->where('service_id',$servicesAvailedIds->id)
            ->pluck('id');
        
        $dewormingLog = DewormingLog::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();
                    
        if ($dewormingLog->isEmpty()) {
            return response()->json(['message' => 'No list of pet deworming found.'], 404);
        }
        
        return DewormingLogResource::collection($dewormingLog);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDewormingLogRequest $request, DewormingLog $dewormingLog)
    {
        $data = $request->validated();
        $dewormingLog->update($data);

        return new DewormingLogResource($dewormingLog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DewormingLog $dewormingLog)
    {
        $dewormingLog = DewormingLog::findOrFail($id);
        $dewormingLog->delete();
        return response("Permanently Deleted", 201);
    }
}
