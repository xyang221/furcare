<?php

namespace App\Http\Controllers\Api;

use App\Models\Staff;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Resources\StaffResource;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::with('address')->orderBy('id', 'desc')->paginate(10);

        return StaffResource::collection($staff);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $request)
    {
        $data = $request->validated(); //get the data
        $staff = Staff::create($data); //create user
        // return new PetOwnerResource($petOwner, 201);
        return response()->json('store');
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
