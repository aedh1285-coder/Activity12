<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function index()
    {
        return response()->json(Superhero::all());
    }

    public function show($id)
    {
        return response()->json(Superhero::findOrFail($id));
    }

    public function store(Request $request)
    {
        $hero = Superhero::create($request->all());
        return response()->json($hero, 201);
    }

    public function update(Request $request, $id)
    {
        $hero = Superhero::findOrFail($id);
        $hero->update($request->all());
        return response()->json($hero);
    }

    public function destroy($id)
    {
        Superhero::destroy($id);
        return response()->json(null, 204);
    }
}