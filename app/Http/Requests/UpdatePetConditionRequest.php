<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetConditionRequest extends FormRequest
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
            'eating' => 'nullable|string|max:255',
            'drinking' => 'nullable|string|max:255',
            'urinated' => 'nullable|string|max:255',
            'vomit' => 'nullable|string|max:255',
            'defecated' => 'nullable|string|max:255',
            'is_AM_or_PM' => 'required|string|max:255',
        ];
    }
}
