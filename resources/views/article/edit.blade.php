@extends('layouts.app')

@section('content')
<div class="container">
<button><a href='/articles' class="btn btn-primary"><h1>back</h1></a></button>
<h1>edit article</h1>
    <form action='/articles/{{$article->id}}' method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">article Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$article->title}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">article Unit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="body" value="{{$article->body}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price / Unit</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="image" value="{{$article->image}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</container>
@endsection