@extends('layouts.app')

@section('content')
    <main id="main">
        <div class="">
            <img src="assets/img/planes.png" style="width: 100%;">
        </div>
        <!-- ======= About Us Section ======= -->
        <div class="pricing-box-container">

            <div class="pricing-box">
                <div class="card-level">Lite</div>
                <h2 class="card-title">Diario</h2>
                <div class="clearfix"><img src="assets/img/baloon.png" class="card-image"></div>

                <div class="inline-card">
                    <p>$<br>1.000</p>
                    <button class="btn btn-default card-button">Comprar</button>
                </div>


                <ul class="features-list">
                    <li>Puedes ingresar desde culquier dispositivo</li>
                    <li>Cancela cuando quieras</li>
                </ul>
            </div>

            <!-- card 1 -->

            <div class="pricing-box active">
                <div class="card-level">Plus</div>
                <h2 class="card-title">Semanal</h2>
                <div class="clearfix"><img src="assets/img/plane.png" class="card-image"></div>

                <div class="inline-card">
                    <p>$<br>5.000</p>
                    <button class="btn btn-default card-button">Comprar</button>
                </div>


                <ul class="features-list">
                    <li>Puedes ingresar desde culquier dispositivo</li>
                    <li>Cancela cuando quieras</li>
                </ul>
            </div>

            <!-- card 2 -->

            <div class="pricing-box">
                <div class="card-level">Premium</div>
                <h2 class="card-title">Mensual</h2>
                <div class="clearfix"><img src="assets/img/rocket.png" class="card-image"></div>

                <div class="inline-card">
                    <p>$<br>20.000</p>
                    <button class="btn btn-default card-button">Comprar</button>
                </div>


                <ul class="features-list">
                    <li>Puedes ingresar desde culquier dispositivo</li>
                    <li>Cancela cuando quieras</li>
                </ul>
            </div>

            <!-- card 3 -->
        </div>
    </main>
    <!-- End #main -->
@endsection
