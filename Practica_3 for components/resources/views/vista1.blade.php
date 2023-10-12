@extends('layouts.plantilla')
@section('titulo','Inicio')
@section('contenido')
    <h1 class="display-1 text-center text-danger">Vista 1</h1>
    @include('partials.card')
    <x-message message="Bienvenidos a Laravel" date="febrero 2022"></x-message>
@endsection