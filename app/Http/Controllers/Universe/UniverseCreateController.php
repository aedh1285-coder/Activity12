<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniverseCreateController extends Controller
{
    /**
     * Show the form for creating a new universe.
     */
    public function __invoke()
    {
        return view('universes.create');
    }
}