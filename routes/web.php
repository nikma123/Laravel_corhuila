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
Route::get('verPro', 'proveedor\Provedores@index')->name('ver-proveedor');
Route::get('agrPro', 'proveedor\Provedores@create')->name('agregar-proveedor');
Route::resource('proveedor', 'proveedor\Provedores');
//Para pasar mensaje a la vista
Route::view('delProv', 'proveedor.ver');
Route::view('agrProveedor', 'proveedor.agregar');




//Rutas para trabajar con Trabajadores
Route::get('verTra', 'trabajador\TrabajadoresController@index')->name('ver-trabajadores');
Route::get('agrTra', 'trabajador\TrabajadoresController@create')->name('agregar-trabajadores');
Route::resource('trabajadores', 'trabajador\TrabajadoresController');
//Para pasar mensaje a la vista
Route::view('deltrab', 'Trabajadores.ver');
Route::view('agrTrabajadores', 'Trabajadores.agregar');




//Rutas para trabajar con Calibracion
Route::get('verCal', 'CalibracionController@index')->name('ver-calibracion');
Route::get('agrCal', 'CalibracionController@create')->name('agregar-calibracion');
Route::resource('calibracion', 'CalibracionController');
//Para pasar mensaje a la vista
Route::view('delCal', 'Calibracion.ver');
Route::view('agrCalibracion', 'Calibracion.agregar');