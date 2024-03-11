<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\ClientService;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\Treatment;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->orderBy('id', 'desc')->get();

        if ($products->isEmpty()) {
            return response()->json(['message' => 'No product records found.'], 404);
        }

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, StoreServicesAvailedRequest $sarequest, $id, $tid)
    {
        $treatment = Treatment::findOrFail($tid);
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        $servicesAvailed = ServicesAvailed::create([
            'date' => Carbon::now(),
            'service_id' => 18,
            'unit' => $sarequest->input('unit'),
            'unit_price' => $sarequest->input('unit_price'),
            'quantity' => $sarequest->input('quantity'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $treatment->pet_id,
            'status' => "To Pay",
        ]);

        $product = Product::create([
            'date' => Carbon::now(),
            'quantity' => $servicesAvailed->quantity,
            'name' => $request->input('name'),
            'unit' => $request->input('unit'),
            'treatment_id' => $treatment->id,
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new ProductResource($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }

    public function showPetownerMedication($id, $sid)
    {
        $petowner = PetOwner::findOrFail($id);
        $service = Service::findOrFail($sid);
        $clientdeposit = ClientService::where('petowner_id', $petowner->id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientdeposit)
            ->where('service_id', $service->id)
            ->pluck('id');

        $medications = Medication::whereIn('services_availed_id', $servicesAvailed)
            ->orderBy('id', 'desc')
            ->get();

        if ($medications->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        return MedicationResource::collection($medications);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
