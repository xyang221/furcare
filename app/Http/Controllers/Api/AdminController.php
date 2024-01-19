<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaymentRecord;
use App\Models\Pet;
use App\Models\PetOwner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homeComponents()
    {
        $pets = Pet::count();
        $petOwners = PetOwner::count();

        $today = Carbon::now()->toDateString();
        $paymentRecords = PaymentRecord::whereDate('date', $today)->get();
        $totalIncome = $paymentRecords->sum('total');

        return response()->json(['pets' => $pets, 'petowners' => $petOwners, 'income' => $totalIncome]);
    }

    public function searchPetownerandPet($name)
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

            $pets = Pet::where('name', 'like', "%{$name}%")->get();

            // Combine the results
            $combinedResults = collect([
                'petOwners' => $petOwners,
                'pets' => $pets,
            ]);

            if ($petOwners->isEmpty() && $pets->isEmpty()) {
                return response()->json(['message' => 'No pet owners or pets found.'], 404);
            }

            return $combinedResults;
        } catch (\Exception $e) {
            // Handle exceptions or errors that may occur during the query
            return response()->json(['message' => 'An error occurred while searching for pet owners.'], 500);
        }
    }
}
