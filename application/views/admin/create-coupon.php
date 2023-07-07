<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once 'include/head.php' ?>

<body>
	<!-- tap on top start -->
	<div class="tap-top">
		<span class="lnr lnr-chevron-up"></span>
	</div>
	<!-- tap on tap end -->

	<!-- page-wrapper Start-->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- Page Header Start-->
		<?php require_once 'include/header.php' ?>
		<!-- Page Header Ends-->

		<!-- Page Body Start-->
		<div class="page-body-wrapper">
			<!-- Page Sidebar Start-->
			<?php require_once 'include/sidebar.php' ?>
			<!-- Page Sidebar Ends-->

			<!-- Create Coupon Table start -->
			<div class="page-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
                                    <?php
										if($message ?? FALSE){
										?>
										<div class="alert alert-success"><?= $message; ?></div>
										<?php } ?>
										<div class="card-body">
											<div class="title-header option-title">
												<h5>Create Coupon</h5>
											</div>
											<div class="tab-pane fade show active" id="pills-home" role="tabpanel">
												<form class="theme-form theme-form-2 mega-form" method="post">
													<div class="row">
														<!-- <div class="mb-4 row align-items-center">
                                                                <label class="form-label-title col-lg-2 col-md-3 mb-0">Coupon
                                                                    Title</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div> -->

														<div class="mb-4 row align-items-center">
															<label
																class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon
																Code</label>
															<div class="col-md-9 col-lg-10">
																<input class="form-control" type="text" value="<?= $coupon->couponcode ?? '' ?>"
																	name="couponcode">
															</div>
														</div>

														<!-- <div class="mb-4 row align-items-center">
                                                                <label class="col-lg-2 col-md-3 col-form-label form-label-title">Start
                                                                    Date</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="date">
                                                                </div>
                                                            </div> -->

														<div class="mb-4 row align-items-center">
															<label
																class="col-lg-2 col-md-3 col-form-label form-label-title">End
																Date</label>
															<div class="col-md-9 col-lg-10">
																<input class="form-control" type="date" value="<?= $coupon->expiry_date ?? '' ?>" name="enddate">
															</div>
														</div>

														<!-- <div class="mb-4 row align-items-center">
                                                                <label class="col-lg-2 col-md-3 col-form-label form-label-title">Quantity</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="number">
                                                                </div>
                                                            </div> -->

														<div class="mb-4 row align-items-center">
															<label
																class="col-sm-2 col-form-label form-label-title">Discount
															</label>
															<div class="col-sm-10">
																<input type="number" class="form-control"
																	name="discount" value="<?= $coupon->amt ?>">
																<!-- <select class="js-example-basic-single" name="state">
                                                                        <option disabled="">--Select--</option>
                                                                        <option>Percent</option>
                                                                        <option>Fixed</option>
                                                                    </select> -->
															</div>
														</div>

														<div class="row align-items-center">
															<label
																class="form-label-title col-lg-2 col-md-3 mb-0">Status</label>
															<div class="col-md-9">
																<select class="js-example-basic-single" name="status">
																	<option disabled="">--Select--</option>
																	<option <?php echo ($coupon->status == 'Active') ? 'selected' : ''; ?>>Active</option>
																	<option <?php echo ($coupon->status == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
																</select>
															</div>
														</div>
														<div class="col-xxl-4 align-items-center">
															<button class="btn text-white theme-bg-color mt-4" type="submit" data-bs-original-title="" title="" style="margin:auto">
																Coupon</button>
														</div>
													</div>
												</form>
											</div>
											<!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button">General</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button">Restriction</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-usage-tab" data-bs-toggle="pill" data-bs-target="#pills-usage" type="button">Usage</button>
                                                </li>
                                            </ul> -->

											<!-- <div class="tab-content" id="pills-tabContent">
                                                

                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form">
                                                        <div class="card-header-1">
                                                            <h5>Restriction</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label class="form-label-title col-lg-2 col-md-3 mb-0">Products</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title">Category</label>
                                                                <div class="col-sm-10">
                                                                    <select class="js-example-basic-single" name="state">
                                                                        <option disabled="">--Select--</option>
                                                                        <option>Electronics</option>
                                                                        <option>Clothes</option>
                                                                        <option>Shoes</option>
                                                                        <option>Digital</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-lg-2 col-md-3 col-form-label form-label-title">Minimum
                                                                    Spend</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="number">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label class="col-lg-2 col-md-3 col-form-label form-label-title">Maximum
                                                                    Spend</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="pills-usage" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form">
                                                        <div class="card-header-1">
                                                            <h5>Usage Limits</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                                    Limited</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="number">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                                    Customer</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Create Coupon Table End -->

			<!-- footer start-->
			<div class="container-fluid">
				<?php require_once 'include/footer.php' ?>
			</div>
			<!-- footer end-->
		</div>
	</div>
	<!-- page-wrapper end-->

	<!-- latest js -->
	<?php require_once 'include/foot.php' ?>
</body>

</html>
