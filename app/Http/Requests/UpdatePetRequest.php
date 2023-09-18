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
            'photo' =>'required',
            'name'=>'required|string|max:55',
            'birthdate'=>'required|date',
            'gender' => 'required|string|max:55',
            'color' => 'required|string|max:55',
            'qr_code' => 'required|string|max:55',
            'breed_id' => 'exists:breeds,id',
            // 'petowner_id' => 'exists:petowners,id'
        ];
    }
}
