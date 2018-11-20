/*
* Uppercase first letter of a word
* */
function ucwords(str) {
	return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
		return $1.toUpperCase();
	});
}

/*
* Src :  The Element you want to achieve
* destination in class
* */
function bind_market(src, destination) {
	$(`.${destination}`).html(src);
}


$('.continue-btn').on('click', function (e) {
	e.preventDefault();
	$.ajax({
		url: base_url + 'checkout/checkout_confirm',
		method: 'POST',
		data: {formdata: $('#checkout_form').serialize()},
		success: function () {
			// window.location.href = base_url + 'checkout/order_completed';
			notification_message("Payment Successful redirecting to invoice page", 'fa fa-info-circle', 'success')
		},
		error: response => {
			notification_message(`An error occurred  - ${response.status} ${response.statusText}`, 'fa fa-info-circle', 'error')
		}
	})
});

$('.cancel-btn').on('click', function () {
	show_page('delivery_address');
});


$('.create-address-btn').on('click', function (e) {
	e.preventDefault();
	$(this).prop('disabled', true);
	$('#processing').show();
	$.ajax({
		url: base_url + "checkout/add_address",
		method: "POST",
		data: $('#new-address-form').serialize(),
		success: function (response) {
			if (response.status = 'success') {
				$('#status').html(`<p class="alert alert-success">${response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
				$('#processing').hide();
				$('#delivery-method').load(`${base_url}checkout #delivery-method`, function () {
					$('.pickup-address').on('click', get_updates);
				});
			} else {
				$('#processing').hide();
				$('#status').html(`<p class="alert alert-danger">${response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
			}
		}
	});
});

show_page = page => {
	$('#register_address').hide();
	$('#pickup_address').hide();
	$('#delivery_address').hide();
	$(`#${page}`).show();
};

$('.btn-new-address').on('click', function () {
	$.getJSON(base_url + 'ajax/fetch_states', function (d) {
		$.each(d, function (k, v) {
			$('#state').append($('<option></option>').attr('value', v.id).text(ucwords(v.name)));
		})
	});
	show_page('register_address');
});

$('.btn-pickup-address').on('click', function () {
	show_page('pickup_address');
});

$('#state').on('change', function () {
	$("#city").empty();
	let sid = $(this).val();
	$.ajax({
		url: base_url + 'ajax/fetch_areas',
		method: 'get',
		data: {sid: sid},
		dataType: 'json',
		success: function (d) {
			$("#city").append("<option>-- Please select a city --</option>");
			$.each(d, function (k, v) {
				$('#city').append($('<option></option>').attr('value', v.id).text(ucwords(v.name)));
			})
		}
	})

});

function start_loading() {
	$('.cst-loader').show();
	$('.cst-overlay').show();
}

function finish_loading() {
	$('.cst-loader').hide();
	$('.cst-overlay').hide();
}

$('.pickup-address').on('click', get_updates);

function get_updates() {
	start_loading();
	$('.pickup-address').removeClass('custom-panel-active');
	let ad_id = $(this).data('id');
	let elem = $(this);
	$(`#${ad_id}`).prop('checked', true);

	$.ajax({
		url: base_url + "checkout/set_default_address",
		method: 'POST',
		data: {address_id: ad_id},
		success: function (response) {
			if ('.delivery-box') {
				let quantity_instance = $('.pr-summary-count').data('quantity') * 1;
				let price_instance = response * 1;
				let sub_total = price_instance * quantity_instance;
				bind_market(format_currency(sub_total), 'charges');
				bind_market(format_currency($('.total-sum').data('amount') + sub_total), 'total-sum-charges');
				elem.addClass('custom-panel-active');
				$('.pay-method').show();
				$('.delivery-warning').slideUp()
			}
			finish_loading();
		},
		error: function (response) {
			finish_loading()
		}
	});
}


$(".delivery-box").on('change', function () {
	if (this.checked) {
		$('.pickup-address').addClass('custom-panel-active');
		$('.pay-method').show();
		$('.delivery-warning').slideUp()
	}
});

$('.pay-method').on('click', function () {
	$('.payment-radio').prop('checked', true);
	$('.pay-panel').addClass('custom-panel-active');
	$('.continue-btn').prop('disabled', false);
});

$('.payment-radio').on('change', function () {
	$('.pay-panel').addClass('custom-panel-active');
	$('.continue-btn').prop('disabled', false)
});

let quantity = $('#quan');
let count = quantity.data('range');
let plus = $('.product-page-qty-plus');
let minus = $('.product-page-qty-minus');

document.querySelector("#quan").addEventListener("keypress", function (evt) {
	if (evt.which < 48 || evt.which > 57) {
		evt.preventDefault();
	}
});

plus.on('click', function () {
	minus.prop("disabled", false);
	if (quantity.val() >= count) {
		plus.prop("disabled", true);
	}
	let current_val = format_currency($('.pr-price').data('amount') * quantity.val());
	bind_market(current_val, 'pr-price');
	bind_market(current_val, 'total-sum');
	bind_market(format_currency(($('.pr-price').data('amount') * quantity.val()) + $('.charges').data('amount')), 'total-sum-charges');
	bind_market(quantity.val(), 'pr-summary-count');
	bind_market(quantity.val(), 'discount-count');
});

minus.on('click', function () {
	plus.prop("disabled", false);
	if (quantity.val() <= 1) {
		minus.prop("disabled", true);
	}
	let current_val = format_currency($('.pr-price').data('amount') * quantity.val());
	bind_market(current_val, 'pr-price');
	bind_market(current_val, 'total-sum');
	bind_market(format_currency(($('.pr-price').data('amount') * quantity.val()) + $('.charges').data('amount')), 'total-sum-charges');
	bind_market(quantity.val(), 'pr-summary-count');
	bind_market(quantity.val(), 'discount-count');
});

quantity.on('input', function () {
	if (quantity.val() > count) {
		quantity.val(count)
	} else if (quantity.val() === '0') {
		quantity.val(1)
	}
});

$(document).ready(function () {

	// $.ajax({
	// 	url: base_url + "checkout/fetch_address",
	// 	method: "GET",
	// 	success: function (response) {

	// 		// if (response.status = 'success') {
	// 		// 	$('#status').html(`<p class="alert alert-success">{response.message}</p>`).slideDown('fast').delay(300).slideUp('slow');
	// 		// 	$( "#delivery-method" ).load( base_url + "checkout" );
	// 		// }else{
	// 		// 	$('#status').html(`<p class="alert alert-danger">{response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
	// 		// }
	// 	}
	// });
	// $('#delivery_address_box').
});
