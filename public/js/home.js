$(document).ready(function () {
    $('.prev-btn').on('click', function () {
        $('#carouselExampleIndicators').carousel('prev');
    });

    $('.next-btn').on('click', function () {
        $('#carouselExampleIndicators').carousel('next'); 
    });
});