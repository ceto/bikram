/* ========================================================================
 * Bikram Scripts
 * by Gabor Szabo - http://hydrogene.hu
 * ======================================================================== */

(function($) {
})(jQuery); // Fully reference jQuery after this point.


$(document).foundation();


$(document).ready(function() {



    //********** Scroll Direction Check to Toggle Mobile Top bar *************//
    var yScrollStatus = $(window).scrollTop();
    var scrollDirection = 0;
    $(window).on('scroll', function(e) {
            var difi = ($(window).scrollTop() - yScrollStatus);
            if (difi > 0 ) {
              scrollDirection=(scrollDirection<0)?1:scrollDirection+1;
            } else {
              scrollDirection=(scrollDirection>0)?-1:scrollDirection-1;
            }
            //console.log(scrollDirection);
            if(scrollDirection < 1) {
              scrollDirection=0;
              $('.banner').addClass('banner--show');
            } else if (scrollDirection >= 1) {
              scrollDirection=0;
              $('.banner').removeClass('banner--show');
            }
            yScrollStatus=$(window).scrollTop();
            if ( (yScrollStatus >= 96 )  )  {
              $('.banner').addClass('banner--stucked');
            } else {
              $('.banner').removeClass('banner--stucked');
            }

        }
    );

  $('.facts > *:odd()').fitText( 0.8 );
  $('.facts > *:even()').fitText( 1.2 );
  $('.sitefooter__slogan > p').fitText( 1.2 );

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
    dots:false,
    slideBy:1,
    navText: ['‹', '›'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin:24
        },
        640:{
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

  var classcarousel = $('.class-carousel').owlCarousel({
    //margin:32,
    smartSpeed:500,
    //autoWidth:true,
    // mouseDrag:false,
    // touchDrag:false,
    // pullDrag:false,
    autoHeight:true,
    loop:false,
    items:1,
    nav:false,
    dots:true,
    slideBy:1,
    navText: ['‹', '›'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin:24
        },
        640:{
            items:1,
            margin:24
        },
        768:{
            items:2,
            margin:32
        },
        1024:{
            items:2,
            margin:32
        },
        1200:{
            items:2,
            margin:32
        }
    }
  });

    var teachercarousel = $('.teacher-carousel').owlCarousel({
    //margin:32,
    smartSpeed:500,
    //autoWidth:true,
    // mouseDrag:false,
    // touchDrag:false,
    // pullDrag:false,
    autoHeight:true,
    loop:false,
    items:1,
    nav:false,
    dots:true,
    slideBy:1,
    navText: ['‹', '›'],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            margin:24
        },
        640:{
            items:3,
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


    $('.owl-bupapslider').owlCarousel({
      autoWidth:true,
      loop:true,
      nav: true,
      navText: ['‹', '›'],
      responsive:{
        0:{
            items:1,

        },
        768: {
            items:2,
        },
        1240: {
          items:3,
        }
      }
    });

  // setTimeout(function() {
  //  minicalcarousel.trigger('refresh.owl.carousel');
  // }, 1500);

});
