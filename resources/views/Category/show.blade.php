@extends('dashboard.index')
@section('title', 'Categories')
@section('content')


    {{-- @if (\Session::has('success'))
    <div class="alert alert-success container">
        <ul>
            <li style="list-style: none">{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif --}}

    <style>
        #paginate {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center
        }
    </style>
    <table class="table table-bordered container">
        <thead style="text-align: center">
            <tr>
                <th class="table-active" scope="col">ID</th>
                <th class="table-active" scope="col">Category Name</th>
                <th class="table-active" scope="col">Edit</th>
                <th class="table-active" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody style="text-align: center">

            @foreach ($categories as $key => $cat)
                <tr>
                    <th scope="row">{{ $key = $key + 1 }}</th>
                    <td colspan="">{{ $cat->cat_name }}</td>
                    <td><a href="/Category/{{ $cat->id }}/edit" type="button" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="/Category/{{ $cat->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    <div id="paginate">
        {{ $categories->links() }}
    </div>


@endsection
