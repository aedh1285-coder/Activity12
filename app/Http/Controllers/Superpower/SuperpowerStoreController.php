<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        Superpower::create($request->all());

        return redirect()->route('superpowers.index')
            ->with('success', 'Superpoder creado exitosamente.');
    }
}