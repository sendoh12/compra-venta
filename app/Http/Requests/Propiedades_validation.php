<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Propiedades_validation extends FormRequest
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
            'propiedad' => 'min:2|max:200|required',
            'pais'  =>'min:2|max:200|required',
            'estado' => 'min:1|max:2|required',
            'Municipio' => 'min:1|max:120|required',
            'Colonia' => 'min:2|max:120|required',
            'Zona' => 'min:2|max:200|required',
            'CodigoPostal' =>'min:2|max:200|required',
            'Calle' =>'min:2|max:200|required',
            'NumeroExterior'=>'min:1|max:10|required',
            'NumeroInterior'=>'min:1|max:10|required',
            'Latitud'=>'min:1|max:200|required',
            'longitud'=>'min:1|max:200|required',
            'subtipo'=>'min:1|max:300|required',
            'operacion'=>'min:1|max:200|required',
            'Precio'=>'min:1|max:50|required',
            'Habitaciones'=>'min:1|max:10|required',
            'Baños'=>'min:1|max:10|required',
            'MediosBaños'=>'min:1|max:10|required',
            'Terreno'=>'min:1|max:200|required',
            'Construcción'=>'min:1|max:200|required',
            'Condición'=>'min:1|max:200|required',
            'Año'=>'min:1|max:4|required',
            'Niveles'=>'min:1|max:10|required',
            'Estacionamientos'=>'min:1|max:5|required',
            'cuota'=>'min:1|max:10|required',
            'descripcion'=>'min:1|max:2000|required',
            'Clave'=>'min:1|max:200|required',
            'Video'=>'min:2|max:200|required',
        ];
    }
}
