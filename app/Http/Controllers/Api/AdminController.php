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
}
