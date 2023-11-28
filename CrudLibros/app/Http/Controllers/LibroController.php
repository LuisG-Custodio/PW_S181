<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks= libro::all();
        return view('libros.index',compact('allbooks'));
    }

    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo=$request->txttitulo;
        $addLibro->autor=$request->txtautor;
        $addLibro->paginas=$request->txtpaginas;
        $addLibro->anio=$request->txtanio;
        $addLibro->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upLibro= libro::find($id);
        $upLibro->titulo=$request->txttitulo;
        $upLibro->autor=$request->txtautor;
        $upLibro->paginas=$request->txtpaginas;
        $upLibro->anio=$request->txtanio;
        $upLibro->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delLibro= libro::find($id);
        $delLibro->delete();
        return redirect()->back();
    }
}
