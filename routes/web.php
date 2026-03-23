<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Universe\UniverseIndexController;
use App\Http\Controllers\Universe\UniverseCreateController;
use App\Http\Controllers\Universe\UniverseStoreController;
use App\Http\Controllers\Universe\UniverseEditController;
use App\Http\Controllers\Universe\UniverseShowController;
use App\Http\Controllers\Universe\UniverseUpdateController;
use App\Http\Controllers\Universe\UniverseDestroyController;

use App\Http\Controllers\Superheroe\SuperheroeIndexController;
use App\Http\Controllers\Superheroe\SuperheroeCreateController;
use App\Http\Controllers\Superheroe\SuperheroeStoreController;
use App\Http\Controllers\Superheroe\SuperheroeEditController;
use App\Http\Controllers\Superheroe\SuperheroeShowController;  
use App\Http\Controllers\Superheroe\SuperheroeUpdateController;
use App\Http\Controllers\Superheroe\SuperheroeDestroyController; 

use App\Http\Controllers\Superheroe\SuperpowerIndexController;
use App\Http\Controllers\Superheroe\SuperpowerCreateController;
use App\Http\Controllers\Superheroe\SuperpowerStoreController;
use App\Http\Controllers\Superheroe\SuperpowerEditController;
use App\Http\Controllers\Superpower\SuperpowerShowController;
use App\Http\Controllers\Superheroe\SuperpowerUpdateController;
use App\Http\Controllers\Superheroe\SuperpowerDestroyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// RUTA DE INICIO
Route::get('/', HomeController::class)->name('home');

// RUTAS PARA UNIVERSOS 
Route::get('/universes', UniverseIndexController::class)->name('universes.index');
Route::get('/universes/create', UniverseCreateController::class)->name('universes.create');
Route::post('/universes', UniverseStoreController::class)->name('universes.store');
Route::get('/universes/{universe}/edit', UniverseEditController::class)->name('universes.edit');
Route::get('/universes/{universe}', [UniverseShowController::class, '__invoke'])->name('universes.show');
Route::put('/universes/{universe}', UniverseUpdateController::class)->name('universes.update');
Route::delete('/universes/{universe}', UniverseDestroyController::class)->name('universes.destroy');

// RUTAS PARA SUPERHÉROES 
Route::get('/superheroes', SuperheroeIndexController::class)->name('superheroes.index');
Route::get('/superheroes/create', SuperheroeCreateController::class)->name('superheroes.create');
Route::post('/superheroes', SuperheroeStoreController::class)->name('superheroes.store');
Route::get('/superheroes/{superhero}/edit', SuperheroeEditController::class)->name('superheroes.edit');
Route::get('/superheroes/{superheroe}', [SuperheroeShowController::class, '__invoke'])->name('superheroes.show');
Route::put('/superheroes/{superhero}', SuperheroeUpdateController::class)->name('superheroes.update');
Route::delete('/superheroes/{superhero}', SuperheroeDestroyController::class)->name('superheroes.destroy');

// Rutas para Superpoderes 
Route::get('/superpowers', App\Http\Controllers\Superpower\SuperpowerIndexController::class)->name('superpowers.index');
Route::get('/superpowers/create', App\Http\Controllers\Superpower\SuperpowerCreateController::class)->name('superpowers.create');
Route::post('/superpowers', App\Http\Controllers\Superpower\SuperpowerStoreController::class)->name('superpowers.store');
Route::get('/superpowers/{superpower}/edit', App\Http\Controllers\Superpower\SuperpowerEditController::class)->name('superpowers.edit');
Route::get('/superpowers/{superpower}', [SuperpowerShowController::class, '__invoke'])->name('superpowers.show');
Route::put('/superpowers/{superpower}', App\Http\Controllers\Superpower\SuperpowerUpdateController::class)->name('superpowers.update');
Route::delete('/superpowers/{superpower}', App\Http\Controllers\Superpower\SuperpowerDestroyController::class)->name('superpowers.destroy');