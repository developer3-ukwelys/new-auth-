@extends('layouts.app')

@section('content')
<div class="container">
<button><a href='/articles' class="btn btn-primary"><h1>back</h1></a></button>

<h1>CREATE AN ARTICLE</h1>
@if ($errors->any())
     @foreach ($errors->all() as $error)
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{$error}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     @endforeach
 @endif
    <form action='/articles' method="POST">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">body</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="body">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('status') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>

@endsection