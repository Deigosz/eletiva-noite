<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\BatidaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categoria', CategoriaController::class);
    
    Route::resource('cargos', CargosController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('turnos', TurnoController::class);
    Route::resource('batidas', BatidaController::class);
});

require __DIR__.'/auth.php';
