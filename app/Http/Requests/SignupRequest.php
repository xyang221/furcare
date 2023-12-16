<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
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
          
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase() 
            ],
            'firstname'=>'required|string|max:55',
            'lastname'=>'required|string|max:55',
            'contact_num' => 'required|string|min:10|max:12',
            'zipcode_id' => 'exists:zipcodes,id',
            'barangay' => 'required|string|max:55',
            'zone' => 'required|string|max:55',
            'user_id' => 'exists:users,id',
            'address_id' => 'exists:addresses,id',

        ];
    }
}
