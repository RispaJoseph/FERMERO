




<?php

include('../dbconnection.php');
include('session.php');
$user=$_SESSION['sess'];

  if(isset($_POST['submit']))
{
    header("location:../cart2.php");
           
}

?>




<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/2017/warsaw/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2019 16:01:40 GMT -->
<head>
<meta charset="utf-8">
<title>Warsaw : Organic Fruits &amp; Vegetables  HTML Template | Shop</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
    
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
                                  <!--  <li class="dropdown"><a href="#">Home</a>
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
                                    </li>-->
                                    <li><a href="../home_supplier.php">home</a></li>
                                  
                                     <li class="current dropdown"><a href="#">Products</a>
                                    	<ul>
                                            <li><a href="../addseed_a.php">Add product</a></li>
                                           
                                            <li><a href="../viewseed.php">View product</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li class="current dropdown"><a href="#">Purchase</a>
                                    	<ul>
                                            <li><a href="shop2.php">Our Shop</a></li>
                                           
                                            <li><a href="shopping-cart3.php">Shopping Cart</a></li>
                                             <li><a href="wishlist.php">Wish List</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li><a href="../gallery_supplier.php">Gallery</a></li>
                                   
                                     <li class="dropdown"><a href="shop1.php">Add</a>
                                    	<ul>
                                            <li><a href="../feedback2.php">Feedback</a></li>
                                           
                                            <li><a href="../complaint2.php">Complaint</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="#">Settings</a>
                                    	<ul>
                                            <li><a href="../editprofilesupplier.php">Profile</a></li>
                                           
                                            <li><a href="../changepasssupp.php">Change password</a></li>
                                            
                                        </ul>
                                    </li>
                                 
                                    <li><a href="../logout.php">Logout</a></li>
                                    <li>
                                    <a class="theme-btn add-cart-btn"  href="shopping-cart3.php"> <span class="fa fa-shopping-cart"></span></a></li>
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
                            <li><a href="shop1.php">Our Shop</a></li>
                            <li><a href="shopping-cart.php">Shopping Cart</a></li>
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
            <h1>Shopping Cart</h1>
        </div>
    </section>
    
    
    <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->

            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th class="prod-column">PRODUCT</th>
                                <th>&nbsp;</th>
                                <th class="price">Price</th>
                                <th>QUANTITY</th>
                                <th>Total</th>
                                <th><span class="fa fa-trash-o"></span></th>
                                

                            </tr>
                        </thead>
                        
                        
                    <?php
                                // -----------assigning counter and increment on each iteration--------
                        $c=0;
//                       
                        $sql="select * from cart2 where username='".$user."'";
$exe=mysqli_query($con,$sql);

                        $rowc=mysqli_num_rows($exe);
                        while($fetch1=mysqli_fetch_array($exe)){
                            $p=$fetch1['pid'];
                            $c++;
                            $sql1="select * from addproduct  where pid=".$fetch1['pid'];
                            $res1=mysqli_query($con,$sql1)or die(mysqli_error($con));
                            $fetch=mysqli_fetch_array($res1);
                            
                    ?> 
                        <tbody>
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb">
                                            <a href="#"><img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['image']);?>" alt="noimage" height="100px" width="80px"/></a>
                                        </figure>
                                        <div class="prod-title"><?php echo $fetch['product_name']?></div>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                    </div>
                                </td>
                                <form method="post">
                                    <?php 
                                        echo"<td class='price'><input type='number' name='unitcost$c' id='unitcost$c' value='".$fetch['unitcost'].".00' class='prod_qty' /></td>";
                                        echo"<td><input type='number' name='$c' id='$c' value='0' class='prod_qty' onKeyUp='lookup(this);'/></td>";
                                                                 
       
                                        

                                        echo"<td class='price'><input type='number' id='tprice$c' name='tprice$c' class='price'/>"
                                        ."<p id='p10'></p></td>";
                                    ?>
                                </form>
                                <td><a href="remove_cart.php?b=<?php echo $fetch['pid'];?>">
                                    <font color="red"><b style="font-size:14px;">Remove</b></font></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                    <!-- ------------function to count total--------- -->
                  <script>
                    function lookup(arg){
                        id =arg.getAttribute('id');
                        a = Number(document.getElementById(id).value);
                        b = Number(document.getElementById('unitcost'+id).value);
                        c=a*b;
                        document.getElementById('tprice'+id).value = c;
                        tcost();
                        function  tcost(){
                          var k=Number("<?php echo $rowc; ?>");
                          var total=0;
                          for(i=1;i<k+1;i++){
                            price=Number(document.getElementById('tprice'+i).value);
                            total=total+price;
                            }
                        document.getElementById('totalcost').value=total
                        document.getElementById('totalcost1').value=total
                                  // document.getElementById('totalcost').value=totalc;
                        }
                    }
    </script>
                 
            
                </div>
                  
                            

              <!--  <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Your Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn btn-style-one">Apply</button>
                            </div>
                        </div>
                    </div>-->

                    <div class="pull-right">
                        <form method="POST">
                        <input type="submit"  name="submit" value="Buy Now" class="theme-btn btn-style-one">
                        </form>
                    </div>

                </div>

                <div class="row clearfix">

                    <div class="column pull-right col-md-4 col-sm-8 col-xs-12">
                        <div class="normal-title"><h3>Cart Totals</h3></div>

                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col">Sub Total</span><!--<span class="col"><script>document.write(total);</script></span>-->
                                <input type="text" id="totalcost" name="totalcost">
                            </li>
                            <li class="clearfix total"><span class="col">Total</span><span class="col"> <input type="text" id="totalcost1" name="totalcost1"></span></li>
                        </ul>

                        
                    </div>

                </div>


            </div>

        </div>
    </section>
    
    
    <!--Main Footer / Footer Style One-->
   <!-- <footer class="main-footer footer-style-one">
    	
        <!--Footer Upper-->        
       <!-- <div class="footer-upper">
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
                  <!--  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
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


</html>
