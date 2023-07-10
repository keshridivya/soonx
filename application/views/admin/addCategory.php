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
												<h5>Category Information</h5>
											</div>

											<form class="theme-form theme-form-2 mega-form"
												enctype="multipart/form-data" method="post">
												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Category Name</label>
													<div class="col-sm-9">
														<input class="form-control" type="text"
															placeholder="Category Name" name="category" value="<?= $category->category_name ?? ''; ?>" required>
                                                            <?= form_error('category') ?>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="col-sm-3 col-form-label form-label-title">Category
														Image</label>
													<div class="form-group col-sm-9">
														<?php
														if($category->category_image ?? false){
														?>
														 <img src="<?= base_url() ?>uploads/category_image/<?= $category->category_image ?? ''; ?>" class="img-fluid" alt="">
														 <?php } ?>
														<div class="dropzone-wrapper">
															<div class="dropzone-desc">
																<i class="ri-upload-2-line"></i>
																<p>Choose an image file or drag it here.</p>
															</div>
															<input type="file" class="dropzone" name="mainimage" >
														</div>
														<span class="text-danger">Width:130px and height:130px</span>
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<div class="col-sm-3 form-label-title">Select Category Icon</div>
													<div class="col-sm-9">
														<?php
														if($category->category_icon ?? false){
														?>
														 <img src="<?= base_url() ?>uploads/category_icon/<?= $category->category_icon; ?>" class="img-fluid" alt="">
														 <?php } ?>
														<div class="dropzone-wrapper">
															<div class="dropzone-desc">
																<i class="ri-upload-2-line"></i>
																<p>Choose an icon or drag it here.</p>
															</div>
															<input type="file" class="dropzone" name="icon">
															
														</div>
														<span class="text-danger">Width:100px and height:100px</span>
														

														<!-- <div class="dropdown icon-dropdown">
                                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                                Select Icon
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/vegetable.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/meats.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/breakfast.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/frozen.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/biscuit.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/grocery.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/drink.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/milk.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <img src="../assets/svg/1/pet.svg" class="img-fluid" alt="">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div> -->
													</div>
												</div>

												<div class="mb-4 row align-items-center">
													<label class="form-label-title col-sm-3 mb-0">Slug</label>
													<div class="col-sm-9">
														<input class="form-control" type="text" placeholder="Slug" value="<?= $category->category_slug ?? ''; ?>"
															name="slug" required>
                                                            <?= form_error('slug') ?> 
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
