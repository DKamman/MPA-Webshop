@extends('layout.app')

@section('content')
<div class="main mt-4">
    <div class="container">
        <h3>Welcome. Go to <a href="{{ route('categories') }}">Categories</a> to begin shopping!</h3>
    </div>
</div>
@endsection