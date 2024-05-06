<?php

namespace App\Http\Controllers\Api;

use App\Models\PetStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetStatusRequest;
use App\Http\Requests\UpdatePetStatusRequest;
use App\Http\Resources\PetStatusResource;
use App\Models\Pet;
use Carbon\Carbon;
use Illuminate\Http\Response;

class PetStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petStatus = PetStatus::orderBy('id', 'desc')->get();

        if ($petStatus->isEmpty()) {
            return response()->json(['message' => 'No pet status found.'], Response::HTTP_NOT_FOUND);
        }

        return PetStatusResource::collection($petStatus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetStatusRequest $request,$id)
    {
        $pet = Pet::findOrFail($id);
        $data = $request->validated(); //get the data

        $data['pet_id'] = $pet->id;
        $petStatus = PetStatus::create($data);
        $data = [
            'date' => Carbon::now(),
        ];
        return new PetStatusResource($petStatus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PetStatus $petStatus)
    {
        //
    }

    public function getPetStatus($id)
    {

        $petStatus = PetStatus::where('pet_id', $id)->get();

        if ($petStatus->isEmpty()) {
            return response()->json(['message' => 'No pet status found.'], 404);
        }
        return PetStatusResource::collection($petStatus);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetStatusRequest $request, PetStatus $petStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetStatus $petStatus)
    {
        //
    }
}
