<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return Cart::all();
    }

    public function show(Cart $cart)
    {
        return $cart;
    }

    public function getItems(Cart $cart)
    {
        return $cart->cartItems;
    }

    public function store(Request $request)
    {
        $cart = Cart::create($request->all());

        return response()->json($cart, 201);
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->update($request->all());

        return response()->json($cart, 200);
    }

    public function delete(Cart $cart)
    {
        $cart->delete();

        return response()->json(null, 204);
    }
}
