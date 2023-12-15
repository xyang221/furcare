<?php

namespace App\Http\Controllers\Api;

use App\Models\Medication;
use App\Models\Treatment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicationRequest;
use App\Http\Requests\UpdateMedicationRequest;
use App\Http\Resources\MedicationResource;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medications = Medication::query()->orderBy('id', 'desc')->get();

        if ($medications->isEmpty()) {
            return response()->json(['message' => 'No pet medication records found.'], 404);
        }
        
        return MedicationResource::collection($medications);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicationRequest $request, $tid)
    {
        $treatment = Treatment::findOrFail($tid);
        $data = $request->validated(); //get the data

        $data['treatment_id'] = $treatment->id; // Assign treatment ID

        $medication = Medication::create($data); //create
        return new MedicationResource($medication, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);
        return new MedicationResource($medication);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicationRequest $request, Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);
        $data = $request->validated();
        $medication->update($data);

        return new MedicationResource($medication);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medication $medication)
    {
        $medication->delete();
        return response()->json(['message' => 'The pet medication record within this treatment was archived.'], 204);
    }

    public function archivelist()
    {
        $medications = Medication::onlyTrashed()->orderBy('id','desc')->get();

        if ($medications->isEmpty()) {
            return response()->json(['message' => 'No pet medication records was archived.'], 404);
        }
        
        return MedicationResource::collection($medications);
    }

    public function restore($id)
    {
        $medication = Medication::withTrashed()->findOrFail($id);
        $medication->restore();
        return response("This Pet medication record was restored successfully");
    }

    public function forcedelete(Medication $medication, $id)
    {
        $medication = Medication::withTrashed()->findOrFail($id);
        $medication->forceDelete();
        return response("This pet medication record was Permanently Deleted", 204);

    }
}
