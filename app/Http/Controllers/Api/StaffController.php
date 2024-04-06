<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaffRequest;
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

        $staffs = Staff::query()->orderBy('id', 'desc')->get();

        if ($staffs->isEmpty()) {
            return response()->json(['message' => 'No staff records found.'], 404);
        }
        return StaffResource::collection($staffs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $sreq, StoreUserRequest $ureq)
    {
        // Create a new user.
        $lastname = $sreq->input('lastname');

        $email = $ureq->input('email');
        $password = strtolower($lastname) . '1234';

        if (!$email) {
            $email = strtolower($lastname) . '@gmail.com';

            $count = User::where('email', $email)->count(); //recheck

            while ($count > 0) {
                $email = $lastname . rand(1, 9999) . '@gmail.com';
                $count = User::where('email', $email)->count();
            }
        }

        $user = User::create([
            'role_id' => 2,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $staff = Staff::create([
            'user_id' => $user->id,
            'firstname' => $sreq->input('firstname'),
            'lastname' => $sreq->input('lastname'),
            'contact_num' => $sreq->input('contact_num'),
            'zipcode_id' => $sreq->input('zipcode_id'),
            'barangay' => $sreq->input('barangay'),
            'zone' => $sreq->input('zone'),

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
