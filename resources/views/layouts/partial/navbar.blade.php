<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ekstrakurikuler">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kelas/all">Kelas</a>
                </li>
               

            </ul>
            <ul class="navbar-nav ms-auto">
            @auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Hai, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/"><i class="bi bi-layout-text-sidebar"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
</li>
</ul>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
</li>
@endauth


        </div>
    </div>
</nav>
