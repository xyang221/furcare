<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\PetOwner;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\PetOwnerResource;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $petOwner = PetOwner::get();

        // $petOwners = PetOwner::with(['user', 'address'])->orderBy('id', 'desc')->paginate(10);

        // return PetOwnerResource::collection($petOwners);

        return PetOwnerResource::collection( 
            PetOwner::query()->orderBy('id','desc')->paginate(10)
        );

        
    }

    // public function createuser(StoreUserRequest $request)
    // {
    //     $data = $request->validated(); //get the data
    //     $data['password'] = bcrypt($data['password']); //encypt the password
    //     $user = User::create($data); //create user
    //     // return response(new UserResource($user), 201);
    //     return new UserResource($user, 201);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $request)
    {
        $data = $request->validated(); //get the data
        // $user = User::create($data);
        $user = User::findOrFail($data->user_id);
        $data['user_id'] = $user->id;
        $petOwner = PetOwner::create($data); //create user
        
        // return new UserResource($user, 201);
        return new PetOwnerResource($petOwner, 201);

        // return response()->json('store');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(PetOwner $petOwner, $id)
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
        // return response()->json('updated');

        return new PetOwnerResource($petOwner);
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