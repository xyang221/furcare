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
use App\Models\Medicine;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ServicesAvailed;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

        $quantity = $request->input('dosage');
        $unit = $request->input('unit');
        $amintake = $request->input('am');
        $pmintake = $request->input('pm');
        $charge = $request->input('charge');

        // for medication record only
        if ($charge === 0) {
            $medication = Medication::create([
                'date' => Carbon::now(),
                'dosage' => $request->input('dosage'),
                'unit' => 'shot',
                'description' => $request->input('description'),
                'treatment_id' => $treatment->id,
                'pet_id' => $treatment->pet_id,
                'med_id' => $request->input('med_id'),
                'am' =>  $request->input('am'),
                'pm' =>  $request->input('pm'),
                'charge' =>  $request->input('charge'),
            ]);
            return new MedicationResource($medication, 201);
        }

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

        $findMedicine = Medicine::where('id', $request->input('med_id'))->first();

        $findservice = Service::where('service', $findMedicine->name)->first();

        if (!$findservice) {
            $service = Service::create([
                'service' => $findMedicine->name,
                'cat_id' => 8,
                'isAvailable' => 1,
            ]);
        } else {
            $service = $findservice;
        }


        if ($amintake && $pmintake) {
            if ($quantity > 1) {
                $quantity *= 2;
            } else {
                $quantity = 2;
            }
        } else if ($amintake || $pmintake) {
            if ($quantity < 1) {
                $quantity = 1;
            }
        }




        $servicesAvailed = ServicesAvailed::where('service_id', $service->id)->where('status', "To Pay")->where('client_deposit_id', $clientService->id)->latest()->first();
        if ($servicesAvailed) {
            $servicesAvailed->update(['quantity' => $servicesAvailed->quantity + $quantity]);
        } else {
            $servicesAvailed = ServicesAvailed::create([
                'date' => Carbon::now(),
                'service_id' => $service->id,
                'unit' => $unit,
                'unit_price' => $findMedicine->price,
                'quantity' => $quantity,
                'client_deposit_id' => $clientService->id,
                'pet_id' => $treatment->pet->id,
                'status' => "To Pay",
            ]);
        }



        $medication = Medication::create([
            'date' => Carbon::now(),
            'dosage' => $request->input('dosage'),
            'unit' => $request->input('unit'),
            'description' => $request->input('description'),
            'treatment_id' => $treatment->id,
            'pet_id' => $treatment->pet_id,
            'services_availed_id' => $servicesAvailed->id,
            'med_id' => $request->input('med_id'),
            'am' =>  $request->input('am'),
            'pm' =>  $request->input('pm'),
            'services_availed_id' => $servicesAvailed->id
        ]);

        return new MedicationResource($medication, 201);
    }

    public function storeMedicationonly(StoreMedicationRequest $request, $id, $tid)
    {
        $treatment = Treatment::findOrFail($tid);

        // $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();

        // if (!$clientService) {

        //     $petowner = PetOwner::findOrFail($id);
        //     $user = Auth::user();
        //     $staff = $user->staff;

        //     if ($staff) {
        //         $renderedby = "$staff->firstname $staff->lastname";
        //     } else {
        //         $renderedby = "Admin";
        //     }

        //     $newclientService = ClientService::create([
        //         'date' => Carbon::now(),
        //         'petowner_id' => $petowner->id,
        //         'deposit' => 0,
        //         'rendered_by' => $renderedby,
        //         'status' => "To Pay",
        //     ]);

        //     $clientService = $newclientService;
        // }

        // $findMedicine = Medicine::where('id', $request->input('med_id'))->first();

        // $findservice = Service::where('service', $findMedicine->name)->first();

        // if (!$findservice) {
        //     $service = Service::create([
        //         'service' => $findMedicine->name,
        //         'cat_id' => 8,
        //         'isAvailable' => 1,
        //     ]);
        // } else {
        //     $service = $findservice;
        // }

        // $quantity = $request->input('dosage');
        // $unit = $request->input('unit');
        // $amintake = $request->input('am');
        // $pmintake = $request->input('pm');
        // if ($amintake && $pmintake) {
        //     if ($quantity > 1) {
        //         $quantity *= 2;
        //     } else {
        //         $quantity = 2;
        //     }
        // } else if ($amintake || $pmintake) {
        //     if ($quantity < 1) {
        //         $quantity = 1;
        //     }
        // }

        // $servicesAvailed = ServicesAvailed::where('service_id', $service->id)->where('status', "To Pay")->where('client_deposit_id', $clientService->id)->latest()->first();
        // if ($servicesAvailed) {
        //     $servicesAvailed->update(['quantity' => $servicesAvailed->quantity + $quantity]);
        // } else {
        //     $servicesAvailed = ServicesAvailed::create([
        //         'date' => Carbon::now(),
        //         'service_id' => $service->id,
        //         'unit' => $unit,
        //         'unit_price' => $findMedicine->price,
        //         'quantity' => $quantity,
        //         'client_deposit_id' => $clientService->id,
        //         'pet_id' => $treatment->pet->id,
        //         'status' => "To Pay",
        //     ]);
        // }



        $medication = Medication::create([
            'date' => Carbon::now(),
            'dosage' => $request->input('dosage'),
            'unit' => $request->input('unit'),
            'description' => $request->input('description'),
            'treatment_id' => $treatment->id,
            'pet_id' => $treatment->pet_id,
            // 'services_availed_id' => $servicesAvailed->id,
            'med_id' => $request->input('med_id'),
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

        $charge = $request->input('charge');
        if ($charge === 0) {
            return response()->json(['message' => 'Medication updated successfully.'], 204);
        }
        $amintake = $request->input('am');
        $pmintake = $request->input('pm');
        $quantity = $request->input('dosage');
        $service = ServicesAvailed::find($medication->services_availed_id); // Assuming you have the service ID
        if ($service) {
            if ($amintake && $pmintake) {
                if ($quantity > 1) {
                    $quantity *= 2;
                } else {
                    $quantity = 2;
                }
            } else if ($amintake || $pmintake) {
                if ($quantity < 1) {
                    $quantity = 1;
                }
            }
            $service->update(['quantity' => $service['quantity'] - $quantity]);
        }

        return response()->json(['message' => 'Medication updated successfully.'], 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function archive(Medication $medication, $id)
    {
        $medication = Medication::findOrFail($id);

        if ($medication->charge === 0) {
            $medication->forceDelete();
            return response()->json(['message' => 'The pet medication record within this treatment was deleted.'], 204);
        }
        $serviceavailed = ServicesAvailed::findOrFail($medication->services_availed_id);
        $quantity = $medication->dosage;
        if ($serviceavailed) {
            if ($medication->amintake && $medication->pmintake) {
                if ($quantity > 1) {
                    $quantity *= 2;
                    $serviceavailed->update(['quantity' => $serviceavailed->quantity - $quantity]);
                } else {
                    $quantity = 2;
                    $serviceavailed->update(['quantity' => $serviceavailed->quantity - $quantity]);
                }
            } else if ($medication->amintake || $medication->pmintake) {
                if ($quantity < 1) {
                    $quantity = 1;
                    $serviceavailed->update(['quantity' => $serviceavailed->quantity - $quantity]);
                }
            }
        }
        if ($serviceavailed['quantity'] === $medication->dosage) {
            $serviceavailed->forceDelete();
        } else {
            $serviceavailed->update(['quantity' => $serviceavailed->quantity - $medication->dosage]);
        }

        $medication->forceDelete();
        return response()->json(['message' => 'The pet medication record within this treatment was deleted.'], 204);

        // $medication = Medication::findOrFail($id);
        // $medication->forceDelete();
        // $serviceavailed = ServicesAvailed::where('id', $medication->services_availed_id);
        // $serviceavailed->update(['quantity' => $serviceavailed['quantity'] - $medication->dosage]);
        // return response()->json(['message' => 'The pet medication record within this treatment was deleted.'], 204);
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
