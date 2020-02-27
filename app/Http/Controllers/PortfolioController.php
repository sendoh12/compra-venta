<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('home');
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

    public function contactos() {
        
    }

    public function show($id) {
        $valor = Project::findOrFail($id);
        return view('project.show', compact('valor'));
    }
}
