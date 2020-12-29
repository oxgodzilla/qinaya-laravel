@extends('layouts.app')

@section('content')
<section class="container">
	<div class="checkout-page-outer">
		<div class="payment-col">
			<div class="sesion-combo">
				<span>Iniciaste sesión como murtaza.tophat@gmail.com</span>
				<button data-toggle="modal" data-target="#myModal">Cerrar sesión</button>

				<div class="modal fade show" id="myModal">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-remove">
								<button type="button" class="close" data-dismiss="modal">&times</button>
							</div>
							<div class="modalinner-content">
								<h3>¿Cerrar la sesión del sitio?</h3>
								<p>Tu información y artículos, estarán disponibles cuando vuelvas a iniciar tu sesión con murtaza.tophat@gmail.com.</p>
								<div class="modal-btn">
									<button class="close-btn" data-dismiss="modal">Volver al checkout</button>
									<button class="success-btn">Cerrar sesión</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-detail-outer">
				<h3>1 Pago</h3>
				<div class="sesion-combo">
					<p><svg width='17' height='17'><g fill='none' fill-rule='evenodd'><path fill='#121212' d='M-30-30h510v78H-30z' opacity='.05'/><g transform='rotate(-180 8 8)'><circle cx='7.5' cy='7.5' r='8' stroke='#EF5B53'/><path fill='#F15347' d='M7 7h1v4H7z'/><path fill='#F05F55' d='M7 4h1v1H7z'/></g></g></svg> <span>We are experiencing some technical difficulties, and can't accept your payment right now. Please try again in a little while.</span></p>
				</div>
				<div class="sesion-combo sesion-combo-success">
					<p><svg width='12px' height='15px' viewBox='0 0 12 15' version='1.1'> <g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'> <g id='Group' fill='#5CBC1D'> <g id='lock-icon'> <path d='M0,14.0024554 C0,14.553384 0.455760956,15 1.00247329,15 L10.9975267,15 C11.5511774,15 12,14.5536886 12,14.0024554 L12,6.99754465 C12,6.44661595 11.544239,6 10.9975267,6 L1.00247329,6 C0.448822582,6 0,6.4463114 0,6.99754465 L0,14.0024554 Z' id='Stroke-1'></path> <path d='M10.5,6 L10.5,4.84497078 C10.5,2.44138697 8.48089423,0.5 6,0.5 C3.51910577,0.5 1.5,2.44138697 1.5,4.84497078 L1.5,6 L2.5,6 L2.5,4.84497078 C2.5,3.00264441 4.0627992,1.5 6,1.5 C7.9372008,1.5 9.5,3.00264441 9.5,4.84497078 L9.5,6 L10.5,6 Z' id='Stroke-3' fill-rule='nonzero'></path> </g> </g> </g> </svg> <span>Tu pago y tus datos personales están encriptados y seguros.</span></p>
				</div>
				<div class="payment-methodOuter">
					<label class="form-check">
						<div class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio" checked="">Tarjetas de crédito/débito
							<i></i>
						</div>
						<div class="credit-img">
							<div class="img-col">
								<img src="assets/img/mastercard-icon.svg">
							</div>
							<div class="img-col">
								<img src="assets/img/visa-icon.svg">
							</div>
							<div class="img-col">
								<img src="assets/img/amex-icon.svg">
							</div>
							<div class="img-col">
								<img src="assets/img/maestro-icon.svg">
							</div>
						</div>
					</label>
					<label class="form-check">
						<div class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio">Pago manual
							<i></i>
						</div>
						<div class="credit-img">
							<div class="img-col">
								<img src="assets/img/offline-icon.svg">
							</div>
						</div>
					</label>							

				</div>

				<h6>Dirección de facturación</h6>
				<form>
					<div class="form-group">
						<label>*Nombre</label>
						<input type="text" name="">
					</div>
					<div class="form-group">
						<label>*Apellido</label>
						<input type="text" name="">
					</div>
					<div class="form-group">
						<label>*Dirección</label>
						<input type="text" name="">
					</div>
					<div class="form-group">
						<label>*Ciudad</label>
						<input type="text" name="">
					</div>
					<div class="form-group form-group-sec">
						<div class="group-col">
							<label>*País</label>
							<select>
								<option>India</option>
							</select>
						</div>
						<div class="group-col">
							<label>*Región</label>
							<select>
								<option>Maharashtra</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-sec">
						<div class="group-col">
							<label>*Código postal</label>
							<input type="text" name="">
						</div>
						<div class="group-col">
							<label>*Teléfono</label>
							<input type="text" name="">
						</div>
					</div>
					<div class="form-group">
						<input type="submit" class="submit-btn" value="Continuar">
					</div>
				</form>
			</div>
			<div class="page-detail-outer">
				<h3>2 Revisar y realizar pedido</h3>
			</div>
		</div>

		<div class="checkout-details-outer">
			<div class="checkout-details">
				<h3><span>Resumen del pedido (1)</span><span><a href="#">Editar carrito</a></span></h3>
				<div class="product-col">
					<div class="product-img">
						<a href="#"><img src="assets/img/product-img.png"></a>
					</div>
					<div class="product-info">
						<h6>Plan Diario</h6>
						<p>$5.000,00</p>
					</div>
					<div class="product-price">
						<p>$5.000,00</p>
					</div>
				</div>
				<div class="ssl-secure">
					<p><svg viewBox="0 0 14 16" fill="currentColor" width="14" height="16" class="_3IcIh"><g id="final-cart" stroke="none" fill="none" stroke-width="1" fill-rule="evenodd"><g id="general-layout" transform="translate(-515 -839)" fill="currentColor"><g id="coupon-icon" transform="rotate(30 -1300.653 1393.349)"><path d="M1,14.0046024 C0.999339408,13.9996515 9.00460243,14 9.00460243,14 C8.99965149,14.0006606 9,5.41421356 9,5.41421356 L5,1.41421356 L1,5.41421356 L1,14.0046024 Z M-2.72848411e-12,5 L5,-4.66116035e-12 L10,5 L10,14.0046024 C10,14.5543453 9.5443356,15 9.00460243,15 L0.995397568,15 C0.445654671,15 -2.72848411e-12,14.5443356 -2.72848411e-12,14.0046024 L-2.72848411e-12,5 Z" id="Rectangle-6" fill-rule="nonzero"></path><circle id="Oval-2" cx="5" cy="5" r="1"></circle></g></g></g></svg> Ingresar código promocional</p>

				</div>
				<div class="price-table">
					<table>
						<tr>
							<td class="item">Artículos</td>
							<td class="price">$5.000,00</td>
						</tr>
						<tr>
							<td class="item">IVA</td>
							<td class="price">$0,00</td>
						</tr>
						<tr class="total">
							<td class="item">Total</td>
							<td class="price">$5.000,00</td>
						</tr>
					</table>
				</div>
			</div>
			<img class="mt-4" src="assets/img/ssl-secure.png">
		</div>
	</div>
</section>
@endsection


