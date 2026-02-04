<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    // Form request used for more complex validations

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ];
    }


    // customize error messages
    public function messages() {
        return [
            'name.required' => ':attribute is required',
            'email.required' => ':attribute is required',
            'password.required' => ':attribute is required',
        ];
    }

    // customize attributes
    public function attributes() {
        return [
            'name' => 'full name',
            'email' => 'email address',
            'password' => 'secret password',
        ];
    }
}
