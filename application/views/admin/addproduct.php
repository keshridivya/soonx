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
							<form action="" method="post" enctype="multipart/form-data">
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
													<h5>Product Information</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Product
															Name</label>
														<div class="col-sm-9">
															<input class="form-control" name="product_name" type="text"
																placeholder="Product Name">
														</div>
													</div>

													<!-- <div class="mb-4 row align-items-center">
													<label class="col-sm-3 col-form-label form-label-title">Product
														Type</label>
													<div class="col-sm-9">
														<select class="js-example-basic-single w-100" name="state">
															<option selected>Type</option>
															<option>Top Selling Items</option>
															<option>Classified</option>
														</select>
													</div>
												</div> -->

													<div class="mb-4 row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Category</label>
														<div class="col-sm-9">
															<select class="js-example-basic-single w-100" name="category"
																id="cateegory">
																<option >Category Menu</option>
																<?php 
                                                            foreach($category as $category){
                                                            ?>
																<option value="<?= $category['id'] ?>">
																	<?= $category['category_name'] ?></option>
																<?php } ?>
															</select>
														</div>
													</div>

													<div class="mb-4 row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Subcategory</label>
														<div class="col-sm-9">
															<select class="js-example-basic-single w-100" name="subCategory"
																id="subcate">
																<option selected>Select Subcategory</option>
																<!-- <?php 
                                                            foreach($subcategory as $subcategory){
                                                            ?>
                                                            <option><?= $subcategory['subcategory_name'] ?></option>
                                                            <?php } ?> -->
															</select>
														</div>
													</div>

													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Product
															Title</label>
														<div class="col-sm-9">
														<select class="js-example-basic-single w-100" name="titlename"
																id="titlename">
																<option selected>Select Title</option>
																<?php 
                                                            foreach($titles as $title){
                                                            ?>
                                                            <option value="<?= $title['id'] ?>"><?= $title['title_name'] ?></option>
                                                            <?php } ?>
															</select>
														</div>
													</div>

													<!-- <div class="mb-4 row align-items-center">
													<label
														class="col-sm-3 col-form-label form-label-title">Brand</label>
													<div class="col-sm-9">
														<select class="js-example-basic-single w-100" id="brands" name="brands">
														</select>
													</div>
												    </div> -->

													<!-- <div class="mb-4 row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Unit</label>
														<div class="col-sm-9">
															<select class="js-example-basic-single w-100" name="unit">
																<option disabled="">Unit Menu</option>
																<option>Kilogram</option>
																<option>Pieces</option>
															</select>
														</div>
													</div> -->
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Description</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="row">
														<div class="col-12">
															<div class="row">
																<label class="form-label-title col-sm-12 mb-0">Product
																	Description</label>
																<div class="col-sm-12">
																	<textarea name="product_desc" id="editor" cols="30" rows="10"></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Product Images</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Images</label>
														<div class="col-sm-9">
															<input class="form-control form-choose"
																name="multiple_images[]" type="file" id="formFile"
																multiple="">
														</div>
													</div>

													<div class="row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Thumbnail
															Image</label>
														<div class="col-sm-9">
															
															<input class="form-control form-choose"
																name="thumbnail_image" type="file"
																id="formFileMultiple1">
																<span>Width: 106px, height: 82px</span>
														</div>
														
													</div>
												</div>
											</div>
										</div>


										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Product variations</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form attrform">
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Option
															Name</label>
														<div class="col-sm-9">
														<select class="js-example-basic-single w-100 attrname" 
															name="product_variant_name">
															<option value="">Select Attributes</option>
															<?php foreach ($attributes as $attribute) { ?>
																<option><?= $attribute['name']; ?></option>
															<?php } ?>
														</select>
														</div>
													</div>

													<div class="row align-items-center">
														<label class="col-sm-3 col-form-label form-label-title">Option
															Value</label>
														<div class="col-sm-9">
															<div class="bs-example">
															<select class="selectpicker attribute_values_select" id="attribute_values_select" name="product_variant_value[]" multiple aria-label="Default select example" data-live-search="true"></select>
															</div>
														</div>
													</div>
												</div>

												<a href="#" class="add-option add_another_option"><i class="ri-add-line me-2"></i> Add
													Another
													Option</a>
											</div>
										</div>

										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Shipping</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 form-label-title">Shipping </label>
														<div class="col-sm-9">
														<select class="js-example-basic-single w-100 shipping" name="shipping" >
																<option disabled="">Select Shipping</option>
																<option>Free Delivery</option>
																<option>Shipping Charges</option>
															</select>
														</div>
													</div>

													<!-- <div class="row align-items-center">
														<label
															class="col-sm-3 col-form-label form-label-title">Dimensions
															(cm)</label>
														<div class="col-sm-9">
															<select class="js-example-basic-single w-100"
																name="dimension">
																<option>Length</option>
																<option>Width</option>
																<option>Height</option>
															</select>
														</div>
													</div> -->
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Product Price</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 form-label-title">price</label>
														<div class="col-sm-9">
															<input class="form-control priceamt" type="number" name="price"
																placeholder="0">
														</div>
													</div>
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 form-label-title">Discount Price</label>
														<div class="col-sm-5">
															<input class="form-control" type="number" name="dis_price"
																placeholder="0">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>Product Inventory</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">SKU</label>
														<div class="col-sm-9">
															<input class="form-control" type="text" name="sku">
														</div>
													</div>
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 col-form-label form-label-title">Stock
															Status</label>
														<div class="col-sm-9">
															<select class="js-example-basic-single w-100"
																name="stock_status">
																<option>In Stock</option>
																<option>Out Of Stock</option>
																<option>On Backorder</option>
															</select>
														</div>
													</div>
												</div>
												<!-- <table class="table variation-table table-responsive-sm">
													<thead>
														<tr>
															<th scope="col">Variant Color</th>
															<th scope="col">Quantity</th>
															<th scope="col"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input class="form-control" type="text"
																	placeholder="0"
																	name="variant_color[]"></td>
															<td>
																<input class="form-control" type="number"
																	 placeholder="0"
																	name="variant_qty[]">
															</td>
															<td>
																<ul class="order-option">
																	<li><a href="javascript:void(0)" data-toggle="modal"
																			data-target="#deleteModal"><i
																				class="ri-delete-bin-line"></i></a>
																	</li>
																</ul>
															</td>
														</tr>

														<tr>
															<td><input class="form-control" type="text"
																	placeholder="0"
																	name="variant_color[]"></td>
															<td>
																<input class="form-control" type="number"
																	 placeholder="0"
																	name="variant_qty[]">
															</td>
															<td>
																<ul class="order-option">
																	<li><a href="javascript:void(0)" data-toggle="modal"
																			data-target="#deleteModal"><i
																				class="ri-delete-bin-line"></i></a>
																	</li>
																</ul>
															</td>
														</tr>


													</tbody>
												</table> -->
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="card-header-2">
													<h5>GST</h5>
												</div>

												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 form-label-title">PV</label>
														<div class="col-sm-9">
															<input class="form-control" type="number" name="pv" placeholder="0" data-bs-original-title="" title="">
														</div>
													</div>
													<div class="mb-4 row align-items-center">
														<label class="col-sm-3 form-label-title">BV</label>
														<div class="col-sm-9">
															<input class="form-control" type="number" name="bv" placeholder="0" data-bs-original-title="" title="">
														</div>
													</div>
													<table class="table variation-table table-responsive-sm">
														<thead>
															<tr>
																<th scope="col">Gst</th>
																<th scope="col">Discount</th>
																<th scope="col">Total</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>CGST</td>
																<td>
																	<input class="form-control cgstdis" type="number"
																		placeholder="0"
																		name="cgstdis">
																</td>
																<td><input class="form-control cgstamt" type="number" placeholder="0"
																		name="cgstamt" readonly>
																</td>
															</tr>

															<tr>
																<td>SGST</td>
																<td>
																	<input class="form-control sgstdis" type="number"
																		placeholder="0"
																		name="sgstdis">
																</td>
																<td><input class="form-control sgstamt" type="text" placeholder="0"
																		name="sgstamt" readonly>
																</td>
															</tr>


														</tbody>
													</table>
												</div>
											</div>
										</div>

										<div class="card">
												<div class="theme-form theme-form-2 mega-form">
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Product Rating</label>
														<div class="col-sm-9">
															<input class="form-control" type="search"
																placeholder="5" name="rating" value="5" min>
														</div>
													</div>
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Status</label>
														<div class="col-sm-9">
														<select class="js-example-basic-single w-100"
																name="status">
																<option>Approved</option>
																<option>Pending</option>
															</select>
														</div>
													</div>
													<div class="mb-4 row align-items-center">
														<label class="form-label-title col-sm-3 mb-0">Page title</label>
														<div class="col-sm-9">
															<input class="form-control" type="search"
																placeholder="Fresh Fruits" name="page_title">
														</div>
													</div>

													<div class="mb-4 row">
														<label class="form-label-title col-sm-3 mb-0">Meta
															description</label>
														<div class="col-sm-9">
															<textarea class="form-control" rows="3"
																name="meta_description"></textarea>
														</div>
													</div>
													<button type="submit" class="btn ms-auto theme-bg-color text-white"
														fdprocessedid="ss6ao">Add Product</button>
												</div>
											</div>
										</div>
							</form>
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
	<script>
		$(document).ready(function () {
			$('#cateegory').change(function () {
				var selectedValue = $(this).val();
				$.ajax({
					url: '<?php echo base_url("admin/getsuboptions"); ?>',
					type: 'POST',
					data: {
						selectedValue: selectedValue
					},
					dataType: 'json',
					success: function (response) {
						// $('#subcate').empty();
						// Append the new options based on the response
						$.each(response, function (index, option) {
							$('#subcate').append($('<option>', {
								value: option
								.id, // Adjust property name based on your response
								text: option
									.subcategory_name // Adjust property name based on your response
							}));
						});

					},
					error: function (xhr, status, error) {
						console.log(error);
					}
				});
			});

			$('#subcate').change(function () {
				var selectedValue = $(this).val();
				$.ajax({
					url: '<?php echo base_url("admin/getbrandoptions"); ?>',
					type: 'POST',
					data: {
						selectedValue: selectedValue
					},
					dataType: 'json',
					success: function (response) {
						// $('#brands').empty();
						// Append the new options based on the response
						$.each(response, function (index, option) {
							$('#brands').append($('<option>', {
								value: option
								.id, // Adjust property name based on your response
								text: option
									.brand_name // Adjust property name based on your response
							}));
						});

					},
					error: function (xhr, status, error) {
						console.log(error);
					}
				});
			});

			$('.add_another_option').on('click', function (e) {
					e.preventDefault();
					var newDiv = $('<div class="theme-form theme-form-2 mega-form mt-2 attrform">\
						<div class="mb-4 row align-items-center">\
							<label class="form-label-title col-sm-3 mb-0">Option Name</label>\
							<div class="col-sm-9">\
								<select class="js-example-basic-single w-100 attrname"\
									name="product_variant_name">\
									<option value="">Select Attributes</option>\
									<?php foreach ($attributes as $attribute) { ?>\
										<option><?= $attribute['name'] ?? ''; ?></option>\
									<?php } ?>\
								</select>\
							</div>\
						</div>\
						<div class="row align-items-center">\
							<label class="col-sm-3 col-form-label form-label-title">Option Value</label>\
							<div class="col-sm-9">\
								<div class="bs-example">\
									<select class="selectpicker attribute_values_select" name="product_variant_value[]" multiple aria-label="Default select example" data-live-search="true"></select>\
								</div>\
							</div>\
						</div>\
					</div>');

					$('.attrform').append(newDiv);
				});
		})

	</script>
</body>

</html>
