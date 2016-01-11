<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Calculator extends Controller
{
    //
    public function hitung($str){
    	$calc = create_function("", "return (" . $str . ");" );
	    return $calc();
	}

}
