@extends('dashboard.index')
@section('title', 'Meal Create')
@section('content')



    <form action="/Meal" method="POST" class="container" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name :</label>
            <select name="category" class="form-select" aria-label="Default select example">
                @foreach ($categories as $cat)
                    <option selected value="{{ $cat->cat_name }}">{{ $cat->cat_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Meal Name :</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description :</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price :</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image :</label>
            <input name="image" id="image" class="form-control" type="file" id="formFile">
        </div>
        <img id="showImage" src="{{ asset('img/empty.jpg') }}" class="img-thumbnail" alt="Image" width="100px"
            height="100px">
        <br><br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
