<?php
include('dbconnection.php');
include('session.php');
?>



<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:19:52 GMT -->
<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		TITLE AND META TAGS
		=============================================== -->
		<title>Agrom - Organic & Agriculture Food HTML Template</title>
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
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/css/all.min.css">
        <link rel="stylesheet" href="css/slick.min.css"> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href='css/animation.aos.min.css'>
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.min.css">
        <link rel="stylesheet" href="css/magnific.css">
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
                    <ul class="navbar-nav ml-auto">
                     <!-- <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">HOME<span class="caret-drop"></span></a>
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
                        <a class="nav-link" href="home_farmer.php">HOME</a>
                      </li>
                        
                        
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PRODUCTS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addproduct_f.php">ADD PRODUCTS</a></li>
                            
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="viewproduct_f.php">VIEW PRODUCTS</a></li>
                         
                          
                        </ul>
                      </li>
                      
                      
                       
                     
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="" data-toggle="dropdown">PURCHASE<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./warsaw/suppshop1.php">OUR SHOP</a></li>
                            
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/supp_cart.php">SHOPPING CART</a></li>
                           
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/wishlist2.php">WISHLIST</a></li>
                         
                          
                        </ul>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="gallery_farmer.php">GALLERY</a>
                      </li>
                      
                        <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">ADD<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="feedback2.php">FEEDBACK</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="complaint2.php">COMPLAINT</a></li>
                          
                          
                        </ul>
                      </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">VIEW<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop_event.php">EVENTS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop_magazine.php">MAGAZINES</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/agripedia_view.php">AGRIPEDIA</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/success_view.php">SUCCESS STORIES</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop_job.php">AGRICULTURAL JOBS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop_lease.php">LAND FOR LEASE</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/subsidy_view.php">GOVENMENT SCHEMES</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="directory.php">DIRECTORY</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop_plant.php">COMMERCIAL PRODUCTS</a></li>
                          
                                                  </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">MACHINES<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addmachine.php">ADD</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/rent_machine.php">RENT</a></li>
                          
                          
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">SETTINGS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="editprofilefarmer.php">PROFILE</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="changepass.php">CHANGE PASSWORD</a></li>
                          
                          
                        </ul>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                      </li>
                       
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
                        <a class="nav-link" href="contact.html">CONTACT</a>
                      </li>
                    </ul>-->
                  </div>
                </nav>
            </div>
        </div>
        <!--NAVIGATION END-->
    </header> 
    <!--HEADER END-->
    
    <div class="sections gallery-background">
        <div class="container">
            <div class="pages-title">
                <h1>Photo <br> <span>GALLERY</span></h1>
                <p><a href="#"></a> &nbsp;  &nbsp; <a href="#"></a></p>
            </div>
        </div>
    </div>
    
    <section>
        
        <!--GALLERY START-->
        <div class="container">
           <div class="section-title">
                <h2>Our <span>Gallery</span></h2>
                <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>
            </div>
            <main class="cd-main-content">
                <div class="cd-tab-filter-wrapper">
                    <div class="cd-tab-filter">
                        

                
                        
                        
        <!--GALLERY END-->
       
  
<ul class="cd-filters">
                            <li class="placeholder"> 
                                <a data-type="all" href="">All</a> <!-- selected option on mobile -->
                            </li> 
                            <li class="filter"><a class="selected" href="" data-type="all">All</a></li>
                            <li class="filter" data-filter=".option1"><a href="" data-type="option1">Vegetables</a></li>
                            <li class="filter" data-filter=".option2"><a href="" data-type="option2">Fruits</a></li>
                            <li class="filter" data-filter=".option3"><a href="" data-type="option3">Organic</a></li>
                        </ul>
                    </div> 
                </div> 

                <section class="cd-gallery">
                    <ul>
                        <li class="mix option1">
                          <a class='gallery-link' href='img/images/gallery-1.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery-1.jpg'>
                              <figcaption>Vegetables Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option2">
                          <a class='gallery-link' href='img/images/gallery5.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery5.jpg'>
                              <figcaption>Fruits Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option3">
                          <a class='gallery-link' href='img/images/gallery3.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery3.jpg'>
                              <figcaption>Fruits Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option1">
                          <a class='gallery-link' href='img/images/media-thumb3.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/media-thumb3.jpg'>
                              <figcaption>Vegetables Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option2">
                          <a class='gallery-link' href='img/images/media-thumb4.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/media-thumb4.jpg'>
                              <figcaption>Organic Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li class="mix option3">
                          <a class='gallery-link' href='img/images/gallery6.jpg'>
                            <figure class='gallery-image'>
                              <img src='img/images/gallery6.jpg'>
                              <figcaption>Organic Gallery</figcaption>
                            </figure>
                          </a>
                        </li>
                       <li class="gap"></li>
                    </ul>
                    <div class="cd-fail-message">No results found</div>
                </section>
            </main>
        </div>
        <!--GALLERY END-->
       
  

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->
    
	<!-- ==============================================
	JAVASCRIPTS
	=============================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agrom.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/main-filter.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script> 
    
    </body>
    

<!-- Mirrored from quickdevs.com/templates/agrom/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:19:52 GMT -->
</html>