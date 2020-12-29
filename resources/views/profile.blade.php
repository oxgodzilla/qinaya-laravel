@extends('layouts.app')

@section('content')
<section>
	<div class="profile-page-outer">
		<div class="profile-header">
			<div class="container">
				<div class="pr-header-inner">
					<div class="pr-logo">
						J
					</div>
					<div class="pr-name">
						<p>Jone Doe</p>
					</div>
					<div class="pr-edit">
						<img src="assets/img/edit-icon.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="profile-content">
			<ul class="nav nav-tabs container">
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#home">¡Prueba Qinaya!</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Mis Ordenes</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Mi Dirección</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu3">Mis Métodos de Pagos</a></li>
				<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu4">Mi Perfil</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="home">
					<div class="outer-coltab-content">
						<div class="column-div">
							<div class="column-number">1</div>
							<div class="column-heading">
								<h2>Suscríbete</h2>
							</div>
							<div class="column-content">
								<p>Compra tu plan diario, semanal o mensual para tener un compu desde casa</p>
								<a href="#">Suscríbete ></a>
							</div>
						</div>
						<div class="column-div">
							<div class="column-number">2</div>
							<div class="column-heading">
								<h2>Descarga</h2>
							</div>
							<div class="column-content">
								<p>Descarga nuestra app desde tu TV Box</p>
								<a href="#">Descarga ></a>
							</div>
						</div>
						<div class="column-div">
							<div class="column-number">3</div>
							<div class="column-heading">
								<h2>INGRESA</h2>
							</div>
							<div class="column-content">
								<p>Ingresa a tu Qinaya Compu</p>
							</div>
						</div>
						<div class="column-div">
							<div class="column-number">4</div>
							<div class="column-heading">
								<h2>¡REPITE!</h2>
							</div>
							<div class="column-content">
								<p>Puedes tener tu compu cada vez que lo necesites.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade container" id="menu1">
					<div class="outer-seccoltab-content">
						<div class="sec-content-headding">
							<h3>Mis pedidos</h3>
							<p>Comprueba el estado de los pedidos o navega por tus compras anteriores.</p>					  			
						</div>
						<div class="sec-content-body">
							<p>Todavía no ha realizado ningún pedido.</p>
							<a href="index.html">Realizar compra</a>
						</div>
					</div>
				</div>
				<div class="tab-pane fade container" id="menu2">
					<div class="outer-seccoltab-content">
						<div class="sec-content-headding">
							<h3>Mis direcciones</h3>
							<p>Agrega y administra las direcciones que utilizas con frecuencia.</p>					  			
						</div>
						<div class="sec-content-body">
							<p>No has guardado ninguna dirección todavía.</p>
							<a class="modal-open-btn" href="#" data-toggle="modal" data-target="#form-modal">Agregar nueva dirección</a>
							<div class="modal fade show" id="form-modal">
								<div class="modal-dialog modal-md">
									<div class="modal-content pr-page-modal">
										<div class="modal-remove">
											<button type="button" class="close" data-dismiss="modal">&times</button>
										</div>
										<div class="modalinner-content">
											<div class="sec-content-headding mb-3">
												<h3>Agregar nueva dirección</h3>		
											</div>
											<form>
												<div class="form-group form-group-sec">
													<div class="group-col">
														<label>*Nombre</label>
														<input type="text" name="">
													</div>
													<div class="group-col">
														<label>*Apellido</label>
														<input type="text" name="">
													</div>
												</div>
												<div class="form-group">
													<label>Nombre de la empresa</label>
													<input type="text" name="">
												</div>
												<div class="form-group">
													<label>*Apellido</label>
													<input type="text" name="">
												</div>
												<div class="form-group">
													<label>Dirección</label>
													<input type="text" name="">
												</div>
												<div class="form-group">
													<label>Dirección - Línea 2</label>
													<input type="text" name="">
												</div>
												<div class="form-group">
													<label>Ciudad</label>
													<input type="text" name="">
												</div>
												<div class="form-group form-group-sec">
													<div class="group-col">
														<label>País</label>
														<select>
															<option>India</option>
														</select>
													</div>
													<div class="group-col">
														<label>Región</label>
														<select>
															<option>Maharashtra</option>
														</select>
													</div>
												</div>
												<div class="form-group form-group-sec">
													<div class="group-col">
														<label>Código postal</label>
														<input type="text" name="">
													</div>
													<div class="group-col">
														<label>Teléfono</label>
														<input type="text" name="">
													</div>
												</div>
												<div class="form-group">
													<button class="modal-open-btn">Agregar dirección</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade container" id="menu3">
					<div class="outer-seccoltab-content">
						<div class="sec-content-headding">
							<h3>Mi billetera</h3>
							<p>Guarda los detalles de tu tarjeta de crédito y débito, para agilizar el proceso de checkout.</p>			
						</div>
						<div class="sec-content-body">
							<p>Aún no has guardado ninguna tarjeta</p>
							Guarda tus detalles de pago de forma segura, mientras realizas un pedido durante el checkout.
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="menu4" style="background-color: #191919">
					<div class="outer-seccoltab-content container" style="background-color: #fff">
						<div class="sec-content-headding">
							<h3>Mi billetera</h3>
							<p>Guarda los detalles de tu tarjeta de crédito y débito, para agilizar el proceso de checkout.</p>			
						</div>
						<div class="last-sec-body">
							<p>Email de inicio de sesión:</p>
							<p>jone.doe@gmail.com</p>
							<form>
								<div class="form-group form-group-sec">
									<div class="group-col">
										<label>Nombre</label>
										<input type="text" name="" placeholder="Jone">
									</div>
									<div class="group-col">
										<label>Apellido</label>
										<input type="text" name="" placeholder="Doe">
									</div>
								</div>
								<div class="form-group form-group-sec">
									<div class="group-col">
										<label>Email de contacto</label>
										<input type="text" name="" placeholder="jone.doe@gmail.com">
									</div>
									<div class="group-col">
										<label>Teléfono</label>
										<input type="text" name="">
									</div>
								</div>
								<div class="form-group">
									<input type="submit" class="submit-btn" value="Actualizar información">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
</section>
@endsection
@push('scripts')
<script type="text/javascript">

</script>
@endpush


