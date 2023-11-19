<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetConditionRequest extends FormRequest
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
            'eating' => 'required|string|max:255',
            'drinking' => 'required|string|max:255',
            'urinated' => 'required|string|max:255',
            'vomit' => 'required|string|max:255',
            'defecated' => 'required|string|max:255',
            'is_AM_or_PM' => 'required|string|max:255',
            
            'treatment_id' => 'exists:treatment,id',
        ];
    }
}
