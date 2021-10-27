<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    function suma(Request $required){
        $numero1 = $required->input('numero1'); 
        $numero2 = $required->input('numero2');   
        $suma = ($numero1 + $numero2);
        echo "La suma del número ".$numero1." y "."$numero2"." es : ".$suma;
    }
}
