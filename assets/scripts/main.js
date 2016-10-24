/* ========================================================================
 * Bikram Scripts
 * by Gabor Szabo - http://hydrogene.hu
 * ======================================================================== */

(function($) {
})(jQuery); // Fully reference jQuery after this point.


$(document).foundation();


$(document).ready(function(){

  var minicalcarousel = $('.minical-carousel').owlCarousel({
    //margin:32,
    smartSpeed:500,
    //autoWidth:true,
    // mouseDrag:false,
    // touchDrag:false,
    // pullDrag:false,
    autoHeight:true,
    loop:false,
    items:1,
    nav:true,
    dots:true,
    slideBy:1,
    //navText: ['<i class="icon icon--chevron-left" /><--', '--><i class="icon icon--chevron-right" />'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin:24
        },
        540:{
            items:1,
            margin:24
        },
        768:{
            items:1,
            margin:32
        },
        1024:{
            items:1,
            margin:32
        },
        1200:{
            items:1,
            margin:32
        }
    }
});

  // setTimeout(function() {
  //  minicalcarousel.trigger('refresh.owl.carousel');
  // }, 1500);

});
