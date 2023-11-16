<?php

namespace App\Http\Controllers\Api;

use App\Models\Against;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgainstRequest;
use App\Http\Requests\UpdateAgainstRequest;
use App\Http\Resources\AgainstResource;


class AgainstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $against = Against::query()->orderBy('id', 'desc')->paginate(50);

        return AgainstResource::collection($against);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgainstRequest $request)
    {
        $data = $request->validated(); //get the data
        $against = Against::create($data); //create user
        return new AgainstResource($against, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Against $against)
    {
        return new AgainstResource($against);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgainstRequest $request, Against $against)
    {
        $data = $request->validated();
        $against->update($data);

        return new AgainstResource($against);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Against $against)
    {
        $against->delete();
        return response()->json("Vaccination Against Deleted", 204);
    }
}
