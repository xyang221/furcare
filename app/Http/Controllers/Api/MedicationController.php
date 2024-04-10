<?php

namespace App\Http\Controllers\Api;

use App\Models\Medication;
use App\Models\Treatment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicationRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateMedicationRequest;
use App\Http\Requests\UpdateServicesAvailedRequest;
use App\Http\Resources\MedicationResource;
use App\Models\ClientService;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;
use Carbon\Carbon;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medications = Medication::query()->orderBy('id', 'desc')->get();

        if ($medications->isEmpty()) {
            return response()->json(['message' => 'No pet medication records found.'], 404);
        }

        return MedicationResource::collection($medications);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicationRequest $request, $id, $tid)
    {
        $treatment = Treatment::findOrFail($tid);

        $medication = Medication::create([
            'date' => Carbon::now(),
            'dosage' => $request->input('dosage'),
            'description' => $request->input('description'),
            'treatment_id' => $treatment->id,
            'pet_id' => $treatment->pet_id,
            'medcat_id' => $request->input('medcat_id'),
            'medicine_name' => $request->input('medicine_name'),
            'am' =>  $request->input('am'),
            'pm' =>  $request->input('pm'),
        ]);

        return new MedicationResource($medication, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);
        return new MedicationResource($medication);
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
    public function update(UpdateMedicationRequest $request, $id)
    {
        $medication = Medication::findOrFail($id);
        $data = $request->validated();
        $medication->update($data);

        return response()->json(['message' => 'Medication updated successfully.'], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function archive(Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);
        $medication->forceDelete();
        return response()->json(['message' => 'The pet medication record within this treatment was deleted.'], 204);
    }

    public function archivelist()
    {
        $medications = Medication::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($medications->isEmpty()) {
            return response()->json(['message' => 'No pet medication records was archived.'], 404);
        }

        return MedicationResource::collection($medications);
    }

    public function restore($id)
    {
        $medication = Medication::withTrashed()->findOrFail($id);
        $medication->restore();
        return response("This Pet medication record was restored successfully");
    }

    public function forcedelete(Medication $medication, $id)
    {
        $medication = Medication::withTrashed()->findOrFail($id);
        $medication->forceDelete();
        return response("This pet medication record was Permanently Deleted", 204);
    }
}
