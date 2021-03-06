<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contacto_validation extends FormRequest
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
            'nombre' => 'min:4|max:80|required',
            'email' => 'required|email|max:255|',
            'telefono' => 'min:8|max:10|required',
            'mensaje' => 'min:3|max:1000|required',
        ];
    }
}
