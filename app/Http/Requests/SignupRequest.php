<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'firstname' => 'required|string|max:55',
            'lastname' => 'required|string|max:55',
            'contact_num' => 'required|integer|max:11',
            'username' => 'required|string|unique:users,username',
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)->letters()->symbols()
            ]
        ];
    }
}
