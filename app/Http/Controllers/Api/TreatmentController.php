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
use App\Models\Pet;
use App\Models\Service;
use App\Models\ServicesAvailed;
use Carbon\Carbon;

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

    public function getTreatmentbyPetbyDate($id, $date)
    {
        $pet = Pet::findOrFail($id);
        $timestamp = strtotime($date);

        $treatments = Treatment::where('pet_id', $pet->id)
            ->whereDate('date', '=', date('Y-m-d', $timestamp))
            ->get();

        if ($treatments->isEmpty()) {
            return response()->json(['message' => 'No list of treatments found for this pet within this date.'], 404);
        }

        return TreatmentResource::collection($treatments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreatmentRequest $request, $poid, $sid)
    {
        $service = Service::findOrFail($sid);
        $clientService = ClientService::where('petowner_id', $poid)->where('status', 'To Pay')->first();

        if (!$clientService) {
            return response()->json(['message' => 'No client deposit was recorded to proceed for treatment. '], 403);
        }

        $pet = $request->input('pet_id');

        $latestAdmission = Admission::where('pet_id',$pet)->where('status', 'Admitted')->latest()->first();
        if (!$latestAdmission) {
            $latestAdmission = Admission::create([
                'date_admission' => Carbon::now(),
                'pet_id' => $pet,
                'status' => 'Admitted',
            ]);
        }

      

        $treatment = Treatment::create([
            'date' => Carbon::now(),
            'day' => $request->input('day'),
            'pet_id' => $request->input('pet_id'),
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
            'admission_id' => $latestAdmission->id,
        ]);

        // $servicesAvailed = ServicesAvailed::create([
        //     'date' => Carbon::now(),
        //     'service_id' => $service->id,
        //     'unit_price' => $sarequest->input('unit_price'),
        //     'client_deposit_id' => $clientService->id,
        //     'pet_id' => $treatment->pet_id,
        //     'status' => "To Pay",
        // ]);

       

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

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
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
