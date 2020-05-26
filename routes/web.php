<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Routas para trabajar con herramientas
Route::get('verHer', 'Herramientas\HerramientasController@index')->name('ver-herramienta');
Route::get('agrHerr', 'Herramientas\HerramientasController@create')->name('agregar-herramienta');
Route::resource('herremientas', 'Herramientas\HerramientasController'); //Para llamar todos los metodos del controlador

//Para pasar mensaje a la vista
Route::view('delHer', 'Herramientas.ver');
Route::view('agrHerramienta', 'Herramientas.agregar');


//Rutas para trabajar con proveedores
Route::get('verPro', 'Proveedor\ProveedorController@index')->name('ver-proveedor');
Route::get('agrPro', 'Proveedor\ProveedorController@create')->name('agregar-proveedor');
Route::resource('proveedor', 'Proveedor\ProveedorController');

//Para pasar mensaje a la vista
Route::view('delPro', 'proveedor.ver');
Route::view('agrProveedor', 'proveedor.agregar');