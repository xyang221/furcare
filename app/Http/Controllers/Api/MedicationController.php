<?php

namespace App\Http\Controllers\Api;

use App\Models\Medication;
use App\Models\Treatment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicationRequest;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateMedicationRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Http\Resources\MedicationResource;
use App\Models\ClientService;
use App\Models\Medicine;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;

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
    public function store(StoreMedicineRequest $med, StoreMedicationRequest $request, StoreServicesAvailedRequest $sarequest, $id, $tid)
    {
        $treatment = Treatment::findOrFail($tid);
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => 19,
            'unit_price' => $med->input('price'),
            'quantity' => $sarequest->input('quantity'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $treatment->pet_id,
            'status' => "To Pay",
        ]);

        $medicine = Medicine::create([
            'medcat_id' => $med->input('medcat_id'),
            'name' => $med->input('name'),
            'price' =>  $med->input('price'),
        ]);

        $medication = Medication::create([
            'quantity' => $servicesAvailed->quantity,
            'dosage' => $request->input('dosage'),
            'description' => $request->input('description'),
            'treatment_id' => $treatment->id,
            'pet_id' => $treatment->pet_id,
            'medicine_id' => $medicine->id,
            'services_availed_id' => $servicesAvailed->id,
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
    public function update(UpdateMedicationRequest $request, UpdateMedicineRequest $med, Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);
        $medicine = Medicine::findOrFail($medication->medicine_id);
        $data = $request->validated();
        $meddata = $med->validated();
        $medication->update($data);
        $medicine->update($meddata);

        return response()->json(['message' => 'Medication updated successfully.'], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medication $medication)
    {
        $medication->delete();
        return response()->json(['message' => 'The pet medication record within this treatment was archived.'], 204);
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
