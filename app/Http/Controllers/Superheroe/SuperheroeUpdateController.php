<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroeUpdateController extends Controller
{
    /**
     * Update the specified superhero in storage.
     */
    public function __invoke(Request $request, Superhero $superhero)
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
}