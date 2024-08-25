<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => ['required', 'alpha', 'min:6'],
            'email' => 'required',
            'passsword' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'The Username is required!',
            'name.alpha' => 'The username should only contain letters',
            'email.required' => 'The email is required!',
            'password.required' => 'The Password is required!'
        ];
    }
}
