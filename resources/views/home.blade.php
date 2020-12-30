@extends('layouts.app')

@section('content')
    <section class="home-slider">
        <div class="container-fluid">
            <div class="home-img float-right">
                <img src="assets/img/slider-img.png">
            </div>
            <div class="content head_content">
                <p>Convierte tu TV en <span class="color_pink">&nbsp;Compu</span>&nbsp;por $20.000 cop</p>
            </div>
        </div>
    </section>

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 h2_font" data-aos="fade-right">
                        <h2>¿Quieres probarlo <span class="color_pink">gratis?</span></h2>
                    </div>
                    <div class="col-lg-9" data-aos="fade-left">
                        <div class="col-sm-2  sec-inline">
                            <img src="assets/img/icon/19 2.png" class="pull-left img-rounded"
                                 style="margin-right:10px;width:100px;height:100px;"><br>
                            <p><b>Regístrate</b></p>
                        </div>

                        <div class="col-sm-2 sec-inline">
                            <img src="assets/img/icon/15 2.png" class="pull-left img-rounded"
                                 style="margin-right:10px;width:100px;height:100px;"><br>
                            <!-- <h3>Header 2</h3> -->
                            <p><b>Descarga</b> el app desde tu TV Box</p>
                        </div>

                        <div class="col-sm-2 sec-inline">
                            <img src="assets/img/icon/8.png" class="pull-left img-rounded"
                                 style="margin-right:10px;width:100px;height:100px;"><br>
                            <!--  <h3>Header 3</h3> -->
                            <p><b>Conéctate</b> a tu compu virtual</p>
                        </div>

                        <div class="col-sm-2 sec-inline">
                            <img src="assets/img/icon/Subscribe_black.png" class="pull-left img-rounded"
                                 style="margin-right:10px;width:100px;height:100px;"><br>
                            <!-- <h3>Header 3</h3> -->
                            <p><b>¿Te gusta?</b>Compra tu plan diario, semanal o mensual</p>
                        </div>
                        <button class="btn btn-primary registrate">Registrate</button>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!--product-area-fade-effect-->
        <section class="section_0 bg-bk">
            <div class="d-flex justify-content-center mb-5" style="font-size: 41px;">¿Qué necesitas?</div>
            <div class="necessary-box">
                <div class="circle">
                    <div class="circle-hover">
                        <div class="float-left">
                            <img src="assets/img/icon/14 2.png"/>
                            <p>Televisor</p>
                        </div>
                    </div>
                </div>
                <div class="necessary-note">
                    <h4>Televisor</h4>
                    Cualquier tipo de TV. Desde el más barrigón hasta el más guapetón
                </div>
                <!--01-->
                <div class="sign-align">
                    <span>+</span>
                </div>
                <div class="circle">
                    <div class="circle-hover">
                        <img src="assets/img/icon/4.png"/>
                        <p>TV Box</p>
                    </div>
                </div>
                <div class="necessary-note">
                    <h4>TV Box</h4>
                    Cualquier TV box android al que le puedas conectar tu mouse
                </div>
                <!--02-->
                <div class="sign-align">
                    <span>+</span>
                </div>
                <div class="circle">
                    <div class="circle-hover">
                        <img src="assets/img/icon/15 2.png" style="width: 60px; height: 60px;"/>
                        <p style="line-height: 20px;">Descarga<br>Qinaya
                            <sup style="font-size: 5px;">TM</sup><br>
                            <span style="color:#cd1e50; font-size: 10px; margin-left: 1em;">Compu</span>
                        </p>
                    </div>
                </div>
                <div class="necessary-note">
                    <h4>Descargar Qinaya Compu</h4>
                    La puedes descargar desde tu Google Play store desde cualquier android.
                </div>
                <!--03-->
                <div class="sign-align">
                    <span>+</span>
                </div>
                <div class="circle">
                    <div class="circle-hover">
                        <img src="assets/img/icon/6.png"/>
                        <p>Accesorios</p>
                    </div>
                </div>
                <div class="necessary-note">
                    <h4>Accesorios</h4>
                    Ponle un mouse y un teclado a tu TV Box y ¡listo! tienes un compu nuevo en casa
                </div>
            </div>
        </section>
        <!--product-area-fade-effect-->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/qinaya_img/Qinaya FB Posts.png" class="pull-left img-rounded">
                    </div>
                    <div class="col-lg-8" data-aos="fade-left">
                        <div class="text-p">
                            <h2>¿No tienes un TV Box?</h2><br>
                            <p>Nuestro TV Box el Qinaya 3PIay sale el XXXX inscríbete a la lista de espera y al pagar 1
                                año de Qinaya Compu te mandarnos tu TV Box completamente gratis</p>
                        </div>

                        <div class="input-group col-lg-10" style="margin:0 auto;">
                            <input type="text" class="form-control email_box text-center"
                                   placeholder="Correo Electrónico" aria-label="Recipient's username"
                                   aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text mail_btn" id="basic-addon2"><b>Entra</b></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="pt-5" id="testimonial-section">
            <div class="clearfix pb-3"></div>
            <div id="testimonials" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials" data-slide-to="1"></li>
                    <li data-target="#testimonials" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="testi-text-wrap">
                                        <h2 class="testi-text text-uppercase"><b>Natalia</b></h2>
                                        <p>Juan y Luisa solo tienen 1 compu en casa y no les queda otra que compartir. Sienten que no pueden avanzar al mismo ritmo que sus compañeros de clase porque no pueden tener el mismo tiempo de estudio.<br><br>Con Qinaya Compu ambos pueden estudiar  al mismo tiempo. Ya no hay más peleas en casa. </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="assets/img/testimonials/33.png" class="rounded custimg" alt="user image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="testi-text-wrap">
                                        <h2 class="testi-text text-uppercase"><b>JUAN Y LUISA</b></h2>
                                        <p>Juan y Luisa solo tienen 1 compu en casa y no les queda otra que compartir. Sienten que no pueden avanzar al mismo ritmo que sus compañeros de clase porque no pueden tener el mismo tiempo de estudio. Con Qinaya Compu ambos pueden estudiar al mismo tiempo.
                                            Ya no hay más peleas en casa. </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="assets/img/testimonials/34.png" class="rounded custimg" alt="user image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="testi-text-wrap">
                                        <h2 class="testi-text text-uppercase"><b>Natalia</b></h2>
                                        <p>Juan y Luisa solo tienen 1 compu en casa y no les queda otra que compartir. Sienten que no pueden avanzar al mismo ritmo que sus compañeros de clase porque no pueden tener el mismo tiempo de estudio.<br><br>Con Qinaya Compu ambos pueden estudiar  al mismo tiempo. Ya no hay más peleas en casa. </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="assets/img/testimonials/35.png" class="rounded custimg" alt="user image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev justify-content-end" href="#testimonials" data-slide="prev">
                    <span class="carousel-control"><i class="fa fa-chevron-left"></i></span>
                </a>
                <a class="carousel-control-next justify-content-start" href="#testimonials" data-slide="next">
                    <span class="carousel-control"><i class="fa fa-chevron-right"></i></span>
                </a>

            </div><!-- End Portfolio Section -->
        </section>
        <!-- ======= Our video Section ======= -->

        <section class=" video">
            <div class="container video_css" data-aos="fade-up">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>

            </div>
        </section><!-- End Our video Section -->

        <!-- ======= Our Contact Section ======= -->
        <section id="contact">
            <div class="container bg-white">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5">
                        <!-- CONTACT INFO -->
                        <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                            <div class="section-contact">
                                <h2>Contáctanos</h2>

                                <div class="icon_set">
                                    <img src="assets/img/icon/fb.png">
                                    <img src="assets/img/icon/yt.png">
                                </div>
                                <br>
                                <p><a href="javascript:;" style="color:#000;">qinayalatam@gmail.com</a></p>
                                <br>
                                <div class="icon_logo">
                                    <img src="assets/Q_image/ícono-colores-en-negro.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-7">
                        <!-- CONTACT FORM HERE -->
                        <div class="wow fadeInUp inline-table" data-wow-delay="0.4s">
                            <form id="contact-form" action="#" method="get">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0 pr-0 pr-sm-0 pr-md-2">
                                        <input type="text" class="form-control" name="name" placeholder="Nombre"
                                               required="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 pr-0 pl-0 pl-sm-0 pl-md-2">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                               required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12 pl-0 pr-0 pr-sm-0 pr-md-2">
                                        <input type="text" class="form-control" name="name" placeholder="Celular"
                                               required="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 pr-0 pl-0 pl-sm-0 pl-md-2">
                                        <input type="text" class="form-control" name="name" placeholder="Direccion"
                                               required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <input type="text" class="form-control" name="name" placeholder="Asunto"
                                           required="">
                                </div>

                                <div class="row">
                                    <textarea class="form-control" rows="5" name="message"
                                              placeholder="Escríbenos tu mensaje..." required=""></textarea>
                                </div>
                                <div class="col-md-offset-12 col-md-12 col-sm-offset-12 col-sm-12">
                                    <button id="submit" type="submit" class="form-control" name="submit">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Contact Section -->
    </main>
    <!-- End #main -->
@endsection
