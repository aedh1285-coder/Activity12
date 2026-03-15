<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroeCreateController extends Controller
{
    /**
     * Show the form for creating a new superhero.
     */
    public function __invoke()
    {
        $universes = Universe::all();
        return view('superheroes.create', compact('universes'));
    }
}