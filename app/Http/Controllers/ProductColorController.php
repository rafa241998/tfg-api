<?php

namespace App\Http\Controllers;

use App\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index()
    {
        return ProductColor::all();
    }

    public function show(ProductColor $productColor)
    {
        return $productColor;
    }

    public function getImage(ProductColor $productColor)
    {
        return response()->file(storage_path($productColor->image));
    }
    //Devuelve las tallas para cada color siempre que la cantidad sea superior a 0
    public function getSizes(ProductColor $productColor)
    {
        return $productColor->colorSizes->where("quantity",">","0");
    }

    public function store(Request $request)
    {
        $productColor = ProductColor::create($request->all());

        return response()->json($productColor, 201);
    }

    public function update(Request $request, ProductColor $productColor)
    {
        $productColor->update($request->all());

        return response()->json($productColor, 200);
    }

    public function delete(ProductColor $productColor)
    {
        $productColor->delete();

        return response()->json(null, 204);
    }
}
