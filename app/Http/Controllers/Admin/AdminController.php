<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WidgetPack;

class AdminController extends Controller
{
    public function index()
    {
        $widgetLists = WidgetPack::all();

        return view('site.admin.index', compact('widgetLists'));
    }

    public function create()
    {
        return view('site.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_of_widgets' => 'required',
            'price' => 'required'
        ]);

        WidgetPack::create($request->all());
        return redirect()->route('site.admin.index')
                        ->with('success', 'A pack has been added successfully');
    }

    public function edit($id)
    {
        $widgetLists = WidgetPack::find($id);

        return view('site.admin.edit', compact('widgetLists'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_of_widgets' => 'required',
            'price' => 'required'
        ]);

        $widgetLists = array(
            'no_of_widgets' => $request->no_of_widgets,
            'price' => $request->price
        );

        WidgetPack::whereId($id)->update($widgetLists);

        return redirect()->route('site.admin.index')
                        ->with('success', 'Packet has been edited');
    }

    public function destroy($id)
    {
        $widgetList = WidgetPack::find($id);
        $widgetList->delete();

        return redirect()->route('site.admin.index')
                        ->with('success', 'Packet has been deleted');
    }
}
