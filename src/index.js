$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
    $('.techIcons').on('mouseover', function() {
        $(this).siblings().css("color","#7A4419");
    });
    $('.techIcons').on('mouseleave', function() {
        $(this).siblings().css("color","#dfdfdf");
    });
    $('.socialLinks').on('mouseover', function() {
        $(this).siblings().css("color","#7A4419");
    });
    $('.socialLinks').on('mouseleave', () => {
        $(this).siblings().css("color","#dfdfdf");
    });
});