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

//pagina de inicio
// Route::get('/', ['as'=>'Paginasinicio.inicio', 'uses'=>'PaginaPrincipal@inicio']);
// Route::get('home', ['as'=>'lacer', 'uses'=>'PortfolioController@home'] );
// Route::get('home', 'PortfolioController@home')->name('home');
Route::get('/', ['as' => 'lacer', 'uses' => 'PortfolioController@lacer' ]);
Route::get('/lacer', ['as' => 'lacer', 'uses' => 'PortfolioController@lacer' ]);

// Route::view('/', 'PortfolioController@home');


Route::get('/login','LoginController@index');
Route::get('Registro_usurio','LoginController@Registro')->name('Registro_usurio');
Route::post('Registros','LoginController@Registrodelusuario');
Route::post('Session','LoginController@show');
Route::get('salir','LoginController@destroy');


Route::get('principal', ['as' => 'home', 'uses' => 'PortfolioController@index' ]);
Route::get('/about', ['as' => 'about', 'uses' => 'PortfolioController@about']);
Route::get('/portfolio', ['as'=>'portfolio', 'uses'=>'PortfolioController@portafolio']);

// Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio.show');

Route::view('/contact', 'contact')->name('contact');

// Route::get('mensajes/crear', 'MensajesContacto@create');

Route::post('contact', 'MensajesContacto@create');
// Route::get('/informes', ['as' => 'informacion.informes', 'uses' => 'PortfolioController@sobre_nosotros'])->name('informes');
Route::get('/informes', 'PortfolioController@sobre_nosotros')->name('informes');

Route::get('/editar/{id}', ['as' => 'informacion.edicion', 'uses' => 'PortfolioController@editar_datos']);

//ruta para ver administradores
Route::get('AgregarPropiedad', ['as'=>'administrador.agregar_propiedad', 'uses'=>'PaginaPrincipal@Agregar_propiedad'] );
Route::get('Editar/{id}','PaginaPrincipal@Editarpropiedades')->name('Editar');
//agregando los municipios a la vista

//Route::get('AgregarMunicipio', 'PaginaPrincipal@propiedad');
Route::post('AgregarMunicipio', 'PaginaPrincipal@porpiedad_agregar');
Route::post('Municipio','PaginaPrincipal@municipios');

// guardar las propiedades
Route::post('GuardarPropiedades', 'PaginaPrincipal@propiedadesguardar')->name('GuardarPropiedades');
//ver las propiedades
Route::get('VerPropiedades', ['as' => 'administrador.ver_propiedades', 'uses' => 'PaginaPrincipal@verpropiedades' ]);
Route::get('/mapas/{id}/{latitud}/{longitud}',['as' => 'administrador.lista_propiedad', 'uses' => 'PaginaPrincipal@Lista_propiedad']);


//agregar ias imagenes
Route::get('AgregarImagenes/{id}', ['as'=>'administrador.agregar_imagenes', 'uses'=>'PaginaPrincipal@agregar_imagenes']);
// Route::get('AgregarImagenes/{id}', 'PaginaPrincipal@agregar_imagenes')->name('AgregarImagenes');

