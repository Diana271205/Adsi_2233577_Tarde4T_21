<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    public function index (){
        return view('Ejercicio6');


    }

    public function Resultado6 (Request $request){
        $nombre= $request->nombre;
        $nota_primer_parcial= $request->nota_primer_parcial;
        $nota_examen_final= $request->nota_examen_final;

        $calificacion_final= $nota_primer_parcial * 0.4 + $nota_examen_final *0.6 ;
        if($calificacion_final>=3.5){
           echo "Estudiante aprobado";
        }else{
            echo "Estudiante reprobado";
        }
        return view('Resultado6',compact('nombre','calificacion_final', ));
}
}