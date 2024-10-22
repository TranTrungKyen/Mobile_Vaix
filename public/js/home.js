$(document).ready(function () {
    $('body').on('click', '.prev-btn', function () {
        $('#carouselExampleIndicators').carousel('prev');
    })
    $('body').on('click', '.next-btn', function () {
        $('#carouselExampleIndicators').carousel('next');
    })
});