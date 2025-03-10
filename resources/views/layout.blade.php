<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Middleware')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('js/script.js')}}" defer></script>
</head>

<body>
    <style>
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
        }

        .inputCont{
            position:relative;
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
            color: blue;
            top: -5px;
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

</html>
