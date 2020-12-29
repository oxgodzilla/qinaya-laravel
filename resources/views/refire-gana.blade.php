@extends('layouts.app')

@section('content')
<main id="main">
      <!--  image left  -->
      <div class="row refire_gana">
        <div class="col-md-8">
          <img src="assets/img/IMGs Landing/Blue Illustrated General Grocery Supplies Online Service Grocery Facebook Cover (5).png" alt="" class="w-100" />
        </div>
        <div class="col-md-4">
          <div class="row align-items-center h-100">
            <div class="col text-center">
              <h4 class="">NO OLVIDES A TUS AMIGOS</h4>
              <h3 class="">¡REFIERE & GANA!</h3>
                <p class="lead">Comparte tu link único via email, Facebook o Twitter y gánate 1 día gratis de computador virtual por cada amigo que se registra, invita a 20 y gánate un teclado gratis
                </p>
                <div class="input-group mb-3-refir">
                  <input type="text" class="form-control email_box_refire" placeholder="linkweofwenoifw" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="refire-social-width">
                  <div class="icon_set_refire" >
                    <img src="assets/img/icon/fb.png">
                    <img src="assets/img/icon/yt.png" >
                    <img src="assets/img/icon/fb.png">
                    <img src="assets/img/icon/yt.png" >
                    <img src="assets/img/icon/fb.png">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- wizard start -->
      <div class="container my-5">
          <h4 class="display-4 text-center mb-5">¿Cómo funciona?</h4>
          <div class="line_height_refire"></div>
          <img src="assets/img/IMGs Landing/icon_tran.png" class="icon-trans-refire" width="60" height="60"/>
          <ul id="progressbar" class="text-center">
              <li class="active" id="step1"><div class="d-none d-md-block">1 <span style="color:#cd1e50;">día</span> gratis de computador virtual</div></li>
              <li class="active" id="step2"><div class="d-none d-md-block">1 <span style="color:#cd1e50;">semana</span> gratis de computador virtual</div></li>
              <li class="" id="step3"><div class="d-none d-md-block">1 <span style="color:#cd1e50;">teclado</span> para tu futuro computador</div></li>
              <li class="" id="step4"><div class="d-none d-md-block">1 <span style="color:#cd1e50;">mes</span> gratis de computador virtual</div></li>
              <li class="" id="step5"><div class="d-none d-md-block">1 <span style="color:#cd1e50;">Qinaya 3Play</span> gratis</div></li>
          </ul>
      </div>
      <!-- wizard end -->
    <section class="prem-sec">
      <div class="container" data-aos="fade-up">
        <h1 class="text-center">Tus Premios</h1><br><br>

        <div class="row Premios">
          <div class="col-lg-4" data-aos="fade-right">
              <div class="Premios-text">
                  <h1>2</h1>
                  <p>Regístrate</p>
              </div>
          </div>
          <div class="col-lg-4" data-aos="fade-right">
              <div class="Premios-text">
                  <img src="assets/img/icon/equal.png" class="" width="150" height="50"/>
              </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
              <div class="Premios-text">
                  <h1>2</h1>
                  <p>días gratis</p>
              </div>
            </div>
        </div>

        <div class="text-center col-sm-11 refire-gana-para">
          <div class="text-center pnk-box col-sm-2">
            <h4>No Pare<h4>
            <h2>sigue sigue</h2>
          </div>
          <div class="col-sm-5 refire-2">
            <h6>Invita a 3 amigos más y gánate...</h6>
              <h4> 1 semana gratis de Qinaya Compu</h4>

          </div>
          <div class="col-sm-4 mb-3-gana">
              <div class="input-group col-sm-12">
                  <input type="text" class="form-control email_box_refire" placeholder="linkweofwenoifw" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="refire-social-width col-sm-12">
                  <div class="icon_set_refire" >
                    <img src="assets/img/icon/fb.png">
                    <img src="assets/img/icon/yt.png" >
                    <img src="assets/img/icon/fb.png">
                    <img src="assets/img/icon/yt.png" >
                    <img src="assets/img/icon/fb.png">
                  </div>
              </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <h1 class="text-center como_head">¿Cómo redimir tu premio?</h1>

        <div class="row text-center">
          <div class="col-lg-12" data-aos="fade-left">
              <div class="col-sm-3  Cómo-refire"><h3>1</h3>
                 <img src="assets/img/IMGs Landing/icon_tran.png" class="icon-como-refire" width="70" height="70"/><br>
                  <p>Si ganaste un <span style="color:#CD1E50;">días de Qinaya Compu</span> estos se verán reflejados en tu cuenta</p>
              </div>

              <div class="col-sm-3 Cómo-refire"><h3>2</h3>
                <img src="assets/img/icon/6.png" class="icon-como-refire" width="100" height="100"/><br>
                  <p>Si ganaste un <span style="color:#CD1E50;">teclado</span> te enviaremos un email para coordinar<br> el envío</p>
              </div>

              <div class="col-sm-3 Cómo-refire"><h3>3</h3>
                <img src="assets/img/icon/4.png" class="icon-como-refire" width="100" height="100"/><br>
                  <p>Si ganaste un <span style="color:#CD1E50;">Qinaya 3Play</span> te enviaremos un email para coordinar el envío</p>
              </div>
          </div>
        </div>
      </div>
    </section>
</main>
<!-- End #main -->
@endsection