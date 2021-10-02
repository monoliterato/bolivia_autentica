<?php

use App\Http\Controllers\PaqueteController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::view('/index', 'index');
Route::view('/rota', 'rota');
Route::view('/paquetes', 'paquetes_y_destinos');
Route::view('/detalles_paquete', 'detalles_paquete')->name('detalles_paquete');;
Route::view('/quienes_somos', 'quienes_somos');
Route::view('/detalles_articulo', 'detalles_articulo');
Route::view('/contactos', 'contactos');
Route::view('/articulos', 'articulos');
Route::view('/ventas', 'ventas');
Route::resource('paqueteControlador', 'App\Http\Controllers\PaqueteController');
Route::resource('ventaControlador', 'App\Http\Controllers\VentaController');
Route::resource('articulos', 'App\Http\Controllers\ArticuloController');


