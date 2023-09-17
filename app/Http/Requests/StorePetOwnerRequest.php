<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePetOwnerRequest extends FormRequest
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
            'firstname'=>'required|string|max:55',
            'lastname'=>'required|string|max:55',
            'contact_num' => 'required|string|min:8|max:11',
            // 'user_id' => 'exists:users,id',
            'user_id' => 'exists:users,id',
            'address_id' => 'exists:addresses,id',

        ];
    }
}
