<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVaccinationLogRequest extends FormRequest
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
            'weight' => 'required|numeric',
            'description' => 'nullable|string|max:255',
            'return' => 'required|date',
            'pet_id' => 'exists:pets,id',
            'vet_id' => 'exists:doctors,id',
            'services_availed_id' => 'exists:services_availed,id',
            'va_againsts' => 'required|string'

        ];
    }
}
