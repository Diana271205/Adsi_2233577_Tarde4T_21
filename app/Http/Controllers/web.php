<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\OperacionesController;
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
Route::get('/articulos', function () {
    return view('articulos');
});

Route::get('/cliente', [ClientesController::class, 'Lista_clientes']);

Route::post('/opingreso',[OperacionesController::class,'operaciones'])->name('operaciones');

Route::get('operaciones',[OperacionesController::class, 'index']);

