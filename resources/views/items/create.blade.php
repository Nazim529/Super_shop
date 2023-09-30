@extends('layout')
@section('content')
    <style>
        .uper {
            margin: 40px
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add product
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('product.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">product Name</label>
                    <input type="text" class="form-control" name="item_name"/>
                </div>

                <div class="form-group">
                    <label for="description">Product Description</label>
                    <input type="text" class="form-control" name="item_description"/>
                </div>

                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" class="form-control" name="item_price">
                </div>

                <div class="form-group">
                    <label for="price">Product Stock</label>
                    <input type="number" class="form-control" name="item_stock">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
        </div>
    </div>
@endsection
