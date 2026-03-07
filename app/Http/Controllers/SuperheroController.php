<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // READ - Mostrar todos los superhéroes (con formularios incluidos)
    public function index()
    {
        $superheroes = Superhero::with('universe')->get();
        $universes = Universe::all();
        return view('superheroes', compact('superheroes', 'universes'));
    }

    // CREATE - Guardar nuevo superhéroe
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'real_name' => 'nullable|string|max:255',
            'gender' => 'required|string|max:50',
            'universe_id' => 'required|exists:universes,id'
        ]);

        Superhero::create($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhéroe creado exitosamente.');
    }

    // UPDATE - Actualizar superhéroe
    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'real_name' => 'nullable|string|max:255',
            'gender' => 'required|string|max:50',
            'universe_id' => 'required|exists:universes,id'
        ]);

        $superhero->update($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhéroe actualizado exitosamente.');
    }

    // Para mostrar formulario de edición (opcional - podemos manejar todo en index)
    public function edit(Superhero $superhero)
    {
        $superheroes = Superhero::with('universe')->get();
        $universes = Universe::all();
        return view('superheroes', compact('superheroes', 'universes', 'superhero'));
    }
}