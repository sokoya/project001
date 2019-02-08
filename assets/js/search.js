function highlight(hay, pin) {
	let b = hay;
	let q = pin;
	q = q.replace(/(\s+)/, "(<[^>]+>)*$1(<[^>]+>)*");
	let p = new RegExp(`(${q})`, "gi");
	b = b.replace(p, "<span class='highlight'>$1</span>");
	b = b.replace(/(<span>[^<>]*)((<[^>]+>)+)([^<>]*<\/span>)/, "$1</span>$2<span class='highlight'>>$4");
	return b;
}

//format currency
function format_currency(str) {
	return '₦' + str.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
}



$('body').on('click', function () {
	$('.src-cover').hide();
});

$('#all-category').on('change', function () {
	$('.site-search').val('');
});
$('.site-search').on('input', function () {
	let category = $('#all-category').find(":selected").val();
	if ($.trim(this.value).length === 0) {
		$('.src-cover').hide();
	} else {
		$('.src-cover').show();
		let query = $(this).val();
		$.ajax({
			url: base_url + 'ajax/search_complete',
			data: {search: query,category: category},
			method: 'POST',
			success: function (response) {
				if (response.products === undefined || response.products.length == 0) {
					$('.market-search').html(`
						<p class="search-header">No result(s) found for "${query}"</p>
						<li></li>
					`)
				} else {
					let html_var = ``;
					let categories_index = ``;
					let product_index = ``;

					$.each(response.categories, function (key, value) {
						categories_index += `<div class="search-titles" style="background: #fff; padding-bottom: 3px;">
								<p style="margin-right: 10px; margin-left: 14px">in <a style="text-decoration: none" href="${value.url}">${value.name}</a>
								<span style="float:right; color:#222;">${value.total_count} <span style="color:#777 !important">Results</span></span>
								</p>
								</div>`;
					});

					$.each(response.products, function (key, value) {
						product_index += `<li><a href="${base_url}${value.url}">
							<div class="row" >
								<div class="col-md-2 col-2 col-xs-2 col-sm-2 col-lg-2 n-margin">
									<img src="${value.image_path}"
										 class="search-image"/>
								</div>
								<div class="col-md-10 col-10 col-xs-10 col-sm-10 col-lg-10">
									<div class="search-display">
										<p>${highlight(value.product_name, query)}</p>
										<p class="price">${format_currency(value.price)}</p>
									</div>
								</div>
							</div>
						</a></li>`;
					});
					$('.market-search').html(`
						<p class="search-header">Categories</p>
						${categories_index}
						<p class="search-header">Products</p>
						${product_index}
					`)
				}
			},
			error: function (response) {
				console.log(response)
			}
		})
	}
});
