<?php

namespace App\Http\Controllers\Api;

use App\Events\DewormingReturn;
use App\Models\DewormingLog;
use App\Models\ServicesAvailed;
use App\Models\Service;
use App\Models\ClientService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDewormingLogRequest;
use App\Http\Requests\StoreServicesAvailedRequest;
use App\Http\Requests\UpdateDewormingLogRequest;
use App\Http\Resources\DewormingLogResource;
use App\Models\Notification;
use App\Models\PetOwner;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DewormingLogController extends Controller
{

    public function listenForTodayDewormings()
    {
        $today = Carbon::now();

        $dewormingLogs = DewormingLog::whereDate('return', $today)->get();

        if ($dewormingLogs->isNotEmpty()) {
            foreach ($dewormingLogs as $deworming) {
                event(new DewormingReturn($deworming));
            }
            return response()->json(['message' => 'Event triggered for today\'s dewormings.']);
        } else {
            return response()->json(['message' => 'No dewormings found for today.']);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dewormingLog = DewormingLog::query()->orderBy('id', 'desc')->paginate(50);

        if ($dewormingLog->isEmpty()) {
            return response()->json(['message' => 'No deworming logs found.'], 404);
        }

        return DewormingLogResource::collection($dewormingLog);
    }

    public function byToday()
    {
        $today = Carbon::now();
        $dewromingLog = DewormingLog::where('return', $today)->get();
        if ($dewromingLog->isEmpty()) {
            return response()->json(['message' => 'No deworming for today found.'], 404);
        }
        return DewormingLogResource::collection($dewromingLog);
    }

    public function byWeek()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $dewromingLog = DewormingLog::whereBetween('return', [$startOfWeek, $endOfWeek])->get();

        if ($dewromingLog->isNotEmpty()) {
            return DewormingLogResource::collection($dewromingLog);
        }

        return response()->json(['message' => 'No deworming for this week found.'], 404);
    }

    public function byMonth()
    {
        $month = Carbon::now();

        $dewromingLog = DewormingLog::whereMonth('return', $month->month)
            ->whereYear('return', $month->year)
            ->get();

        if ($dewromingLog->isNotEmpty()) {
            return DewormingLogResource::collection($dewromingLog);
        }

        return response()->json(['message' => 'No deworming for this month found.'], 404);
    }

    public function byYear()
    {
        $currentYear = Carbon::now()->year;

        $dewromingLog = DewormingLog::whereYear('return', $currentYear)->get();

        if ($dewromingLog->isNotEmpty()) {
            return DewormingLogResource::collection($dewromingLog);
        }

        return response()->json(['message' => 'No deworming for this year found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDewormingLogRequest $drequest, StoreServicesAvailedRequest $sarequest, $id, $sid)
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
                'petowner_id' => $petowner->id,
                'deposit' => 0,
                'rendered_by' => $renderedby,
                'status' => "To Pay",
            ]);

            $clientService = $newclientService;
        }

        $servicesAvailed = ServicesAvailed::create([
            'service_id' => $service->id,
            'unit_price' => $sarequest->input('unit_price'),
            'client_deposit_id' => $clientService->id,
            'pet_id' => $sarequest->input('pet_id'),
            'status' => "To Pay",
        ]);

        $dewormingLog = DewormingLog::create([
            'pet_id' => $servicesAvailed->pet_id,
            'weight' => $drequest->input('weight'),
            'description' => $drequest->input('description'),
            'vet_id' => $drequest->input('vet_id'),
            'return' => $drequest->input('return'),
            'services_availed_id' => $servicesAvailed->id,
        ]);

        $dateTime = Carbon::parse($dewormingLog->return);
        $formattedDateTime = $dateTime->format('F j, Y');
        Notification::create([
            'date' => $dewormingLog->return,
            'user_id' => $dewormingLog->pet->petowner->user->id,
            'type' => 'Deworming',
            'message' => "{$dewormingLog->pet->name}'s deworming return date is today $formattedDateTime.",
            'status' => 1, // to notify, not opened, not clicked
        ]);

        $admins = User::whereIn('role_id', [1, 2])->whereNull('deleted_at')->get();

        foreach ($admins as $admin) {
            $userId = $admin->id;
            $message = "{$dewormingLog->pet->petowner->firstname} {$dewormingLog->pet->petowner->lastname} pet {$dewormingLog->pet->name} has return deworming today.";

            // Notification for each admin 
            Notification::create([
                'date' => $dewormingLog->return,
                'user_id' => $userId,
                'type' => 'Deworming',
                'message' => $message,
                'status' => 1, // to notify, not opened, not clicked
            ]);
        }

        return new DewormingLogResource($dewormingLog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DewormingLog $dewormingLog, $id)
    {
        $dewormingLog = DewormingLog::find($id);
        return new DewormingLogResource($dewormingLog);
    }

    public function getbyPet($id)
    {

        $dewormingLogs = DewormingLog::where('pet_id', $id)->get();

        if ($dewormingLogs->isEmpty()) {
            return response()->json(['message' => 'No deworming logs found in this pet.'], 404);
        }

        return DewormingLogResource::collection($dewormingLogs);
    }

    public function getDewormingByServiceandPetowner($id, $sid)
    {
        $servicesAvailedIds = Service::findOrFail($sid);
        $clientServiceIds = ClientService::where('petowner_id', $id)->pluck('id');

        $servicesAvailedIdsFiltered = ServicesAvailed::whereIn('client_deposit_id', $clientServiceIds)
            ->where('service_id', $servicesAvailedIds->id)
            ->pluck('id');

        $dewormingLog = DewormingLog::whereIn('services_availed_id', $servicesAvailedIdsFiltered)
            ->orderBy('id', 'desc')
            ->get();

        if ($dewormingLog->isEmpty()) {
            return response()->json(['message' => 'No list of pet deworming found.'], 404);
        }

        return DewormingLogResource::collection($dewormingLog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDewormingLogRequest $request, DewormingLog $dewormingLog, $id)
    {
        $dewormingLog = DewormingLog::findOrFail($id);
        $data = $request->validated();
        $dewormingLog->update($data);

        return new DewormingLogResource($dewormingLog);
    }

    public function archive($id)
    {
        $dewormingLog = DewormingLog::findOrFail($id);
        $dewormingLog->delete();
        return new DewormingLogResource($dewormingLog);
    }

    public function archivelist()
    {
        return DewormingLogResource::collection(
            DewormingLog::onlyTrashed()->orderBy('id', 'desc')->get()
        );
    }

    public function restore($id)
    {
        $dewormingLog = DewormingLog::withTrashed()->findOrFail($id);
        $dewormingLog->restore();
        return response("Deworming was restored successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DewormingLog $dewormingLog, $id)
    {
        $dewormingLog = DewormingLog::findOrFail($id);
        $dewormingLog->forceDelete();
        return response("Permanently Deleted", 201);
    }
}
