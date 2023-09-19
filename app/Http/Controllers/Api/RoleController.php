<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Resources\RoleResource;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RoleResource::collection( 
            Role::query()->orderBy('id','desc')->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $data = $request->validated(); //get the data
        $role = Role::create($data); //create user
        return new RoleResource($role, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return new RoleResource($role);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $data = $request->validated();
        $role->update($data);

        return new RoleResource($role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json("Role Deleted", 204);
    }
}
