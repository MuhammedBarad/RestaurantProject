@extends('dashboard.index')
@section('title', 'Meals')
@section('content')

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
                <th class="table-active" scope="col">Meal Name</th>
                <th class="table-active" scope="col">Description</th>
                <th class="table-active" scope="col">Price</th>
                <th class="table-active" scope="col">image</th>
                <th class="table-active" scope="col">Edit</th>
                <th class="table-active" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">

            @foreach ($meals as $key => $meal)
                <tr>
                    <th scope="row">{{ $key = $key + 1 }}</th>
                    <td colspan="">{{ $meal->category }}</td>
                    <td colspan="">{{ $meal->name }}</td>
                    <td colspan="">{{ $meal->description }}</td>
                    <td colspan="">{{ $meal->price }}$</td>
                    <td colspan=""><img src="{{ asset($meal->image) }}" alt="img"></td>
                    <td><a href="/Meal/{{ $meal->id }}/edit" type="button" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="/Meal/{{ $meal->id }}" method="POST">
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
        {{ $meals->links() }}
    </div>



@endsection
