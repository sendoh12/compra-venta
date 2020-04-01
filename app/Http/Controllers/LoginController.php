<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User_validation;
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

    public function Registrodelusuario(User_validation $request)
    {
        if ($request->isMethod('post')) {
            if ($request->input() != null) {
                if($request->input('id_usuario') != null){
                    $propiedades = DB::table('users')
                        ->where('ID_USER',$request->input('id_usuario'))
                        ->update(["NOMBRE_USER" => $request->input('Nombre'),
                                    "EMAIL_USER"=> $request->input('correo'),
                                    "PASSWORD_USER"=>Hash::make($request->input('password')),
                                    "ROL_USERS"=>$request->input('Rol'),]);
                    return redirect("principal");
                }else{
                        $Usuario = array('Nombre' => $request->input('Nombre'),
                                'Correo' => $request->input('correo'),
                                'password' => $request->input('password'),
                                'Rol' => $request->input('Rol'));
                        $registro= new User;
                        $registrado=$registro->Registrar($Usuario);
                        if($registrado != null){
                            return redirect('principal');
                        }else{
                            return redirect('Registro_usurio');
                        }
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
                $data=[];
                $query=DB::table('users')->where('EMAIL_USER',$dato['email'])->first();
               if($query != null){
                    $pasword=Hash::check($dato['password'],$query->PASSWORD_USER);
                    if ($pasword){
                    $data = array('id' =>$query->ID_USER ,
                            'Nombre' => $query->NOMBRE_USER,
                            'Rol' => $query->ROL_USERS);
                    // Via a request instance...
                    $request->session()->put('admin',$data );
                    // Via the global helper...
                    session(['admin' => $data]);
                    return redirect('principal');
                    }
                }else{
                    return back();
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
            $request->session()->forget("admin");
            //Session::flush();
            return redirect('/');
    }
}
