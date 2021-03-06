<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/
//Auth
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
//User
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
    //User Addresses
Route::get('users/{user}/addresses', 'UserController@getAddresses');
Route::post('users/{user}/addresses', 'UserController@setAddress');

    //User Orders
Route::get('users/{user}/orders', 'UserController@getOrders');
    //User Favorites
Route::get('users/{user}/favorites', 'UserController@getFavoriteProducts');
Route::post('users/{user}/favorites', 'UserController@setFavoriteProduct');
Route::get('users/{user}/favorites/{product}', 'UserController@checkFavoriteProduct');
Route::delete('users/{user}/favorites/{product}', 'UserController@deleteFavoriteProduct');
    //User Cart
Route::get('users/{user}/cart', 'UserController@getCart');
Route::get('users/{user}/cart/quantity', 'UserController@getCartQuantity');
Route::post('users/{user}/cart', 'UserController@setCartItem');
Route::delete('users/{user}/cart/cartItems', 'UserController@deleteCartItems');

Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');
//Address
Route::get('addresses', 'AddressController@index');
Route::get('addresses/{address}', 'AddressController@show');
Route::post('addresses', 'AddressController@store');
Route::put('addresses/{address}', 'AddressController@update');
Route::delete('addresses/{address}', 'AddressController@delete');
//Order
Route::get('orders', 'OrderController@index');
Route::get('orders/{order}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('orders/{order}', 'OrderController@update');
Route::delete('orders/{order}', 'OrderController@delete');
Route::get('orders/{order}/orderItems', 'OrderController@getOrder');
//Payment
Route::get('payments', 'PaymentController@index');
Route::get('payments/{payment}', 'PaymentController@show');
Route::post('payments', 'PaymentController@store');
Route::put('payments/{payment}', 'PaymentController@update');
Route::delete('payments/{payment}', 'PaymentController@delete');
//Cart
Route::get('carts', 'CartController@index');
Route::get('carts/{cart}', 'CartController@show');
Route::get('carts/{cart}/cartItems', 'CartController@getItems');
Route::post('carts', 'CartController@store');
Route::put('carts/{cart}', 'CartController@update');
Route::delete('carts/{cart}', 'CartController@delete');

//Category
Route::get('categories', 'CategoryController@index');
Route::get('categories/man', 'CategoryController@indexMan');
Route::get('categories/woman', 'CategoryController@indexWoman');
Route::get('categories/{category}', 'CategoryController@show');
Route::get('categories/{category}/image', 'CategoryController@getImage');
Route::get('categories/{category}/products', 'CategoryController@getProducts');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@delete');
//Product
Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::get('products/{product}/image', 'ProductController@getImage');
Route::get('products/{product}/productColors', 'ProductController@getColors');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');
//ProductColor
Route::get('productColors', 'ProductColorController@index');
Route::get('productColors/{productColor}', 'ProductColorController@show');
Route::get('productColors/{productColor}/image', 'ProductColorController@getImage');
Route::get('productColors/{productColor}/colorSizes', 'ProductColorController@getSizes');
Route::post('productColors', 'ProductColorController@store');
Route::put('productColors/{productColor}', 'ProductColorController@update');
Route::delete('productColors/{productColor}', 'ProductColorController@delete');
//ColorSize
Route::get('colorSizes', 'ColorSizeController@index');
Route::get('colorSizes/{colorSize}', 'ColorSizeController@show');
Route::post('colorSizes', 'ColorSizeController@store');
Route::put('colorSizes/{colorSize}', 'ColorSizeController@update');
Route::delete('colorSizes/{colorSize}', 'ColorSizeController@delete');
//CartItem
Route::get('cartItems', 'CartItemController@index');
Route::get('cartItems/{cartItem}', 'CartItemController@show');
Route::post('cartItems', 'CartItemController@store');
Route::put('cartItems/{cartItem}', 'CartItemController@update');
Route::delete('cartItems/{cartItem}', 'CartItemController@delete');
Route::get('cartItems/{cartItem}/add', 'CartItemController@addItem');
Route::get('cartItems/{cartItem}/remove', 'CartItemController@removeItem');
//OrderItem
Route::get('orderItems', 'OrderItemController@index');
Route::get('orderItems/{orderItem}', 'OrderItemController@show');
Route::post('orderItems', 'OrderItemController@store');
Route::put('orderItems/{orderItem}', 'OrderItemController@update');
Route::delete('orderItems/{orderItem}', 'OrderItemController@delete');
//Favorite
Route::get('favorites', 'FavoriteController@index');
Route::get('favorites/{favorite}', 'FavoriteController@show');
Route::post('favorites', 'FavoriteController@store');
Route::put('favorites/{favorite}', 'FavoriteController@update');
Route::delete('favorites/{favorite}', 'FavoriteController@delete');

