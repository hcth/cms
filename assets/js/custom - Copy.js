jQuery(document).ready(function( $ ) {
    
        
    $( ".datepicker" ).datepicker();

    /* Menu Mobile */
    var $menu_show = $('.mobile-toggle'),
        $menu = $('header #menu-main'),
		$list = $("ul.nav-menu li a"),
        $menu_list = $('header li.has-dropdown'),
        $menu_ul = $('ul.sub-menu'),
        $cart_model = $('.cart-model'),
        $cart_link = $('#cart-link'),
        $search_bar = $('#search_bar'),
        $search_close = $('.close-search'),
        $search_bot = $('#search-header'),
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
    $cart_link.click(function(){
        $cart_model.slideToggle("fast");
    });
	
	$(window).click(function() {
        $cart_model.hide("fast");
	});
	$cart_link.click(function(event){
		event.stopPropagation();
	});
	/* Cart */
	
	
	/* Search */
    $search_bot.click(function(){
        $search_bar.slideToggle("fast");
    });
	$search_close.click(function() {
        $search_bar.hide("fast");
	});

	
	/* owl Slider  */
	  var owl = $(".travelers-say");
	  var owl2 = $(".slider-1");
	  var owl3 = $(".travelers-say-3");

	  owl.add(owl2).owlCarousel({
		  dotsContainer: '#carousel-custom-dots',
		  items : 1, //10 items above 1000px browser width
		  itemsDesktop : [1000,2], //5 items between 1000px and 901px
		  itemsDesktopSmall : [900,2], // betweem 900px and 601px
		  itemsTablet: [600,1], //2 items between 600 and 0
		  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	  });
	  owl3.owlCarousel({
		  dotsContainer: '#carousel-custom-dots',
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1000,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [900,3], // betweem 900px and 601px
		  itemsTablet: [600,1], //2 items between 600 and 0
		  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
	  });

	/* Tooltip  */
	  $('[data-toggle="tooltip"]').tooltip()

	
	/* Light Box */
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
	});
    
    
    /*  $fixed_header */
    // $(window).scroll(function(){
    //     if ($(window).scrollTop() >= 200) {
    //        $fixed_header.addClass('fixed-header');
    //        $fixed_header_dark.addClass('fixed-header-dark');
    //     }
    //     else {
    //        $fixed_header.removeClass('fixed-header');
    //        $fixed_header_dark.removeClass('fixed-header-dark');
    //     }
    // });



    // var navBottom = $(".nav-bottom").offset();

        // $(window).on('scroll', function () {
        //     var w = $(window).width();
            
        //         if (w > 768) {
        //             if ($(this).scrollTop() > 1) {
        //                 $('#fixed-header').addClass("sticky");
        //             }
        //             else {
        //                 $('#fixed-header').removeClass("sticky");
        //             }
        //         }
        //      else {
        //         if (w > 768) {
        //             if ($(this).scrollTop() > navBottom.top + 100) {
        //                 $('#fixed-header').addClass("sticky");
        //             }
        //             else {
        //                 $('#fixed-header').removeClass("sticky");
        //             }
        //         }
        //     }
        // });


        $(window).on('scroll', function () {
        	
            if ($(window).width() > 992) {
                if ($(this).scrollTop() > 1) {
                    $('#fixed-header').addClass("sticky");
                }
                else {
                    $('#fixed-header').removeClass("sticky");
                }
            }
        });




    
    
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
	$(".nav-btn").click(function(){		
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
		
		var i = $(this).index();
		$('#nav-indicator').css('left', i*100 + 'px');			
		
		var name = $(this).attr("data-row-id");
		var id = "#" + name;
		var top = $(id).first().offset().top -60;			
		$('html, body').animate({scrollTop: top+'px'}, 300);
		
	});

    /**************************************************** 
                          Logo Center                  
    /****************************************************/
  var $logo = $('.div-center'),
      $header_output = $('.with-center');
   

  $(window).resize(function (){
      $logo.css({
        "padding-top" : ($header_output.height() - ($logo.outerHeight()+100))/2 ,
        "padding-bottom" : ($header_output.height() - ($logo.outerHeight()+100))/2
      });
   });
   $(window).resize();

   // accorion panel
   function toggleIcon(e) {
    $(e.target)
        .prev('.card-header')
        .find(".more-less")
        .toggleClass('fa-minus');
	}
	$('#accordion').on('hidden.bs.collapse', toggleIcon);
	$('#accordion').on('shown.bs.collapse', toggleIcon);  
});

