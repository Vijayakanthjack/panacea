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
      <title>PRODUCTS</title>
      <?php include "main_link_css.php";?>
   </head>
   <body>

<?php include "header.php";?>
     


<section class="section-heading">
  <div class="container">
    <h2 class="title wow zoomIn animated" wow-data-duration="0.8s" style="visibility: visible;">Products</h2>                                   
  </div><!-- .container -->
</section>

<section style="margin-bottom: 50px">
  <div class="container">
    <div class="row">
     <div class="col-md-12 col-lg-12 col-sm-12 col-12">
      <p>
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
      <p>
        “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
      The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
      <p>
        The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.
      </p>
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
