<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function GetResult(Request $request)
    {
        return view('results', ["grade" => $request->grade]);
    }
}
