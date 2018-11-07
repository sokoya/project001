"use strict";

//  i Check plugin
$('.i-check, .i-radio').iCheck({
	checkboxClass: 'i-check',
	radioClass: 'i-radio'
});

// price slider
$("#price-slider").ionRangeSlider({
	min: 130,
	max: 575,
	type: 'double',
	prefix: "$",
	prettify: false,
	hasGrid: false
});

$('#jqzoom').jqzoom({
	zoomType: 'standard',
	lens: true,
	preloadImages: false,
	alwaysOn: false,
	zoomWidth: 460,
	zoomHeight: 460,
	// xOffset:390,
	yOffset: 0,
	position: 'left'
});


$('.form-group-cc-number input').payment('formatCardNumber');
$('.form-group-cc-date input').payment('formatCardExpiry');
$('.form-group-cc-cvc input').payment('formatCardCVC');

// Register account on payment
$('#create-account-checkbox').on('ifChecked', function () {
	$('#create-account').removeClass('hide');
});

$('#create-account-checkbox').on('ifUnchecked', function () {
	$('#create-account').addClass('hide');
});

$('#shipping-address-checkbox').on('ifChecked', function () {
	$('#shipping-address').removeClass('hide');
});

$('#shipping-address-checkbox').on('ifUnchecked', function () {
	$('#shipping-address').addClass('hide');
});


$('.owl-carousel').each(function () {
	$(this).owlCarousel();
});


// Lighbox gallery
$('#popup-gallery').each(function () {
	$(this).magnificPopup({
		delegate: 'a.popup-gallery-image',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
});

// Lighbox image
$('.popup-image').magnificPopup({
	type: 'image'
});

// Lighbox text
$('.popup-text').magnificPopup({
	removalDelay: 500,
	closeBtnInside: true,
	callbacks: {
		beforeOpen: function () {
			this.st.mainClass = this.st.el.attr('data-effect');
		}
	},
	midClick: true
});

//format currency
function format_currency(str) {
	return '₦' + str.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
}


$(".product-page-qty-plus").on('click', function () {
	var currentVal = parseInt($(this).prev(".product-page-qty-input").val(), 10);

	if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

	$(this).prev(".product-page-qty-input").val(currentVal + 1);
});

$(".product-page-qty-minus").on('click', function () {
	var currentVal = parseInt($(this).next(".product-page-qty-input").val(), 10);
	if (currentVal == "NaN") currentVal = 1;
	if (currentVal > 1) {
		$(this).next(".product-page-qty-input").val(currentVal - 1);
	}
});

$('.site-search').on('input', function () {
	if ($(this).val().length === 0) {
		$('.src-cover').hide();
	} else {
		$('.src-cover').show();
		let query = $(this).val();

		$.ajax({
			url: base_url + 'ajax/search_complete',
			data: {search: query},
			method: 'POST',
			success: function (response) {
				$.each(response, function (key, value) {
					$('.market-search').append(`
						<li><a href="${value.product_link}">
							<div class="row" >
								<div class="col-md-2 col-2 col-xs-2 col-sm-2 col-lg-2 n-margin">
									<img src="${value.images_path}"
										 class="search-image"/>
								</div>
								<div class="col-md-10 col-10 col-xs-10 col-sm-10 col-lg-10">
									<div class="search-display">
										<p>${value.product_name}</p>
										<p class="price">${format_currency(value.price)}</p>
									</div>
								</div>
							</div>
						</a></li>
					`)
				});
				console.log(response)
			},
			error: function (response) {
				console.log(response)
			}
		})
	}
});
