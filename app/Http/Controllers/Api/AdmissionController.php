<?php

namespace App\Http\Controllers\Api;

use App\Models\Admission;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Http\Resources\AdmissionResource;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::query()->orderBy('id', 'desc')->get();

        if ($admissions->isEmpty()) {
            return response()->json(['message' => 'No pet admission records found.'], 404);
        }
        
        return AdmissionResource::collection($admissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdmissionRequest $request)
    {
        $pet = Pet::findOrFail($id);
        $data = $request->validated(); //get the data

        $data['pet_id'] = $id;
        $admission = Admission::create($data); //create
        return new AdmissionResource($admission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        return new AdmissionResource($admission);
        
    }

    public function getPetAdmissions($id)
    {
        
        $admissions = Admission::where('pet_id', $id)->get();

        if ($admissions->isEmpty()) {
            return response()->json(['message' => 'No admission records found in this pet.'], 404);
        }
        return AdmissionResource::collection($admissions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        $data = $request->validated();
        $treatment->update($data);

        return new TreatmentResource($treatment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        $treatment->delete();
        return response()->json(['message' => 'This pet treatment record was archived.'], 204);
    }
}
