<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DividirController extends Controller
{
    function dividir(Request $required){
        $numero1 = $required->input('numero1'); 
        $numero2 = $required->input('numero2');  
        if($numero2 == 0){
            echo "La division entre número ".$numero2." no es posible.";
        } else {
            $division = ($numero1/$numero2);
            echo "La division del número ".$numero1." y "."$numero2"." es : ".$division;
        }
    }
}
