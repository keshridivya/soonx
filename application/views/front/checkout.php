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
						<h2>Checkout</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="index.html">
										<i class="fa-solid fa-house"></i>
									</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Checkout</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Section End -->

	<!-- Checkout section Start -->
	<section class="checkout-section-2 section-b-space">
		<div class="container-fluid-lg">
			<div class="row g-sm-4 g-3">
				<div class="col-lg-8">
					<div class="left-sidebar-checkout">
						<div class="checkout-detail-box">
							<ul>
								<li>
									<div class="checkout-icon">
										<lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
											trigger="loop-on-hover"
											colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
											class="lord-icon">
										</lord-icon>
									</div>
									<div class="checkout-box">
										<div class="checkout-title">
											<h4>Delivery Address</h4>
											<div class=""><button class="btn theme-bg-color btn-md text-white"
													data-bs-toggle="modal" data-bs-target="#add-address">Add
													Address</button></div>
										</div>

										<div class="checkout-detail">
											<div class="row g-4">
												<?php
                                                foreach($delivery_address as $da){
                                                ?>
												<div class="col-xxl-6 col-lg-12 col-md-6">
													<div class="delivery-address-box">
														<div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="jack"
																	id="<?= $da['id'] ?>" checked="checked">
															</div>

															<div class="label dropdown">
																<label type="button" id="dropdownMenuButton1"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fa fa-bars" aria-hidden="true"></i>
																</label>
																<ul class="dropdown-menu dropaddress"
																	aria-labelledby="dropdownMenuButton1">
																	<li>
																		<a href="javascript:void(0)"
																			data-id="<?= $da['id'] ?>"
																			data-name="<?= $da['name'] ?>"
																			data-address="<?= $da['address'] ?>"
																			data-email="<?= $da['emailid'] ?>"
																			data-mobile="<?= $da['mobile'] ?>"
																			data-landmark="<?= $da['landmark'] ?>"
																			data-pincode="<?= $da['pincode'] ?>"
																			class="editaddress" style="cursor:pointer">
																			<i class="fa fa-pencil"></i> Edit</a>
																	</li>
																	<li><a href="javascript:void(0)" id="delete"
																			class="delete-button"
																			data-row="<?= $da['id'] ?>"><i
																				class="fa fa-trash"></i>
																			Delete</a></li>
																</ul>


															</div>


															<ul class="delivery-address-detail">
																<li>
																	<h4 class="fw-500"><?= $da['name'] ?></h4>
																</li>

																<li>
																	<p class="text-content"><span
																			class="text-title">Address
																			: </span><?= $da['address'] ?></p>
																</li>

																<li>
																	<p class="text-content"><span
																			class="text-title">Landmark
																			: </span><?= $da['landmark'] ?></p>
																</li>

																<li>
																	<h6 class="text-content"><span
																			class="text-title">Pin Code
																			:</span> <?= $da['pincode'] ?></h6>
																</li>

																<li>
																	<h6 class="text-content mb-0"><span
																			class="text-title">Phone
																			:</span> <?= $da['mobile'] ?></h6>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<?php } ?>

											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="checkout-icon">
										<lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
											trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
										</lord-icon>
									</div>
									<div class="checkout-box">
										<div class="checkout-title">
											<h4>Delivery Option</h4>
										</div>

										<div class="checkout-detail">
											<div class="row g-4">
												<div class="col-xxl-6">
													<div class="delivery-option">
														<div class="delivery-category">
															<div class="shipment-detail">
																<div
																	class="form-check custom-form-check hide-check-box">
																	<input class="form-check-input" type="radio"
																		name="standard" id="standard" checked="">
																	<label class="form-check-label"
																		for="standard">Standard
																		Delivery Option</label>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xxl-6">
													<div class="delivery-option">
														<div class="delivery-category">
															<div class="shipment-detail">
																<div
																	class="form-check mb-0 custom-form-check show-box-checked">
																	<input class="form-check-input" type="radio"
																		name="standard" id="future">
																	<label class="form-check-label" for="future">Future
																		Delivery Option</label>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-12 future-box">
													<div class="future-option">
														<div class="row g-md-0 gy-4">
															<div class="col-md-6">
																<div class="delivery-items">
																	<div>
																		<h5 class="items text-content"><span>3
																				Items</span>@
																			$693.48</h5>
																		<h5 class="charge text-content">Delivery Charge
																			$34.67
																			<button type="button" class="btn p-0"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top"
																				title="Extra Charge">
																				<i
																					class="fa-solid fa-circle-exclamation"></i>
																			</button>
																		</h5>
																	</div>
																</div>
															</div>

															<div class="col-md-6">
																<form
																	class="form-floating theme-form-floating date-box">
																	<input type="date" class="form-control">
																	<label>Select Date</label>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li>
									<div class="checkout-icon">
										<lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
											trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
											class="lord-icon">
										</lord-icon>
									</div>
									<div class="checkout-box">
										<div class="checkout-title">
											<h4>Payment Option</h4>
										</div>

										<div class="checkout-detail">
											<div class="row">
												<div class="col-xxl-6 mb-4">
													<div class="delivery-option">
														<div class="delivery-category">
															<div class="shipment-detail">
																<div
																	class="form-check mb-0 custom-form-check show-box-checked">
																	<input class="form-check-input" type="checkbox"
																		name="wallet" id="wallet">
																	<label class="form-check-label" for="wallet">Use
																		Wallet</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion accordion-flush custom-accordion"
												id="accordionFlushExample">
												<div class="accordion-item">
													<div class="accordion-header" id="flush-headingFour">
														<div class="accordion-button collapsed"
															data-bs-toggle="collapse"
															data-bs-target="#flush-collapseFour">
															<div class="custom-form-check form-check mb-0">
																<label class="form-check-label" for="cash"><input
																		class="form-check-input mt-0" type="radio"
																		name="flexRadioDefault" id="cash" checked="">
																	Cash
																	On Delivery</label>
															</div>
														</div>
													</div>
													<div id="flush-collapseFour"
														class="accordion-collapse collapse show"
														data-bs-parent="#accordionFlushExample">
														<div class="accordion-body">
															<p class="cod-review">Pay digitally with SMS Pay
																Link. Cash may not be accepted in COVID restricted
																areas. <a href="javascript:void(0)">Know more.</a>
															</p>
														</div>
													</div>
												</div>

												<div class="accordion-item">
													<div class="accordion-header" id="flush-headingOne">
														<div class="accordion-button collapsed"
															data-bs-toggle="collapse"
															data-bs-target="#flush-collapseOne">
															<div class="custom-form-check form-check mb-0">
																<label class="form-check-label" for="credit"><input
																		class="form-check-input mt-0" type="radio"
																		name="flexRadioDefault" id="credit">
																	Credit or Debit Card</label>
															</div>
														</div>
													</div>
													<div id="flush-collapseOne" class="accordion-collapse collapse"
														data-bs-parent="#accordionFlushExample">
														<div class="accordion-body">
															<div class="row g-2">
																<div class="col-12">
																	<div class="payment-method">
																		<div
																			class="form-floating mb-lg-3 mb-2 theme-form-floating">
																			<input type="text" class="form-control"
																				id="credit2"
																				placeholder="Enter Credit & Debit Card Number">
																			<label for="credit2">Enter Credit & Debit
																				Card Number</label>
																		</div>
																	</div>
																</div>

																<div class="col-xxl-4">
																	<div
																		class="form-floating mb-lg-3 mb-2 theme-form-floating">
																		<input type="text" class="form-control"
																			id="expiry" placeholder="Enter Expiry Date">
																		<label for="expiry">Expiry Date</label>
																	</div>
																</div>

																<div class="col-xxl-4">
																	<div
																		class="form-floating mb-lg-3 mb-2 theme-form-floating">
																		<input type="text" class="form-control" id="cvv"
																			placeholder="Enter CVV Number">
																		<label for="cvv">CVV Number</label>
																	</div>
																</div>

																<div class="col-xxl-4">
																	<div
																		class="form-floating mb-lg-3 mb-2 theme-form-floating">
																		<input type="password" class="form-control"
																			id="password" placeholder="Enter Password">
																		<label for="password">Password</label>
																	</div>
																</div>

																<div class="button-group mt-0">
																	<ul>
																		<li>
																			<button
																				class="btn btn-light shopping-button">Cancel</button>
																		</li>

																		<li>
																			<button class="btn btn-animation">Use This
																				Card</button>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="accordion-item">
													<div class="accordion-header" id="flush-headingTwo">
														<div class="accordion-button collapsed"
															data-bs-toggle="collapse"
															data-bs-target="#flush-collapseTwo">
															<div class="custom-form-check form-check mb-0">
																<label class="form-check-label" for="banking"><input
																		class="form-check-input mt-0" type="radio"
																		name="flexRadioDefault" id="banking">Net
																	Banking</label>
															</div>
														</div>
													</div>
													<div id="flush-collapseTwo" class="accordion-collapse collapse"
														data-bs-parent="#accordionFlushExample">
														<div class="accordion-body">
															<h5 class="text-uppercase mb-4">Select Your Bank
															</h5>
															<div class="row g-2">
																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank1">
																		<label class="form-check-label"
																			for="bank1">Industrial & Commercial
																			Bank</label>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank2">
																		<label class="form-check-label"
																			for="bank2">Agricultural Bank</label>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank3">
																		<label class="form-check-label" for="bank3">Bank
																			of America</label>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank4">
																		<label class="form-check-label"
																			for="bank4">Construction Bank Corp.</label>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank5">
																		<label class="form-check-label" for="bank5">HSBC
																			Holdings</label>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="custom-form-check form-check">
																		<input class="form-check-input mt-0"
																			type="radio" name="flexRadioDefault"
																			id="bank6">
																		<label class="form-check-label"
																			for="bank6">JPMorgan Chase & Co.</label>
																	</div>
																</div>

																<div class="col-12">
																	<div class="select-option">
																		<div class="form-floating theme-form-floating">
																			<select
																				class="form-select theme-form-select"
																				aria-label="Default select example">
																				<option value="hsbc">HSBC Holdings
																				</option>
																				<option value="loyds">Lloyds Banking
																					Group</option>
																				<option value="natwest">Nat West Group
																				</option>
																				<option value="Barclays">Barclays
																				</option>
																				<option value="other">Others Bank
																				</option>
																			</select>
																			<label>Select Other Bank</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!-- <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingThree">
                                                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="wallet"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="wallet">My
                                                                    Wallet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <h5 class="text-uppercase mb-4">Select Your Wallet
                                                            </h5>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <label class="form-check-label" for="amazon"><input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="amazon">Amazon Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="gpay">
                                                                        <label class="form-check-label" for="gpay">Google Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="airtel">
                                                                        <label class="form-check-label" for="airtel">Airtel Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="paytm">
                                                                        <label class="form-check-label" for="paytm">Paytm Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="jio">
                                                                        <label class="form-check-label" for="jio">JIO
                                                                            Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="free">
                                                                        <label class="form-check-label" for="free">Freecharge</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="right-side-summery-box">
						<div class="summery-box-2">
							<div class="summery-header">
								<h3>Order Summery</h3>
							</div>

							<ul class="summery-contain">
								<?php
                                foreach($cart_item as $cart_item){
                                ?>
								<li>
									<img src="<?= base_url() ?>uploads/product_thumb_image/<?= $cart_item['thumbnail_image'] ?>"
										class="img-fluid blur-up lazyloaded checkout-image" alt="">
									<h4><?= $cart_item['product_name'] ?> <span>X <?= $cart_item['quantity'] ?></span>
									</h4>
									<h4 class="price"><i class="<?= $currency->currency_icon ?>"></i><span class="subtotaljs"><?= intval($cart_item['rate'] * $cart_item['quantity']* $currency->currency_rate) ?></span>
									</h4>
									<?php
														if($cart_item['shipping'] == 'Shipping Charges'){
															echo '<span class="shipingcharge" style="display:none">'.$cart_item['shippingcharge'].'</span>';
														}
														?>
								</li>
								<?php } ?>

								<!-- <li>
                                    <img src="<?= base_url() ?>assets/images/vegetable/product/2.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Eggplant <span>X 3</span></h4>
                                    <h4 class="price">$12.23</h4>
                                </li>

                                <li>
                                    <img src="<?= base_url() ?>assets/images/vegetable/product/3.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Onion <span>X 2</span></h4>
                                    <h4 class="price">$18.27</h4>
                                </li>

                                <li>
                                    <img src="<?= base_url() ?>assets/images/vegetable/product/4.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Potato <span>X 1</span></h4>
                                    <h4 class="price">$26.90</h4>
                                </li>

                                <li>
                                    <img src="<?= base_url() ?>assets/images/vegetable/product/5.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Baby Chili <span>X 1</span></h4>
                                    <h4 class="price">$19.28</h4>
                                </li>

                                <li>
                                    <img src="<?= base_url() ?>assets/images/vegetable/product/6.png" class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Broccoli <span>X 2</span></h4>
                                    <h4 class="price">$29.69</h4>
                                </li> -->
							</ul>

							<ul class="summery-total">
								<li>
									<h4>Subtotal</h4>
									<h4 class="price"><i class="<?= $currency->currency_icon ?>"></i><span class="result totamtpay"></span>
									</h4>
								</li>

								<li>
									<h4>Shipping</h4>
									<h4 class="price"><i class="<?= $currency->currency_icon ?>"></i><span class="totalship totamtpay"></span>
									</h4>
								</li>

								<!-- <li>
                                    <h4>Tax</h4>
                                    <h4 class="price">$29.498</h4>
                                </li> -->

								<li>
									<h4>Coupon/Code</h4>
									<h4 class="price">(-) <span class="coupondis"><?= $_GET['couponcode'] ?></span></h4>
								</li>

								<li class="list-total">
									<h4>Total (USD)</h4>
									<h4 class="price"><i class="<?= $currency->currency_icon ?>"></i> <span class="totalsubtoatl"></span></h4>
								</li>
							</ul>
						</div>

						<div class="checkout-offer">
							<div class="offer-title">
								<div class="offer-icon">
									<img src="<?= base_url() ?>assets/images/inner-page/offer.svg" class="img-fluid"
										alt="">
								</div>
								<div class="offer-name">
									<h6>Available Offers</h6>
								</div>
							</div>

							<ul class="offer-detail">
								<li>
									<p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>
								</li>
								<li>
									<p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>
								</li>
							</ul>
						</div>

						<button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">Place Order</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Checkout section End -->

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

	<!-- Add address modal box start -->
	<div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Add a new address</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<form action="<?= base_url('shipaddress') ?>" method="post">
					<div class="modal-body">
						<div class="form-floating mb-4 theme-form-floating">
							<input type="hidden" name="userid" value="123">
							<input type="hidden" name="address_id" id="address_id" value="">
							<input type="text" class="form-control" id="client_name" placeholder="Enter Full Name"
								name="name">
							<label for="client_name">First Name</label>
							<span id="spanclient_name"> Enter Full Name</span>
						</div>

						<div class="form-floating mb-4 theme-form-floating">
							<input type="email" class="form-control" id="client_email" placeholder="Enter Email Address"
								name="emailid">
							<label for="client_email">Email Address</label>
							<span id="spanclient_email"> Enter Valid Email </span>
						</div>

						<div class="form-floating mb-4 theme-form-floating">
							<input type="text" class="form-control" id="client_contact"
								placeholder="Enter Mobile Number" name="mobnum">
							<label for="client_contact">Mobile Number</label>
							<span id="spanclient_contact"> Enter 10 digit Mobile Number</span>
						</div>

						<div class="form-floating mb-4 theme-form-floating">
							<textarea class="form-control" placeholder="Leave a comment here" id="client_address"
								style="height: 100px" name="address"></textarea>
							<label for="client_address">Enter Address</label>
							<span id="spanclient_address"> Enter Full Address</span>
						</div>

						<div class="form-floating mb-4 theme-form-floating">
							<textarea class="form-control" placeholder="Near by" id="client_landmark"
								style="height: 100px" name="landmark"></textarea>
							<label for="client_landmark">Landmark</label>
							<span id="spanclient_landmark"> Enter Near By Place</span>
						</div>

						<div class="form-floating mb-4 theme-form-floating">
							<input type="text" class="form-control" id="client_pincode" placeholder="Enter Pin Code"
								name="pin">
							<label for="client_pincode">Pin Code</label>
							<span id="spanclient_pincode">Enter 6 digit pincode</span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn theme-bg-color btn-md text-white" id="submit_address">Save
							changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add address modal box end -->

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
										<img src="<?= base_url() ?>assets/images/vegetable/product/10.png"
											class="blur-up lazyload" alt="">
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
										<img src="<?= base_url() ?>assets/images/vegetable/product/11.png"
											class="blur-up lazyload" alt="">
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
										<img src="<?= base_url() ?>assets/images/vegetable/product/12.png"
											class="blur-up lazyload" alt="">
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
										<img src="<?= base_url() ?>assets/images/vegetable/product/13.png"
											class="blur-up lazyload" alt="">
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

	<!--Delete-->
	<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header d-block text-center">
					<h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="remove-box">
						<p>Are you sure you want to delete this address?</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
					<button type="button" class="btn theme-bg-color btn-md text-white confirmDelete">Yes</button>
				</div>
			</div>
		</div>
	</div>
	<!--delete-->

	<?php include_once('include/foot.php'); ?>
	<script>
		$(document).ready(function () {
			// Add event listener to delete buttons
			$('.delete-button').click(function () {
				var rowId = $(this).data('row');
				showConfirmationModal(rowId);
			});

			function showConfirmationModal(rowId) {
				$('#exampleModalToggle').modal('show');

				$('.confirmDelete').click(function () {
					deleteTableRow(rowId);
					$('#exampleModalToggle').modal('hide');
				});
			}

			function deleteTableRow(rowId) {
				$.ajax({
					url: "<?php echo base_url('frontend/addressdelete'); ?>",
					type: "POST",
					data: {
						row_id: rowId
					},
					success: function (response) {
						if (response === "success") {
							// Remove the corresponding div
							$('#' + rowId).closest('.col-md-6').remove();
						} else {
							// Handle the deletion error
							console.log(response);
						}
					},
					error: function (xhr, status, error) {
						// Handle the AJAX error
						console.log(error);
					}
				});
			}
		});

	</script>
</body>

</html>
