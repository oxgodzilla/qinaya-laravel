<!-- modal start -->
<div class="modal" id="cart-sidebar">
	<div class="modal-dialog modal-md">
		<div class="modal-content pr-page-modal">
			<div class="sidbar-remove">
				<button type="button" class="close" data-dismiss="modal">></button>
				<h3>Carrito</h3>
			</div>
			<div class="modalinner-content">
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
				</div>
				<div class="cart-page-button">
					<a href="{{ route('cart') }}" class="submit-btn">View Cart</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal end -->