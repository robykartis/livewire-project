<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name field must be filled!',
            'name.min' => 'Name must be at least 3 characters',
            'name.max' => 'Name cannot be longer than 20 characters',
            'email.required' => 'Email field must be filled!',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'The email you entered is already registered',
            'password.required' => 'Password cannot be empty!',
            'password.min' => 'Password must be at least 8 characters',
            'password_confirmation.required' => 'Password confirmation cannot be empty',
            'password_confirmation.same' => 'Password confirmation does not match',
        ];
    }
}
