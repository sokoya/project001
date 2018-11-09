$.fn.quickViewNext = function (selector, steps, scope) {
	if (steps) {
		steps = Math.floor(steps);
	} else if (steps === 0) {
		return this;
	}
	else {
		let next = this.next(selector);
		if (next.length) return next;
		steps = 1;
	}
	scope = (scope) ? $(scope) : $(document);
	let kids = this.find(selector);
	let hay = $(this);
	while (hay[0] != scope[0]) {
		hay = hay.parent();
		let rs = hay.find(selector).not(kids).add($(this));
		let id = rs.index(this) + steps;
		if (id > -1 && id < rs.length)
			return $(rs[id]);
	}
	return $([]);
};

$('.product-quick-view-btn').on('click', function () {
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

		qv_location.after(
			`<div class="col-md-12 test-div q_view clearfix">
			<div class="row">
			<div class="col-md-4">
				<img src="${img_src}" class="q_pr_img" alt="${title}" title="${title}">
			</div>
			<div class="col-md-8">
				<h1 class="q_pr_title">${title}</h1>
				<div class="q_view_high">
					<div class="q_skeleton_highlight"></div>
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

		$.ajax({
			url: base_url + 'ajax/quick_view',
			method: 'POST',
			data: {product_id: pr_id},
			success: function (response) {
				$.each(JSON.parse(response), function (key, value) {
					$('.q_view_high').html(`
					<p>${value.highlights}</p>
					`)
				});
				console.log(response)
			},
			error: function (response) {
				console.log('An error occurred somewhere')
			}
		});


	}
);
