@extends('dashboard.index')
@section('title','Edit Category')
@section('content')



<form action="/Category/{{$cat->id}}" method="POSt" class="container">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category Name :</label>
      <input value="{{$cat->cat_name}}" type="text" name="cat_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection
