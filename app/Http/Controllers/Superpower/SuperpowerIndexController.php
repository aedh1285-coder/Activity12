<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerIndexController extends Controller
{
    public function __invoke()
    {
        $superpowers = Superpower::all();
        return view('superpowers.index', compact('superpowers'));
    }
}