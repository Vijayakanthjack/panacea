<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
          <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Visiting | Important Info" />
    <meta name="description" content="Visiting | Important Info">
    <meta name="author" content="Visiting | Important Info">

    <link rel="icon" href="public/images/h2m-fav.png" type="image/x-icon" />
      <title>Visiting | Important Info</title>
      <?php include "main_link_css_sub.php";?>
   </head>
   <body>

   <header>
     <?php include "header.php";?>
      <?php include "ourmenu.php";?>
   </header>

<section class="section-heading" style="background-image:url('public/images/innercollage.jpg')">
  <div class="container-fluid">
    <h2 class="title wow zoomIn animated" wow-data-duration="0.8s" style="visibility: visible;">Visiting | Important Info</h2>                                   
  </div><!-- .container -->
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
