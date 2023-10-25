<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorDiario;

use Illuminate\Http\Request;

class diarioController extends Controller
{

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function guardarRecuerdo(validadorDiario $req){

        return redirect('/form')->with('Confirmacion','Tu recuerdo llego al controlador');
    
    }

    /* public function guardarRecuerdo(Request $req){
       
        $validated = $req->validate([
            'txtTitulo' => 'required|between:1,5',
            'txtRecuerdo' => 'required|min:5',
        ]);
       
       
        //return $req->all();

        echo "<p>";

        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo " - ";
        echo $req->url(); 
        
        echo "</p>";
    } */
}
