<?php

namespace App\Http\Controllers\Api;

use App\Models\Diagnosis;
use App\Models\Pet;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\UpdateDiagnosisRequest;
use App\Http\Resources\DiagnosisResource;

use App\Http\Requests\StoreServicesAvailedRequest;


class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosis = Diagnosis::query()->orderBy('id', 'desc')->paginate(50);

        return DiagnosisResource::collection($diagnosis);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiagnosisRequest $request, StoreServicesAvailedRequest $sarequest, $id)
    {
        $pet = Pet::findOrFail($id);

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $sarequest->input('service_id'),
            'unit_price' => Service::findOrFail($sarequest['service_id'])->price,
            'petowner_id' => $pet->petowner_id,
            'pet_id' => $pet->id,
        ]);

        $diagnosis = Diagnosis::create([
            'pet_id' => $pet->id,
            'remarks' =>$drequest->input('remarks'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        // $dewormingLog = DewormingLog::create($data); 
        return new DiagnosisResource($diagnosis, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis)
    {
        return new DiagnosisResource($diagnosis);
    }

    public function getbyPet($id)
    {
        
        $diagnosis = Pet::where('pet_id', $id)->get();

        if ($diagnosis->isEmpty()) {
            return response()->json(['message' => 'No list of diagnosis found.'], 404);
        }

        return DiagnosisResource::collection($diagnosis);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosisRequest $request, Diagnosis $diagnosis)
    {
        $data = $request->validated();
        $diagnosis->update($data);

        return new DiagnosisResource($diagnosis);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->delete();
        return response()->json("Diagnosis was archived", 204);
    }
}
