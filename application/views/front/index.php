﻿<!DOCTYPE html>
<html lang="en">

<?php include_once('include/head.php'); 
$product = $product;
?>

<body class="theme-color-3 dark">

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

	<!-- mobile fix menu start -->


	<!-- Home Section Start -->
	<section class="home-section-2 home-section-bg pt-0 overflow-hidden">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-12">
					<div class="slider-animate">
						<?php
						foreach($banner as $banner){
						?>
						<div>
							<div class="home-contain rounded-0 p-0">
								<img src="<?= base_url() ?>uploads/banner/<?= $banner['banner_image']; ?>"
									class="img-fluid bg-img blur-up lazyload" alt="">
								<div class="home-detail home-big-space p-center-left home-overlay position-relative">
									<div class="container-fluid-lg">
										<div>
											<h6 class="ls-expanded theme-color text-uppercase">
											</h6>
											<h1 class="heding-2"></h1>
											
											<h5 class="text-content">
											</h5>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- <div>
							<div class="home-contain rounded-0 p-0">
								<img src="<?= base_url() ?>assets/images/grocery/banner/1.jpg"
									class="img-fluid bg-img blur-up lazyload" alt="">
								<div class="home-detail home-big-space p-center-left home-overlay position-relative">
									<div class="container-fluid-lg">
										<div>
											<h6 class="ls-expanded theme-color text-uppercase">Special offer
											</h6>
											<h1 class="heding-2">Dryfruits shopping made Easy</h1>

											
											<h5 class="text-content">Fresh & Top Quality Dry Fruits are available here!
											</h5>
											<button
												class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
												onclick="location.href = 'shop-left-sidebar.html';">Shop Now <i
													class="fa-solid fa-arrow-right icon"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home Section End -->

	<!-- Banner Section Start -->
	<section class="banner-section banner-small ratio_65">
		<div class="container-fluid-lg">
			<div class="slider-4-banner no-arrow slick-height">
                <?php
                foreach($offerslider as $offerslider){
                ?>
				<div>
					<div class=" banner-contain-3 hover-effect">
						<a href="javascript:void(0)">
							<img src="<?= base_url() ?>uploads/offer_slider/<?= $offerslider['slider_image'] ?>"
								class="bg-img blur-up lazyload" alt="">
						</a>
						<div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
							<div>
								<h5 class="fw-light mb-2"><?= $offerslider['for'] ?></h5>
								<h4 class="fw-bold mb-0"><?= $offerslider['slider_name'] ?></h4>
								<a href="<?= base_url('shop/'.$offerslider['category_slug'].'/'.$offerslider['id']) ?>"
									class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
										class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
                <?php } ?>

				<!-- <div>
					<div class="banner-contain-3 hover-effect">
						<a href="javascript:void(0)">
							<img src="<?= base_url() ?>assets/images/grocery/banner/3.jpg" class="img-fluid bg-img"
								alt="">
						</a>
						<div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
							<div>
								<h5 class="fw-light mb-2">Today Special</h5>
								<h4 class="fw-bold mb-0">Fruits Juice Series</h4>
								<button onclick="location.href = 'shop-left-sidebar.html';"
									class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
										class="fa-solid fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>

				<div>
					<div class="banner-contain-3 hover-effect">
						<a href="javascript:void(0)">
							<img src="<?= base_url() ?>assets/images/grocery/banner/4.jpg"
								class="blur-up lazyload bg-img" alt="">
						</a>
						<div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
							<div>
								<h5 class="fw-light mb-2">Combo Offer</h5>
								<h4 class="fw-bold mb-0">Eat Healthy Be Healthy </h4>
								<button onclick="location.href = 'shop-left-sidebar.html';"
									class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
										class="fa-solid fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div>

				<div>
					<div class="banner-contain-3 hover-effect">
						<a href="javascript:void(0)">
							<img src="<?= base_url() ?>assets/images/grocery/banner/5.jpg"
								class="blur-up lazyload bg-img" alt="">
						</a>
						<div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
							<div>
								<h5 class="fw-light mb-2">Amazing Deals</h5>
								<h4 class="fw-bold mb-0">As Fresh As Fruit </h4>
								<button onclick="location.href = 'shop-left-sidebar.html';"
									class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
										class="fa-solid fa-chevron-right"></i></button>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Category Section Start -->
	<section class="category-section-3">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Shop By Categories</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="category-slider-1 arrow-slider wow fadeInUp">
                    <?php    foreach($category as $category){    ?>
						<div>
							<div class="category-box-list">
								<a href="<?= base_url('shop/'.$category['category_slug'].'/'.$category['id']) ?>" class="category-name">
									<h4><?= $category['category_name'] ?></h4>
									<!-- <h6>25 items</h6> -->
								</a>
								<div class="category-box-view">
									<a href="<?= base_url('shop/'.$category['category_slug'].'/'.$category['id']) ?>">
										<img src="<?= base_url() ?>uploads/category_image/<?= $category['category_image']; ?>"
											class="img-fluid blur-up lazyload" alt="">
									</a>
									<a href="<?= base_url('shop/'.$category['category_slug'].'/'.$category['id']) ?>" class="btn shop-button">
										<span>Shop Now</span>
										<i class="fas fa-angle-right"></i>
                    </a>
								</div>
							</div>
						</div>
                        <?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category Section End -->

	<!-- Today's Deal Section Start -->
	<section class="product-section-3">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Today's Deal</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<?php    foreach($product as $product){    ?>
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<span class="heartspan" data-id="<?= $product['pid'] ?>">
										<?php
                                        if($product['whislist'] == '1'){
                                        ?>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="#239698" stroke="#239698" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round"
											class="feather feather-heart">
											<path
												d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
											</path>
										</svg>
										<?php }else{ ?>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="#239698" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round"
											class="feather feather-heart">
											<path
												d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
											</path>
										</svg>
										<?php } ?>
									</span>
									<a href="<?= base_url() ?>product-thumbnail/<?= $product['pid'] ?>">
										<img src="<?= base_url() ?>uploads/product_thumb_image/<?= $product['thumbnail_image'] ?>"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<!-- <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul> -->
								</div>

								<div class="product-detail">
								<ul class="rating">
									<li>
										<i data-feather="star" class="<?php echo ($product['rating'] >= 1) ? 'fill' : ''; ?>"></i>
									</li>
									<li>
										<i data-feather="star" class="<?php echo ($product['rating'] >= 2) ? 'fill' : ''; ?>"></i>
									</li>
									<li>
										<i data-feather="star" class="<?php echo ($product['rating'] >= 3) ? 'fill' : ''; ?>"></i>
									</li>
									<li>
										<i data-feather="star" class="<?php echo ($product['rating'] >= 4) ? 'fill' : ''; ?>"></i>
									</li>
									<li>
										<i data-feather="star" class="<?php echo ($product['rating'] >= 5) ? 'fill' : ''; ?>"></i>
									</li>
								</ul>

									<a href="<?= base_url() ?>product-thumbnail/<?= $product['pid'] ?>">
										<h5 class="name text-title"><?= $product['product_name'] ?></h5>
									</a>
									<h5 class="price theme-color"><i
											class="<?= $currency->currency_icon ?>"></i><?= number_format($product['rate'] * $currency->currency_rate) ?><del><i
											class="<?= $currency->currency_icon ?>"></i><?= number_format($product['price'] * $currency->currency_rate) ?></del></h5>

									<div class="addtocart_btn">
										<a href="<?= base_url() ?>product-thumbnail/<?= $product['pid'] ?>"
											class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</a>
										<!-- <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div> -->
									</div>
								</div>
							</div>
						</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Today's Deal Section End -->

	<!-- Banner Section Start -->
	<section class="bank-section overflow-hidden">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Bank & Wallet Offers</h2>
			</div>
			<div class="slider-bank-3 arrow-slider slick-height">
				<div>
					<div class="bank-offer">
						<div class="bank-header">
							<div class="bank-left w-100">
								<div class="bank-image">
									<img src="<?= base_url() ?>assets/images/grocery/bank/name/1.png" class="img-fluid"
										alt="">
								</div>
								<div class="bank-name">
									<h2>GET 10% OFF</h2>
									<h5 class="discount text-content">When you spend $20</h5>
									<h5 class="valid text-content">Valid for 30 days</h5>
								</div>
							</div>

							<div class="bank-right w-100">
								<img src="<?= base_url() ?>assets/images/grocery/bank/price/1.svg" class="img-fluid"
									alt="">
							</div>
						</div>

						<div class="bank-footer bank-footer-1">
							<h4>Code :
								<input id="clipboardexample" value="MULTICART">
							</h4>
							<button type="button" class="bank-coupon btn" id="copyText" data-clipboard-action="copy"
								data-clipboard-target="#clipboardexample">Copy Code</button>
						</div>
					</div>
				</div>

				<div>
					<div class="bank-offer">
						<div class="bank-header">
							<div class="bank-left w-100">
								<div class="bank-image">
									<img src="<?= base_url() ?>assets/images/grocery/bank/name/2.png" class="img-fluid"
										alt="">
								</div>
								<div class="bank-name">
									<h2 class="bank-offer-2">GET 10% OFF</h2>
									<h5 class="discount text-content">When you spend $20</h5>
									<h5 class="valid text-content">Valid for 30 days</h5>
								</div>
							</div>

							<div class="bank-right w-100">
								<img src="<?= base_url() ?>assets/images/grocery/bank/price/2.svg" class="img-fluid"
									alt="">
							</div>
						</div>

						<div class="bank-footer bank-footer-2">
							<h4>Code :
								<input id="clipboardexample1" value="MULTICART">
							</h4>
							<button class="bank-coupon btn" id="copyText1">Copy Code</button>
						</div>
					</div>
				</div>

				<div>
					<div class="bank-offer">
						<div class="bank-header">
							<div class="bank-left w-100">
								<div class="bank-image">
									<img src="<?= base_url() ?>assets/images/grocery/bank/name/3.png" class="img-fluid"
										alt="">
								</div>
								<div class="bank-name">
									<h2 class="bank-offer-3">GET 10% OFF</h2>
									<h5 class="discount text-content">When you spend $20</h5>
									<h5 class="valid text-content">Valid for 30 days</h5>
								</div>
							</div>

							<div class="bank-right w-100">
								<img src="<?= base_url() ?>assets/images/grocery/bank/price/3.svg" class="img-fluid"
									alt="">
							</div>
						</div>

						<div class="bank-footer bank-footer-3">
							<h4>Code :
								<input id="clipboardexample2" value="MULTICART">
							</h4>
							<button class="bank-coupon btn" id="copyText2">Copy Code</button>
						</div>
					</div>
				</div>

				<div>
					<div class="bank-offer">
						<div class="bank-header">
							<div class="bank-left w-100">
								<div class="bank-image">
									<img src="<?= base_url() ?>assets/images/grocery/bank/name/1.png" class="img-fluid"
										alt="">
								</div>
								<div class="bank-name">
									<h2>GET 10% OFF</h2>
									<h5 class="discount text-content">When you spend $20</h5>
									<h5 class="valid text-content">Valid for 30 days</h5>
								</div>
							</div>

							<div class="bank-right w-100">
								<img src="<?= base_url() ?>assets/images/grocery/bank/price/1.svg" class="img-fluid"
									alt="">
							</div>
						</div>

						<div class="bank-footer bank-footer-1">
							<h4>Code :
								<input id="clipboardexample3" value="MULTICART">
							</h4>
							<button class="bank-coupon btn" id="copyText3">Copy Code</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Deal Section Start -->
	<!-- <section class="product-section product-section-3">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Top Selling Items</h2>
			</div>
			<div class="row g-sm-4 g-3">
				<div class="col-xxl-4 col-lg-5 order-lg-2">
					<div class="product-bg-image wow fadeInUp">
						<div class="product-title product-warning">
							<h2>Special Offer</h2>
						</div>

						<div class="product-box-4 product-box-3 rounded-0">
							<div class="deal-box">
								<div class="circle-box">
									<div class="shape-circle">
										<img src="<?= base_url() ?>assets/images/grocery/circle.svg"
											class="blur-up lazyload" alt="">
										<div class="shape-text">
											<h6>Hot <br> Deal</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="top-selling-slider product-arrow">
								<div>
									<div class="product-image">
										<a href="product-left-thumbnail.html">
											<img src="<?= base_url() ?>assets/images/grocery/deal/big.png"
												class="img-fluid product-image blur-up lazyload" alt="">
										</a>

										<ul class="option">
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
												<a href="javascript:void(0)" data-bs-toggle="modal"
													data-bs-target="#view">
													<i class="iconly-Show icli"></i>
												</a>
											</li>
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
												<a href="javascript:void(0)" class="notifi-wishlist">
													<i class="iconly-Heart icli"></i>
												</a>
											</li>
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
												<a href="compare.html">
													<i class="iconly-Swap icli"></i>
												</a>
											</li>
										</ul>
									</div>

									<div class="product-detail text-center">
										<ul class="rating justify-content-center">
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star"></i>
											</li>
										</ul>
										<a href="product-left-thumbnail.html">
											<h3 class="name w-100 mx-auto text-center">Unisex Small Trolley Suitcase
											</h3>
										</a>
										<h3 class="price theme-color d-flex justify-content-center">
											$65.21<del class="delete-price">$71.25</del>
										</h3>
										<div class="progress custom-progressbar">
											<div class="progress-bar" style="width: 79%" role="progressbar"
												aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<h5 class="text-content">Solid : <span class="text-dark">30 items</span>
											<span class="ms-auto text-content">Hurry up offer end in</span></h5>

										<div class="timer timer-2 ms-0 my-4" id="clockdiv-1" data-hours="1"
											data-minutes="2" data-seconds="3">
											<ul class="d-flex justify-content-center">
												<li>
													<div class="counter">
														<div class="days">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="hours">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="minutes">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="seconds">
															<h6></h6>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div>
									<div class="product-image">
										<a href="product-left-thumbnail.html">
											<img src="<?= base_url() ?>assets/images/grocery/deal/big.png"
												class="img-fluid product-image blur-up lazyload" alt="">
										</a>

										<ul class="option">
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
												<a href="javascript:void(0)" data-bs-toggle="modal"
													data-bs-target="#view">
													<i class="iconly-Show icli"></i>
												</a>
											</li>
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
												<a href="javascript:void(0)" class="notifi-wishlist">
													<i class="iconly-Heart icli"></i>
												</a>
											</li>
											<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
												<a href="compare.html">
													<i class="iconly-Swap icli"></i>
												</a>
											</li>
										</ul>
									</div>

									<div class="product-detail text-center">
										<ul class="rating justify-content-center">
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star" class="fill"></i>
											</li>
											<li>
												<i data-feather="star"></i>
											</li>
										</ul>
										<a href="product-left-thumbnail.html">
											<h3 class="name w-100 mx-auto text-center text-title">Unisex Small Trolley
												Suitcase
											</h3>
										</a>
										<h3 class="price theme-color d-flex justify-content-center">
											$65.21<del class="delete-price">$71.25</del>
										</h3>
										<div class="progress custom-progressbar">
											<div class="progress-bar" style="width: 41%" role="progressbar"
												aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<h5 class="text-content">Solid : <span class="text-dark">30 items</span>
											<span class="ms-auto text-content">Hurry up offer end in</span></h5>

										<div class="timer timer-2 ms-0 my-4" id="clockdiv-2" data-hours="1"
											data-minutes="2" data-seconds="3">
											<ul class="d-flex justify-content-center">
												<li>
													<div class="counter">
														<div class="days">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="hours">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="minutes">
															<h6></h6>
														</div>
													</div>
												</li>
												<li>
													<div class="counter">
														<div class="seconds">
															<h6></h6>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xxl-12 col-lg-12 order-lg-1">
					<div class="slider-5_2 img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Potato Chips</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Body Lotion</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Nithara Coffee</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Cow Ghee</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Fresh Cilantro</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Sandwich Bread</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Popcorn</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Fresh Cilantro</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Fresh Eggs</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/deal/9.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Tomato Ketchup</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Deal Section End -->

	<!-- Offer Section Start -->
	<section class="offer-section">
		<div class="container-fluid-lg">
			<div class="row">
				<div class="col-12">
					<div class="offer-box hover-effect">
						<h2><span>FREE GIFT ANY ORDER</span> 70% oFF</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Offer Section End -->

	<!-- Product Breakfast & Dairy Section Start -->
	<section class="product-section-4">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Breakfast & Dairy</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Bell pepper</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Grassmilk</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Kellogg's choco </h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Paneer</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Bournvita</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Tulsi</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Kellogg's Muesli</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/breakfast/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Low Fat Milk</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Breakfast & Dairy Section End -->

	<!-- Product Chemist Store Section Start -->
	<section class="product-section">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Chemist Store</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Hand Sanitizer</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Cotton Balls</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Vicks VapoRub</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Dettol Antiseptic</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Ear Buds</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Eno Lemon</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Savlon Antiseptic</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/chemist/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Strawberry</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Chemist Store Section End -->

	<!-- Banner Section Start -->
	<!-- <section class="banner-section">
		<div class="container-fluid-lg">
			<div class="row gy-lg-0 gy-3">
				<div class="col-lg-6">
					<div class="banner-contain-3 hover-effect">
						<div>
							<img src="<?= base_url() ?>assets/images/grocery/banner/6.jpg"
								class="bg-img blur-up lazyload" alt="">
							<div
								class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
								<div>
									<h2 class="text-great fw-normal text-danger">50% special offer</h2>
									<h3 class="mb-1 fw-bold">Chocolate Shake Back in <br class="d-sm-block d-none">
										Stock
									</h3>
									<h4 class="text-content">Offer Of the Week!</h4>
									<button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
										onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="banner-contain-3 hover-effect">
						<img src="<?= base_url() ?>assets/images/grocery/banner/7.jpg" class="bg-img blur-up lazyload"
							alt="">
						<div
							class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
							<div>
								<h2 class="text-great fw-normal text-danger">Special hot sale</h2>
								<h3 class="mb-1 fw-bold">Healthy & Fresh Cool <br> Breakfast</h3>
								<h4 class="text-content">Choose a Nutritious & Healthy Breakfast.</h4>
								<button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
									onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Banner Section End -->

	<!-- Product Drinks Section Start -->
	<section class="product-section">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Drinks</h2>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Monster</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Red Bull</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Ginger ale</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Spike</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Mati Sparklng</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Fanta</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Coca Cola</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/drink/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Sprite</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Drinks Section End -->

	<!-- Product Grocery & Staples Section Start -->
	<section class="product-section">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Grocery & Staples</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Chakki Atta</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Fresh Rice</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Saffola oli</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Cow Ghee</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Icing Sugar</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Roasted Rava</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Maida</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/grocery/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">kabuli Chana</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Grocery & Staples Section End -->

	<!-- Banner Section Start -->
	<section class="banner-section">
		<div class="container-fluid-lg">
			<div class="row gy-lg-0 gy-3">
				<div class="col-lg-8">
					<div class="banner-contain-3 h-100 pt-sm-5 hover-effect">
						<img src="<?= base_url() ?>assets/images/grocery/banner/8.png" class="bg-img blur-up lazyload"
							alt="">
						<div
							class="banner-detail banner-p-sm p-center-right position-relative banner-minus-position banner-detail-deliver">
							<div>
								<h3 class="fw-bold banner-contain">Safe Delivery to the door</h3>
								<h4 class="mb-sm-3 mb-2 delivery-contain">Make money on your terms. Anytime and anyhow.
								</h4>
								<ul class="banner-list">
									<li>
										<div class="delivery-box">
											<div class="check-icon">
												<i class="fa-solid fa-check"></i>
											</div>

											<div class="check-contain">
												<h5>Get live order tracking</h5>
											</div>
										</div>
									</li>

									<li>
										<div class="delivery-box">
											<div class="check-icon">
												<i class="fa-solid fa-check"></i>
											</div>

											<div class="check-contain">
												<h5>Get latest feature updates</h5>
											</div>
										</div>
									</li>
								</ul>
								<button class="btn theme-bg-color text-white mt-sm-4 mt-3 fw-bold"
									onclick="location.href = 'shop-left-sidebar.html';">Read More</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="banner-contain-3 pt-lg-4 h-100 hover-effect">
						<a href="javascript:void(0)">
							<img src="<?= base_url() ?>assets/images/grocery/banner/9.jpg"
								class="img-fluid social-image blur-up lazyload w-100" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Product Personal Care Section Start -->
	<section class="product-section">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Personal Care</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Dove men care</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Santoor</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Hand Wash</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Whisper</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Whisper</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Hair Color</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Face Wash</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/personal-care/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Hair Oil</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Personal Care Section End -->

	<!-- Product Kitchen & Dining Needs Section Start -->
	<section class="product-section">
		<div class="container-fluid-lg">
			<div class="title">
				<h2>Kitchen & Dining Needs</h2>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="slider-7_1 arrow-slider img-slider">
						<div>
							<div class="product-box-4 wow fadeInUp">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/1.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Pressure Cooker</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/2.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Cup</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/3.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Blender</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/4.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Cutting Board</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/5.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Colander</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/6.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Utensils</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/7.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Jug</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
								<div class="product-image product-image-2">
									<a href="product-left-thumbnail.html">
										<img src="<?= base_url() ?>assets/images/grocery/product/kichen/8.png"
											class="img-fluid blur-up lazyload" alt="">
									</a>

									<ul class="option">
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
												<i class="iconly-Show icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
											<a href="javascript:void(0)" class="notifi-wishlist">
												<i class="iconly-Heart icli"></i>
											</a>
										</li>
										<li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
											<a href="compare.html">
												<i class="iconly-Swap icli"></i>
											</a>
										</li>
									</ul>
								</div>

								<div class="product-detail">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<a href="product-left-thumbnail.html">
										<h5 class="name text-title">Microwave</h5>
									</a>
									<h5 class="price theme-color">$65.21<del>$71.25</del></h5>
									<div class="addtocart_btn">
										<button class="add-button addcart-button btn buy-button text-light">
											<i class="fa-solid fa-plus"></i>
										</button>
										<div class="qty-box cart_qty">
											<div class="input-group">
												<button type="button" class="btn qty-left-minus" data-type="minus"
													data-field="">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
												<input class="form-control input-number qty-input" type="text"
													name="quantity" value="1">
												<button type="button" class="btn qty-right-plus" data-type="plus"
													data-field="">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Kitchen & Dining Needs Section End -->

	<!-- Blog Section Start -->
	<!-- <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title title-4">
                <h2>Blog</h2>
            </div>

            <div class="slider-3-blog arrow-slider slick-height">
                <div>
                    <div class=" blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="<?= base_url() ?>assets/images/grocery/blog/1.jpg" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="<?= base_url() ?>assets/images/grocery/blog/2.jpg" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Email Marketing</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="<?= base_url() ?>assets/images/grocery/blog/3.jpg" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="<?= base_url() ?>assets/images/grocery/blog/1.jpg" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="<?= base_url() ?>assets/images/grocery/blog/3.jpg" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
	<!-- Blog Section End -->

	<!-- Service Section Start -->
	<section class="service-section section-b-space">
		<div class="container-fluid-lg">
			<div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
				<div>
					<div class="service-contain-2">
						<svg class="icon-width">
							<use xlink:href="<?= base_url() ?>assets/svg/svg/service-icon-4.svg#shipping"></use>
						</svg>
						<div class="service-detail">
							<h3>Free Shipping</h3>
							<h6 class="text-content">Free Shipping world wide</h6>
						</div>
					</div>
				</div>
				<div>
					<div class="service-contain-2">
						<svg class="icon-width">
							<use xlink:href="<?= base_url() ?>assets/svg/svg/service-icon-4.svg#service"></use>
						</svg>
						<div class="service-detail">
							<h3>24 x 7 Service</h3>
							<h6 class="text-content">Online Service For 24 x 7</h6>
						</div>
					</div>
				</div>
				<div>
					<div class="service-contain-2">
						<svg class="icon-width">
							<use xlink:href="<?= base_url() ?>assets/svg/svg/service-icon-4.svg#pay"></use>
						</svg>
						<div class="service-detail">
							<h3>Online Pay</h3>
							<h6 class="text-content">Online Payment Avaible</h6>
						</div>
					</div>
				</div>
				<div>
					<div class="service-contain-2">
						<svg class="icon-width">
							<use xlink:href="<?= base_url() ?>assets/svg/svg/service-icon-4.svg#offer"></use>
						</svg>
						<div class="service-detail">
							<h3>Festival Offer</h3>
							<h6 class="text-content">Super Sale Upto 50% off</h6>
						</div>
					</div>
				</div>
				<div>
					<div class="service-contain-2">
						<svg class="icon-width">
							<use xlink:href="<?= base_url() ?>assets/svg/svg/service-icon-4.svg#return"></use>
						</svg>
						<div class="service-detail">
							<h3>100% Original</h3>
							<h6 class="text-content">100% Money Back</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section End -->

	<!-- Footer Start -->
	<?php include_once('include/footer.php'); ?>
	<!-- Footer End -->

	<!-- Quick View Modal Box Start -->
	<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
			<div class="modal-content">
				<div class="modal-header p-0">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="row g-sm-4 g-2">
						<div class="col-lg-6">
							<div class="slider-image">
								<img src="<?= base_url() ?>assets/images/product/category/1.jpg"
									class="img-fluid blur-up lazyload" alt="">
							</div>
						</div>

						<div class="col-lg-6">
							<div class="right-sidebar-modal">
								<h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
								<h4 class="price">$36.99</h4>
								<div class="product-rating">
									<ul class="rating">
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star" class="fill"></i>
										</li>
										<li>
											<i data-feather="star"></i>
										</li>
									</ul>
									<span class="ms-2">8 Reviews</span>
									<span class="ms-2 text-danger">6 sold in last 16 hours</span>
								</div>

								<div class="product-detail">
									<h4>Product Details :</h4>
									<p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
										Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
										Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly
										bear claw. Bonbon muffin I love carrot cake sugar plum dessert bonbon.</p>
								</div>

								<ul class="brand-list">
									<li>
										<div class="brand-box">
											<h5>Brand Name:</h5>
											<h6>Black Forest</h6>
										</div>
									</li>

									<li>
										<div class="brand-box">
											<h5>Product Code:</h5>
											<h6>W0690034</h6>
										</div>
									</li>

									<li>
										<div class="brand-box">
											<h5>Product Type:</h5>
											<h6>White Cream Cake</h6>
										</div>
									</li>
								</ul>

								<div class="select-size">
									<h4>Cake Size :</h4>
									<select class="form-select select-form-size">
										<option selected="">Select Size</option>
										<option value="1.2">1/2 KG</option>
										<option value="0">1 KG</option>
										<option value="1.5">1/5 KG</option>
										<option value="red">Red Roses</option>
										<option value="pink">With Pink Roses</option>
									</select>
								</div>

								<div class="modal-button">
									<button onclick="location.href = 'cart.html';"
										class="btn btn-md add-cart-button icon">Add
										To Cart</button>
									<button onclick="location.href = 'product-left.html';"
										class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
										View More Details</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Quick View Modal Box End -->

	<!-- Cookie Bar Box Start -->
	<!-- <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="<?= base_url() ?>assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div> -->
	<!-- Cookie Bar Box End -->

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

	<?php include_once('include/foot.php'); ?>

</body>

</html>
