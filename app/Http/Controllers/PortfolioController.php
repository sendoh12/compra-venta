<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Project;
use App\Cv_inicio;
use App\cv_contactos;
use App\cv_propiedades;
use App\Http\Requests\contacto_validation;
use Illuminate\Support\Facades\Crypt;
use dompdf;
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
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $users = DB::table('users')->paginate(15);
                return view('layout', [
                            'usuarios' => $users
                ]);
        }
        // return view('layout');
    }

    public function about(Request $request) {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

        if($request->ajax()) {
            return response()->json(view('lista_propiedades', compact('propiedades'))->render());
            return view('lista_propiedades', array(
                'imagenes' => $imagenes,
                'tipos' => $tipos
            ));
        }
        
        return view('about', array(
            'imagenes' => $imagenes,
            'propiedades' => $propiedades,
            'tipos' => $tipos
        ));
    }

    public function portafolio() {

        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $projects = Project::latest()->paginate(1);

        return view('portfolio', [
            'projects' => Project::latest()->paginate(),
            'imagenes' => $imagenes
        ]);
    }

    public function lacer() {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(3);

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

        // foreach ($imagenes as $key => $value) {
        //     var_dump($key);
        // }
        // echo '<pre>';
        // // var_dump($arreglo);
        // echo '</pre>';
        // die();

        // if($request->ajax()) {
        //     return response()->json(view('lista_propiedades', compact('propiedades'))->render());
        //     return view('lista_propiedades', array(
        //         'imagenes' => $imagenes,
        //         'tipos' => $tipos
        //     ));
        // }
        
        return view('lacer', array(
            'imagenes' => $imagenes,
            'propiedades' => $propiedades,
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
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $valor = Project::findOrFail($id);
            return view('informacion.edicion', compact('valor'));
            
        }
    }

    public function Editar_usuario(Request  $request)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $id_usuario=$request->input('usuario');
            $editar_usuario = DB::table('users')->where('ID_USER',$id_usuario)->first();
            return view('Login.Registro',[
                'editar_usu'=> $editar_usuario,
                'id_usuario' => $id_usuario,
            ]);
            
        }
    }

    public function Eliminar($id_usuario)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            DB::table('users')->where('ID_USER', '=', $id_usuario)->delete();
            return redirect("principal");
            
        }
    }

    public function Elimiarimagen(Request $request)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            // var_dump($request->id_imagen);
            // die();

            DB::table('cv_imagenes')->where('IMAGENES_ID', '=', $request->id_imagen)->delete();
            return response()->json([
                'bandera'=> 1
            ]);
            // return redirect("VerImagenes".$request->id_propiedad);
            
        }
    }

    public function Elimiarimageninicio($id_imagen)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            DB::table('cv_inicio')->where('INICIO_ID', '=',base64_decode($id_imagen))->delete();
            return redirect("Verinicio");
            
        }
    }
    public function guardarorden(Request  $request)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            
            $ordenarray=$request->input('orden');
            for ($i=0; $i <count($ordenarray) ; $i++) { 
                $orden = DB::table('cv_imagenes')
                            ->where('IMAGENES_ID',$ordenarray[$i])
                            ->update(['IMAGENES_ORDEN' => $i,]);
            }
            return back();
            
        }
    }

    public function guradarmensages(contacto_validation $request)
    {


            // $data = array('CONTACTO_NOMBRE' => htmlspecialchars($request->nombre),
            //             'CONTACTO_EMAIL' => htmlspecialchars($request->email),
            //         'CONTACTO_TELEFONO'=>htmlspecialchars($request->telefono),
            //     'CONTACTO_MENSAJE'=>htmlspecialchars($request->mensaje),
            //     'CONTACTO_OPERACION'=>htmlspecialchars($request->opciones),
            //     'CONTACTO_CANTIDAD'=>htmlspecialchars($request->cantidad),
            //     'CONTACTO_CONTACTAR'=>htmlspecialchars($request->comunicarse),
            //     'CONTACTO_FECHA'=>htmlspecialchars($request->fecha),
            //     'CONTACTO_HORA'=>$request->hora
            // );

       

            // $contactos = DB::table('cv_contactos')->insert($data);
            // if($contactos){
            //     return response()->json(['bandera'=> 1 ]);
            // }else{
            //     return response()->json(['bandera'=> 0 ]);
            // }
            $contactos  = new cv_contactos;
            $contactos->CONTACTO_CLAVE_PROPIEDAD = htmlspecialchars($request->ClavePropiedad);
            $contactos->CONTACTO_NOMBRE = htmlspecialchars($request->nombre);
            $contactos->CONTACTO_EMAIL = htmlspecialchars($request->email);
            $contactos->CONTACTO_TELEFONO = htmlspecialchars($request->telefono);
            $contactos->CONTACTO_MENSAJE = htmlspecialchars($request->mensaje);
            
            $contactos->CONTACTO_OPERACION = htmlspecialchars($request->opciones);
            $contactos->CONTACTO_CANTIDAD = htmlspecialchars($request->cantidad);
            $contactos->CONTACTO_CONTACTAR = htmlspecialchars($request->comunicarse);
            $contactos->CONTACTO_FECHA = htmlspecialchars($request->fecha);
            $contactos->CONTACTO_HORA = htmlspecialchars($request->hora);
            $contactos->save();
    
            // return response()->json([
            //     'bandera'=> 1
            // ]);
            if($contactos){
                return response()->json(['bandera'=> 1 ]);
            }else{
                return response()->json(['bandera'=> 0 ]);
            }
            

    }

    public function Filtro_busquedad(Request  $request)
    {
        $operacion  =   $request->operacion;
        $inmueble   =   $request->inmueble;
        $estado = $request->estado;
        $municipio = $request->municipio;


        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = cv_propiedades::Busqueda($operacion, $inmueble, $estado ,$municipio)->paginate(6);
        
        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();
                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }

    public function Filtro_buscar_clave(Request $request)
    {
        $nombre     =   $request->clave;
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->where('PROPIEDADES_CLAVE','like',$nombre)
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);
        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }

    public function generar_pdf(Request $request)
    {
        $idPropieada=$request->ide;
        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->join('cv_imagenes', 'cv_imagenes.IMAGENES_PROPIEDAD', '=','cv_propiedades.PROPIEDADES_ID')
                    ->where('PROPIEDADES_ID',$idPropieada)
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*', 'cv_imagenes.*')
                    ->get();
        $data = [
            'propiedades' => $propiedades
        ];
        //return view('vista_pdf',$data);
        $pdf = \PDF::loadView('vista_pdf', $data);
        return $pdf->download('archivo.pdf');
    }


    public function CasaVenta(Request $request) {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();
        
        $propiedades = DB::table('cv_imagenes')
                        ->select('*')
                        ->where('IMAGENES_PROPIEDAD','=',base64_decode($request->input('id')))
                        ->join('cv_propiedades', 'cv_imagenes.IMAGENES_PROPIEDAD','=','cv_propiedades.PROPIEDADES_ID')
                        ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                        ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                        ->orderByRaw('IMAGENES_ORDEN ASC')
                        ->get();
            return view('propiedades.propiedad', array(
                'propiedades' => $propiedades,
                'imagenes' => $imagenes
            ));
        

    }

    public function VerContactos() {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            $contactos = DB::table('cv_contactos')
                        ->select('*')
                        ->get();
                        return view('administrador.ver_contactos', compact('contactos'));
        }
    }

    public function Eliminar_contacto($id_contacto)
    {
        if(session()->has('admin')==false){
            return redirect('login');
        }else{
            DB::table('cv_contactos')->where('ID_CONTACTO', '=', $id_contacto)->delete();
            return redirect("VerContactos");
        }
    }

    public function Precios_de_0_a_1000(Request $request)
    {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    //->where('PROPIEDADES_PRECIO','<=','0')
                    ->whereBetween('PROPIEDADES_PRECIO',[0,1000])
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();
                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));

    }

    public function precios_1000_a_5000(Request $request)
    {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    //->where('PROPIEDADES_PRECIO','>=','1000')
                    //->where('PROPIEDADES_PRECIO','<=','5000')
                    ->whereBetween('PROPIEDADES_PRECIO',[1000,5000])
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }

    public function precios_De_5000_a_10000(Request $request)
    {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    //->where('PROPIEDADES_PRECIO','>=',5000)
                    //->where('PROPIEDADES_PRECIO','<=',10000)
                    ->whereBetween('PROPIEDADES_PRECIO',[5000,10000])
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }

    public function precios_mayor_10000(Request $request)
    {
        $imagenes = DB::table('cv_inicio')
                    ->select('*')
                    ->get();

        $propiedades = DB::table('cv_propiedades')
                    ->join('cv_estados', 'cv_propiedades.PROPIEDADES_ESTADO','=','cv_estados.ESTADOS_ID')
                    ->join('cv_municipios', 'cv_propiedades.PROPIEDADES_MUNICIPIO','=','cv_municipios.MUNICIPIOS_ID')
                    ->where('PROPIEDADES_PRECIO','>',10000)
                    ->select('cv_propiedades.*', 'cv_estados.*', 'cv_municipios.*')
                    ->paginate(6);
                    

        $tipos = DB::table('cv_tipos')
                    ->select('*')
                    ->get();

                    if($request->ajax()) {
                        return response()->json(view('lista_propiedades', compact('propiedades'))->render());
                        return view('lista_propiedades', array(
                            'imagenes' => $imagenes,
                            'tipos' => $tipos
                        ));
                    }
                    return view('about', array(
                        'imagenes' => $imagenes,
                        'propiedades' => $propiedades,
                        'tipos' => $tipos
                    ));
    }


    // pasar la clave de la propiedad
    public function PropiedadClave(Request $request ) {
        $propiedad = DB::table('cv_propiedades')
                        ->select('*')
                        ->where('PROPIEDADES_ID','=',$request->clave)
                        ->get();
                        return response()->json([
                            'arreglo'=> $propiedad
                        ]);
    }


}
