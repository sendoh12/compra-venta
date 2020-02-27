<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function portafolio() {

        $porfolio = [
            ['title' => 'respuesta1'],
            ['title' => 'respuesta2'],
            ['title' => 'respuesta3'],
            ['title' => 'respuesta4'],
        ];

        return view('portfolio', compact('porfolio'));
    }

    public function contactos() {
        
    }
}
