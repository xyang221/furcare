<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'chargeslip_ref_no' => 'required|numeric',
            'type' => 'required|string',
            'type_ref_no' => 'nullable|string',
            'total' => 'required|numeric',
            'amount' => 'required|numeric',
            'change' => 'required|numeric',

            'client_deposit_id' => 'exists:client_deposits,id',
        ];
    }
}
