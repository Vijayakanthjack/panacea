<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Panacea" />
    <meta name="description" content="Panacea">
    <meta name="author" content="Panacea">

    <link rel="icon" href="public/images/panace-fav.png" type="image/x-icon" />
    <title>SPONSORSHIP</title>
    <?php include "main_link_css_sub.php";?>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include "header.php";?>
        <?php include "ourmenu.php";?>
    </header>
    <!--Sub page Header -->
    <section class="sub-hero-bg" style="background-image:url('public/images/exbhiting/b01.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="heading">
                        <h2>
                        SPONSORSHIP
                        </h2>

                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- Section Left content -->
    <section class="sponsorship">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12">

                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12">
                            <div class="heading">
                                <h2>
                                Enhance your participation with our various sponsorship<br> and additional branding opportunities
                              
                                </h2>
                                <h3>Please complete the form below to enquire about Sponsorship.</h3>
                            </div>


                            <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom01" placeholder="Email*" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom02" placeholder="First name*" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom03" placeholder="Last name*" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom04" placeholder="Job Title" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom05" placeholder="Company Name*" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <input type="text" class="form-control" id="validationCustom06" placeholder="Address" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
        <select id="Country*" class="form-control">
            <option>Country*</option>
            <option>India</option>
            <option>Canada</option>
            <option>Japan</option>
        </select>
        </div>
    </div>
    <div class="col-md-12">
      <div class="row">
    <div class="col-md-6">

      <input type="text" class="form-control" id="validationCustom07" placeholder="country code" value="" required>
    </div>
    <div class="col-md-6">

<input type="text" class="form-control" id="validationCustom07" placeholder="mobile*" value="" required>
    </div>
</div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">
    <div class="col-md-4">

      <input type="text" class="form-control" id="validationCustom08" placeholder="country code" value="" required>
    </div>
    <div class="col-md-4">

<input type="text" class="form-control" id="validationCustom08" placeholder="Area Code" value="" required>
    </div>
    <div class="col-md-4">

<input type="text" class="form-control" id="validationCustom08" placeholder="Telephone" value="" required>
    </div>
</div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-12">
      <input type="text" class="form-control" id="validationCustom06" placeholder="Website" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>



  </div>
  <div class="text-center">
  <button class="btn btn-primary " type="submit">Submit form</button>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


                        </div>
                    </div>

                    


                   
                </div>
                    <!-- Section Right sidebar -->
                    <div class="col-md-3 col-12">
                        <?php include "right_sidebar.php" ;?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include "footer.php";?>

    <?php include "main_link_js.php";?>

</body>

</html>