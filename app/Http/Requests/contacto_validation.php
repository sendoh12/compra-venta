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
            'nombre' => 'min:2|max:80|required',
            'email' => 'min:4|max:80|required|email',
            'tel' => 'min:4|max:10|required',
            'asunto' => 'min:1|max:120|required',
            'mesaje' => 'min:1|max:1000|required',
        ];
    }
}
