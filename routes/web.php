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

//Route::get('email','EmailController@index');

Route::get('/', function () {
    return redirect('login');
});

Route::get('correo','CorreoController@index');
Route::get('borrar','CorreoController@borrar');

Auth::routes();

Route::middleware(['auth'])->group(function() {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('/cotizacion', 'CotizacionController');
});
