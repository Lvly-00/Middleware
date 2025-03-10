@extends('layout')
@section('title', 'Register')
@section('content')
    @vite(['resources\css\login.css'])


    <div class="register-container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Register</h2>
                <form action="{{ route('registerPost') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" required>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" required>
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-left">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>



@endsection
