<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WidgetPack;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index($userId)
    {
        $widgetLists = WidgetPack::all();

        $widgetOrders = Auth::user()->order;

        return view('site.products.index', compact('widgetLists', 'widgetOrders'))->with('id', $userId);
    }

    public function store(Request $request, $userId)
    {
        $user_id = Auth::user()->id;

        $request->validate([
            'total' => 'required'
        ]);

        Order::create([
            'user_id' => $user_id,
            'total' => $request['total']
        ]);

        return redirect()->route('site.products.store', compact('userId'))
            ->with('id', $userId)
            ->with('success', 'You have bought widgets');
    }
}
