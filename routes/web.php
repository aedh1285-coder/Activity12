<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\SuperpowerController;

Route::get('/universes', [UniverseController::class, 'index'])->name('universes.index');
Route::get('/superheroes', [SuperheroController::class, 'index'])->name('superheroes.index');
Route::get('/superpowers', [SuperpowerController::class, 'index'])->name('superpowers.index');

// Rutas para Superhéroes (Create y Update)
Route::post('/superheroes', [SuperheroController::class, 'store'])->name('superheroes.store');
Route::put('/superheroes/{superhero}', [SuperheroController::class, 'update'])->name('superheroes.update');
Route::get('/superheroes/{superhero}/edit', [SuperheroController::class, 'edit'])->name('superheroes.edit');

// Rutas para Universos (Create y Update)
Route::post('/universes', [UniverseController::class, 'store'])->name('universes.store');
Route::put('/universes/{universe}', [UniverseController::class, 'update'])->name('universes.update');
Route::get('/universes/{universe}/edit', [UniverseController::class, 'edit'])->name('universes.edit');