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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('prueba', 'PruebaController@prueba'); //paso 1 cap9
//Aqui como primer param se incluye la palabra con que accedere
//en este caso prueba, luego separado por una coma ','
//el nombre del controladora y con un '@' colocamos la funcion que debera ejecutarse
Route::get('prueba/{name}', 'PruebaController@prueba'); //paso2 cap9
//Aqui se le pasa por parametro si se desea un valor que se manejara en le controlador.

Route::resource('trainers','TrainerController');
//Con esta ruta definida sabremos que tenemos acceso a nuestro controlador. //cap 10
//Como lo sabemos? Pues es lo que esta expuesto en la documentacion de laravel en #Resource Controller

Route::resource('discipulos', 'DiscipuloController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
