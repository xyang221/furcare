<?php

namespace App\Http\Controllers\Api;

use App\Models\ClientService;
use App\Models\PetOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientServiceRequest;
use App\Http\Requests\StorePaymentRecordRequest;
use App\Http\Requests\UpdateClientServiceRequest;
use App\Http\Resources\ClientServiceResource;
use App\Http\Resources\ServicesAvailedResource;
use App\Models\PaymentRecord;
use App\Models\ServicesAvailed;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ClientServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientService = ClientService::query()->orderBy('id', 'desc')->get();
        return ClientServiceResource::collection($clientService);
    }

    public function depositsToday()
    {
        $today = Carbon::now()->toDateString();

        $deposits = ClientService::orderBy('id', 'desc')->whereDate('date', $today)->get();

        if ($deposits->isEmpty()) {
            return response()->json(['message' => 'No client deposits found today.'], 404);
        }

        return ClientServiceResource::collection($deposits);
    }

    public function getDepositsbyDate($date)
    {
        $timestamp = strtotime($date);
        $dateString = Carbon::createFromTimestamp($timestamp)->toDateString();

        $deposits = ClientService::whereDate('date', '=', $dateString)
            ->where('deposit', '!=', 0)
            ->get();

        if ($deposits->isEmpty()) {
            return response()->json(['message' => 'No list of client deposits found within this date.'], 404);
        }

        return ClientServiceResource::collection($deposits);
    }

    public function balance($id)
    {
        $petowner = PetOwner::findOrFail($id);

        $clientService = ClientService::where('petowner_id', $petowner->id)
            ->where('status', 'Pending')
            ->latest()
            ->first();

        if (!$clientService) {
            return response()->json(['balance' => 0], 404);
        }
        $balance = 0;
        $balance = $clientService->balance;
        return response()->json(['balance' => $balance]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientServiceRequest $request, $id)
    {
        $petowner = PetOwner::findOrFail($id);

        $verifyclientService = ClientService::where('petowner_id', $petowner->id)
            ->whereIn('status', ['Pending', 'To Pay'])
            ->first();

        if ($verifyclientService) {
            return response()->json(['message' => 'This client had already services availed.'], 403);
        } else {

            $data = $request->validated(); //get the data

            $data['petowner_id'] = $petowner->id;

            $user = Auth::user();
            $staff = $user->staff;

            if ($staff) {
                $renderedby = "$staff->firstname $staff->lastname";
            } else {
                $renderedby = "Admin";
            }

            $data['date'] = Carbon::now();
            $data['rendered_by'] = $renderedby;
            $data['status'] = "To Pay";
            ClientService::create($data);
        }
    }

    public function newBalance(UpdateClientServiceRequest $request, $id)
    {
        $petowner = PetOwner::findOrFail($id);

        $verifyclientService = ClientService::where('petowner_id', $petowner->id)
            ->where('status', 'Pending')
            ->latest()
            ->first();

        if (!$verifyclientService) {
            return response()->json(['error' => 'No pending client service found.']);
        }

        $data = $request->validated();

        $data['current_balance'] = $request->input('current_balance');
        $data['prev_balance'] += $verifyclientService->current_balance;

        $verifyclientService->update($data);

        return response()->json(['success' => 'Balance updated successfully.']);
    }


    /**
     * Display the specified resource.
     */
    public function show(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->where('status', "To Pay")->first();
        return new ClientServiceResource($clientService);
    }

    public function showClientdeposit($id)
    {
        $clientService = ClientService::findOrFail($id);
        return new ClientServiceResource($clientService);
    }

    public function showall(ClientService $clientService, $id)
    {
        $clientService = ClientService::where('petowner_id', $id)->orderBy('id', 'desc')->get();

        if ($clientService->isEmpty()) {
            return response()->json(['message' => 'No payments found in this client.'], Response::HTTP_NOT_FOUND);
        }

        return ClientServiceResource::collection($clientService);
    }

    public function showallServicesCompleted($id)
    {
        $clientService = ClientService::findOrFail($id);
        $servicesAvailed = ServicesAvailed::where('client_deposit_id', $id)->orderBy('pet_id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed yet.'], Response::HTTP_NOT_FOUND);
        }

        return [
            'data' => ServicesAvailedResource::collection($servicesAvailed),
            'clientservice' => new ClientServiceResource($clientService),
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientServiceRequest $request, StorePaymentRecordRequest $preq, $id)
    {
        $clientService = ClientService::findOrFail($id);
        $payment = PaymentRecord::where('client_deposit_id', $clientService->id)->latest()->first();
        $data = $request->validated();
        $pdata = $preq->validated();

        $user = Auth::user();
        $staff = $user->staff;

        $renderedby = $staff ? "$staff->firstname $staff->lastname" : "Admin";

        if ($data['status'] == "To Pay" && $data['balance'] === 0) {
            $data['status'] = "Completed";
            ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
            $clientService->update($data);

            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $preq->input('total'),
                'discount' => $preq->input('discount'),
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
                'amounts_payable' => $preq->input('amounts_payable'),
                'client_deposit_id' => $preq->input('client_deposit_id'),
            ];

            PaymentRecord::create($newPaymentRecord);
            return new ClientServiceResource($clientService);
        } else if ($data['status'] == "To Pay" && $data['balance'] !== 0) {
            $data['status'] = "Pending";
            $data['balance'] = $request->input('balance');
            ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Pending']);
            $clientService->update($data);

            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $preq->input('total'),
                'discount' => $preq->input('discount'),
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
                'amounts_payable' => $preq->input('amounts_payable'),
                'client_deposit_id' => $preq->input('client_deposit_id'),
            ];

            PaymentRecord::create($newPaymentRecord);
            return new ClientServiceResource($clientService);
        } else if ($data['status'] == "Pending" && $data['balance'] !== 0) {
            $data['status'] = "Pending";
            $data['balance'] = $request->input('balance');
            ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Pending']);
            $clientService->update($data);

            // $newClientServiceData = [
            //     'date' => Carbon::now(),
            //     'petowner_id' => $clientService->petowner->id,
            //     'deposit' => $clientService->deposit,
            //     'balance' => $request->input('balance'),
            //     'rendered_by' => $renderedby,
            //     'status' => "Pending",
            // ];
            // $new = ClientService::create($newClientServiceData);
            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $payment->total,
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
                'amounts_payable' => $preq->input('amounts_payable'),
                'client_deposit_id' => $clientService->id,
            ];

            PaymentRecord::create($newPaymentRecord);
            return new ClientServiceResource($clientService);
        } else if ($data['status'] == "Pending" && $data['balance'] === 0) {
            $data['status'] = "Completed";
            $data['balance'] = 0;
            ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
            $clientService->update($data);

            // $newClientServiceData = [
            //     'date' => Carbon::now(),
            //     'petowner_id' => $clientService->petowner->id,
            //     'deposit' => $clientService->deposit,
            //     'balance' => $request->input('balance'),
            //     'rendered_by' => $renderedby,
            //     'status' => "Completed",
            // ];
            // $new = ClientService::create($newClientServiceData);
            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $payment->total,
                'discount' => $preq->input('discount'),
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
                'amounts_payable' => $preq->input('amounts_payable'),
                'client_deposit_id' => $clientService->id,
            ];

            PaymentRecord::create($newPaymentRecord);
            return new ClientServiceResource($clientService);
        }

        // if ($data['balance'] === 0) {
        //     $data['status'] = "Completed";
        //     $data['balance'] = $clientService->balance;
        //     ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
        //     $clientService->update($data);

        //     $newClientServiceData = [
        //         'date' => Carbon::now(),
        //         'petowner_id' => $clientService->petowner->id,
        //         'deposit' => 0,
        //         'balance' => $request->input('balance'),
        //         'rendered_by' => $renderedby,
        //         'status' => "Completed",
        //     ];

        //     $new = ClientService::create($newClientServiceData);
        //     $newPaymentRecord = [
        //         'date' => Carbon::now(),
        //         'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
        //         'type' => $preq->input('type'),
        //         'type_ref_no' => $preq->input('type_ref_no'),
        //         'total' => $preq->input('total'),
        //         'amount' => $preq->input('amount'),
        //         'change' => $preq->input('change'),
        //         'client_deposit_id' => $new->id,
        //     ];

        //     PaymentRecord::create($newPaymentRecord);

        //     return new ClientServiceResource($clientService);
        // } else {
        //     // Create a new client service record
        //     $newClientServiceData = [
        //         'date' => Carbon::now(),
        //         'petowner_id' => $clientService->petowner->id,
        //         'deposit' => $clientService->deposit,
        //         'balance' => $request->input('balance'),
        //         'rendered_by' => $renderedby,
        //         'status' => "Pending",
        //     ];

        //     $newPaymentRecord = [
        //         'date' => Carbon::now(),
        //         'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
        //         'type' => $preq->input('type'),
        //         'type_ref_no' => $preq->input('type_ref_no'),
        //         'total' => $preq->input('total'),
        //         'amount' => $preq->input('amount'),
        //         'change' => $preq->input('change'),
        //     ];

        //     if ($data['status'] == "Pending") {
        //         $new = ClientService::create($newClientServiceData);
        //         $pdata['client_deposit_id'] = $new->id;
        //         PaymentRecord::create($newPaymentRecord);
        //         $data['status'] = "Completed";
        //         $data['balance'] = $clientService->balance;
        //         ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
        //         $clientService->update($data);
        //     } else if ($data['status'] == "To Pay") 
        //     {
        //         $newClientServiceData = [
        //             'date' => Carbon::now(),
        //             'petowner_id' => $clientService->petowner->id,
        //             'deposit' => $clientService->deposit,
        //             'balance' => $request->input('balance'),
        //             'rendered_by' => $renderedby,
        //             'status' => "Pending",
        //         ];

        //         $newPaymentRecord = [
        //             'date' => Carbon::now(),
        //             'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
        //             'type' => $preq->input('type'),
        //             'type_ref_no' => $preq->input('type_ref_no'),
        //             'total' => $preq->input('total'),
        //             'amount' => $preq->input('amount'),
        //             'change' => $preq->input('change'),
        //         ];

        //         $data['status'] = "Pending";
        //         $data['balance'] += $clientService->balance;
        //         ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Pending']);
        //         // $pdata['client_deposit_id'] = $clientService->id;
        //         // PaymentRecord::create($newPaymentRecord);
        //         $pdata['client_deposit_id'] = $clientService->id;
        //         PaymentRecord::create($newPaymentRecord);
        //         $clientService->update($data);
        //     }

        //     return new ClientServiceResource($clientService);
        // }
    }

    public function updateBalance(UpdateClientServiceRequest $request, StorePaymentRecordRequest $preq, $id)
    {
        $clientService = ClientService::findOrFail($id)->first();
        $data = $request->validated();
        $pdata = $preq->validated();

        $user = Auth::user();
        $staff = $user->staff;

        $renderedby = $staff ? "$staff->firstname $staff->lastname" : "Admin";

        if ($data['balance'] === 0) {
            $data['status'] = "Completed";
            $data['balance'] = $clientService->balance;
            ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
            $clientService->update($data);

            $newClientServiceData = [
                'date' => Carbon::now(),
                'petowner_id' => $clientService->petowner->id,
                'deposit' => 0,
                'balance' => $request->input('balance'),
                'rendered_by' => $renderedby,
                'status' => "Completed",
            ];

            $new = ClientService::create($newClientServiceData);
            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $preq->input('total'),
                'discount' => $preq->input('discount'),
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
                'client_deposit_id' => $new->id,
            ];

            PaymentRecord::create($newPaymentRecord);

            return new ClientServiceResource($clientService);
        } else {
            // Create a new client service record
            $newClientServiceData = [
                'date' => Carbon::now(),
                'petowner_id' => $clientService->petowner->id,
                'deposit' => $clientService->deposit,
                'balance' => $request->input('balance'),
                'rendered_by' => $renderedby,
                'status' => "Pending",
            ];

            $newPaymentRecord = [
                'date' => Carbon::now(),
                'chargeslip_ref_no' => $preq->input('chargeslip_ref_no'),
                'type' => $preq->input('type'),
                'type_ref_no' => $preq->input('type_ref_no'),
                'total' => $preq->input('total'),
                'discount' => $preq->input('discount'),
                'amount' => $preq->input('amount'),
                'change' => $preq->input('change'),
            ];

            if ($data['status'] == "Pending") {
                $new = ClientService::create($newClientServiceData);
                $pdata['client_deposit_id'] = $new->id;
                PaymentRecord::create($newPaymentRecord);
                $data['status'] = "Completed";
                $data['balance'] = $clientService->balance;
                ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Completed']);
                $clientService->update($data);
            } else if ($data['status'] == "To Pay") {

                $data['status'] = "Pending";
                $data['balance'] += $clientService->balance;
                ServicesAvailed::where('client_deposit_id', $clientService->id)->update(['status' => 'Pending']);
                // $pdata['client_deposit_id'] = $clientService->id;
                // PaymentRecord::create($newPaymentRecord);
                $clientService->update($data);
                $pdata['client_deposit_id'] = $clientService->id;
                PaymentRecord::create($newPaymentRecord);
            }

            return new ClientServiceResource($clientService);
        }
    }




    public function updateDeposit(UpdateClientServiceRequest $request, ClientService $clientService, $id)
    {
        $clientService = ClientService::findOrFail($id);
        $data = $request->validated();
        $clientService->update($data);
        return new ClientServiceResource($clientService);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientService $clientService)
    {
        $clientService->delete();
        return response()->json("client service Deleted");
    }
}
