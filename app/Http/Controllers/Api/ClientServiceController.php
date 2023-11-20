<?php

namespace App\Http\Controllers\Api;

use App\Models\ClientService;
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
        $clientService = ClientService::query()->orderBy('id', 'desc')->paginate(50);
        return ClientServiceResource::collection($clientService);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientServiceRequest $request)
    {
        $data = $request->validated(); //get the data
        // $data['date'] = Carbon::now()->format('Y-m-d H:i:s');
        // $data['date'] = (string)$data['date'];
        $clientService = ClientService::create($data); //create user
        return new ClientServiceResource($clientService, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientService $clientService, $id)
    {
        $clientService = ClientService::find($id);
        return new ClientServiceResource($clientService);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientServiceRequest $request, ClientService $clientService)
    {
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
        // return response()->json(null, 204);
        return response()->json("client service Deleted");
    }
}
