<?php
include('session.php');
include('dbconnection.php'); 

$user=$_SESSION['sess'];
$sql="select name from reg where username='$user'";
$res=mysqli_query($con,$sql);
$sql1="select status from login where username='$user'";
$res1=mysqli_query($con,$sql1);




mysqli_close($con);
?>





<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:21:24 GMT -->
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
        <script src="js/modernizr-custom.js"></script>
        <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>

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
                      <li class="nav-item dropdown">
                       <!-- <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">HOME<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="index.html">Homepage One</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="2-home.html">Homepage Two</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="3-home.html">Homepage Three</a></li>
                        </ul>-->
                      </li>
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
                       
                     
                      <!--<li class="nav-item dropdown">
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
    
    
    <!--HEADER END-->   
    
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1>Get in Touch <br> <span>CONTACT</span></h1>
                <p><a href="#"></a> &nbsp;  &nbsp; <a href="#"></a></p>
            </div>
        </div>
    </div>
    
    <section>
        <div class="container">
            <div class="row">
              <!--CONTACT INFORMATION START-->
              <div class="col-lg-6">
                <div class="contact-box">
                  <div class="section-title">
                    <h2>Send <span>Complaint</span></h2>
                    <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>
                  </div>
                  
                     
             
                   <form  method="POST" action="complaint_action.php" enctype="multipart/form-data">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                
                                 <?php
                               while($fetch1=mysqli_fetch_array($res1))
                               {
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label hidden>Status</label>
                                        <input id="type" type="hidden" name="status" value="<?php echo $fetch1['status']?>"  class="form-control customize" > 
                                        <p id="p0"></p>
                 <script>
                 $("#tname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,25}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#tname').focus(); 
    }
  
});
    </script> 
                                         
                                        <div class="help-block with-errors"></div>
                                        <label class="errortext" style="display:nne; color:red" id="name_l"></label><br>
                                          
                                    </div>
                                </div>
                                <?php
                        }
        ?>
                                    <?php
                               while($fetch=mysqli_fetch_array($res))
                               {
                                ?>
                               
 
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="tname" type="text" name="name" value="<?php echo $fetch['name']?>"  class="form-control customize" readonly  required/> 
                                        <p id="p0"></p>
                 <script>
                 $("#tname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,25}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  name *"); 
         $('#tname').focus(); 
    }
  
});
    </script> 
                                         
                                        <div class="help-block with-errors"></div>
                                        <label class="errortext" style="display:nne; color:red" id="name_l"></label><br>
                                          
                                    </div>
                                </div>
                                 <?php
                        }
        ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date of Posting</label>
                                        <input id="date2" type="date" name="date2"  class="form-control customize"  onblur="return checkDOB()"   required/>
                                        <tr><td></td><td>
 <p id="p4"></p>
  <script type="text/javascript">
    function checkDOB() {
        var dateString = document.getElementById('date2').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if (myDate>today) { 
            $('#p4').hide();
        }
       else{
           
            $('#p4').show();
            $('#p4').text("* Invalid date. Choose another date *");
        $("#date2").focus();
}
    }
</script>
        </td>
</tr>
                
                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Please select your complaint category</label>
                                        
 <p><select id="category" type="dropdown"  class="form-control customize" name="category" required>
                    <option value="">--category--</option> 
                      <option value="Personnel complaint">Personnel complaint</option>  
     <option value="Product specific complaint">Product specific complaint</option>  
     <option value="Wait-Times complaint">Wait-Times complaint</option>  

                    


                    


                    

                     
                     </select>
                               
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                     
                                <div class="col-md-12">
                                    
                                    <div class="form-group">
                                        <label>Your Complaint</label>  
                                        <textarea id="complaint" name="complaint" class="form-control customize"  rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <p id="p1"></p>
                 <script>
                 $("#complaint").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,90}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid value*");
        $("#complaint").focus();
        
    }
});
    </script>   
                                         
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          
                               
                        

                                     
                               
                               
                               
                            <div class="row">
                                <div class="col-md-12">
                                    <p><input type="submit" name="submit" class="btn btn-custom" value="Send "></p>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
              </div>
              <!--CONTACT INFORMATION END-->
                
              <!--CONTACT FORM START-->  
        
        
    </section>
    
    <!--FOOTER START--> 
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="footer-col">
                    <a href="">
                        <figure class="footer-logo"><img src="img/master/logo-2.png" alt=""></figure>
                    </a>
                    <p>Experience the real taste</p>
                    
                </div>
              </div>
              <div class="col-lg-3 footer-center-col">
                <h4>FIND US</h4> 
                <div class="location">
                    <p>Adddres:  Panchayat building,kadakkarapally,Alapuzha</p>
                    <p>Phone: + 9446091481</p>
                    <p>Email: ad@gmail.COM</p>
                    
                </div>
              </div>
             <div class="col-lg-4 footer-col-right">
                <h4>NEWSLETTER</h4>
                <div class="newsletter-box">
                <p>Suscribe to our newsletter and get the lastest scoop right to your inbox!</p>
                 <form  action="#" method="post" name="sign-up">
                    <input type="email" class="input" id="email" name="email" placeholder="Your email address" required>
                    <input type="submit" class="button" id="submit" value="SIGN UP">
                  </form>           
                </div>
                <p class="cursive">Your email is safe with us, we don't spam.</p>
              </div>
            </div>  
        </div>
    </footer>
    <!--FOOTER START--> 

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
    

<!-- Mirrored from quickdevs.com/templates/agrom/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 20:21:24 GMT -->
</html>