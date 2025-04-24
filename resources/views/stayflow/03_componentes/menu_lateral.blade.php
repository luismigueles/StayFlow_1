<section class="d-flex flex-nowrap full-h">
<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px; height: 100vh;">
    <a href="{{ url('/') }}" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-5 fw-semibold">Stay Flow</span>
    </a>
    <ul class="list-unstyled ps-0 flex-column mb-auto">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>  Página principal
            </button>
            <div class="collapse show" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Inicio</a></li>
                    <li><a href="{{ url('/') }}#features" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Características</a></li>
                    <li><a href="{{ url('/') }}#pricing" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Precio</a></li>
                    <li><a href="{{ url('/') }}#faq" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Preguntas Frecuentes</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> Gestión
            </button>
            <div class="collapse show" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Calendario</a></li> 
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reservas</a></li>  
                    <li><a href="{{ url('/huespedes') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Huéspedes</a></li>
                    <li><a href="{{ url('/empleados') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Empleados</a></li>   
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tareas</a></li>
                </ul>
            </div>
        </li>

        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#journal-text"></use></svg> Diccionarios
            </button>
            <div class="collapse show" id="dashboard-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tipo de empleado</a></li> 
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tipo de Habitación</a></li>  
                    <li><a href="{{ url('/') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tipo de Tarea</a></li>
                </ul>
            </div>
        </li>
        
        <li class="border-top my-3"></li>

    </ul>
<hr>
    <div class="dropup-center dropup">
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
</div>
</section>