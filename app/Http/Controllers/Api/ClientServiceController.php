<?php

namespace App\Http\Controllers\Api;

use App\Models\ClientService;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientServiceRequest;
use App\Http\Requests\UpdateClientServiceRequest;
use App\Http\Resources\ClientServiceResource;
use Illuminate\Http\Response;
use Carbon\Carbon;

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
        $data = $request->validated(); //get the data
        
        $data['petowner_id'] = $id;
        $data['status'] = "To Pay";
        $clientService = ClientService::create($data); //create user
        return new ClientServiceResource($clientService, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->first();
        return new ClientServiceResource($clientService);
    }

    public function showall(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->get();
        return ClientServiceResource::collection($clientService);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientServiceRequest $request, ClientService $clientService)
    {
        $data = $request->validated();

        if($data['balance'] === 0){
            $data['status'] = "Completed";
        } else {
            return response()->json(['message' => 'This client have balance left.']);
        }
       
        $clientService->update($data);

        return new ClientServiceResource($clientService);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientService $clientService)
    {
        $clientService->delete();
        // return response()->json(null, 204);
        return response()->json("client service Deleted");
    }
}
