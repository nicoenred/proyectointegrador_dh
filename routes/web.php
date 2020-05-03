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

Route::get('/index', function(){
  return view('index');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/admin/{id}', 'UserController@admin')->middleware('roleMiddleware')->name('admin');

Route::get('/contacto', 'ContactController@index')->name('contact');
Route::get('/about', function(){
  return view('about');
});
Route::get('/faq', function(){
  return view('faq');
});

/* CRUD */

Route::get('/excursiones','ExcursionController@directory')->middleware('roleMiddleware')->name('listarExcursiones');
Route::get('/excursiones/{id}','ExcursionController@show');
/*Route::get('/actores/buscar' , 'ActorsController@search'); BUSQUEDA*/
Route::get('/excursion/agregar' , 'ExcursionController@crear')->name('cargarExcursion');
Route::post('/excursion/crear','ExcursionController@almacenar');
Route::get('/excursion/{id}/editar' , 'ExcursionController@edit');
Route::put('/excursion/{id}' , 'ExcursionController@update');
Route::delete('/excursion/{id}' , 'ExcursionController@destroy');
