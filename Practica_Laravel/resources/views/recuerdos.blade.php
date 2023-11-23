@extends('layouts.plantilla')
@section('titulo','Recuerdos')
@section('contenido')
    <h1 class="display-1 text-center text-primary">Memories</h1>
    @if(session()->has('Confirmacion'))
        <script>
          Swal.fire({
          text: "{{session('Confirmacion')}}",
          icon: "success"
          });
        </script>           

        @endif
    <div class="container">

        @foreach($consR as $data)
        <div class="card mb-2">
            <h5 class="card-header">{{$data->fecha}}</h5>
            <div class="card-body">
              <div class="border p-1 mb-3">
                <h5 class="card-title fw-bold">{{$data->titulo}}</h5>
                <p class="card-text">{{$data->recuerdo}}</p>
              </div>
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editar{{$data->id}}">
                Editar
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$data->id}}">
                Eliminar
              </button>
            </div>
        </div>
        @include('partials.modal')
        @endforeach

        @include('partials.pagination')
    </div>
    
@endsection