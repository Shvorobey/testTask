<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class saveFormController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'email' => 'required | email | string',
                'image' => ' required | image | dimensions: max_width=200, max_height=200 |  file',
            ]);

            $image = $request->file('image');
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move('images', $imageName);
            }
            session([
                'email' => $request->email,
                'time' => time(),
                'image' => $imageName,
            ]);

        }

        return redirect(route('text'));
    }
}
