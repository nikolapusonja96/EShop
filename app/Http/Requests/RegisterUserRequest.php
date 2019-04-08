<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'fname'     =>  'required|regex:/^[A-Z][a-z]{3,11}$/',
            'lname'     =>  'required|regex:/^[A-Z][a-z]{3,11}$/',
            'email'     =>  'required|email|unique:users,mail|max:60',
            'address'   =>  'required',
            'password'   =>  'required',
            'city'      =>  'required|regex:/^[A-Z][a-z]{2,20}$/',
            'gender'    =>  'required',

        ];
    }
}
