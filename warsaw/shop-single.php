

<?php


include('../dbconnection.php');
include('session.php');
$uid=$_GET['m'];
$user=$_SESSION['sess'];
$a=date("Y-m-d", strtotime("now"));
$sql="select * from addproduct where product_name!='$uid' and expiry_date >= '$a' LIMIT 4";

$res=mysqli_query($con,$sql)or die( mysqli_error($con));


if(isset($_POST['submit']))
{

  

    
      

$pd=$_POST["pp"];
   
   

$sql12="select * from `agri3`.`cart3` where pid ='$pd' and username= '$user';";
$exe12=mysqli_query($con,$sql12);
if (mysqli_num_rows($exe12)==0)
{

$sql5="INSERT INTO `agri3`.`cart3` (`id`,`pid`,`username`, `status` ) VALUES (NULL, '$pd', '$user', '1');";
$exe5=mysqli_query($con,$sql5);
}
   
            
            header("location:shopping-cart2.php");

           
            }

if(isset($_POST['wishlist']))
{

  


$pd=$_POST["pp"];


$sql12="select * from `agri3`.`wish` where pid ='$pd' and username= '$user';";
$exe12=mysqli_query($con,$sql12);
if (mysqli_num_rows($exe12)==0)
{


$sql5="INSERT INTO `agri3`.`wish` (`id`,`pid`,`username`, `status` ) VALUES (NULL, '$pd', '$user', '1');";
$exe5=mysqli_query($con,$sql5);
}
    header("location:wishlist1.php");
}
 
$sql1="select * from addproduct where product_name='$uid'  ";
$exe=mysqli_query($con,$sql1);
?>





<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 16:01:39 GMT -->
<head>
<meta charset="utf-8">
<title></title>
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
                                   <li><a href="home_user.php">home</a></li>
                                  
                                    <li><a href="../gallery_user.php">Gallery</a></li> 
                                   <li><a href="blog.php">Blog</a></li>
                                   <li><a href="news.php">News</a></li>
                                
                                
                                   
                                    
                                    <li class="current dropdown"><a href="">Shop</a>
                                    	<ul>
                                            <li><a href="shop1.php">Our Shop</a></li>
                                            
                                            <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="shop1.php">Add</a>
                                    	<ul>
                                            <li><a href="../feedback.php">Feedback</a></li>
                                           
                                            <li><a href="../complaint.php">Complaint</a></li>
                                            
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
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="current dropdown"><a href="#">Shop</a>
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
            <h1>Single Product</h1>
        </div>
    </section>
    
    
    <!--Shop Single-->
    <div class="shop-single">
    	
        <!--Product Details Section-->
        <section class="product-details">
            <div class="auto-container">
                <!--Basic Details-->
                <div class="basic-details">
                    
<?php  while($fetch1=mysqli_fetch_array($exe))
                                                    {
                                                ?>
                    <div class="row clearfix">
                        <div class="image-column col-md-4 col-sm-5 col-xs-12">
                            <figure class="image-box"><a href="" class="lightbox-image" title="Image Caption Here"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch1['image']);?>" alt="noimage" height="100px" width="80px"/></a></figure>
                        </div>
                        <div class="info-column col-md-8 col-sm-7 col-xs-12">
                            <div class="details-header">
                                <h4><?php echo $fetch1['product_name']?></h4>
                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> <span class="txt">(Customer Review)</span> </div>
                                <div class="item-price"><span class="old-price">$128</span> $<?php echo $fetch1['unitcost']?>.00</div>
                            </div>
                            
                            <div class="text">Seller: <?php echo $fetch1['username']?>. </div>
                             <div class="text">Description: <?php echo $fetch1['des']?>. </div>
                            <div class="text">Expires On: <?php echo $fetch1['expiry_date'] ?>. </div>
                            
                            <div class="availablity">Available:<?php echo $fetch1['quantity']?>Kg Left in Stock</div>
                            
                           
                            
                            <div class="clearfix">
                                <div class="item-quantity"</div>
                                <form method="POST">
                                     <input type="hidden"
name="pp" value="<?php echo $fetch1['pid']; ?>">
                                <input type="submit" name="submit" value="Add To Cart" class="theme-btn btn-style-one add-to-cart"  class="icon fa fa-shopping-cart">
                                    <input type="submit" name="wishlist"  id="wishlist" value="Add To Wishlist" class="theme-btn btn-style-one add-to-cart"  class="icon fa fa-shopping-cart">
                                    </form>
                            </div>
                            
                        </div>
                    </div>
                          <?php
                                                    }
                                                    ?>
                    
                </div><!--Basic Details-->
            
            
                <!--Product Info Tabs-->
               <!-- <div class="product-info-tabs">
                    
                    <!--Product Tabs-->
                   <!-- <div class="prod-tabs tabs-box" id="product-tabs">
                    	
                        <div class="row clearfix">
                        	<div class="buttons-column col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <!--Tab Btns-->
                               <!-- <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-description" class="tab-btn active-btn">Product description</li>
                                    <li data-tab="#add-information" class="tab-btn">Additional Information</li>
                                    <li data-tab="#prod-reviews" class="tab-btn">Reviews (02)</li>
                                </ul>
                            </div>
                        	
                            <div class="content-column col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                              <!--  <div class="tabs-container tabs-content">
                                    
                                    <!--Tab / Active Tab-->
                                    <!--<div class="tab active-tab" id="prod-description">
                                        <h3>Product Description</h3>
                                        <div class="content">
                                            <p>Never heard the word impossible. This time there's no stopping us. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. We're gonna make our dreams come true. The Love Boat soon will be making an other run. The Love Boat promises something for everyone.</p>
                                            <p>It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. They were four men living all together yet they were all alone. And we'll do it our way yes our way. </p>
                                        </div>
                                    </div>
                                    
                                    <!--Tab-->
                                   <!-- <div class="tab" id="add-information">
                                        <h3>Additional Information</h3>
                                        <div class="content">
                                            <p>Never heard the word impossible. This time there's no stopping us. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. We're gonna make our dreams come true. The Love Boat soon will be making an other run. The Love Boat promises something for everyone.</p>
                                            <p>It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. They were four men living all together yet they were all alone. And we'll do it our way yes our way. </p>
                                        </div>
                                    </div>
                                    
                                    <!--Tab-->
                                   <!-- <div class="tab" id="prod-reviews">
                                        <h3>2 Reviews Found</h3>
                                        
                                        <!--Reviews Container-->
                                        <!--<div class="reviews-container">
                                            
                                            <!--Reviews-->
                                          <!--  <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img src="images/resource/author-thumb-2.jpg" alt=""></figure>
                                                <div class="rev-content">
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span></div>
                                                    <div class="rev-info">Admin – April 03, 2016: </div>
                                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                                </div>
                                            </article>
                                            
                                            <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>
                                                <div class="rev-content">
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                                    <div class="rev-info">Ahsan – April 01, 2016: </div>
                                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                                </div>
                                            </article>
                                            
                                        </div>
                                        
                                        <!--Add Review-->
                                      <!--  <div class="add-review">
                                            <h3>Add a Review</h3>
                                            
                                            <form method="post" action="http://world5.commonsupport.com/2017/warsaw/shop-single.html">
                                                <div class="row clearfix">
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Name *</label>
                                                        <input type="text" name="name" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Email *</label>
                                                        <input type="email" name="email" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Website *</label>
                                                        <input type="text" name="website" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Rating </label>
                                                        <div class="rating">
                                                            <a href="#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <label>Your Review</label>
                                                        <textarea name="review-message"></textarea>
                                                    </div>
                                                    <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" class="theme-btn btn-style-one">Add Review</button>
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
        </section>
            
        <!--Related Products-->
        <section class="related-products">
        	<div class="auto-container">
                <div class="sec-title-one"><h2>Our Products</h2></div>
                
<?php  while($fetch=mysqli_fetch_array($res))
                                                    {
                                                ?>
                <div class="row clearfix">
                    
                    <!--Default Shop Item-->
                    <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href=""><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="noimage" height="100px" width="80px"/></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html"><?php echo $fetch['product_name']?></a></h3>
                              
                            </div>
                            
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    
                                   
                                     
                                <a class="theme-btn add-cart-btn"  href="shop-single.php?m=<?php echo $fetch['product_name'];?>">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                                
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
    
    
    <!--Main Footer / Footer Style One-->
    <footer class="main-footer footer-style-one">
    	
        <!--Footer Upper-->        
        <!--<div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Footer Column-->
                	<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <figure class="footer-logo"><a href="index-2.html"><img src="images/logo-3.png" alt=""></a></figure>
                            
                            <div class="text">
                            	<p>Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoat nacus nisi sed, pulvinar ex.</p>
                                <p>Etiam sit amet libero consea typoe, convallis odio estibulum urna.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                 <!--   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
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
                    <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
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
                    <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
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
            <div class="auto-container">
                    
                <!--Copyright-->
                
                
            </div>
        </div>
        
    </footer>
    
</div>
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

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 16:01:40 GMT -->
</html>