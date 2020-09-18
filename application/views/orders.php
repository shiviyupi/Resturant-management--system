<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Orders</title>
  </head>
  <body style="background-color:black;">
   
<div class="container" style="margin-top:5px;">

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="<?php echo site_url('login3/register'); ?>"> <strong> RESTURANT </strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/register'); ?>"> <STRONG>Home </STRONG> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/menu'); ?>"> <STRONG> Menu </STRONG></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('login3/orders'); ?>"> <STRONG> Orders </STRONG></a>
      </li>
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;


      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
      
      &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;    &nbsp;    &nbsp; 
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
      <li class="nav-item active">
      <img src= "<?php echo base_url('images/cart.png'); ?> " width="40px" height="40px" />
     
      </li> 
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </nav>
    <div class="alert alert-danger" role="alert">
        <h1 class="text-center" > Orders </h1> 
</div>

<div class="alert alert-danger" role="alert">
        <h1 class="text-center" > MENU </h1> 
         <table  class="table table-dark" border="1">
         <thead><tr>
 <TH CLASS="text-center"> 
   VEG  </TH>
   <TH CLASS="text-center">  NON VEG </TH>
  
            </tr>
          </thead>
     <tbody>
     
    <tr>
      <td>

      <form METHOD="POST"  action="<?php  echo site_url('login3/invoice'); ?>"> <strong>
      <?php echo form_open('login3/invoice'); ?>
  <label for="VEG">Snacks</label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
  <select name="Snacks" id="SNACKS"> 
    <option value="samosey">SAMOSEY</option>
    <option value="chaat">CHAAT</option>
    <option value="jalebi">JALEBI</option>
    <option value="choley channey">CHOLEY CHANNEY</option>
  </select>
  <br>
  <label for="maincourse">Main Course</label> &nbsp; &nbsp;
  <select name="maincourse" id="cars">
    <option value="paneer curry">PANEER CURRY</option>
    <option value="mushroom curry">MUSHROOM CURRY</option>
    <option value="aloo curry">ALLO CURRY</option>
    <option value="seasonal veg curry">SEASONAL VEG CURRY</option>
  </select>
  <br>
  <label for="desserts">DESSERTS</label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
  <select name="desserts" id="cars">
    <option value="rasgulla">RASGULLA</option>
    <option value="chene">CHENE</option>
    <option value="kala jaam">KALA JAAM</option>
    <option value="gulab jamun">GULAB JAMUN</option>
  </select>
  <br>
  <?php echo form_submit('submit', 'Order'); ?>
</form>
        </td>

</strong>
      <strong>
      <form METHOD="post"  action="<?php  echo site_url('login3/invoicenon'); ?>">
      <?php echo form_open('login3/invoicenon'); ?>
      <td> <strong>
    <label for="NONVEG"> Non Veg Snacks</label> &nbsp; &nbsp;
  <select name="nonvegsnacks" id="cars">
    <option value="chicken tikka">Chicken tikka</option>
    <option value="kabab">kabab</option>
    <option value="hariyali kabab">hariyali kabab</option>
    <option value="fish fried">fish fried</option>
  </select>
  <br>
  <label for="NONVEG MAIN COURSE">Main Course</label>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <select name="nonvegcurry" id="cars">
    <option value="fish curry">Fish CURRY</option>
    <option value="chicken curry">chicken CURRY</option>
    <option value="mutton curry">mutton CURRY</option>
    <option value="fried taang">Fried Taang</option>
  </select>
  <br>
  <label for="NON VEG DESSERTS">DESSERTS</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <select name="nonvegdesserts" id="cars">
    <option value="rasgulla">RASGULLA</option>
    <option value="chene">CHENE</option>
    <option value="kala jaam">KALA JAAM</option>
    <option value="gulab jamun">GULAB JAMUN</option>
  </select>
  <br>
  <?php echo form_submit('submit', 'Order'); ?>
   
</form>

</td>
      

</tbody>
         </table>
</div>
</strong>
</table>
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold"> <strong style="color:red;"> RESTURANT</STRONG></h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" >
        <p style="color:cyan">
        More nuanced in its flavours with only a hint of say, rose or sandalwood, this cuisine of the Nawabs is full of nazakat, Urdu for refinement.
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
        <p style="color:cyan;">
          <i class="fas fa-home mr-3" style="color:cyan;"></i> New York, NY 10012, US</p>
        <p style="color:cyan;">
          <i class="fas fa-envelope mr-3" style="color:cyan;"></i> info@example.com</p>
        <p style="color:cyan;">
          <i class="fas fa-phone mr-3" style="color:cyan;"></i> + 01 234 567 88</p>
        <p style="color:cyan;">
          <i class="fas fa-print mr-3" style="color:cyan;"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:cyan;text-decoration:none;">© 2020 Copyright:
    <a href="#"  style="color:cyan;text-decoration:none;"> resturant.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


 </div>

 <p style="margin-left:550px;color:cyan;"> Desgined with
  <img src="<?php echo base_url('images/love1.jpg'); ?>" width="40px" height="30px"> By Shivangi</p>

</div>




  </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>