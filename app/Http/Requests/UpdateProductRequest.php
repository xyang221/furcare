<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'nullable|string',
            'quantity' => 'required|numeric',
            'unit' => 'nullable|string',

            'pet_id' => 'exists:pets,id',
            'treatment_id' => 'exists:treatment,id',
            'services_availed' => 'exists:services_availed,id',
        ];
    }
}
