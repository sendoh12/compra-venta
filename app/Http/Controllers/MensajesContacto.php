<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MensajesContacto extends Controller
{
    public function create(Request $request) {
        DB::table('cv_mensajes')->insert([
            'MENSAJES_NOMBRE' => $request->input('name'),
            'MENSAJES_CORREO' => $request->input('email'),
            'MENSAJES_TEXTO' => $request->input('content'),

        ]);
        return 'datos insertados con exito';
    }
}
