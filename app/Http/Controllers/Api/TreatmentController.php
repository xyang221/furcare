<?php

namespace App\Http\Controllers\Api;

use App\Models\Treatment;
use App\Models\PetCondition;
use App\Models\Medication;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\StoreTreatmentRequest;
use App\Http\Requests\UpdateTreatmentRequest;
use App\Http\Resources\TreatmentResource;
use App\Http\Resources\PetConditionResource;
use App\Http\Resources\MedicationResource;
use App\Models\Admission;
use App\Models\ClientService;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatments = Treatment::query()->orderBy('id', 'desc')->get();

        if ($treatments->isEmpty()) {
            return response()->json(['message' => 'No pet treatment records found.'], 404);
        }

        return TreatmentResource::collection($treatments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request, StoreServicesAvailedRequest $sarequest, $poid, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $poid)->first();

        if (!$clientService) {

            $petowner = PetOwner::findOrFail($poid);
            $user = Auth::user();
            $staff = $user->staff;

            if ($staff) {
                $renderedby = "$staff->firstname . ' ' . $staff->lastname";
            } else {
                $renderedby = "Admin";
            }

            $newclientService = ClientService::create([
                'petowner_id' => $petowner->id,
                'deposit' => 0,
                'rendered_by' => $renderedby,
                'status' => "To Pay",
            ]);

            $clientService = $newclientService;
        }

        $treatment = Treatment::create([
            'day' => $sarequest->input('day'),
            'pet_id' => $sarequest->input('pet_id'),
            'diagnosis' => $request->input('diagnosis'),
            'body_weight' => $request->input('body_weight'),
            'heart_rate' => $request->input('heart_rate'),
            'mucous_membranes' => $request->input('mucous_membranes'),
            'pr_prealbumin' => $request->input('pr_prealbumin'),
            'temperature' => $request->input('temperature'),
            'respiration_rate' => $request->input('respiration_rate'),
            'caspillar_refill_time' => $request->input('caspillar_refill_time'),
            'body_condition_score' => $request->input('body_condition_score'),
            'fluid_rate' => $request->input('fluid_rate'),
            'comments' => $request->input('comments'),
        ]);

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_service_id' => $clientService->id,
            'pet_id' => $treatment->pet_id,
            'status' => "To Pay",
        ]);

        Admission::create([
            'treatment_cost' => $servicesAvailed->unit_price,
            'pet_id' => $treatment->pet_id,
            'treatment_id' => $treatment->id,
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new TreatmentResource($treatment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Treatment $treatment, $id)
    {
        $treatment = Treatment::findOrFail($id);
        return new TreatmentResource($treatment);
    }

    public function getCurrentTreatment($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_service_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $treatment = Treatment::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->first();

        if (!$treatment) {
            return response()->json(['message' => 'No treatment records found for the provided services availed.'], 404);
        }

        return new TreatmentResource($treatment);
    }



    public function getPetTreatments($id)
    {

        $petTreatments = Treatment::where('pet_id', $id)->orderBy('id', 'desc')->get();

        if ($petTreatments->isEmpty()) {
            return response()->json(['message' => 'No treatment records found in this pet.'], 404);
        }
        return TreatmentResource::collection($petTreatments);
    }

    public function getTreatmentPetConditions($id)
    {

        $petTreatmentPetConditions = PetCondition::where('treatment_id', $id)->get();

        if ($petTreatmentPetConditions->isEmpty()) {
            return response()->json(['message' => 'No pet condition records found in this pet treatment.'], 404);
        }
        return PetConditionResource::collection($petTreatmentPetConditions);
    }

    public function getTreatmentMedications($id)
    {

        $petTreatmentMedications = Medication::where('treatment_id', $id)->get();

        if ($petTreatmentMedications->isEmpty()) {
            return response()->json(['message' => 'No medication records found in this pet treatment.'], 404);
        }
        return MedicationResource::collection($petTreatmentMedications);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreatmentRequest $request, Treatment $treatment, $id)
    {
        $treatment = Treatment::findOrFail($id);
        $data = $request->validated();
        $treatment->update($data);

        return new TreatmentResource($treatment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        $treatment->delete();
        return response()->json(['message' => 'This pet treatment record was archived.'], 204);
    }

    public function archivelist()
    {
        $treatments = Treatment::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($treatments->isEmpty()) {
            return response()->json(['message' => 'No pet treatment records was archived.'], 404);
        }

        return TreatmentResource::collection($treatments);
    }

    public function restore($id)
    {
        $treatment = Treatment::withTrashed()->findOrFail($id);
        $treatment->restore();
        return response("This Pet treatment record was restored successfully");
    }

    public function forcedelete(Treatment $treatment, $id)
    {
        $treatment = Treatment::withTrashed()->findOrFail($id);
        $treatment->forceDelete();
        return response("This pet treatment record was Permanently Deleted", 204);
    }
}
