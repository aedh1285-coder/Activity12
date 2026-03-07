<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::with('superheroes')->get();
        return view('universes', compact('universes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'age' => 'required|integer|min:0'
        ]);

        Universe::create($request->all());

        return redirect()->route('universes.index')
            ->with('success', 'Universo creado exitosamente.');
    }

    public function update(Request $request, Universe $universe)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'age' => 'required|integer|min:0'
        ]);

        $universe->update($request->all());

        return redirect()->route('universes.index')
            ->with('success', 'Universo actualizado exitosamente.');
    }

    public function edit(Universe $universe)
    {
        $universes = Universe::with('superheroes')->get();
        return view('universes', compact('universes', 'universe'));
    }
}