<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseShowController extends Controller
{
    public function __invoke($id)
    {
        $universe = Universe::findOrFail($id);
        return view('universes.show', compact('universe'));
    }
}