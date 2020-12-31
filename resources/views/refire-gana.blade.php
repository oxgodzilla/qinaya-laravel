@extends('layouts.app')

@section('content')
    <main id="main">
        <div class="container-fluid" style="padding: 0">
            <!--  image left  -->
            <div class="row refire_gana">
                <div class="col-md-8">
                    <img
                        src="assets/img/IMGs Landing/Blue Illustrated General Grocery Supplies Online Service Grocery Facebook Cover (5).png"
                        alt="" class="w-100"/>
                </div>
                <div class="col-md-4">
                    <div class="refire-gana-title">
                        <h4 class="">NO OLVIDES A TUS AMIGOS</h4>
                        <h2 class=""><b>¡REFIERE & GANA!</b></h2>
                        <p class="lead">Comparte tu link único via email, Facebook o Twitter y gánate 1 día gratis de
                            computador virtual por cada amigo que se registra, invita a 20 y gánate un teclado gratis
                        </p>
                        <div class="input-group mb-3-refir">
                            <input type="text" class="form-control email_box_refire" placeholder="https://"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="refire-social-width">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wizard start -->
        <div class="container my-5" style="position: relative;">
            <h4 class="display-4 text-center text-uppercase" style="padding: 0 20px;">¿Cómo funciona?</h4>
            <div class="line_height_refire"></div>
            <div class="line_height_passed"></div>
            <img src="assets/img/IMGs Landing/icon_tran.png" class="icon-trans-refire" width="60" height="60"/>
            <ul id="progressbar" class="text-center">
                <li class="active" id="step1">
                    <div class="d-none d-md-block">1 <span style="color:#cd1e50;">día</span> gratis de computador
                        virtual
                    </div>
                </li>
                <li class="active" id="step2">
                    <div class="d-none d-md-block">1 <span style="color:#cd1e50;">semana</span> gratis de computador
                        virtual
                    </div>
                </li>
                <li class="" id="step3">
                    <div class="d-none d-md-block">1 <span style="color:#cd1e50;">teclado</span> para tu futuro
                        computador
                    </div>
                </li>
                <li class="" id="step4">
                    <div class="d-none d-md-block">1 <span style="color:#cd1e50;">mes</span> gratis de computador
                        virtual
                    </div>
                </li>
                <li class="" id="step5">
                    <div class="d-none d-md-block">1 <span style="color:#cd1e50;">Qinaya 3Play</span> gratis</div>
                </li>
            </ul>
        </div>
        <!-- wizard end -->
        <section class="prem-sec">
            <div class="container" data-aos="fade-up">
                <h1 class="text-center text-uppercase">Tus Premios</h1><br><br>

                <div class="row Premios">
                    <div class="col-lg-3" data-aos="fade-right">
                        <div class="Premios-text" style="border: #111 4px solid;">
                            <h1><b>2</b></h1>
                            <p><b>Regístrate</b></p>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-right">
                        <div class="Premios-text" style="padding-top: 20px;">
                            <img src="assets/img/icon/equal.png" class="" width="30" height="20"/>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-left">
                        <div class="Premios-text">
                            <h1><b>2</b></h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="Premios-text">
                            <p>Días gratis<br> Computador virtual</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container refire-gana-para">
            <div class="row">
                <div class="text-center pnk-box col-4 col-sm-4 col-md-2">
                    <h4>No Pare
                        <h4>
                            <h2>sigue sigue</h2>
                </div>
                <div class="col-8 col-sm-8 col-md-5 refire-2">
                    <div class="clearfix"><h6>Invita a 3 amigos más y gánate...</h6></div>
                    <div><img src="assets/img/red-arrow.png" class="red-arrow"><h4>&nbsp;1 semana gratis de Qinaya Compu</h4></div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 mb-3-gana">
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control email_box_refire" placeholder="https://"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="refire-social-width col-sm-12">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <h1 class="text-center como_head text-uppercase">¿Cómo redimir tu premio?</h1>

            <div class="row text-center">
                <div class="col-sm-4 Cómo-refire"><h3><span class="round-num">1</span></h3>
                    <img src="assets/img/IMGs Landing/icon_tran.png" class="icon-como-refire" width="100"
                         height="100"/><br>
                    <p>Si ganaste un <span style="color:#CD1E50;">días de Qinaya Compu</span> estos se verán
                        reflejados en tu cuenta</p>
                </div>

                <div class="col-sm-4 Cómo-refire"><h3><span class="round-num">2</span></h3>
                    <img src="assets/img/accesorios.png" class="icon-como-refire" width="180" height="100"/><br>
                    <p>Si ganaste un <span style="color:#CD1E50;">teclado</span> te enviaremos un email para
                        coordinar el envío</p>
                </div>

                <div class="col-sm-4 Cómo-refire"><h3><span class="round-num">3</span></h3>
                    <img src="assets/img/tv_box.png" class="icon-como-refire" width="120" height="100"/><br>
                    <p>Si ganaste un <span style="color:#CD1E50;">Qinaya 3Play</span> te enviaremos un email
                        para coordinar el envío</p>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->
@endsection
