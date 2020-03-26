<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Project;
use App\Cv_inicio;
use App\cv_contactos;
use App\Http\Requests\contacto_validation;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->paginate(15);
        return view('layout', [
            'usuarios' => $users
        ]);

        // return view('layout');
    }

    public function about() {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->get();

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

        // var_dump($propiedades);
        // die();

        return view('about', array(
            'imagenes' => $imagenes,
            'propiedades' => $propiedades,
            'tipos' => $tipos
        ));
    }

    public function portafolio() {

        $projects = Project::latest()->paginate(1);

        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function lacer() {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();


        // $imagenes = DB::table('cv_inicio')->simplePaginate(1);
        
       return view('lacer', array(
           'imagenes' => $imagenes,
           'tipos' => $tipos
       ));
    }

    public function show($id) {
        $valor = Project::findOrFail($id);
        return view('project.show', compact('valor'));
    }

    public function sobre_nosotros() {
        return view('informacion.informes');
    }

    public function editar_datos($id) {
        $valor = Project::findOrFail($id);
        return view('informacion.edicion', compact('valor'));
    }

    public function Editar_usuario(Request  $request)
    {
        $id_usuario=$request->input('usuario');
        $editar_usuario = DB::table('users')->where('ID_USER',$id_usuario)->first();
        return view('Login.Registro',[
            'editar_usu'=> $editar_usuario,
            'id_usuario' => $id_usuario,
        ]);
    }

    public function Eliminar($id_usuario)
    {
        DB::table('users')->where('ID_USER', '=', $id_usuario)->delete();
        return redirect("principal");
    }

    public function Elimiarimagen($id_imagen)
    {
        DB::table('cv_imagenes')->where('IMAGENES_ID', '=', $id_imagen)->delete();
        return redirect("VerPropiedades");
    }

    public function Elimiarimageninicio( $id_imagen)
    {
        DB::table('cv_inicio')->where('INICIO_ID', '=', $id_imagen)->delete();
        return redirect("Verinicio");
    }
    public function guardarorden(Request  $request)
    {
        $ordenarray=$request->input('orden');
        for ($i=0; $i <count($ordenarray) ; $i++) { 
            $orden = DB::table('cv_imagenes')
                        ->where('IMAGENES_ID',$ordenarray[$i])
                        ->update(['IMAGENES_ORDEN' => $i,]);
        }
        return back();
    }

    public function guradarmensages(contacto_validation $request)
    {
        $contactos  = new cv_contactos;
        $contactos->CONTACTO_NOMBRE     =   $request->nombre;
        $contactos->CONTACTO_EMAIL      =   $request->email;
        $contactos->CONTACTO_ASUNTO     =   $request->asunto;
        $contactos->CONTACTO_TELEFONO   =   $request->tel;
        $contactos->CONTACTO_MENSAJE    =   $request->mesaje;
        $contactos->save();

        return back();
    }

    public function Filtro_busquedad(Request  $request)
    {
        $operacion  =   $request->operacion;
        $inmueble   =   $request->inmueble;
        $nombre     =   $request->nombre;

        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->where('PROPIEDADES_OPERACION',$operacion)
                    ->where('PROPIEDADES_TIPO',$inmueble)
                    ->where('PROPIEDADES_NOMBRE','like',$nombre)
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->get();

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }

    public function Filtro_buscar_nombre(Request $request)
    {
        $nombre     =   $request->nombre1;
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    //->where('PROPIEDADES_OPERACION',$operacion)
                    //->where('PROPIEDADES_TIPO',$inmueble)
                    ->where('PROPIEDADES_NOMBRE','like',$nombre)
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->get();

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }
}
