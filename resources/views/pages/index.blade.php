@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Welcome to my first laravel application.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
          <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection