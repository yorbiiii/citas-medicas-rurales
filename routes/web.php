<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuscarController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return redirect()->route('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// grupos

Route::middleware('auth')->group(function () {

    Route::get('/paciente', [PacienteController::class, 'index'])
        ->name('paciente.inicio');

    Route::get('/medico', [MedicoController::class, 'index'])
        ->name('medico.inicio');

    Route::get('/centro', [CentroController::class, 'index'])
        ->name('centro.inicio');

    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.inicio');

    Route::get('/buscar', [App\Http\Controllers\BuscarController::class, 'index'])
        ->name('buscar.medicos');

    Route::get('/medicos/{medico}', [App\Http\Controllers\MedicoController::class, 'show'])
        ->name('medico.show');
});
