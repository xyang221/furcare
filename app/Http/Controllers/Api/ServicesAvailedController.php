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
        
        $requestData['petowner_id'] = $petowner->id;
        $servicesAvailed = ServicesAvailed::create($data); 
        return new ServicesAvailedResource($servicesAvailed, 201);
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
