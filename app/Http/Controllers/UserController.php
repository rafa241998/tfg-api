<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\CartItem;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function getAddresses(User $user)
    {
        return $user->addresses;
    }

    //Me devuelve el carrito actual del usuario
    public function getCart(User $user)
    {
        return $user->cart->cartItems;
    }
    //Inserta un nuevo item al carro del usuario (color_size_id, quantity, price)
    public function setCartItem(User $user,Request $request)
    {
        $cartItem  = new CartItem($request->all());
        $cartItem = $user->cart->cartItems()->save($cartItem);

        return response()->json($cartItem, 201);
    }
    //Modifica la cantidad de un item del carro
    public function updateCartItem(User $user,Request $request)
    {
        $cartItem  = new CartItem($request->all());
        $cartItem = $user->cart->cartItems()->save($cartItem);

        return response()->json($cartItem, 201);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
