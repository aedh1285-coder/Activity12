<?php

namespace App\Http\Controllers\Superpower;

use App\Http\Controllers\Controller;
use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerDestroyController extends Controller
{
    public function __invoke(Superpower $superpower)
    {
        $superpower->delete();

        return redirect()->route('superpowers.index')
            ->with('success', 'Superpoder eliminado exitosamente.');
    }
}