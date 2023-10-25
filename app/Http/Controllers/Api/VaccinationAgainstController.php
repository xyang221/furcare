<?php

namespace App\Http\Controllers\Api;

use App\Models\VaccinationAgainst;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccinationAgainstRequest;
use App\Http\Requests\UpdateVaccinationAgainstRequest;
use App\Http\Resources\VaccinationAgainstResource;

class VaccinationAgainstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccinationAgainst = VacciantionAgainst::query()->orderBy('id', 'desc')->paginate(50);

        return VaccinationAgainstResource::collection($vaccinationAgainst);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccinationAgainstRequest $request)
    {
        $data = $request->validated(); //get the data
        $vaccinationAgainst = VacciantionAgainst::create($data); //create user
        return new VaccinationAgainstResource($vaccinationAgainst, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccinationAgainst $vaccinationAgainst)
    {
        return new VaccinationAgainstResource($vaccinationAgainst);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVaccinationAgainstRequest $request, VaccinationAgainst $vaccinationAgainst)
    {
        $data = $request->validated();
        $vaccinationAgainst->update($data);

        return new VaccinationAgainstResource($vaccinationAgainst);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccinationAgainst $vaccinationAgainst)
    {
        $vaccinationAgainst->delete();
        return response()->json("Vaccination Against Deleted", 204);
    }
}
