<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full-name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|digits:10',
            'job' => 'required',
            'password' => 'required|min:6|max:32|confirmed',
        ];
    }
}
