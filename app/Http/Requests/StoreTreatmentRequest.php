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
            'diagnosis' => 'required|string',
            'body_weight' => 'required|numeric',
            'heart_rate' => 'numeric',
            'mucous_membranes' => 'numeric',
            'pr_prealbumin' => 'numeric',
            'temperature' => 'numeric',
            'respiration_rate' => 'numeric',
            'caspillar_refill_time' => 'numeric',
            'body_condition_score' => 'numeric',
            'fluid_rate' => 'numeric',
            'comments' => 'nullable|string',

            'pet_id' => 'exists:pets,id',

        ];
    }
}
