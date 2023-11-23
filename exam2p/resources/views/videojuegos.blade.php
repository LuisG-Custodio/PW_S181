@extends('layouts.template')
@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{$error}} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

        

    @endforeach
@endif
<form method="POST" action="/save_game">
    @csrf
    <div class="mb-3">
      <label for="Name" class="form-label">Name</label>
      <input type="text" class="form-control" id="Name" name="_name" value="{{old('_name')}}">
    </div>
    <div class="mb-3">
      <label for="Date" class="form-label">Publication Date</label>
      <input type="text" class="form-control" id="Date" name="_date" value="{{old('_date')}}">
    </div>
    <div class="mb-3">
      <label for="Sold" class="form-label">Games Sold</label>
      <input type="text" class="form-control" id="Sold" name="_sold" value="{{old('_sold')}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection