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

    public function propiedadesguardar(Request $request) {

        if($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images', $name);
            
        }

        $propiedades = DB::table('cv_propiedades')->insert([
                            'PROPIEDADES_NOMBRE' => $request->input('propiedad'),
                            'PROPIEDADES_PAIS' => 'Mexico',
                            'PROPIEDADES_ESTADO' => $request->input('estado'),
                            'PROPIEDADES_MUNICIPIO' => $request->input('Municipio'),
                            'PROPIEDADES_COLONIA' => $request->input('Colonia'),
                            'PROPIEDADES_ZONA' => $request->input('Zona'),
                            'PROPIEDADES_CP' => $request->input('CodigoPostal'),
                            'PROPIEDADES_CALLE' => $request->input('Calle'),
                            'PROPIEDADES_EXTERIOR' => $request->input('NumeroExterior'),
                            'PROPIEDADES_INTERIOR' => $request->input('NumeroInterior'),
                            'PROPIEDADES_IMAGEN' => $name,
                            'PROPIEDADES_TIPO' => $request->input('tipo'),
                            'PROPIEDADES_SUBTIPO' => $request->input('subtipo'),
                            'PROPIEDADES_OPERACION' => $request->input('operacion'),
                            'PROPIEDADES_PRECIO' => $request->input('Precio'),
                            'PROPIEDADES_HABITACIONES' => $request->input('Habitaciones'),
                            'PROPIEDADES_BAÑOS' => $request->input('Baños'),
                            'PROPIEDADES_MEDIO_BAÑO' => $request->input('MediosBaños'),
                            'PROPIEDADES_TERRENOS' => $request->input('Terreno'),
                            'PROPIEDADES_CONSTRUCCION' => $request->input('Construcción'),
                            'PROPIEDADES_CONDICIONES' => $request->input('Condición'),
                            'PROPIEDADES_AÑO' => $request->input('Año'),
                            'PROPIEDADES_NIVELES' => $request->input('Niveles'),
                            'PROPIEDADES_ESTACIONAMIENTO' => $request->input('Estacionamientos'),
                            'PROPIEDADES_CUOTA' => $request->input('cuota'),
                            'PROPIEDADES_DESCRIPCION' => $request->input('descripcion'),
                            'PROPIEDADES_CLAVE' => $request->input('Clave'),
                            'PROPIEDADES_VIDEO' => $request->input('Video'),
                            // '' => $request->input(''),

        ]);

        // $id_prop = DB::getPDO()->lastInsertId();

        


        return "datos guardados con exito";
    }
    
}
