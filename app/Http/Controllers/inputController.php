<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('text_input')->with([
            'first' => random_int(0, 99),
            'second' => random_int(0, 99)
        ]);
    }
}
