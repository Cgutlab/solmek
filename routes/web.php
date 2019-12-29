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

Route::get('/', 'SeccionHomeController@index')->name('home');
Route::get('/search', 'SeccionHomeController@buscador');


//Sección de Empresa
Route::get('/empresa', 'SeccionEmpresaController@index');

//Sección de I+D
Route::get('/produccion/{id}', 'SeccionProduccionController@show');

//Sección de Calidad
Route::get('/calidad', 'SeccionCalidadController@index');


//Sección de Novedades
Route::get('/novedades', 'SeccionNovedadesController@index');
Route::get('/novedades/filtros/{id}', 'SeccionNovedadesController@filter')->name('filtros');
Route::get('/novedades/ver/{id}', 'SeccionNovedadesController@ver')->name('ver');

//Seccion de Productos
Route::get('/productos', 'SeccionProductoController@index');
Route::get('/productos/{id}', 'SeccionProductoController@show');
Route::get('/productos/verProductos/{id}', 'SeccionProductoController@showProductos');
Route::get('/productos/ver/{id}', 'SeccionProductoController@showProducto');


	//Producto-Descarga
	Route::get('/calidadDown/{file}', function ($file) {
		return Storage::download("descargas/$file");
	})->name('calidad-down');


//Sección de Contacto
Route::resource('/contacto', 'SeccionContactoController');

Auth::routes();


Route::prefix('adm/')->group(function(){
//Autenticación de Administradores 
    // Authentication Routes...
    Route::get('/', 'Auth\LoginController@showLoginForm');


// Admin Home
	Route::prefix('home')->group(function () {
		
		//Home
			Route::get('/', 'HomeController@index');

		// Admin Destacados
			Route::resource('destacados', 'DestacadoController');

		//Información principal de la empresa
			Route::get('/informacion/ver', 'HomeController@indexInformacion');
			Route::get('/informacion/{id}', 'HomeController@editInformacion');
			Route::put('/informacion/{id}', 'HomeController@updateInformacion');

		//Sliders del Home
			Route::get('/sliders', 'HomeController@indexSlider');
			Route::get('/sliders/create', 'HomeController@createSlider');
			Route::post('/sliders', 'HomeController@storeSlider');
			Route::get('/sliders/{id}', 'HomeController@editSlider');
			Route::put('/sliders/{id}', 'HomeController@updateSlider');	
			Route::get('/sliders/eliminar/{id}', 'HomeController@eliminar');

	});
	// Admin Logos
		Route::resource('logos', 'LogoController');

		// Admin Familias
		Route::prefix('productos')->group(function () {

			Route::resource('/index', 'ProductoController');
			Route::get('/select/subfamilias', 'ProductoController@subfamilias');
			Route::get('/delete/{id}', 'ProductoController@eliminar');

			Route::resource('familias', 'FamiliaController');
			Route::get('familias/delete/{id}', 'FamiliaController@eliminar');

			Route::resource('subfamilias', 'SubfamiliaController');
			Route::get('subfamilias/delete/{id}', 'SubfamiliaController@eliminar');


			Route::get('galeria/{producto}', 'ProductoController@galeriaCreate');
			Route::post('galeria/store', 'ProductoController@galeriaStore');
			Route::get('galeria/view/{producto}', 'ProductoController@galeriaView');
			Route::get('galeria/delete/{id}', 'ProductoController@galeriaDelete');
			Route::get('galeria/edit/{id}', 'ProductoController@galeriaEdit');
			Route::put('galeria/{id}', 'ProductoController@galeriaUpdate');

		});



	// Admin Producciones
		Route::resource('producciones', 'ProduccionController');

		Route::get('produccion/index/{id}', 'GaleriaproduccionController@index');
		Route::get('produccion/create/{id}', 'GaleriaproduccionController@create');
		Route::post('produccion/store', 'GaleriaproduccionController@store');
		Route::get('produccion/edit/{id}', 'GaleriaproduccionController@edit');
		Route::put('produccion/update/{id}', 'GaleriaproduccionController@update');
		Route::get('produccion/delete/{id}', 'GaleriaproduccionController@delete');

		Route::resource('producciones/videos', 'VideoController');

    // Admin Calidad
		Route::prefix('calidad')->group(function () {
			//Calidad
			Route::resource('/index', 'CalidadController');		
			
		//Descargas de Calidad
			Route::resource('/descargas', 'DescargaController');
			Route::get('delete/{id}', 'DescargaController@eliminar');
		});

    // Admin Novedades
		Route::prefix('novedades')->group(function () {
			//Calidad
			Route::resource('/index', 'NovedadController');	
			Route::get('delete/{id}', 'NovedadController@eliminar');	
			
		//Descargas de Calidad
			Route::resource('/categorias', 'CategoriaController');
			Route::get('/categorias/delete/{id}', 'CategoriaController@eliminar');
		});

    // Admin Empresa
		Route::prefix('empresa')->group(function () {
			//Empresa
			Route::resource('/index', 'EmpresaController');	

		//Sliders de Empresa
			Route::get('/sliders', 'EmpresaController@indexSlider');
			Route::get('/sliders/create', 'EmpresaController@createSlider');
			Route::post('/sliders', 'EmpresaController@storeSlider');
			Route::get('/sliders/{id}', 'EmpresaController@editSlider');
			Route::put('/sliders/{id}', 'EmpresaController@updateSlider');	
			Route::get('/sliders/eliminar/{id}', 'EmpresaController@eliminar');	
		});


	// Admin Información
		Route::prefix('datos')->group(function () {
			Route::get('/contacto', 'DatoController@contacto');
			Route::get('/editContacto/{id}', 'DatoController@editContacto');
			Route::put('update/{id}', 'DatoController@update');
		});

	// Admin Metadato
		Route::resource('metadatos', 'MetadatoController');

    // Admin Usuarios
		Route::prefix('usuarios/')->group(function () {
			Route::resource('user', 'UserController')->except(['show']);
			Route::get('delete/{id}', 'UserController@eliminar');
		});
});
