<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Bilangan extends Controller
{
    public function pecahan($angkanya){
    	if(preg_match("/[^0-9+\-*\/()]+/", $angkanya)){
            abort(404, "Inputan Salah");
    	}

        $angka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		if ($angkanya < 12) {
			return " ".$angka[$angkanya];
		}
		elseif ($angkanya < 20) {
			return $this->pecahan($angkanya - 10)." belas";
		}
		elseif ($angkanya < 100) {
			return $this->pecahan($angkanya / 10)." puluh" .$this->pecahan($angkanya % 10);
		}
		elseif ($angkanya < 200) {
		    return " seratus".$this->pecahan($angkanya - 100);
		}
		elseif ($angkanya < 1000){
             return $this->pecahan($angkanya / 100)." ratus" .$this->pecahan($angkanya % 100);
        }
        elseif ($angkanya < 2000){
            return " seribu".$this->pecahan($angkanya - 1000);
        }
        elseif ($angkanya < 100000){
            return $this->pecahan($angkanya / 1000)." ribu".$this->pecahan($angkanya % 1000);
        }
        elseif ($angkanya >= 100000){
			return "belum beres";
		}
	
	}
}
