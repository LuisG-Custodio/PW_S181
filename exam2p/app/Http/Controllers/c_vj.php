<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_vj extends Controller
{
    public function show_form(){
       return view('videojuegos');
    }

    public function save_game(Request $req){
       
        $validated = $req->validate([
            '_name'=>'required|min:5',
            '_date'=>'required|date',
            '_sold'=>'required|max_digits:7',
        ]);
        $name=$req->input('_name');
        return redirect('/')->with('Confirmation',$name);
    }
}
