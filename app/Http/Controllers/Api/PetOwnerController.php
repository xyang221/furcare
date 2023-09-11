<?php

namespace App\Http\Controllers\Api;

use App\Models\PetOwner;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Resources\PetOwnerResource;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $petOwner = PetOwner::get();

        // $petOwners = PetOwner::with(['user', 'address'])->orderBy('id', 'desc')->paginate(10);

        return PetOwnerResource::collection($petOwner);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $request)
    {
        $data = $request->validated(); //get the data
        $petOwner = PetOwner::create($data); //create user
        // return new PetOwnerResource($petOwner, 201);
        return response()->json('store');

    }

    /**
     * Display the specified resource.
     */
    public function show(PetOwner $petOwner,$id)
    {
        $petOwner = PetOwner::find($id);
        return new PetOwnerResource($petOwner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetOwnerRequest $request, PetOwner $petOwner)
    {
        $data = $request->validated();
        $petOwner->update($data);
        return response()->json('updated');

        // return new PetOwnerResource($petOwner);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetOwner $petOwner)
    {
        $petOwner->delete();
        // return response()->json(null, 204);
        return response()->json("PetOwner Deleted");

    }
}
