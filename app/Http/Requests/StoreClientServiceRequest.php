<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientServiceRequest extends FormRequest
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
            'deposit'=>'required|double|max:55',
            'balance'=>'required|double|max:55',
            'rendered_by' => 'string',
            'petowner_id' => 'exists:petowners,id',
            'service_id' => 'exists:services,id',
        ];
    }
}
