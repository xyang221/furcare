<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
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
            'date' => 'required|date',
            'purpose' => 'required|string',
            'status' => 'in:pending,cancelled,scheduled,done', 
            'remarks' => 'sometimes|string',
            // 'petowner_id' => 'exists:petowners,id',
            // 'client_service_id' => 'exists:client_service,id',
        ];
    }
}
