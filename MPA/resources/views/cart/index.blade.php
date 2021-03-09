@extends('layout.app')

@section('content')
    {{-- @if (Session::has('cart'))
        <div class="main mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            @foreach($products as $product)
                                <li class="list-group-item">
                                    <span class="badge">{{ $product['qty'] }}</span>
                                    <strong>{{ $product['item'] }}</strong>
                                    <span class="label label-success">{{ $product['price'] }}</span>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Reduce by all</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Total: {{$totalPrice}}</strong>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="main mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>No products in shopping cart</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}

    @if (Session::has('cart'))
        <div class="main mt-4">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                    <form action="{{ Route('cart.update') }}" method="get">
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $product['item']['name'] }}</li>                            
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">€{{ $product['price'] }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input type="hidden" name="id" value="{{ $product['item']['id'] }}">
                                    <input type="number" name="amount" value="{{ $product['qty'] }}"><button type="submit">Update</button><a href="{{ Route('cart.delete', $product['item']['id']) }}">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </form>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-4">
                            <strong>Total: {{$totalPrice}}</strong>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="main mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>No products in shopping cart</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection