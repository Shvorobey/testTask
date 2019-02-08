<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class finishController extends Controller
{

    public function __invoke(Request $request)
    {
        if (Session::get('email') !== null) {
            try {
                $question_1 = Session::get('page_2');
                $question_2 = Session::get('page_3');
                $question_3 = Session::get('page_4');
                $question_4 = Session::get('page_5');
                $question = $question_1 + $question_2 + $question_3 + $question_4;

                $student = new Student();
                $student->email = Session::get('email');
                $student->image = Session::get('image');
                $student->time = Session::get('time');
                $student->score = $question;
//                dd($student);
                try {
                    $student->save();
                } catch (Exception $exception) {
                    return redirect()->route('start')->withErrors([
                        'error' => $exception->getMessage()]);
                }
            } catch (Exception $exception) {
                return redirect()->route('start')->withErrors([
                    'error' => $exception->getMessage()]);
            }
//            $data = Session::all();
//            dd($data);
            return view('finish')->with([
                'student' => $student
            ]);
        } else {
            return redirect()->route('start');
        }
    }
}
