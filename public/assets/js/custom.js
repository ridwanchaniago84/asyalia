var wrap = $("#sliderFix");

wrap.on("scroll", function(e) {
    
  if (this.scrollTop > 100) {
    wrap.addClass("fixed-slider");
  } else {
    wrap.removeClass("fixed-slider");
  }
  
});

// var header = $("#sliderFix");
//   $(window).scroll(function() {    
//     var scroll = $(window).scrollTop();
//       if (scroll >= 600) {
//         $("#dress").css({"padding-top":"90px"});
//         header.addClass("fixed-slider");
//         $(".sub-footer").css({"margin-bottom":"150x"});

//       } else {
//         $("#dress").css({"padding-top":"140px"});
//         header.removeClass("fixed-slider");
//       }
// });

// Navigasi Scroll

// All Section

// var dressSec = $("#dress").position().top;
// var typeSec = $("#type").position().top - 100;
// var colorSec = $("#color").position().top - 120;
// var sizeSec = $("#size").position().top + 90;
// var lenghtSec = $("#lenght").position().top + 370;
// var khimarSec = $("#khimar").position().top + 100;
// var niqobSec = $("#niqob").position().top + 150;

// Button Slider
// $("#buttonDress").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: dressSec
//   }, 500);
// });

// $("#buttonType").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: typeSec
//   }, 500);
// });

// $("#buttonColor").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: colorSec
//   }, 500);
// });

// $("#buttonSize").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: sizeSec
//   }, 500);
// });

// $("#buttonLenght").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: lenghtSec
//   }, 500);
// });

// $("#buttonKhimar").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: khimarSec
//   }, 500);
// });

// $("#buttonNiqob").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: niqobSec
//   }, 500);
// });

// $("#nextButton").click(function (){
//   $('html, body').stop(true, false).animate({
//       scrollTop: dressSec
//   }, 500);
// });

// var $w = $(window).scroll(function(){
  
//     if ( $w.scrollTop() < dressSec ) {   
//       $("#nextButton").click(function (){
//         $('html, body').stop(true, false).animate({
//             scrollTop: dressSec
//         }, 500);
//       });
//       $("#nextButton").html('PILIH DRESS');
//     }
//     if ( $w.scrollTop() > dressSec && $w.scrollTop() <= typeSec) {   
//       $("#nextButton").click(function (){
//         $('html, body').stop(true, false).animate({
//             scrollTop: typeSec
//         }, 500);
//       });
//       $("#nextButton").html('PILIH TYPE');
//     }
//     if ( $w.scrollTop() > typeSec ) {   
//       $("#nextButton").click(function (){
//         $('html, body').stop(true, false).animate({
//             scrollTop: colorSec
//         }, 500);
//       });
//       $("#nextButton").html('PILIH COLOR');
//     } else {
//       $("#nextButton").click(function (){
//         $('html, body').stop(true, false).animate({
//             scrollTop: $("#dress").offset().top
//         }, 500);
//       });
//     }
// });

// Single Checkbox
$('input[type="checkbox"]').on('change', function() {
  $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});

$('.btnNext').click(function() {
  $.each($('input[name="dressCheck"]:checked'), function(){
    var brandId = $(this).val()
    localStorage.setItem('brandId', brandId);
    $.ajax({
      url: '/type/' + brandId,
      type: 'get',
      data: { _token : $('#token').val() },
      success: function(data){
        $('#dataSec').html(data)
        $('.nav-tabs .active').parent().next('li').find('a').removeClass('disabled').trigger('click')

        $.ajax({
          url: '/sections/' + brandId,
          type: 'get',
          data: { _token : $('#token').val() },
          success: function(result){
            console.log(result)
          }
        });
      }
    });
  });
});

$('.btnPrevious').click(function() {
  $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
});