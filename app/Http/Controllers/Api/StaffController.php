<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use App\Models\Address;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Resources\StaffResource;

use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $staff = Staff::with('address')->orderBy('id', 'desc')->paginate(10);

        // return StaffResource::collection($staff);

        return StaffResource::collection( 
            Staff::query()->orderBy('id','desc')->paginate(10)
        );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $sreq, StoreAddressRequest $addrequest, StoreUserRequest $ureq)
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
    $staff = Staff::create([
        'user_id' => $user->id,
        'firstname' => $sreq->input('firstname'),
        'lastname' => $sreq->input('lastname'),
        'contact_num' => $sreq->input('contact_num'),
        'address_id' => $address->id,
        
        // Add other pet owner information as needed.
    ]);
    return new StaffResource($staff, 201);
}

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return new StaffResource($staff);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $data = $request->validated();
        $staff->update($data);
        return response()->json('updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return response()->json(null, 204);
    }
}
