<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\PetOwner;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\PetOwnerResource;

use Illuminate\Support\Facades\Hash;

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

        // return PetOwnerResource::collection( 
        //     PetOwner::query()->orderBy('id','desc')->paginate(10)
        // );

        return PetOwnerResource::collection(
            PetOwner::query()
                ->whereNotNull('user_id')
                ->orderBy('id', 'desc')
                ->paginate(10),
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $porequest, StoreAddressRequest $addrequest, StoreUserRequest $ureq)
{
    // Create a new user.
    $user = User::create([
        'role_id' =>$ureq->input('role_id'),
        'username' => $ureq->input('username'),
        'email' => $ureq->input('email'),
        'password' => Hash::make($ureq->input('password')),
    ]);
  
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
