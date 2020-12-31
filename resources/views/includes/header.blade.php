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
                <li class="nav-item {{ (request()->is('compu')) ? 'active' : '' }}"><a class="nav-link alone-link" href="{{ route('compu') }}">¡Usa tu Compu!</a></li>
                <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item {{ (request()->is('planes')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('planes') }}">Planes & Precios</a></li>
                <li class="nav-item {{ (request()->is('refire')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('refire.gana') }}">Refire & Gana</a></li>
                <li class="nav-item {{ (request()->is('preguntas')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('preguntas.frecuentes') }}">Preguntas Frecuentes</a></li>
                <li class="nav-item dropdown {{ (request()->is('mas')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" style="margin-right: 12px;" data-toggle="dropdown">Más</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('instituciones') }}">¡Prueba Qinaya!</a>
                        <a class="dropdown-item" href="{{ route('qinaya.school') }}">qinaya-school</a>
                        <a class="dropdown-item" href="{{ route('qinaya.3play') }}">qinaya-3play</a>
                        <a class="dropdown-item" href="{{ route('quienes.somos') }}">quienes-somos</a>
                    </div>
                </li>
                <li class="nav-item"><span class="nav-link leftest-link" href="javascript:;"></span>
                </li>
                <li class="nav-item {{ (request()->is('registrarse')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('registrarse') }}">Registrarse</a>
                </li>
                <li class="nav-item {{ (request()->is('iniciar')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('iniciar') }}">Iniciar Sesión</a></li>
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
        </div> -->
            </ul>
        </div>
    </nav>
</header>
<!-- end header -->
