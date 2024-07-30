<nav class="navbar navbar-expand-lg navCustom fixed-top justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fa-solid fa-route fa-2x" style="color: #187af1;"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item">
                    <a class="nav-link active navColor" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active navColor" aria-current="page"
                        href="{{ route('travel.create') }}">Inserisci un annuncio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active navColor" aria-current="page" href="#">Lista annunci</a>
                </li>
            </ul>
        </div>

        <div class="navbar-nav ">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item">
                    @guest
                        <a class="nav-link active navColor" aria-current="page"
                            href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active navColor" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <li class="nav-item">
                                <a class="nav-link active navColor" aria-current="page" href="#"><i
                                        class="fa-solid fa-user">
                                        {{ Auth::user()->name }}</i>
                                </a>
                            </li>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link active navColor" aria-current="page" href="#">Profilo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active navColor" aria-current="page" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="form-logout">
                                    @csrf 
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </ul>
        </div>




        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}

    </div>
</nav>
