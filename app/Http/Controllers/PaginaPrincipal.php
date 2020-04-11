<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use App\AgregarPropiedad;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Propiedades_validation;
use App\Http\Requests\Validar_imagenes;
use Illuminate\Support\Facades\Storage;
class PaginaPrincipal extends Controller
{
    public function inicio() {
        return view('PaginasInicio.inicio');
    }

    public function propiedad() {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            return view('administrador.agregar_propiedad');
            
        }
    }

    public function porpiedad_agregar(Request $request) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $valor = DB::table('cv_municipios')
                        ->select('*')
                        ->where('MUNICIPIOS_ESTADO','=',$request->valor)
                        ->get();
   
               return response()->json([
                   'mensaje'=> $valor
               ]);
            
        }
        //  return view('administrador.agregar_propiedad', compact('valor'));
    }

    public function Agregar_propiedad($id=null) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $estados = DB::table('cv_estados')->get();
            $tipos = DB::table('cv_tipos')->get();
            return view('administrador.agregar_propiedad', array(
                'estados' => $estados,
                'tipos' => $tipos
            ));
            
        }
        
    }

    public function Lista_propiedad($id_propiedad,$latitud,$longitud)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $id_propiedades=$id_propiedad;
            $Latitud=$latitud;
            $Longitud=$longitud;
            return view("propiedades.lista_propiedad")->with('LATITUD',$Latitud)->with('LOGITUD',$Longitud);
            
        }
    }


    public function propiedadesguardar(Propiedades_validation $request) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            
            if ($request->input('Id_prepiedad') != null) {
    
                if($request->hasFile('imagen')) {
    
                    $file = $request->file('imagen');
                    $name = time().$file->getClientOriginalName();
                    \Storage::disk('local')->put($name,  \File::get($file));
                    //$file->move(public_path().'/images', $name);
                    //Storage::put( $name, $file, 'public');
                    //$visibility = Storage::getVisibility($name);
                    $propiedades = DB::table('cv_propiedades')
                    ->where('PROPIEDADES_ID',$request->input('Id_prepiedad'))
                    ->update(['PROPIEDADES_NOMBRE' => $request->input('propiedad'),
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
                        'PROPIEDADES_LATITUD' => $request->input('Latitud'),
                        'PROPIEDADES_LONGITUD' => $request->input('longitud'),
                        ]);
                }else{
                    $propiedades = DB::table('cv_propiedades')
                    ->where('PROPIEDADES_ID',$request->input('Id_prepiedad'))
                    ->update(['PROPIEDADES_NOMBRE' => $request->input('propiedad'),
                        'PROPIEDADES_PAIS' => 'Mexico',
                        'PROPIEDADES_ESTADO' => $request->input('estado'),
                        'PROPIEDADES_MUNICIPIO' => $request->input('Municipio'),
                        'PROPIEDADES_COLONIA' => $request->input('Colonia'),
                        'PROPIEDADES_ZONA' => $request->input('Zona'),
                        'PROPIEDADES_CP' => $request->input('CodigoPostal'),
                        'PROPIEDADES_CALLE' => $request->input('Calle'),
                        'PROPIEDADES_EXTERIOR' => $request->input('NumeroExterior'),
                        'PROPIEDADES_INTERIOR' => $request->input('NumeroInterior'),
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
                        'PROPIEDADES_LATITUD' => $request->input('Latitud'),
                        'PROPIEDADES_LONGITUD' => $request->input('longitud'),
                        ]);
                }
                return redirect('VerPropiedades');
            }else{
                if($request->hasFile('imagen')) {
                    $file = $request->file('imagen');
                    $name = time().$file->getClientOriginalName();
                    \Storage::disk('local')->put($name,  \File::get($file));
                    //Storage::put( $name, $file, 'public');
                    //$visibility = Storage::getVisibility($name);
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
                                    'PROPIEDADES_LATITUD' => $request->input('Latitud'),
                                    'PROPIEDADES_LONGITUD' => $request->input('longitud'),
                ]);
                $id_prop = DB::getPDO()->lastInsertId();
                // return view('administrador.agregar_imagenes', array(
                //     'id_prop' => $id_prop,
                // ));
                return redirect('VerPropiedades');
            }
        }

    }

    public function busqueda(Request $request)
    {

            if($request->get('busqueda')){
                $propiedades = DB::table('cv_propiedades')->where("PROPIEDADES_NOMBRE", "LIKE", "%{$request->get('busqueda')}%")
                    ->paginate(10);
                return view('administrador.ver_propiedades', compact('propiedades'));
            }
            return back();
    }
    public function verpropiedades() {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(5);
            return view('administrador.ver_propiedades', compact('propiedades'));
            
        }
    }
    
    public function agregar_imagenes($id_es) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            $id=base64_decode($id_es);
            return view('administrador.agregar_imagenes', compact('id'));
            // return 'verificar si se esta pasando correctamente'.$id;
            
        }
    }

    public function Editarpropiedades(Request $request)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $id_propiedades=base64_decode($request->input('id_propiedad'));
            $editar_propiedad=DB::table('cv_propiedades')->where('PROPIEDADES_ID',$id_propiedades)->first();
            $estados = DB::table('cv_estados')->get();
            $tipos = DB::table('cv_tipos')->get();
            $municipio= DB::table('cv_municipios')->get();
            
            return view('administrador.agregar_propiedad', array(
                'estados' => $estados,
                'tipos' => $tipos,
                'id_propiedad' => $id_propiedades,
                'editar' => $editar_propiedad,
                'Municipio' => $municipio,
            ));
            
        }
    }


    public function municipios(Request $request) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $valor = DB::table('cv_municipios')
                        ->select('*')
                        ->where('MUNICIPIOS_ESTADO','=',$request->valor)
                        ->get();
    
               return response()->json([
                   'mensaje'=> $valor
               ]);
            
        }
       //  return view('administrador.agregar_propiedad', compact('valor'));
   }


   //insertar las imagenes
   public function insertar($id, Validar_imagenes $request) {
        if($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $j=0;
            $array = [];
            foreach ($file as $key ) {
                $name = time().$key->getClientOriginalName();
                $array[$j] = $name;
                \Storage::disk('local')->put($name, \File::get($key));
                $j++;
                
            }
            // echo '<pre>';
            // var_dump($array);
            // echo '</pre>';    
            // die();
        }
        

        $i=0;
        foreach ($request->file('imagen') as $key => $value) {
            $imagenes = DB::table('cv_imagenes')->insert([
                'IMAGENES_PROPIEDAD' => $id,
                'IMAGENES_NOMBRE' => $request->input('nombre'),
                'IMAGENES_ARCHIVO' => $array[$i],
                'IMAGENES_ORDEN' => $i
                ]);
            $i++;
        }


        return redirect('VerPropiedades');

    }

    public function verimagenes(Request $request) {
        $id=base64_decode($request->input('id_propiedade'));
        $verimagenes = DB::table('cv_imagenes')
                    ->select('*')
                    ->where('IMAGENES_PROPIEDAD','=',$id)
                    ->orderBy('IMAGENES_ORDEN','ASC')
                    ->get();
                    // var_dump($verimagenes);
                    // die;

            return view('administrador.imagenes_propiedades', array(
                'imagenes' => $verimagenes,
            ));
    }

    // caputar imagenes

    public function capturaimagenes() {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            return view('administrador.captura_imagenes');
            
        }
    }

    public function Inicioinsertar(Validar_imagenes $request) {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            if($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $j=0;
                $array = [];
                foreach ($file as $key ) {
                    $name = time().$key->getClientOriginalName();
                    $array[$j] = $name;
                    \Storage::disk('local')->put($name, \File::get($key));
                    $j++;
                    
                }
            
            }
    
            $i=0;
            foreach ($request->file('imagen') as $key => $value) {
                $imagenes = DB::table('cv_inicio')->insert([
    
                    'INICIO_NOMBRE' => $array[$i],
                            
                    ]);
                $i++;
            }
            
        }


        
        return redirect('Verinicio');

   }

   //ver lista de las imagenes de la vista de inicio
   public function verinicio() {
    if(session()->has('admin')==false){
        return redirect('login');
    }else{
        
        $imagenes = DB::table('cv_inicio')
                        ->select('*')
                        ->get();
        return view('administrador.lista_imginicio', compact('imagenes'));
    }

}
    public function Eliminar_propidad ($id_propiedad)
    {
        $eliminar_imag=DB::table('cv_propiedades')->where('PROPIEDADES_ID',base64_decode($id_propiedad))->first();
        $ruta_de_imgen='images/'.$eliminar_imag->PROPIEDADES_IMAGEN;
        Storage::delete($eliminar_imag->PROPIEDADES_IMAGEN);
        DB::table('cv_imagenes')->where('IMAGENES_PROPIEDAD', '=',base64_decode($id_propiedad))->delete();
        DB::table('cv_propiedades')->where('PROPIEDADES_ID', '=',base64_decode($id_propiedad))->delete();
        return back();
    }

}
