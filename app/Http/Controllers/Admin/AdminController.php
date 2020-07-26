<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WidgetPacks;

class AdminController extends Controller
{
    public function index()
    {
        $widgetLists = WidgetPacks::all();

        return view('site.admin.index', compact('widgetLists'));
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

    public function edit($id)
    {
        $widgetLists = WidgetPacks::find($id);

        return view('site.admin.edit', compact('widgetLists'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_of_widgets' => 'required'
        ]);

        $widgetLists = array(
            'no_of_widgets' => $request->no_of_widgets,
        );

        WidgetPacks::whereId($id)->update($widgetLists);

        return redirect()->route('site.admin.index')
                        ->with('success', 'Packet has been edited');
    }

    public function destroy($id)
    {
        $widgetList = WidgetPacks::find('id');
        $widgetList->delete();

        return redirect()->route('site.admin.index')
                        ->with('success', 'Packet has been deleted');
    }
}
