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
            'date'=>'date',
            'day' => 'required|numeric',
            'body_weight' => 'required|numeric',
            'heart_rate' => 'nullable|string',
            'mucous_membranes' => 'nullable|string',
            'pr_prealbumin' => 'nullable|string',
            'temperature' => 'nullable|string',
            'respiration_rate' => 'nullable|string',
            'caspillar_refill_time' => 'nullable|string',
            'body_condition_score' => 'nullable|string',
            'fluid_rate' => 'nullable|string',
            'comments' => 'nullable|string',

            'pet_id' => 'exists:pets,id',
            'admisson_id' => 'exists:admisson,id',

        ];
    }
}
