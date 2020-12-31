@extends('layouts.app')

@section('content')
    <section id="gratis-box">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs d-none">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu1">Menu 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Menu 3</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="menu1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-5 step-left">
                            <h2>lnicia tu <span class="red-text">prueba gratis</span></h2>
                            <p>En Qinaya queremos que disfrutes de las ventajas de convertir tu televisor en un computador, por eso te obsequiamos <span class="red-text"><b>1</b></span> dia de prueba. <b>iEmpieza ya!</b></p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <h2 class="text-center">
                                Entra a tu compu virtual haciendo clic en <span class="red-text">"conectar"</span>
                            </h2>
                            <img src="assets/img/step1.png">
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 text-center">
                            <a data-toggle="tab" href="#menu2"><img src="assets/img/icon/flecha2.png" class="nav-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="menu2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 step-right">
                            <h2 class="text-center">
                                Navega, crea, guarda y envia
                            </h2>
                            <p class="text-center">Desde tu escritorio puedes abrir un navegador para buscar <span class="red-text">cualquier sitio web</span> o puedes crear y guardar documentos y hasta los puedes enviar por email.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 text-center">
                            <a data-toggle="tab" href="#menu3"><img src="assets/img/icon/flecha2.png" class="nav-btn" style="margin-top: 160%;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="menu3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <img src="assets/img/compra-el-plan.png">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 step-right text-center">
                            <p class="text-left">Haz click en <span class="red-text">“Comprar Plan”</span> Te enviaremos un email y un SMS para que compres tu plan</p>
                            <a href="{{ route('compu') }}" class="btn btn-primary" style="border-radius: 5px; text-transform: none;">Comenzar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
