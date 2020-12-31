@extends('layouts.app')

@section('content')
    <main id="compu">
        <div class="compu-title">
            <h2>Te damos la Bienvenida a Qinaya <span>Compu</span></h2>
            <p>Tu ventana al mundo digital</p>
        </div>
        <!-- ======= About Us Section ======= -->
        <div class="pricing-box-container">

            <div class="pricing-box">
                <h2 class="card-title">Tu Equipo</h2>
                <div class="clearfix">
                    <img class="normal" src="assets/img/icon/tU-EQUIPO.png" height="100">
                    <img class="active" src="assets/img/icon/tU-EQUIPO.en-blanco.png" height="100">
                </div>
                <div class="card-content">
                    Línuxmint 20 Ulyana
                </div>
            </div>

            <!-- card 1 -->

            <div class="pricing-box active">
                <h2 class="card-title">Tu Plan</h2>
                <div class="clearfix">
                    <img class="normal" src="assets/img/icon/tu-plan.png" height="100">
                    <img class="active" src="assets/img/icon/tu-plan-en-blanco.png" height="100">
                </div>
                <div class="card-content">
                    No tienes un plan activo.
                </div>

                <div class="card-foot">
                    <a>COMPRAR PLAN<img class="normal" src="assets/img/icon/FLECHA.png" width="40"><img class="active" src="assets/img/icon/FLECHA.en-blanco.png" width="40"></a>
                </div>
            </div>

            <!-- card 2 -->

            <div class="pricing-box">
                <h2 class="card-title">Tu Compu</h2>
                <div class="clearfix">
                    <img class="normal" src="assets/img/icon/Tu-compu.png" height="100">
                    <img class="active" src="assets/img/icon/Tu-compu.en-blanco.png" height="100">
                </div>
                <div class="card-content">
                    Aquí podrás empezar a usar tu compu virtual
                </div>

                <div class="card-foot">
                    <a>COMPRAR PLAN<img class="normal" src="assets/img/icon/FLECHA.png" width="40"><img class="active" src="assets/img/icon/FLECHA.en-blanco.png" width="40"></a>
                </div>
            </div>

            <!-- card 3 -->
        </div>
    </main>
    <!-- End #main -->
@endsection
