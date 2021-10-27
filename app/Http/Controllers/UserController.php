<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function index(Request $request){
        $address = $request->input('address');
        echo "Hola Controlador, La direccion del Estudiante es: ".$address;
    }
}