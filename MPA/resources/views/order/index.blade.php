@extends('layout.app')

@section('content')
<div class="main mt-4">
    <div class="container">
        <div class="col-lg-6 col-md-12"></div>
        @foreach ($orders as $order)
            <div class="mb-4">
                <h3>Order {{$orderNum ++}}</h3>
                @foreach ($order->orderProducts as $orderProduct)
                <div class="card p-3">                
                <h5 class="mb-4">{{ $orderProduct->product->name }}</h5>

                <label for="">Quantity</label>
                <p class="mb-4">{{ $orderProduct->quantity }}</p>

                <label for="">Price</label>
                <p>€{{ $orderProduct->price}}</p>
                </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection