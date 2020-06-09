<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\Factory;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    //

    public function index(Request $request) {

        $form = Factory::getForms('CreateForm');

        if ($form === false) abort(403);


        if ($request->ajax()) {

            $validate = Validator::make($request->formData, [
                'name' => 'required|max:10|min:4',
                'phone' => 'required|max:10|min:4',
                'message' => 'max:255',
            ]);

            if ($validate->fails()) {

                echo 'Данные не валидны!';

            } else {

                $save = $form->insert($request->formData);

                echo $save;

            }

            return false;

        }

        return view('welcome', ['form' => $form]);


    }
}
