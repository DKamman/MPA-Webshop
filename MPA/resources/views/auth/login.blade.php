@extends('layout.app')

@section('content')
<div class="main mt-4">
    <div class="container">
        <div class="form bg-dark mx-auto p-4">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h4 class="@if (session('status')) error-message @endif">Logging In</h4>
                @if (session('status'))
                    <div class="error-message">{{ session('status') }}</div>
                @endif
                <div class="form-group">
                    <label class="invisible" for="email"></label>
                    <input type="email" name="email" class="form-control @error('email') input-error @enderror" id="email" placeholder="Email address" value="{{ old('email') }}">

                    @error('email')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="invisible" for="password"></label>
                    <input type="password" name="password" class="form-control @error('password') input-error @enderror" id="password" placeholder="Password">

                    @error('password')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-info">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection