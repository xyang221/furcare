<?php

namespace App\Http\Controllers\Api;

use App\Models\Pet;
use App\Models\PetOwner;
use App\Models\Breed;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Resources\PetResource;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $pet = Pet::get();

        $pet = Pet::with(['petowner', 'breed'])->orderBy('id', 'desc')->paginate(10);

        // $petOwner = PetOwner::find($id);
        // $pet = $petOwner->pets;
       
        // return new PetResource($pet);
        return PetResource::collection($pet);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        $data = $request->validated(); //get the data
        $pet = Pet::create($data); //create pet
        return new PetResource($pet, 201);
        // return response()->json('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet )
    {
        // $petOwner = PetOwner::find($id);
        // $pet = $petOwner->pets;
        // return new PetResource($pet);

        // $pet = PetOwner::with('pets.petowner')->find($id);
        // $pets = $petOwner->pets;

        return new PetResource($pet);

        // return response()->json(['success' => true, 'data' => $pets]);
    }

    public function getPetOwnersPet($ownerId)
    {
        $pets = Pet::where('petowner_id', $ownerId)->get();
        // return response()->json($pets);
        return response()->json(['success' => true, 'data' => $pets]);
        // return new PetResource($pet, 201);
    }

    


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        $data = $request->validated();
        $pet->update($data);

        return new PetResource($pet);
        // return response()->json('updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        // return response()->json(null, 204);
        return response()->json("pet Deleted");

    }
}
