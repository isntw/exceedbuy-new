<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'body' => 'required|max:4096',
        ];
    }

    public function messages() {
        return [
            'fname.required' => 'Please insert your first name.',
            'lname.required' => 'Please insert your last name.',
            'email.required' => 'Please insert your email.',
            'email.email' => 'Please insert a valid email.',
            'body.required' => 'Please insert a message.',
            'body.max' => 'Please insert a message up to 4096 characters.',
        ];
    }

}
