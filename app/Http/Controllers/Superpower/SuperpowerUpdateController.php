<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerUpdateController extends Controller
{
    public function __invoke(Request $request, Superpower $superpower)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $superpower->update($request->all());

        return redirect()->route('superpowers.index')
            ->with('success', 'Superpoder actualizado exitosamente.');
    }
}