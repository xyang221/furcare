<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\PetOwner;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Requests\UpdateAddressRequest;
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
    public function store(StorePetOwnerRequest $request, $userID)
    {
        $data = $request->validated(); //get the data
        // $user = User::create($data);
        $user = User::findOrFail($userID);
        $data['user_id'] = $user->id;
        $petOwner = PetOwner::create($data); //create user
        
        
        // return new UserResource($user, 201);
        return new PetOwnerResource($petOwner, 201);

        // return response()->json('store');
    }

    public function register(StorePetOwnerRequest $porequest, StoreAddressRequest $addrequest, $userID)
{
    // Validate user registration data here.
    //get the data
    // $user = User::create($data);
    $user = User::findOrFail($userID);

    // Create a new user.
  
    $address = Address::create([
        'zipcode_id' => $addrequest->input('zipcode_id'),
        'barangay' => $addrequest->input('barangay'),
        'zone' => $addrequest->input('zone'),
    ]);

    // Create a pet owner associated with the user.
    $petOwner = PetOwner::create([
        'user_id' => $user->id,
        'firstname' => $porequest->input('firstname'),
        'lastname' => $porequest->input('lastname'),
        'contact_num' => $porequest->input('contact_num'),
        'address_id' => $address->id,
        
        // Add other pet owner information as needed.
    ]);
    return new PetOwnerResource($petOwner, 201);

    // return response()->json("payttsss");

    // Return a response or token for the registered user.
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
    public function update(UpdatePetOwnerRequest $porequest, UpdateAddressRequest $addrequest, PetOwner $petOwner)
    {
        // $data = $request->validated();
        // $petOwner->update($data);
        // return response()->json('updated');
        $address = Address::update([
            'zipcode_id' => $addrequest->input('zipcode_id'),
            'barangay' => $addrequest->input('barangay'),
            'zone' => $addrequest->input('zone'),
        ]);
    
        // Create a pet owner associated with the user.
        $petOwner = PetOwner::update([
            'firstname' => $porequest->input('firstname'),
            'lastname' => $porequest->input('lastname'),
            'contact_num' => $porequest->input('contact_num'),
            
            // Add other pet owner information as needed.
        ]);

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
