/*
* Notification message
* Notification types : ['success', 'error', 'warning']
* */

function notification_message(msg, icon = 'fa fa-info-circle', notification_type = '') {
	let background = '#408d47';
	let color = '#fff';
	switch (notification_type) {
		case 'success':
			background = '#408d47';
			break;
		case 'error':
			background = '#ce3f39';
			break;
		case 'warning':
			background = '#f9dc1b';
			color = '#181818';
			break;
		default:
			break
	}
	$('body').append(`
		<div class="notification" style="background: ${background}; color: ${color}">
			<i class="${icon}" aria-hidden="true"></i> ${msg}
		</div>
	`);
	$(".notification").delay(5000).fadeOut();
}


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
	$('.mobile-navbar').hide();
	$('.options').hide();
	$('.mobile-search-dropdown').hide();
});
$('.mobile-toggle').on('click', function (e) {
	e.stopPropagation();
	$('.mobile-navbar').toggle();
	$('.options').hide();
});
$('.mobile-navbar').on('click', function (e) {
	e.stopPropagation();
});
$('.account-dropdown').on('click', function (e) {
	e.stopPropagation();
	$('.mobile-navbar').hide();
	$('.options').toggle();
});
$('.options').on('click', function (e) {
	e.stopPropagation();
});

$('.search-input').on('input', function () {
	let append_location = $('.mobile-search-append');
	let location = $('.mobile-search-dropdown');
	let category = '';
	if ($.trim(this.value).length === 0) {
		location.hide();
	} else {
		location.show();
		let query = $(this).val();

		$.ajax({
			url: base_url + 'ajax/search_complete',
			data: {search: query, category: category},
			method: 'POST',
			success: function (response) {
				if (response === '') {
					append_location.html(`
						<p class="search-title">No result(s) found for "${query}"</p>
					`);
				} else {
					let categories_index = ``;
					let product_index = ``;

					$.each(response.categories, function (key, value) {
						categories_index += `
								<p><a href="${base_url}${value.url}">${value.name}</a></p>;
						`
					});

					$.each(response.products, function (key, value) {
						product_index += `
						<p><a href="${base_url}${value.url}">
							<div class="row" >
								<div class="col-md-2 col-2 col-xs-2 col-sm-2 col-lg-2 ">
									<img src="${value.image_path}"
										 class="mobile-search-image"/>
								</div>
								<div class="col-md-10 col-10 col-xs-10 col-sm-10 col-lg-10">
									<div class="search-titles">
										<p>${highlight(value.product_name, query)}</p>
										<p class="price">${format_currency(value.price)}</p>
									</div>
								</div>
							</div>
						</a></p>
						`
					});


					// $.each(response, function (key, value) {
					// 	html_var += `
					// 		<p><a href="${base_url}${value.url}">
					// 		<div class="row" >
					// 			<div class="col-md-2 col-2 col-xs-2 col-sm-2 col-lg-2 ">
					// 				<img src="${value.image_path}"
					// 					 class="mobile-search-image"/>
					// 			</div>
					// 			<div class="col-md-10 col-10 col-xs-10 col-sm-10 col-lg-10">
					// 				<div class="search-titles">
					// 					<p>${highlight(value.product_name, query)}</p>
					// 					<p class="price">${format_currency(value.price)}</p>
					// 				</div>
					// 			</div>
					// 		</div>
					// 	</a></p>`;
					// });
					append_location.html(`
						<p class="search-title">Categories</p>
						${categories_index}
						<p class="search-title">Products</p>
						${product_index}
					`)
				}
			},
			error: function (response) {
				console.log(response)
			}
		})


	}

	// notification_message($(this).val(), 'fa fa-info-circle', 'success')
});
