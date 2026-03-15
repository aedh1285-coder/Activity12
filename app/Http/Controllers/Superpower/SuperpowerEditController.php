<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerEditController extends Controller
{
    public function __invoke(Superpower $superpower)
    {
        return view('superpowers.edit', compact('superpower'));
    }
}