<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;



// Route::view('/', 'home')->name('home');
Route::get('/', ['as' => 'home', 'uses' => 'PortfolioController' ]);
Route::get('/about', ['as' => 'about', 'uses' => 'PortfolioController@about']);
Route::get('/portfolio', 'PortfolioController@portafolio')->name('portfolio');

Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio.show');

Route::view('/contact', 'contact')->name('contact');

// Route::get('mensajes/crear', 'MensajesContacto@create');

Route::post('contact', 'MensajesContacto@create');
