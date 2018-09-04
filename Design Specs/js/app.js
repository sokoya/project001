$(".nav-item").click(function () {
    $(this).find('.custom-fa-lg').toggleClass("fa-angle-up");
});

$(document).ready(function () {
    $('.rootcat').select2();
    $('.subcat').select2();
    $('.cat').select2();
});