<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buttonController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('radio_button')->with([
            'data' => date("l")

        ]);
    }
}
