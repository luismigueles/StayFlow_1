<nav class="navbar navbar-expand-lg bg-body-tertiary rounded fixed-top" aria-label="Eleventh navbar example">
    <div class="container-fluid gap-5">
        <a href="{{ url('/') }}" class="d-flex align-items-center mr-3 link-body-emphasis text-decoration-none">
          <svg class="bi pe-none me-2" width="30" height="24">
              <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-5 fw-semibold">Stay Flow</span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09"
            aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample09" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#caracteristicas">Características</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#precios">Planes y Precios</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                    </li>
         
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Páginas de prueba</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cheatsheet') }}">Cheatsheet</a></li>
                        <li><a class="dropdown-item" href="{{ url('/old') }}">primer prototipo</a></li>
                    </ul>
                </li>
                @endauth
            </ul>

            @auth
                <div class="btn-group dropstart">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="bi pe-none me-2" width="32" height="32"><use xlink:href="#people-circle"></use></svg>
                        <strong>{{Auth::user()->name}}</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" style="">       
                        <li><a class="dropdown-item" href="#">Configuración de cuenta</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ Route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item">Salir</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
 
            @guest
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                </div>
            @endguest           
        </div>
    </div>
</nav>
