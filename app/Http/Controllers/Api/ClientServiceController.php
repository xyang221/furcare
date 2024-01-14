<?php

namespace App\Http\Controllers\Api;

use App\Models\ClientService;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientServiceRequest;
use App\Http\Requests\UpdateClientServiceRequest;
use App\Http\Resources\ClientServiceResource;
use App\Http\Resources\ServicesAvailedResource;
use App\Models\ServicesAvailed;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ClientServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientService = ClientService::query()->orderBy('id', 'desc')->get();
        return ClientServiceResource::collection($clientService);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientServiceRequest $request, $id)
    {
        $petowner = PetOwner::find($id);

        $verifyclientService = ClientService::where('petowner_id', $petowner->id)
            ->where('status', 'To Pay')
            ->first();


        if ($verifyclientService) {
            return response()->json(['message' => 'This client had already services availed.'], 403);
        } else {

            $data = $request->validated(); //get the data

            $data['petowner_id'] = $petowner->id;

            $user = Auth::user();
            $staff = $user->staff;

            if ($staff) {
                $renderedby = "$staff->firstname $staff->lastname";
            } else {
                $renderedby = "Admin";
            }

            $data['rendered_by'] = $renderedby;
            $data['status'] = "To Pay";
            ClientService::create($data);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();
        return new ClientServiceResource($clientService);
    }

    public function showClientdeposit( $id)
    {
        $clientService = ClientService::findOrFail($id);
        return new ClientServiceResource($clientService);
    }

    public function showall(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->orderBy('id', 'desc')->get();

        if ($clientService->isEmpty()) {
            return response()->json(['message' => 'No payments found in this client.'], Response::HTTP_NOT_FOUND);
        }

        return ClientServiceResource::collection($clientService);
    }

    public function showallServicesCompleted($id)
    {
        $clientService = ClientService::findOrFail($id);
        $servicesAvailed = ServicesAvailed::where('client_deposit_id', $id)->orderBy('pet_id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed yet.'], Response::HTTP_NOT_FOUND);
        }

        return [
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientservice' => new ClientServiceResource($clientService),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientServiceRequest $request, ClientService $clientService, $id)
    {
        $clientService = ClientService::findOrFail($id);
        $data = $request->validated();

        if ($data['balance'] === 0) {
            $data['status'] = "Completed";
        } else {
            $data['balance'] = $request->input('balance') + $clientService->balance;
        }
        $clientService->update($data);
        return new ClientServiceResource($clientService);
    }

    public function updateDeposit(UpdateClientServiceRequest $request, ClientService $clientService, $id)
    {
        $clientService = ClientService::findOrFail($id);
        $data = $request->validated();
        $clientService->update($data);
        return new ClientServiceResource($clientService);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientService $clientService)
    {
        $clientService->delete();
        return response()->json("client service Deleted");
    }
}
