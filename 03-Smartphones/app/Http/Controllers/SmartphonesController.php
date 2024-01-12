<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphonesController extends Controller
{
    public function smartphones()
    {
        $smartphones = Smartphone::all()->all();

        return view("smartphones", ["smartphones" => $smartphones]);
    }

    public function saveSmartphone(Request $request)
    {
        $smartphone = Smartphone::create([
            "name" => $request->name,
            "price" => $request->price,
            "color" => $request->color
        ]);

        $smartphone->save();

        return $this->smartphones();
    }
}
