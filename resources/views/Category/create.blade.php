@extends('dashboard.index')
@section('title','Create Category')
@section('content')



<form action="/Category" method="POST" class="container">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category Name :</label>
      <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>




@endsection
