function format_currency(str) {
	return '₦' + str.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
}

function bind_market(src, destination) {
	$(`.${destination}`).html(src);
}

$('.create-address-btn').on('click', function (e) {
	e.preventDefault();
	$('#delivery_address').slideDown();
	$('#register_address').hide();
});

$('.btn-new-address').on('click', function () {
	$('#register_address').slideDown();
	$('#delivery_address').hide();

});

$('.pickup-address').on('click', function () {
	$('.delivery-box').prop('checked', true);
	if ('.delivery-box') {
		$('.pickup-address').addClass('custom-panel-active');
		$('.pay-method').show();
		$('.delivery-warning').slideUp()
	}
});


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
