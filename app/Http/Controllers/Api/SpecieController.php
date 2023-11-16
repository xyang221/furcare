<?php

namespace App\Http\Controllers\Api;

use App\Models\Specie;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpecieRequest;
use App\Http\Requests\UpdateSpecieRequest;
use App\Http\Resources\SpecieResource;

class SpecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $species = Specie::orderBy('id', 'desc')->paginate(50);

        return SpecieResource::collection($species);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecieRequest $request)
    {
        $data = $request->validated(); //get the data
        $specie = Specie::create($data); //create
        return new SpecieResource($specie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Specie $specie, $id)
    {
        $specie = Specie::findOrFail($id);
        return new SpecieResource($specie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecieRequest $request, Specie $specie, $id)
    {
        $specie = Specie::findOrFail($id);
        $data = $request->validated();
        $specie->update($data);

        return new SpecieResource($specie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specie $specie)
    {
        $specie->delete();
        return response()->json("Specie Deleted", 204);
    }
}
