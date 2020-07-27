<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WidgetPack;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $widgetLists = WidgetPack::all();

        $widgetOrders = Order::all();

        return view('site.products.index', compact('widgetLists', 'widgetOrders'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
            'total' => 'required'
        ]);

        Order::create([
            'user_id' => $user_id,
            'total' => $request['total']
        ]);

        return redirect()->route('site.products.index')
            ->with('success', 'You have bought widgets');
    }



}
