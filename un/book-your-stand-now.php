<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
          <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Book Your Stand Now" />
    <meta name="description" content="Book Your Stand Now">
    <meta name="author" content="Book Your Stand Now">

    <link rel="icon" href="public/images/h2m-fav.png" type="image/x-icon" />
      <title>Book Your Stand Now</title>
      <?php include "main_link_css_sub.php";?>
   </head>
   <body>

   <header>
     <?php include "header.php";?>
      <?php include "ourmenu.php";?>
   </header>

<section class="section-heading" style="background-image:url('public/images/innercollage.jpg')">
  <div class="container-fluid">
    <h2 class="title wow zoomIn animated" wow-data-duration="0.8s" style="visibility: visible;">Book Your Stand Now</h2>                                   
  </div><!-- .container -->
</section>

<section class="sub-body">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12 col-lg-12 col-sm-12 col-12">
      
    <h4>
      If you are dealing in any of the below segments of Natural Products, then Exhibiting at Panacea - Natural Products Expo India becomes a Must.
   </h4>

    </div>
  </div>


<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i001.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Food & Beverages:</h4>
    <p>Natural & Organic Foods, Health and Dietary Supplements, Diet Products, Sports Food, Nutritional Drinks Antioxidants,  Fortified Foods, Fruits, Vegetables, Dairy Products, Readymade Meals, Soya Products, Honey, Dry Commodities, Cereals, Gluten-free Foods, Mineral Water & Beverages, Refrigerated / Frozen Foods, Marine & Other Products.....</p>
  </div>
</div>


<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i008.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Raw Material & Ingredients:</h4>
    <p>Plant Extracts Raw and Encapsulated Herbs, Spices, Natural Ingredients, Nutraceuticals, Functional Food & Bakery Ingredients, Cosmeceutical, Oil & Oilseed extract, Natural Essence, colors & Flavorings, etc….</p>
  </div>
</div>



<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i007.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Personal Care:</h4>
    <p>Cosmetics, Make-up, Skin & Hair, Dental, Baby Care, Fragrances & Perfumes, Body Care & Hygiene, Massage & Spa Products Essential oils & Aromatherapy….</p>
  </div>
</div>



<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i006.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Processing Equipments/Packaging:</h4>
    <p>Food, Beverage, Medicine, etc. Processing Technology, Specialized Packaging, Encapsulation Equipments, Labeling…</p>
  </div>
</div>



<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i004.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Natural Medicinal products:</h4>
    <p>Herbal, Ayurveda, Naturopathy, Homeopathy, Unani, Siddha, Chinese medicines and other Traditional medicines….</p>
  </div>
</div>



<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i003.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Other Natural Products:</h4>
    <p>Textile Fibres, Detergents, Pesticides, Fertilizers & Crop Care, Household Cleaners, Forest Produce, Bio-energetics & Essence Sticks….</p>
  </div>
</div>


<div class="media border p-3">
  <div class="img-in">
  <img src="public/images/i002.png" alt="John Doe" class="img-fluid">
  </div>

  <div class="media-body">
    <h4>Services:</h4>
    <p>Hospitals, Health Spas/Resorts, Hotels, Natural Remedies & Therapies, Universities & Institutes…</p>
  </div>
</div>

<div class="row">
     <div class="col-md-12 col-lg-12 col-sm-12 col-12" >

<p style="text-align: left !important;">
Book your space now! For further information on stall confirmation,
please complete the online enquiry form or contact us at - seishidocommunications@gmail.com</p>
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
