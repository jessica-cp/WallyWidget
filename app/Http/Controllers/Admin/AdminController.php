<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WidgetPacks;

class AdminController extends Controller
{
    public function index()
    {
        return view('site.admin.index');
    }

    public function create()
    {
        return view('site.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_of_widgets' => 'required'
        ]);

        WidgetPacks::create($request->all());
        return redirect()->back()->with('success', 'A pack has been added successfully');
    }
}
