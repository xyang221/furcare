<?php

namespace App\Http\Controllers\Api;

use App\Models\Zipcode;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreZipcodeRequest;
use App\Http\Requests\UpdateZipcodeRequest;
use App\Http\Resources\ZipcodeResource;

class ZipcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ZipcodeResource::collection(
            Zipcode::query()->orderBy('id')->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreZipcodeRequest $request)
    {
        $data = $request->validated(); //get the data
        $zipcode = Zipcode::create($data); //create user
        return new ZipcodeResource($zipcode, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Zipcode $zipcode)
    {
        return new ZipcodeResource($zipcode);
    }

    public function getZipcodeDetails($zipcode)
    {
        try {
            // Trim whitespace from the input
            $sanitized_name = trim($zipcode);

            // Perform search
            $zipcodedetails = Zipcode::where('zipcode', '=', $sanitized_name)->first();

            // Check if any results are found
            if (!$zipcodedetails) {
                return response()->json(['message' => 'Zipcode is invalid or not found.'], 404);
            }

            return new ZipcodeResource($zipcodedetails);
            // return ZipcodeResource::collection($zipcode);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for zipcodes.'], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZipcodeRequest $request, Zipcode $zipcode)
    {
        $data = $request->validated();
        $zipcode->update($data);

        return new ZipcodeResource($zipcode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zipcode $zipcode)
    {
        //
    }
}
