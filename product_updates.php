
<?php
include('dbconnection.php');
include('session.php');



$uid=$_GET['m'];



if(isset($_POST['submit']))
{

$b=$_POST['category_name'];
$c=$_POST['product_name'];
$d=$_POST['des'];
$e=$_POST['quantity'];
$f=$_POST['unitcost'];
$g=$_POST['tprice'];




$sql1="update addproduct set  product_name='$c', des='$d',quantity='$e',unitcost='$f',tprice='$g' where pid='$uid'";
$exe1=mysqli_query($con,$sql1);
    header("location:addproduct_f.php");
}
$sql="select * from addproduct where pid='$uid'";
$exe=mysqli_query($con,$sql);




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
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



		<!-- ==============================================
		FAVICON
		=============================================== -->  
        <link rel="shortcut icon" href="img/master/favicon.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


             
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
                  <a class="navbar-brand" href="index-2.html"><div class="logo-brand"><img src="img/master/logo.png" alt=""></div></a>
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
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">MACHINES<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addmachine.php">ADD MACHINES</a></li>
                            <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="viewmachine.php">VIEW MACHINES</a></li>
                          
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="rentmachine.php">RENT MACHINES</a></li>
                          
                          
                        </ul>
                      </li>
                      
                      
                      
                      
                         <li class="nav-item">
                        <a class="nav-link" href="">PURCHASE</a>
                      </li>
                      
                      
                         <li class="nav-item">
                        <a class="nav-link" href="gallery_farmer.php">GALLERY</a>
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
    
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1> <br> <span></span></h1>
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
                    <h2>Edit<span>  Products </span></h2>
                    <!--<p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>-->
                  </div>
                  <!--<div class="span-contact">
                    <div class="contact-icon"><i class="fas fa-phone"></i></div> 
                    <p>&nbsp;9446091481</p>
                  </div>
                  <div class="span-contact">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div> 
                    <p>&nbsp;ad@gmail.com</p>
                  </div>
                  <div class="span-contact">
                    <div class="contact-icon"><i class="fas fa-map"></i></div> 
                    <p>&nbsp;Panchayat building,kadakkarapally,Alapuzha</p>
                  </div>-->
                </div>
              </div>
              <!--CONTACT INFORMATION END-->
                
                
                
                <!--CONTACT FORM START-->        
              <div class="col-lg-6 space-break">
                <div class="contact-form">
                  <form method="POST">
<br>
<br>
<br>
<br>
<center><h1 style="color:rgb(181,230,29);"><i><b> </b></i></h1></center>

		<div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
				<table class="table ">
					<thead>
                        	
						</thead>
					<tbody>
						
						<tr>
						
                            <?php 
						while($new2=mysqli_fetch_array($exe))
						{
						?>

          <tr>  
              <td> <label>Product Name</label></td>
       <td><input type="text"  class="form-control" name="product_name" value="<?php echo $new2['product_name']?>"></td></tr>
                            
         <tr> 
             <td> <label>Description</label></td><td><input type="text"  class="form-control" name="des" value="<?php echo $new2['des']?>"></td>
                            <tr><td> <label>Quantity</label></td><td><input type="text"  class="form-control" name="quantity" value="<?php echo $new2['quantity']?>"></td></tr>
                            <tr><td> <label>Unit Cost</label></td><td><input type="text"  class="form-control" name="unitcost" value="<?php echo $new2['unitcost']?>"></td></tr>
                          <tr> <td> <label>Total Price</label></td> <td> <input type="text"  class="form-control" name="tprice" value="<?php echo $new2['tprice']?>"></td></tr>
                            
                        
                            
                        
                            
                        
                            
                                      
                        
                        
                                         
                        
                        </tr> 
							 
							<th></th>
		<td><input type="submit" name="submit"  class="btn btn-custom" value="Update"></td></tr>
							
							<?php
						}
						?>
					</tbody>
				</table>
                            </div>
                      </div>
			</form>  
    
                               
                </div>
              </div>
             <!--CONTACT FORM END-->    
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              

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