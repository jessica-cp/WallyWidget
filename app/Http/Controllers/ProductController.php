<?php

namespace App\Http\Controllers;

use App\WidgetPack;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $widgetLists = WidgetPack::all();

        return view('site.products.index', compact('widgetLists'));
    }

}
