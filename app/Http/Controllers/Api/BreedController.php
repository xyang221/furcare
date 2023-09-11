<?php

namespace App\Http\Controllers\Api;

use App\Models\Breed;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use App\Http\Resources\BreedResource;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return BreedResource::collection( 
            Breed::query()->orderBy('id','desc')->paginate(10)
        );

        // $breed = Breed::with('specie')->orderBy('id', 'desc')->paginate(10);

        // return BreedResource::collection($breed);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        $data = $request->validated(); //get the data
        $breed = Breed::create($data); //create user
        return new BreedResource($breed, 201);
        // return response()->json('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        return new BreedResource($breed);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $data = $request->validated();
        $breed->update($data);

        return new BreedResource($breed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        $breed->delete();
        // return response()->json(null, 204);
        return response()->json("breed Deleted");
    }
}
