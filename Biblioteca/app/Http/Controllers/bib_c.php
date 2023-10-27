<?php

namespace App\Http\Controllers;

use App\Http\Requests\Savebook;

use Illuminate\Http\Request;

class bib_c extends Controller
{
    public function loadoutPrincipal(){
        $date=date("d-m-Y");
        return view('Principal',['date'=>$date]);
    }

    public function loadoutRegister(){
        $date=date("d/m/Y");
        return view('Register',['date'=>$date]);
    }

    public function saveRegister(Savebook $req){
        return redirect('/')->with('Confirmation',$req->input('_Title'));
    }
}
