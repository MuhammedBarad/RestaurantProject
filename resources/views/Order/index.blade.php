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
                <th class="table-active" scope="col">Phone</th>
                <th class="table-active" scope="col">Data</th>
                <th class="table-active" scope="col">Time</th>
                <th class="table-active" scope="col">Qty</th>
                <th class="table-active" scope="col">Price</th>
                <th class="table-active" scope="col">Total</th>
                <th class="table-active" scope="col">Address</th>
                <th class="table-active" scope="col">Status</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">

            @foreach ($orders as $key=>$order)
                <tr>
                    <th scope="row">{{ $key = $key+1 }}</th>
                    <td colspan="">{{ $order->phone }} </td>
                    <td colspan="">{{ $order->data }}</td>
                    <td colspan="">{{ $order->time }}</td>
                    <td colspan="">{{ $order->qty }}</td>
                    {{-- <td colspan="">{{ $order->meal->price }}</td> --}}
                    <td colspan="">{{ $order->address }}</td>
                    <td colspan="">{{ $order->status }}</td>
                    {{-- <td><a href="{{route('order.edit',$order->id)}}" type="button" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('order.delete',$order->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginate">
        {{ $orders->links() }}
    </div>

@endsection
