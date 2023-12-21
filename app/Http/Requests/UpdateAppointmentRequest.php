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
            'status' => 'in:Completed,No Show,Rescheduled,Pending,Cancelled,Confirmed', // Use 'in' rule for specific values
            'remarks' => 'nullable|string',
            'service_id' => 'exists:services,id',
            'vet_id' => 'exists:veterinarians,id',
        ];
    }
}
