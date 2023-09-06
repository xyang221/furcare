<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            'date'=>'required|date',
            'purpose'=>'required|string',
            'status' => 'required|string',
            'remarks' => 'string',
            'petowner_id' => 'exists:pet_owners,id',
            'client_service_id' => 'exists:client_service,id',
        ];
    }
}
