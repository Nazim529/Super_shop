@extends('layout')
@@section('content')
    <style>
      .uper{
            margin: 40px
      }
    </style>
      <div class="card uper">
            <div class="card-header">
                Add produt
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route(Product.store) }}">
                    @csrf
                    <div class="from-group">
                            <label for="name">Item Name</label>
                            <input type="text" class="form-control" name="item_name">
                    </div>
                    @csrf
                    <div class="from-group">
                        <label for="desc">Item Description</label>
                        <input type="text" class="form-control" name="item_desc">
                    </div>
                    @csrf
                    <div class="from-group">
                        <label for="price">Item Description</label>
                        <input type="number" class="form-control" name="item_price">
                    </div>
                </form>
            </div>
      </div>
@endsection