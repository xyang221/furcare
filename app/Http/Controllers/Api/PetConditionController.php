<?php

namespace App\Http\Controllers\Api;

use App\Models\PetCondition;
use App\Models\Treatment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetConditionRequest;
use App\Http\Requests\UpdatePetConditionRequest;
use App\Http\Resources\PetConditionResource;

use Carbon\Carbon;

class PetConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petConditions = PetCondition::query()->orderBy('id', 'desc')->get();

        if ($petConditions->isEmpty()) {
            return response()->json(['message' => 'No pet condition records found.'], 404);
        }
        
        return PetConditionResource::collection($petConditions);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetConditionRequest $request, $id)
    {
        $treatment = Treatment::findOrFail($id);
        $data = $request->validated(); //get the data

        // $today = Carbon::now()->toDateString();
        // $data['date'] = $today;
        $data['treatment_id'] = $id;

        $petCondition = PetCondition::create($data); //create
        return new PetConditionResource($petCondition, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PetCondition $petCondition)
    {
        // $petCondition = PetCondition::findOrFail($id);
        return new PetConditionResource($petCondition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetConditionRequest $request, PetCondition $petCondition)
    {
        // $petCondition = PetCondition::findOrFail($id);
        $data = $request->validated();
        $petCondition->update($data);

        return new PetConditionResource($petCondition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetCondition $petCondition)
    {
        $petCondition->delete();
        return response()->json(['message' => 'The pet condition record within this treatment was archived.'], 204);
    }

    public function archivelist()
    {
        $petConditions = PetCondition::onlyTrashed()->orderBy('id','desc')->get();

        if ($petConditions->isEmpty()) {
            return response()->json(['message' => 'No pet conditon records was archived.'], 404);
        }
        
        return PetConditionResource::collection($petConditions);
    }

    public function restore($id)
    {
        $petCondition = PetCondition::withTrashed()->findOrFail($id);
        $petCondition->restore();
        return response("This Pet Condition record was restored successfully");
    }

    public function forcedelete(PetCondition $petCondition, $id)
    {
        $petCondition = PetCondition::withTrashed()->findOrFail($id);
        $petCondition->forceDelete();
        return response("This pet condition record was Permanently Deleted", 204);

    }
}
