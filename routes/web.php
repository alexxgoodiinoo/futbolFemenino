<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EstadioController;
use App\Http\Controllers\JugadoraController;
use App\Http\Controllers\JugadorasController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\PartidosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');

Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');

Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');

Route::get('/equipos/{id}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');

Route::put('/equipos/{id}', [EquipoController::class, 'update'])->name('equipos.update');

Route::get('/equipos/{id}', [EquipoController::class, 'show'])->name('equipos.show');

Route::delete('/equipos/{id}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

Route::get('/estadios', [EstadioController::class, 'index'])->name('estadios.index');

Route::get('/estadios/create', [EstadioController::class, 'create'])->name('estadios.create');

Route::get('/estadios/{id}', [EstadioController::class, 'show'])->name('estadios.show');

Route::post('/estadios', [EstadioController::class, 'store'])->name('estadios.store');

Route::get('/estadios/{id}/edit', [EstadioController::class, 'edit'])->name('estadios.edit');

Route::put('/estadios{id}', [EstadioController::class, 'update'])->name('estadios.update');

Route::delete('/estadios/{id}', [EstadioController::class, 'destroy'])->name('estadios.destroy');

Route::get('/jugadoras', [JugadoraController::class, 'index'])->name('jugadoras.index');

Route::get('/jugadoras/show/{id}', [JugadoraController::class, 'show'])->name('jugadoras.show');

Route::get('/jugadoras/create', [JugadoraController::class, 'create'])->name('jugadoras.create');

Route::post('/jugadoras', [JugadoraController::class, 'store'])->name('jugadoras.store');

Route::get('/jugadoras/{id}/edit', [JugadoraController::class, 'edit'])->name('jugadoras.edit');

Route::put('/jugadoras/{id}', [JugadoraController::class, 'update'])->name('jugadoras.update');

Route::delete('/jugadoras/{id}', [JugadoraController::class, 'destroy'])->name('jugadoras.destroy');

Route::get('/partidos', [PartidoController::class, 'index']);

Route::get('/partidos/{id}', [PartidoController::class, 'show'])->name('partidos.show');