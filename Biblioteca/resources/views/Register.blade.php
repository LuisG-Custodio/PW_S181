@extends('layouts.master_template')
@section('title','Register')
@section('content')
@include('partials.alert')
<div class="container">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Register new book</h5>
          <p class="card-text">
            @include('partials.form')
          </p>
        </div>
    </div>
    
</div>

    
@endsection