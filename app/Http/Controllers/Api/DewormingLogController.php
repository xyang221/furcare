<?php

namespace App\Http\Controllers\Api;

use App\Models\DewormingLog;
use App\Models\Pet;
use App\Models\ServicesAvailed;
use App\Models\Service;
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
    public function store(StoreDewormingLogRequest $drequest, StoreServicesAvailedRequest $sarequest, $id)
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
