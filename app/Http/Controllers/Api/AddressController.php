<?php

namespace App\Http\Controllers\Api;

use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Resources\AddressResource;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AddressResource::collection( 
            Address::query()->orderBy('id','desc')->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAddressRequest $request)
    {
        $data = $request->validated(); //get the data
        $address = Address::create($data); //create user

        return new AddressResource($address, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $data = $request->validated();
        $address->update($data);

        return new AddressResource($address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        // return response()->json(null, 204);
        return response()->json("pet Deleted");

    }
}
