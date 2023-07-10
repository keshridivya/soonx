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
												<h5>Ads Information</h5>
											</div>

											<form class="theme-form theme-form-2 mega-form"
												enctype="multipart/form-data" method="post">
												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Ads Name</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Ads Name" name="ads_name" value="<?= $ads->ads_name ?? ''; ?>" required>
                                                            <?= form_error('ads_name') ?>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="col-sm-3 col-form-label form-label-title">Ads
														Logo</label>
													<div class="form-group col-sm-9">
														<?php
														if($ads->logo ?? false){
														?>
														 <img src="<?= base_url() ?>uploads/ads/<?= $ads->logo ?? ''; ?>" class="img-fluid" alt="">
														 <?php } ?>
														<div class="dropzone-wrapper">
															<div class="dropzone-desc">
																<i class="ri-upload-2-line"></i>
																<p>Choose an image file or drag it here.</p>
															</div>
															<input type="file" class="dropzone" name="mainimage" >
														</div>
														<span class="text-danger">Width:64 and height:34px</span>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Ads Star</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Ads Star" name="star" value="<?= $ads->star ?? ''; ?>" required>
                                                            <?= form_error('star') ?>

														<input class="form-control mt-2" type="text"
															placeholder="Ads Review" name="review" value="<?= $ads->review ?? ''; ?>" required>
                                                            <?= form_error('review') ?>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Description</label>
													<div class="col-sm-9">
														<textarea name="desc" class="form-control" id="" cols="30" rows="10" required><?= $ads->desc ?? ''; ?></textarea>
                                                            <?= form_error('desc') ?> 
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Address</label>
													<div class="col-sm-9">
														<input class="form-control" type="text" placeholder="Address" value="<?= $ads->address ?? ''; ?>"
															name="address" required>
                                                            <?= form_error('address') ?> 
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Contact</label>
													<div class="col-sm-9">
														<input class="form-control" type="text" placeholder="Contact" value="<?= $ads->contact ?? ''; ?>"
															name="contact" required>
                                                            <?= form_error('contact') ?> 
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
