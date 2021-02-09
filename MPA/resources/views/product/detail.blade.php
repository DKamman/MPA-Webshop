@extends('layout.app')

@section('content')
<div class="main page-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>{{$product[0]->name}}</h3>
                <div class="content">
                    {{$product[0]->description}}
                </div>
                <div class="price-box">
                    {{ $product[0]->price}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$product[0]->image_url}}" alt="">
                </div>
                <div>
                    <a href="{{ route('cart.add', $product[0]->id) }}" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection