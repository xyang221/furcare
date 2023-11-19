<?php

namespace App\Http\Controllers\Api;

use App\Models\Treatment;
use App\Models\PetCondition;
use App\Models\Medication;
use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTreatmentRequest;
use App\Http\Requests\UpdateTreatmentRequest;
use App\Http\Resources\TreatmentResource;
use App\Http\Resources\PetConditionResource;
use App\Http\Resources\MedicationResource;

use Carbon\Carbon;



class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatments = Treatment::query()->orderBy('id', 'desc')->get();

        if ($treatments->isEmpty()) {
            return response()->json(['message' => 'No pet treatment records found.'], 404);
        }
        
        return TreatmentResource::collection($treatments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request, $id)
    {
        $pet = Pet::findOrFail($id);
        $data = $request->validated(); //get the data

        $today = Carbon::now()->toDateString();
        $data['date'] = $today;
        $data['pet_id'] = $id;
        $treatment = Treatment::create($data); //create
        return new TreatmentResource($treatment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Treatment $treatment)
    {
        return new TreatmentResource($treatment);
    }

    public function getPetTreatments($id)
    {
        
        $petTreatments = Treatment::where('pet_id', $id)->get();

        if ($petTreatments->isEmpty()) {
            return response()->json(['message' => 'No treatment records found in this pet.'], 404);
        }
        return TreatmentResource::collection($petTreatments);
    }

    public function getTreatmentPetConditions($id)
    {
        
        $petTreatmentPetConditions = PetCondition::where('treatment_id', $id)->get();

        if ($petTreatmentPetConditions->isEmpty()) {
            return response()->json(['message' => 'No pet condition records found in this pet treatment.'], 404);
        }
        return PetConditionResource::collection($petTreatmentPetConditions);
    }

    public function getTreatmentMedications($id)
    {
        
        $petTreatmentMedications = Medication::where('treatment_id', $id)->get();

        if ($petTreatmentMedications->isEmpty()) {
            return response()->json(['message' => 'No medication records found in this pet treatment.'], 404);
        }
        return MedicationResource::collection($petTreatmentMedications);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreatmentRequest $request, Treatment $treatment)
    {
        $data = $request->validated();
        $treatment->update($data);

        return new TreatmentResource($treatment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        $treatment->delete();
        return response()->json(['message' => 'This pet treatment record was archived.'], 204);
    }

    public function archivelist()
    {
        $treatments = Treatment::onlyTrashed()->orderBy('id','desc')->get();

        if ($treatments->isEmpty()) {
            return response()->json(['message' => 'No pet treatment records was archived.'], 404);
        }
        
        return TreatmentResource::collection($treatments);
    }

    public function restore($id)
    {
        $treatment = Treatment::withTrashed()->findOrFail($id);
        $treatment->restore();
        return response("This Pet treatment record was restored successfully");
    }

    public function forcedelete(Treatment $treatment, $id)
    {
        $treatment = Treatment::withTrashed()->findOrFail($id);
        $treatment->forceDelete();
        return response("This pet treatment record was Permanently Deleted", 204);

    }
}
