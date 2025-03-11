<<<<<<< HEAD
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" >
=======
@vite(['resources\css\navbar.css'])

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <form action="{{ route('logout') }}" method="POST" class="ml-auto">
>>>>>>> 1d753ff69f1a9e556002690f1f78256f8dac0772
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
