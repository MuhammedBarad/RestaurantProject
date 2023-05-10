@extends('dashboard.index')
@section('title', 'Edit Meal')
@section('content')

    <form action="/Meal/{{ $meal->id }}" method="POST" class="container" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="old_img" value="{{$meal->image}}">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name :</label>
            <select name="category" class="form-select" aria-label="Default select example">
                @foreach ($categories as $cat)
                <option name="category" selected value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                @endforeach
              </select>
            </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Meal Name :</label>
            <input value="{{$meal->name}}"  type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description :</label>
            <input value="{{$meal->description}}"  type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price :</label>
            <input value="{{$meal->price}}"  type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label  for="formFile" class="form-label">Image :</label>
              <input id="image" name="image" class="form-control" type="file" id="formFile">
            </div>
            <img id="showImage" src="{{asset($meal->image)}}" class="img-thumbnail" alt="Image" width="100px" height="100px">
            <br><br>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        </script>
@endsection
