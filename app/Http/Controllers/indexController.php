<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class indexController extends Controller
{

    public function __invoke()
    {
        return view('index')->with([
            'students' => Student::limit(10)->get()
        ]);
    }

}
