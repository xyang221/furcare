<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\PetOwner;
use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Resources\PetOwnerResource;

use App\Models\Appointment;
use App\Http\Resources\AppointmentResource;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Hash;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $petOwners = PetOwner::orderBy('id', 'desc')->paginate(50);

        if ($petOwners->isEmpty()) {
            return response()->json(['message' => 'No pet owner records found.'], Response::HTTP_NOT_FOUND);
        }

        return PetOwnerResource::collection($petOwners);
    }

    public function searchPetowner($name)
    {
        try {
            // Sanitize the input
            $sanitized_name = trim($name); // Trim whitespace from the input

            // Perform search
            $petOwners = PetOwner::where(function ($query) use ($sanitized_name) {
                $query->where('firstname', 'like', "%{$sanitized_name}%")
                    ->orWhere('lastname', 'like', "%{$sanitized_name}%");
            })->get();

            // Check if any results are found
            if ($petOwners->isEmpty()) {
                return response()->json(['message' => 'No pet owners found.'], 404);
            }

            // Return the resource collection
            return PetOwnerResource::collection($petOwners);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for pet owners.'], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $porequest, StoreAddressRequest $addrequest, StoreUserRequest $ureq)
    {
        // Create a new user.
        $user = User::create([
            'role_id' => 3,
            'username' => $ureq->input('username'),
            'email' => $ureq->input('email'),
            'password' => Hash::make($ureq->input('password')),
        ]);

        $address = Address::create([
            'zipcode_id' => $addrequest->input('zipcode_id'),
            'barangay' => $addrequest->input('barangay'),
            'zone' => $addrequest->input('zone'),
        ]);

        // Create a pet owner associated with the user.
        $petOwner = PetOwner::create([
            'user_id' => $user->id,
            'firstname' => $porequest->input('firstname'),
            'lastname' => $porequest->input('lastname'),
            'contact_num' => $porequest->input('contact_num'),
            'address_id' => $address->id,

        ]);
        // send verification code
        return new PetOwnerResource($petOwner, 201);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petOwner = PetOwner::find($id);
        return new PetOwnerResource($petOwner);
    }

    //get the petowner's list of appointments
    public function getPetOwnerAppointments($id)
    {
        $appointments = Appointment::where('petowner_id', $id)->orderBy('date', 'desc')->get();

        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'This pet owner have no appointments.'], Response::HTTP_NOT_FOUND);
        }

        return AppointmentResource::collection($appointments);
    }

    public function archive($id)
    {
        $petOwner = PetOwner::findOrFail($id);
        $petOwner->delete();
        return new PetOwnerResource($petOwner);
    }

    public function archivelist()
    {
        return PetOwnerResource::collection(
            PetOwner::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $petOwner = PetOwner::withTrashed()->findOrFail($id);
        $petOwner->restore();
        return response("Pet Owner was restored successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetOwnerRequest $request, $id)
    {
        $petOwner = PetOwner::findOrFail($id);
        $data = $request->validated();
        $petOwner->update($data);
        return new PetOwnerResource($petOwner);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetOwner $petOwner, $id)
    {
        $petOwner = PetOwner::withTrashed()->findOrFail($id);
        $petOwner->forceDelete();
        return response("Permanently Deleted", 201);
    }
}
