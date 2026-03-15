<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroeIndexController extends Controller
{
    /**
     * Display a listing of the superheroes.
     */
    public function __invoke()
    {
        $superheroes = Superhero::with('universe')->get();
        return view('superheroes.index', compact('superheroes'));
    }
}