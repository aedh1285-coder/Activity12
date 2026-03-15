<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroeEditController extends Controller
{
    /**
     * Show the form for editing the specified superhero.
     */
    public function __invoke(Superhero $superhero)
    {
        $universes = Universe::all();
        return view('superheroes.edit', compact('superhero', 'universes'));
    }
}