<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function index(){
        return view ('Ejercicio2');
    }
    public function resultado2 (request $request) {
    $numero1 = $request->numero1;
    $numero2 = $request->numero2;
    $numero3 = $request->numero3;

    $respuesta = $numero1 + $numero2; 
        if ($respuesta==$numero3) {
            echo "Son iguales";
        } else if (($numero1 + $numero3)==$numero2){
            echo "Son iguales";
        } else if (($numero2 + $numero3)==$numero1){
            echo "Son iguales";
    } else {
        echo "Son distintos";
    }
    return view ('Resultado2', compact('respuesta'));
}
}