<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero; // ← Importante: Superhero sin 'e'

class SuperheroeShowController extends Controller
{
    public function __invoke($id)
    {
        $superheroe = Superhero::findOrFail($id); // ← Superhero sin 'e'
        return view('superheroes.show', compact('superheroe'));
    }
}