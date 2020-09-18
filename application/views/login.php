
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>DEMO RESTURANT</title>
  </head>
  <body style="background-color:black;color:cyan;"> 
  <div class="container" style="margin-top:10px;">
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#"><STRONG>RESTURANT</strong></a>
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
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/contactus'); ?>">  <strong> Contact us</strong></a>
      </li>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
       data-whatever="@mdo"  style="background-color:transparent;color:black;"> <strong>Register </strong></button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:red;text-align:center;">SIGNUP HERE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="<?php echo site_url('login3/register'); ?>">
<?php echo form_open('Login3/register'); ?>

          <div class="form-group" style="color:red;" > 
     <?php     echo form_label('enter your username', 'Username','col-form-label'); ?>  &nbsp;
             <?php echo form_input('username', '');?>


          
          </div>
          <div class="form-group" style="color:red;">

          <?php     echo form_label('Enter your password', 'password','col-form-label'); ?> &nbsp;
           <?php  echo form_input('password', ''); ?>
          </div>
          <div class="form-group" style="color:red;">   
        
          <a  href="<?php echo site_url('login3/login'); ?>">
      <strong>
      Want to Sign in? </strong> <span class="sr-only">(current)</span></a>
           
        </div>
      </div>
      <div class="modal-footer" >
     <?php echo form_submit('submit', 'Submit ' );?>
     <?php echo form_reset('reset', 'Reset' );?>
    
      </div>
    </div>
  </div>
</div>
    </ul>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" style="color:black;border-color:black;"aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:black;border-color:black;"> <strong>Search </strong></button>
    </form>
  </div>
</nav>
  
<div class="fluid">
<div id="carouselExampleControls" style="margin-top:0px;"class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="<?php echo base_url('images/i1.jpg'); ?> " height="400px" width="400px"
    
    class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/i2.jpg'); ?>"  height="400px" width="400px"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/i3.jpg'); ?>" height="400px" width="400px" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" >
    <a class="nav-link " style="color:cyan;" id="nav-home-tab" data-toggle="tab" href="#nav-home"
     role="tab" aria-controls="nav-home" aria-selected="true"> <strong>Overview </strong></a>
    <a class="nav-link"  style="color:cyan;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
     aria-controls="nav-profile" aria-selected="false"> <strong> Dining </strong></a>
    <a class="nav-link" style="color:cyan;" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" 
    aria-controls="nav-contact" aria-selected="false"> <Strong> Offers </Strong></a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

   <P><h3> <STRONG> RESTURANT </STRONG> </H3> <br>
   
   <H4>  <img src="<?php echo base_url('images/address.png'); ?>"  height="40px" width="40px" > <strong> Location :  </strong></h4> 
    <a href="#" style="color:cyan; text-decoration:none;"> 252/6 Nai Basti Kydganj Prayagraj </a>
    <br> Uttar Pradesh <br>
    211003
    <br> 
    
   <H4>  <img src="<?php echo base_url('images/phone.png'); ?>"  height="40px" width="40px" > <strong> Contact No :  </strong></h4> 
    <a href="#" style="color:cyan; text-decoration:none;"> +012345789 </a>
     <br>
    +912321232
    <br> 
      
     
   <H4> <img src="<?php echo base_url('images/hig.png'); ?>"  height="40px" width="40px" > <strong> Hotel Highlights  </strong></h4> 
    <a href="#" style="color:cyan; text-decoration:none;"> Located Adjacent to Gomti River </a>
     <br>
     20 Acres of Lush Lawns
    <br> 
    20 Acres of Lush Lawns <br> 24-Hour Fitness Centre
      

      
     
   <H4> <img src="<?php echo base_url('images/policy.jpg'); ?>"  height="40px" width="40px" > <strong> Hotel
      Policies </strong></h4> 
    <a href="#" style="color:cyan; text-decoration:none;"> Check-in from 12:00 PM </a>
     <br>
     Check-out till 12:00 AM 
    <br> 
    Early check-in and late check-out on request <br>  We accept American Express, Master Card, Visa, JCB International
    <BR>
    Pets are not allowed.
      
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div class="container">
  <div style="display:inline;">
   <img src="<?php echo base_url('images/i5.jpg'); ?>" width="400px" height="300px" >
</div>
 <div style="display:inline-block; margin-left:150px; margin-top:0px;" >
   <p><h3> MNQ RESTURANT </h3>
<br>  252/6 Nai Basti Kydganj<br> Prayagraj<br> Uttar Pradesh 

<br>  <a href="#" style="color:red;text-decoration:none;"> View Menu </a>
</p>

</div>

<div style="display:inline;">
   <img src="<?php echo base_url('images/i4.jpg'); ?>" width="400px" height="300px" >
</div>
 <div style="display:inline-block; margin-left:150px; margin-top:0px;" >
   <p><h3> PQR RESTURANT </h3>
<br>  252/6 Nai Basti Kydganj<br> Prayagraj<br> Uttar Pradesh 

<br>  <a href="#" style="color:red;text-decoration:none;"> View Menu </a>
</p>

</div>
<div style="display:inline;">
   <img src="<?php echo base_url('images/i6.jpg'); ?>" width="400px" height="300px" >
</div>
 <div style="display:inline-block; margin-left:150px; margin-top:0px;" >
   <p><h3> ABC RESTURANT </h3>
<br>  252/6 Nai Basti Kydganj<br> Prayagraj<br> Uttar Pradesh 

<br>  <a href="#" style="color:red;text-decoration:none;"> View Menu </a>
</p>

</div>
<div style="display:inline;">
   <img src="<?php echo base_url('images/i2.jpg'); ?>" width="400px" height="300px" >
</div>
 <div style="display:inline-block; margin-left:150px; margin-top:0px;" >
   <p><h3> XYZ RESTURANT </h3>
<br>  252/6 Nai Basti Kydganj<br> Prayagraj<br> Uttar Pradesh 

<br>  <a href="#" style="color:red;text-decoration:none;"> View Menu </a>
</p>

</div>

  </div>
  </div>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
   <img src="<?php echo base_url('images/offer.jpg'); ?>" width="1100px" height="400px"  >
</div>
 

  </div>
</div> 
  <div class="container"><br>
 <div style="display:inline-block;">
  <h2 style="color:red;"> <STRONG>PRODUCTS </STRONG> </h2>
  <H4> <a style="color:cyan;text-decoration:none;" href="#"> View Menu </a>  </H4>
 </div>
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
 <div style="display:inline-block;"> 
  <img src="<?php echo base_url('images/i3.jpg'); ?>" width="500px" height="200px">
 </div>

  </div>

  <div class="container"><br> 
  
<DIV style="display:inline-block;">  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp; 
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
&nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp; 
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
&nbsp; 
   <h3 STYLE="COLOR:RED;"> Chef XYZ </h3>
   <h4 STYLE="COLOR:RED;"> Executive Chef </h4>
   <p> Executive XYZ, who has put together our delightful menus has over two decades of experience at various iconic restaurants across Taj. A true culinary artist, he has gone back in time to uncover traditional cooking secrets and bring them to the table. He has also co-authored books on Awadhi cuisine and been host to a number of international heads of state and celebrities.
</p>
<h5> Contact: </h5> 012414141525 <br>
<h5> Email:</h5>xyz@gmail.com

</DIV>
<DIV style="display:inline-block;">
<img src="<?php echo base_url('images/chef.jpg'); ?>" width="400px" height="300px" style="border-radius:100%;">
</DIV>

</div>


<br>
 <div class="container">

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: brown;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="text-center">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

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



</html>