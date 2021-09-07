 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Doctor </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-image: : url(./doctor2.jpg)no-repeat;">

<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Hospital Information</a>
          <a class="dropdown-item" href="#">Call Ambulance</a>
          <a class="dropdown-item" href="#">Consalt A Doctor</a>
          <a class="dropdown-item" href="#">Nursing Services</a>
        </div>
      </li>
        
      </ul>
    </div>
 </div>
</nav> -->

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      
      <div class="container">
        <a href="index.php" class="navbar-brand text-warning font-weight-bold">Online Medical Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-collaps="#collapsenavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="collapsenavbar">

          <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                   <a href="index.php" class="nav-link text-white">Home</a>

              </li>
                <li class="nav-item">
                   <a href="" class="nav-link text-white">Log in</a>

              </li>
                <li class="nav-item">
                   <a href="" class="nav-link text-white">Register </a>

              </li>
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="hospital-info.php">Hospital Information</a>
          <a class="dropdown-item" href="contact.php">Call Ambulance</a>
          <a class="dropdown-item" href="consalt.php">Consalt A Doctor</a>
          <a class="dropdown-item" href="Nurse.php">Nursing Services</a>
        </div>
      </li>
                

          </ul>
          
        </div>


                 


      </div>

    </nav>

 <!-- ===== nav end =====   -->




 <!-- ==== contact ===== -->
 <section class="head pb-5" style="background-image:;
">
   <div class="container py-5" style="
    margin-top: 150px;
    padding-top: 87px;
    
    ">
     <div class="card">
       <div class="card-body">
          <h1 class="font-weight-light text-center py-3">Call a Nurse</h1>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
             <div class="row pt-3">
               <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                 <span style="font-size: 30px; color: cadetblue; 
"><i class="fa fa-map-marker" aria-hidden="true" style="margin-bottom: -40;    margin-left: -180;"></i></span>

               </div>
               <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                 <h3 class="font-weight-light">Find Us</h3>
                 <p>House:70 , Block:C ,<br> Road:10 Uttara,Dhaka-1230</p>
               </div>
             </div> 
               <div class="row pt-3">
               <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                 <span style="font-size: 30px; color: coral;"><i class="fa fa-phone"  style="margin-bottom: -40;    margin-left: -180;"></i></span>
               </div>
               <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                 <h3 class="font-weight-light">Call for Nurse</h3>
                 <p>Micle Jordan<br>
                 01768031053<br>
                 Mon-Fri, 8:00-22:00</p>
               </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <form method="POST">
                 
                 <?php

         $con = mysqli_connect('localhost','root');

        mysqli_select_db($con,'onlinemed');

          if(isset($_POST['submit'])){

           $name = $_POST['name'];
           $address = $_POST['address'];
           $purpose = $_POST['purpose'];
           $mobile = $_POST['mobile'];
           $q = " INSERT INTO `nursing_service`(`name`, `address`, `purpose`, `mobile`) VALUES ( '$name', '$address', '$purpose' , '$mobile' )";

           $query = mysqli_query($con,$q);
               }
        ?>

                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                  </div>
                  
                </div>
                <label>Your Address</label>
                <input type="text" placeholder="Address" name="address" class="form-control">
                <label>Mobile</label>
                <input type="number" placeholder="Mobile Number" name="mobile" class="form-control">
                <label>Purpose</label>
                <textarea class="form-control mb-3" placeholder="Write Purpose" name="purpose" cols="10" rows="5"></textarea>
                <button class="btn btn-primary float-right" name="submit" type="submit">Appoint Now</button>
              </form>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>
     



 <!-- ==== contact end ==== -->














<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
  <div class="col-md-4">
    
    <hr class="light">
    <p>01768031053</p>
    <p>Codecell.contact@gmail.com</p>
    <p>Uttara</p>
    <p>Dhaka-1230,Bangladesh</p>
  </div>

  <div class="col-md-4">
    <hr class="light">
    <h5>Our hours</h5>
    <hr class="light">
    <p>Monday: 9am - 5pm</p>
    <p>Saturday: 10am - 4pm</p>
    <p>Sunday: closed</p>
  </div>

  <div class="col-md-4">
    <hr class="light">
    <h5>Service Area</h5>
    <hr class="light">
    <p>Dhaka-1230,Bangladesh</p>
    <p>Dhaka-1230,Bangladesh</p>
    <p>Dhaka-1230,Bangladesh</p>
    <p>Dhaka-1230,Bangladesh</p>
  </div>
  <div class="col-12">
    <hr class="light-100">
    <h5>&copy; Codecell.com</h5>
  </div>
</div>    
</div>
</footer>



</body>
</html>
