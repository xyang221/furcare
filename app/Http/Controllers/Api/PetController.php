<?php

namespace App\Http\Controllers\Api;

use App\Models\Pet;
use App\Models\PetOwner;
use App\Models\Breed;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Http\Resources\PetResource;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pet = Pet::query()->orderBy('id', 'desc')->get();
        return PetResource::collection($pet);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request, $id)
    {
        $petOwner = PetOwner::findOrFail($id);

        $data = $request->validated(); //get the data

        // if($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $filename = $file->getClientOriginalName();
        //     $fileName = date('His') . $filename;

        //     $request->file('photo')->storeAs('image/', $fileName, 'public');
        // } else {
        //     return response()->json(["message" => "select image"]);
        // }

        $photo_path = $request->file('photo')->store('image', 'public');

        $data['petowner_id'] = $id;
        $data['photo'] = $photo_path;


        $pet = Pet::create($data); //create pet
        return new PetResource($pet, 201);
        // return response()->json('store');
    }

    public function uploadImage(StorePetRequest $request)
    {

       

    }

   

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet )
    {
        // $petOwner = PetOwner::find($id);
        // $pet = $petOwner->pets;
        // return new PetResource($pet);

        // $pet = PetOwner::with('pets.petowner')->find($id);
        // $pets = $petOwner->pets;

        return new PetResource($pet);

    }

    public function getPetOwnersPet($ownerId)
    {
        
        $pets = Pet::where('petowner_id', $ownerId)->get();
        return PetResource::collection($pets);
    }

    public function archive($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();
        return new PetResource($pet);
     
    }

    
    public function archivelist()
    {
        return PetResource::collection( 
            Pet::onlyTrashed()->orderBy('id','desc')->get()
        );

    }

    public function restore($id)
    {
        $pet = Pet::withTrashed()->findOrFail($id);
        $pet->restore();
        return response("Pet restored successfully");
    }

    


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, Pet $pet)
    {
        $data = $request->validated();
        $pet->update($data);

        return new PetResource($pet);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet, $id)
    {
        $pet = Pet::withTrashed()->findOrFail($id);
        $pet->forceDelete();
        return response("Permanently Deleted", Response::HTTP_OK);

    }
}
