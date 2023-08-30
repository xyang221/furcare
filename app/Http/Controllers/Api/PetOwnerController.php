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
        // return response()->json("PetOwner Index");

        // return PetOwnerResource::collection(PetOwner::paginate(1)); 
        $petOwner = PetOwner::with('address')->get();
        $petOwner = Address::with('zipcode')->get();
        

        return PetOwnerResource::collection( 
            PetOwner::query()->orderBy('id','desc')->paginate(10)
        );

        // $petOwner = PetOwner::with('address')->get();
        // return response()->json($petOwner);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $request)
    {
        // PetOwner::create($request->validated());
        // return response()->json("PetOwner Created");

        $data = $request->validated(); //get the data
        $petOwner = PetOwner::create($data); //create user
        // return response(new UserResource($user), 201);
        return new UserResource($petOwner, 201);


        // $data = $request->validate(); //get the data
        // $data['password'] = bcrypt($data['password']); //encypt the password
        // $petOwner = PetWoner::create($data); //create user
        // return response(new UserResource($petOwner), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PetOwner $petOwner)
    {
        // return $petOwner;
        return new PetOwnerResource($petOwner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetOwnerRequest $request, PetOwner $petOwner)
    {
        // $petOwner->update($request->validated());
        // return response()->json("PetOwner Updated");


        // $data = $request->validated();
        // //check
        // if (isset($data['password'])) {
        //     $data['password'] = bcrypt($data['password']);
        // }
        $data = $request->validated();
        $petOwner->update($data);

        return new PetOwnerResource($petOwner);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetOwner $petOwner)
    {
        $petOwner->delete();
        return response()->json("PetOwner Deleted");

        // return response("", 204);
    }
}
