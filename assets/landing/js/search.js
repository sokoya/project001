//format currency
function format_currency(str) {
	return '₦' + str.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
}

$('.site-search').on('focusout', function () {
	$('.src-cover').hide();
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
				if (response === '') {
					$('.market-search').html(`
						<li>No result(s) found for ${query}</li>
					`)
				} else {
					$.each(response, function (key, value) {
						$('.market-search').html(`
						<p class="search-header">Products</p>
						<li><a href="${base_url}${value.url}">
							<div class="row" >
								<div class="col-md-2 col-2 col-xs-2 col-sm-2 col-lg-2 n-margin">
									<img src="${value.image_path}"
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
				}
			},
			error: function (response) {
				console.log(response)
			}
		})
	}
});
