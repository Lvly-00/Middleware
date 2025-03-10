@extends('layout')
@section('title', 'Login')
@section('content')

    @vite(['resources\css\login.css'])

    <div class="login-container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <form action="{{ route('loginPost') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-left">
                        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
