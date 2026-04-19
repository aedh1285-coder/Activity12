<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        return response()->json(Universe::all());
    }

    public function show($id)
    {
        return response()->json(Universe::findOrFail($id));
    }

    public function store(Request $request)
    {
        $universe = Universe::create($request->all());
        return response()->json($universe, 201);
    }

    public function update(Request $request, $id)
    {
        $universe = Universe::findOrFail($id);
        $universe->update($request->all());
        return response()->json($universe);
    }

    public function destroy($id)
    {
        Universe::destroy($id);
        return response()->json(null, 204);
    }
}