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
            Breed::query()->orderBy('id', 'desc')->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        $data = $request->validated(); //get the data
        $breed = Breed::create($data);
        return new BreedResource($breed, 201);
    }

    public function getBreeds($id)
    {
        try {
            $sanitized_name = trim($id); // Trim whitespace from the input

            // Perform search
            $breeds = Breed::where('specie_id', '=', $sanitized_name)
                ->orderBy('breed') // Assuming 'name' is the column you want to order alphabetically
                ->get();


            // Check if any results are found
            if ($breeds->isEmpty()) {
                return response()->json(['message' => 'No breeds found.'], 404);
            }

            // Return the resource collection
            return BreedResource::collection($breeds);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for pets.'], 500);
        }
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
        return response("This breed was permanently deleted");
    }
}
