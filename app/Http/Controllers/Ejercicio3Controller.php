<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function index (){
        return view('Ejercicio3');
    }

    public function Resultado3 (request $request){
        $Nombre= $request->Nombre;
        $Salario= $request->Salario;

        $Bono= $Salario * 0.7 + $Salario;
        return view('Resultado3',compact('Nombre','Bono'));
    }
}
