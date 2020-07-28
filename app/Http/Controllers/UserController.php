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

    public function getOrders(User $user)
    {
        return $user->orders;
    }
    //Me devuelve el carrito actual del usuario
    public function getCart(User $user)
    {
        foreach($user->cart->cartItems as $c){
            $c->colorSize->productColor->product;
            $c->colorSize->productColor->color;
            $c->colorSize->size;
        }

        return $user->cart->cartItems;
    }
    //Me devuelve la cantidad de productos actuales
    public function getCartQuantity(User $user)
    {
        return $user->cart->cartItems->sum('quantity');

    }
    //Inserta un nuevo item al carro del usuario (color_size_id, quantity, price)
    public function setCartItem(User $user,Request $request)
    {
        $data = $request->all();
        $item = $user->cart->cartItems()->where("color_size_id",$request->color_size_id)->get();
        if($item->isEmpty()){//Si el producto no esta en el carrito
            $cartItem  = new CartItem($data);
            $cartItem = $user->cart->cartItems()->save($cartItem);
        }else{//Si el producto esta en el carrito actualizamos la cantidad
            $data['quantity'] = $data['quantity'] + $item[0]->quantity;
            $cartItem = $user->cart->cartItems()->whereId($item[0]->id)->update($data);
        }


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
