<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    public function dashboard()
    {
        Gate::authorize('is-admin');

        $orders = Order::all();
        
        return view('orders.dashboard', [
            'orders' => $orders
        ]);
    }

    public function create(Request $request)
    {
        $order = Order::create($request->json()->all());
        return $order;
    }
}
