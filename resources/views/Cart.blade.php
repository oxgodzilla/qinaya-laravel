@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="checkOut-outer first-step">
			<div class="leftSide-form">
				<h3>Mi carrito</h3>
				<div class="product-col">
					<div class="product-img">
						<a href="#"><img src="assets/img/product-img.png"></a>
					</div>
					<div class="product-info">
						<h6>Plan Diario</h6>
						<p>$5.000,00</p>
						<div class="price-count">
							<i class="fa fa-minus btn"></i> <input type="number" placeholder="1"> <i class="fa fa-plus btn"></i>
						</div>
					</div>
					<div class="product-price">
						<p>$5.000,00</p>
						<p><i class="fas fa-times btn"></i></p>
					</div>
				</div>
				<div class="ssl-secure">
					<p><svg viewBox="0 0 14 16" fill="currentColor" width="14" height="16" class="_3IcIh"><g id="final-cart" stroke="none" fill="none" stroke-width="1" fill-rule="evenodd"><g id="general-layout" transform="translate(-515 -839)" fill="currentColor"><g id="coupon-icon" transform="rotate(30 -1300.653 1393.349)"><path d="M1,14.0046024 C0.999339408,13.9996515 9.00460243,14 9.00460243,14 C8.99965149,14.0006606 9,5.41421356 9,5.41421356 L5,1.41421356 L1,5.41421356 L1,14.0046024 Z M-2.72848411e-12,5 L5,-4.66116035e-12 L10,5 L10,14.0046024 C10,14.5543453 9.5443356,15 9.00460243,15 L0.995397568,15 C0.445654671,15 -2.72848411e-12,14.5443356 -2.72848411e-12,14.0046024 L-2.72848411e-12,5 Z" id="Rectangle-6" fill-rule="nonzero"></path><circle id="Oval-2" cx="5" cy="5" r="1"></circle></g></g></g></svg> Ingresar código promocional</p>
					<img src="assets/img/ssl-secure.png">
				</div>
			</div>
			<div class="leftSide-form rightSide-form">
				<h3>Resumen del pedido</h3>
				<div class="product-col">
					<div class="total-price">
						<p>Subtotal</p>
						<p>$5.000,00</p>
						<p class="subtotal-info"><span>Impuesto incluido</span></p>
						<a href="checkout.html" class="btn btn-primary">
							<svg viewBox="0 0 11 14" fill="currentColor" width="11" height="14"><g id="Page-1" stroke="none" fill="none" stroke-width="1" fill-rule="evenodd"><g id="Group" fill="currentColor"><path d="M0,12.7905281 C0,13.348044 0.444836974,13.8 0.995577499,13.8 L10.0044225,13.8 C10.5542648,13.8 11,13.3515084 11,12.7905281 L11,6.00947189 C11,5.45195596 10.555163,5 10.0044225,5 L0.995577499,5 C0.445735229,5 0,5.44849157 0,6.00947189 L0,12.7905281 Z" id="Stroke-1"></path><path d="M9.5,5 L9.5,4.07597662 C9.5,2.08610548 7.69574843,0.5 5.5,0.5 C3.30425157,0.5 1.5,2.08610548 1.5,4.07597662 L1.5,5 L2.5,5 L2.5,4.07597662 C2.5,2.66911962 3.82991528,1.5 5.5,1.5 C7.17008472,1.5 8.5,2.66911962 8.5,4.07597662 L8.5,5 L9.5,5 Z" id="Stroke-3" fill-rule="nonzero"></path></g></g></svg> Finalizer la compra</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection


