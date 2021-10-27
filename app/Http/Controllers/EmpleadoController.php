<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    function empleado(Request $required){
        $nombre = $required->input('nombre'); 
        $lunes = $required->input('lunes'); 
        $martes = $required->input('martes');
        $miercoles = $required->input('miercoles');
        $jueves = $required->input('jueves');
        $viernes = $required->input('viernes');
        $sabado = $required->input('sabado');
        $promedio = ($lunes + $martes + $miercoles + $jueves +  $viernes + $sabado) / 6;
        if ($promedio > 100) {
            echo "El empleado ".$nombre." recibirá un incentivo de ".$promedio." promedio, gracias por su labor!";
        } else {
            echo "El empleado ".$nombre." no recibirá un incentivo de  ".$promedio." promedio, hay que esforzarse para la siguiente semana!";
        }
    }
}
