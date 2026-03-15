<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseIndexController extends Controller
{
    /**
     * Display a listing of the universes.
     */
    public function __invoke()
    {
        $universes = Universe::with('superheroes')->get();
        return view('universes.index', compact('universes'));
    }
}