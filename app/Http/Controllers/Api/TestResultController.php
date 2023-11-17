<?php

namespace App\Http\Controllers\Api;

use App\Models\TestResult;
use App\Models\Pet;
use App\Models\Diagnosis;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestResultRequest;
use App\Http\Requests\StoreDiagnosisRequest;
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
    public function store(StoreTestResultRequest $trrequest, StoreDiagnosisRequest $drequest, $id )
    {

        $pet = Pet::findOrFail($id);

        if (!$trrequest->hasFile('attachment')) {
            return response()->json(["message" => "Please select an image"], 400);
        }
    
        $file = $trrequest->file('attachment');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $name_path = $file->move('attachments/', $name);

        $diagnosis = Diagnosis::create([
            'date' => $drequest->input('date'),
            'remarks' => $drequest->input('remarks'),
            'service_id' => $drequest->input('service_id'),
            'pet_id' => $pet->id,
        ]);
    
        $testResult = TestResult::create([
            'diagnosis_id' => $diagnosis->id,
            'pet_id' => $pet->id,
            'attachment' => $name_path,
            'description' => $trrequest->input('description'),
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

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestResultRequest $request, TestResult $testResult, $id)
    {
        $testResult = TestResult::findOrFail($id);
        $data = $request->validated();
    
        if (!$request->hasFile('attachment')) {
            return response()->json(["message" => "Please select an image"], 400);
        }
        
        $file = $request->file('attachment');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('attachments', $name); // Store the file in the 'attachments' directory
    
        // Update the attachment field in the TestResult model with the new path
        $testResult->attachment = $path;
        $testResult->save();
    
        return new TestResultResource($testResult);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestResult $testResult, $id)
    {
        $testResult = TestResult::findOrFail($id);
        $testResult->delete();
        return response()->json(['message' => "Test Result Permanently Deleted"], 204);
    }
}
