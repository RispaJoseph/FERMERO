<?php

include('../dbconnection.php');
include('session.php');
$uid=$_GET['m'];

$sql1="select * from agripedia where nid='$uid'";
$res=mysqli_query($con,$sql1);
$sql="select * from agripedia where nid!='$uid' LIMIT 3";
$res1=mysqli_query($con,$sql);
?>











<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 16:01:28 GMT -->
<head>
<meta charset="utf-8">
<title>Warsaw : Organic Fruits &amp; Vegetables  HTML Template | Our Blog</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                   <div class="logo-box">
                        <div class="logo"><a href=""><img class="img-responsive" src="images/gallery/logo-2.png" alt="logo" width="100px" height="50px" title="logo" /></a></div>
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
                                    
                                    
                                            <li><a href="../home_farmer.php">Home</a></li>
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
                                     
                                    <li class="dropdown"><a href="">Products</a>
                                    	<ul>
                                            <li><a href="../addproduct_f.php">Add Products</a></li>
                                           
                                            <li><a href="../viewproduct_f.php">View Products</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="shop1.php">Purchase</a>
                                    	<ul>
                                            <li><a href="suppshop1.php">Our Shop</a></li>
                                           
                                            <li><a href="supp_cart.php">Shopping Cart</a></li>
                                            
                                        </ul>
                                    </li>
                                <li><a href="../gallery_farmer.php">Gallery</a></li>
                                     <li class="dropdown"><a href="">Add</a>
                                    	<ul>
                                            <li><a href="../feedback2.php">Feedback</a></li>
                                           
                                            <li><a href="../complaint2.php">Complaint</a></li>
                                            
                                        </ul>
                                    </li>
                               
                                      
                                 <li class="current dropdown"><a href="#">View</a>
                                    	<ul>
                                            <li><a href="shop_event.php">Events</a></li>
                                           
                                            <li><a href="shop_magazine.php">Magazines</a></li>
                                             <li><a href="agripedia_view.php">Agripedia</a></li>
                                             <li><a href="success_view.php">Success stories</a></li>
                                              <li><a href="shop_job.php">Agricultural Jobs</a></li> <li><a href="shop_lease.php">Land for Lease</a></li> <li><a href="subsidy_view.php">Government Schemes</a></li> <li><a href="../directory.php">Directory</a></li>
                                             <li><a href="shop_plant.php">Commercial Products</a></li>
                                            
                                        </ul>
                                    </li>
                                   <!-- <li class="dropdown"><a href="gallery.php">Gallery</a>
                                    	<ul>
                                            <li><a href="gallery-three-column.html">Gallery Three Column</a></li>
                                            <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                            <li><a href="gallery-fullwidth.html">Gallery Fullwidth</a></li>
                                        </ul>
                                    </li>-->
                                   
                                 <li class="dropdown"><a href="">Settings</a>
                                    	<ul>
                                            <li><a href="../editprofilefarmer.php">Profile</a></li>
                                           
                                            <li><a href="../changepass.php">Change password</a></li>
                                            
                                        </ul>
                                    </li>   
                                
                                   
                                <li><a href="../logout.php">Logout</a></li>
                                
                               
                                

                                    </ul>
                            </div>
                        </nav><!-- Main Me
                        
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
                    <li class="dropdown"><a href="#">Home</a>
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
                    <li class="current dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
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
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Agripedia Single</h1>
        </div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog Classic-->
                    <section class="blog-classic-view post-details">
                       <?php  while($fetch=mysqli_fetch_array($res))
                                                    {
                                                ?>
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="noimage" style="height:300px" width="80px" /></a></figure>
                                 
                                <div class="lower-content">
                                    <h3><a href=""><?php echo $fetch['title']?>.</a></h3>
                                    <div class="post-content">
                                    	<div class="text">
                                            <p><?php echo $fetch['des']?>.</p>
                                        </div>
                                        
                                        <div class="two-col-images">
                                        	<div class="row clearfix">
                                            	<!--Image Column-->
                                                <div class="image-column col-md-6 col-sm-6 col-xs-12"><figure class="image-box"><a href="blog-single.html"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image1']);?>" alt="noimage" style="height:300px" width="80px" /></a></figure>
                                 </div>
                                                <div class="image-column col-md-6 col-sm-6 col-xs-12"><figure class="image-box"><a href="blog-single.html"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image2']);?>" alt="noimage" style="height:300px" width="80px" /></a></figure>
                                 </div>
                                                <!--Image Column-->
                                                
                                            </div>
                                        </div>
                                        
                                     
                                        <p><?php echo $fetch['des1']?>. </p>
                                        
                                    </div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="post-tags"><span class="fa fa-tag"></span> &ensp; <a href="#">Fruits</a>, <a href="#">Vegetables</a>, <a href="#">Organic</a> </div>
                                </div>
                            </div>
                        </div>
                        
                         <?php
                                                    }
                                                    ?>
                        <!--Comments Area-->
                     <!--   <div class="comments-area">
                        	<div class="sidebar-title"><h3>Comments (02)</h3></div>
                            
                            <div class="comment-box">
                                
                                <div class="comment">
                                	<div class="comment-inner">
                                        <div class="author-thumb"><img src="images/resource/author-thumb-2.jpg" alt=""></div>
                                        <div class="comment-content">
                                            <div class="comment-header clearfix">
                                                <strong>Stevan Smith</strong> <span class="date">September  22, 2016</span>
                                            </div>
                                            <div class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam cursus nibh vitae lacus  vitae dictum lectus faucibus. Quisque id venenatis nisi, vel dictum lorem.</div>
                                            <div class="link-box"><a href="#" class="reply-btn">Reply </a></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="comment reply-comment">
                                	<div class="comment-inner">
                                        <div class="author-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></div>
                                        <div class="comment-content">
                                            <div class="comment-header clearfix">
                                                <strong>Ellena Gilbert</strong> <span class="date">September  22, 2016</span>
                                            </div>
                                            <div class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam cursus nibh vitae lacus  vitae dictum lectus faucibus.</div>
                                            <div class="link-box"><a href="#" class="reply-btn">Reply </a></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--Comment Form-->
                     <!--   <div class="comment-form default-form">
                            <div class="sidebar-title"><h3>Leave a Comment</h3></div>
                            <form method="post" action="http://world5.commonsupport.com/2017/warsaw/blog.html">
                                <div class="row clearfix">
                                	
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<div class="field-label">Name</div>
                                            <input type="text" name="username" value="">
                                        </div>
            
                                        <div class="form-group">
                                        	<div class="field-label">Email</div>
                                            <input type="email" name="email" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<div class="field-label">Comments</div>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    	<div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-two">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </section>-->
                
                </div><!--End Content Side-->   
                
                <!--Sidebar-->      
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                        
                        <!-- Search Form -->
                        <div class="widget search-box sidebar-widget">
                            
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Now">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            
                            <ul class="list">
                                <li><a href="#">Autumn (1)</a></li>
                                <li><a href="#">Fruits (2)</a></li>
                                <li class="current"><a href="#">Organic Foods (2)</a></li>
                                <li><a href="#">Vegetables (4)</a></li>
                                <li><a href="#">Spring (2)</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts sidebar-widget">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="#">It is a long established the fresh fruits fact</a></div>
                                <div class="time">September 22, 2016</div>
                            </div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="#">12 plants that repel un wanted insects</a></div>
                                <div class="time">Augest 29, 2016</div>
                            </div>
                            
                        </div>
                        
                        <!-- Archives -->
                        <div class="widget archives-list sidebar-widget">
                            <div class="sidebar-title"><h3>Archives</h3></div>
                            
                            <ul class="list">
                                <li><a href="#">August 2016</a></li>
                                <li><a href="#">July 2016</a></li>
                                <li><a href="#">June 2016</a></li>
                                <li><a href="#">May 2016</a></li>
                                <li><a href="#">Apirl 2016</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="widget sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Tags</h3></div>
                            
                            <a href="#">Family</a>
                            <a href="#">Farming</a>
                            <a href="#">Clean &amp; Clear</a>
                            <a href="#">Fruits</a>
                            <a href="#">Fresh</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Nutrition</a>
                            <a href="#">Health</a>
                            <a href="#">Life</a>
                            
                        </div>
                        
                    </aside>
                </div><!--End Sidebar-->      
                
            </div>
        </div>
    </div>
    
    
    <!--Main Footer / Footer Style One-->
    <footer class="main-footer footer-style-one">
    	
        <!--Footer Upper-->        
      <!--  <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Footer Column-->
              <!--  	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <figure class="footer-logo"><a href="index-2.html"><img src="images/logo-3.png" alt=""></a></figure>
                            
                            <div class="text">
                            	<p>Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoat nacus nisi sed, pulvinar ex.</p>
                                <p>Etiam sit amet libero consea typoe, convallis odio estibulum urna.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                   <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget info-widget">
                        	<h2>KEEP IN TOUCH</h2>
                            <ul class="info">
                            	<li>Address : 44 New Design Street, Down Town,  Melbourne 005</li>
                                <li>Phone :  800 433 633 (or) 452 23 4354</li>
                                <li>Email : Stevan@Example.com</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <!--Footer Column-->
                 <!--   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    	<div class="footer-widget gallery-widget">
                            <h2>Instagram Feed</h2>	
                            <div class="clearfix">
                                <figure class="image"><a href="images/resource/blog-image-4.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-5.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-6.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-7.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-8.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-9.jpg" class="lightbox-image" data-fancybox-group="fancybox" title="Caption Here"><img src="images/resource/footer-gallery-6.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                   <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
                    	<div class="footer-widget links-widget">
                        <h2>Featured links</h2>
                        	<div class="row clearfix">
                            	<div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Team Members</a></li>
                                    </ul>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul>
                                        <li><a href="#">What We Do</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Our  Careere</a></li>
                                    </ul>
                                </div>    
                            </div>
                            <br>
                            <div class="social-links">
                            	<h3>Follow Us On:</h3>
                                <div class="links">
                                    <a href="#"><span class="fa fa-facebook-official"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                    <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                    <a href="#"><span class="fa fa-dropbox"></span></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <section class="news-section">
        <div class="auto-container">
        <div class="sec-title-one">
                <h2>Latest  updates</h2>
            </div>
            
        	<div class="row clearfix">
            	
                <!--News Style One--><?php  while($fetch=mysqli_fetch_array($res1))
                                                    {
                                                ?>
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	 <figure class="image-box"><a href="blog-single.php"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image2']);?>" alt="noimage" height="100px" width="100px" /></a></figure>
                                 
                        <div class="lower-content">
                        	<h3><a href="agripedia_single.php?m=<?php echo $fetch['nid'];?>"><?php echo $fetch['title']?>.</a></h3>
                            
                            <div class="info clearfix">
                            	<ul class="post-meta clearfix">
                                	<li><a href="#"><span class="fa fa-clock-o"></span><?php echo $fetch['date'];?></a></li>
                                    <li><a href="#"><span class="fa fa-comment-o"></span> <?php echo $fetch['time'];?></a></li>
                                </ul>
                                <div class="more-link"><a href="agripedia_single.php?m=<?php echo $fetch['nid'];?>">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            
                 <?php
                                                    }
                                                    ?>
                                                  
        </div>

    
</div>
            </section>
        </div>
        </footer>
    
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 16:01:29 GMT -->
</html>