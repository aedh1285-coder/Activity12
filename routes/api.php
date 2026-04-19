<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UniverseController;
use App\Http\Controllers\Api\SuperheroController;

Route::apiResource('universes', UniverseController::class);
Route::apiResource('superheroes', SuperheroController::class);