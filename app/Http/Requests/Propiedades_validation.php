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
            // 'NumeroInterior'=>'min:1|max:10|required',
            // 'Latitud'=>'min:1|max:200|',
            // 'longitud'=>'min:1|max:200|',
            // 'subtipo'=>'min:1|max:300|',
            // 'operacion'=>'min:1|max:200|',
            // 'Precio'=>'min:1|max:50|',
            // 'Habitaciones'=>'min:1|max:10|',
            // 'Baños'=>'min:1|max:10|',
            // 'MediosBaños'=>'min:1|max:10|',
            // 'Terreno'=>'min:1|max:200|',
            // 'Construcción'=>'min:1|max:200|',
            // 'Condición'=>'min:1|max:200|',
            // 'Año'=>'min:1|max:4|',
            // 'Niveles'=>'min:1|max:10|',
            // 'Estacionamientos'=>'min:1|max:5|',
            // 'cuota'=>'min:1|max:10|',
            'descripcion'=>'min:1|max:2000|required',
            'Clave'=>'min:1|max:200|required',
            // 'Video'=>'min:2|max:200|',
        ];
    }
}
