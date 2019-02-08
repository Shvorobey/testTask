<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class textNextController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->session()->put('page_2', 1);
        return redirect(route('input'));
    }
}
