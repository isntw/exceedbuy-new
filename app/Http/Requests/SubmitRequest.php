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
            'fname' => 'required|',
            'lname' => 'required|exists:cards,id|unique:card_assignments,card_id',
            'email' => 'required|email',
            'body' => 'required|max:256',
        ];
    }

//    public function messages() {
//        return [
//        ];
//    }

}
