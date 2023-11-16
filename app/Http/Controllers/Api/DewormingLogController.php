<?php

namespace App\Http\Controllers\Api;

use App\Models\DewormingLog;
use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDewormingLogRequest;
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
    public function store(StoreDewormingLogRequest $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $data = $request->validated();
        $today = Carbon::now()->toDateString();
        // $data['date'] = Carbon::now()->format('Y-m-d H:i:s')->save();
        // $data['date'] = (string)$data['date'];
        $data['date'] = $today;
        $data['pet_id'] = $id;
        $dewormingLog = DewormingLog::create($data); 
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
