<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicationRequest extends FormRequest
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
            'description' => 'nullable|string',
            'dosage' => 'required|numeric',
            'unit' => 'required|string',
            'am'=>'nullable|boolean',
            'pm'=>'nullable|boolean',
            'services_availed_id' => 'exists:treatment,id',
        ];
    }
}
