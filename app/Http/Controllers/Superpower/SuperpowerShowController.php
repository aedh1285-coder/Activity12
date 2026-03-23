<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;

class SuperpowerShowController extends Controller
{
    public function __invoke($id)
    {
        $superpower = Superpower::findOrFail($id);
        return view('superpowers.show', compact('superpower'));
    }
}
