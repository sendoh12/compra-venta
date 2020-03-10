<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;
use App\Cv_inicio;

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
        $usuarios = Project::latest()->paginate(1);
        return view('layout', [
            'usuarios' => Project::latest()->paginate()
        ]);

        // return view('layout');
    }

    public function about() {
        return view('about');
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

        // $imagenes = DB::table('cv_inicio')->simplePaginate(1);
        
       return view('lacer', compact('imagenes'));
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
}
