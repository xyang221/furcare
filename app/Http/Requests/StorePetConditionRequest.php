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
            'eating' => 'nullable|string|max:55',
            'drinking' => 'nullable|string|max:55',
            'urinated' => 'nullable|string|max:55',
            'vomit' => 'nullable|string|max:55',
            'defecated' => 'nullable|string|max:55',
            'is_AM_or_PM' => 'required|string|max:55',
            
            'treatment_id' => 'exists:treatment,id',
        ];
    }
}
