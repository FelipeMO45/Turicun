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

Route::get('/vehiculos', [App\Http\Controllers\VehiculosController::class, 'vehiculos'])->name('vehiculos');
Route::get('/conductores', [App\Http\Controllers\ConductoresController::class, 'conductores'])->name('conductores');
Route::get('/rutas', [App\Http\Controllers\RutasController::class, 'rutas'])->name('rutas');
Route::get('/horarios', [App\Http\Controllers\HorariosController::class, 'horarios'])->name('horarios');
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'empleados'])->name('empleados');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('Editar-Usuario/{id}', [App\Http\Controllers\UsuariosController::class,'edit']);
Route::put('actualizar-Usuario/{id}', [App\Http\Controllers\UsuariosController::class,'update']);
Route::get('Eliminar-Usuario/{id}', [App\Http\Controllers\UsuariosController::class,'destroy']);

