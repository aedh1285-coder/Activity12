<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseUpdateController extends Controller
{
    /**
     * Update the specified universe in storage.
     */
    public function __invoke(Request $request, Universe $universe)
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
}