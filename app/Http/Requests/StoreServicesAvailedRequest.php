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
            'quantity' => 'required|numeric',
            'unit' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'date_availed_for' => 'required|date',
            'service_id' => 'exists:services,id',
            'petowner_id' => 'exists:petowners,id'

        ];
    }
}
