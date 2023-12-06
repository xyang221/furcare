<?php

namespace App\Http\Controllers\Api;

use App\Models\TestResult;
use App\Models\Pet;
use App\Models\Diagnosis;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestResultRequest;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateTestResultRequest;
use App\Http\Resources\TestResultResource;

class TestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $testresults = TestResult::query()->orderBy('id', 'desc')->get();

        if ($testresults->isEmpty()) {
            return response()->json(['message' => 'No test results found.'], 404);
        }
        
        return TestResultResource::collection($testresults);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestResultRequest $trrequest, StoreServicesAvailedRequest $sarequest, $id, $sid )
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

        if (!$trrequest->hasFile('attachment')) {
            return response()->json(["message" => "Please select an image"], 400);
        }
    
        $file = $trrequest->file('attachment');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $name_path = $file->move('attachments/', $name);

        $testResult = TestResult::create([
            'pet_id' => $servicesAvailed->pet_id,
            'attachment' => $name_path,
            'description' => $trrequest->input('description'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        return new TestResultResource($testResult, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TestResult $testResult, $id)
    {
        $testResult = TestResult::findOrFail($id);
        return new TestResultResource($testResult);
    }

    public function getbyPet($id)
    {
        
        $testResult = Pet::where('pet_id', $id)->get();

        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of test results found for this pet.'], 404);
        }

        return TestResultResource::collection($testResult);
    }

    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');
        
        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_service_id', $clientServiceIds)
            ->where('service_id',$servicesAvailedIds->id)
            ->pluck('id');
        
        $testResult = TestResult::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();
                    
        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of pet ' . strtolower($servicesAvailedIds->service) . ' test results found.'], 404);
        }
        
        return TestResultResource::collection($testResult);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestResultRequest $request, TestResult $testResult, $id)
    {
        $testResult = TestResult::findOrFail($id);
        $data = $request->validated();
    
        // if (!$request->hasFile('attachment')) {
        //     return response()->json(["message" => "Please select an image"], 400);
        // }
        
        // $file = $request->file('attachment');
        // $name = time() . '.' . $file->getClientOriginalExtension();
        // $path = $file->storeAs('attachments', $name); // Store the file in the 'attachments' directory
    
        // // Update the attachment field in the TestResult model with the new path
        // $testResult->attachment = $path;
        // $testResult->save();

        $testResult->update($data);
    
        return new TestResultResource($testResult);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function archive(TestResult $testResult, $id)
    {
        $testResult = TestResult::findOrFail($id);
        $testResult->delete();
        return response()->json(['message' => "Test Result Permanently Deleted"], 204);
    }

    public function archivelist()
    {
        $testresults = TestResult::onlyTrashed()->orderBy('id','desc')->get();

        if ($testresults->isEmpty()) {
            return response()->json(['message' => 'No test results were archived.'], 404);
        }
        
        return TestResultResource::collection($testresults);
    }

    public function restore($id)
    {
        $testResult = TestResult::withTrashed()->findOrFail($id);
        $testResult->restore();
        return response("Test Result restored successfully");
    }

    public function destroy(TestResult $testResult, $id)
    {
        $testResult = TestResult::withTrashed()->findOrFail($id);
        $testResult->forceDelete();
        return response()->json(['message' => 'This test result was permanently deleted.'], 404);
    }
}
