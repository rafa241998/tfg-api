<?php

namespace App\Http\Controllers;

use App\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        return CartItem::all();
    }

    public function show(CartItem $cartItem)
    {
        return $cartItem;
    }

    public function store(Request $request)
    {
        $cartItem = CartItem::create($request->all());

        return response()->json($cartItem, 201);
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $cartItem->update($request->all());

        return response()->json($cartItem, 200);
    }

    public function delete(CartItem $cartItem)
    {
        $cartItem->delete();

        return response()->json(null, 204);
    }
    public function addItem (CartItem $cartItem)
    {
        $cartItem->update(array('quantity' => $cartItem->quantity + 1));

        return response()->json($cartItem, 200);
    }
    public function removeItem (CartItem $cartItem)
    {
        $cartItem->update(array('quantity' => $cartItem->quantity - 1));

        return response()->json($cartItem, 200);
    }
}
