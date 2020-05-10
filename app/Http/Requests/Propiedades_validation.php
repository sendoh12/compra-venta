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
            'CodigoPostal' =>'numeric|min:2',
            'Calle' =>'min:2|max:200|required',
            'NumeroExterior'=>'min:1|max:10|required',
            'NumeroInterior'=>'min:1|max:10|required',
            'Latitud'=>'min:1|max:200|',
            'longitud'=>'min:1|max:200|',
            'subtipo'=>'min:1|max:300|',
            'operacion'=>'min:1|max:200|',
            'Precio'=>'numeric|min:1',
            'moneda'=>'min:1|max:6|required',
            'TerrenoTamaño'=>'min:1|max:6|required',
            'ConstruccionTamaño'=>'min:1|max:6|required',
            'CuotaMoneda'=>'min:1|max:6|required',
            'Habitaciones'=>'|required|numeric|min:1|max:10',
            'Baños'=>'numeric|min:1|max:10|required',
            'MediosBaños'=>'numeric|min:1|max:10|',
            'Terreno'=>'min:1|required',
            'Construcción'=>'numeric|min:1|required',
            'Condición'=>'min:1|max:200|',
            'Año'=>'numeric|min:1',
            'Niveles'=>'numeric|min:1|max:10|',
            'Estacionamientos'=>'numeric|min:1',
            'cuota'=>'numeric|min:1|max:10|',
            'descripcion'=>'min:1|max:2000|required',
            'Clave'=>'min:1|max:200|required',
            // 'Video'=>'min:2|max:200|',
        ];
    }
}
