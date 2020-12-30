@extends('layouts.app')

@section('content')
  <main id="main">
    <!-- ======= Preguntas Frecuentes Section ======= -->
      <div class="container">
        <div class="row card card-border pd-l-2">
          <h6 class="section-title h1">Preguntas Frecuentes</h6>
        </div>

        <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="¿Qué estás buscando?">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>

        <div class="row col-xs-12 width-tag">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="choose" data-toggle="tab" href="#accordion" role="tab" aria-controls="nav-home" aria-selected="true">Qinaya Compu</a>

              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#accordion2" role="tab" aria-controls="nav-profile" aria-selected="false">Qinaya 3Play</a>
            </div>
          </nav>

        <!-- tab 1 start -->
          <ul id="accordion" class="col-sm-6 col-md-12 tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
            <!-- Question one -->
                <li>
                    <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
                        ¿Cómo lo descargo?
                        <span class="fa fa-chevron-up fa-1x float-right"></span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <div class="font_8">1. Desde tu dispositivo Android ve al Play Store</div>

                          <div class="font_8">2. Busca "Qinaya Compu" en el buscador</div>

                          <div class="font_8">3. Instala el app</div>
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                    </div>
                </li>

                <!-- Question two -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Necesito un mouse y un teclado?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">Para que uses tu Qinaya Compu tal y como si fuera un compu lo mejor es que le conectaes un mouse y un teclado. Una vez conectes los accesorios a tu TV box podrás abrir la aplicación de Qinaya Compu y navegar tal y como lo harías en un compu normal.

                      </div>

                      <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                      </div>
                    </div>
                </li>

                <!-- Question three -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cómo me registro?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <div class="font_8">1. Abre la aplicación desde tu dispositivo Android</div>

                          <div class="font_8">2. Haz clic en el botón Registro</div>

                          <div class="font_8">3. Completa los datos</div>
                        </div>
                        <p>También puedes registrarte via web desde este link.</p>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>
            </ul>


        <!-- tab 1 end -->
        <!-- ********************************************************************* -->
        <!-- tab 2 start -->


            <ul id="accordion2" class="col-sm-6 col-md-12 tab-pane fade" role="tabpanel" aria-labelledby="nav-contact-tab">
                <!-- Question one -->
                <li>
                    <div id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
                          ¿Sirve para TV convencional viejo (sin HDMI)?
                           <span class="fa fa-chevron-up fa-1x float-right"></span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">
                          ¡Sí! Qinaya funciona con casi todos los televisores. Tenemos puertos RCA y HDMI.
                        </div>
                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                    </div>
                </li>

                <!-- Question two -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Requiere de antena para el TDT?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                        <div class="card-body">
                          Si, para poder conectarte a TDT debes tener una antena para poder recibir la señal.
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>

                <!-- Question three -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cómo puedo acceder al play store?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                        <div class="card-body">
                           <div class="font_8">1. Abre la aplicación desde tu dispositivo Android</div>
                          <div class="font_8">2. Haz clic en el botón Registro</div>
                          <div class="font_8">3. Completa los datos</div>
                        </div>
                        <p>¡Mira este video instructivo!</p>

                        <div class="embed-responsive embed-responsive-16by9 video-tab">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>

                <!-- Question four -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          ¿Se conecta a internet por WiFi o por cable?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                        <div class="card-body">
                          Si, para poder conectarte a TDT debes tener una antena para poder recibir la señal.
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>

                <!-- Question Five -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Cuántos puertos USB trae? Tiene salida A.V?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                        <div class="card-body">
                           El Qinaya 3Play cuenta con 4 puertos USB, puerto de HDMI y RCA
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>


                <!-- Question Six -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        ¿Puedo transmitir inalámbricamente la señal del celular al TV box?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                        <div class="card-body">
                           Si, puedes compartir los datos de tu celular y conectarte a la red de tu celular.
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>

                <!-- Question Seven -->
                <li>
                    <div class="collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        ¿Venden al por mayor?
                        <span class="fa fa-chevron-down fa-1x float-right"></span>
                    </div>
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                        <div class="card-body">
                           Si, puedes compartir los datos de tu celular y conectarte a la red de tu celular.
                        </div>

                        <div class="icon_set_tab" >
                          <img src="assets/img/icon/fb.png">
                          <img src="assets/img/icon/yt.png" >
                        </div>
                      </div>
                </li>


            </ul>
        <!-- tab 1 end -->
        </div>
      </div>
    <!-- ======= Preguntas Frecuentes Section ======= -->

  </main>
<!-- End #main -->
@endsection

