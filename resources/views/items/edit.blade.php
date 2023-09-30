@extends('layout')
@section('content')
    <style>
        .uper {
            margin: 40px
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Coffee Updated
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

            <form method="post" action="{{route('item.update', $items->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" name="item_name" value="{{ $items->item_name }}"/>
                </div>

                <div class="form-group">
                    <label for="description">Item Description:</label>
                    <input type="text" class="form-control" name="item_description" value="{{ $items->item_desc }}"/>
                </div>

                <div class="form-group">
                    <label for="price">Item Price:</label>
                    <input type="number" class="form-control" name="item_price" value="{{ $items->item_price }}"/>

                </div>

                <div class="form-group">
                    <label for="stock">Item stock:</label>
                    <input type="number" class="form-control" name="item_stock" value="{{ $items->item_stock }}"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
