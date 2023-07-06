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
						location.reload();
					},
					error: function () {
						console.log('Failed to remove item from cart');
					}
				});
			});
		});

		$('.editaddress').click(function(){
			$('#address_id').val($(this).data('id'));
			$('#client_name').val($(this).data('name'));
			$('#client_address').val($(this).data('address'));
			$('#client_email').val($(this).data('email'));
			$('#client_contact').val($(this).data('mobile'));
			$('#client_landmark').val($(this).data('landmark'));
			$('#client_pincode').val($(this).data('pincode'));
			$('#add-address').modal('show');
		});

		$('#applycoupon').click(function(){
			let couponcode = $('#couponcode').val();
			$.ajax({
				url: '<?= base_url('frontend/applyCoupon') ?>',
				type: 'post',
				data: {
					couponcode: couponcode,
				},
				beforeSend : function(){
					$('#loader').show();
				},
				success: function(response){
					if (response.success) {
						$('#spancouponmsg').text(response.message).css('color', 'green');
						// Update the UI with the final amount
						var finalAmount = response.finalAmount;
						// Update the UI element to display the final amount
						$('#finalAmountElement').text(finalAmount);
						let totalsubtoatl = $('.totalsubtoatl').text();
						$('.processpay').attr('data-couponcode', finalAmount);
						$('.totalsubtoatl').text(totalsubtoatl-(finalAmount));
						
					} else {
						$('#spancouponmsg').text(response.message).css('color', 'red');
					}
				},
				error: function(xhr, status, error) {
					// Handle the AJAX error
					console.log(error);
				},
				complete: function() {
					$('#loader').hide();
				}
			});
		});

		$('.processpay').click(function(){
			let couponcode = $(this).data('couponcode');
			
			// Redirect to the checkout page with the couponcode parameter
			window.location.href = '<?= base_url('checkout') ?>?couponcode=' + couponcode;
		});


	});



</script>

<script>
    $(document).ready(function(){
		$('#spanclient_name').hide();
        $('#spanclient_contact').hide();
        $('#spanclient_email').hide();
        $('#spanclient_address').hide();
        $('#spanclient_pincode').hide();
        $('#spanclient_landmark').hide();
        let name_error2 = true;
        let contact_error2 = true;
        let email_error2 = true;
        let address_error2 = true;
        let pin_error2 = true;
        let landmark_error2 = true;

		$('#client_name').keyup(function(){
			validatebookname2();
		});
		function validatebookname2(){
			let bookname=$('#client_name').val();
			let booktext=/^[A-Za-z ]+$/;
			if(bookname.length == ''){
				$('#spanclient_name').show().css('color','red');
				name_error2 = false;
				return false;
			}else if(!booktext.test(bookname)){
					$('#spanclient_name').show().html('** Enter Alphabets only').css('color','red');
					name_error2 = false;
					return false;
			}else{
				$('#spanclient_name').hide();
			}
		}

		//contact
		$('#client_contact').keyup(function(){
			validatebookcontact2();
		});
		function validatebookcontact2(){
			let bookcontact=$('#client_contact').val();
			let booknumber= /^[6,7,8,9][0-9]{0,9}$/;

			if(bookcontact.length==''){
				$('#spanclient_contact').show().css('color','red');
				contact_error2 = false;
				return false;
			}else if(!booknumber.test(bookcontact)){
				$('#spanclient_contact').show().css('color','red').html('** please enter 10 digit mobile number withou space and  starting with 6,7,8,9');
				contact_error2 = false;
				return false;
			}else if(bookcontact.length != '10'){
				$('#spanclient_contact').show().css('color','red').html('** Enter Only 10 digit number');
				contact_error2 = false;
				return false;
			} else{
				$('#spanclient_contact').hide();
			}
		}

		//email
		$('#client_email').keyup(function(){
			validatebookemail2();
		});
		function validatebookemail2(){
			let bookemail=$('#client_email').val();
			let bookregex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
			if(bookemail.length==''){
				$('#spanclient_email').show().css('color','red');
				email_error2 = false;
				return false;
			}else if(!bookregex.test(bookemail)){
				$('#spanclient_email').show().css('color','red');
				email_error2 = false;
				return false;
			}
			else{
				$('#spanclient_email').hide();
			}
		}
        
    //address
    $('#client_address').keyup(function(){
        validatebookaddress2();
    });
    function validatebookaddress2(){
        let bookaddress=$('#client_address').val();
        if(bookaddress.length==''){
            $('#spanclient_address').show().css('color','red');
            address_error2 = false;
            return false;
        }
        else{
            $('#spanclient_address').hide();
        }
    }

	 //landmark
	 $('#client_landmark').keyup(function(){
        validatebooklandmark();
    });
    function validatebooklandmark(){
        let booklandmark=$('#client_landmark').val();
        if(booklandmark.length==''){
            $('#spanclient_landmark').show().css('color','red');
            landmark_error2 = false;
            return false;
        }
        else{
            $('#spanclient_landmark').hide();
        }
    }

    //pincode
    $('#client_pincode').keyup(function(){
        validatebookpin3();
    });
    function validatebookpin3(){
        let bookpin=$('#client_pincode').val();
        let zipRegex = /^\d{6}$/;
        if(bookpin.length==''){
            $('#spanclient_pincode').show().css('color','red');
            pin_error3 = false;
            return false;
        }
        else if(!zipRegex.test(bookpin)){
            $('#spanclient_pincode').show().css('color','red').html('** zipcode should only be 6 digits');
            pin_error3 = false;
            return false;
        }
        else{
            $('#spanclient_pincode').hide();
        }
    }


    // Submit button
    $("#submit_address").click(function () {
        name_error2 = true;
        contact_error2 = true;
         email_error2 = true;
         address_error2 = true;
         pin_error2 = true;
         landmark_error2 = true;
         validatebookname2();
         validatebookcontact2();
         validatebookemail2();
         validatebookaddress2();
		 validatebooklandmark();
         validatebookpin3();
          if (name_error2 == true && contact_error2 == true && email_error2 == true && address_error2 == true && pin_error2==true && landmark_error2==true ) {
            return true;
          } else {
                      return false;
          }
      });
	});
</script>

<script>
		function fulltotal(){
			let subtotalElement = $('.result.totamtpay');
			let couponDiscountElement = $('.coupondis');
			let shippingChargeElement = $('.totalship.totamtpay');

			// Get the values from the elements and convert them to numbers
			let subtotal = parseFloat(subtotalElement.text());
			let couponDiscount = parseFloat(couponDiscountElement.text());
			let shippingCharge = parseFloat(shippingChargeElement.text());

			// Calculate the new total by subtracting the coupon discount and adding the shipping charge
			let total = subtotal - couponDiscount + shippingCharge;

			// Display the new total in the appropriate element
			$('.totalsubtoatl').text(total.toFixed(2));

		}
        let sum = 0, sumship = 0, sumpv = 0, sumbv = 0;

        $(window).on("load", function () {
			$('.subtotaljs').each(function () {
				let amt = $(this).text();
				sum += parseInt(amt);
			});
			$('.result').text(sum);

			$('.shipingcharge').each(function(){
				let shipcharg = $(this).text();
				sumship += parseInt(shipcharg);
			});
			$('.totalship').text(sumship);

			$('.prpv').each(function(){
				let amt = $(this).text();
				sumpv += parseInt(amt);
			});
			$('.tpv').text(sumpv);

			$('.prbv').each(function(){
				let amt = $(this).text();
				sumbv += parseInt(amt);
			});
			$('.tbv').text(sumbv);

			fulltotal();
			
        });

        $(document).ready(function () {
        $('.plus').click(function (e) {
            e.preventDefault();
            var $input = $(this).siblings(':text');
            var currentValue = parseInt($input.val());
            var newValue = currentValue + 1;
            $input.val(newValue).change();
        });

        $('.minus').click(function (e) {
            e.preventDefault();
            var $input = $(this).siblings(':text');
            var currentValue = parseInt($input.val());
            var newValue = currentValue - 1 >= 1 ? currentValue - 1 : 1;
            $input.val(newValue).change();
        });

        $(document).on('change', '.qtyvalue', function () {
            let $tr = $(this).closest('tr');
            let pricejs = $tr.find('.pricejs').text();
            let total = pricejs * $(this).val();
            $tr.find('.subtotaljs').text(total);
            var quantity = $(this).val();
            var cartId = $(this).data('cart-id');

            if ($(this).val() != '0') {
            updateSubtotal(cartId, quantity);
            updateTotal();
            }
			fulltotal();
        });

        function updateTotal() {
            sum = 0;
            $('.subtotaljs').each(function () {
            let amt = $(this).text();
            sum += parseInt(amt);
            });
            $('.result').text(sum);
        }

        function updateSubtotal(cartId, quantity) {
            $.ajax({
            url: '<?php echo base_url('ajax/updateSubtotal '); ?>',
            method: 'POST',
            data: {
                cart: cartId,
                quantity: quantity
            },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                console.log('success');
                }
            },
            error: function () {
                console.log('An error occurred during the AJAX request.');
            }
            });
        }

        });

</script>
