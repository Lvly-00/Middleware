<<<<<<< HEAD

@extends('layout')
@section('title', 'Login')

@section('content')

    <div class="container">
        <form action="{{ route('loginPost') }}" method="POST" style="width: 50%; margin: 0 auto; margin-top: 100px;">
            @csrf
            <div class="mb-3">
                <div class="eContainer inputCont">
                <input type="email" class="form-control" name="email" placeholder="Email Address">
                
                <label class="form-label" for="email">Email address</label>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="pContainer inputCont">
                <input type="password" class="form-control" name="password" placeholder="Password">
                
                <label class="form-label" for="password">Password</label>
                </div>
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


=======
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
>>>>>>> 1d753ff69f1a9e556002690f1f78256f8dac0772
@endsection
