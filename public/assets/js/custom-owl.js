$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

$('.owl-carousel').owlCarousel({
    stagePadding: 20,
    margin: 10,
    dots:false,
    URLhashListener:true,
    startPosition: 'URLHash',
    nav: true,
    navText: [
        "<i class='fas fa-chevron-circle-left'></i>",
        "<i class='fas fa-chevron-circle-right'></i>"
    ],
    responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:7
        },
        1400:{
            items:7
        }
    }
})

$('.owl-carousel').on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        $('.owl-carousel').trigger('next.owl');
    } else {
        $('.owl-carousel').trigger('prev.owl');
    }
    e.preventDefault();
});
