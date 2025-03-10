@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <form action="{{ route('loginPost') }}" method="POST" style="width: 50%; margin: 0 auto; margin-top: 100px;">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
