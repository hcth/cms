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

$(document).ready(function(){



//  var bannerWidth = $(".sl-boxes").width() + 10;
// console.log(bannerWidth);
//     $('.right-btn').click(function() {
//        $(this).parents(".sl-main-box").find(".sl-boxes").animate({
//         scrollLeft: "+="+bannerWidth+"px"
//       }, "fast");
//     });
//      $('.left-btn').click(function() {
//        $(this).parents(".sl-main-box").find(".sl-boxes").animate({
//         scrollLeft: "-="+bannerWidth+"px"
//       }, "fast");
//  });

//  var testw = $(".testimonial").width() + 10;
// console.log(testw);
//     $('.right-btn').click(function() {
//        $(this).parents(".sl-main-box").find(".sl-boxes").animate({
//         scrollLeft: "+="+testw+"px"
//       }, "fast");
//     });
//      $('.left-btn').click(function() {
//        $(this).parents(".sl-main-box").find(".sl-boxes").animate({
//         scrollLeft: "-="+testw+"px"
//       }, "fast");
//  });

});
 var lastScrollTop = 0;
 $(window).scroll(function(event){
  var st = $(this).scrollTop();
  if (st > lastScrollTop){
      if(st>200){
         $(".fx-header").addClass("active"); 
         $(".right-section").addClass("active"); 
                         
       }
  } 
  else {        
     $(".fx-header").removeClass("active");                
     $(".right-section").removeClass("active");                
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

// $(".plus").on("click", function(){
//   if ($(this).prev().val() < 10) {
//     $(this).prev().val(+$(this).prev().val() + 1);
//   }
// });

// $(".minus").on("click", function(){
//   if ($(this).next().val() > 1) {
//     if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
//   }

// });



/* $(() => {
  var createSlick = () => {
    let slider = $(".slider");

    slider.not(".slick-initialized").slick({
      autoplay: true,
      infinite: true,
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  };

  createSlick();
  $(window).on("resize orientationchange", createSlick);      
});

$(() => {
  var createSlick = () => {
    let slider = $(".testi-slider");

    slider.not(".slick-initialized").slick({
      autoplay: true,
      infinite: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  };

  createSlick();
  $(window).on("resize orientationchange", createSlick);      
});

$(() => {
  var createSlick = () => {
    let slider = $(".theme-boxes");

    slider.not(".slick-initialized").slick({
      autoplay: true,
      infinite: true,
      dots: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  };

  createSlick();
  $(window).on("resize orientationchange", createSlick);      
}); */