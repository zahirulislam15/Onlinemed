 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Medical Store</title>
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

<!-- Navigation -->


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
          <a class="dropdown-item" href="hospital-info.php">Hospital Information</a>
          <a class="dropdown-item" href="contact.php">Call Ambulance</a>
          <a class="dropdown-item" href="consalt.php">Consalt A Doctor</a>
          <a class="dropdown-item" href="contact.php">Nursing Services</a>
        </div>
      </li>
						    

					</ul>
					
				</div>


                 


			</div>

		</nav>

 <!-- ===== nav end =====	  -->

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
  <div class="carousel-inner">
  	<div class="carousel-item active" >
  		<img src="img/slider1.jpg">
  		<div class="carousel-caption">
  		     <h1 class="display-2">Online Medical Store</h1>
  		     <h3>Your Problems,Our Solution</h3>
  		     <a href="products.php" style="cursor: pointer;"><button type="button" class="btn-slider btn-outline-light btn-lg">Check Our Products</button></a>
  		     <button type="button" class="btn-slider btn-primary btn-lg">Contact</button> 	
  		</div>

  	</div>
 
  	<div class="carousel-item">
  		<img src="img/slider2.jpg">
  		<div class="carousel-caption">
  		     <h1 class="display-2">Online Medical Store</h1>
  		     <h3>Your Problems,Our Solution</h3>
  		     <button type="button" class="btn-slider btn-outline-light btn-lg">Check Our Products</button>
  		     <button type="button" class="btn-slider btn-primary btn-lg">Contact</button> 	
  		</div>
  	</div>
  	<div class="carousel-item">
  		<img src="img/slider3.jpg">
  		<div class="carousel-caption">
  		     <h1 class="display-2">Online Medical Store</h1>
  		     <h3>Your Problems,Our Solution</h3>
  		     <button type="button" class="btn-slider btn-outline-light btn-lg" >Check Our Products</button>
  		     <button type="button" class="btn-slider btn-primary btn-lg">Contact</button> 	
  		</div>
  	</div>
 </div>
  <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- ===== slider end ===== -->


 <!-- ====Recent product===== -->
        <div class="small-container">
       	    <h2 class="title">Featured products<h2>

 
  

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

              
       	    	<div ><a href="products.php">
       	    		<button type="button" class="btn-slider btn-primary btn-lg" >See All Products
</button></a>
       	    	</div>

<!-- ======  call a ambulance ====== -->
    <div class="cab" style="height: 360px;">
      	   <div class="small-container">
      	   	   <div class="row">

      	   	       <!-- <div class="col-2">
      	   	   	    	<img src="img/exclusive.png" class="offer-img">
      	   	   	    </div> -->
      	   	   	     <div class="call"style="
    margin-top: 78px;
">
      	   	   	     	<p>Call Ambulance</p>

      	   	   	     	<a href="contact.php" class="btn">Call Now &#8594;</a>
      	   	   	     </div>
      	   	   </div> 
       	   </div>
      </div>

 <!--====== call ambulance end ======= -->

 <!-- ===== consalt a doctor ======= -->


  <div class="consalt " style="height: 360px;">
      	   <div class="small-container">
      	   	   <div class="row">
      	   	   	     <div class="call" style="
    margin-top: 78px;
">
      	   	   	     	<p>Consalt a Doctor</p>

      	   	   	     	<a href="consalt.php" class="btn">Contact &#8594;</a>
      	   	   	     </div>
      	   	   </div> 
       	   </div>
      </div>

<!-- ===== consalt a doctor end ===== -->

<!-- ======= Nursing Service ======== -->

  <div class="nursing" style="height: 360px;">
      	   <div class="small-container">
      	   	   <div class="row">

      	   	       <!-- <div class="col-2">
      	   	   	    	<img src="img/exclusive.png" class="offer-img">
      	   	   	    </div> -->
      	   	   	     <div class="call"style="
    margin-top: 78px;
">
      	   	   	     	<p>Nursing Service</p>

      	   	   	     	<a href="nurse.php" class="btn">Contact &#8594;</a>
      	   	   	     </div>
      	   	   </div> 
       	   </div>
      </div>

 <!-- ===== hospital info ======== -->


  <div class="hospital" style="height: 360px;">
      	   <div class="small-container">
      	   	   <div class="row">

      	   	       <!-- <div class="col-2">
      	   	   	    	<img src="img/exclusive.png" class="offer-img">
      	   	   	    </div> -->
      	   	   	     <div class="call-i"style="
    margin-top: 78px;
">
      	   	   	     	<p>Hospital information </p>

      	   	   	     	<a href="hospital-info.php" class="btn">Get all info &#8594;</a>
      	   	   	     </div>
      	   	   </div> 
       	   </div>
      </div>

      <!-- ======= hospital info end===== -->


<!-- customer review option -->
 <div class="testimonial">
     	<div class="small-container">
     		<div class="row">
     			<div class="col-3">
     				<i class=" fa fa-quote-left"></i>
     				<p>Lorem Ipsum is  simply dummy text of the printing and typesetting industry.  Lorem ipsum has been the industry's standard dummytext ever</p>
     				<div class="rating">
       	    				<i class="fa fa-star checked"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star-o" ></i>
       	    			</div>
       	    			<img src="img/user-1.png">
       	    			<h3>Sean Parker</h3>
     			</div>
     			<div class="col-3">
     				<i class=" fa fa-quote-left"></i>
     				<p>Lorem Ipsum is  simply dummy text of the printing and typesetting industry.  Lorem ipsum has been the industry's standard dummytext ever</p>
     				<div class="rating">
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star-o" ></i>
       	    			</div>
       	    			<img src="img/user-2.png">
       	    			<h3>Mike smith</h3>
     			</div>
     			<div class="col-3">
     				<i class=" fa fa-quote-left"></i>
     				<p>Lorem Ipsum is  simply dummy text of the printing and typesetting industry.  Lorem ipsum has been the industry's standard dummytext ever</p>
     				<div class="rating">
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star-o" ></i>
       	    			</div>
       	    			<img src="img/user-3.png">
       	    			<h3>Mabel Joe</h3>
     			</div>
     			<div class="col-3">
     				<i class=" fa fa-quote-left"></i>
     				<p>Lorem Ipsum is  simply dummy text of the printing and typesetting industry.  Lorem ipsum has been the industry's standard dummytext ever</p>
     				<div class="rating">
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star"></i>
       	    				<i class="fa fa-star-o" ></i>
       	    			</div>
       	    			<img src="img/user-4.jpg" height="200px" width="200px">
       	    			<h3>Mabel Joe</h3>
     			</div>
     		</div>
     	</div>
     </div>       


<!-- customer review option end -->








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
