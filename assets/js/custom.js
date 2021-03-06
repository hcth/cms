jQuery(document).ready(function( $ ) {
    
        
    $( ".datepicker" ).datepicker();

    /* Menu Mobile */
    var $menu_show = $('.mobile-toggle'),
        $menu = $('header #menu-main'),
		$list = $("ul.nav-menu li a"),
        $menu_list = $('header li.has-dropdown'),
        $menu_ul = $('ul.sub-menu'),
        $cart_model = $('.cart-model'),
        // $cart_link = $('#cart-link'),
        // $search_bar = $('#search_bar'),
        $search_close = $('.close-search'),
        // $search_bot = $('#search-header'),
        // $fixed_header = $('#fixed-header'),
        // $fixed_header_dark= $('#fixed-header-dark'),
        $sticky_content = $('.sticky-content'),
        $sticky_sidebar = $('.sticky-sidebar');
	
	// var list = $("ul.nav-menu li  a"); //Liste de tout les liens
	//Gestion du clique sur le boutton des trois bars afin d'afficher le menu dans les support avec un width <769
	$menu_show.click(function(event){
		$menu.slideToggle();
	}); 
	//Gestion des cliques sur les liens avec élimination du comportement par défaut du a dans le cas où il existe un sous menu
	$list.click(function (event) {
		var submenu = this.parentNode.getElementsByTagName("ul").item(0);
		//S'il existe un sous menu sinon c'est un lien terminal
		if(submenu!=null){
			event.preventDefault();
			$(submenu).slideToggle();
		}
	});

	//Gestion du resize de la fenetre pour eliminer le style ajouté par la méthode .slideToggle()
	$(window).resize(function () {
		if ($(window).width() > 1024) {
			$("#menu-main > ul, nav > #menu-main  li  ul").removeAttr("style");
		}
	});
	
    
    /* Cart */

 //    $cart_link.click(function(){
 //        $cart_model.slideToggle("fast");
 //    });
	
	// $(window).click(function() {
 //        $cart_model.hide("fast");
	// });
	// $cart_link.click(function(event){
	// 	event.stopPropagation();
	// });
	
	/* Cart */
	
	
	/* Search */

 //    $search_bot.click(function(){
 //        $search_bar.slideToggle("fast");
 //    });
	// $search_close.click(function() {
 //        $search_bar.hide("fast");
	// });

		//fixed header

      // var prevScrollpos = window.pageYOffset;
      //   window.onscroll = function() {
      //   var currentScrollPos = window.pageYOffset;
      //     if (prevScrollpos > currentScrollPos) {
      //       document.getElementById("header").style.top = "0";  
      //     } else {
      //       document.getElementById("header").style.top = "-125px";                        
      //     }
      //     prevScrollpos = currentScrollPos;
      //   } 
	
	/* owl Slider  */
	  var owl = $(".travelers-say");
	  var owl2 = $(".slider-1");
	  var owl3 = $(".travelers-say-3");

	  owl.add(owl2).owlCarousel({
		  dotsContainer: '#carousel-custom-dots',
		  items : 1,  
		  itemsDesktop : [1000,2], 
		  itemsDesktopSmall : [900,2],  
		  itemsTablet: [600,1], 
		  itemsMobile : false  
	  });
	  owl3.owlCarousel({
		  dotsContainer: '#carousel-custom-dots',
		  items : 2,  
		  itemsDesktop : [1000,2], 
		  itemsDesktopSmall : [900,2],  
		  itemsTablet: [600,1],  
		  itemsMobile : false  
	  }); 

	/* Tooltip  */
	  $('[data-toggle="tooltip"]').tooltip()

	
	/* Light Box */

	// $(document).on('click', '[data-toggle="lightbox"]', function(event) {
 //        event.preventDefault();
 //        $(this).ekkoLightbox();
	// });


	/* fixed header */	

	    // $(window).on('scroll', function () {

	    //     if ($(window).width() > 992) {
	    //         if ($(this).scrollTop() > 1) {
	    //             $('#fixed-header').addClass("sticky");
	    //         }
	    //         else {
	    //             $('#fixed-header').removeClass("sticky");
	    //         }
	    //     }
	    // });




    
    
	/**************
	 Sticky Sidebar 
	**************/

    $sticky_content.theiaStickySidebar({
        additionalMarginTop: 110
	 });
    $sticky_sidebar.theiaStickySidebar({
        additionalMarginTop: 110
	 });

    
    
    
	/**************
	 One Page 
	**************/

	// $(".nav-btn").click(function(){		
	// 	$(this).addClass("active");
	// 	$(this).siblings().removeClass("active");
		
	// 	var i = $(this).index();
	// 	$('#nav-indicator').css('left', i*100 + 'px');			
		
	// 	var name = $(this).attr("data-row-id");
	// 	var id = "#" + name;
	// 	var top = $(id).first().offset().top -60;			
	// 	$('html, body').animate({scrollTop: top+'px'}, 300);
		
	// });


    /**************************************************** 
                          Logo Center                  
    /****************************************************/
  // var $logo = $('.div-center'),
  //     $header_output = $('.with-center');
   

  // $(window).resize(function (){
  //     $logo.css({
  //       "padding-top" : ($header_output.height() - ($logo.outerHeight()+100))/2 ,
  //       "padding-bottom" : ($header_output.height() - ($logo.outerHeight()+100))/2
  //     });
  //  });
  //  $(window).resize();

   // accorion panel
   function toggleIcon(e) {
    $(e.target)
        .prev('.card-header')
        .find(".more-less")
        .toggleClass('fa-minus');
	}
	$('#accordion').on('hidden.bs.collapse', toggleIcon);
	$('#accordion').on('shown.bs.collapse', toggleIcon);  


	// scroll top
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 50) {
	        $('.scrolltop:hidden').stop(true, true).fadeIn();
	    } else {
	        $('.scrolltop').stop(true, true).fadeOut();
	    }
	});
	$(function() {
	    $(".scroll").click(function() {
	        $("html,body").animate({
	            scrollTop: $(".thetop").offset().top
	        }, "1000");
	        return false
	    })
	});

	// added new code for home page by milind
           $('.owl_carousel_home').owlCarousel({
              loop:true,
              margin:10,
              autoplay:true,
              dots:false,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:2,
                      nav:false
                  },
                  1000:{
                      items:2,
                      nav:true
                  }
              }
          });

            $('.owl_carousel_similar').owlCarousel({
              loop:true,
              margin:10,
              dots:false,
              autoplay:true,
              responsiveClass:true,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:3,
                      nav:false
                  },
                  1000:{
                      items:3,
                      nav:true
                  }
              }
          });


	

});

$("#filerItems .fl-bx").on("click", function(){
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
 });

 // $(".destination-list li button").on("click", function(){
 //   var dText =  $(this).text();
 //   $(this).parents(".fl-bx").children(".fl-list").find("span").text(dText);
 //   $(this).parents(".fl-bx").children(".fl-list").find("span").attr('title',""+dText+"");
 // });

 $(document).mouseup(function(e) 
{
  var container = $(".fl-bx");
 
  if (!container.is(e.target) && container.has(e.target).length === 0) 
  {
      container.removeClass("active");     

  }
});


 var bannerWidth = $(".sl-main-box").width() + 42;
  $('.right-btn').click(function() {
    $(this).parent().find('.left-btn').show();
     $(this).parents(".sl-main-box").find(".sl-boxes").animate({
      scrollLeft: "+="+bannerWidth+"px"
    }, "fast");
  });
   $('.left-btn').click(function() {
     $(this).parents(".sl-main-box").find(".sl-boxes").animate({
      scrollLeft: "-="+bannerWidth+"px"
    }, "fast");
  });
   
 var lastScrollTop = 0;
 $(window).scroll(function(event){
  var st = $(this).scrollTop();
  if (st > lastScrollTop){
      if(st>200){
         $(".fx-header").addClass("active"); 
         $(".tag-section").addClass("active"); 
                         
       }
  } 
  else {        
     $(".fx-header").removeClass("active");                
     $(".tag-section").removeClass("active");                
  }
   lastScrollTop = st;

 });

 $(".open-menu").on("click", function(){
    $(".advent-sidebar").addClass("active");
    $(".advent-action-overlay").addClass("active");
    $("body").addClass("over-hide");
 });

 $(".advent-action-overlay").on("click", function(){
    $(".advent-sidebar").removeClass("active");
    $(this).removeClass("active");
    $("body").removeClass("over-hide");            
 });

 $(".advent-close").on("click", function(){
    $(".advent-sidebar").removeClass("active");
    $(".advent-action-overlay").removeClass("active");
    $("body").removeClass("over-hide");            
 });

 $("#gallary-list .sl-img img").on("click", function(){
  var gallary = $(this).attr("src"); 
  $(".gallery-img img").attr("src",""+gallary+"");
 });

if($("#gallary-list .sl-items").length>5){
    $(".gallary-list .sl-controller").show();
  }else{
    $(".gallary-list .sl-controller").hide();
  }

 var gallary_list = $(".gallary-list").width();
  $('.g-right-btn').click(function() {
     $(this).parents(".sl-main-box").find(".gallary-list").animate({
      scrollLeft: "+="+gallary_list+"px"
    }, "fast");
     $(this).parent().find('.g-left-btn').show();
  });
   $('.g-left-btn').click(function() {
     $(this).parents(".sl-main-box").find(".gallary-list").animate({
      scrollLeft: "-="+gallary_list+"px"
    }, "fast");
  });


 
 $(".faq-question").on("click", function(){
  
  $(this).siblings(".ans-box").slideDown();
  $(this).parents(".faq-list").siblings().find(".ans-box").slideUp();

  $(this).addClass("active");
  $(this).parents(".faq-list").siblings().find(".faq-question").removeClass("active");

  $(this).children(".sign").text("-");
  $(this).parents(".faq-list").siblings().find(".faq-question").find(".sign").text("+");
});

 // $(".bx-list-items").mouseover(function(){
 //  $(this).children(".txt-box").find(".s-list").addClass("active");
 // });
 //  $(".bx-list-items").mouseout(function(){
 //  $(this).children(".txt-box").find(".s-list").removeClass("active");
 // });

$(".plus").on("click", function(){
  if ($(this).prev().val() < 10) {
    $(this).prev().val(+$(this).prev().val() + 1);
  }
});

$(".minus").on("click", function(){
  if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
  }

});