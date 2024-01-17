<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServiceResource;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::query()
            ->orderBy('cat_id', 'asc') 
            ->get();

        return ServiceResource::collection($services);
    }

    public function noothertestresults()
    {
        $services = Service::whereNotIn('service', ['EHRLICHIA', 'ANAPLASMA', 'HEARTWORM', 'LYME DISEASE'])
            ->orderBy('id', 'asc')
            ->get();

        return ServiceResource::collection($services);
    }


    public function othertestresults()
    {
        $services = Service::whereIn('service', ['4DX', 'EHRLICHIA', 'ANAPLASMA', 'HEARTWORM', 'LYME DISEASE'])->get();

        return ServiceResource::collection($services);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated(); //get the data
        $service = Service::create($data); //create user
        return new ServiceResource($service, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return new ServiceResource($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return new ServiceResource($service);
    }

    public function serviceAvailable($id)
    {
        $service = Service::findOrFail($id);

        $service->isAvailable = !$service->isAvailable;
        $service->save();
        return new ServiceResource($service);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json("Service Deleted");
    }
}
