<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require_once 'include/head.php' ?>

<body>
	<!-- tap on top start -->
	<div class="tap-top">
		<span class="lnr lnr-chevron-up"></span>
	</div>
	<!-- tap on tap end -->

	<!-- page-wrapper start -->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- Page Header Start-->
		<?php require_once 'include/header.php' ?>
		<!-- Page Header Ends-->

		<!-- Page Body start -->
		<div class="page-body-wrapper">
			<!-- Page Sidebar Start-->
			<?php require_once 'include/sidebar.php' ?>
			<!-- Page Sidebar Ends-->

			<div class="page-body">

				<!-- New Product Add Start -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-sm-8 m-auto">
									<div class="card">
										<?php
										if($message ?? FALSE){
										?>
										<div class="alert alert-success"><?= $message; ?></div>
										<?php } ?>
										<div class="card-body">
											<div class="card-header-2">
												<h5>Currency Information</h5>
											</div>

											<form class="theme-form theme-form-2 mega-form"
												enctype="multipart/form-data" method="post">

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Currency Name</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Currency Name" name="currency_name" value="<?= $currency->currency_name ?? ''; ?>" readonly>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Rate</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Rate" name="rate" value="<?= $currency->currency_rate ?? ''; ?>" required>
													</div>
												</div>
												
												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Status</label>
													<div class="col-sm-9">
														<select class="js-example-basic-single w-100" name="status" required>
                                                            <option value="1" <?php echo ($currency->status  == '1') ? 'selected' : ''; ?> >Active</option>
															<option value="0" <?php echo ($currency->status  == '0') ? 'selected' : ''; ?> >In active</option>
                                                        </select>
													</div>
												</div>

												<div class="col-xxl-4 align-items-center">
													<button class="btn text-white theme-bg-color" type="submit">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- New Product Add End -->

				<!-- footer Start -->
				<div class="container-fluid">
					<?php require_once 'include/footer.php' ?>
				</div>
				<!-- footer En -->
			</div>
			<!-- Container-fluid End -->
		</div>
		<!-- Page Body End -->
	</div>
	<!-- page-wrapper End -->



	<?php require_once 'include/foot.php' ?>
</body>

</html>
