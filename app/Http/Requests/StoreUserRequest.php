<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            // 'name'=>'required|string|max:55',
            // 'firstname'=>'required|string|max:55',
            // 'lastname'=>'required|string|max:55',
            // 'contact_num'=>'required|number|digits:11',

            //for account
            'username'=>'required|string|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                ->letters()
                ->mixedCase() // Add this for mixed case letters
            ]
        ];
    }
}
