<?php

namespace App\Http\Controllers\Api;

use App\Models\ServicesAvailed;
use App\Models\PetOwner;
use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateServicesAvailedRequest;
use App\Http\Resources\ServicesAvailedResource;

use Illuminate\Support\Str;
use Carbon\Carbon;

class ServicesAvailedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ServicesAvailedResource::collection(
            ServicesAvailed::query()
                ->orderBy('id', 'desc')
                ->paginate(50)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreServicesAvailedRequest $request)
    // {
    //     $data = $request->validated(); //get the data
    //     $servicesAvailed = ServicesAvailed::create($data); 
    //     return new ServicesAvailedResource($servicesAvailed, 201);
    // }


    public function store(StoreServicesAvailedRequest $request, $id, $petid)
    {
        $petowner = PetOwner::findOrFail($id);
        $pet = Pet::findOrFail($petid);
        $requestData = $request->validated();
    
        $maxAttempts = 5; // Maximum attempts to generate a unique ref_id
    
        // Attempt to generate a unique ref_id
        for ($i = 0; $i < $maxAttempts; $i++) {
            $refId = Carbon::now()->timestamp . '-' . Str::random(6); // Change the length of the random string as needed
    
            $existingService = ServicesAvailed::where('ref_id', $refId)->first();
    
            if (!$existingService) {
                $refIdExists = false;
    
                // Loop through each service in the request data
                foreach ($requestData['services'] as $service) {
                    $service['ref_id'] = $refId;
                    $service['date_availed_for'] = Carbon::now();
                    $service['petowner_id'] = $petowner->id;
                    $service['pet_id'] = $pet->id;
    
                    // Create service with the same ref_id
                    ServicesAvailed::create($service);
                }
    
                $refIdExists = true;
                break;
            }
        }
    
        // If maximum attempts reached without a unique ref_id, handle accordingly
        if (!isset($refIdExists) || !$refIdExists) {
            // Handle the situation where a unique ref_id couldn't be generated
            return response()->json(['error' => 'Unable to generate a unique ref_id'], 500);
        }
    
        return response()->json(['message' => 'Services added successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicesAvailed $servicesAvailed)
    {
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function showByPetowner($id)
    {
        $servicesAvaileds = ServicesAvailed::where('petowner_id', $id)->get();

        if ($servicesAvaileds->isEmpty()) {
            return response()->json(['message' => 'No charge slips of this client found'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvaileds);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesAvailedRequest $request, ServicesAvailed $servicesAvailed)
    {
        $data = $request->validated();
        $servicesAvailed->update($data);
        return new ServicesAvailedResource($servicesAvailed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesAvailed $servicesAvailed)
    {
        $servicesAvailed->delete();
        return response()->json("Services Availed Receipt Deleted", 204);
    }
}
