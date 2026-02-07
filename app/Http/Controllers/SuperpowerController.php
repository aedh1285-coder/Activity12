<?php

namespace App\Http\Controllers;

use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerController extends Controller
{
    public function index()
    {
        $superpowers = Superpower::all();
        return view('superpowers', compact('superpowers'));
    }
}