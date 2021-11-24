<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function Lista_clientes(){
        return view('clientes');
    }
}
