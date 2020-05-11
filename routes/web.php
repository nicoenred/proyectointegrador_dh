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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacto', 'ContactController@index')->name('contact');
Route::get('/about', function(){return view('about');});
Route::get('/faq', function(){return view('faq');});

/* Gestión de usuarios */
Route::get('/miPerfil/{id}', 'UserController@miPerfil')->name('profile');
Route::put('/updateAvatar/{id}', 'UserController@cargarAvatar');
Route::get('/miPerfil/{id}/editar', 'UserController@editarInformacion');
Route::put('/updateInfo/{id}', 'UserController@udpateInfo');
Route::get('/admin/{id}', 'UserController@admin')->middleware('roleMiddleware')->name('admin');


/* Carrito */
Route::get('/carrito', 'CarritoController@mostrarCarro')->name('carrito');
Route::get('/add/{id}' , 'CarritoController@addItem');
Route::get('/deleteItem/{id}', 'CarritoController@deleteItem')->name('eliminarItem');
Route::get('/directorio', 'ExcursionController@DirectoryShop');
Route::get('/shopExcursion/{id}' , 'ExcursionController@shopping');

/* CRUD */
Route::get('/excursiones','ExcursionController@directory')->middleware('roleMiddleware')->name('listarExcursiones');
Route::get('/excursiones/{id}','ExcursionController@show')->middleware('roleMiddleware');
/*Route::get('/excursiones/buscar' , 'ExcursionController@search'); BUSQUEDA*/
Route::get('/excursion/agregar' , 'ExcursionController@crear')->name('cargarExcursion');
Route::post('/excursion/crear','ExcursionController@almacenar')->middleware('roleMiddleware');
Route::get('/excursion/{id}/editar' , 'ExcursionController@edit')->middleware('roleMiddleware');
Route::put('/excursion/{id}' , 'ExcursionController@update')->middleware('roleMiddleware');
Route::delete('/excursion/{id}' , 'ExcursionController@destroy')->middleware('roleMiddleware');
