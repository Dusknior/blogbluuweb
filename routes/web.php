<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\DividirController;
use App\Http\Controllers\TrianguloController;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    echo("<h1> Hello World! <h1> <br>");
    return view('hola');
});

Route::get('consultarnombre/{nombre}', function ($nombre) {
    return 'El nombre del colaborardor es '.$nombre.'.';
});


Route::get('agenda/{mes}/{ano}', function ($mes, $ano) {
    return 'Viendo la agende de '.$mes.' de '.$ano;
});

Route::get('tienda/productos/{id}', function ($id_producto) {
    return 'Mostrando el producto '.$id_producto.' de la tienda.';
})->where(['id' => '[0-9]+']);

Route::get('productosvalidar/{id}/{nombre}', function ($id, $nombre) {
    return 'El producto si se encuentra identificado con el id: '.$id.' y el nombre del producto es '.$nombre;
})->where(array('nombre' => '[a-zA-Z]+'));

Route::get('/otro', function () {
    return view('otro/index');
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/calendario/{dia}/{mes}/{ano}/{evento}/{nombre}/{apellido}', function ($dia, $mes, $ano, $evento,$nombre, $apellido) {
    return view('calendario.evento',[
        'dia' => $dia,
        'mes' => $mes,
        'ano' => $ano,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'evento' => $evento
    ]);
});

Route::get('/resta', function () {
    return view('resta');
});

Route::get('/suma', function () {
    return view('suma');
});

Route::get('/dividir', function () {
    return view('dividir');
});

Route::get('/triangulo', function () {
    return view('triangulo');
});

Route::get('/empleado', function () {
    return view('empleado');
});

Route::post('usercontroller', [UserController::class,'index']);

Route::post('restacontroller/', [RestaController::class,'resta']);

Route::post('sumacontroller/', [SumaController::class,'suma']);

Route::post('dividircontroller/', [DividirController::class,'dividir']);

Route::post('triangulocontroller/', [TrianguloController::class,'triangulo']);

Route::post('empleadocontroller/', [EmpleadoController::class,'empleado']);
