<?php

include('dbconnection.php');
include('session.php');

$user=$_SESSION['sess'];
$sql="select * from reg where username='$user'";
$res=mysqli_query($con,$sql);
?>





<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/3-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:12:54 GMT -->
<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		TITLE AND META TAGS
		=============================================== -->
		<title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Quickdev">
        <meta name="theme-color" content="#EEC344">

		<!-- ==============================================
		FAVICON
		=============================================== -->  
        <link rel="shortcut icon" href="img/master/favicon.png">
             
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/home-3-styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/css/all.min.css">
        <link rel="stylesheet" href="css/slick.min.css"> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href='css/animation.aos.min.css'>
        <link rel="stylesheet" href="css/animate.min.css">
        <script src="js/modernizr-custom.js"></script>
	</head>
    
<body>
    
    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="loader">
          <div class="square" ></div>
          <div class="square"></div>
          <div class="square last"></div>
          <div class="square clear"></div>
          <div class="square"></div>
          <div class="square last"></div>
          <div class="square clear"></div>
          <div class="square "></div>
          <div class="square last"></div>
        </div>
    </div>
    <!-- LOADER -->
    
    <!--HEADER START-->
    <header>
        <!--NAVIGATION-->
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href=""><div class="logo-brand"><img src="img/master/logo.png" alt=""></div></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>				
                    </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav navbar-left">
                      <!--<li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">HOME<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="index.html">Homepage One</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="2-home.html">Homepage Two</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="3-home.html">Homepage Three</a></li>
                        </ul>-->
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home_supplier.php">HOME</a>
                      </li>
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PRODUCTS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addseed_a.php">ADD PRODUCTS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="viewseed.php">VIEW PRODUCTS</a></li>
                          
                          
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PURCHASE<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop2.php">OUR SHOP</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shopping-cart3.php">SHOPPING CART</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/wishlist.php">WISH LIST</a></li>
                          
                          
                        </ul>
                      </li>
                      
                      
                      
                      
                      
                    
                      
                      
                        <li class="nav-item">
                        <a class="nav-link" href="gallery_supplier.php">GALLERY</a>
                            <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">ADD<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="feedback3.php">FEEDBACK</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="complaint3.php">COMPLAINT</a></li>
                          
                          
                        </ul>
                      </li>
                              
                      
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="" data-toggle="dropdown">SETTINGS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="editprofilesupplier.php">PROFILE</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="changepasssupp.php">CHANGE PASSWORD</a></li>
                          
                          
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                    
                    <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                       <div class="profile_img">
                                                  <?php  while($fetch=mysqli_fetch_array($res))
                                                    {
                                                ?>
												<span class="prfil-img">
                                                    
                                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['photo']);?>" alt="noimage" height="50px" width="50px"/>
                                                      
                                                    
                                           </span> 
                                        
                                           
                                        
                                                 <p><h6 style="font-style:cooper black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                               <?php echo $fetch['username']?></h6></p>
                                                    <?php
                                                    }
                                                    ?>
                                                  
												</div>
                                    <div class="dropdown-divider"></div>
                                          
                                           <a class="dropdown-item" href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
                              </div>
                                    </div>
                        </div>
                        </li>
                    </ul>
                       
                                
                                
                              
                       
                      
                     <!-- <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">PAGES<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="error-page.html">Error Page</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="products.html">Products</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="product-details.html">Products Details</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">BLOG<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="blog-classic.html">Blog Classic</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.php">CONTACT US</a>
                      </li>-->
                    </ul>
                  </div>
                </nav>
            </div>
        </div>
        <!--NAVIGATION END-->
    </header> 
    <!--HEADER END-->
    
    <!--SLIDER START-->
    <div class="main-slider">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/images/slider-bg-2.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Eat Healthy<br><span>stay healthy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/images/blog7.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Fruit Is <br> <span>natures candy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/images/blog9.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Vegetables Plenty <br><span>body wealthy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
    </div>
    <!--SLIDER END-->
    
 
  
   
   
    <!--CLIENTS END-->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->
    
	<!-- ==============================================
	JAVASCRIPTS
	=============================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agrom.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script> 
    
    </body>
    

<!-- Mirrored from quickdevs.com/templates/agrom/3-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:14:41 GMT -->
</html>