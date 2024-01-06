<?php

namespace App\Http\Controllers\Api;

use App\Models\PaymentRecord;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRecordRequest;
use App\Http\Requests\UpdatePaymentRecordRequest;
use App\Http\Resources\PaymentRecordResource;
use App\Models\ClientService;

class PaymentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentRecords = PaymentRecord::orderBy('id', 'desc')->paginate(50);

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
        $clientdeposit = ClientService::where('petowner_id', $id)->first();
        $paymentRecords = PaymentRecord::where('client_deposit_id', $clientdeposit->id)->get();
        if ($paymentRecords->isEmpty()) {
            return response()->json(['message' => 'No payment records found on this client.'], 404);
        }
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
