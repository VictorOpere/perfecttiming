jQuery(document).ready(function(){

  jQuery(function() {

    'use strict';
  
    // bootstrap dropdown hover
  
    // loader
    var loader = function() {
      setTimeout(function() { 
        if(jQuery('#loader').length > 0) {
          jQuery('#loader').removeClass('show');
        }
      }, 1);
    };
    loader();
  
    // Stellar
    jQuery(window).stellar();
  
    
    jQuery('nav .dropdown').hover(function(){
      var jQuerythis = jQuery(this);
      jQuerythis.addClass('show');
      jQuerythis.find('> a').attr('aria-expanded', true);
      jQuerythis.find('.dropdown-menu').addClass('show');
    }, function(){
      var jQuerythis = jQuery(this);
        jQuerythis.removeClass('show');
        jQuerythis.find('> a').attr('aria-expanded', false);
        jQuerythis.find('.dropdown-menu').removeClass('show');
    });
  
  
    jQuery('#dropdown04').on('show.bs.dropdown', function () {
      console.log('show');
    });
  
  
  
    // home slider
    jQuery('.home-slider').owlCarousel({
      loop:true,
      autoplay: true,
      margin:10,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      autoplayHoverPause: true,
      items: 3,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:true
        }
      }
    });
  
    // owl carousel
    var majorCarousel = jQuery('.js-carousel-1');
    majorCarousel.owlCarousel({
      loop:true,
      autoplay: false,
      stagePadding: 0,
      margin: 10,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      dots: false,
      autoplayHoverPause: false,
      items: 3,
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:2,
          nav:false
        },
        1000:{
          items:3,
          nav:true,
          loop:false
        }
      }
    });
  
    // cusotm owl navigation events
    jQuery('.custom-next').click(function(event){
      event.preventDefault();
      // majorCarousel.trigger('owl.next');
      majorCarousel.trigger('next.owl.carousel');
  
    })
    jQuery('.custom-prev').click(function(event){
      event.preventDefault();
      // majorCarousel.trigger('owl.prev');
      majorCarousel.trigger('prev.owl.carousel');
    })
  
    // owl carousel
    var major2Carousel = jQuery('.js-carousel-2');
    major2Carousel.owlCarousel({
      loop:true,
      autoplay: true,
      stagePadding: 7,
      margin: 20,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      autoplayHoverPause: true,
      items: 4,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:3,
          nav:false
        },
        1000:{
          items:4,
          nav:true,
          loop:false
        }
      }
    });
  
  
   
  
    var contentWayPoint = function() {
      var i = 0;
      jQuery('.element-animate').waypoint( function( direction ) {
  
        if( direction === 'down' && !jQuery(this.element).hasClass('element-animated') ) {
          
          i++;
  
          jQuery(this.element).addClass('item-animate');
          setTimeout(function(){
  
            jQuery('body .element-animate.item-animate').each(function(k){
              var el = jQuery(this);
              setTimeout( function () {
                var effect = el.data('animate-effect');
                if ( effect === 'fadeIn') {
                  el.addClass('fadeIn element-animated');
                } else if ( effect === 'fadeInLeft') {
                  el.addClass('fadeInLeft element-animated');
                } else if ( effect === 'fadeInRight') {
                  el.addClass('fadeInRight element-animated');
                } else {
                  el.addClass('fadeInUp element-animated');
                }
                el.removeClass('item-animate');
              },  k * 100);
            });
            
          }, 100);
          
        }
  
      } , { offset: '95%' } );
    };
    contentWayPoint();
  
  
  
  });

});

