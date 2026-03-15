<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseEditController extends Controller
{
    /**
     * Show the form for editing the specified universe.
     */
    public function __invoke(Universe $universe)
    {
        return view('universes.edit', compact('universe'));
    }
}