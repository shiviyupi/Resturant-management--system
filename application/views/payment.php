<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>payment</title>
  </head>
  <body>
 <div class="container" >

   <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="margin-top:5px;">
  <a class="navbar-brand" href="#"> <h1 STYLE="COLOR:white;"> INVOICE </h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
 &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <P style="color:white;"> <strong> XYZ RESTURANT   
         <BR> 252/6 Nai basti kydganj <br>Prayagraj  </P> 
</strong>
        
        <span class="sr-only">(current)</span></a>
      </li>    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
 
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp
      <li class="nav-item">
        <a class="nav-link" href="#"><p style="color:white;"><strong> xyz@gmail.com <br> Contact No: 0123456789 </strong></p> </a>
      </li>
     
      
    </ul>
    
  </div>
</nav>
   <!-- doosra nav shuru ho raha hai -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:10px;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <P > <h3>   Email :    </h3>       
      </P> 
        <span class="sr-only">(current)</span></a>
      </li>  
       &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;     &nbsp; 
       &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp; 
       &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp; 
      
      <li class="nav-item active ">
        <a class="nav-link" href="#"><p> <h3> Time: </h3> </p> </a>
      </li>
    </ul>
  </div>
  </nav>

<br>  
<h4 class="text-center"> ORDERED ITEMS </h4>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Items</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php    foreach ($data->result() as $row) {
  echo  $row->snacks; 
   echo '<br/>';
 } 
?> </td>
<td>  <?php    foreach ($d as $row) {
  echo  $row->snacks_price; 
   echo '<br/>';
} ?>
</td>
<td> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td> 
        <?php    foreach ($d as $row) {
     $p= $row->maincourse;
  echo $p; 
   echo '<br/>';
 
} 


?></td>
      <td> <?php    foreach ($d as $row) {
    $s=$row->maincourse_price; 
    echo $s;
   echo '<br/>';
 
} 
?></td>
      <td> <?php    foreach ($d as $row) {


       }
?>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>
      <?php    foreach ($d as $row) {
  echo  $row->desserts; 
   echo '<br/>';
 
} 
?>
</td>
      <td>  <?php    foreach ($d as $row) {
  echo  $row->desserts_price; 
   echo '<br/>';
 
} 
?>

      </td>
      <td></td>
    </tr>
  </tbody>
</table>
 <div style="background-color:black;" >  
 
 <p class="text-right" >  
  <strong style="margin-right:200px; color:white;"> Subtotal: </strong> <br>
    <strong    style="margin-right:200px;color:white;"> Tax % :</strong>
 </p>

</div>



<div style="background-color:black;" >  
 
 <p class="text-right" >   <br>
  <strong style="margin-right:200px; color:white;"> Total Amount: </strong> <br>
   
 </p>

</div>
 
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>