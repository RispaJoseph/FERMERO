<?php
 

session_start();
if(!isset($_SESSION['sess']))
{
header("location:../home.php");
} 


 


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Widgets :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Agrom" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- widgets Css -->
    <link href="css/widgets.css" rel="stylesheet">
    <!-- widgets Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="../home.php"><b>Agrom</b></a>
                </h1>
                <span>A</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="../web/adminhome.php">
                        <i class="fas fa-th-large"></i>
                        Home
                    </a>
                </li>
               
                
                <li>
                    <a href="../category.php">
                        <i class="far fa-file"></i>
                        Add Category
                    </a>
                </li>
                <li>
                    <a href="../addproduct_a.php">
                        <i class="far fa-file"></i>
                        Add Product
                    </a>
                </li>
                
                 <li>
                    <a href="../gallery_admin.php">
                        <i class="fas fa-table"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Users
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="../viewfarmers_admin.php">Farmers</a>
                        </li>
                        <li>
                            <a href="../viewsuppliers_admin.php">Suppliers</a>
                        </li>
                        <li>
                            <a href="../viewusers_admin.php">Users</a>
                        </li>
                    </ul>
                </li>
                
               <!-- <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Pages
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="500.html">500</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>
                <li class="active">
                    <a href="widgets.html">
                        <i class="far fa-window-restore"></i>
                        Widgets
                    </a>
                </li>
                <li>
                    <a href="pricing.html">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>-->
            </ul>
        </nav>

        <!-- Page Content Holder -->
       <div id="content">
            <!-- top-bar -->
           <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                    
                    <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Abhishek</h3>
                                        <a href="mailto:info@example.com">abhishek@gmail.com</a>
                                    </div>
                                </div>
                                
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php">Logout</a>
                              </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

    
    <section>
        <!--GALLERY START-->
        <div class="container">
           
            <main class="cd-main-content">
                <div class="cd-tab-filter-wrapper">
                    <div class="cd-tab-filter">
                        
                    </div> 
                </div> 

                <section class="cd-gallery">
                    <ul>
                        <li class="mix option1">
                          <a class='gallery-link' href='img/images/gallery-1.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery-1.jpg'>
                              <figcaption></figcaption>
                            </figure>
                          </a>
                        </li>    <li class="mix option2">
                          <a class='gallery-link' href='img/images/gallery2.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery5.jpg'>
                              <figcaption></figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option3">
                          <a class='gallery-link' href='img/images/gallery3.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/fruit1.jpg'>
                              <figcaption></figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option1">
                          <a class='gallery-link' href='img/images/gallery4.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/fruit3.jpg'>
                              <figcaption></figcaption>
                            </figure>
                          </a>
                        </li>
                        
                         <li class="mix option3">
                          <a class='gallery-link' href='img/images/gallery6.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery3.jpg'>
                              <figcaption></figcaption>
                            </figure>
                          </a>
                        </li>
                       <li class="gap"></li>
                    </ul>
                    
                </section>
            </main>
        </div>
        <!--GALLERY END-->
   
                    
                    <!-- Pie-chart -->
                   <!-- <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3 report">
                        <h4 class="tittle-w3-agileits mb-4"></h4>
                        <div class="widget widget-report-w3-table">
                            <div class="widget-header row justify-content-between mb-3">
                                <div class="col">
                                    <h3></h3>
                                </div>
                                <div class="col">
                                    <h3 class="text-right"></h3>
                                </div>
                            </div>

                            <div class="widget-body p-15">
                               <!-- <table class="table table-bordered">
                                    <thead>
                                 <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td> </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--// Pie-chart -->
                </div>
            </div>
            <!-- Simple-chart -->
            <!--<div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Weather widget</h4>
                <div class="main-info">
                    <div class="weather-top d-flex justify-content-between">
                        <div class="weather-grids-w3-agile">
                            <h3 class="fri">Friday </h3>
                            <h3>Weather</h3>
                        </div>
                        <div class="weather-grids-w3-agile weather-mdl">
                            <canvas id="clear-day"></canvas>
                        </div>
                        <div class="weather-grids-w3-agile">
                            <h4>Max 27°</h4>
                            <h3>21°C</h3>
                            <h4>Min 10°</h4>
                        </div>
                    </div>
                    <div class="weather-bottom">
                        <ul class="d-sm-flex justify-content-around">
                            <li class="bg">
                                <h4>FRI</h4>
                                <figure class="icons">
                                    <canvas id="clear-night" width="40" height="40"></canvas>
                                </figure>
                                <h5>27°C</h5>
                                <h6>17°C</h6>
                            </li>
                            <li>
                                <h4>SAT</h4>
                                <figure class="icons">
                                    <canvas id="partly-cloudy-day" width="40" height="40"></canvas>
                                </figure>
                                <h5>20°C</h5>
                                <h6>15°C</h6>
                            </li>
                            <li class="bg">
                                <h4>SUN</h4>
                                <figure class="icons">
                                    <canvas id="cloudy" width="40" height="40"></canvas>
                                </figure>
                                <h5>18°C</h5>
                                <h6>12°C</h6>
                            </li>
                            <li>
                                <h4>MON</h4>
                                <figure class="icons">
                                    <canvas id="sleet" width="40" height="40"></canvas>
                                </figure>
                                <h5>17°C</h5>
                                <h6>12°C</h6>
                            </li>
                            <li class="bg">
                                <h4>TUE</h4>
                                <figure class="icons">
                                    <canvas id="rain" width="40" height="40"></canvas>
                                </figure>
                                <h5>17°C</h5>
                                <h6>10°C</h6>
                            </li>
                            <li>
                                <h4>WED</h4>
                                <figure class="icons">
                                    <canvas id="snow" width="40" height="40"></canvas>
                                </figure>
                                <h5>24°C</h5>
                                <h6>10°C</h6>
                            </li>
                            <li class="bg">
                                <h4>THR</h4>
                                <figure class="icons">
                                    <canvas id="wind" width="40" height="40"></canvas>
                                </figure>
                                <h5>25°C</h5>
                                <h6>15°C</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Simple-chart -->

            <!--// three-grids -->
           <!-- <div class="container-fluid">
                <div class="row">
                    <!-- Profile -->
                   <!-- <div class="outer-w3-agile col-xl mt-3">
                        <div class="profile-main-w3ls">
                            <div class="profile-pic wthree">
                                <img src="images/profile.jpg" class="img-fluid" alt="Responsive image">
                                <h3>Andy Brown</h3>
                                <p>Creative Designer</p>
                            </div>
                            <div class="w3-message">
                                <h5>About Me</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat sapien, lobortis id felis
                                    eu, egestas venenatis nisl.</p>
                                <div class="w3ls-touch">

                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--// Profiile -->
                    <!-- Contacts -->
                  <!--  <div class="outer-w3-agile col-xl mt-3 mx-xl-3">
                        <div class="agileinfo-cdr">
                            <h4 class="tittle-w3-agileits mb-4">Contacts</h4>
                            <hr>
                            <div class="card-body">
                                <div class="list-group">
                                    <a class="list-group-item media d-flex justify-content-between align-items-center" href="">
                                        <div class="contact-wdgt-left">
                                            <img src="images/c1.jpg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="media-body d-flex justify-content-between align-items-center">
                                            <div class="contact-wdgt-left">
                                                <div class="lg-item-heading">Alexander</div>
                                                <small class="lg-item-text">example@gmail.com</small>
                                            </div>
                                            <div class="contact-wdgt-right">
                                                <div class="lg-item-heading">Ceo</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item media d-flex justify-content-between align-items-center mt-4" href="">
                                        <div class="contact-wdgt-left">
                                            <img src="images/c2.jpg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="media-body d-flex justify-content-between align-items-center">
                                            <div class="contact-wdgt-left">
                                                <div class="lg-item-heading">Jackson Jacob</div>
                                                <small class="lg-item-text">example1@gmail.com</small>
                                            </div>
                                            <div class="contact-wdgt-right">
                                                <div class="lg-item-heading">Director</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item media d-flex justify-content-between align-items-center mt-4" href="">
                                        <div class="contact-wdgt-left">
                                            <img src="images/c3.jpg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="media-body d-flex justify-content-between align-items-center">
                                            <div class="contact-wdgt-left">
                                                <div class="lg-item-heading">Merina lisa</div>
                                                <small class="lg-item-text">example2@gmail.com</small>
                                            </div>
                                            <div class="contact-wdgt-right">
                                                <div class="lg-item-heading">Manager</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item media d-flex justify-content-between align-items-center mt-4" href="">
                                        <div class="contact-wdgt-left">
                                            <img src="images/c4.jpg" class="img-fluid" alt="Responsive image">
                                        </div>
                                        <div class="media-body d-flex justify-content-between align-items-center">
                                            <div class="contact-wdgt-left">
                                                <div class="lg-item-heading">Michael</div>
                                                <small class="lg-item-text">example3@gmail.com</small>
                                            </div>
                                            <div class="contact-wdgt-right">
                                                <div class="lg-item-heading">Assistant</div>
                                            </div>
                                        </div>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Contacts -->
                    <!-- Activities -->
                <!--    <div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Activities</h4>
                        <div class="card-body card-padding">
                            <div class="">
                                <hr>
                                <div class="widget-body">
                                    <div class="streamline">
                                        <div class="sl-item border-left border-danger">
                                            <div class="sl-content">
                                                <small class="text-muted">0 mins ago</small>
                                                <p>Alexander has just joined</p>
                                            </div>
                                        </div>
                                        <div class="sl-item border-left border-primary">
                                            <div class="sl-content">
                                                <small class="text-muted">15 minutes ago</small>
                                                <p>Michael has sent a request for access</p>
                                            </div>
                                        </div>
                                        <div class="sl-item border-left border-success">
                                            <div class="sl-content">
                                                <small class="text-muted">18 minutes ago</small>
                                                <p>chris added you to his team</p>
                                            </div>
                                        </div>
                                        <div class="sl-item border-left border-secondary">
                                            <div class="sl-content">
                                                <small class="text-muted">22 minutes ago</small>
                                                <p>jackson has finished his task</p>
                                            </div>
                                        </div>
                                        <div class="sl-item border-left border-warning">
                                            <div class="sl-content">
                                                <small class="text-muted">30 minutes ago</small>
                                                <p>Jacob shared a folder with you</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--// Activities -->
                </div>
            </div>
            <!--// Three-grids -->
            
            <!--// Countdown -->
            <!-- Copyright -->
           <!-- <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Weather-skycons-icons -->
    <script src="js/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#FFD700"
            }),
            list = [
                "clear-day"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>
    <script>
        var icons = new Skycons({
                "color": "#f5f5f5"
            }),
            list = [
                "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>
    <!--// Weather-skycons-icons -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>