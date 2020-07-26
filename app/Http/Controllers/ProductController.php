<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }
    //Devuelve la imagen asociada al producto (para el Muro)
    public function getImage(Product $product)
    {
        return response()->file(storage_path($product->image));
    }
    //Devuelve los colores de cada producto siempre que esten activos
    public function getColors(Product $product)
    {
        return $product->productColors->where("active", 1);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
