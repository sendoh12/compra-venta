<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class AgregarPropiedad extends Model
{
    public function traermunicipios() {
        // $municipios = DB::table('cv_municipios')
        //             ->select('*')
        //             ->where('MUNICIPIOS_ESTADO','=',$id_municipio)
        //             ->get();

        // return $municipios;
    }
}
