<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use App\AgregarPropiedad;

class PaginaPrincipal extends Controller
{
    public function inicio() {
        return view('PaginasInicio.inicio');
    }

    public function propiedad() {
        return view('administrador.agregar_propiedad');
    }

    public function porpiedad_agregar(Request $request) {
        
         $valor = DB::table('cv_municipios')
                     ->select('*')
                     ->where('MUNICIPIOS_ESTADO','=',$request->valor)
                     ->get();

         if($request->ajax()){
            return response()->json([
                'mensaje'=> $valor
            ]);
         }
        //  return view('administrador.agregar_propiedad', compact('valor'));
    }

    public function Agregar_propiedad() {
        
        $estados = DB::table('cv_estados')->get();
        $tipos = DB::table('cv_tipos')->get();
        return view('administrador.agregar_propiedad', array(
            'estados' => $estados,
            'tipos' => $tipos
        ));
        
    }

    public function Lista_propiedad()
    {
        return view("administrador.lista_propiedad");
    }


    // public function Agregar_tipo() {
    //     $tipos = DB::table('cv_tipos')->get();
    //     return view('administrador.agregar_propiedad', compact('tipos'));
    // }
}
