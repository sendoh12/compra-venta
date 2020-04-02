<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
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



//pagina de inicio
Route::get('/', ['as' => 'lacer', 'uses' => 'PortfolioController@lacer' ]);
Route::get('/lacer', ['as' => 'lacer', 'uses' => 'PortfolioController@lacer' ]);
Route::get('/about', ['as' => 'about', 'uses' => 'PortfolioController@about']);
Route::get('/portfolio', ['as'=>'portfolio', 'uses'=>'PortfolioController@portafolio']);


// redireccionar si no a iniciado session
Route::group(['middleware' => 'auth'], function () {

    // Las rutas que incluyas aquí pasarán por el middleware 'auth'
    Route::get('principal', ['as' => 'home', 'uses' => 'PortfolioController@index' ]);
    //captura de imagenes
    Route::get('CapturarImagenes', ['as' => 'administrador.captura_imagenes', 'uses'=>'PaginaPrincipal@capturaimagenes']);
    Route::post('InsertarInicio', 'PaginaPrincipal@Inicioinsertar')->name('InsertarInicio');
    Route::get('Verinicio', ['as'=>'administrador.lista_imginicio', 'uses'=>'PaginaPrincipal@verinicio']);

    Route::get('Editarusuario','PortfolioController@Editar_usuario');
    Route::get('Eliminarusuario/{id_usuario}','PortfolioController@Eliminar');
    Route::get('EliminarImagen/{idimagen}','PortfolioController@Elimiarimagen');
    Route::get('EliminarImageninicio/{idimagen}','PortfolioController@Elimiarimageninicio');
    Route::post('guardaorden','PortfolioController@guardarorden');

    Route::get('Registro_usurio','LoginController@Registro')->name('Registro_usurio');
    Route::post('Registros','LoginController@Registrodelusuario');
    Route::post('Session','LoginController@show');
    Route::get('salir','LoginController@destroy')->name('salir');

    //ruta para ver administradores
    Route::get('AgregarPropiedad', ['as'=>'administrador.agregar_propiedad', 'uses'=>'PaginaPrincipal@Agregar_propiedad'] );
    Route::get('Editar','PaginaPrincipal@Editarpropiedades')->name('Editar');
    //agregando los municipios a la vista

    //Route::get('AgregarMunicipio', 'PaginaPrincipal@propiedad');
    Route::post('AgregarMunicipio', 'PaginaPrincipal@porpiedad_agregar');
    Route::post('Municipio','PaginaPrincipal@municipios');

    // guardar las propiedades
    Route::post('GuardarPropiedades', 'PaginaPrincipal@propiedadesguardar')->name('GuardarPropiedades');
    //ver las propiedades
    Route::get('VerPropiedades', ['as' => 'administrador.ver_propiedades', 'uses' => 'PaginaPrincipal@verpropiedades' ]);
    Route::get('mapas/{id}/{latitud}/{longitud}',['as' => 'administrador.lista_propiedad', 'uses' => 'PaginaPrincipal@Lista_propiedad']);

    Route::get('VerContactos', ['as'=>'VerContactos', 'uses'=>'PortfolioController@VerContactos']);
    Route::get('Eliminarcontacto/{id}', 'PortfolioController@Eliminar_contacto');

    Route::get('/editar/{id}', ['as' => 'informacion.edicion', 'uses' => 'PortfolioController@editar_datos']);
});


// redireccionar cuando este iniciada la sesion y no deje entrar al login
Route::group(['middleware' => 'guest'], function () {
    // Las rutas que incluyas aquí pasarán por el middleware 'guest'
    Route::get('/login','LoginController@index');
});


Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'MensajesContacto@create');
Route::get('/informes', 'PortfolioController@sobre_nosotros')->name('informes');

//agregar ias imagenes
Route::get('AgregarImagenes/{id}', ['as'=>'administrador.agregar_imagenes', 'uses'=>'PaginaPrincipal@agregar_imagenes']);

//agregando el plugin dropzone para nuesta aplicacion
Route::post('InsertarImagenes/{id}', 'PaginaPrincipal@insertar')->name('InsertarImagenes');

//ver las imagenes de las propiedadesss
Route::get('VerImagenes', ['as'=>'administrador.imagenes_propiedades', 'uses'=>'PaginaPrincipal@verimagenes']);

Route::get('buscar','PaginaPrincipal@busqueda');
Route::post('contactos','PortfolioController@guradarmensages');
Route::post('Flitar_busquedad','PortfolioController@Filtro_busquedad');
Route::post('Filtro_buscar_nombre','PortfolioController@Filtro_buscar_nombre');
Route::get('pdfjava/{id}','PortfolioController@generar_pdf');
// propiedades por id
Route::get('CasaVenta', ['as'=>'CasaVenta', 'uses'=>'PortfolioController@CasaVenta']);


