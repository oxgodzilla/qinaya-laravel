@extends('layouts.app')

@section('content')
<main id="main">
  <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:70vh; background-size: cover; background-image: url('assets/img/IMGs Landing/Blue Illustrated General Grocery Supplies Online Service Grocery Facebook Cover (5).png');">

    <div class="container-fluid">
      <div class="row  justify-content-center align-items-center d-flex text-center h-100">
        <div class="col-12 col-md-8  h-50 ">
          <h2 class=" text-light mb-2 mt-5">Instituciones & Alianzas</h2>
          <hr class="width-20">
          <p class="lead mb-5">Formamos alianzas con distintas instituciones para llegar más lejos, uniendo las capacidades únicas y distintivas de cada parte para brindar soluciones potentes y llegar a más hogares con nuestro computador virtual.</p>  
        </div>
      </div>
    </div>
  </section>

  <section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">
      <h1 class="Text-cr">Tipos de Alianzas</h1>
      <div class="row">
        <div class="card-group card-group-ins">

          <div class="card card1">
            <img class="card-img-toppp" src="assets/img/qinaya_img/logo.webp" alt="Card image cap" width="100">
            <div class="card-body">
              <p class="card-text card-text-ins">Trabajamos con instituciones educativas para que sus estudiantes puedan tener todo el software que tienen en el campus desde cualquier lugar. </p>
            </div>
            <button class="btn btn-primary mas-btn">Mas Info</button>
          </div>

          <div class="card card2">
            <img class="card-img-toppp" src="assets/img/qinaya_img/logo.webp" alt="Card image cap" width="100">
            <div class="card-body">
              <p class="card-text card-text-ins">Nos aliamos con empresas donde complementamos sus capacidades con las nuestras para entregar más valor al cliente final. ​</p>
            </div>
            <button class="btn btn-primary contact-btn">Contactanos</button>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main -->
@endsection