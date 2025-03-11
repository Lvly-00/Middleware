@extends('layout')
@section('title', 'Register')
@section('content')
    <div class="container">
        <form action="{{ route('registerPost') }}" method="POST" style="width: 50%; margin: 0 auto; margin-top: 100px;">
            @csrf
            <div class="mb-3">
                <div class="uContainer inputCont">
                <input type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                <label class="form-label">Username</label>
                </div>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <div class="eContainer inputCont">
                <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                <label class="form-label">Email address</label>
            </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <div class="pContainer inputCont">
                <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                <label class="form-label">Password</label>
            </div>    
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
