@extends('layouts.app')

@section('content')
    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron bg-cover"
                         style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.3) 0%,rgba(255,255,255,0.3) 100%), url('assets/img/IMGs Landing/Blue Illustrated General Grocery Supplies Online Service Grocery Facebook Cover (5).png'); width: 90%; height: 700px; margin: 0 auto; border-radius: 0px !important">
                        <div class="container">
                            <div class="text-center">
                                <img src="assets/img/qinaya_img/logo.webp" class="text-center">
                            </div>

                            <div class="text-center pnk-box">
                                <h4>¡AGOTADO!</h4>
                                <p class="lead ">Estamos trabajando en la segunda versión de Qinaya 3Play. Si quieres
                                    ser de los primeros en comprar la última versión llena <b>este</b> formulario y te
                                    contactaremos una vez los tengamos.</p>
                            </div>

                            <div class="container section_3Play">
                                <div class="row col-md-12 full-container">
                                    <div class="col-md-6 width-carusel">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 caro_slide_wid"
                                                         src="assets/img/qinaya_img/Qinaya FB Posts (1).png"
                                                         alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 caro_slide_wid"
                                                         src="assets/img/qinaya_img/Qinaya FB Posts (1).png"
                                                         alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 caro_slide_wid"
                                                         src="assets/img/qinaya_img/Qinaya FB Posts (1).png"
                                                         alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                               role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                               role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-half text-center">
                                        <h6><i>SmartTV y decodificador TDT, todo en uno.</i></h6>
                                        <p>
                                            Qinaya 3Play es un convertidor SmartTV y un decodificador de señal TDT. Lo
                                            conectas a tu televisor y a tu red de internet, e inmediatamente ganas
                                            acceso a servicios de streaming como Netflix, YouTube, etc, ademas de poder
                                            utilizarlo para transmitir señales TDT nacionales directo a tu televisor.
                                        </p>
                                        <button id="submit" type="submit" class="form-control 3play_btn" name="submit">
                                            Compralo aquí
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- video start -->
        <section class="video video_3play">
            <div class="container" data-aos="fade-up">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- video end  -->
        <section class="3play_combo">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 bg_img_3play" data-aos="fade-right">
                        <h2>¿Qué Incluye?</h2>
                        <ul class="3play-ul">
                            <li>QinayaL</li>
                            <li>Control Remoto</li>
                            <li>Mouse Inalámbrico</li>
                            <li>Cable HDMI</li>
                            <li>Cable RCA</li>
                        </ul>
                    </div>
                    <div class="col-lg-8 bg_cntnt_3play" data-aos="fade-left">
                        <h2>¿Cómo utilizarlo?</h2>
                        <div class="sec-3play">
                            <p><b>1</b></p>
                            <p>Activa tu Qinaya</p>
                            <br>
                            <ol class="3play-ul">
                                <li>Conéctalo a tu televisor</li>
                                <li>Conéctalo a tu red de internet</li>
                                <li>Configura el idioma de tu dispositivo</li>
                            </ol>
                        </div>

                        <div class="sec-3play">
                            <p><b>2</b></p>
                            <p>Activa tu TDT</p>
                            <br>
                            <ol class="3play-ul">
                                <li>Habilita el TDT en "opciones TDT"</li>
                                <li>Selecciona la opción que dice <br>"busqueda automatica de
                                    canales"
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= last section ======= -->
        <section class="services-3play col-md-12">
            <div class="container 3play-cntainer" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/qinaya_img/Qinaya FB Posts (1).png"
                             class="pull-left img-rounded">
                    </div>
                    <div class="col-lg-8" data-aos="fade-left">
                        <div class="text-3play">
                            <h2><b>Especificaciones Técnicas</b></h2><br>
                            <p>Sistema Operativo: Android 4.4.2 (KitKat)</p>
                            <p>Decodificador Video: 1080p60 HEVC/H.265, H.264</p>
                            <p>Memoria: DDRIII 1GB</p>
                            <p>Sistema Operativo: Flash 8GB</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
    </main>
    <!-- End #main -->
@endsection
