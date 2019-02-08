<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buttonNextController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->radio === date("l")) {
            $request->session()->put('page_5', 1);
        } else {
            $request->session()->put('page_5', 0);
        }
        return redirect(route('finish'));
    }
}
