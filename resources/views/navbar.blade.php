<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" >
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
