<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputNextController extends Controller
{
    public function __invoke(Request $request)
    {
        $first = $request->first;
        $second = $request->second;
        $sum = $first + $second;

        if ($sum == $request->count) {
            $request->session()->put('page_3', 1);
        } else {
            $request->session()->put('page_3', 0);
        }
        return redirect(route('checkbox'));
    }
}
