<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicationRequest extends FormRequest
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
            'date' => 'date',
            'description' => 'nullable|string',
            'dosage' => 'required|numeric',
            'unit' => 'required|string',
            'am'=>'nullable|boolean',
            'pm'=>'nullable|boolean',

            'med_id' => 'exists:medicines,id',
            'pet_id' => 'exists:pets,id',
            'treatment_id' => 'exists:treatment,id',
            'services_availed_id' => 'exists:treatment,id',
        ];
    }
}
