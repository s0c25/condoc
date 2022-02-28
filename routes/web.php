<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\CondicionController;
use App\Http\Livewire\Pacientes;
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



Route::group(['middleware' => 'auth'], function () {
  Route::view('/gracias', 'error.gracias')->name('gracias');
  Route::view('/vista-previa', 'error.basico')->name('vista-previa');

  // Route::get('/nuevoPaciente2', function () {
  //   return view('pacientes');
  // })->name('nuevoPaciente2');
  Route::get('/nuevos-pacientes', function () {
    return view('hola');
  })->name('nuevoPaciente');

  Route::get('/pacientes/ver/{paciente}', [PacientesController::class, 'show'])->name('verPaciente');
  Route::post('/nuevos-pacientes/crear', [PacientesController::class, 'store'])->name('addPaciente');

  Route::get('/condiciones', [CondicionController::class, 'index'])->name('condicion');
  Route::get('/condiciones/malFormacion', [CondicionController::class, 'malFormacion'])->name('malFormacion');

  Route::get('/reportes', function () {
    return view('error.basico');
  })->name('reportes');
  
  Route::get('/usuarios', function () {
    return view('error.basico');
  })->name('usuarios');
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->middleware(['auth'])->name('dashboard');
});


require __DIR__ . '/auth.php';
