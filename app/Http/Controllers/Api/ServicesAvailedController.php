<?php

namespace App\Http\Controllers\Api;

use App\Models\ServicesAvailed;
use App\Models\PetOwner;
use App\Models\Pet;
use App\Models\Service;
use App\Models\ClientService;
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
    public function store(StoreServicesAvailedRequest $request, $id, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $id)->first();
        $requestData = $request->validated();
        
        $requestData['client_service_id'] = $clientService->id;
        $requestData['service_id'] = $service->id;
        $requestData['status'] = "To Pay";
        $servicesAvailed = ServicesAvailed::create($requestData); 
        return new ServicesAvailedResource($servicesAvailed, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicesAvailed $servicesAvailed)
    {
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function showByPetownerServiceAvail($id, $sid)
    {
        $service = Service::findOrFail($sid);
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_service_id', $petowner)
        ->where('service_id', $service->id)
        ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetownerBilling($id)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $status = 'To Pay';
        $servicesAvailed = ServicesAvailed::whereIn('client_service_id', $petowner)
        ->where('status', $status)
        ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetownerChargeSlip($id)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $status = 'Completed';
        $servicesAvailed = ServicesAvailed::whereIn('client_service_id', $petowner)
        ->where('status', $status)
        ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesAvailedRequest $request, ServicesAvailed $servicesAvailed, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $data = $request->validated();
        $data['status'] = "Completed";
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
