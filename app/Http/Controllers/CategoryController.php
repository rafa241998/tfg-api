<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function indexMan()
    {
        return Category::where('gender','M')->get();
    }
    public function indexWoman()
    {
        return Category::where('gender','W')->get();
    }
    public function show(Category $category)
    {
        return $category;
    }

    public function getImage(Category $category)
    {
        return response()->file(storage_path($category->image));
    }
    //Devuelve todos los productos de una categoria que tengan algun color activo
    public function getProducts(Category $category)
    {
        $stock = false;
        $products=[];
        foreach($category->products as $product){
            $stock = false;
            foreach($product->productColors as $productColor){
                if($productColor->active == true){
                    $stock = true;
                }
            }
            if($stock == true){
                $product->makeHidden('productColors');
                $products[] = $product;
            }
        }
        return $products;
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return response()->json($category, 200);
    }

    public function delete(Category $category)
    {
        $category->delete();

        return response()->json(null, 204);
    }
}
