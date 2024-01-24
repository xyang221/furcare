<?php

namespace App\Http\Controllers\Api;

use App\Models\Admission;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Http\Resources\AdmissionResource;
use App\Models\ClientService;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\Treatment;
use Carbon\Carbon;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::query()->orderBy('id', 'desc')->get();

        if ($admissions->isEmpty()) {
            return response()->json(['message' => 'No pet admission records found.'], 404);
        }

        return AdmissionResource::collection($admissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdmissionRequest $request, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->first();

        $data = $request->validated(); //get the data

        $data['date_admission'] = Carbon::now();
        $data['date_released'] = Carbon::now();
        $data['client_deposit_id'] = $clientService->id;
        $admission = Admission::create($data); //create
        return new AdmissionResource($admission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        return new AdmissionResource($admission);
    }

    public function showPetownerTreatments($id, $sid)
    {
        $service = Service::findOrFail($sid);
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->where('service_id', $service->id)
            ->pluck('id');

        $admission = Admission::whereIn('services_availed_id', $servicesAvailed)
            ->orderBy('id', 'desc')
            ->get();

        if ($admission->isEmpty()) {
            return response()->json(['message' => 'No list of pet admissions found.'], 404);
        }

        return AdmissionResource::collection($admission);
    }

    public function getClientAdmissions($id)
    {
        $clientService = ClientService::where('petowner_id', $id)->first();
        $admissions = Admission::where('client_deposit_id', $clientService->id)->get();

        if ($admissions->isEmpty()) {
            return response()->json(['message' => 'No admission records found in this client.'], 404);
        }
        return AdmissionResource::collection($admissions);
    }

    public function getPetAdmissions($id)
    {

        $admissions = Admission::where('pet_id', $id)->get();

        if ($admissions->isEmpty()) {
            return response()->json(['message' => 'No admission records found in this pet.'], 404);
        }
        return AdmissionResource::collection($admissions);
    }

    public function showTreatmentAdmission($id)
    {

        $admission = Admission::where('treatment_id', $id)->first();

        if (!$admission) {
            return response()->json(['message' => 'No admission record found in this treatment.'], 404);
        }
        return new AdmissionResource($admission);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        $data = $request->validated();
        $admission->update($data);

        return new AdmissionResource($admission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();
        return response()->json(['message' => 'This pet treatment record was archived.'], 204);
    }
}
