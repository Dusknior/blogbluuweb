<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller
{
    function resta(Request $required){
        $numero1 = $required->input('numero1'); 
        $numero2 = $required->input('numero2');        
        echo "La resta del número ".$numero1." y "."$numero2"." es : ".($numero1 - $numero2);
    }
}
