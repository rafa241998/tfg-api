<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        return Favorite::all();
    }

    public function show(Favorite $favorite)
    {
        return $favorite;
    }

    public function store(Request $request)
    {
        $favorite = Favorite::create($request->all());

        return response()->json($favorite, 201);
    }

    public function update(Request $request, Favorite $favorite)
    {
        $favorite->update($request->all());

        return response()->json($favorite, 200);
    }

    public function delete(Favorite $favorite)
    {
        $favorite->delete();

        return response()->json(null, 204);
    }
}
