<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/style.css')}}">
    <script src="{{asset('JS/script.js')}}" defer></script>
    <title>Dashboard</title>
</head>
<body>
<div class="container">
        <h1>Dashboard</h1>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" >
                    @csrf
                    <button class="btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 1</div>
                    <div class="card-body">
                        Content for section 1.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 2</div>
                    <div class="card-body">
                        Content for section 2.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Section 3</div>
                    <div class="card-body">
                        Content for section 3.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>