<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\CartItem;
use App\Favorite;
use App\Product;
use App\Address;
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

    public function setAddress(User $user, Request $request)
    {
        $address  = new Address($request->all());
        $user->addresses()->save($address);
    }

    public function getFavoriteProducts(User $user)
    {
        foreach( $user->favorites as $favorite){
            $favorite->product;
        }
        return $user->favorites;
    }

    public function setFavoriteProduct(User $user, Request $request)
    {
        $favorite  = new Favorite($request->all());
        $user->favorites()->save($favorite);
    }
    public function checkFavoriteProduct(User $user, int $product)
    {
        if ($user->favorites->where('product_id', $product)->count() > 0){
            return true;
        }else{
            return false;
        }

    }
    public function deleteFavoriteProduct(User $user, int $product)
    {
       $favorite = $user->favorites->where('product_id', $product)->first();
       return $favorite->delete();

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
        $user->cart()->create();
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
    public function deleteCartItems(User $user)
    {
        $user->cart->cartItems()->delete();

        return response()->json(null, 204);
    }
}

