<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function operaciones(Request $Request) {

        $numero1 =$Request->numero1;
        $numero2 =$Request->numero2;
        $resultado = $numero1 + $numero2;
        return view ('operaciones',compact('resultado'));
    }

    public function index(){
        return view('operaciones');
    }
}
