@extends('layouts.plantilla')
@section('titulo','Home')
@section('contenido')
    <h1 class="display-1 text-center text-info">Home</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    @component('partials.offcanvas')
    @endcomponent
    <x-message message="Bienvenidos a Laravel" date="febrero 2022"></x-message>

@endsection

