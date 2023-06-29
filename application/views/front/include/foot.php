
    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="<?= base_url() ?>assets/js/feather/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="<?= base_url() ?>assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="<?= base_url() ?>assets/js/slick/slick.js"></script>
    <script src="<?= base_url() ?>assets/js/slick/slick-animation.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom-slick-animated.js"></script>
    <script src="<?= base_url() ?>assets/js/slick/custom_slick.js"></script>

    <!-- Range slider js -->
    <script src="<?= base_url() ?>assets/js/ion.rangeSlider.min.js"></script>

    <!-- Auto Height Js -->
    <script src="<?= base_url() ?>assets/js/auto-height.js"></script>

    <!-- Lazyload Js -->
    <script src="<?= base_url() ?>assets/js/lazysizes.min.js"></script>

    <!-- Quantity js -->
    <script src="<?= base_url() ?>assets/js/quantity-2.js"></script>

    <!-- Fly Cart Js -->
    <script src="<?= base_url() ?>assets/js/fly-cart.js"></script>

    <!-- Timer Js -->
    <script src="<?= base_url() ?>assets/js/timer1.js"></script>
    <script src="<?= base_url() ?>assets/js/timer2.js"></script>

    <!-- Copy clipboard Js -->
    <script src="<?= base_url() ?>assets/js/clipboard.min.js"></script>
    <script src="<?= base_url() ?>assets/js/copy-clipboard.js"></script>

    <!-- WOW js -->
    <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <!-- thme setting js -->
    <script src="<?= base_url() ?>assets/js/theme-setting.js"></script>

    <script>
		$(document).ready(function () {
			$('.heartspan,.heartspan1').click(function () {
				let heartid = $(this).data('id');
				var spanElement = $(this);

				$.ajax({
					url: "<?= base_url() ?>ajax/whistlist",
					method: "post",
					data: {
						heartid: heartid,
					},
					dataType: 'json',
					success: function (response) {
						if (response.whislist === 1) {
							spanElement.children('svg').css('fill', '#239698');
						} else {
							spanElement.children('svg').css('fill', 'none');
						}
					},
					error: function () {
						alert('uu');
					}
				});
			});
		});

	</script>
