@extends('layout.app')

@section('content')
    <div class="container bg-white p-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center pb-2">Categories</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $row)
            <div class="col-md-6">
                <div class="card mb-2">
                    <img src="{{ $row->image_url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->name }}</h5>
                        <p class="card-text">View all games in the category: {{ $row->name }}.</p>
                        <a href="#" class="btn btn-primary">Go</a>
                    </div> 
                </div>
            </div>      
            @endforeach
        </div>
    </div>
    
@endsection