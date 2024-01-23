<?php

namespace App\Http\Controllers;

use App\Models\ItemGroup;
use Illuminate\Http\Request;

class ItemGroupsController extends Controller
{
    public function index()
    {
        $itemGroups = ItemGroup::all();

        return view('itemGroups', ["itemGroups" => $itemGroups]);

    }

    public function add(Request $request)
    {
        $itemGroup = ItemGroup::create([
            "name" => $request->name
        ]);

        $itemGroup->save();

        return redirect("itemGroups");
    }

    public function edit(int $id)
    {
        $itemGroup = ItemGroup::find($id);

        return view("editItemGroup", ["itemGroup" => $itemGroup]);
    }

    public function update(Request $request)
    {
        $itemGroup = ItemGroup::find($request->id);
        $itemGroup->name = $request->name;
        $itemGroup->save();

        return redirect("itemGroups");
    }

    public function remove(int $id)
    {
        $itemGroup = ItemGroup::find($id);
        $itemGroup->delete();

        return redirect("itemGroups");
    }
}
