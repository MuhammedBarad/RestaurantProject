@extends('dashboard.index')
@section('title', 'Create User')
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
    <form class="row g-3 container" action="{{ route('profile.update',$user->id) }}" method="POST" style="margin-left:10%"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="old_img" value="{{ $user->image }}">
        <div class="mb-3">
            <div id="img_form">
                <img id="showImage" src="{{ asset('img/man.png') }}" class="rounded-circle" alt="avatar1">
            </div>
            <br>
            <label for="formFile" class="form-label">Image :</label>
            <input name="image" id="image" class="form-control" type="file" id="formFile">
        </div>

        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input name="name" type="text" value="{{ Auth()->user()->name }}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" value="{{ Auth()->user()->email }}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Password</label>
            <input name="password" type="password" value="{{ Auth()->user()->password }}" class="form-control">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Phone</label>
            <input name="phone" value="{{ Auth()->user()->phone}}" type="text" class="form-control" id="inputAddress" placeholder="53xxxxxxxxx">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address 1</label>
            <input value="{{ $user->address_one}}" name="address_one" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input value="{{ $user->address_two}}" name="address_two" type="text" class="form-control" id="inputAddress2"
                placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input value="{{ $user->city}}" name="city" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <input value="{{ $user->state}}" name="state" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input value="{{ $user->zip}}" name="zip"  type="text" class="form-control" id="inputZip">
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
            <button type="submit" class="btn btn-primary">Update</button>
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
