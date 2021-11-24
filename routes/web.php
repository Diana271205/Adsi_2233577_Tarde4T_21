<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\Ejercicio4Controller;
use App\Http\Controllers\Ejercicio5Controller;
use App\Http\Controllers\Ejercicio6Controller;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\StudentController;
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

Route::get('/Ejercicio2', [Ejercicio2Controller::class, 'index'])->name('Ejercicio2');

Route::post('/Resultado2', [Ejercicio2Controller::class, 'Resultado2'])->name('Resultado2');

Route::get('/Ejercicio3', [Ejercicio3Controller::class, 'index'])->name('Ejercicio3');

Route::post('/Ejercicio3', [Ejercicio3Controller::class, 'Resultado3'])->name('Resultado3');

Route::get('/Ejercicio4', [Ejercicio4Controller::class, 'index'])->name('Ejercicio4');

Route::post('/Ejercicio4', [Ejercicio4Controller::class, 'Resultado4'])->name('Resultado4');

Route::get('/Ejercicio5', [Ejercicio5Controller::class, 'index'])->name('Ejercicio5');

Route::post('/Ejercicio5', [Ejercicio5Controller::class, 'Resultado5'])->name('Resultado5');

Route::get('/Ejercicio6', [Ejercicio6Controller::class, 'index'])->name('Ejercicio6');

Route::post('/Ejercicio6', [Ejercicio6Controller::class, 'Resultado6'])->name('Resultado6');

Route::resource('/students','App\Http\Controllers\StudentController');