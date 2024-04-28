<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function isNumber(Request $request) {


        $inputValue = $request->input('inputValue');

        if(is_numeric($inputValue)) {

            $isnumeric = "It's a number";

            return view('isnumber', ['isnumeric' => $isnumeric]);
        }

        if(is_string($inputValue)) {

            $isstring = "It's a string";
            return view('isnumber', ['isstring' => $isstring]);
        }

        if($inputValue == "") {

            $undefined = "It's undefined";
            return view('isnumber', ['undefined' => $undefined]);

        }


    }

}
