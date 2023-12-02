<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestResultRequest extends FormRequest
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
            'attachment' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>'string',
            // 'diagnosis_id' => 'exists:diagnosis,id',
            'pet_id' => 'exists:pets,id',
            'services_availed_id' => 'exists:services_availed,id'
        ];
    }
}
