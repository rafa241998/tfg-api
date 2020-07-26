<?php

namespace App\Http\Controllers;

use App\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return OrderItem::all();
    }

    public function show(OrderItem $orderItem)
    {
        return $orderItem;
    }

    public function store(Request $request)
    {
        $orderItem = OrderItem::create($request->all());

        return response()->json($orderItem, 201);
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        $orderItem->update($request->all());

        return response()->json($orderItem, 200);
    }

    public function delete(OrderItem $orderItem)
    {
        $orderItem->delete();

        return response()->json(null, 204);
    }
}
