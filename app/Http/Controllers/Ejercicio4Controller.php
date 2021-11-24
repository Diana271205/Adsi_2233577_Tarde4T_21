<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function index(){
        return view('Ejercicio4');
    }
    public function Resultado4(Request $request) {
        $numero= $request->numero;


        $suma= $numero * ($numero + 1) /2;
        return view('Resultado4',compact('numero','suma'));
    }
}
