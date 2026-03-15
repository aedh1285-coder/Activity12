<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperpowerCreateController extends Controller
{
    public function __invoke()
    {
        return view('superpowers.create');
    }
}