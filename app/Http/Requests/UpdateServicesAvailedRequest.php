<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesAvailedRequest extends FormRequest
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
            'unit' => 'nullable|string',
            'unit_price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'string',
            'service_id' => 'exists:services,id',
            'client_deposit_id' => 'exists:client_deposits,id',
            'pet_id' => 'exists:pets,id',
        ];
    }
}
