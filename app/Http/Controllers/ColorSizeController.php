<?php

namespace App\Http\Controllers;

use App\ColorSize;
use Illuminate\Http\Request;

class ColorSizeController extends Controller
{
    public function index()
    {
        return ColorSize::all();
    }

    public function show(ColorSize $colorSize)
    {
        return $colorSize;
    }

    public function store(Request $request)
    {
        $colorSize = ColorSize::create($request->all());

        return response()->json($colorSize, 201);
    }

    public function update(Request $request, ColorSize $colorSize)
    {
        $colorSize->update($request->all());

        return response()->json($colorSize, 200);
    }

    public function delete(ColorSize $colorSize)
    {
        $colorSize->delete();

        return response()->json(null, 204);
    }
}
