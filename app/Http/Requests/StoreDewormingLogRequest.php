<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDewormingLogRequest extends FormRequest
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
            'weight' => 'required|numeric',
            'description' => 'required|string|max:55',
            'administered' => 'required|string|max:55',
            'status' => 'required|string|max:55',
            'pet_id' => 'exists:pets,id',
            'services_availed_id' => 'exists:services_availed,id',
        ];
    }
}
