<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pollo/ltr/page-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2020 05:57:42 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Pollo Admin</title>
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
        <link rel="stylesheet" href="dist/vendors/fancybox/jquery.fancybox.min.css">  
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
                        <img src="dist/images/logo.png" alt="logo" width="23" class="img-fluid"/> <span class="h5 align-self-center mb-0 ">POLLO</span>              
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

                <form class="float-left d-none d-lg-block search-form">
                    <div class="form-group mb-0 position-relative">
                        <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h5 icon-magnifier body-color"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                        </a>

                    </div>
                </form>
                <div class="navbar-right ml-auto">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex">
                        <li class="mr-1 d-inline-block my-auto d-block d-lg-none">
                            <a href="#" class="nav-link px-2 mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                            </a>
                        </li>                        
                        <li class="mr-1 d-inline-block my-auto">
                            <div id="options" data-input-name="country2"  data-selected-country="US"></div>
                        </li>
                        <li class="dropdown align-self-center mr-1">
                            <a href="#" class="nav-link px-2" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                                <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border  py-0">
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <h6 class="mb-0">john</h6>
                                                <span class="text-warning">New user registered.</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <h6 class="mb-0">Peter</h6>
                                                <span class="text-success">Server #12 overloaded.</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <h6 class="mb-0">Bill</h6>
                                                <span class="text-danger">Application error.</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li><a class="dropdown-item text-center py-2" href="#"> <strong>See All Tasks <i class="icon-arrow-right pl-2 small"></i></strong></a></li>
                            </ul>

                        </li>
                        <li class="dropdown align-self-center mr-1 d-inline-block">
                            <a href="#" class="nav-link px-2" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                                <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border   py-0">
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                            <div class="media-body">
                                                <h6 class="mb-0 text-success">john send a message</h6>
                                                12 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li >
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <h6 class="mb-0 text-danger">Peter send a message</h6>
                                                15 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li >
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <h6 class="mb-0 text-warning">Bill send a message</h6>
                                                5 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li><a class="dropdown-item text-center py-2" href="#"> <strong>Read All Message <i class="icon-arrow-right pl-2 small"></i></strong></a></li>
                            </ul>
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
                <span class="h5 align-self-center mb-0">POLLO</span>        
            </a>
            <!-- END: Logo-->

            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown"><a href="#"><i class="icon-speedometer"></i>Dashboard</a> 
                    <div>
                        <ul>
                            <li><a href="index.html"><i class="icon-rocket"></i> eCommerce</a></li>
                            <li><a href="index-cryptocurrency.html"><i class="icon-shuffle"></i> Cryptocurrency</a></li>
                            <li><a href="index-analytic.html"><i class="icon-chart"></i> Analytic</a></li>
                        </ul>
                    </div>
                </li>
                 <li class="dropdown"><a href="#" class="text-danger"><i class="icon-cursor-move"></i>New<span class="ml-2 badge badge-danger">New</span></a>
                    <div>
                        <ul>
                            <li><a href="app-timeline.html"><i class="icon-calendar"></i> Time LIne</a></li>
                            <li><a href="app-task-board.html"><i class="icon-speech"></i> Todo</a></li>
                            <li><a href="app-tickets.html"><i class="icon-support"></i> Tickets</a></li>   
                            <li><a href="app-multi-input.html"><i class="icon-support"></i> Multi Input</a></li>   
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-support"></i>Apps</a>
                    <div>
                        <ul>
                            <li><a href="app-calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="app-chat.html"><i class="icon-speech"></i> Chats</a></li>
                            <li><a href="app-to-do.html"><i class="icon-support"></i> Todo</a></li>                        
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-chart"></i>Charts</a>
                    <div> 
                        <ul>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-chart"></i> amCharts Charts <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="amcharts-bar.html"><i class="icon-energy"></i> Column & Bar</a></li>
                                        <li><a href="amcharts-line.html"><i class="icon-disc"></i> Line & Area</a></li>
                                        <li><a href="amcharts-pie.html"><i class="icon-frame"></i> Pie & Donut</a></li>
                                        <li><a href="amcharts-xy-bubble.html"><i class="icon-fire"></i> XY & Bubble</a></li>
                                        <li><a href="amcharts-stock.html"><i class="icon-shuffle"></i> Stock</a></li> 
                                        <li><a href="amcharts-timeline.html"><i class="icon-graph"></i> TimeLine</a></li> 
                                        <li><a href="amcharts-radar.html"><i class="icon-pie-chart"></i> Radar & Polar</a></li> 
                                        <li><a href="amcharts-treemap.html"><i class="icon-drawer"></i> Treemap</a></li> 
                                        <li><a href="amcharts-funnel.html"><i class="icon-energy"></i> Funnel & Pyramid</a></li> 
                                    </ul>
                                </div>
                            </li>
                            <li><a href="chart-morris.html"><i class="icon-energy"></i> Morris Chart</a></li>
                            <li><a href="chart-chartist.html"><i class="icon-disc"></i> Chartist js</a></li>
                            <li><a href="chart-echart.html"><i class="icon-frame"></i> eCharts</a></li>
                            <li><a href="chart-flot.html"><i class="icon-fire"></i> Flot Chart</a></li>
                            <li><a href="chart-knob.html"><i class="icon-shuffle"></i> Knob Chart</a></li>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-control-pause"></i> Charts js <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="chartjs-bar.html"><i class="icon-energy"></i> Bar charts</a></li>
                                        <li><a href="chartjs-line.html"><i class="icon-disc"></i> Line charts</a></li>
                                        <li><a href="chartjs-area.html"><i class="icon-frame"></i> Area charts</a></li>
                                        <li><a href="chartjs-other.html"><i class="icon-fire"></i> Doughnut, Pie, Polar charts</a></li>
                                        <li><a href="chartjs-linear.html"><i class="icon-shuffle"></i> Linear scale</a></li>                                                                        
                                    </ul>
                                </div>
                            </li>
                            <li><a href="chart-sparkline.html"><i class="icon-graph"></i> Sparkline Chart</a></li>                            
                            <li><a href="chart-peity.html"><i class="icon-pie-chart"></i> Peity Chart</a></li>   
                            <li><a href="chart-google.html"><i class="icon-drawer"></i> Google Charts</a></li>
                            <li><a href="chart-apex.html"><i class="icon-magnet"></i> Apex Charts</a></li>
                            <li><a href="chart-c3.html"><i class="icon-hourglass"></i> C3 Charts</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-envelope"></i>Mailbox</a>
                    <div> 
                        <ul>
                            <li><a href="app-mail.html"><i class="icon-envelope"></i> Inbox</a></li>
                            <li><a href="app-view-email.html"><i class="icon-eye"></i> View Email</a></li>
                            <li><a href="app-mail-compose.html"><i class="icon-compass"></i> Compose Email</a></li>                        
                        </ul> 
                    </div>

                </li>

                <li class="dropdown"><a href="#"><i class="icon-film"></i>Form</a>
                    <div> 
                        <ul>
                            <li><a href="form-basic.html"><i class="icon-disc"></i> Basic Form</a></li>
                            <li><a href="form-layout.html"><i class="icon-cursor-move"></i> Form Layout</a></li>
                            <li><a href="form-validation.html"><i class="icon-star"></i> Form Validation</a></li>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-film"></i> Form Elements <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="form-elements-switch.html"><i class="icon-energy"></i> Switch</a></li>
                                        <li><a href="form-elements-checkbox.html"><i class="icon-disc"></i> Checkbox</a></li>
                                        <li><a href="form-elements-radiobutton.html"><i class="icon-frame"></i> Radio</a></li>
                                        <li><a href="form-elements-input.html"><i class="icon-fire"></i> Input</a></li>                                       
                                    </ul>
                                </div>
                            </li>
                            <li><a href="form-float-input.html"><i class="icon-symbol-male"></i> Float Input</a></li>
                            <li><a href="form-wizard.html"><i class="icon-loop"></i> Form Wizards</a></li>
                            <li><a href="form-upload.html"><i class="icon-pin"></i> Form Uploads</a></li>
                            <li><a href="form-mask.html"><i class="icon-check"></i> Form Mask</a></li>                            
                            <li><a href="form-dropzone.html"><i class="icon-present"></i> Form Dropzone</a></li>
                            <li><a href="form-icheck.html"><i class="icon-briefcase"></i> Icheck Controls</a></li>
                            <li><a href="form-cropper.html"><i class="icon-hourglass"></i> Image Cropper</a></li>
                            <li><a href="form-htmleditor.html"><i class="icon-graduation"></i> HTML5 Editor</a></li>
                            <li><a href="form-typehead.html"><i class="icon-puzzle"></i> Form Typehead</a></li>                            
                            <li><a href="form-xeditable.html"><i class="icon-cloud-upload"></i> Xeditable</a></li>
                            <li><a href="form-summernote.html"><i class="icon-ghost"></i> Summernote</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-menu"></i>Tables</a>
                    <div> 
                        <ul>
                            <li><a href="table-basic.html"><i class="icon-grid"></i> Table Basic</a></li>
                            <li><a href="table-layout.html"><i class="icon-layers"></i> Table Layout</a></li>
                            <li><a href="table-datatable.html"><i class="icon-docs"></i> Datatable</a></li>
                            <li><a href="table-footable.html"><i class="icon-wallet"></i> Footable</a></li>
                            <li><a href="table-jsgrid.html"><i class="icon-folder"></i> Jsgrid</a></li>
                            <li><a href="table-responsive.html"><i class="icon-control-pause"></i> Table Responsive</a></li>                            
                            <li><a href="table-editable.html"><i class="icon-pencil"></i> Editable Table</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-screen-desktop"></i>UI</a>
                    <div> 
                        <ul>
                            <li><a href="ui-alert.html"><i class="icon-bell"></i> Alerts</a></li>
                            <li><a href="ui-badges.html"><i class="icon-badge"></i> Badges</a></li>
                            <li><a href="ui-buttons.html"><i class="icon-control-play"></i> Buttons</a></li>
                            <li><a href="ui-cards.html"><i class="icon-layers"></i> Cards</a></li>
                            <li><a href="ui-carousel.html"><i class="icon-picture"></i> Carousel</a></li>                           
                            <li><a href="ui-collapse.html"><i class="icon-arrow-up"></i> Collapse</a></li>
                            <li><a href="ui-dropdowns.html"><i class="icon-arrow-down"></i> Dropdowns</a></li>                          
                            <li><a href="ui-jumbotron.html"><i class="icon-screen-desktop"></i> Jumbotron</a></li>
                            <li><a href="ui-modals.html"><i class="icon-frame"></i> Modal</a></li> 
                            <li><a href="ui-pagination.html"><i class="icon-docs"></i> Pagination</a></li>  
                            <li><a href="ui-popoverandtooltip.html"><i class="icon-pin"></i> Popover &amp; Tooltip</a></li>
                            <li><a href="ui-progress.html"><i class="icon-graph"></i> Progress</a></li>
                            <li><a href="ui-scrollspy.html"><i class="icon-shuffle"></i> Scrollspy</a></li>
                            <li><a href="ui-select2.html"><i class="icon-wallet"></i> Select2</a></li>
                            <li><a href="ui-sweetalert.html"><i class="icon-fire"></i> Sweet Alert</a></li>
                            <li><a href="ui-timeline.html"><i class="icon-graduation"></i> Timeline</a></li>
                            <li><a href="ui-toastr.html"><i class="icon-layers"></i> Toastr</a></li>
                        </ul>
                    </div>
                </li> 
                <li class="dropdown active"><a href="#"><i class="icon-book-open"></i>Pages</a>
                    <div> 
                        <ul>
                            <li><a href="page-lockscreen.html"><i class="icon-lock"></i> Lockscreen</a></li>
                            <li><a href="page-login.html"><i class="icon-login"></i> login</a></li>
                            <li><a href="page-register.html"><i class="icon-direction"></i> Register</a></li>
                            <li><a href="page-404.html"><i class="icon-crop"></i> 404 Page</a></li>
                            <li><a href="page-404-menu.html"><i class="icon-layers"></i> 404 Page With Menu</a></li>
                            <li><a href="page-blank.html"><i class="icon-frame"></i> Blank Page</a></li>
                            <li class="active"><a href="page-gallery.html"><i class="icon-layers"></i> Gallery</a></li>
                            <li><a href="page-pricing.html"><i class="icon-wallet"></i> Pricing</a></li>
                            <li><a href="page-contact-us.html"><i class="icon-wrench"></i> Contact us</a></li>
                        </ul>
                    </div>
                </li>     
                
                <li class="dropdown"><a href="#"><i class="icon-badge"></i>Icons</a>
                    <div> 
                        <ul>
                            <li><a href="icon-materialdesign.html"><i class="icon-star"></i> Material Icon</a></li>
                            <li><a href="icon-font-awesome.html"><i class="icon-screen-tablet"></i> Font-awesome</a></li>
                            <li><a href="icon-themify.html"><i class="icon-plane"></i> Themify Icon</a></li>
                            <li><a href="icon-weather.html"><i class="icon-drawer"></i> Weather Icon</a></li>
                            <li><a href="icon-simple-line.html"><i class="icon-map"></i> Simple Line Icon</a></li>
                            <li><a href="icon-flag.html"><i class="icon-flag"></i> Flag Icon</a></li>
                            <li><a href="icon-ionicons.html"><i class="icon-rocket"></i> Ionicons Icon</a></li>
                            <li><a href="icon-icofont.html"><i class="icon-fire"></i> Icofont Icon</a></li>   
                            <li><a href="icon-linearicons.html"><i class="icon-list"></i> Linear</a></li>
                            <li><a href="icon-crypto.html"><i class="icon-diamond"></i> Crypto</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-user"></i>Profile</a>
                    <div> 
                        <ul>
                            <li><a href="user-contact-list.html"><i class="icon-people"></i> Contact List</a></li>
                            <li><a href="user-contact-grid.html"><i class="icon-cursor-move"></i> Contact Grid</a></li>
                            <li><a href="user-profile.html"><i class="icon-user"></i> User Profile</a></li>

                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="#"><i class="icon-map"></i>Map</a>
                    <div> 
                        <ul>
                            <li><a href="map-google.html"><i class="icon-map"></i> Google Map</a></li>
                            <li><a href="map-vector.html"><i class="icon-vector"></i> Vector Map</a></li>

                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="#"><i class="icon-pencil"></i>Blog</a>
                    <div> 
                        <ul>
                            <li><a href="blog-list.html"><i class="icon-plus"></i> Blog List</a></li>
                            <li><a href="blog-single.html"><i class="icon-tag"></i> Blog Post</a></li>                            
                        </ul>
                    </div>
                </li>                

                <li><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-bag"></i>Ecommerce</a>
                    <div> 
                        <ul>
                            <li><a href="ecommerce-product-list.html"><i class="icon-grid"></i> Products List</a></li>
                            <li><a href="ecommerce-product-detail.html"><i class="icon-plus"></i> Product Detail</a></li>
                            <li><a href="ecommerce-cart.html"><i class="icon-badge"></i> Cart</a></li>
                            <li><a href="ecommerce-checkout.html"><i class="icon-plus"></i> Checkout</a></li>
                            <li><a href="ecommerce-orders.html"><i class="icon-basket"></i> Orders</a></li>
                            <li><a href="ecommerce-order-view.html"><i class="icon-equalizer"></i> Order View</a></li>                           
                            <li><a href="ecommerce-order-invoice.html"><i class="icon-notebook"></i> Invoice</a></li>                            
                        </ul>
                    </div>
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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Gallery</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">Gallery</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12  mt-3">                          
                        <div class="card"> 

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <ul class="filter p-0">
                                            <li class="d-inline-block"><a class="filter-button active" href="#" data-group="all">All</a></li>
                                            <li class="d-inline-block"><a href="#" class="filter-button" data-group="Branding">Branding</a></li>
                                            <li class="d-inline-block"><a href="#" class="filter-button" data-group="Designing">Designing</a></li>
                                            <li class="d-inline-block"><a href="#" class="filter-button" data-group="Photography">Photography</a></li>
                                            <li class="d-inline-block"><a href="#" class="filter-button" data-group="Development">Development</a></li>
                                        </ul>
                                    </div> 
                                    <div class="clearfix"></div>
                                </div>
                                <div id="grid" class="row">
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 text-center Branding">                                       
                                        <img src="dist/images/portfolio1.jpg" alt="" class="portfolioImage img-fluid">
                                        <div class="d-flex">
                                            <a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                            <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                        </div>

                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Designing">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio2.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio2.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Photography">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio3.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio3.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Development">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio4.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio4.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Designing">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio5.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio5.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Photography">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio6.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio6.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Branding">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio13.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio13.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Designing">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio14.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio14.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Photography">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio15.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio15.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Development">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio16.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio16.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Designing">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio17.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio17.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Photography">
                                        <div class="modImage">
                                            <img src="dist/images/portfolio18.jpg" alt="" class="portfolioImage img-fluid">
                                            <div class="d-flex">
                                                <a data-fancybox-group="gallery" href="dist/images/portfolio18.jpg" class="fancybox btn rounded-0 btn-dark w-50">View Large</a>
                                                <a href="#" class="btn btn-primary rounded-0 w-50">More Details</a>                                                   
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
        <footer class="site-footer">© 2020 Pollo.</footer>
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

        <!-- START: Page Vendor JS-->
        <script src="dist/vendors/fancybox/jquery.fancybox.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="dist/js/gallery.script.js"></script>
        <!-- END: Page JS--> 
    </body>
    <!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pollo/ltr/page-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2020 05:58:56 GMT -->
</html>
