<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function getPhones()
    {
        $phones = [
            ["id" => 1, "name" => "iphone", "model" => "15", "price" => 5000],
            ["id" => 2, "name" => "samsung", "model" => "s23", "price" => 3000],
            ["id" => 3, "name" => "huawei", "model" => "y9", "price" => 2000]
        ];

        return view("phones", ["phones" => $phones]);
    }
}
