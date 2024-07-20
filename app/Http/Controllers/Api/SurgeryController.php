<?php

namespace App\Http\Controllers\Api;

use App\Models\Surgery;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\StoreSurgeryRequest;
use App\Http\Requests\UpdateSurgeryRequest;
use App\Http\Resources\SurgeryResource;
use App\Models\ClientService;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surgery = Surgery::query()->orderBy('id', 'desc')->get();

        return SurgeryResource::collection($surgery);
    }

    public function getSurgerybyDate($id, $date)
    {
        $timestamp = strtotime($date);

        $surgery = Surgery::where('pet_id', $id)
            ->whereDate('date', '=', date('Y-m-d', $timestamp))
            ->get();

        if ($surgery->isEmpty()) {
            return response()->json(['message' => 'No list of surgery found for this pet within this date.'], 404);
        }

        return SurgeryResource::collection($surgery);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSurgeryRequest $request, StoreServicesAvailedRequest $sarequest, $id)
    {
        // $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        if (!$clientService) {
            return response()->json(['message' => 'No client deposit was recorded to proceed for treatment. '], 403);
        }

        $findservice = Service::where('service',  $request->input('procedure'))->first();
        if (!$findservice) {
            $service = Service::create([
                'service' => $request->input('procedure'),
                'cat_id' => 13,
                'isAvailable' => 1,
            ]);
        }

        $servicesAvailed = ServicesAvailed::create([
            'date' => Carbon::now(),
            'service_id' => $service->id,
            'unit' => 'head',
            'unit_price' => $sarequest->input('unit_price'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $diagnosis = Surgery::create([
            'date' => Carbon::now(),
            'pet_id' => $servicesAvailed->pet_id,
            'procedure' => $request->input('procedure'),
            'chart_num' => $request->input('chart_num'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new SurgeryResource($diagnosis, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Surgery $surgery,$id)
    {
        $surgery = Surgery::findOrFail($id);
        return new SurgeryResource($surgery);
    }

    public function getbyPet($id)
    {

        $surgery = Surgery::where('pet_id', $id)->get();

        if ($surgery->isEmpty()) {
            return response()->json(['message' => 'No list of pet surgery found.'], 404);
        }

        return SurgeryResource::collection($surgery);
    }

    public function getSurgeryByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $surgery = Surgery::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($surgery->isEmpty()) {
            return response()->json(['message' => 'No list of pet surgery found.'], 404);
        }

        return SurgeryResource::collection($surgery);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurgeryRequest $request, Surgery $surgery,$id)
    {
        $surgery = Surgery::findOrFail($id);

        $data = $request->validated();
        $surgery->update($data);

        return new SurgeryResource($surgery);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surgery $surgery,$id)
    {
        $surgery = Surgery::findOrFail($id);
        $service = ServicesAvailed::findOrFail($surgery->services_availed_id);
        $surgery->forceDelete();
        $service->forceDelete();
        return response()->json("Surgery was deleted", 204);
    }
}
