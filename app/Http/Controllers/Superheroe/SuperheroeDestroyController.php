<?php

namespace App\Http\Controllers\Superheroe;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroeDestroyController extends Controller
{
    /**
     * Remove the specified superhero from storage.
     */
    public function __invoke(Superhero $superhero)
    {
        $superhero->delete();

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhéroe eliminado exitosamente.');
    }
}