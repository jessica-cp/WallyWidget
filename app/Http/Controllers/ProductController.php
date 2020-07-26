<?php

namespace App\Http\Controllers;

use App\WidgetPacks;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $widgetLists = WidgetPacks::all();

        return view('site.products.index', compact('widgetLists'));
    }

}
