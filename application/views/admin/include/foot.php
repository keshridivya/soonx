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
						<button type="button" class="btn  btn--yes btn-primary confirmLogout">Yes</button>
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

    <script>
document.addEventListener('DOMContentLoaded', function() {
    let logoutButton = document.getElementsByClassName('logout-button');

    for (var i = 0; i < logoutButton.length; i++) {
        logoutButton[i].addEventListener('click', function() {
            var rowId = this.getAttribute('data-row');
            showConfirmationLogoutModal(rowId);
        });
    }

    function showConfirmationLogoutModal(rowId) {
        $('#staticBackdrop').modal('show');

        $('.confirmLogout').click(function() {
            logoutTableRow(rowId);
            $('#staticBackdrop').modal('hide');
        });
    }

    function logoutTableRow(rowId) {
        $.ajax({
            url: "<?php echo base_url('admin/logout'); ?>",
            type: "POST",
            data: {row_id: rowId},
            success: function(response) {
                if (response == "success") {
                    window.location.href = "<?php echo base_url('admin'); ?>";
                } else {
                    // Handle the deletion error
                    window.location.href = "<?php echo base_url('admin/dashboard'); ?>";
                }
            },
            error: function(xhr, status, error) {
                // Handle the AJAX error
                console.log(error);
            }
        });
    }
});
</script>