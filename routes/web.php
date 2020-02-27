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
Route::get('/','LoginController@index');
Route::get('Registro_usurio','LoginController@Registro');
Route::post('Registros','LoginController@Registrodelusuario');
Route::post('Session','LoginController@show');
Route::get('salir','LoginController@destroy');


Route::get('principal', ['as' => 'home', 'uses' => 'PortfolioController@index' ]);
Route::get('/about', ['as' => 'about', 'uses' => 'PortfolioController@about']);
Route::get('/portfolio', ['as' => 'portafolio', 'uses' => 'PortfolioController@portafolio']);

Route::view('/contact', 'contact')->name('contact');
