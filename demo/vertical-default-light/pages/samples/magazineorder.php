<?php
include('../../../../dbconnection.php');

 



$sq4="select * from payment order by id asc";
$exe=mysqli_query($con,$sq4);

?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/deedui/template/demo/vertical-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 18:34:48 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agrom</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page --> 
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../img/images/favicon.png" />
</head>
    <body class="sidebar-dark">
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html --> 
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-between">
          
    <a class="navbar-brand brand-logo" href=""><img src="../../img/master/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="../../img/master/logo.png" alt="logo"/></a>
        
         
        </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <div class="d-none d-lg-flex">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!--<ul class="navbar-nav mr-lg-2">
            <li class="nav-item dropdown nav-dropdown mr-3">
              <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" id="dashDropdown">
                  Dashboard 
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="dashDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-airplay text-primary"></i>
                  Widgets
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-view-headline text-primary"></i>
                  Forms
                </a>
              </div>
            </li>
            <li class="nav-item dropdown nav-dropdown">
              <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" id="actionDropdown">
                  Transactions
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="actionDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-inbox text-primary"></i>
                  Recieved
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-forward text-primary"></i>
                  Sent
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-content-cut text-primary"></i>
                  Pending
                </a>
              </div>
            </li>
          </ul>-->
        </div>
        
        <ul class="navbar-nav navbar-nav-right">
         <!-- <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="cartDropdown">
              <i class="mdi mdi-basket text-warning mr-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="cartDropdown">
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-info">
                    <i class="mdi mdi-cake"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">Cake
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$5.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-success text-light">
                    <i class="mdi mdi-television"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">Television
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$750.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-warning text-light">
                    <i class="mdi mdi-cellphone-iphone"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">iphone
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$1000.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
            </div>
          </li>-->
          <li class="nav-item nav-profile dropdown">
            
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="screenActionDropdown">
             
            </a>
           
          </li>
          <li class="nav-item nav-profile dropdown">
            <div class="nav-link"  data-toggle="dropdown" id="profileDropdown">
              <span>Hi, <span class="nav-profile-name">Abhishek</span></span>
              <span class="user-icon">A</span>
              </div>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown user-profile-action" aria-labelledby="profileDropdown">
              <div class="p-3 text-center bg-success">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../img/images/faces/face20.jpg" alt="">
              </div>
              
                  
                
              
                <div role="separator" class="dropdown-divider"></div>
               <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>Settings</span>
                  <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-light mt-2">Actions</h5>
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="../../changepassadmin.php">
                  <span>change password</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a>
                <a class="dropdown-item py-1  px-2 d-flex align-items-center justify-content-between" href="../../logout.php">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav> 
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles light"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->  
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            
          <li class="nav-item sidebar-profile mt-4">
            <a href="#">
              <div>
                <div class="profile-thumb">
                    <img src="../../img/images/faces/face20.jpg" alt="profile">
                </div>
                <div class="mt-2">
                  <h3 class="mb-1 profile-name">Abhishek</h3>
                  <p class="profile-description">Admin</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="mdi mdi-cards-variant menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                
              <i class="mdi mdi-cube-outline menu-icon"></i>
              <span class="menu-title"> Category</span>
                 <i class="menu-arrow"></i>
            </a>
              <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../category.php">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../view_category.php">View Category</a></li>
                  </ul> 
         </div>
          </li>
            
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
              <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../addproduct_a.php">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../view_adminproducts_a.php">View Products</a></li>
                  </ul> 
         </div>
          </li>  
           
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="mdi mdi-briefcase menu-icon"></i>
              <span class="menu-title">Add</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../addnews.php">Post</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../addnews1.php">News</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../success.php">Successful stories</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../agripedia.php">Agripedia</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../addevent.php">Events</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../addsubsidy.php">Government Schemes</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../addjob.php">Agricultural Jobs</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../addlease.php">Land for Lease</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../adddirectory.php">Directory</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../addplant.php">Commercial Products</a></li>
                </ul>
            </div>
          </li>  
            
            <li class="nav-item">
            <a class="nav-link" href="../../gallery_admin.php">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="../../subsidy.php">
              <i class="mdi mdi-calendar-blank menu-icon"></i>
              <span class="menu-title">Send Subsidy </span>
            </a>
         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">View users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../farmview.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../suppview.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../userview.php">Users</a></li>
                </ul>
            </div>
          </li>
          
         
         
          
           
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="mdi mdi-file menu-icon"></i>
              <span class="menu-title">View Feedback</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../farmerfeedback.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../suppfeedback.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../userfeedback.php">Users</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="mdi mdi-pencil-box-outline menu-icon"></i>
              <span class="menu-title">View Complaint</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../farmercomplaint.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../suppcomplaint.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../usercomplaint.php">Users</a></li>
                </ul>
            </div>
          </li>
          
         
          
         <!-- <li class="nav-item report-generator mt-4">
            <p class="font-weight-medium text-white mb-2">PDF Report</p>
            <p class="mb-2">Download monthly report</p>
            <button type="button" class="btn btn-dark btn-icon-text btn-sidebar w-100">
              Download
              <i class="mdi mdi-download btn-icon-prepend float-right"></i>
            </button>
          </li>-->
        </ul>
      </nav>  
            <section>
        <!--GALLERY START-->
        <div class="container">
                 <section class="cd-gallery">
                    <ul>
                           
                         <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Magazine Orders</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr class="bg-primary text-white">
                                <th>Order #</th>
                                <th>Customer</th>
                                <th>Ship to</th>
                                <th>Base Price</th>
                                <th>Purchased Price</th>
                                 <th>Magazine</th>
                                <th>Status</th>
                                
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                       
                        
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><?php echo $fetch['name']?></td>
                                <td><?php echo $fetch['house_name']?></td>
                                <td><?php echo $fetch['unitcost']?></td>
                                <td><?php echo $fetch['tprice']?></td>
                                <td><?php echo $fetch['magazine']?></td>
                                <td style="color:red;"> <?php echo $fetch['status']?></td>
                                
                            </tr>
                              <?php }
                        ?>  
                            
                                
                                
                            </tbody></table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                     
                    </ul>
            <main class="cd-main-content">
                <div class="cd-tab-filter-wrapper">
                 
                    <div class="cd-tab-filter">
                      
                    
                </section>
                    </div> 
                </div> 

               
                   
            </main>
        </div>
      <!-- partial -->
    <!--  <div class="main-panel">
        <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-center mb-4 pb-2">
            <div class="text-dark">
              <h2 class="mb-1 font-weight-bold">Here’s todays activity dashboard !</h2>
              <p class="text-small mb-0">Saturday 10 Aug 2019</p>
            </div>
            <div class="statistics d-lg-flex text-dark mt-3 mt-sm-0">
              <div class="mr-0 mr-lg-4 mb-3 mb-lg-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-3">
                      <p class="font-weight-medium mb-0">Monthly Statistics</p>
                      <p class="text-small mb-0"><i class="mdi mdi-arrow-top-right mr-0 mr-lg-2 text-success"></i>Increase 2.4%</p>
                    </div>
                    <div>
                      <span class="statistics-increase text-white">3</span>
                      <span class="statistics-increase text-white">5</span>
                      <span class="statistics-increase text-white">0</span>
                      <span class="statistics-increase text-white">2</span>
                      <span class="statistics-increase text-white">3</span>
                    </div>
                  </div>
              </div>
              <div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="mr-3">
                    <p class="font-weight-medium mb-0">Daily Statistics</p>
                    <p class="text-small mb-0"><i class="mdi mdi-arrow-bottom-right mr-2 text-danger"></i>decrease 2.4%</p>
                  </div>
                  <div>
                    <span class="statistics-decrease text-white">1</span>
                    <span class="statistics-decrease text-white">2</span>
                    <span class="statistics-decrease text-white">4</span>
                    <span class="statistics-decrease text-white">5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-danger">
                <div class="card-variant-triangle-danger"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">REVENUE</p>
                      <h4 class="text-dark  font-weight-medium">$25763</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-dark">
                  <div class="card-variant-triangle-dark"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">SALES</p>
                      <h4 class="text-dark  font-weight-medium">$22,500</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-info">
                <div class="card-variant-triangle-info"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">LIKES</p>
                      <h4 class="text-dark  font-weight-medium">421,215</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-warning">
                  <div class="card-variant-triangle-warning"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">VISITS</p>
                      <h4 class="text-dark  font-weight-medium">21,215</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title mb-3">Sales Reports</h3>
                        <div class="dropdown">
                          <a class="btn p-0" href="#" data-toggle="dropdown" id="saleswidgetDropdown">
                              <i class="mdi mdi-dots-horizontal"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="saleswidgetDropdown">
                            <a class="dropdown-item">
                              <i class="mdi mdi-pencil text-primary"></i>
                              Edit
                            </a>
                            <a class="dropdown-item">
                              <i class="mdi mdi-delete  text-primary"></i>
                              Delete
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <p>Sales Performance for Online and Offline Revenue</p>
                      <div class="row pt-3 mt-md-4 mb-4">
                        <div class="col-6 grid-margin">
                          <div class="d-flex align-items-center">
                              <div id="circleProgress1" class="mr-3 mt-2 mt-lg-0 circle-progress-dimension"></div>
                              <div>
                                <h5 class="font-weight-medium text-dark">3456</h5>
                                <p class="font-weight-medium  mb-0">Opportunities</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-5 grid-margin">
                          <div class="d-flex align-items-center">
                              <div id="circleProgress2" class="mr-3 mt-2 mt-lg-0 circle-progress-dimension"></div>
                              <div>
                                <h5 class="font-weight-medium text-dark">865</h5>
                                <p class="font-weight-medium  mb-0">Proposal</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row pt-3 mt-md-2 mb-2">
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">110,000</h3>
                          <p>Number of sales</p>
                        </div>
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$753,098</h3>
                          <p>Total sales</p>
                        </div>
                      </div>
                      <div class="row pt-3 mt-md-2 mb-0">
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$523,200</h3>
                          <p>Average Sale</p>
                        </div>
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$331,886</h3>
                          <p>Finangel Free</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="d-lg-flex align-items-center mt-3 mt-lg-0">
                        <div class="d-flex align-items-center mr-0 mr-lg-5 mb-3 mb-lg-0">
                          <span class="legend-label bg-primary mr-2"></span>
                          <p class="mb-0">Total Sales</p>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-lg-0">
                            <span class="legend-label bg-info mr-2"></span>
                            <p class="mb-0">Number of sales</p>
                          </div>
                      </div>
                      <div class="flot-chart-wrapper mt-2">
                        <div id="flotChart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Marketing Trends</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="marketingWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="marketingWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                  <p>How are your active users trending over time?</p>
                </div>
                <div class="dashboard-chart-wrap">
                  <canvas id="marketingTrend"></canvas>
                </div>
                <div class="card-body pt-3">
                  <div class="d-flex justify-content-between align-items-center py-4 border-bottom border-top mt-3">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-google-chrome marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Conversion</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">4923</p>
                      <span class="text-muted mr-2">13% of target</span>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-account-box marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Impressions</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">87k</p>
                      <span class="text-muted mr-2">12% of target</span>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">  
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Traffic by Platform</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="trafficWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="trafficWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                 <div class="dashboard-chart-wrap mt-0 mt-lg-5">
                  <canvas id="traffic-platform"></canvas>
                 </div>
                  <div class="d-flex justify-content-between align-items-center mt-5 py-4 border-bottom border-top">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-desktop-mac marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Desktop Traffic</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">4577K</p>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                  <div class="d-flex align-items-center text-dark">
                    <i class="mdi mdi-cellphone-android marketing-trend-icon mr-2" ></i>
                    <p class="mb-0">Mobile Traffic</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="text-dark mb-0 mr-2">524K</p>
                    <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card bg-primary text-white text-center">
                <div class="card-body">
                  <h1 class="font-weight-bold mb-4 pb-2 pt-4">Pro Plan </h1>
                  <h2 class="font-weight-bold display-3 mt-4 mb-4">$235</h2>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Overage Protection - 0 GB</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-server"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">120 GB </h1>
                  <p class="text-muted mb-3">Bandwidth remaining</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-database"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">88.40 MB</h1>
                  <p class="text-muted mb-3">Storage disk used</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-file-video"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">0 Bytes</h1>
                  <p class="text-muted mb-3">Transcoding Credits</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="../../images/faces/face24.jpg" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Frederick Carter</h4>
                          <p class="mb-0 text-muted">frederickcarter@kiehn.biz</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">123</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$1234</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$290</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="../../images/faces/face23.jpg" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Elnora Schwartz</h4>
                          <p class="mb-0 text-muted">elnora@sanford.me</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">123</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$19,200</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$551</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="../../images/faces/face11.jpg" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Landon Parker</h4>
                          <p class="mb-0 text-muted">landonparker@dallin.net</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">87638</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$24,583</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$964</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-xl-8 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Performance Indicator</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="performanceWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="performanceWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                  <canvas id="performance-indicator"></canvas>
                  <div class="performance-indicator-legend mt-4 d-flex justify-content-center align-items-center" id="chart-legends-performance">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4  grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title d-flex align-items-center mb-3"><i class="mdi mdi-file-image mdi-24px mr-2"></i>Your Photos</h3>
                      <div class="dropdown">
                        <a class="btn btn-link p-0 text-dark" href="#">
                            See All
                        </a>
                      </div>
                    </div>
                    <div class="image-gallery">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_6.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Hand Held Devices</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_1.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">One Color</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_4.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Hand Held Devices</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_5.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Office Life</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_2.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Summer Tones</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="../../images/gallery/image_3.jpg" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Eye Candy</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
         <!-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="www.urbanui.com">Urbanui</a>. All rights reserved. Terms of use | Privacy Policy</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with Love</span>
          </div>-->
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../../vendors/flot/jquery.flot.js"></script>
  <script src="../../vendors/flot/jquery.flot.resize.js"></script>
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/chart.flot.sampledata.js"></script>
  <script src="../../js/dashboard.sampledata.js"></script>
  <script src="../../vendors/patternomaly/patternomaly.js"></script>
  <script src="../../js/dashboard.js"></script> 
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/deedui/template/demo/vertical-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 18:34:48 GMT -->
</html>

