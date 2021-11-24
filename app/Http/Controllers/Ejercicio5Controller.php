<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    public function index (){
        return view('Ejercicio5');
    }

    public function Resultado5 (request $request){
        $radio= $request->radio;
        $altura= $request->altura;

        $volumen=3.1416 * ($radio^2)* $altura;
        $area=2 * 3.1416 * $radio * ($radio+$altura);
        return view('Resultado5',compact('volumen','area'));
    }
}
