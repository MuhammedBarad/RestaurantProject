@extends('dashboard.index')
@section('title', 'Users')
@section('content')

<style>
    #paginate{
        display:flex;
        width: 100%;
        align-items: center;
        justify-content: center
    }
</style>
    <table class="table table-bordered container">
        <thead style="text-align: center">
            <tr>
                <th class="table-active" scope="col">ID</th>
                <th class="table-active" scope="col">User Type</th>
                <th class="table-active" scope="col">Name</th>
                <th class="table-active" scope="col">Email</th>
                <th class="table-active" scope="col">Edit</th>
                <th class="table-active" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">

            @foreach ($users as $key=>$user)
                <tr>
                    <th scope="row">{{ $key = $key+1 }}</th>
                    <td colspan="">{{ $user->is_admin }} </td>
                    <td colspan="">{{ $user->name }}</td>
                    <td colspan="">{{ $user->email }}</td>
                    <td><a href="{{route('User.edit',$user->id)}}" type="button" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('User.delete',$user->id)}}" method="POST">
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
        {{ $users->links() }}
    </div>






@endsection
