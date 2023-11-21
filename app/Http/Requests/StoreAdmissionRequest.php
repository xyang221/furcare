<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmissionRequest extends FormRequest
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
            'date_admission' => 'required|date',
            'date_released' => 'required|date',
            'treatment_cost' => 'required|numeric|max:55',
            'purpose' => 'required|string|max:255',

            'pet_id' => 'exists:pets,id',
            'treatment_id' => 'exists:treatment,id',

        ];
    }
}
