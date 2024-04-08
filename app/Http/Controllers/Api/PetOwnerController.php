<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StorePetOwnerRequest;
use App\Http\Requests\UpdatePetOwnerRequest;
use App\Http\Resources\PetOwnerResource;

use App\Models\Appointment;
use App\Http\Resources\AppointmentResource;
use App\Models\Admission;
use App\Models\ClientService;
use App\Models\DewormingLog;
use App\Models\Diagnosis;
use App\Models\Medication;
use App\Models\Notification;
use App\Models\PaymentRecord;
use App\Models\Pet;
use App\Models\PetCondition;
use App\Models\ServicesAvailed;
use App\Models\TestResult;
use App\Models\Treatment;
use App\Models\VaccinationLog;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Hash;

class PetOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $petOwners = PetOwner::orderBy('id', 'desc')->get();

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
                    ->orWhere('lastname', 'like', "%{$sanitized_name}%")
                    ->orWhereRaw("CONCAT(firstname, ' ', lastname) LIKE ?", ["%{$sanitized_name}%"]);
            })
                ->get();


            // Check if any results are found
            if ($petOwners->isEmpty()) {
                return response()->json(['message' => 'No pet owners found.'], 404);
            }

            return PetOwnerResource::collection($petOwners);
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for pet owners.'], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetOwnerRequest $porequest, StoreUserRequest $ureq)
    {
        // Create a new user.
        $lastname = $porequest->input('lastname');

        $email = $ureq->input('email');
        $password = strtolower($lastname) . '1234';

        if (!$email) {
            $email = strtolower($lastname) . '@gmail.com';

            $count = User::where('email', $email)->count(); //recheck

            while ($count > 0) {
                $email = $lastname . rand(1, 9999) . '@gmail.com';
                $count = User::where('email', $email)->count();
            }
        }

        $user = User::create([
            'role_id' => 3,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // Create a pet owner associated with the user.
        $petOwner = PetOwner::create([
            'user_id' => $user->id,
            'firstname' => $porequest->input('firstname'),
            'lastname' => $porequest->input('lastname'),
            'contact_num' => $porequest->input('contact_num'),
            'zipcode_id' => $porequest->input('zipcode_id'),
            'barangay' => $porequest->input('barangay'),
            'zone' => $porequest->input('zone'),
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
        User::where('id', $petOwner->user_id)->delete();
        Notification::where('id', $petOwner->user_id)->delete();
        $pets = Pet::where('petowner_id', $petOwner->id)->get();
        foreach ($pets as $pet) {
            DewormingLog::where('pet_id', $pet->id)->delete();
            VaccinationLog::where('pet_id', $pet->id)->delete();
            Diagnosis::where('pet_id', $pet->id)->delete();
            Admission::where('pet_id', $pet->id)->delete();
            TestResult::where('pet_id', $pet->id)->delete();
            Treatment::where('pet_id', $pet->id)->delete();
            PetCondition::where('pet_id', $pet->treatment->pet->id)->delete();
            Medication::where('pet_id', $pet->treatment->pet->id)->delete();
            $pet->delete();
        }
        $services = ClientService::where('petowner_id', $petOwner->id)->get();
        foreach ($services as $service){
            ServicesAvailed::where('client_deposit_id', $service->id)->delete();
            PaymentRecord::where('client_deposit_id', $service->id)->delete();
            $service->delete();
        }
        $petOwner->delete();
        return response("Pet Owner was archived.");
    }
    

    public function archivelist()
    {
        $petOwners = PetOwner::onlyTrashed()->orderBy('id', 'desc')->get();

        if ($petOwners->isEmpty()) {
            return response()->json(['message' => 'No petowner archives found.'], 404);
        }

        return PetOwnerResource::collection($petOwners);
    }

    public function restore($id)
    {
        $petOwner = PetOwner::withTrashed()->findOrFail($id)->restore();
        User::where('id', $petOwner->user_id)->restore();
        Notification::where('id', $petOwner->user_id)->restore();
        $pets = Pet::where('petowner_id', $petOwner->id)->get();
        foreach ($pets as $pet) {
            DewormingLog::where('pet_id', $pet->id)->restore();
            VaccinationLog::where('pet_id', $pet->id)->restore();
            Diagnosis::where('pet_id', $pet->id)->restore();
            Admission::where('pet_id', $pet->id)->restore();
            TestResult::where('pet_id', $pet->id)->restore();
            Treatment::where('pet_id', $pet->id)->restore();
            PetCondition::where('pet_id', $pet->treatment->pet->id)->restore();
            Medication::where('pet_id', $pet->treatment->pet->id)->restore();
            $pet->restore();
        }
        $services = ClientService::where('petowner_id', $petOwner->id)->get();
        foreach ($services as $service){
            ServicesAvailed::where('client_deposit_id', $service->id)->restore();
            PaymentRecord::where('client_deposit_id', $service->id)->restore();
            $service->restore();
        }
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
        User::where('id', $petOwner->user_id)->forceDelete();
        Notification::where('id', $petOwner->user_id)->forceDelete();
        $pets = Pet::where('petowner_id', $petOwner->id)->get();
        foreach ($pets as $pet) {
            DewormingLog::where('pet_id', $pet->id)->forceDelete();
            VaccinationLog::where('pet_id', $pet->id)->forceDelete();
            Diagnosis::where('pet_id', $pet->id)->forceDelete();
            Admission::where('pet_id', $pet->id)->forceDelete();
            TestResult::where('pet_id', $pet->id)->forceDelete();
            Treatment::where('pet_id', $pet->id)->forceDelete();
            PetCondition::where('pet_id', $pet->treatment->pet->id)->forceDelete();
            Medication::where('pet_id', $pet->treatment->pet->id)->forceDelete();
            $pet->forceDelete();
        }
        $services = ClientService::where('petowner_id', $petOwner->id)->get();
        foreach ($services as $service){
            ServicesAvailed::where('client_deposit_id', $service->id)->forceDelete();
            PaymentRecord::where('client_deposit_id', $service->id)->forceDelete();
            $service->forceDelete();
        }
        $petOwner->forceDelete();
        return response("Permanently Deleted", 201);
    }
}
