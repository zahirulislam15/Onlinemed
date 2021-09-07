<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    

<head>
        <meta charset="UTF-8">
        <title>Client Add</title>
        <link rel="shortcut icon" href="dist/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css"> 
        <link rel="stylesheet" href="dist/vendors/flag-select/css/flags.css">
        <!-- END Template CSS-->      

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist/css/main.css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->    
    <body id="main-container" class="default">
        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <img src="dist/images/logo.png" alt="logo" width="23" class="img-fluid"/>
        </div>
        <!-- END: Pre Loader-->

        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header h4 mb-0 align-self-center d-flex">  
                    <a href="index.php" class="horizontal-logo align-self-center d-flex d-lg-none">
                        <img src="dist/images/logo.png" alt="logo" width="23" class="img-fluid"/> <span class="h5 align-self-center mb-0 ">LAND</span>              
                    </a>
                    <a href="#" class="sidebarCollapse ml-2" id="collapse"><i class="icon-menu body-color"></i></a>
                </div>
                <div class="d-inline-block position-relative">
                    <button data-toggle="dropdown" aria-expanded="false" class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block">
                        <span class="text-white font-weight-bold h4">+</span></button>
                    <div class="dropdown-menu left p-0">
                        <a href="#" class="dropdown-item px-2">Create Page</a>
                        <a href="#" class="dropdown-item px-2">Add New User</a>
                        <a href="#" class="dropdown-item px-2">New Campain</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item px-2 text-danger">Generate Reports</a>
                    </div>
                </div>

               
                <div class="navbar-right ml-auto">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex">
                        <li class="mr-1 d-inline-block my-auto d-block d-lg-none">
                            <a href="#" class="nav-link px-2 mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                            </a>
                        </li>                        
                        <li class="mr-1 d-inline-block my-auto">
                            <div id="options" data-input-name="country2"  data-selected-country="US"></div>
                        </li>
                        
                        
                        <li class="dropdown user-profile d-inline-block py-1 mr-2">
                            <a href="#" class="nav-link px-2 py-0" data-toggle="dropdown" aria-expanded="false"> 
                                <div class="media">
                                    <div class="media-body align-self-center d-none d-sm-block mr-2">
                                        <p class="mb-0 text-uppercase line-height-1"><b>John Deo</b><br/><span> Admin </span></p>

                                    </div>
                                    <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="45">

                                </div>
                            </a>

                            <div class="dropdown-menu  dropdown-menu-right p-0">
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
          <div class="sidebar">
            <a href="#" class="sidebarCollapse float-right h6 dropdown-menu-right mr-2 mt-2 position-absolute d-block d-lg-none">
                <i class="icon-close"></i>
            </a>
            <!-- START: Logo-->
            <a href="index.php" class="sidebar-logo d-flex">
                <img src="dist/images/logo.png" alt="logo" width="25" class="img-fluid mr-2"/>
                <span class="h5 align-self-center mb-0">LAND</span>        
            </a>
            <!-- END: Logo-->

            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="index.php"><i class="icon-speedometer"></i>Dashboard</a> 
                </li>
                <li class="dropdown"><a href="#" class="text-danger"><i class="icon-cursor-move"></i>Medicines</a>
                    <div>
                        <ul>
                            <li><a href="add-medicine.php"><i class="icon-plus"></i> Add Medicines</a></li>
                            <li><a href="medicine-list.php"><i class="icon-list"></i> Medicine List</a></li>
                           
                              
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-support"></i>Services</a>
                    <div>
                        <ul>
                            <li><a href="hospital-add.php"><i class="icon-user"></i> Hospital add</a></li>
                            <li><a href="request-ambulance.php"><i class="icon-list"></i> Request For Ambulance</a></li>
                            <li><a href="request-nurse.php"><i class="icon-support"></i> Request For Nurse</a></li>
                            <li><a href="add-doctor.php"><i class="icon-support"></i> Add a doctor</a></li> 
                            <li><a href="consult-doctor.php"><i class="icon-support"></i> Consult A Doctor</a></li>                       
                        </ul>
                    </div>
                </li>
              
          
           
                          

                <li class="dropdown"><a href="#"><i class="icon-user"></i>Order</a>
                    <div>
                        <ul>
                            
                            <li><a href="order-list.php"><i class="icon-list"></i> Order List</a></li>
                                                 
                        </ul>
                    </div>
                </li>
                <li class="#"><a href="#"><i class="icon-question"></i>Coming soon..</a>
                    
                </li>
                

            </ul>
            <!-- END: Menu-->
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Client Add</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">Client Add</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->
                    
                


                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12  mt-3">                          
                        <div class="card">  
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h4 class="card-title">Client Add</h4>                                   
                            </div>
                            <div class="card-body">
                               <div class="col-12 col-lg-8 mt-3">
                        <div class="card">
                           
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form method="post">

                <?php
                    $con = mysqli_connect('localhost','root');

                    mysqli_select_db($con,'onlinemed');

                     if(isset($_POST['submit'])){

                     $name = $_POST['name'];
                     $degree = $_POST['degree'];
                     $time = $_POST['time'];
                     $end_time = $_POST['end_time'];
                     $details = $_POST['details'];
                     $q = " INSERT INTO `consult_doc_ad`(`name`, `degree`, `time`, `details`, `end_time`) VALUES ( '$name', '$degree', '$time', '$details', '$end_time')";

                     $query = mysqli_query($con,$q);

                    }


                ?>


                                                <div class="row">
                                                    <label for="username" class="col-sm-2 col-form-label">Doctor name</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-user"></i></span>
                                                            </div>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter Doctor Name" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>
                                              <div class="row">
                                                    <label for="username" class="col-sm-2 col-form-label">Degree</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="degree" class="form-control" placeholder="Enter Doctors degree" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="username" class="col-sm-2 col-form-label">Start Time</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-clock"></i></span>
                                                            </div>
                                                            <input type="time" name="time" class="form-control" placeholder="Enter Client Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="username" class="col-sm-2 col-form-label">End Time</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-clock"></i></span>
                                                            </div>
                                                            <input type="time" name="end_time" class="form-control" placeholder="Enter Client Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="username" class="col-sm-2 col-form-label">Details</label>
                                                    <div class="col-sm-10">  
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-transparent border-right-0" id="basic-addon11"><i class="icon-book-open"></i></span>
                                                            </div>
                                                            <input type="text" name="details" class="form-control" placeholder="Enter Doctors details" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>

                                                    </div>
                                                </div>
                                                   

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submit" class="btn btn-primary">Add Now</button>  
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>                                
                        </div>
                    </div>



                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

        <!-- START: Footer-->
        <footer class="site-footer">© 2020 Shariar.</footer>
        <!-- END: Footer-->

        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->

        <!-- START: Template JS-->
        <script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="dist/vendors/moment/moment.js"></script>
        <script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="dist/vendors/flag-select/js/jquery.flagstrap.min.js"></script> 
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="dist/js/app.js"></script>
        <!-- END: APP JS-->
    </body>
    <!-- END: Body-->

</html>
