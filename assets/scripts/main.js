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

    if ($('#instafeed').length) {
      var feed = new Instafeed({
        get: 'location',
        locationId: '3576608',
        accessToken: '306843849.ba4c844.edc12d767da4449092c3eaefc7d94056',
        template: '<a class="photostripe__item" target="_blank" href="{{link}}"><img src="{{image}}" alt="{{caption}}"></a>',
        sortBy: 'most-liked',
        limit: 10,
        resolution: 'standard_resolution'
      });
      feed.run();
    }

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
