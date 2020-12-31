<!-- start header -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="assets/img/qinaya_img/logo.webp">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link alone-link" href="{{ route('compu') }}">¡Usa tu Compu!</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('planes') }}">Planes & Precios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('refire.gana') }}">Refire & Gana</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('preguntas.frecuentes') }}">Preguntas Frecuentes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('preguntas.frecuentes') }}" style="margin-right: 12px;">Más</a></li>
                <li class="nav-item"><span class="nav-link leftest-link" href="javascript:;"></span>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('registrarse') }}">Registrarse</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('iniciar') }}">Iniciar Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <!-- <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-mas" data-toggle="dropdown">
           Mas
          </button>
          <div class="dropdown-menu menu-mas">
            <a class="dropdown-item" href="{{ route('instituciones') }}">¡Prueba Qinaya!</a>
            <a class="dropdown-item" href="{{ route('qinaya.school') }}">qinaya-school</a>
            <a class="dropdown-item" href="{{ route('qinaya.3play') }}">qinaya-3play</a>
            <a class="dropdown-item" href="{{ route('quienes.somos') }}">quienes-somos</a>
          </div>
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-mas" data-toggle="dropdown">
           Login
          </button>
          <div class="dropdown-menu menu-mas nav-tabs">
            <a class="dropdown-item" href="#home">¡Prueba Qinaya!</a>
            <a class="dropdown-item" href="#menu1">Mis Ordenes</a>
            <a class="dropdown-item" href="#menu2">Mi Dirección</a>
            <a class="dropdown-item" href="#menu3">Mis Métodos de Pagos</a>
            <a class="dropdown-item" href="{{ route('profile') }}">Mi Perfil</a>
            <a class="dropdown-item" href="#">Cerrar sesión</a>
          </div>
        </div> -->
            </ul>
        </div>
    </nav>
</header>
<!-- end header -->
