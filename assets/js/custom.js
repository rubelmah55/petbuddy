
(function($) {
    "use strict";

    //slick-slider
 
    $('.slider-dog').slick({
      dots: true,
      arrows: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      
    });
  
      //slick-slider DogShop
    $('.slider-food').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<div class="slick-pvsev"></div>',
      nextArrow:  '<div class="slick-nextt"></div>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
    //Browse Page
    $('.header-offer').slick({
      infinite: false,
      speed: 100,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnDotsHover: true,
      pauseOnHover: true,
      touchThreshold:5,
      prevArrow: '<div class="slick-browseProw"></div>',
      nextArrow:  '<div class="slick-browseNext"></div>',
    });
    $('#toggle').click( function() {
      if ($(this).html() == ''){
         $('.header-offer').slick('slickPause')
         $(this).html('') 
      } else {
        $('.header-offer').slick('slickPlay')  
        $(this).html('<i class="bi bi-play-circle"></i>') 
      }  
    });
  
    $('.slider-food-2').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<div class="slick-pvsev-2"></div>',
      nextArrow:  '<div class="slick-nextt-2"></div>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        }
      ]
    });
  //link
        $(".dropdwon-0").click(function(){
          $(".nav-0").toggle("slow");
        });
        $(".dropdwon-1").click(function () {
          $(".nav-1").toggle("slow");
        })
        $(".dropdwon-2").click(function () {
          $(".nav-2").toggle("slow");
        })
        $(".dropdwon-3").click(function () {
          $(".nav-3").toggle("slow");
        })
        $(".dropdwon-4").click(function () {
          $(".nav-4").toggle("slow");
        })
        $(".dropdwon-5").click(function () {
          $(".nav-5").toggle("slow");
        })
        $(".dropdwon-6").click(function () {
          $(".nav-6").toggle("slow");
        })
        $(".dropdwon-7").click(function () {
          $(".nav-7").toggle("slow");
        })
        $(".Най-новите").click(function(){
          $(".dropdwon-seclet").slideToggle("slow");
        });
  
    //    Sticky Menu
    $(window).scroll(function() {
      var Width = $(document).width();

      if ($("body").scrollTop() > 100 || $("html").scrollTop() > 100) {
          if (Width > 767) {
              $(".header-wrapper").addClass("sticky");
          }
      } else {
          $(".header-wrapper").removeClass("sticky");
      }
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


   
})(jQuery); // End jQuery


function openNav() {
  document.getElementById("myNav").style.width = "70%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}



// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });
// }
const dropdwon = document.getElementsByClassName('dropdwon');
const x = document.getElementsByClassName("nav");
dropdwon.addEventListener('click', () => {
  x.classList.add('hide');
})