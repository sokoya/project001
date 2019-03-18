var state_is_fetched = false;

/*
* Uppercase first letter of a word
* */
function ucwords(str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}

/*
* Src :  The Element you want to get
* destination in class
* */
function bind_market(src, destination) {
    $(`.${destination}`).html(src);
}


$('.continue-btn').on('click', function (e) {
    $(this).prop('disabled', 'disabled');
    e.preventDefault();
    var delivery_charge = $('.charges').data('amount');
    var payment = $("input[name=payment_method]:checked");
    var payment_method = payment.val();
    var payment_name = payment.data('name');
    $.ajax({
        url: base_url + 'checkout/checkout_confirm',
        method: 'POST',
        dataType: 'json',
        data: $('#checkout_form').serialize() + "&delivery_charge=" + delivery_charge,
        success: (data) => {
            if (data.status == 'success') {
                if (payment_method == 1 || payment_name == 'Payment on Delivery') {
                    // Payment on delivery
                    setTimeout(function () {
                        notification_message("Processing your orders... ", 'fa fa-info-circle', 'success');
                    }, 3000);
                    window.location.href = base_url + 'checkout/order_completed';
                } else if (payment_method == 2 || payment_name == 'Interswitch Webpay') {
                    // Interswitch Payment
                    setTimeout(function () {
                        notification_message("Saving your orders... Redirecting you to payment portal in 5 seconds ", 'fas fa-info-circle', 'success');
                    }, 3000);
                    window.location.href = base_url + "checkout/interswitch/webpay/";
                } else {
                    // no payment issued...
                    window.location.href = base_url;
                }
            }else{
                notification_message(`An error with your order: ${response.message}`, "fas fa-info-circle", "error")
            }
        },
        error: response => {
            notification_message(`An error occurred  - ${response.status} ${response.statusText}`, 'fas fa-info-circle', 'error')
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
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var phone = $('#number_').val();
    var address = $('#street').val();
    var state = $('#state').val();
    var area = $('#city').val();
    var data = {
        'first_name': first_name,
        'last_name': last_name,
        'phone': phone,
        'address': address,
        'state': state,
        'area': area
    };
    $.ajax({
        url: base_url + "checkout/add_address",
        method: "POST",
        data: data,
        success: function (response) {

            if (response.status = 'success') {
                // alert('Heeeeeee');
                $('#status').html(`<p class="alert alert-success">${response.message}</p>`).slideDown('fast').delay(3000).slideUp('slow');
                $('#processing').hide();
                $('#delivery-method').load(`${base_url}checkout #delivery-method`, function () {
                    $('.billing-address').on('click', get_updates);
                    $('.delivery-address').on('click', get_updates);
                });
                show_page = page => {
                    $('#register_address').hide();
                    $('#pickup_address').hide();
                    $('#delivery_address').hide();
                    $(`#${page}`).show();
                };

            } else {
                $('#processing').hide();
                $('#status').html(`<div class="alert alert-danger">${response.message}</div>`).slideDown('fast').delay(300000).slideUp('slow');
            }
        },
        error: function (response) {
            console.log( response);
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
    if (!state_is_fetched) {
        $.getJSON(base_url + 'ajax/fetch_states', function (d) {
            state_is_fetched = true;
            $.each(d, function (k, v) {
                $('#state').append($('<option></option>').attr('value', v.id).text(ucwords(v.name)));
            })
        });
    }
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


$('.pickup-address').on('click', get_pickup_updates);
$('.delivery-address').on('click', get_updates);

/*
* Pickup location updates
* */
function get_pickup_updates() {
    start_loading();
    $('.pickup-address').removeClass('custom-panel-active');
    $('.address-input').prop('checked', false);
    $('.delivery-address').removeClass('custom-panel-active');
    let this_ = $(this);
    let pk_id = $(this).data('id');
    let amount = $(this).data('pamount');
    let pickup_address = $(this).data('paddress');
    $(`#pickup_id_${pk_id}`).prop('checked', true);

    let quantity_instance = $('.pr-summary-count').data('quantity') * 1;
    let price_instance = amount * 1;
    let sub_total = price_instance * quantity_instance;
    bind_market(format_currency(sub_total), 'charges');
    bind_market(format_currency($('.total-sum').data('amount') + sub_total), 'total-sum-charges');
    $('#total_charge').val($('.total-sum').data('amount') + sub_total);
    $('#qty').val(quantity_instance);
    $('.payment_method_body').show(300);
    this_.addClass('custom-panel-active');
    $('.pay-method').show();
    $('.delivery-warning').text(`You selected our ${pickup_address} pickup address.`);
    setTimeout(finish_loading, 420);
}

/*
* Get updates for billing address
* */
function get_updates() {
    start_loading();
    $('.delivery-address').removeClass('custom-panel-active');
    let ad_id = $(this).data('id');
    let elem = $(this);
    $(`#${ad_id}`).prop('checked', true);
    // Un-select pickup address
    $('.pickup-location').prop('checked', false);
    $('.pickup-location').removeClass('custom-panel-active');
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
                $('#total_charge').val($('.total-sum').data('amount') + sub_total);
                $('#qty').val(quantity_instance);
                $('.payment_method_body').show(300);
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
        $('.delivery-address').addClass('custom-panel-active');
        $('.pay-method').show();
        $('.delivery-warning').slideUp()
    }
});

$('.pay-method').on('click', function () {
    $('.pay-panel').removeClass('custom-panel-active');
    $(this).find('.pay-panel').addClass('custom-panel-active');
    $(this).find('.payment-radio').prop('checked', true);
    // $('.payment-radio').prop('checked', true);
    // $('.pay-panel').addClass('custom-panel-active');
    $('.continue-btn').prop('disabled', false);
});

$('.payment-radio').on('change', function () {
    $('.pay-panel').addClass('custom-panel-active');
    $('.continue-btn').prop('disabled', false)
});
$(function () {
    $('.lazy').Lazy();
});

$('.pay-panel').on('click', function () {
    let self = $(this);
    $('div.payment_note').hide();
    self.find('div.payment_note').show();
})
