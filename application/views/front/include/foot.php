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

		//add wishlist
		$('.heartspan,.heartspan1,.wishlistclose').click(function () {
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

		//add to cart
		$(document).ready(function () {
			// Add to cart function
			$('.add-to-cart-button').click(function () {
				let product_id = $(this).data('id');
				let quantity = $(this).parent('div').find('input').val();
				let userid = $(this).data('userid');

				$.ajax({
					url: "<?php echo base_url('ajax/addToCart'); ?>",
					method: "POST",
					data: {
						product_id: product_id,
						quantity: quantity,
						userid: userid,
					},
					dataType: "json",
					success: function (response) {
						console.log('Item added to cart successfully');
					},
					error: function () {
						console.log('Failed to add item to cart');
					}
				});
			});

			// Remove from cart function
			$('.remove-from-cart-button').click(function () {
				let cart_item_id = $(this).data('cart-id');
                let userid = $(this).data('userid');
                var $row = $(this).closest('tr');

				$.ajax({
					url: "<?php echo base_url('ajax/removeFromCart'); ?>",
					method: "POST",
					data: {
						cart_item_id: cart_item_id,
                        userid: userid,
					},
					dataType: "json",
					success: function (response) {
						console.log('Item removed from cart successfully');
                        $row.remove();
					},
					error: function () {
						console.log('Failed to remove item from cart');
					}
				});
			});
		});

	});



</script>
