<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems')->paginate();

        return OrderResource::collection($orders);
    }

    public function show($id)
    {
        $order = Order::with('orderItems')->find($id);

        return new OrderResource($order);
    }

}
