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

//onclick trigger for quickview
$('.product-quick-view-btn').on('click', get_view);

function get_view() {
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
	if ($(this).data('qv') === true) {
		let id = $(this).data('qvc');
		let p_id = `.product-${id}`;
		qv_location = $(p_id);
	}


	$('.close_qv').on('click', function () {
		$('.test-div').remove();
	});

	$.ajax({
		url: base_url + 'ajax/quick_view',
		method: 'POST',
		data: {product_id: pr_id},
		success: function (response) {
			let quick = JSON.parse(response);
			qv_location.after(
				`<div class="col-md-12 test-div q_view clearfix">
			<div class="row">
			<div class="col-md-4">
				<img src="${img_src}" class="q_pr_img" alt="${title}" title="${title}">
			</div>
			<div class="col-md-8">
			<span class="close_qv"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
				<h1 class="q_pr_title">${title}</h1>
				<div class="q_view_high">
					<div class="q_skeleton_highlight">${quick.description}</div>
				</div>
				<div class="row" style="margin-top: 20px; margin-bottom: 10px">
									<div class="col-md-6">
					<h5 class="custom-product-page-option-title">Quantity:</h5>
						<ul>
							<li class="product-page-qty-item">
								<button type="button"
										class="product-page-qty product-page-qty-minus">-
								</button>
								<input data-range="10" name="quantity"
									   id="quan"
									   class="product-page-qty product-page-qty-input quantity"
									   type="text"
									   value="1"/>
								<button type="button"
										class="product-page-qty product-page-qty-plus">+
								</button>
							</li>
						</ul>
					</div>

					<div class="col-md-6" id="variation_container">
				
					</div>
				
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
		</div>`
			);
			if (quick.variation.length > 1) {

				$('#variation_container').append(
					`<h5 class="custom-product-page-option-title">Variation:</h5>
<select class="product-page-option-select variation-select" id="variation_select" name="variation">
					</select>`
				);

				$.each(quick.variation, function (key, value) {
					$('#variation_select').append($('<option>', {
						value: value.variation_name,
						text: value.variation_name
					}));
					// `<select class="product-page-option-select variation-select"	name="variation">
					// 	<option title="${value.variation_name}"
					// 			data-id="${value.pid}"
					// 			value="${value.variation_name}">
					// 		${value.variation_name}
					// 	</option>
					// </select>`;

					// console.log(value.variation_name)
				});
			}
			// $.each(JSON.parse(response), function (key, value) {
			// 	$('.q_view_high').html(`
			// 		<p>${value.description}</p>
			// 		`)
			// });
		}
		,
		error: () => {
			console.log('An error occurred')
		}
	});
}
