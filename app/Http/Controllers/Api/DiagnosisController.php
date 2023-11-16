<?php

namespace App\Http\Controllers\Api;

use App\Models\Diagnosis;
use App\Models\Pet;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\UpdateDiagnosisRequest;
use App\Http\Resources\DiagnosisResource;
use Carbon\Carbon;


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
    public function store(StoreDiagnosisRequest $request, $id, $serviceid)
    {
        $pet = Pet::findOrFail($id);
        $service = Service::findOrFail($serviceid);

        $data = $request->validated(); //get the data
        $data['pet_id'] = $id;
        $data['service_id'] = $serviceid;
        $data['date'] = Carbon::now()->format('Y-m-d H:i:s');


        $diagnosis = Diagnosis::create($data); //create
        return new DiagnosisResource($diagnosis, 201);
    }

    // public function store(StoreDiagnosisRequest $request, $id)
    // {
    //     $pet = Pet::findOrFail($id);

    //     $data = $request->validated(); //get the data
    //     $data['pet_id'] = $id;
    //     $data['date'] = Carbon::now()->format('Y-m-d H:i:s');


    //     $diagnosis = Diagnosis::create($data); //create
    //     return new DiagnosisResource($diagnosis, 201);
    // }

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
