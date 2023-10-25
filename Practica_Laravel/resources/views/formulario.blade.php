@extends('layouts.plantilla')
@section('titulo','Form')
@section('contenido')
    <h1 class="display-1 text-center text-danger">Form</h1>
    <br>
    <div class="container mt-5 col-md-6">

        @if(session()->has('Confirmacion'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
                {{session('Confirmacion')}}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>            

        @endif

        @if($errors->any())
        @foreach($errors->all() as $error)

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                {{$error}}
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    

        @endforeach
        @endif

        <div class="card border border-dark-subtle">

            

            <div class="card-header fs-2 text-info text-center">
            Introduce aqui tus memorias
            </div>

            <div class="card-body">
                <form method="POST" action="/guardarrecuerdo">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                        @if($errors->first('txtTitulo'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('txtTitulo')}}
                          </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label> 
                        <textarea class="form-control" style="height: 100px" name="txtRecuerdo" >{{old('txtRecuerdo')}}</textarea>
                        @if($errors->first('txtRecuerdo'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('txtRecuerdo')}}
                          </div>
                        @endif
                    </div>
            </div>

            <div class="card-footer text-body-secondary ">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-success">Guardar recuerdo</button>
                    </div>
                </form>
            </div>

        </div><!--cierre de card-->
    <div><!--cierre de container-->
@endsection