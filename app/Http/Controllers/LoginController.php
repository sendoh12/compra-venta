<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("Login/login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Registro()
    {
        return view("Login/Registro");
    }

    public function Registrodelusuario(Request $request)
    {
        if ($request->isMethod('post')) {
           
            if ($request->input() != null) {
                    $validatedData = $request->validate([
                    'Nombre'=>['required', 'max:52'],
                    'correo' => ['required', 'email' ,'max:52'],
                    'password' => ['required', 'max:52'],
                    'Rol' =>['required', 'max:30']
                    ]);
                    $Usuario = array('Nombre' => $request->input('Nombre'),
                                    'Correo' => $request->input('correo'),
                                    'password' => $request->input('password'),
                                    'Rol' => $request->input('Rol'));
                $registro= new User;
                $registrado=$registro->Registrar($Usuario);
                if($registrado != null){
                    return redirect('/');
                }else{
                    return redirect('Registro_usurio');
                }
            }
        }
    }

    public function show(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->input() != null) {
                $validatedData = $request->validate([
                    'email' => ['required', 'max:255'],
                    'password' => ['required'],
                ]);
                $dato = array('email' => $request->input('email'),
                                'password' => $request->input('password') );
                $inicio=new User;
                $seccion=$inicio->Iniciodesesion($dato);
                if ($request->session()->exists('admin')) {
                    $usario=$request->session()->get('admin');
                    return redirect('principal');
                }else{
                    // Via a request instance...
                    $request->session()->put('admin',$seccion );
                    // Via the global helper...
                    session(['admin' => $seccion]);
                    return redirect('principal');
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
            $request->session()->pull("admin");
            //Session::flush();
                return redirect('/');
    }
}
