@extends('layouts.plantilla')
@section('titulo','Busqueda')
@section('link1','Login')
@section('link2','Busqueda')
@section('contenido')
<br>
<br>
<br>
<div class="container text-center">
    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
              </div>
        </div>
        <div class="col">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col col-lg-2">
        </div>
        <div class="col-8">
            @include('partials.resultado')
        </div>
        <div class="col">
        </div>
    </div>
  </div>
@endsection