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

        $pet = Pet::get();

        // $petOwners = PetOwner::with(['user', 'address'])->orderBy('id', 'desc')->paginate(10);

        return PetResource::collection($pet);

        // $pet = Pet::with(['petowner', 'breed'])->orderBy('id', 'desc')->paginate(10);

        // return PetResource::collection($pet);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        $data = $request->validated(); //get the data
        $pet = Pet::create($data); //create user
        // return new PetOwnerResource($petOwner, 201);
        return response()->json('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet, $id)
    {
        $petOwner = PetOwner::find($id);
        $pet = $petOwner->pets;
        return new PetResource($pet);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        $data = $request->validated();
        $pet->update($data);
        return response()->json('updated');

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
