@extends('dashboard.index')
@section('title', 'Edit User')
@section('content')


    <form action="{{ route('User.update', $users->id) }}" method="POSt" class="container">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Type :</label>
            <select name="is_admin" class="form-select" aria-label="Default select example">
                    <option selected value="1">Admin</option>
                    <option selected value="0">User</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name :</label>
            <input value="{{ Auth()->user()->name }}" type="text" name="name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email :</label>
            <input value="{{ Auth()->user()->email }}" disabled type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>








@endsection
