@extends('layouts.plantilla')
@section('titulo','Home')
@section('contenido')
    <h1 class="display-1 text-center text-info">Home</h1>
    <div class="container text-center" >
        <div class="card">
            <div class="container text-center">
                <img src="{{asset('images/nyan.gif')}}" class="card-img-top" style="width:50%">
            </div>
            <div class="card-body">
                <h3 class="text-center text-primary">Bienvenido a esta página, entra a formulario para generar un nuevo recuerdo, y a recuerdos para ver los que ya existen</h3>
            </div>
          </div>
    </div>
@endsection

