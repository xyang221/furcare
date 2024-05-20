<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetRequest extends FormRequest
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
            'name' => 'required|string|max:55',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|string|max:55',
            'color' => 'nullable|string|max:55',
            'breed_id' => 'exists:breeds,id',
            'breed2_id' => 'nullable|exists:breeds,id',
            'specie_id' => 'exists:species,id',
        ];
    }
}
