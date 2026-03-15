<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseDestroyController extends Controller
{
    /**
     * Remove the specified universe from storage.
     */
    public function __invoke(Universe $universe)
    {
        // Verificar si tiene superhéroes asociados
        if ($universe->superheroes()->count() > 0) {
            return redirect()->route('universes.index')
                ->with('error', 'No se puede eliminar un universo que tiene superhéroes asociados.');
        }

        $universe->delete();

        return redirect()->route('universes.index')
            ->with('success', 'Universo eliminado exitosamente.');
    }
}