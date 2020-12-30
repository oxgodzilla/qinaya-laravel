@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-12">
                    <div class="myLeftCtn">

                        <form class="myForm text-center needs-validation" onsubmit="return validateForm(this)" novalidate>
                            <header><img src="assets/img/checkOut-logo.png" width="80"><br>REGÍSTRATE</header>
                            <div class="form-group">
                                <input class="btn btn-light" type="submit" value="Regístrate con Google">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Regístrate con Facebook" style="background-color: #264294">
                            </div>

                        </form>

                        <form class="myForm text-center needs-validation" onsubmit="return validateForm(this)" style="border-top: #BD3352 1px solid; padding-top: 25px;" novalidate>
                            <div class="form-group">
                                <label>¿Cuál es tu correo electrónico?</label>
                                <input class="myInput" type="text" placeholder="Escribe tu correo">
                            </div>
                            <div class="form-group">
                                <label>Confirma el correo electrónico</label>
                                <input class="myInput" type="text" placeholder="" required>
                                <div class="invalid-feedback">Es necesario que confirmes tu correo electrónico.</div>
                            </div>
                            <div class="form-group">
                                <label>Crea una contraseña</label>
                                <input class="myInput" type="text" placeholder="Escribe tu contraseña" required>
                                <div class="invalid-feedback">Debes introducir una contraseña.</div>
                            </div>
                            <div class="form-group">
                                <label>Confirma tu contraseña</label>
                                <input class="myInput" type="text" placeholder="Vuelve a escribir tu contraseña" required>
                            </div>
                            <div class="form-group">
                                <label>¿Cómo quieres que te llamemos?</label>
                                <input class="myInput" type="text" placeholder="Esto aparecerá en tu perfil" required>
                            </div>
                            <a class="btn butt">REGÍSTRATE</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
