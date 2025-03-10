<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/style.css')}}">
    <script src="{{asset('JS/script.js')}}" defer></script>
    <title>Login Page</title>
</head>
<body>
<div class="container">
        <form action="{{ route('loginPost') }}" method="POST" style="width: 50%; margin: 0 auto; margin-top: 100px;">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password: </label>
                <input type="password" class="form-control" name="password" placeholder="Password">
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
</body>
</html>