@extends('layout.app')

@section('content')
    <div class="container">
        <div class="form bg-dark mx-auto p-4">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h4>Registering</h4>

                <div class="form-group">
                    <label class="invisible" for="name"></label>
                    <input type="text" name="name" class="form-control @error('name') input-error @enderror" id="name" placeholder="Name" value="{{ old('name') }}">

                    @error('name')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="invisible" for="username"></label>
                    <input type="text" name="username" class="form-control @error('username') input-error @enderror" id="username" placeholder="Userame" value="{{ old('username') }}">

                    @error('username')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

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

                <div class="form-group">
                    <label class="invisible" for="password"></label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') input-error @enderror" id="password_confirmation" placeholder="Repeat your password">

                    @error('password')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-info">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection