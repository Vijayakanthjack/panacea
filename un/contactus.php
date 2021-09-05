<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
          <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="H2M FOOD SERVICE SOLUTIONS" />
    <meta name="description" content="H2M FOOD SERVICE SOLUTIONS">
    <meta name="author" content="H2M FOOD SERVICE SOLUTIONS">

    <link rel="icon" href="public/images/h2m-fav.png" type="image/x-icon" />
      <title>CONTACT US</title>
      <?php include "main_link_css.php";?>
   </head>
   <body>

<?php include "header.php";?>
     





<section class="section-heading">
  <div class="container">
    <h2 class="title wow zoomIn animated" wow-data-duration="0.8s" style="visibility: visible;">Contact Us</h2>                                   
  </div><!-- .container -->
</section>

<section style="margin-bottom: 50px">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <img src="public/images/contactus-bg.jpg" class="img-fluid" />
        
      </div>
     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
      
        <div class="row">
          
          <div class="col-lg-12 col-12">
            <p>
              Aneesh V.P<br />
Managing Director
            </p>
          </div>
        </div>

        <div class="row">
        
          <div class="col-lg-12 col-12">
            <p>
             Corporate Division : +91 93 84 34 11 77
            </p>
          </div>
        </div>

                <div class="row">
         
          <div class="col-lg-12 col-12">
            <p>
             Kitchen Division : +91 93 85 47 01 00
            </p>
          </div>
        </div>

                <div class="row">
      
          <div class="col-lg-12 col-12">
            <p>
             Food Truck Division:  +91 93 84 34 11 77
            </p>
          </div>
        </div>

        <div class="row">
          
          <div class="col-lg-12 col-12 contact-in">
            <a href="www.h2m.in" title="www.h2m.in" target="_blank">
              www.h2m.in 
            </a>
          </div>
          <div class="col-lg-12 col-12">
           <br />
          </div>
        </div>

        <div class="row">
         
          <div class="col-lg-12 col-12 contact-in">
            <a href="info@h2m.in" title="info@h2m.in" target="_blank">
             info@h2m.in
            </a>
          </div>
        </div>

  

    </div>
  </div>
</div>
</section>


 <?php include "footer.php";?>
<?php include "main_link_js.php";?>

<script>
$(".pop-flights").hover(function(){
    $(this).find('.img-text').toggle();

});

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
  $('.hot-deals .details-section').equalHeights();

});
</script>


</body>

</html>
