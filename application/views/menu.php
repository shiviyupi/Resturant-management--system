<!doctype html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
  
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body style="background-color:black; color:cyan;">
  <Div class="container" style="margin-top:5px;">

    
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="<?php echo site_url('login3/register'); ?>"><STRONG>RESTURANT</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/register'); ?>"><strong>Home</strong> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="<?php echo site_url('login3/menu'); ?>">  <strong> Menu</strong></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/orders'); ?>">  <strong> Orders</strong></a>
      </li>
        </ul>   
 


           
    </div>
  </div>
</div>
    </ul>
    </form>
</div>
</nav>  
<div class="container">


  <div class="alert alert-danger" role="alert">
  <h1 class="text-center">FOOD MENU</h1>
</div>
   
      <!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-4 col-md-12 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k1.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k1.jpg'); ?>" 
        data-toggle="modal" data-target="#modal1"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k2.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k3.jpg'); ?>" 
      data-toggle="modal" data-target="#modal6"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k4.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k5.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal4"></a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-4 col-md-12 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k6.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/i1.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal2"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src=<?php echo base_url('images/k1.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k2.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal5"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k3.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer d-block d-md-flex justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k3.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal3"></a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

<!-- Grid column -->
<div class="col-lg-4 col-md-12 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k1.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k1.jpg'); ?>" 
        data-toggle="modal" data-target="#modal1"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k2.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k3.jpg'); ?>" 
      data-toggle="modal" data-target="#modal6"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k4.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k5.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal4"></a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-4 col-md-12 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k6.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/i1.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal2"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src=<?php echo base_url('images/k1.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k2.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal5"></a>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <!--Modal: Name-->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body mb-0 p-0">

          <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
            <iframe class="embed-responsive-item" src="<?php echo base_url('images/k3.jpg'); ?>"
              allowfullscreen></iframe>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer d-block d-md-flex justify-content-center">
          <span class="mr-4">Spread the word!</span>
          <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

          <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!--/.Content-->

    </div>
  </div>
  <!--Modal: Name-->

  <a><img class="img-fluid z-depth-1" src="<?php echo base_url('images/k3.jpg'); ?>" alt="video"
      data-toggle="modal" data-target="#modal3"></a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

      </DIV>
         
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

<!-- Grid row -->
<div class="row mt-3">

  <!-- Grid column -->
  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

    <!-- Content -->
    <h6 class="text-uppercase font-weight-bold"> <strong style="color:red;"> RESTURANT</STRONG></h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>More nuanced in its flavours with only a hint of say, rose or sandalwood, this cuisine of the Nawabs is full of nazakat, Urdu for refinement.
    Contemporary beats in a Colonial-inspired lounge bar, where the music and drinks flow as naturally as the Gomti.

    </p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold" style="color:red;">Products</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a href="#!" style="color:cyan;text-decoration:none;">Orders</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;"> Languages</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Contact Us</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Terms of Use</a>
    </p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold" style="color:red;">Useful links</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Your Account</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Become an Affiliate</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Shipping Rates</a>
    </p>
    <p>
      <a href="#!"  style="color:cyan;text-decoration:none;">Help</a>
    </p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

    <!-- Links -->
    <h6 class="text-uppercase font-weight-bold" style="color:red;">Contact</h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
    <p>
      <i class="fas fa-envelope mr-3"></i> info@example.com</p>
    <p>
      <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
    <p>
      <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href="#"  style="color:cyan;text-decoration:none;"> resturant.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->


</div>

<p style="margin-left:550px;"> Desgined with <img src="<?php echo base_url('images/love1.jpg'); ?>" width="40px" height="30px"> By Shivangi</p>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>