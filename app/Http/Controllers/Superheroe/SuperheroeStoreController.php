<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroeStoreController extends Controller
{
    /**
     * Store a newly created superhero in storage.
     */
    public function __invoke(Request $request)
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
}