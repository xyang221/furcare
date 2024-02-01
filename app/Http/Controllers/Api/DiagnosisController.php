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
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosis = Diagnosis::query()->orderBy('id', 'desc')->get();

        return DiagnosisResource::collection($diagnosis);
    }

    public function getDiagnosisbyPetbyDate($id, $date)
    {
        $timestamp = strtotime($date);

        $diagnosis = Diagnosis::where('pet_id', $id)
            ->whereDate('date', '=', date('Y-m-d', $timestamp))
            ->get();

        if ($diagnosis->isEmpty()) {
            return response()->json(['message' => 'No list of diagnosis found for this pet within this date.'], 404);
        }

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

            if ($staff) {
                $renderedby = "$staff->firstname $staff->lastname";
            } else {
                $renderedby = "Admin";
            }

            $newclientService = ClientService::create([
                'date' => Carbon::now(),
                'petowner_id' => $petowner->id,
                'deposit' => 0,
                'rendered_by' => $renderedby,
                'status' => "To Pay",
            ]);

            $clientService = $newclientService;
        }

        $servicesAvailed = ServicesAvailed::create([
            'date' => Carbon::now(),
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $diagnosis = Diagnosis::create([
            'date' => Carbon::now(),
            'pet_id' => $servicesAvailed->pet_id,
            'followup' => $request->input('followup'),
            'remarks' => $request->input('remarks'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        $dateTime = Carbon::parse($diagnosis->followup);
        $formattedDateTime = $dateTime->format('F j, Y');
        Notification::create([
            'date' => $diagnosis->followup,
            'user_id' => $diagnosis->pet->petowner->user->id,
            'type' => 'Consultation',
            'message' => "{$diagnosis->pet->name}'s consultation follow up date is today $formattedDateTime.",
            'status' => 1, // to notify, not opened, not clicked
        ]);

        $admins = User::whereIn('role_id', [1, 2])->whereNull('deleted_at')->get();

        foreach ($admins as $admin) {
            $userId = $admin->id;
            $message = "{$diagnosis->pet->petowner->firstname} {$diagnosis->pet->petowner->lastname} pet {$diagnosis->pet->name} has follow up consultation today.";

            // Notification for each admin 
            Notification::create([
            'date' => $diagnosis->followup,
                'user_id' => $userId,
                'type' => 'Consultation',
                'message' => $message,
                'status' => 1, // to notify, not opened, not clicked
            ]);
        }

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis, $id)
    {
        $diagnosis = Diagnosis::findOrFail($id);
        $service = ServicesAvailed::findOrFail($diagnosis->services_availed_id);
        $diagnosis->forceDelete();
        $service->forceDelete();
        return response()->json("Diagnosis was deleted", 204);
    }
}
