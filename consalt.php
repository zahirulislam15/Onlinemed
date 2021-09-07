 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Information </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

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
        <a href="index.html" class="navbar-brand text-warning font-weight-bold">Online Medical Store</a>

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
          <a class="dropdown-item" href="hospital info.php">Hospital Information</a>
          <a class="dropdown-item" href="contact.php">Call Ambulance</a>
          <a class="dropdown-item" href="consalt.php">Consalt A Doctor</a>
          <a class="dropdown-item" href="nurse.php">Nursing Services</a>
        </div>
      </li>
                

          </ul>
          
        </div>


                 


      </div>

    </nav>

 <!-- ===== nav end =====   -->




 <!-- ====consalt doctor ===== -->
 
     <div class="testimonial">
      <div class="small-container">
        <a href="consult-doc.php">
        <div class="row">
             
            
                       <?php

                          $con = mysqli_connect('localhost','root');

                          mysqli_select_db($con,'onlinemed');


                           $productshow = " SELECT * FROM `consult_doc_ad` ";

                           $showmedi = mysqli_query($con,$productshow);

                           // $do = mysqli_num_rows($showmedi);


                           while ($result = mysqli_fetch_array($showmedi)) {
                              
                               ?> 

          
            <div class="col-3">
              <i class=" fa fa-quote-left"></i>
              <p><?php echo $result['details']?></p>
             
                    
                    <h3><?php echo $result['name']?></h3>
                    <p><?php echo $result['degree']?></p>

                    <p>Time Table : <?php echo $result['time']?> - <?php echo $result['end_time']?> </p>
            </div>
          

          <?php
               }
          ?>
          
        </div>
        </a>
      </div>
     </div> 
      
     



 <!-- ==== consalt doctor end ==== -->














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
    <p>MOnday: 9am - 5pm</p>
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
