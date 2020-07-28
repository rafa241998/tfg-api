<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());

        return response()->json($order, 201);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return response()->json($order, 200);
    }

    public function delete(Order $order)
    {
        $order->delete();

        return response()->json(null, 204);
    }
    //Return product from the order
    public function getOrder(Order $order)
    {
        foreach($order->orderItems as $o){
            $o->colorSize->productColor->product;
            $o->colorSize->productColor->color;
            $o->colorSize->size;
        }

        return $order->orderItems;
    }
}
