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
            'diagnosis' => 'required|string|max:255',
            'body_weight'=>'required|numeric|max:55',
            'heart_rate'=>'required|numeric|max:55',
            'mucous_membranes'=>'required|numeric|max:55',
            'pr_prealbumin'=>'required|numeric|max:55',
            'temperature'=>'required|numeric|max:55',
            'respiration_rate'=>'required|numeric|max:55',
            'caspillar_refill_time'=>'required|numeric|max:55',
            'body_condition_score'=>'required|numeric|max:55',
            'fluid_rate'=>'required|numeric|max:55',
            'comments' => 'string|max:255',
            
            'pet_id' => 'exists:pet,id',

        ];
    }
}
