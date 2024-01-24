<?php

namespace App\Http\Controllers\Api;

use App\Events\VaccinationReturn;
use App\Models\VaccinationLog;
use App\Models\Service;
use App\Models\ServicesAvailed;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVaccinationLogRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\StoreVaccinationAgainstRequest;
use App\Http\Requests\UpdateVaccinationLogRequest;
use App\Http\Resources\VaccinationLogResource;
use App\Models\Notification;
use App\Models\Pet;
use App\Models\PetOwner;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VaccinationLogController extends Controller
{
    public function listenForTodayVaccinations()
    {
        $today = Carbon::today();

        $vaccinationLogs = VaccinationLog::whereDate('return', $today)->get();

        foreach ($vaccinationLogs as $vaccination) {
            event(new VaccinationReturn($vaccination));
        }
        return response()->json(['message' => 'Event triggered for today\'s vaccinations.']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccinationLog = VaccinationLog::query()->orderBy('id', 'desc')->get();
        if ($vaccinationLog->isEmpty()) {
            return response()->json(['message' => 'No vaccination logs found.'], 404);
        }
        return VaccinationLogResource::collection($vaccinationLog);
    }

    public function byToday()
    {
        $today = Carbon::now();
        $vaccinationLog = VaccinationLog::where('return', $today)->get();
        if ($vaccinationLog->isEmpty()) {
            return response()->json(['message' => 'No vaccinations for today found.'], 404);
        }
        return VaccinationLogResource::collection($vaccinationLog);
    }

    public function byWeek()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $vaccinationLog = VaccinationLog::whereBetween('return', [$startOfWeek, $endOfWeek])->get();

        if ($vaccinationLog->isNotEmpty()) {
            return VaccinationLogResource::collection($vaccinationLog);
        }

        return response()->json(['message' => 'No vaccinations for this week found.'], 404);
    }

    public function byMonth()
    {
        $month = Carbon::now();

        $vaccinationLog = VaccinationLog::whereMonth('return', $month->month)
            ->whereYear('return', $month->year)
            ->get();

        if ($vaccinationLog->isNotEmpty()) {
            return VaccinationLogResource::collection($vaccinationLog);
        }

        return response()->json(['message' => 'No vaccinations for this month found.'], 404);
    }

    public function byYear()
    {
        $currentYear = Carbon::now()->year;

        $vaccinationLog = VaccinationLog::whereYear('return', $currentYear)->get();

        if ($vaccinationLog->isNotEmpty()) {
            return VaccinationLogResource::collection($vaccinationLog);
        }

        return response()->json(['message' => 'No vaccinations for this year found.'], 404);
    }

    public function getbyPetowner($id)
    {
        $petowner = PetOwner::findOrFail($id);
        $pets = Pet::where('petowner_id', $petowner->id)->pluck('id');

        $vaccinationLogs = VaccinationLog::where('pet_id', $pets)->whereDate('return', '>=', Carbon::today())->orderBy('return', 'desc')->get();


        if ($vaccinationLogs->isNotEmpty()) {
            return VaccinationLogResource::collection($vaccinationLogs);
        }

        return response()->json(['message' => 'No upcoming vaccinations found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVaccinationLogRequest $request, StoreServicesAvailedRequest $sarequest, $id, $sid)
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

        $vaccinationLog = VaccinationLog::create([
            'date' => Carbon::now(),
            'pet_id' => $servicesAvailed->pet_id,
            'weight' => $request->input('weight'),
            'description' => $request->input('description'),
            'vet_id' => $request->input('vet_id'),
            'va_againsts' => $request->input('va_againsts'),
            'return' => $request->input('return'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        $dateTime = Carbon::parse($vaccinationLog->return);
        $formattedDateTime = $dateTime->format('F j, Y');
        Notification::create([
            'date' => $vaccinationLog->return,
            'user_id' => $vaccinationLog->pet->petowner->user->id,
            'type' => 'Vaccination',
            'message' => "{$vaccinationLog->pet->name}'s vaccination return date is today $formattedDateTime.",
            'status' => 1, // to notify, not opened, not clicked
        ]);

        $admins = User::whereIn('role_id', [1, 2])->whereNull('deleted_at')->get();

        foreach ($admins as $admin) {
            $userId = $admin->id;
            $message = "{$vaccinationLog->pet->petowner->firstname} {$vaccinationLog->pet->petowner->lastname} pet {$vaccinationLog->pet->name} has return vaccination today.";

            // Notification for each admin 
            Notification::create([
                'date'=>$vaccinationLog->return,
                'user_id' => $userId,
                'type' => 'Vaccination',
                'message' => $message,
                'status' => 1, // to notify, not opened, not clicked
            ]);
        }

        return new VaccinationLogResource($vaccinationLog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        return new VaccinationLogResource($vaccinationLog);
    }

    public function getbyPet($id)
    {

        $vaccinationLogs = VaccinationLog::where('pet_id', $id)->orderBy('id', 'desc')->get();

        if ($vaccinationLogs->isEmpty()) {
            return response()->json(['message' => 'No vaccination logs found.'], 404);
        }

        return VaccinationLogResource::collection($vaccinationLogs);
    }

    public function getDiagnosisByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $vaccinationLogs = VaccinationLog::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($vaccinationLogs->isEmpty()) {
            return response()->json(['message' => 'No list of pet vaccinations found.'], 404);
        }

        return VaccinationLogResource::collection($vaccinationLogs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVaccinationLogRequest $request, VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $data = $request->validated();
        $vaccinationLog->update($data);

        return new VaccinationLogResource($vaccinationLog);
    }

    public function archive($id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $vaccinationLog->delete();
        return new VaccinationLogResource($vaccinationLog);
    }

    public function archivelist()
    {
        return VaccinationLogResource::collection(
            VaccinationLog::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $vaccinationLog = VaccinationLog::withTrashed()->findOrFail($id);
        $vaccinationLog->restore();
        return response("Vaccination was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VaccinationLog $vaccinationLog, $id)
    {
        $vaccinationLog = VaccinationLog::findOrFail($id);
        $vaccinationLog->forceDelete();
        return response("Permanently Deleted", 201);
    }
}
