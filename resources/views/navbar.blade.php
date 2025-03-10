@vite(['resources\css\navbar.css'])

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <form action="{{ route('logout') }}" method="POST" class="ml-auto">
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
