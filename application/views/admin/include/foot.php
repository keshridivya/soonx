    	<!-- Modal Start -->
    	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    		aria-labelledby="staticBackdropLabel" aria-hidden="true">
    		<div class="modal-dialog  modal-dialog-centered">
    			<div class="modal-content">
    				<div class="modal-body">
    					<h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
    					<p>Are you sure you want to log out?</p>
    					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

    					<div class="button-box">
    						<button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
    						<a href="<?= base_url('admin/logout') ?>" type="button"
    							class="btn  btn--yes btn-primary confirmLogout">Yes</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Modal End -->
    	<!-- latest js -->
    	<script src="<?= base_url() ?>assets/admin/js/jquery-3.6.0.min.js"></script>

    	<!-- Bootstrap js -->
    	<script src="<?= base_url() ?>assets/admin/js/bootstrap/bootstrap.bundle.min.js"></script>

    	<!-- feather icon js -->
    	<script src="<?= base_url() ?>assets/admin/js/icons/feather-icon/feather.min.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/icons/feather-icon/feather-icon.js"></script>

    	<!-- scrollbar simplebar js -->
    	<script src="<?= base_url() ?>assets/admin/js/scrollbar/simplebar.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/scrollbar/custom.js"></script>

    	<!-- Sidebar jquery -->
    	<script src="<?= base_url() ?>assets/admin/js/config.js"></script>

    	<!-- tooltip init js -->
    	<script src="<?= base_url() ?>assets/admin/js/tooltip-init.js"></script>

    	<!-- Plugins JS -->
    	<script src="<?= base_url() ?>assets/admin/js/sidebar-menu.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/notify/bootstrap-notify.min.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/notify/index.js"></script>

    	<!-- Apexchar js -->
    	<script src="<?= base_url() ?>assets/admin/js/chart/apex-chart/apex-chart1.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/chart/apex-chart/moment.min.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/chart/apex-chart/apex-chart.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/chart/apex-chart/stock-prices.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/chart/apex-chart/chart-custom1.js"></script>


    	<!-- slick slider js -->
    	<script src="<?= base_url() ?>assets/admin/js/slick.min.js"></script>
    	<script src="<?= base_url() ?>assets/admin/js/custom-slick.js"></script>

    	<!-- customizer js -->
    	<script src="<?= base_url() ?>assets/admin/js/customizer.js"></script>

    	<!-- ratio js -->
    	<script src="<?= base_url() ?>assets/admin/js/ratio.js"></script>

    	<!-- sidebar effect -->
    	<script src="<?= base_url() ?>assets/admin/js/sidebareffect.js"></script>

    	<!-- Theme js -->
    	<script src="<?= base_url() ?>assets/admin/js/script.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    	<script>
    		$(document).ready(function () {
    			$('#editor').summernote();
    		});
    		$(document).ready(function () {

    			$(document).on('click', '.delete-option', function (e) {
    				e.preventDefault();
    				$(this).closest('.attrform').remove();
    			});

    			$(document).on('change', '.shipping', function () {
    				let shipping = $(this).val();
    				let newshipdiv = $(
    					'<div class="mt-2"><input class="form-contro shippinginputl" type="number" name="shippingcharge" placeholder="20" ></div>'
    					);
    				if (shipping == 'Shipping Charges') {
    					$('.shipping').parent().append(newshipdiv);
    				} else {
    					$('.shippinginputl').remove();
    				}
    			});

    			$('.addattrvalue').on('click', function (e) {
    				e.preventDefault();
    				var newInput = $('<div class="row align-items-center attribute-value mt-2">' +
    					'<div class="col-sm-10 col-9">' +
    					'<input class="form-control" type="text" placeholder="Attribute Value" name="attrivalue[]">' +
    					'</div>' +
    					'<div class="col-sm-2 col-3">' +
    					'<button class="btn text-danger h-100 w-100 remove-value">Remove</button>' +
    					'</div>' +
    					'</div>');

    				$('.addattrvalue').closest('.col-xxl-4').before(newInput);
    			});

    			$(document).on('click', '.remove-value', function (e) {
    				e.preventDefault();
    				$(this).closest('.attribute-value').remove();
    			});

				$('.cgstdis, .priceamt').keyup(function() {
					let cgst = $('.cgstdis').val();
					let price = $('.priceamt').val();
					let total_amt = price * (cgst / 100);
					$('.cgstamt').val(total_amt);
				});

				$('.sgstdis, .priceamt').keyup(function() {
					let cgst = $('.sgstdis').val();
					let price = $('.priceamt').val();
					let total_amt = price * (cgst / 100);
					$('.sgstamt').val(total_amt);
				});
			});


			$(document).on('change', '.attrname', function () {
				var attributeName = $(this).val();
				var attributeValuesSelect = $(this).closest('.attrform').find('.attribute_values_select');

				// Perform AJAX request to fetch attribute values based on the attribute name
				$.ajax({
					url: '<?= base_url('admin/fetch_attribute_values') ?>',
					method: 'POST',
					data: {attribute_name: attributeName},
					success: function (response) {
						attributeValuesSelect.html(response);
						// attributeValuesSelect.selectpicker('refresh'); 
					}
				});
       		});

			$(document).ready(function() {
				$('.attribute-checkbox').change(function() {
					var attributeId = $(this).attr('id').split('_')[1]; // Extract the attribute ID from the checkbox ID
					var value = $(this).val();
					var isChecked = $(this).is(':checked') ? 1 : 0;
					var product_id = $(this).data('id');

					// Make an AJAX request to update the database
					$.ajax({
					url: '<?php echo base_url('admin/updateattribute'); ?>', // Replace with the appropriate PHP script URL
					method: 'POST',
					data: { attributeId: attributeId, value: value, isChecked: isChecked, product_id:product_id },
					success: function(response) {
						// Handle the response if needed
						console.log(response);
					},
					error: function(xhr, status, error) {
						// Handle any errors if necessary
						console.error(error);
					}
					});
				});
			});

		

    	</script>

    	<!-- 
    	<script>
    		document.addEventListener('DOMContentLoaded', function () {
    			let logoutButton = document.getElementsByClassName('logout-button');

    			for (var i = 0; i < logoutButton.length; i++) {
    				logoutButton[i].addEventListener('click', function () {
    					var rowId = this.getAttribute('data-row');
    					showConfirmationLogoutModal(rowId);
    				});
    			}

    			function showConfirmationLogoutModal(rowId) {
    				$('#staticBackdrop').modal('show');

    				$('.confirmLogout').click(function () {
    					logoutTableRow(rowId);
    					$('#staticBackdrop').modal('hide');
    				});
    			}

    			function logoutTableRow(rowId) {
    				$.ajax({
    					url: "<?php echo base_url('admin/logout'); ?>",
    					type: "POST",
    					data: {
    						row_id: rowId
    					},
    					success: function (response) {
    						if (response == "success") {
    							console.log(response);
    							// window.location.href = "<?php echo base_url('admin'); ?>";
    						} else {
    							console.log(response);
    							// Handle the deletion error
    							// window.location.href = "<?php echo base_url('admin/dashboard'); ?>";
    						}
    					},
    					error: function (xhr, status, error) {
    						// Handle the AJAX error
    						console.log(error);
    					}
    				});
    			}
    		});

    	</script> -->
