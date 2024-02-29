<?php

namespace App\Http\Controllers\Api;

use App\Models\TestResult;
use App\Models\Pet;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestResultRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateTestResultRequest;
use App\Http\Resources\TestResultResource;
use App\Models\PetOwner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
    public function store(StoreTestResultRequest $trrequest, StoreServicesAvailedRequest $sarequest, $id, $sid)
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

        if (!$trrequest->hasFile('attachment')) {
            return response()->json(["message" => "Please upload an image attachment."], 400);
        }

        $file = $trrequest->file('attachment');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $name_path = $file->move('storage/testresult-attachments/', $name);
        
        $testResult = TestResult::create([
            'date' => Carbon::now(),
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

        $testResult = TestResult::where('pet_id', $id)->get();

        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of test results found for this pet.'], 404);
        }

        return TestResultResource::collection($testResult);
    }

    public function getTestsbyPetbyDate($id, $date)
    {
        $timestamp = strtotime($date);

        $testResult = TestResult::where('pet_id', $id)
            ->whereDate('date', '=', date('Y-m-d', $timestamp))
            ->get();

        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of test results found for this pet within this date.'], 404);
        }

        return TestResultResource::collection($testResult);
    }

    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $testResult = TestResult::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of pet ' . strtolower($servicesAvailedIds->service) . ' test results found.'], 404);
        }

        return TestResultResource::collection($testResult);
    }

    public function getOtherTestsByServiceandPetowner($id)
    {
        $services = Service::whereIn('service', ['4DX', 'EHRLICHIA', 'ANAPLASMA', 'HEARTWORM TEST', 'LYME DISEASE'])->get();
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->whereIn('service_id', $services->pluck('id'))
            ->pluck('id');

        $testResult = TestResult::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($testResult->isEmpty()) {
            return response()->json(['message' => 'No list of pet test results found.'], 404);
        }

        return TestResultResource::collection($testResult);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestResultRequest $request, $id)
    {
        $testResult = TestResult::findOrFail($id);
        $data = $request->validated();
        $testResult->update($data);

        return new TestResultResource($testResult);
    }

    public function uploadAttachment(UpdateTestResultRequest $request, $id)
    {
        // Validate request data
        $request->validate([
            'attachment' => 'required|file|mimes:jpeg,png,gif,svg|max:2048', // Adjust the max file size as needed
        ]);

        if (!$request->hasFile('attachment')) {
            return response()->json(["message" => "Please select an attachment"], 400);
        }

        $file = $request->file('attachment');

        // Ensure the file is valid
        if (!$file->isValid()) {
            return response()->json(["message" => "Invalid file"], 400);
        }

        $name = time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->move('storage/testresult-attachments/', $name);
        
        // Fetch the test result by ID or however you identify it
        $testResult = TestResult::findOrFail($id); // Adjust this according to your model and input data

        // Delete the previous image if it exists
        if ($testResult->attachment) {
            $previousImagePath = public_path($testResult->attachment);

            if (File::exists($previousImagePath)) {
                File::delete($previousImagePath);
            }
        }

        // Update the testResult's attachment field with the new image path
        $testResult->attachment = $filePath;

        // Save the updated testResult details
        $testResult->save();

        return response()->json(['success' => 'Attachment uploaded successfully.']);
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
        $testresults = TestResult::onlyTrashed()->orderBy('id', 'desc')->get();

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
