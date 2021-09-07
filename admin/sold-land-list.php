<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    

<head>
        <meta charset="UTF-8">
        <title>Sold Land List</title>
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

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="dist/vendors/morris/morris.css"> 
        <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css"> 
        <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css"> 
        <link rel="stylesheet" href="dist/vendors/starrr/starrr.css"> 
        <link href="dist/vendors/bootstrap-tour/css/bootstrap-tour-standalone.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css"> 
        <link rel="stylesheet" href="dist/vendors/cryptofont/cryptofont.css">  
        <!-- END: Page CSS-->

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
                    <a href="index.html" class="horizontal-logo align-self-center d-flex d-lg-none">
                        <img src="dist/images/logo.png" alt="logo" width="23" class="img-fluid"/> <span class="h5 align-self-center mb-0 ">LAND</span>              
                    </a>
                    <a href="#" class="sidebarCollapse ml-2" id="collapse"><i class="icon-menu body-color"></i></a>
                </div>
                <div class="d-inline-block position-relative">
                    <button id="tourfirst" data-toggle="dropdown" aria-expanded="false" class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block">
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
            <a href="index.html" class="sidebar-logo d-flex">
                <img src="dist/images/logo.png" alt="logo" width="25" class="img-fluid mr-2"/>
                <span class="h5 align-self-center mb-0">LAND</span>        
            </a>
            <!-- END: Logo-->

            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="index.html"><i class="icon-speedometer"></i>Dashboard</a> 
                </li>
                <li class="dropdown"><a href="#" class="text-danger"><i class="icon-cursor-move"></i>Land's</a>
                    <div>
                        <ul>
                            <li><a href="add-land.html"><i class="icon-plus"></i> Add land</a></li>
                            <li><a href="land-list.html"><i class="icon-list"></i> Land List</a></li>
                            <li><a href="sold-land-list.html"><i class="icon-support"></i> Sold Land List</a></li>   
                              
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-support"></i>Client</a>
                    <div>
                        <ul>
                            <li><a href="client-add.html"><i class="icon-user"></i> Client Add</a></li>
                            <li><a href="client-list.html"><i class="icon-list"></i> Client List</a></li>
                            <li><a href="user-profile.html"><i class="icon-support"></i> Client Profile</a></li>                        
                        </ul>
                    </div>
                </li>
              
          
           
                          

                <li class="dropdown"><a href="#"><i class="icon-user"></i>User</a>
                    <div>
                        <ul>
                            <li><a href="user-add.html"><i class="icon-user"></i> User Add</a></li>
                            <li><a href="user-list.html"><i class="icon-list"></i> User List</a></li>
                                                 
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
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Sold Land List</h4> <b>Welcome to Sold Land List</b></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row d-xl-flex">
                    

                    <div class="col-12  mt-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h4 class="card-title">Sold Land List</h4>                                   
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">Land ID</th>
                                                <th scope="col">Land Address</th>
                                                <th scope="col">Land Owner</th>
                                                <th scope="col">Land Owner Contact</th>
                                                <th scope="col">Mark As Unslod</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>+8801 0000</td>
                                                <td><a class="btn btn-warning" href="">Revart</a></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>+8801 0000</td>
                                               <td><a class="btn btn-warning" href="">Revart</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>+8801 0000</td>
                                                <td><a class="btn btn-warning" href="">Revart</a></td>
                                            </tr>
                                            

                                        </tbody>
                                    </table> 
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

        <!-- START: Chat Button-->
        <a href="#" class="chatbutton text-center"> 
            <i class="icon-speech"></i>
        </a>
        <div class="card border h-50 chatwindow mx-3">
            <div class="card-body p-0">                          
                <ul class="nav flex-column chat-menu" id="myTab3" role="tablist">
                    <li class="nav-item active px-3">                                               
                        <div class="media d-block d-flex text-left py-3">
                            <img class="img-fluid  mr-3 rounded-circle" src="dist/images/author2.jpg" alt="">
                            <div class="media-body align-self-center mt-0  d-flex">
                                <div class="message-content"> <h6 class="mb-1 font-weight-bold d-flex">Harry Jones</h6>
                                    typing ... 
                                    <br>
                                </div>
                                <div class="call-button ml-auto">
                                    <a href="#" class="call h4" data-toggle="modal" data-target="#call1"><i class="icon-phone"></i></a>
                                    <a href="#" class="video-call h4" data-toggle="modal" data-target="#call1"><i class="icon-camrecorder"></i></a>
                                </div>
                            </div>
                        </div>                                               
                    </li>
                </ul>

                <div class="popupchat p-3">                                            
                    <div class="media d-flex  mb-4">
                        <div class="p-3 ml-auto speech-bubble">
                            Hello John, how can I help you today ?
                        </div>
                        <div class="ml-4"><a href="#"><img src="dist/images/author2.jpg" alt="" class="img-fluid rounded-circle" /></a></div>
                    </div>
                    <div class="media d-flex mb-4">
                        <div class="mr-4 thumb-img"><a href="#"><img src="dist/images/author3.jpg" alt="" class="img-fluid rounded-circle" /></a></div>
                        <div class="p-3 mr-auto speech-bubble alt">
                            Hi, I want to buy a new shoes.
                        </div>
                    </div>
                    <div class="media d-flex mb-4">
                        <div class="p-3 ml-auto speech-bubble">
                            Shipment is free. You'll get your shoes tomorrow!<br/>

                        </div>
                        <div class="ml-4"><a href="#"><img src="dist/images/author2.jpg" alt="" class="img-fluid rounded-circle" /></a></div>
                    </div> 
                </div>
                <div class="border-top theme-border px-2 py-3 d-flex">
                    <input type="text" class="form-control mr-2" placeholder="Type message here ..." />
                    <a href="#" class="ml-auto rounded  p-2 m-0 my-auto bg-success text-white"><i class="icon-link"></i></a> 
                    <a href="#" class="p-2 ml-2 rounded line-height-21 bg-primary text-white"><i class="icon-cursor align-middle"></i></a>
                </div>
            </div>
        </div>
        <!-- END: Chat Button-->

   

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

        <!-- START: Page Vendor JS-->
        <script src="dist/vendors/raphael/raphael.min.js"></script>
        <script src="dist/vendors/morris/morris.min.js"></script>
        <script src="dist/vendors/chartjs/Chart.min.js"></script>
        <script src="dist/vendors/starrr/starrr.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
        <script src="dist/vendors/jquery-flot/jquery.flot.pie.js"></script>
        <script src="dist/vendors/bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
        <script src="dist/vendors/apexcharts/apexcharts.min.js"></script> 
        <script src="dist/vendors/amcharts/core.js"></script>
        <script src="dist/vendors/amcharts/charts.js"></script>
        <script src="dist/vendors/amcharts/animated.js"></script>
        <script src="dist/vendors/amcharts/amchartsdark.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="dist/js/cryptocurrency.script.js"></script>
        <!-- END: Page JS-->
    </body>
    <!-- END: Body-->


</html>
