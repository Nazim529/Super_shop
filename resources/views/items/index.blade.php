@extends('layout')
@section('content')
    <div class="uper">
        @if (session()->get('success'))
           <div class="alert alert-success">
            {{session()->get('success')}}
           </div>
        @endif
    </div>
    <table class ="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Item Name</td>
            <td>Item Description</td>
            <td>Item Price</td>
            <td>Item Stock</td>
            <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->item_desc}}</td>
                    <td>{{$item->item_price}}</td>
                    <td>{{ $item->item_stock}}</td>
                    <td><a href="{{ route('product.edit', '$item->id')}}" class="btn btn-outline-primary">Edit</a></td>
                    <td>
                        <form action="">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
