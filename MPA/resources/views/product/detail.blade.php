@extends('layout.app')

@section('content')
<div class="main page-body">
    <div class="container">
        <div class="row bg-dark-transparent px-4 py-4">
            <div class="col-md-8">
                <div class="left-box">
                    <h3>{{$product->name}}</h3>
                    <div class="content">
                        {{$product->description}}
                    </div>
                    <div class="price-box">
                        <strong>€{{ $product->price}}</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$product->image_url}}" alt="">
                </div>
                <div class="mt-4">
                    <form action="{{ route('cart.add') }}" method="get">
                        <div class="form-group">
                            <label style="color:white;" for="amount">Amount</label>
                            <input style="width:100px; margin-bottom:20px" type="number" class="form-control" name="amount" id="amount" min="1" value="1">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </form>
                    {{-- <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to cart</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection