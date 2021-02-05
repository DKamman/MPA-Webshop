@extends('layout.app')

@section('content')
<div class="main page-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pb-2">Products</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $row)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card mx-auto">
                    <div class="top">
                        <video src="" type="video/mp4" autoplay></video>
                        
                    </div>
                    <div class="bottom">
                        <div class="context">
                            <h3 class="header">{{ $row->name }}</h3>
                            <p><span class="greyed">DEVELOPER: </span>Bungie</p>
                            <p><span class="greyed">PUBLISHER: </span>Bungie</p>
                            <p><span class="greyed">ALL REVIEWS: </span><span class="review">Very Positive </span><span class="greyed">(93,299)</span></p>
                        </div>
                        <a href="{{ Route('cart.add', $row->id) }}" class="add-to-cart">Add to cart {{$row->id}}</a>                              
                    </div>
                    <div class="pricebox">
                        <div class="price">€{{ $row->price }}</div>
                    </div>
                    <img class="background" src="{{ $row->image_url }}" alt="">
                </div>
            </div>    
            @endforeach
        </div>
    </div>
</div>
@endsection