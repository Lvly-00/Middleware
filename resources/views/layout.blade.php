<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Middleware')</title>
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('js/script.js')}}" defer></script>
</head>

<body>
    <style>
        html{
            height: 100%;
        }
        body{
            background: repeating-linear-gradient(60deg, white , black 20%, Grey 2px);
            background-size: cover;
            position: center;
        }
        .container{
            box-sizing: border-box;
            margin: auto;
            }
        form{
            display:flex;
            flex-direction:column;
            border-style: solid;
            justify-content: space-around;
            align-self: center;
            padding: 3%;
            border-radius: 30px;
            color: pink;
            background-image: linear-gradient(90deg, rgba(81,81,121,1) 14%, rgba(2,0,36,1) 64%, rgba(21,94,108,1) 100%);
        }
        .container-fluid{
            padding-top: 0px;
            background-image: linear-gradient(315deg, rgba(190,57,223,1) 9%, rgba(45,103,117,0.9976365546218487) 48%, rgba(58,25,157,0.9976365546218487) 81%);
        }
        .container-fluid form{
            margin: 10px;
            padding: 1px;
        }
        .container-fluid form button{
            border-radius: 30px;
        }
        .navbar-brand{
            color: White;
            font-weight: bolder;
            font-family: 'Ink Free';

        }
        .col-md-4{
            margin-bottom: 10px;
        }
        .inputCont{
            position:relative;
        }
        .dashboard{
            background: linear-gradient(pink, blueviolet);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"
        }
        input{
            border-radius: 45px;
            margin: 2px;
            padding: 13px;
            padding-top: 16px;
        }
        .inputCont input:focus + label,
        .inputCont input:not(:placeholder-shown) + label{
            opacity:1;
        }
        input:focus::placeholder{
            color: transparent;
        }
        label{
            opacity:0;
            color: pink;
            top: -7px;
            left: 3px;
            pointer-events: none;
            position:absolute;
            font-size: 16px;
            transition: all 0.2s ease-in-out;
            transform: translateY(-50%);
        }
        form button{
            border-radius: 30px;
            padding: 3%;
        }
    </style>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

=======
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

>>>>>>> 1d753ff69f1a9e556002690f1f78256f8dac0772
</html>
