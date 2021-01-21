<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class patientRequest extends FormRequest
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
            'Prenom' => 'required|min:3',
            'Nom'    => 'required|min:3',
            'Email'  => 'required|min:10',
            'Tel'    => 'required|min:10',
            'Passwordl'    => 'required|min:8',
            'ConfPassword' => 'required|min:8',


        ];
    }
}
