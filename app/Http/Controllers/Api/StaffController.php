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

        return StaffResource::collection( 
            Staff::query()->orderBy('id','desc')->paginate(50)
        );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $sreq, StoreAddressRequest $addrequest, StoreUserRequest $ureq)
{
    // Create a new user.
    $user = User::create([
        'role_id' =>2,
        'username' => $ureq->input('username'),
        'email' => $ureq->input('email'),
        'password' => Hash::make($ureq->input('password')),
    ]);
  
    $address = Address::create([
        'zipcode_id' => $addrequest->input('zipcode_id'),
        'barangay' => $addrequest->input('barangay'),
        'zone' => $addrequest->input('zone'),
    ]);

    $staff = Staff::create([
        'user_id' => $user->id,
        'firstname' => $sreq->input('firstname'),
        'lastname' => $sreq->input('lastname'),
        'contact_num' => $sreq->input('contact_num'),
        'address_id' => $address->id,
        
    ]);
    return new StaffResource($staff, 201);
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $staff = Staff::find($id);
        return new StaffResource($staff);
    }

    public function archive($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return new StaffResource($staff);
     
    }

    public function archivelist()
    {
        $staffs = Staff::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($staffs->isEmpty()) {
            return response()->json(['message' => 'No staff archives found.'], 404);
        }

        return StaffResource::collection($staffs);
    }

    public function restore($id)
    {
        $staff = Staff::withTrashed()->findOrFail($id);
        $staff->restore();
        return response("Staff was restored successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $data = $request->validated();
        $staff->update($data);
        return new StaffResource($staff);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff, $id)
    {
        $staff = Staff::withTrashed()->findOrFail($id);
        $staff->forceDelete();
        return response("Permanently Deleted", 204);
    }
}
