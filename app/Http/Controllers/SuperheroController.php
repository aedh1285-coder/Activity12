<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::with('universe')->get();
        return view('superheroes', compact('superheroes'));
    }
}