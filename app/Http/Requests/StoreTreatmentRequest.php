<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTreatmentRequest extends FormRequest
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
            'day' => 'required|numeric',
            'body_weight' => 'required|numeric',
            'heart_rate' => 'nullable|numeric',
            'mucous_membranes' => 'nullable|numeric',
            'pr_prealbumin' => 'nullable|numeric',
            'temperature' => 'nullable|numeric',
            'respiration_rate' => 'nullable|numeric',
            'caspillar_refill_time' => 'nullable|numeric',
            'body_condition_score' => 'nullable|numeric',
            'fluid_rate' => 'nullable|numeric',
            'comments' => 'nullable|string',

            'pet_id' => 'exists:pets,id',

        ];
    }
}
