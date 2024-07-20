<?php

namespace App\Http\Controllers\Api;

use App\Models\ServicesAvailed;
use App\Models\PetOwner;
use App\Models\Service;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateServicesAvailedRequest;
use App\Http\Resources\MedicationResource;
use App\Http\Resources\ServicesAvailedResource;
use App\Models\Medication;
use App\Models\Medicine;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ServicesAvailedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicesAvailed = ServicesAvailed::query()->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services logs found.'], 404);
        }
        return ServicesAvailedResource::collection($servicesAvailed);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesAvailedRequest $request, $id, $sid)
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

        $requestData = $request->validated();

        $requestData['date'] =  Carbon::now();
        $requestData['client_deposit_id'] = $clientService->id;
        $requestData['service_id'] = $service->id;
        $requestData['status'] = "To Pay";
        ServicesAvailed::create($requestData);
        return response()->json(['message' => 'Service availed was successfully saved.'], 201);
    }

    public function storeMedicine(StoreServicesAvailedRequest $request, $mid ,$id)
    {
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
        $findMedicine = Medicine::findOrFail($mid);
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

        $requestData = $request->validated();

        $requestData['date'] =  Carbon::now();
        $requestData['client_deposit_id'] = $clientService->id;
        $requestData['service_id'] = $service->id;
        $requestData['status'] = "To Pay";
        $requestData['unit_price'] = $findMedicine->price;
        $requestData['unit'] = $findMedicine->unit;
        ServicesAvailed::create($requestData);
        return response()->json(['message' => 'Service availed was successfully saved.'], 201);
    }

    public function storeProduct(StoreServicesAvailedRequest $request, StoreServiceRequest $sreq, $id)
    {
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

        $findservice = Service::where('service', $sreq->input('service'))->first();
        if (!$findservice) {
            $service = Service::create([
                'service' => $sreq->input('service'),
                'cat_id' => 9,
                'isAvailable' => 1,
            ]);
        } else {
            $service = $findservice;
        }

        $requestData = $request->validated();

        $requestData['date'] =  Carbon::now();
        $requestData['client_deposit_id'] = $clientService->id;
        $requestData['service_id'] = $service->id;
        $requestData['status'] = "To Pay";
        ServicesAvailed::create($requestData);
        return response()->json(['message' => 'Service availed was successfully saved.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicesAvailed $servicesAvailed, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function showAllPetownerServiceAvail($id,)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'This client have no services availed records found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetownerServiceAvail($id, $sid)
    {
        $service = Service::findOrFail($sid);
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->where('service_id', $service->id)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showServicesByClientDeposits($id)
    {
        $petowner = ClientService::findOrFail($id);
        $servicesAvailed = ServicesAvailed::where('client_deposit_id', $petowner->id)
            ->orderBy('pet_id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        // Assuming you're constructing ServicesAvailedResource with both services availed and petowner
        $data = [
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientdeposit' => $petowner, // Assuming $petowner needs to be returned along with services availed
        ];

        return response()->json($data);
    }


    public function showToPayServicesByPetOwner($id)
    {
        $status = 'To Pay';

        $clientService = ClientService::where('petowner_id', $id)
            ->where('status', $status)
            ->latest()
            ->first();

        if (!$clientService) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', [$clientService->id])
            ->where('status', $status)
            ->orderBy('id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed of this client found at the moment.'], 404);
        }

        $meds = Medication::whereIn('services_availed_id', $servicesAvailed->pluck('id'))
            ->orderBy('id', 'desc')
            ->get();

        $data = [
            'meds' => MedicationResource::collection($meds),
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientdeposit' => $clientService,
        ];

        return response()->json($data);
    }


    public function showByPetownerChargeSlip($id)
    {
        $petowner = ClientService::where('petowner_id', $id)->pluck('id');
        $status = 'Completed';
        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $petowner)
            ->where('status', $status)
            ->orderBy('pet_id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this client found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function showByPetServices($id)
    {
        $servicesAvailed = ServicesAvailed::where('pet_id', $id)
            ->orderBy('id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this pet found at the moment.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function getOtherByServiceandPetowner($id)
    {
        $services = Service::where('cat_id', 12)->get();
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->whereIn('service_id', $services->pluck('id'))
            ->orderBy('id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No list of other services found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function getMedicinePetownerServices($id)
    {
        $services = Service::where('cat_id', 8)->get();
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->whereIn('service_id', $services->pluck('id'))
            ->orderBy('id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No list of medicines found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

   

    public function getProductPetownerServices($id)
    {
        $services = Service::where('cat_id', 9)->get();
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->whereIn('service_id', $services->pluck('id'))
            ->orderBy('id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No list of products found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }

    public function getSurgeryPetownerServices($id)
    {
        $services = Service::where('cat_id', 13)->get();
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailed = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->whereIn('service_id', $services->pluck('id'))
            ->orderBy('id', 'desc')
            ->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No list of surgeries found.'], 404);
        }

        return ServicesAvailedResource::collection($servicesAvailed);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesAvailedRequest $request, ServicesAvailed $servicesAvailed, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $data = $request->validated();

        $clientService = ClientService::findOrFail($servicesAvailed->client_deposit_id)->first();

        if ($clientService->status === "Completed") {
            $data['status'] = "Completed";
        } else if ($clientService->status === "Pending") {
            $data['status'] = "Pending";
        }
        $servicesAvailed->update($data);
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function updateService(UpdateServicesAvailedRequest $request, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $data = $request->validated();
        $servicesAvailed->update($data);
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function archive($id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $servicesAvailed->delete();
        return new ServicesAvailedResource($servicesAvailed);
    }

    public function archivelist()
    {
        return ServicesAvailedResource::collection(
            ServicesAvailed::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $servicesAvailed = ServicesAvailed::withTrashed()->findOrFail($id);
        $servicesAvailed->restore();
        return response("This service availed was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicesAvailed $servicesAvailed, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $servicesAvailed->forceDelete();
        return response()->json("Service Availed Deleted", 204);
    }

    public function destroyProduct(ServicesAvailed $servicesAvailed, $id)
    {
        $servicesAvailed = ServicesAvailed::findOrFail($id);
        $service = Service::findOrFail($servicesAvailed->service_id);
        $service->forceDelete();
        $servicesAvailed->forceDelete();
        return response()->json("Service Availed Deleted", 204);
    }
}
