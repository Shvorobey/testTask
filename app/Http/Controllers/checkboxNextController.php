<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class checkboxNextController extends Controller
{
    public function __invoke(Request $request)
    {
        foreach (array_reverse($request->checkbox) as $checkbox) {
            if ($checkbox == 5) {
                $request->session()->put('page_4', 0);

                break;
            } else {
                $request->session()->put('page_4', 1);
                break;
            }
        }
        return redirect(route('button'));
    }
}
