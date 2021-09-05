<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/wow.min.js"></script>


<script>
$.fn.equalHeights = function(){
  var max_height = 0;
  $(this).each(function(){
    max_height = Math.max($(this).height(), max_height);
  });
  $(this).each(function(){
    $(this).height(max_height);
  });
};

$(document).ready(function(){
  $('.card').equalHeights();
card
});

</script>
<script>
$(document).ready(function(){
  $('.options').owlCarousel({
    loop:false,
    margin:30,
   nav: true,
   dots:false,
  navText: [
    "<i class='fa fa-chevron-left'></i>",
    "<i class='fa fa-chevron-right'></i>"
  ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
  
  $('.gallery-scroll-in').owlCarousel({
   autoplay: true,     
   autoplayHoverPause: true,
   autoplayTimeout: 10,
   autoplaySpeed: 12000,
   fluidSpeed:true,
   loop:true,
   margin:1,
   nav: false,
   dots:false,
/*navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
  ], */
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:7
    }
  }
});
$('.mantra-gallery').owlCarousel({
  loop:false,
  margin:30,
 nav: true,
 dots:false,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
});

$('.division-sec-inn').owlCarousel({
  loop:false,
  margin:30,
 nav: true,
 dots:true,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});

$('.blog-sec-in').owlCarousel({
  loop:false,
  margin:30,
 nav: true,
 dots:true,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});




$('.gallerybtm').owlCarousel({
  loop:false,
  margin:30,
 nav: false,
 dots:false,
 autoplay:true,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:6
      }
  }
});

$('.services-sec-in').owlCarousel({
  loop:false,
  margin:30,
 nav: false,
 dots:false,
 autoplay:true,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});

$('.testimonial-sec-in').owlCarousel({
  loop:false,
  margin:30,
 nav: false,
 dots:true,
 //autoplay:true,
navText: [
  "<i class='fa fa-chevron-left'></i>",
  "<i class='fa fa-chevron-right'></i>"
],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
});

$(".pop-flights").hover(function(){
    $(this).find('.img-text').toggle();
  });
});
           </script>

           <script>


    $(".hovermenu").click(function(e){
         e.stopPropagation();
    });

    $('body').click( function() {
        $('.hovermenu').hide();
    });
  </script>

           
<script>
$(document).ready(function(){
  new WOW().init();
});
</script>

<!-- <script>
$.fn.equalHeights = function(){
  var max_height = 0;
  $(this).each(function(){
    max_height = Math.max($(this).height(), max_height);
  });
  $(this).each(function(){
    $(this).height(max_height);
  });
};

$(document).ready(function(){
  $('.hot-deals .details-section').equalHeights();

});
</script> -->


<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
      function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
        $(this).toggleClass('open');        
      },
      function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
        $(this).toggleClass('open');       
      }
      );
  });

</script>




<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
  // jQuery code

  $("[data-trigger]").on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id =  $(this).attr('data-trigger');
    $(offcanvas_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");

  }); 


    // Close menu when pressing ESC
    $(document).on('keydown', function(event) {
      if(event.keyCode === 27) {
       $(".offcanvas").removeClass("show");
       $("body").removeClass("overlay-active");
     }
   });

    $(".btn-close, .screen-overlay").click(function(e){
      $(".screen-overlay").removeClass("show");
      $(".offcanvas").removeClass("show");
      $("body").removeClass("offcanvas-active");


    }); 

}); // jquery end
</script>
