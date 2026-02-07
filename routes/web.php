<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\SuperpowerController;

Route::get('/universes', [UniverseController::class, 'index'])->name('universes.index');
Route::get('/superheroes', [SuperheroController::class, 'index'])->name('superheroes.index');
Route::get('/superpowers', [SuperpowerController::class, 'index'])->name('superpowers.index');