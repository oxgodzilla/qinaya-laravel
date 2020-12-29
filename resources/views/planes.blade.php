@extends('layouts.app')

@section('content')
<main id="main">
    <!-- ======= About Us Section ======= -->
    <div class="pricing-box-container">

      <div id="hide-container" class="pricing-box pricing-box-bg-image text-center">
       <img src="assets/Q_image/ícono-colores-en-negro.png" width="50" class="hide-content">
       <img src="assets/img/icon/dwld.png" width="20" class="dwld-img">
          <h2 class="price hide-content">PLAN<br> DIARIO</h2>

        <p class="overlay">Vista Rapida</p>

        <div class="inline-card hide-content">
          <img src="assets/img/icon/19.png" width="75">
          <p>24 HORAS DE COMPU</p>
        </div>


        <ul class="features-list">
          <li class="text-li"><b>PLAN DIARIO</b></li>
          <li class="price-li">$5.000,00</li>
        </ul>
        <button class="btn-primary">Comprar</button>
      </div>

      <!-- card 1 -->

      <div id="hide-container" class="pricing-box pricing-box-bg-image text-center">
       <img src="assets/Q_image/ícono-colores-en-negro.png" width="50"  class="hide-content">
       <img src="assets/img/icon/dwld.png" width="20" class="dwld-img">
          <h2 class="price hide-content">PLAN SEMANAL</h2>

        <p class="overlay">Vista Rapida</p>

        <div class="inline-card hide-content">
          <img src="assets/img/icon/16.png" width="75">
          <p>7 DIAS DE COMPU</p>
        </div>


        <ul class="features-list">
          <li class="text-li"><b>PLAN SEMANAL</b></li>
          <li class="price-li">$10.000,00</li>
        </ul>
        <button class="btn-primary">Comprar</button>
      </div>

      <!-- card 2 -->

      <div id="hide-container" class="pricing-box pricing-box-bg-image text-center">
       <img src="assets/Q_image/ícono-colores-en-negro.png" width="50"  class="hide-content">
       <img src="assets/img/icon/dwld.png" width="20" class="dwld-img">
          <h2 class="price hide-content">PLAN MENSUAL</h2>

        <p class="overlay">Vista Rapida</p>

        <div class="inline-card hide-content">
          <img src="assets/img/icon/13.png" width="75">
          <p>1 MES DE COMPUTADOR EN LA NUBE</p>
        </div>
        

        <ul class="features-list">
          <li class="text-li"><b>PLAN MENSUAL</b></li>
          <li class="price-li">$20.000,00</li>
        </ul>
        <button class="btn-primary">Comprar</button>
      </div>

      <!-- card 3 -->
    </div>
</main>
<!-- End #main -->
@endsection