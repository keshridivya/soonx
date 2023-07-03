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
												<h5>Offer Slider Information</h5>
											</div>

											<form class="theme-form theme-form-2 mega-form"
												enctype="multipart/form-data" method="post">
												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Slider Name</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Category Name" name="slidername" value="<?= $offerslider->slider_name ??'' ?>" required>
                                                            <?= form_error('slidername') ?>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="col-sm-3 col-form-label form-label-title">Slider
														Image</label>
													<div class="form-group col-sm-9">
														<?php
														if($offerslider->slider_image ?? false){
														?>
													<img src="<?= base_url() ?>uploads/offer_slider/<?= $offerslider->slider_image; ?>" class="img-fluid" alt="">
													<?php } ?>
														<div class="dropzone-wrapper">
															<div class="dropzone-desc">
																<i class="ri-upload-2-line"></i>
																<p>Choose an image file or drag it here.</p>
															</div>
															<input type="file" class="dropzone" name="mainimage" >
														</div>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Slider Title</label>
													<div class="col-sm-9">
														<input class="form-control" type="text" placeholder="Title" value="<?= $offerslider->for ?? '' ?>"
															name="title" required>
                                                            <?= form_error('title') ?> 
													</div>
												</div>

												<div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Redirection</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="redirect" required>
                                                            <option disabled="">Select</option>
															<?php
															foreach($category as $category){
															?>
                                                            <option <?php echo (($offerslider->button ?? '') == $category['id']) ? 'selected' : '';  ?>><?= $category['category_slug'] ?></option>
															<?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

												<div class="col-xxl-4 align-items-center">
													<button class="btn text-white theme-bg-color" type="submit">Add
														Category</button>
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
