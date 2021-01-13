<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class FormRequestValidation extends FormRequest
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
            'username' => "required",
            'password' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return[
            'username.required' => 'How dare you',
            'password.required' => 'I want password',
            'password.min' => 'Atleast 4 character please'
        ];
    }
}
