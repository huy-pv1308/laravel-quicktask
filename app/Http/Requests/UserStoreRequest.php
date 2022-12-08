<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:6|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255'
        ];
    }
}
