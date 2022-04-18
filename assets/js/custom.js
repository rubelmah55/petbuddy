
(function($) {
    "use strict";

    //slick-slider
 
    $('.slider-dog').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    // $(document).ready(function(){

    //     //Custom JS


    //     $('#hamburger').on('click', function() {            
    //         $('.mobile-nav').addClass('show');
    //         $('.overlay').addClass('active');
    //     });

    //     $('.close-nav').on('click', function() {            
    //         $('.mobile-nav').removeClass('show');            
    //         $('.overlay').removeClass('active');          
    //     });

    //     $(".overlay").on("click", function () {
    //         $(".mobile-nav").removeClass("show");
    //         $('.overlay').removeClass('active');
    //     });

    //     $("#mobile-menu").metisMenu();
    
    //     $(".popup-link").magnificPopup({
    //         type: 'image',
    //         fixedContentPos: false
    //     });
    
    //     $(".popup-gallery").magnificPopup({
    //         type: 'image',
    //         fixedContentPos: false,
    //         gallery: {
    //             enabled: true
    //         },
    //         // other options
    //     });
    
    //     $(".popup-video, .popup-vimeo, .popup-gmap").magnificPopup({
    //         type: "iframe",
    //         mainClass: "mfp-fade",
    //         removalDelay: 160,
    //         preloader: false,
    //         fixedContentPos: false
    //     });        
    
    // });

    //    Sticky Menu
    // $(window).scroll(function() {
    //     var Width = $(document).width();

    //     if ($("body").scrollTop() > 100 || $("html").scrollTop() > 100) {
    //         if (Width > 767) {
    //             $(".header-wrapper .main-menu-wrapper").addClass("sticky");
    //         }
    //     } else {
    //         $(".header-wrapper .main-menu-wrapper").removeClass("sticky");
    //     }
    // });

        
})(jQuery); // End jQuery
//javascript
function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}