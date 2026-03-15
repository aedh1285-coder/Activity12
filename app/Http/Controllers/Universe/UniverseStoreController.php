<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseStoreController extends Controller
{
    /**
     * Store a newly created universe in storage.
     */
    public function __invoke(Request $request)
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
}