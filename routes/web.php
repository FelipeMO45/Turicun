<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuariosController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('modulos.ingresar');
});

Auth::routes();


Route::get('Inicio', [InicioController::class, 'index']);

Route::get('/MiPerfil', [App\Http\Controllers\UsuariosController::class,'MiPerfil'])->name('MiPerfil');

Route::put('/MiPerfil', [App\Http\Controllers\UsuariosController::class, 'MiPerfilUpdate'])->name('MiPerfilUpdate');
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('index');
Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'store'])->name('store');

Route::get('/vehiculos', [App\Http\Controllers\UsuariosController::class, 'vehiculos'])->name('vehiculos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



