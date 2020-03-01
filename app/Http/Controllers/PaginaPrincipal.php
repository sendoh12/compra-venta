<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PaginaPrincipal extends Controller
{
    public function inicio() {
        return view('PaginasInicio.inicio');
    }

    public function ver_admins() {
        return view('administrador.ver_administradores');
    }
}
