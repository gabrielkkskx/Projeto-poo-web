<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request)
    {
        $order = Order::create($request->validated());
        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return $order;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderUpdateRequest $request, Order $order)
    {
        $order->update($request->validated());
        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }
}