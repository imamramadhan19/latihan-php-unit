<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Sortalphabet extends Controller
{
     public function stringorder($string){
    	if(preg_match('/[^a-zA-Z\s-]/i',$string)){
        	abort(404, "Inputan Salah");
        }
        $sortnya = count_chars($string,3);
        return trim($sortnya);
	}

}
