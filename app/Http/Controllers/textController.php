<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class textController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('text');

    }
}
