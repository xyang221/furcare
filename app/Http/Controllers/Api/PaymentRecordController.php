<?php

namespace App\Http\Controllers\Api;

use App\Models\PaymentRecord;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRecordRequest;
use App\Http\Requests\UpdatePaymentRecordRequest;
use App\Http\Resources\PaymentRecordResource;
use App\Models\ClientService;
use Carbon\Carbon;

class PaymentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentRecords = PaymentRecord::orderBy('id', 'desc')->get();

        if ($paymentRecords->isEmpty()) {
            return response()->json(['message' => 'No peyament records found.'], 404);
        }

        return PaymentRecordResource::collection($paymentRecords);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRecordRequest $request, $id)
    {
        $clientdeposit = ClientService::findOrFail($id);
        $data = $request->validated(); //get the data
        $data['date'] = Carbon::now();
        $data['client_deposit_id'] = $clientdeposit->id;
        $paymentRecord = PaymentRecord::create($data);
        return new PaymentRecordResource($paymentRecord, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentRecord $paymentRecord, $id)
    {
        $paymentRecord = PaymentRecord::findOrFail($id);
        return new PaymentRecordResource($paymentRecord);
    }

    public function showPetownerPayments(PaymentRecord $paymentRecord, $id)
    {
        // Retrieve client deposits for the given pet owner ID
        $clientDeposits = ClientService::where('petowner_id', $id)->get();

        // Check if client deposits are empty
        if ($clientDeposits->isEmpty()) {
            return response()->json(['message' => 'No payment records found for this client.'], 404);
        }

        // Extract client deposit IDs from the collection
        $clientDepositIds = $clientDeposits->pluck('id')->toArray();

        // Retrieve payment records based on the client deposit IDs
        $paymentRecords = PaymentRecord::whereIn('client_deposit_id', $clientDepositIds)
            ->orderBy('date', 'desc')
            ->get();

        // Check if payment records are empty
        if ($paymentRecords->isEmpty()) {
            return response()->json(['message' => 'No payment records found for this client.'], 404);
        }

        // Return a JSON response with the payment records using a resource
        return PaymentRecordResource::collection($paymentRecords);
    }

    public function showClientDepositPayment(PaymentRecord $paymentRecord, $id)
    {
        $clientdeposit = ClientService::findOrFail($id);
        $paymentRecords = PaymentRecord::where('client_deposit_id', $clientdeposit->id)->first();
        return new PaymentRecordResource($paymentRecords);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRecordRequest $request, PaymentRecord $paymentRecord, $id)
    {
        $paymentRecord = PaymentRecord::findOrFail($id);
        $data = $request->validated();
        $paymentRecord->update($data);

        return new PaymentRecordResource($paymentRecord);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentRecord $paymentRecord)
    {
        $paymentRecord->delete();
        return response()->json(['message' => 'This payment record had been archived.'], 204);
    }
}
