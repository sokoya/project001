$.fn.isInViewport = function () {
	let elementTop = $(this).offset().top;
	let elementBottom = elementTop + $(this).outerHeight();
	let viewportTop = $(window).scrollTop();
	let viewportBottom = viewportTop + $(window).height();
	return elementBottom > viewportTop && elementTop < viewportBottom
};
$.fn.quickViewNext = function (selector, steps, scope) {
	if (steps) {
		steps = Math.floor(steps)
	} else if (steps === 0) {
		return this
	}
	else {
		let next = this.next(selector);
		if (next.length) return next;
		steps = 1
	}
	scope = (scope) ? $(scope) : $(document);
	let kids = this.find(selector);
	let hay = $(this);
	while (hay[0] != scope[0]) {
		hay = hay.parent();
		let rs = hay.find(selector).not(kids).add($(this));
		let id = rs.index(this) + steps;
		if (id > -1 && id < rs.length)
			return $(rs[id])
	}
	return $([])
};

$.fn.exists = function () {
	return this.length !== 0;
};

//onclick trigger for quickview
$('.product-quick-view-btn').on('click', get_view);

function get_view() {
	let _this_btn = $(this);
	_this_btn.prop('disabled', true);
	try {
		if ($('.q_view').isInViewport()) {
		} else {
			// noinspection JSCheckFunctionSignatures
			$('html, body').animate({scrollTop: '+=150px'}, 800);
		}
	}
	catch (e) {
		// noinspection JSCheckFunctionSignatures
		$('html, body').animate({scrollTop: '+=150px'}, 800);
	}

	let pr_id = $(this).data('pr_id');
	let title = $(this).data('title');
	let img_src = $(this).data('image');
	$('.test-div').remove();
	let qv_location = $(this).quickViewNext('.product_div');
	// if ($(this).quickViewNext('.product_div').exists()) {
	// 	console.log('There is next');
	// 	console.log($(this).quickViewNext('.product_div'));
	// } else {
	// 	console.log('No next')
	// }
	if ($(this).data('qv') === true) {
		let id = $(this).data('qvc');
		let p_id = `.product-${id}`;
		qv_location = $(p_id);
	}


	$.ajax({
		url: base_url + 'ajax/quick_view',
		method: 'POST',
		data: {product_id: pr_id},
		success: function (response) {
			_this_btn.prop('disabled', false);
			let quick = JSON.parse(response);
			qv_location.after(
				`<div class="col-md-12 test-div q_view clearfix">
			<div class="row">
			<div class="col-md-4">
				<img src="${img_src}" class="q_pr_img" alt="${title}" title="${title}">
			</div>
			<div class="col-md-8">
			<span class="close_qv"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
				<h1 class="q_pr_price">&#8358;26,000</h1>
				<h1 class="q_pr_title">${title}</h1>
				<ul class="product-page-product-rating" style="margin-bottom: 10px;">
					<li class="rated"><i class="fa fa-star"></i>
					</li>
					<li class="rated"><i class="fa fa-star"></i>
					</li>
					<li class="rated"><i class="fa fa-star"></i>
					</li>
					<li class="rated"><i class="fa fa-star"></i>
					</li>
					<li class="rated"><i class="fa fa-star"></i>
					</li>
					<li class="review-count-pr">420</li>
				</ul>
				<div class="q_view_high">
					<div class="q_skeleton_highlight">${quick.description}</div>
				</div>
				<div class="row" style="margin-top: 20px; margin-bottom: 10px">
									<div class="col-md-6">
					<h5 class="custom-product-page-option-title">Quantity:</h5>
						<ul>
							<li class="product-page-qty-item">
								<button type="button"
										class="product-page-qty product-page-qty-minus" id="${pr_id}_minus" data-target="${pr_id}">-
								</button>
								<input data-range="${pr_id}" name="quantity"
									   id="${pr_id}"
									   class="product-page-qty product-page-qty-input quantity"
									   type="text"
									   value="1" disabled/>
								<button type="button" id="${pr_id}_plus"
										class="product-page-qty product-page-qty-plus" data-target="${pr_id}">+
								</button>
							</li>
						</ul>
					</div>
					<div class="col-md-6" id="variation_container"></div>
				</div>
				<div class="row">
				<div class="col-md-6">
					<button class="btn btn-block btn-primary add-to-cart c-hover"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
				</div>
				<div class="col-md-6">
					<button class="btn btn-block btn-default fav c-hover"><i class="fa fa-star-o"></i> Wishlist</button>
				</div>
				</div>
			</div>	
			</div>
		</div>`);

			$('.close_qv').on('click', function () {
				$('.test-div').remove();
			});

			if (quick.variation.length > 1) {
				$('#variation_container').append(
					`<h5 class="custom-product-page-option-title">Variation:</h5>
						<select class="product-page-option-select variation-select" id="variation_select" name="variation">
					</select>`
				);
				$.each(quick.variation, function (key, value) {
					let constant_price = '';
					if (value.discount_price === '') {
						constant_price = value.sale_price
					} else {
						constant_price = value.discount_price
					}
					$('#variation_select').append($('<option>', {
						value: value.variation_name,
						text: value.variation_name + ' - ' + format_currency(constant_price)
					}));
				});
			}
			let plus = $('.product-page-qty-plus');
			let minus = $('.product-page-qty-minus');

			// noinspection JSJQueryEfficiency
			$(".product-page-qty-plus").on('click', function () {
				var currentVal = parseInt($(this).prev(".product-page-qty-input").val(), 10);

				if (!currentVal || currentVal == "" || currentVal == "NaN") currentVal = 0;

				$(this).prev(".product-page-qty-input").val(currentVal + 1);
			});

			// noinspection JSJQueryEfficiency
			$(".product-page-qty-minus").on('click', function () {
				var currentVal = parseInt($(this).next(".product-page-qty-input").val(), 10);
				if (currentVal == "NaN") currentVal = 1;
				if (currentVal > 1) {
					$(this).next(".product-page-qty-input").val(currentVal - 1);
				}
			});

			plus.prop('disabled', false);

			plus.on('click', function () {
				let target = $(this).data('target');
				let quantity = $(`#${target}`);
				$(`#${target}_minus`).prop("disabled", false);
				if (quantity.val() >= quantity.data('range')) {
					$(`#${target}_plus`).prop("disabled", true);
				}
			});

			minus.on('click', function () {
				let target = $(this).data('target');
				let quantity = $(`#${target}`);
				$(`#${target}_plus`).prop("disabled", false);
				if (quantity.val() <= 1) {
					$(`#${target}_minus`).prop("disabled", true);
				}
			});
		},


		error: () => {
			console.log('An error occurred')
		}
	});
}
