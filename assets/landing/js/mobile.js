$('body').on('click', function () {
	$('.mobile-navbar').hide();
	$('.options').hide();
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
