 

<?php

include('../dbconnection.php');
include('session.php');
$a=date("Y-m-d", strtotime("now"));
$sql="select * from addproduct where  expiry_date >= '$a'  LIMIT 4";
$res=mysqli_query($con,$sql)or die( mysqli_error($con));

?>




<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 15:52:36 GMT -->
<head>
<meta charset="utf-8">
<title>Agrom</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
  
 	
    <!-- Main Header-->
    <header class="main-header">
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href=""><img class="img-responsive" src="images/gallery/logo-2.png" alt="logo" width="100px" height="50px" title="logo" />
                        </a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="home_user.php">Home</a></li>
                                   <!-- <li class="current dropdown"><a href="home_user.php">Home</a>
                                    	<ul>
                                            <li><a href="index-2.html">Homepage One</a></li>
                                            <li><a href="index-3.html">Homepage Two</a></li>
                                            <li><a href="index-4.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="index-4.html">Header Styles</a>
                                            	<ul>
                                                	<li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </li>
                                <li><a href="../gallery_user.php">Gallery</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                 <li><a href="news.php">News</a></li>
                                   
                                   <!-- <li class="dropdown"><a href="gallery.php">Gallery</a>
                                    	<ul>
                                            <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                                            <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                            <li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                                        </ul>
                                    </li>-->
                                   
                                    <li class="dropdown"><a href="shop1.php">Shop</a>
                                    	<ul>
                                            <li><a href="shop1.php">Our Shop</a></li>
                                           
                                            <li><a href="shopping-cart2.php">Shopping Cart</a></li>
                                             <li><a href="wishlist1.php">Wish List</a></li>
                                            
                                        </ul>
                                    </li>
                                 <li class="dropdown"><a href="shop1.php">Add</a>
                                    	<ul>
                                            <li><a href="../feedback.php">Feedback</a></li>
                                           
                                            <li><a href="../complaint.php">Complaint</a></li>
                                            
                                        </ul>
                                    </li>
                                 <li class="dropdown"><a href="home_user.php">Settings</a>
                                    	<ul>
                                            <li><a href="../editprofileuser.php">Edit Profile</a></li>
                                           
                                            <li><a href="../changepassuser.php">Change Password</a></li>
                                            
                                        </ul>
                                    </li>
                               
                                   
                                <li><a href="../logout.php">Logout</a></li>
                                
                                <li>
                                    <a class="theme-btn add-cart-btn"  href="shopping-cart2.php"> <span class="fa fa-shopping-cart"></span></a></li>
                                

                                    </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href=""><img src="images/logo-4.png" alt=""></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <ul class="navigation">
                    <li class="current dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index-2.html">Homepage One</a></li>
                            <li><a href="index-3.html">Homepage Two</a></li>
                            <li><a href="index-4.html">Homepage Three</a></li>
                            <li class="dropdown"><a href="index-4.html">Header Styles</a>
                                <ul>
                                    <li><a href="index-2.html">Header Style One</a></li>
                                    <li><a href="index-3.html">Header Style Two</a></li>
                                    <li><a href="index-4.html">Header Style Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li class="dropdown"><a href="#">Gallery</a>
                        <ul>
                            <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                            <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                            <li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    
    <!--Main Slider-->
    <section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-150"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Farm fresh</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-70"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="big-text">Locally Grown</div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one"></a></div>
                    
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/leaf-icon.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3>The Huge variety of the freshest <br>fruits and vegetables</h3></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one"></a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>
                    
                    
                    </li>
                    
                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/home1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/home1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/leaf-icon.png" alt=""></figure></div>
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3 class="text-center">The Huge variety of the freshest <br>fruits and vegetables</h3></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one"></a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>
                    
                    
                    </li>
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    
    <!--Intro Section-->
    <section class="intro-section">
    	<div class="inner-part">
        	<div class="auto-container">
            	<div class="content-box">
                	<div class="inner-box">
                        <!--Section Title-->
                        <div class="sec-title-one">
                            <h2>Welcome to our healthy farm</h2>
                        </div>
                        
                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h3>01. 100% Organic</h3>
                                    <div class="text"></div>
                                    <a href="blog-single.html" class="theme-btn btn-style-two"></a>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner text-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h3>02. Best Quality Products</h3>
                                    <div class="text">.</div>
                                    <a href="blog-single.html" class="theme-btn btn-style-two"></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--About Farm Section-->
    <section class="about-farm">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title-two">
                <h2>About our farm</h2>
            </div>
                        
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-1.png" alt=""></figure>
                </div>
                <!--Column-->
                <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="tabs-box tabs-style-one">
                    	<div class="row clearfix">
                        	
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!--Tab Buttons-->
                                <ul class="tab-buttons clearfix">
                                    <li class="tab-btn" data-tab="#tab-one"><span class="txt">2012</span></li>
                                    <li class="tab-btn active-btn" data-tab="#tab-two"><span class="txt">2014</span></li>
                                    <li class="tab-btn" data-tab="#tab-three"><span class="txt">2019</span></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                                <div class="tabs-content">
                                    
                                    <!--Tab-->
                                    <div class="tab" id="tab-one">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2012.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Muhibbur Rashid</h5>
                                    </div>
                                    
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="tab-two">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2014.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Stevan Smith</h5>
                                    </div>
                                    
                                    <!--Tab-->
                                    <div class="tab" id="tab-three">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2016.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Tafseer Hussain</h5>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!--Fluid Section One-->
    <section class="fluid-section-one">
    	<div class="oval-cut"></div>
        
        <!--FLoated Image Left-->
        <figure class="floated-image-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-2.png" alt=""></figure>
        <!--FLoated Image Right-->
        <figure class="floated-image-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/food-image-3.png" alt=""></figure>
        
    	<div class="outer-box clearfix">
        	<!--Left Column-->
            <div class="left-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Save up to 50 %</h3>
                        <h5>on your first purchase</h5>
                        
                    </div>
                </div>
            </div>	
            
            <!--Right Column-->
            <div class="right-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Free Shipping</h3>
                        <h5>On order over $99</h5>
                       
                    </div>
                </div>
            </div>	
            
        </div>
    </section>
    
    
    <!--Gallery Section-->
  <section class="related-products">
        	<div class="auto-container">
                <div class="sec-title-one"><h2>Our Products</h2></div>
             
            
            

                
                    
                    <!--Default Food Item-->
                   <!-- <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/1.jpg" title="Image Title Here"><img src="images/gallery/1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Passion Fruits</a></h3>
                                    <div class="price">$ 25.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Food Item-->
                   <!-- <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all breads juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/2.jpg" title="Image Title Here"><img src="images/gallery/2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Kiwi Fruits</a></h3>
                                    <div class="price">$ 18.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Food Item-->
                    
            


<?php  while($fetch=mysqli_fetch_array($res))
                                                    {
                                                ?>
 <div class="row clearfix">
            	<!--Default Shop Item-->
     
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><a href="shop-single.php"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="noimage" height="100px" width="80px"/></a></figure>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="shop-single.php"><?php echo $fetch['product_name']?></a></h3>
                            <div class="price"><span class="price-txt"></span></div>
                        </div>
                        
                        <!--Overlay Box-->
                        <div class="overlay-box">
                        	<div class="prod-options">
                            	
                                
                                
                                
                                
                                <a class="theme-btn add-cart-btn"  href="shop-single.php?m=<?php echo $fetch['product_name'];?>">CLICK TO VIEW </a>
                                
                                
                                
                                
                               
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
      <?php
                                                    }
                                                    ?>
                    
                    <!--Default Food Item-->
                   <!-- <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all fruits vegetables breads juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/4.jpg" title="Image Title Here"><img src="images/gallery/4.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Ripe pea</a></h3>
                                    <div class="price">$ 15.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Food Item-->
                    <!--<div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all vegetables">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/5.jpg" title="Image Title Here"><img src="images/gallery/5.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Figs Sweet</a></h3>
                                    <div class="price">$ 18.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Food Item-->
                    

                </div>
                

				<!--Button Outer-->
				<div class="more-btn-outer text-center"><a href="shop1.php" class="theme-btn btn-style-four">View More</a></div>

            </div>
    </section>
            
        
    
   <!--Deal of the Day-->
    <!--<section class="deal-of-day">
    	<div class="auto-container">
        	
            <!--Title Box-->
          <!--  <div class="title-box">
                <h3>Save up to 50 %</h3>
                <h2>Deal of the day</h2>
            </div>
            
            <!--Carousel Outer-->
           <!-- <div class="carousel-outer">
            	<div class="single-item-carousel">
                	<!--Slide Item-->
                 <!--   <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                           <!-- <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                           <!-- <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                  <!--  <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <!--<div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                          <!--  <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                   <!-- <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                          <!--  <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="images/resource/food-image-4.png" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                           <!-- <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    <!--Our Team-->
   <!-- <section class="team-section">
    	<div class="auto-container">
        	<!--Section Title-->
          <!--  <div class="sec-title-one">
                <h2>Our farmers</h2>
            </div>
            
        	<div class="row clearfix">
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member-->
                   <!-- <div class="default-team-member">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                           <!-- <div class="image-column"><figure class="image"><a href="#"><img src="images/resource/team-image-1.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                            <!--<div class="content-column">
                                <div class="inner">
                                    <h3>Peter Parker</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Team Member-->
                   <!-- <div class="default-team-member alternate">
                      <!--  <div class="inner-box clearfix">
                            <!--Image Column-->
                           <!-- <div class="image-column"><figure class="image"><a href="#"><img src="images/resource/team-image-2.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                           <!-- <div class="content-column">
                             <!--   <div class="inner">
                                    <h3>Darly Dixon</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member / Vertical-->
                   <!-- <div class="default-team-member vertical">
                       <!-- <div class="inner-box clearfix">
                         <!--   <!--Image Column-->
                            <!--<div class="image-column"><figure class="image"><a href="#"><img src="images/resource/team-image-3.jpg" alt=""></a></figure></div>
                            <!--Content Column-->
                           <!-- <div class="content-column">
                                <div class="inner">
                                    <h3>Rick Grimes</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!--Testimonials Section-->
   <!-- <section class="testimonial-section">
    	
    	<div class="oval-cut"></div>
        
    	<div class="auto-container">
        	<div class="carousel-outer">
            	<div class="icon-box"><span class="flaticon-blocks-with-angled-cuts"></span></div>
                
            	<div class="single-item-carousel">
                	<!--Slide Item-->
                   <!-- <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                  <!--  <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                  <!--  <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--sponsors style one-->
    <!--<section class="sponsors-style-one">
    	<div class="auto-container">
        	<!--Section Title-->
         <!--   <div class="sec-title-one">
                <h2>Our partners</h2>
            </div>
            
    		<div class="sponsors-outer">
                <!--Sponsors Carousel-->
               <!-- <ul class="sponsors-carousel">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/sponsors/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    
    
    
    
        
        
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>


</html>