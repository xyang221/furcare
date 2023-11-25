<?php

namespace App\Http\Controllers\Api;

use App\Models\Diagnosis;
use App\Models\Pet;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ClientService;
use App\Models\ServicesAvailed;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\UpdateDiagnosisRequest;
use App\Http\Resources\DiagnosisResource;

use App\Http\Requests\StoreServicesAvailedRequest;


class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosis = Diagnosis::query()->orderBy('id', 'desc')->paginate(50);

        return DiagnosisResource::collection($diagnosis);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiagnosisRequest $request, StoreServicesAvailedRequest $sarequest, $id, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $id)->first();

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_service_id'=> $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $diagnosis = Diagnosis::create([
            'pet_id' => $servicesAvailed->pet_id,
            'remarks' =>$request->input('remarks'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new DiagnosisResource($diagnosis, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis)
    {
        return new DiagnosisResource($diagnosis);
    }

    public function getbyPet($id)
    {
        
        $diagnosis = Pet::where('pet_id', $id)->get();

        if ($diagnosis->isEmpty()) {
            return response()->json(['message' => 'No list of diagnosis found.'], 404);
        }

        return DiagnosisResource::collection($diagnosis);
    }


    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');
        
        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_service_id', $clientServiceIds)
            ->where('service_id',$servicesAvailedIds->id)
            ->pluck('id');
        
        $diagnosis = Diagnosis::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();
                    
        if ($diagnosis->isEmpty()) {
            return response()->json(['message' => 'No list of pet diagnosis found.'], 404);
        }
        
        return DiagnosisResource::collection($diagnosis);
        
    }

    


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosisRequest $request, Diagnosis $diagnosis)
    {
        $data = $request->validated();
        $diagnosis->update($data);

        return new DiagnosisResource($diagnosis);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->delete();
        return response()->json("Diagnosis was archived", 204);
    }
}
