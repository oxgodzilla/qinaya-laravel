@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-12">
                    <div class="myLeftCtn">

                        <form class="myForm text-center needs-validation" onsubmit="return validateForm(this)" novalidate>
                            <header><img src="assets/img/qinaya_img/logo.webp"></header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="" id="nombre" required>
                                <div class="invalid-feedback">Es necesario que confirmes tu correo electrónico.</div>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="contra" placeholder="" required>
                                <div class="invalid-feedback">Es necesario que confirmes tu correo electrónico.</div>
                            </div>

                            <div class="form-group">
                                <label class="greeklabel"><input id="check_1" name="check_1" class="geekmark" type="checkbox" required>
                                    <span class="geekmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recordarme
                                    <div class="invalid-feedback">You must check the box.</div></label>
                            </div>

                            <input type="submit" class="butt" value="INICIAR SESIÓN">

                            <div class="form-group">
                                <label class="mt-4"><a class="forgot">¿Olvidaste la contraseña?</a></label>
                            </div>

                            <a class="btn butt">REGÍSTRATE</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
