@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="container needs-validation" id="iniciarForm" novalidate>
            <header><img src="assets/img/qinaya_img/logo.webp" width="240"></header>

            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" required>
                <span class="ion ion-person form-control-feedback"></span>
                <div class="invalid-feedback">
                    <i class="ion-android-alert"></i> Es necesario que confirmes tu correo electrónico.
                </div>
            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" required>
                <span class="ion ion-locked form-control-feedback"></span>
                <div class="invalid-feedback">
                    <i class="ion-android-alert"></i> Debes introducir una contraseña.
                </div>
            </div>
            <div class="form-check">
                <label class="form-check-label greeklabel">
                    <input type="checkbox" class="form-check-input">
                    <span class="geekmark"></span>
                    Recordarme
                </label>
            </div>

            <button class="btn btn-primary" type="submit">INICIAR SESIÓN</button>

            <div class="form-group">
                <label class="mt-4"><a class="forgot">¿Olvidaste la contraseña?</a></label>
            </div>

            <a href="{{ route('registrarse') }}" class="btn btn-primary">REGÍSTRATE</a>
        </form>

    </div>
    <!-- /.container -->
@endsection

@section('scripts')
    <script src="assets/js/login.js"></script>
@endsection
