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
            'status' => 'in:To Pay,Completed',
            'service_id' => 'exists:services,id',
            'unit_price' => 'numeric',
            'client_service_id' => 'exists:client_service,id',
            'pet_id' => 'exists:pets,id',

        ];
    }
}
