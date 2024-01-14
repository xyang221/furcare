<?php

namespace App\Http\Controllers\Api;

use App\Models\ServicesAvailed;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateServicesAvailedRequest;
use App\Http\Resources\ServicesAvailedResource;
use Illuminate\Support\Facades\Auth;

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
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesAvailedRequest $request, $id, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        if (!$clientService) {

            $petowner = PetOwner::findOrFail($id);
            $user = Auth::user();
            $staff = $user->staff;

            if ($staff) {
                $renderedby = "$staff->firstname . ' ' . $staff->lastname";
            } else {
                $renderedby = "Admin";
            }

            $newclientService = ClientService::create([
                'petowner_id' => $petowner->id,
                'deposit' => 0,
                'rendered_by' => $renderedby,
                'status' => "To Pay",
            ]);

            $clientService = $newclientService;
        }

        $requestData = $request->validated();

        $requestData['client_deposit_id'] = $clientService->id;
        $requestData['service_id'] = $service->id;
        $requestData['status'] = "To Pay";
        ServicesAvailed::create($requestData);
        return response()->json(['message' => 'Service availed was successfully saved.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicesAvailed $servicesAvailed)
    {
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function showAllPetownerServiceAvail($id,)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'This client have no services availed records found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetownerServiceAvail($id, $sid)
    {
        $service = Service::findOrFail($sid);
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->where('service_id', $service->id)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showServicesByClientDeposits($id)
    {
        $petowner = ClientService::findOrFail($id);
        $servicesAvailed = ServicesAvailed::where('client_deposit_id', $petowner->id)
            ->orderBy('pet_id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        // Assuming you're constructing ServicesAvailedResource with both services availed and petowner
        $data = [
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientdeposit' => $petowner, // Assuming $petowner needs to be returned along with services availed
        ];

        return response()->json($data);
    }


    public function showToPayServicesbyPetowner($id)
    {
        $status = 'To Pay';
        $clientServiceID = ClientService::where('petowner_id', $id)->where('status', $status)->pluck('id');
        $clientService = ClientService::findOrFail($clientServiceID)->first();
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientServiceID)
            ->where('status', $status)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        // return ServicesAvailedResource::collection($servicesAvailed);
        $data = [
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientdeposit' => $clientService, // Assuming $petowner needs to be returned along with services availed
        ];

        return response()->json($data);
    }

    public function showByPetownerChargeSlip($id)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $status = 'Completed';
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->where('status', $status)
            ->orderBy('pet_id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetServices($id)
    {
        $servicesAvailed = ServicesAvailed::where('pet_id', $id)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this pet found at the moment.'], 404);
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

        $clientService = ClientService::findOrFail($servicesAvailed->client_deposit_id);

        if ($clientService->status === "Completed") {
            $data['status'] = "Completed";
            $servicesAvailed->update($data);
            return new ServicesAvailedResource($servicesAvailed);
        }
    }

    public function archive($id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $servicesAvailed->delete();
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function archivelist()
    {
        return ServicesAvailedResource::collection(
            ServicesAvailed::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $servicesAvailed = ServicesAvailed::withTrashed()->findOrFail($id);
        $servicesAvailed->restore();
        return response("This service availed was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesAvailed $servicesAvailed)
    {
        $servicesAvailed->forceDelete();
        return response()->json("Service Availed Deleted", 204);
    }
}
