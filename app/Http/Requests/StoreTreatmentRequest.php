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
            'diagnosis' => 'string|max:255',
            'body_weight'=>'numeric|max:55',
            'heart_rate'=>'numeric|max:55',
            'mucous_membranes'=>'numeric|max:55',
            'pr_prealbumin'=>'numeric|max:55',
            'temperature'=>'numeric|max:55',
            'respiration_rate'=>'numeric|max:55',
            'caspillar_refill_time'=>'numeric|max:55',
            'body_condition_score'=>'numeric|max:55',
            'fluid_rate'=>'numeric|max:55',
            'comments' => 'string|max:255',
            
            'pet_id' => 'exists:pets,id',
            'services_availed_id' => 'exists:services_availed,id',

        ];
    }
}
