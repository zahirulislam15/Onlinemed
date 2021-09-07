 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Products</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <!-- ====== nav bar===== -->
      
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


       <div class="small-container">

          <div class="row row-2">
            <h2>All products</h2>
              <select>
                <option>Default Shorting</option>
                <option>Short by Price</option>
                <option>Short by Popularity</option>
                <option>Short by rating</option>
                <option>Short bt sale</option>
              </select>
          </div>


        	<div class="row">

                <?php

                          $con = mysqli_connect('localhost','root');

                          mysqli_select_db($con,'onlinemed');


                           $productshow = " SELECT * FROM `products` ";

                           $showmedi = mysqli_query($con,$productshow);

                           // $do = mysqli_num_rows($showmedi);


                           while ($result = mysqli_fetch_array($showmedi)) {
                              
                               ?> 
                <div class="col-4">
                       <div class="product"> 
                  <img src="admin/<?php echo $result['image']?>">
                  <h4><?php echo $result['name']?></h4>
                  <div class="rating">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star" ></i>
                  </div>
                  <p>৳<?php echo $result['price']?></p>
                           </div>


                </div>

                <?php
                  }
              ?>
                
              </div>
              

              <div class="page-btn">
                   <span>1</span>
                   <span>2</span>
                   <span>3</span>
                   <span>4</span>
                   <span>&#8594;</span>
              </div>
            </div>
    
  

  <!----------- footer -------->
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

 <!--------- js for toggle menu ------------>
   <script type="text/javascript">
   	     var Menuitems = document.gerElementbyid("MenuItems")   

   	      Menuitems.style.maxheight = "0px";

   	      function menutoggle(){
   	      	if(Menuitems.style.maxheight == "0px")
   	      	{
   	      		Menuitems.style.maxheight == "200px"
   	      	}

   	      	else
   	      	{
   	      		Menuitems.style.maxheight == "0px"
   	      	}
   	      }
   </script>



</body>
</html>