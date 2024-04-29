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

    public function agetodays(Request $request) {

        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day');
        $result = $request->input('result');


        if($year > 0 && $month > 0 && $day > 0) {

            $convert = ($year * 366) + ($month * 30) + $day;

            return view('agetodays', ['convert' => $convert]);

        } else {

            $error = true;

            return view('agetodays', ['error' => $error]);
        }


    }

    public function hourtominutes(Request $request) {

        $inputValue = $request->input('inputValue');

        if($inputValue > 0) {

            $convert = $inputValue * 60;

            return view('hourtominutes', ['convert' => $convert]);

        } else {
            $error = true;

            return view('hourtominutes', ['error' => $error]);

        }

    }

}
