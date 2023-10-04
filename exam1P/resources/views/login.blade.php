@extends('layouts.plantilla')
@section('titulo','Login')
@section('link1','Login')
@section('contenido')
<br>
<br>
<br>
<div class="container text-center">
    <div class="row">
        <div class="col col-lg-3">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <div>
                        <label>Usuario</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Contraseña</label>
                        <input type="password"> 
                    </div>
                    <div>
                        <a href="/busqueda"><button type="button" class="btn btn-info">Login</button></a>
                        <button type="button" class="btn btn-warning">Exit</button>
                    </div>
                </div>
              </div>
        </div>
        <div class="col">
        </div>
    </div>
  </div>
@endsection