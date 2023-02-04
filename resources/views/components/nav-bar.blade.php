<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Site Logo Here -->
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo_small.png')}}" class="d-inline-block align-top" alt="" style="max-width:3rem;">
        </a>
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobileToggle" aria-controls="navbarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMobileToggle">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('mainIndex')}}">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mesaIndex')}}">Mesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('platilloIndex')}}">Platillos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ingredienteIndex')}}">Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proveedorIndex')}}">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ordenIndex')}}">Ordenes</a>
                </li>
            </ul>

            <!-- Right Side
            <div class="btn-group float-end">
                <a href="#" class="dropdown-toggle text-decoration-none text-light" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle"></i>
                <span>Nombre Usuario</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="#" class="dropdown-item"><i class="bi bi-lock-fill"></i>Cambiar contraseña</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-fill"></i>Algo</a></li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-gear-wide-connected"></i>Algo x2</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Cerrar Sesión</a></li>
                </ul>
            </div>-->
        </div>
    </div>
</nav>
<br>
