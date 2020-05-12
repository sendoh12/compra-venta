<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv_propiedades extends Model
{
    public function scopeBusqueda($query, $operacion, $inmueble, $estado ,$municipio) {
    		return $query->where('PROPIEDADES_OPERACION','like',$operacion)
                        ->where('PROPIEDADES_TIPO','like',$inmueble)
                        ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                        ->where('cv_estados.ESTADOS_NOMBRE','like',$estado)
                        ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                        ->where('cv_municipios.MUNICIPIOS_NOMBRE','like',$municipio)
                        ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*');
    }

    public function scopeTipo($query, $inmueble) {
    		return $query->where('PROPIEDADES_TIPO','like',$inmueble);
    }
}
