<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    function triangulo(Request $required){
        $lado1 = $required->input('lado1'); 
        $lado2 = $required->input('lado2'); 
        $lado3 = $required->input('lado3'); 
        $altura = $required->input('altura'); 
        $area = (($lado3 * $altura) / (2));
        $perimetro = ($lado1 + $lado2 + $lado3);
        if ($lado1 == $lado2 && $lado1 == $lado3) {
            echo "El triangulo es de tipo: Equilatero, y su área es de "."$area"." y su perimetro es de  ".$perimetro;
        } else if ($lado1 == $lado2 && $lado1 != $lado3 || $lado2 == $lado3 && $lado1 != $lado2) {
            echo "El triangulo es de tipo: Isoceles, y su área es de "."$area"." y su perimetro es de  ".$perimetro;
        } else {
            echo "El triangulo es de tipo: Escaleno, y su área es de "."$area"." y su perimetro es de  ".$perimetro;
        }
        
    }
}
