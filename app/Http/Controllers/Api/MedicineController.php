<?php

namespace App\Http\Controllers\Api;

use App\Models\Medicine;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Http\Resources\MedicineResource;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::orderBy('id', 'desc')->paginate(50);

        if ($medicines->isEmpty()) {
            return response()->json(['message' => 'No medicines found.'], 404);
        }

        return MedicineResource::collection($medicines);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicineRequest $request,$id)
    {
        $data = $request->validated(); //get the data
        $medicine = Medicine::create($data); //create
        return new MedicineResource($medicine, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        // $medicine = Medicine::findOrFail($id);
        return new MedicineResource($medicine);
    }

    public function getMedicines($id)
    {
        try {
            $sanitized_name = trim($id); // Trim whitespace from the input

            // Perform search
            $medicines = Medicine::where('medcat_id', 'like', "%{$sanitized_name}%")
                ->get();

            // Check if any results are found
            if ($medicines->isEmpty()) {
                return response()->json(['message' => 'No medicines found.'], 404);
            }

            // Return the resource collection
            return MedicineResource::collection($medicines);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for pets.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        // $medicine = Medicine::findOrFail($id);
        $data = $request->validated();
        $medicine->update($data);

        return new MedicineResource($medicine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return response()->json(['message' => 'This Medicine was archived.'], 204);
    }

    public function archivelist()
    {
        $medicines = Medicine::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($medicines->isEmpty()) {
            return response()->json(['message' => 'No Medicines was archived found.'], 404);
        }

        return MedicineResource::collection($medicines);
    }

    public function restore($id)
    {
        $medicine = Medicine::withTrashed()->findOrFail($id);
        $medicine->restore();
        return response("Medicine restored successfully");
    }

    public function forcedelete(Medicine $medicine, $id)
    {
        $medicine = Medicine::withTrashed()->findOrFail($id);
        $medicine->forceDelete();
        return response()->json(['message' => 'This medicine was permanently deleted.'], 404);
    }
}
