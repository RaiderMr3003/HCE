<header class="text-center">
    <nav class="navbar navbar-expand-lg navbar-dark px-3" style="background-color:rgb(82, 99, 255);">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo de HCE" style="width: 100px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Control de Citas</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link {{ Request::routeIs('historia_clinica') ? 'active' : '' }}"
                            href="{{ route('historia_clinica') }}">Historia Clínica</a>
                    </li>
                </ul>
            </div>

            <div class="dropdown">
                <a class="d-flex align-items-center text-decoration-none text-white dropdown-toggle" href="#"
                    role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/boy.png') }}" alt="Foto de Usuario" width="40" height="40"
                        class="rounded-circle me-2">
                    <span class="fw-bold">Bienvenido, {{ Auth::user()->name ?? 'Usuario' }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('configuracion') }}">
                            <i class="bi bi-gear me-2"></i> Configuración
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('ayuda') }}">
                            <i class="bi bi-patch-question me-2"></i> Ayuda
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="GET">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit">
                                <i class="bi bi-power me-2"></i> Cerrar Sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>