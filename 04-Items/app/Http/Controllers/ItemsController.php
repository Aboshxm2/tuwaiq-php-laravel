<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function index()
    {
        $items = DB::table("items")
            ->join("item_groups", "items.itemGroupNo", "=", "item_groups.id")
            ->select("item_groups.name as group", "items.*")
            ->get();
        $itemGroups = ItemGroup::all();

        return view('items', ["items" => $items, "itemGroups" => $itemGroups]);
    }

    public function add(Request $request)
    {
        $item = Item::create([
            "name" => $request->name,
            "price" => $request->price,
            "qty" => $request->qty,
            "color" => $request->color,
            "itemGroupNo" => $request->itemGroupNo,
        ]);

        $item->save();

        return redirect("items");
    }

    public function edit(int $id)
    {
        $item = Item::find($id);
        $itemGroups = ItemGroup::all();

        return view("editItem", ["item" => $item, "itemGroups" => $itemGroups]);
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->qty = $request->qty;
        $item->color = $request->color;
        $item->itemGroupNo = $request->itemGroupNo;
        $item->save();

        return redirect("items");
    }

    public function remove(int $id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect("items");
    }

}
