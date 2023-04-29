<?php
 include('../../../../dbconnection.php');
include('session.php');




$sq4="select * from ticket order by id asc";
$exe=mysqli_query($con,$sq4);

?>




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/deedui/template/demo/vertical-default-light/pages/samples/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 18:38:51 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Deed UI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
     <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-between">
         <a class="navbar-brand brand-logo" href=""><img src="../../../../img/master/logo.png" alt="logo"/></a>
        
        
       
          
        </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <div class="d-none d-lg-flex">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
           <ul class="navbar-nav navbar-nav-right">
           
              
              
                
            
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
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="../../../../changepassadmin.php">
                  <span>change password</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a>
                <a class="dropdown-item py-1  px-2 d-flex align-items-center justify-content-between" href="../../../../logout.php">
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
      <!-- partial:../../partials/_settings-panel.html -->
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
      <!-- partial:../../partials/_sidebar.html -->
      





      
      
      
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item sidebar-profile mt-4">
            <a href="#">
              <div>
                <div class="profile-thumb">
                    <img src="../../../../images/person_3.jpg" alt="profile">
                </div>
                <div class="mt-2">
                  <h3 class="mb-1 profile-name">Abhishek</h3>
                  <p class="profile-description">Admin</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../admin.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../../../category.php">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../view_category.php">View Category</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../../../addproduct_a.php">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../view_adminproducts_a.php">View Products</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../../../addnews.php">Post</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../addnews1.php">News</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../success.php">Successful stories</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../../../agripedia.php">Agripedia</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../addevent.php">Events</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../addsubsidy.php">Government Schemes</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../addjob.php">Agricultural Jobs</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../addlease.php">Land for Lease</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../adddirectory.php">Directory</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../../../addplant.php">Commercial Products</a></li>
                </ul>
            </div>
          </li>  
            
            <li class="nav-item">
            <a class="nav-link" href="../../../../gallery_admin.php">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="../../../../subsidy.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../../../farmview.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../suppview.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../userview.php">Users</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../../../farmerfeedback.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../suppfeedback.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../userfeedback.php">Users</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../../../farmercomplaint.php">Farmers</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../../../suppcomplaint.php">Suppliers</a></li>
                   <li class="nav-item"> <a class="nav-link" href="../../../../usercomplaint.php">Users</a></li>
                </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Payment History</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./pages/samples/orders.php">Magazines</a></li>
                <li class="nav-item"> <a class="nav-link" href="./pages/samples/ticket.php">Event</a></li>
                   
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

      
      
      
      
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-16">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Ticket Booking</h4>
                  <div class="row grid-margin">
                    <div class="col-16">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-16">
                      <div class="table-responsive">
                        <table id="order-listing" class="table" style="width:100%">
                          <thead>
                            <tr class="bg-primary text-white">
                                <th>Order #</th>
                                <th>Customer</th>
                                <th>Event</th>
                                <th>Base Price</th>
                                  <th>Quantity</th>
                                  
                                <th>Purchased Price</th>
                                
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
                                <td><?php echo $fetch['title']?></td>
                                <td><?php echo $fetch['price']?></td>
                                <td><?php echo $fetch['quantity']?></td>
                                
                                <td><?php echo $fetch['tprice']?></td>
                                
                                <td ><mark style="color:navyblue;background-color:skyblue;width:25px;"> <?php echo $fetch['status']?></mark></td>
                                
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
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
         
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../../../js/off-canvas.js"></script>
  <script src="../../../../js/hoverable-collapse.js"></script>
  <script src="../../../../js/template.js"></script>
  <script src="../../../../js/settings.js"></script>
  <script src="../../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../../../js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/deedui/template/demo/vertical-default-light/pages/samples/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 18:38:51 GMT -->
</html>
