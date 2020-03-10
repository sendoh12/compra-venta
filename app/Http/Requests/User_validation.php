<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User_validation extends FormRequest
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
            'Nombre' => 'min:2|max:60|required',
            'correo' => 'min:4|max:120|required|email',
            'password' => 'min:4|max:120|required',
            'Rol' => 'min:1|max:2|required',
        ];
    }
}
