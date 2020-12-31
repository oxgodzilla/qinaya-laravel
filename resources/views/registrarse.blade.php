@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="container needs-validation" id="iniciarForm" novalidate>
            <header><img src="assets/img/checkOut-logo.png" width="80"><br>REGÍSTRATE</header>
            <div class="form-group">
                <input class="btn btn-light" type="submit" value="Regístrate con Google">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Regístrate con Facebook" style="background-color: #264294; text-transform: none">
            </div>

        </form>

        <form class="container needs-validation" id="registarseForm" novalidate action="{{ route('gratis') }}">
            <div class="osep">o</div>

            <div class="form-group">
                <label>¿Cuál es tu correo electrónico?</label>
                <input type="text" class="form-control" placeholder="Escribe tu correo" required>
            </div>

            <div class="form-group has-feedback">
                <label>Confirma el correo electrónico</label>
                <input type="email" class="form-control" name="email" required>
                <div class="invalid-feedback">
                    <i class="ion-android-alert"></i> Es necesario que confirmes tu correo electrónico.
                </div>
            </div>

            <div class="form-group has-feedback">
                <label>Crea una contraseña</label>
                <input type="password" class="form-control" placeholder="Escribe tu contraseña" required>
                <div class="invalid-feedback">
                    <i class="ion-android-alert"></i> Debes introducir una contraseña.
                </div>
            </div>

            <div class="form-group">
                <label>Confirma tu contraseña</label>
                <input type="password" class="form-control" placeholder="Vuelve a escribir tu contraseña" required>
            </div>

            <div class="form-group">
                <label>¿Cómo quieres que te llamemos?</label>
                <input type="text" class="form-control" placeholder="Esto aparecerá en tu perfil" required>
            </div>

            <input type="submit" class="btn btn-primary" value="REGÍSTRATE"></input>
        </form>

    </div>
    <!-- /.container -->
@endsection

@section('scripts')
    <script src="assets/js/register.js"></script>
@endsection
