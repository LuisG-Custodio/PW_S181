<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB;
use Carbon\Carbon;

class controllerCrudD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio()
    {
        return view('welcome')    ;
    }

    public function index()
    {
        $consR=DB::table('tb_recuerdos')->get();
        return view('recuerdos',compact('consR'))    ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/recuerdo/create')->with('Confirmacion','Tu recuerdo se guardó en la base de datos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorDiario $request, string $id)
    {
        DB::table('tb_recuerdos')->where('id',$id)->update([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/recuerdo')->with('Confirmacion','Tu recuerdo se modificó en la base de datos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_recuerdos')->where('id',$id)->delete();
        return redirect('/recuerdo')->with('Confirmacion','Tu recuerdo se eliminó la base de datos');
    }
}
