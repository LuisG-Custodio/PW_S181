@extends('layouts.master_template')
@section('title','Principal')
@section('content')

@include('partials.alert')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Book News</h5>
      <div class="container">
        <p class="card-text text-justify">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores neque veniam maxime fugit porro minima dolore illo, 
          doloremque accusamus fuga nesciunt sit rerum reprehenderit dolorum mollitia fugiat alias. Quos, accusamus.
        </p>
      </div>
    </div>
  </div>
</div>

@endsection