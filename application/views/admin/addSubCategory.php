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
												<h5>Sub Category Information</h5>
											</div>

											<form class="theme-form theme-form-2 mega-form"
												enctype="multipart/form-data" method="post">
												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Sub Category Name</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Category Name" name="subcategory" value="<?= $subcategory->subcategory_name ?? '' ?>" required>
                                                            <?= form_error('subcategory') ?>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="col-sm-3 col-form-label form-label-title">Sub Category
														Image</label>
													<div class="form-group col-sm-9">
													<?php
														if($subcategory->subcategory_image ?? false){
														?>
													<img src="<?= base_url() ?>uploads/subcategory/<?= $subcategory->subcategory_image; ?>" class="img-fluid" alt="">
													<?php } ?>
														<div class="dropzone-wrapper">
															<div class="dropzone-desc">
																<i class="ri-upload-2-line"></i>
																<p>Choose an image file or drag it here.</p>
															</div>
															<input type="file" class="dropzone" name="mainimage">
														</div>
													</div>
												</div>


												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Slug</label>
													<div class="col-sm-9">
														<input class="form-control" type="text" placeholder="Slug" value="<?= $subcategory->subcategory_slug ?? '' ?>"
															name="slug" required>
                                                            <?= form_error('slug') ?> 
													</div>
												</div>

												<div class="col-xxl-4 align-items-center">
													<button class="btn text-white theme-bg-color" type="submit">Add Sub Category</button>
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
