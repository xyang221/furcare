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
use Illuminate\Support\Facades\Auth;

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
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        if (!$clientService) {

            $petowner = PetOwner::findOrFail($id);
            $user = Auth::user();
            $staff = $user->staff;

            $newclientService = ClientService::create([
                'petowner_id' => $petowner->id,
                'deposit' => 0,
                // 'rendered_by' => $staff->firstname . ' ' . $staff->lastname,
                'rendered_by' => "ADMIN",
                'status' => "To Pay",
            ]);

            $clientService = $newclientService;
        }

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $diagnosis = Diagnosis::create([
            'pet_id' => $servicesAvailed->pet_id,
            'remarks' => $request->input('remarks'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new DiagnosisResource($diagnosis, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis, $id)
    {
        $diagnosis = Diagnosis::findOrFail($id);
        return new DiagnosisResource($diagnosis);
    }

    public function getbyPet($id)
    {

        $diagnosis = Diagnosis::where('pet_id', $id)->get();

        if ($diagnosis->isEmpty()) {
            return response()->json(['message' => 'No list of pet diagnosis found.'], 404);
        }

        return DiagnosisResource::collection($diagnosis);
    }


    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
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
    public function update(UpdateDiagnosisRequest $request, Diagnosis $diagnosis, $id)
    {
        $diagnosis = Diagnosis::findOrFail($id);

        $data = $request->validated();
        $diagnosis->update($data);

        return new DiagnosisResource($diagnosis);
    }

    public function archive($id)
    {
        // $diagnosis = Diagnosis::with('relatedModels')->findOrFail($id);
    
        // // Archive related models first
        // foreach ($diagnosis->relatedModels as $relatedModel) {
        //     $relatedModel->delete();
        //     // Or if you have an archive method in the related model, call it: $relatedModel->archive();
        // }

        $diagnosis = Diagnosis::findOrFail($id);
        $diagnosis->delete();
        return new DiagnosisResource($diagnosis);
    }

    public function archivelist()
    {
        return DiagnosisResource::collection(
            Diagnosis::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $diagnosis = Diagnosis::withTrashed()->findOrFail($id);
        $diagnosis->restore();
        return response("Pet Owner was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->forceDelete();
        return response()->json("Diagnosis was archived", 204);
    }
}
