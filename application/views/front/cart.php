<!DOCTYPE html>
<html lang="en">

<?php include_once('include/head.php'); ?>

<body>

	<!-- Loader Start -->
	<div class="fullpage-loader">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<!-- Loader End -->

	<!-- Header Start -->
	<?php include_once('include/header.php'); ?>
	<!-- Header End -->



	<!-- Breadcrumb Section Start -->
	<section class="breadscrumb-section pt-0">
		<div class="container-fluid-lg">
			<div class="row">
				<div class="col-12">
					<div class="breadscrumb-contain">
						<h2>Cart</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.html">
										<i class="fa-solid fa-house"></i>
									</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Cart</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Section End -->

	<!-- Cart Section Start -->
	<section class="cart-section section-b-space">
		<div class="container-fluid-lg">
			<div class="row g-sm-5 g-3">
				<div class="col-xxl-9">
					<div class="cart-table">
						<div class="table-responsive-xl">
							<table class="table">
								<tbody>
									<?php    foreach($product as $product){    ?>
									<tr class="product-box-contain">
										<td class="product-detail">
											<div class="product border-0">
												<a href="<?= base_url() ?>product-thumbnail/<?= $product['pid'] ?>"
													class="product-image">
													<img src="<?= base_url() ?>uploads/product_thumb_image/<?= $product['thumbnail_image'] ?>"
														class="img-fluid blur-up lazyload" alt="">
												</a>
												<div class="product-detail">
													<ul>
														<li class="name">
															<a
																href="<?= base_url() ?>product-thumbnail/<?= $product['pid'] ?>"><?= $product['product_name'] ?></a>
														</li>

														<li class="text-content"><span class="text-title" style="font-size:12px"><?php
														if($product['shipping'] == 'Shipping Charges'){
															echo '<i class="fa fa-inr"></i>';
															echo '<span class="shipingcharge">'.$product['shippingcharge'].'</span>';
														}else{
															echo 'Free Delivery';
														}
														?>
															</span> </li>

														<li class="text-content"><span class="text-title"></span> </li>

														<!-- <li>
															<h5 class="text-content d-inline-block">Price :</h5>
															<span><i
																	class="fa fa-inr"></i><span class="pricejs"><?= $product['rate'] ?></span></span>
															<span class="text-content"><i
																	class="fa fa-inr"></i><?= $product['price'] ?></span>
														</li> -->

														<!-- <li>
															<h5 class="saving theme-color">Saving : <i
																	class="fa fa-inr"></i><?= $product['disPrice'] ?>
															</h5>
														</li> -->

														<!-- <li class="quantity-price-box">
                                                             <div class="cart_qty">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn  minus"
                                                                        data-type="minus" data-field="">
                                                                        <i class="fa fa-minus ms-0" aria-hidden="true"></i>
                                                                    </button>
                                                                    <input class="form-control qtyvalue input-number qty-input" type="text"
                                                                        name="quantity" value="<?= $product['quantity'] ?>" data-cart-id="<?= $product['aid'] ?>">
                                                                    <button type="button" class="btn  plus"
                                                                        data-type="plus" data-field="">
                                                                        <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
														</li> -->

														<!-- <li>
															<h5>Total: <i class="fa fa-inr"></i><span class="subtotaljs"><?= $product['rate'] * $product['quantity'] ?></span></h5>
														</li> -->
													</ul>
												</div>
											</div>
										</td>

										<td class="price">
											<h4 class="table-title text-content">Price</h4>
											<h5><i class="fa fa-inr"></i><span
													class="pricejs"><?= $product['rate'] ?></span>
												<del class="text-content"><i
														class="fa fa-inr"></i><?= $product['price'] ?></del></h5>
											<h6 class="theme-color">You Save : <i
													class="fa fa-inr"></i><?= $product['disPrice'] ?></h6>
										</td>

										<td class="quantity">
											<h4 class="table-title text-content">Qty</h4>
											<div class="quantity-price">
												<div class="cart_qty">
													<div class="input-group">
														<button type="button" class="btn  minus" data-type="minus"
															data-field="">
															<i class="fa fa-minus ms-0" aria-hidden="true"></i>
														</button>
														<input class="form-control qtyvalue input-number qty-input"
															type="text" name="quantity"
															value="<?= $product['quantity'] ?>"
															data-cart-id="<?= $product['aid'] ?>">
														<button type="button" class="btn  plus" data-type="plus"
															data-field="">
															<i class="fa fa-plus ms-0" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
										</td>

										<td class="subtotal">
											<h4 class="table-title text-content">Total</h4>
											<h5 id="subtotal"><i class="fa fa-inr"></i><span
													class="subtotaljs"><?= $product['rate'] * $product['quantity'] ?></span>
											</h5>
										</td>

										<td class="subtotal">
											<h4 class="table-title text-content">Total PV</h4>
											<h5 id="subtotal"><span
													class="prpv"><?= $product['pv'] ?? 0; ?></span>
											</h5>
										</td>

										<td class="subtotal">
											<h4 class="table-title text-content">Total BV</h4>
											<h5 id="subtotal"><span
													class="prbv"><?= $product['bv'] ?? 0;?></span>
											</h5>
										</td>

										<td class="save-remove">
											<h4 class="table-title text-content">Action</h4>
											<a class="remove close_button remove-from-cart-button"
												href="javascript:void(0)" data-cart-id="<?= $product['aid'] ?>"
												data-userid="123"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-xxl-3">
					<div class="summery-box p-sticky">
						<div class="summery-header">
							<h3>Cart Total</h3>
						</div>

						<div class="summery-contain">
							<div class="coupon-cart">
								<h6 class="text-content mb-2">Coupon Apply</h6>
								<div class="mb-3 coupon-box input-group">
									<input type="email" class="form-control" id="exampleFormControlInput1"
										placeholder="Enter Coupon Code Here...">
									<button class="btn-apply">Apply</button>
								</div>
							</div>
							<ul>
								<li>
									<h4>Subtotal</h4>
									<h4 class="price"><i class="fa fa-inr"></i><span class="result totamtpay"></span></h4>
								</li>

								<li>
									<h4>Coupon Discount</h4>
									<h4 class="price">(-) <span class="coupondis">0.00</span></h4>
								</li>

								<li>
									<h4>Total PV</h4>
									<h4 class="price"> <span class="tpv">0.00</span></h4>
								</li>

								<li>
									<h4>Total BV</h4>
									<h4 class="price"> <span class="tbv">0.00</span></h4>
								</li>

								<li class="align-items-start">
									<h4>Shipping</h4>
									<h4 class="price text-end"><i class="fa fa-inr"></i><span class="totalship totamtpay"></span></h4>
								</li>
							</ul>
						</div>

						<ul class="summery-total">
							<li class="list-total border-top-0">
								<h4>Total (USD)</h4>
								<h4 class="price theme-color"><i class="fa fa-inr"></i> <span class="totalsubtoatl"></span></h4>
							</li>
						</ul>

						<div class="button-group cart-button">
							<ul>
								<li>
									<button onclick="location.href = '<?= base_url('checkout') ?>';"
										class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
								</li>

								<li>
									<button onclick="location.href = 'index.html';"
										class="btn btn-light shopping-button text-dark">
										<i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Cart Section End -->

	<!-- Footer Section Start -->
	<?php include_once('include/footer.php'); ?>
	<!-- Footer Section End -->

	<!-- Location Modal Start -->
	<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
					<p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="location-list">
						<div class="search-input">
							<input type="search" class="form-control" placeholder="Search Your Area">
							<i class="fa-solid fa-magnifying-glass"></i>
						</div>

						<div class="disabled-box">
							<h6>Select a Location</h6>
						</div>

						<ul class="location-select custom-height">
							<li>
								<a href="javascript:void(0)">
									<h6>Alabama</h6>
									<span>Min: $130</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Arizona</h6>
									<span>Min: $150</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>California</h6>
									<span>Min: $110</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Colorado</h6>
									<span>Min: $140</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Florida</h6>
									<span>Min: $160</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Georgia</h6>
									<span>Min: $120</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Kansas</h6>
									<span>Min: $170</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Minnesota</h6>
									<span>Min: $120</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>New York</h6>
									<span>Min: $110</span>
								</a>
							</li>

							<li>
								<a href="javascript:void(0)">
									<h6>Washington</h6>
									<span>Min: $130</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Location Modal End -->

	<!-- Deal Box Modal Start -->
	<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
			<div class="modal-content">
				<div class="modal-header">
					<div>
						<h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
						<p class="mt-1 text-content">Recommended deals for you.</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="deal-offer-box">
						<ul class="deal-offer-list">
							<li class="list-1">
								<div class="deal-offer-contain">
									<a href="shop-left-sidebar.html" class="deal-image">
										<img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
											alt="">
									</a>

									<a href="shop-left-sidebar.html" class="deal-contain">
										<h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
										<h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
									</a>
								</div>
							</li>

							<li class="list-2">
								<div class="deal-offer-contain">
									<a href="shop-left-sidebar.html" class="deal-image">
										<img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
											alt="">
									</a>

									<a href="shop-left-sidebar.html" class="deal-contain">
										<h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
										<h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
									</a>
								</div>
							</li>

							<li class="list-3">
								<div class="deal-offer-contain">
									<a href="shop-left-sidebar.html" class="deal-image">
										<img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
											alt="">
									</a>

									<a href="shop-left-sidebar.html" class="deal-contain">
										<h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
										<h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
									</a>
								</div>
							</li>

							<li class="list-1">
								<div class="deal-offer-contain">
									<a href="shop-left-sidebar.html" class="deal-image">
										<img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
											alt="">
									</a>

									<a href="shop-left-sidebar.html" class="deal-contain">
										<h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
										<h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Deal Box Modal End -->

	<!-- Tap to top start -->
	<div class="theme-option">
		<div class="setting-box">
			<button class="btn setting-button">
				<i class="fa-solid fa-gear"></i>
			</button>

			<div class="theme-setting-2">
				<div class="theme-box">
					<ul>
						<li>
							<div class="setting-name">
								<h4>Color</h4>
							</div>
							<div class="theme-setting-button color-picker">
								<form class="form-control">
									<label for="colorPick" class="form-label mb-0">Theme Color</label>
									<input type="color" class="form-control form-control-color" id="colorPick"
										value="#0da487" title="Choose your color">
								</form>
							</div>
						</li>

						<li>
							<div class="setting-name">
								<h4>Dark</h4>
							</div>
							<div class="theme-setting-button">
								<button class="btn btn-2 outline" id="darkButton">Dark</button>
								<button class="btn btn-2 unline" id="lightButton">Light</button>
							</div>
						</li>

						<li>
							<div class="setting-name">
								<h4>RTL</h4>
							</div>
							<div class="theme-setting-button rtl">
								<button class="btn btn-2 rtl-unline">LTR</button>
								<button class="btn btn-2 rtl-outline">RTL</button>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="back-to-top">
			<a id="back-to-top" href="#">
				<i class="fas fa-chevron-up"></i>
			</a>
		</div>
	</div>
	<!-- Tap to top end -->

	<?php include_once('include/foot.php'); ?>
	<script>
		
		function fulltotal(){
			let subtotalElement = $('.result.totamtpay');
			let couponDiscountElement = $('.coupondis');
			let shippingChargeElement = $('.totalship.totamtpay');

			// Get the values from the elements and convert them to numbers
			let subtotal = parseFloat(subtotalElement.text());
			let couponDiscount = parseFloat(couponDiscountElement.text());
			let shippingCharge = parseFloat(shippingChargeElement.text());

			// Calculate the new total by subtracting the coupon discount and adding the shipping charge
			let total = subtotal - couponDiscount + shippingCharge;

			// Display the new total in the appropriate element
			$('.totalsubtoatl').text(total.toFixed(2));

		}
        let sum = 0, sumship = 0, sumpv = 0, sumbv = 0;

        $(window).on("load", function () {
			$('.subtotaljs').each(function () {
				let amt = $(this).text();
				sum += parseInt(amt);
			});
			$('.result').text(sum);

			$('.shipingcharge').each(function(){
				let shipcharg = $(this).text();
				sumship += parseInt(shipcharg);
			});
			$('.totalship').text(sumship);

			$('.prpv').each(function(){
				let amt = $(this).text();
				sumpv += parseInt(amt);
			});
			$('.tpv').text(sumpv);

			$('.prbv').each(function(){
				let amt = $(this).text();
				sumbv += parseInt(amt);
			});
			$('.tbv').text(sumbv);

			fulltotal();
			
        });

        $(document).ready(function () {
        $('.plus').click(function (e) {
            e.preventDefault();
            var $input = $(this).siblings(':text');
            var currentValue = parseInt($input.val());
            var newValue = currentValue + 1;
            $input.val(newValue).change();
        });

        $('.minus').click(function (e) {
            e.preventDefault();
            var $input = $(this).siblings(':text');
            var currentValue = parseInt($input.val());
            var newValue = currentValue - 1 >= 1 ? currentValue - 1 : 1;
            $input.val(newValue).change();
        });

        $(document).on('change', '.qtyvalue', function () {
            let $tr = $(this).closest('tr');
            let pricejs = $tr.find('.pricejs').text();
            let total = pricejs * $(this).val();
            $tr.find('.subtotaljs').text(total);
            var quantity = $(this).val();
            var cartId = $(this).data('cart-id');

            if ($(this).val() != '0') {
            updateSubtotal(cartId, quantity);
            updateTotal();
            }
			fulltotal();
        });

        function updateTotal() {
            sum = 0;
            $('.subtotaljs').each(function () {
            let amt = $(this).text();
            sum += parseInt(amt);
            });
            $('.result').text(sum);
        }

        function updateSubtotal(cartId, quantity) {
            $.ajax({
            url: '<?php echo base_url('ajax/updateSubtotal '); ?>',
            method: 'POST',
            data: {
                cart: cartId,
                quantity: quantity
            },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                console.log('success');
                }
            },
            error: function () {
                console.log('An error occurred during the AJAX request.');
            }
            });
        }

        });

	</script>
</body>

</html>
