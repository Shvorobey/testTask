<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkboxController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('checkbox')->with([
        ]);
    }
}
