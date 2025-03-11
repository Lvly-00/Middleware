@extends('layout')
@section('title', 'Register')
@section('content')
<<<<<<< HEAD
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


=======
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



>>>>>>> 1d753ff69f1a9e556002690f1f78256f8dac0772
@endsection
