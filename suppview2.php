<?php
 include('dbconnection.php');
include('session.php');


$a=$_GET['b']; 
$sql3="select * from reg where username='$a'";
$exe3=mysqli_query($con,$sql3);
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
    <style>
        
        
        
        
         select
    {
      padding: 10px;
  width: 100%;
  font-size: 17px;
    border-radius: 5px;
        color:gray;
  font-family: Raleway;
  border: 1px solid #aaaaaa;   
    }
    </style>
        
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
                        <li class="nav-item">
                        <a class="nav-link" href="../project1/demo/vertical-default-light/admin.php">HOME</a>
                      </li>
                      
                      
                       <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">CATEGORY<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="category.php">ADD CATEGORY</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="view_category.php">VIEW CATEGORY</a></li>
                          
                          
                        </ul>
                      </li>
                        
                       <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PRODUCTS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addproduct_a.php">ADD PRODUCTS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="view_adminproducts_a.php">VIEW PRODUCTS</a></li>
                          
                          
                        </ul>
                      </li>
                       <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">VIEW FEEDBACK<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./farmerfeedback.php">FARMERS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./suppfeedback.php">SUPPLIERS</a></li>
                            <li class="divider"></li>
                           <li><a class="dropdown-item" href="./userfeedback.php">USERS</a></li>
                          
                          
                        </ul>
                      </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">VIEW COMPLAINT<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./farmercomplaint.php">FARMERS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./suppcomplaint.php">SUPPLIERS</a></li>
                            <li class="divider"></li>
                           <li><a class="dropdown-item" href="./usercomplaint.php">USERS</a></li>
                          
                          
                        </ul>
                      </li>
                      
                     <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">ADD<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./addnews.php">POST</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./addnews1.php">NEWS</a></li>
                            <li class="divider"></li>
                           <li><a class="dropdown-item" href="./success.php">SUCCESSFULL STORIES</a></li>
                           <li class="divider"></li>
                           <li><a class="dropdown-item" href="./agripedia.php">AGRIPEDIA</a></li>
                           <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addevent.php">EVENTS</a></li>
                          
                          
                        </ul>
                      </li>  <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">ADD<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./addnews.php">POST</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./addnews1.php">NEWS</a></li>
                            <li class="divider"></li>
                           <li><a class="dropdown-item" href="./success.php">SUCCESSFULL STORIES</a></li>
                           <li class="divider"></li>
                           <li><a class="dropdown-item" href="./agripedia.php">AGRIPEDIA</a></li>
                           <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addevent.php">EVENTS</a></li>
                          <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addjob.php">AGRICULTURAL JOBS</a></li>
                          <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addlease.php">LAND FOR LEASE</a></li>
                          <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addsubsidy.php">GOVERNMENT SCHEMES</a></li>
                          
                          <li class="divider"></li>
                           <li><a class="dropdown-item" href="./adddirectory.php">DIRECTORY</a></li>
                          <li class="divider"></li>
                           <li><a class="dropdown-item" href="./addplant.php">COMMERCIAL PRODUCTS</a></li>
                          
                        </ul>
                      </li>
                    
                    
                        <li class="nav-item">
                        <a class="nav-link" href="gallery_admin.php">GALLERY</a>
                      </li>
                        
                        <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">VIEW USERS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="farmview.php">FARMERS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="suppview.php">SUPPLIERS</a></li>
                            <li class="divider"></li>
                           <li><a class="dropdown-item" href="userview.php">USERS</a></li>
                          
                          
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
                    <h2>View <span>Suppliers</span></h2>
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
            <!-- <div class="col-lg-6 space-break">
                <div class="contact-form">
                    <form  method="post" action="" >
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                
                                
                                
                                
                                
                                
    
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                                    
                                     <label>Category</label>   
                                        
                                        
 <p><select id="category_id" type="dropdown" class="form-control customize" name="category_name" required/>
     <option value="">Category</option>
                        <?php
    while($fetch=mysqli_fetch_array($me2))
						{
                            ?>
               <option value="<?php echo $fetch['category_name']?>"><?php echo $fetch['category_name']?>  <?php
                        }
?></option>
           
                                         
                                        
     </select>
                                         <p id="s3"></p>
 <script>
                 $("#category_name").on("blur", function() {
                    
    if ( $(this).val()!=0 ) {
       $('#s3').hide();
    } else {
         $('#s3').show();
       $('#s3').text("* Select any option *");
        $("#category_name").focus();
        
    }
});
    </script>      
               
               </p>
                                   <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                               
                           
                               
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <p><input type="submit" class="btn btn-custom" name="submit"  onclick="return validate()" value="Search"></p>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
              </div>
             <!--CONTACT FORM END   
            </div>
        </div>
        
        
        
    </section>-->
    
   
                
                                
                               
        
        
  
    <!--FOOTER START--> 
   

    <footer>
        <div class="container">
            <div class="row">
                 <div class="col-lg-5">
                <div class="footer-col">
                    <form method="POST">
    
				<center><br><br>
				<table class="table ">
					<thead>
                        	
						</thead>
					<tbody>
						
						<tr>
						
                            <?php 
						while($fetch=mysqli_fetch_array($exe3))
						{
						?>
                            
                            <tr>
                        
    
                                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($fetch['photo']);?>" alt="noimage" height="170px" width="200px"/>
                                                     
    
    
    </tr><br><br><br>

<tr>  
              <td> <label>Name</label></td>
       <td><input type="text"  class="form-control" name="name" value="<?php echo $fetch['name']?>"></td></tr>
                

<tr>  
              <td> <label>Age</label></td>
       <td><input type="text"  class="form-control" name="age" value="<?php echo $fetch['age']?>"></td></tr>
                


<tr>  
              <td> <label>House Name</label></td>
       <td><input type="text"  class="form-control" name="house_name" value="<?php echo $fetch['house_name']?>"></td></tr>
                

<tr>  
              <td> <label>Place</label></td>
       <td><input type="text"  class="form-control" name="place" value="<?php echo $fetch['place']?>"></td></tr>
                


<tr>  
              <td> <label>email</label></td>
       <td><input type="text"  class="form-control" name="email" value="<?php echo $fetch['email']?>"></td></tr>
                
<tr><td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="block1.php?m=<?php echo $fetch['reg_id'];?>"><font style="font-size:35px;" ><b>Block</b></font></a></td></tr>
        
							<?php
						}
						?>
					</tbody>
				</table>
                           <?php
						
mysqli_close($con);
						?>
			  
    
               
                
               <!--<div class="col-lg-4 footer-col-right">
                <h4 style="padding:5px;width:25%;font-size:40px;font-family:cooper black;color:black" ></h4>
                <div class="newsletter-box">
                <p></p>
                            
<form method="POST">
    
				<table class="table table-striped">
					<thead>
						<tr><center>
                            <th> </th>
						
                        </tr>

						</thead>
					<tbody>
						
                                                                        

                                    <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_updates.php">Edit</a></td>
                                    
                                    <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_delete.php">Delete</a></td>
                        </tr>
							
						                                  
</table>
</td>
                   
                                                       					
							<td></td><td></td>

						<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
					</tbody>
				</table>
                </div>
                
			</form>
                

                </div>
             
              
              
        </div>
    </footer>-->
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