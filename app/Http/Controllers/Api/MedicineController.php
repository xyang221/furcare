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
        $medicines = Medicine::query()->orderBy('name', 'asc')->get();

        if ($medicines->isEmpty()) {
            return response()->json(['message' => 'No medicines found.'], 404);
        }
        return MedicineResource::collection($medicines);
    }

    public function formedications()
    {
        $medicines = Medicine::query()->where('medication',1)->orderBy('name', 'asc')->get();

        if ($medicines->isEmpty()) {
            return response()->json(['message' => 'No medicines found.'], 404);
        }
        return MedicineResource::collection($medicines);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
