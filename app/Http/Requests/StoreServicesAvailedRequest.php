<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesAvailedRequest extends FormRequest
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
            'date'=>'date',
            'status' => 'in:To Pay,Completed',
            'unit' => 'nullable|string',
            'unit_price' => 'nullable|numeric',
            'quantity' => 'numeric',
            'service_id' => 'nullable|exists:services,id',
            'client_deposit_id' => 'exists:client_deposits,id',
            'pet_id' => 'exists:pets,id',

        ];
    }
}
