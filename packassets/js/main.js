(function ($) {
  "use strict";  

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });   
 
    // focus sidebar form

    if($(window).width() < 767){

      $('a[href^="#sidebar_focus"]').click(function() { 
        $('html,body').animate({ scrollTop: $(this.hash).offset().top}, 1200); 
        $('#sidebar_focus').css('margin-top', '70px');
        return false; 
        e.preventDefault(); 
      }); 
  }

    // focus form
    if($(window).width() > 767){

        $('body').on('click','.similar_itineraries_focus', function(){
        $( ".page_block" ).fadeIn();
        $(".sidebar").css('z-index', '9999'); 
        // $('html, body').animate({scrollTop:'50px'}, 'slow');                                        
      });
       $( ".page_block" ).click(function() {
       $( ".page_block" ).hide();  
       $(".sidebar").css('z-index', '98');
      // $('html, body').animate({scrollTop:'0px'}, 'slow'); 
    });  
}

})(jQuery); 

