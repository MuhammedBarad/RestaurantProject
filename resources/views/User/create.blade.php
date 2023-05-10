@extends('dashboard.index')
@section('title', 'User Profile')
@section('content')

    <style>
        #showImage {
            width: 290px;
            height: 260px;
            align-items: center;
            align-self: center;

        }

        #img_form {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <form class="row g-3 container" action="{{ route('User.store') }}" method="POST" style="margin-left:10%"
        enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <div id="img_form">
                <img id="showImage" src="{{ asset('img/man.png') }}" class="rounded-circle" alt="avatar1">
            </div>
            <br>
            <label for="formFile" class="form-label">Image :</label>
            <input name="image" id="image" class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Type :</label>
            <select name="is_admin" class="form-select" aria-label="Default select example">
                    <option selected value="1">Admin</option>
                    <option selected value="0" selected>User</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Password</label>
            <input  type="password" class="form-control" name="password" autocomplete="new-password" id="inputEmail4">
        </div>


        <div class="col-12">
            <label for="inputAddress" class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" id="inputAddress" placeholder="53xxxxxxxxx">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address 1</label>
            <input name="address_one" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input name="address_two" type="text" class="form-control" id="inputAddress2"
                placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input name="city" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <input name="state" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input name="zip"  type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
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
