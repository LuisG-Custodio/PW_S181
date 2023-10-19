@extends('layouts.plantilla')
@section('titulo','Form')
@section('contenido')
    <h1 class="display-1 text-center text-danger">Form</h1>
    <br>
    <div class="container mt-5 col-md-6">
        <div class="card border border-dark-subtle">

            <div class="card-header fs-2 text-info text-center">
            Introduce aqui tus memorias
            </div>

            <div class="card-body">
                <form method="POST" action="/guardarrecuerdo">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="txtTitulo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label> 
                        <textarea class="form-control" style="height: 100px" name="txtRecuerdo"></textarea>
                    </div>
            </div>

            <div class="card-footer text-body-secondary ">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-success">Guardar recuerdo</button>
                    </div>
                </form>
            </div>

        </div><!--cierre de car-->
    <div><!--cierre de container-->
@endsection