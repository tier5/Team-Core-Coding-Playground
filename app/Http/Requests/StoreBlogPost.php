<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'firstName'         =   'required',
            'lastName'          =   'required',
            'email'             =   'required|unique:users',
            'password'          =   'required|min:8',
            'confirmPassword'   =   'required|same:password'
        ];
    }
}
