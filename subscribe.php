<?php
include('session.php');
include('dbconnection.php');
$user=$_SESSION['sess'];
$sql="select * from reg where username='$user'";
$res=mysqli_query($con,$sql);
$uid=$_GET['b'];
$sq3="select * from place where status='0'";//select active list of country
$place=mysqli_query($con,$sq3);
$ee="select * from magazine where magazine='$uid' ";
$exe9=mysqli_query($con,$ee);
if(isset($_POST['submit']))
{

  $a=$_POST['name'];
    $b=$_POST['house_name'];
    $c=$_POST['phone'];
    $d=$_POST['magazine'];
    $e=$_POST['unitcost'];
    $f=$_POST['months'];
    $g=$_POST['tprice'];







$sql5="INSERT INTO `agri3`.`payment` (`id`,`reg_id`,`name`,`house_name`, `phone`,`magazine`,`unitcost`,`months`,`tprice`,`status` ) VALUES (NULL,'$user', '$a', '$b','$c','$d','$e','$f','$g','unpaid');";
$exe5=mysqli_query($con,$sql5);
        $query = array(
                  'b'=>$g,
                    'c' => $uid,
                
                    
                               );
                $query = http_build_query($query);
                  
    header("location:payment.php?".$query);
}
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
                       
                    </div>
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
                    <h2>Subscription<span></span>  Details</h2>
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
                    <form  method="post" action="PaytmKit/pgRedirect.php"  >
                        <div class="messages"></div>
                        <div class="controls">
                            
                            <div class="row">
                                <?php
                               while($fetch=mysqli_fetch_array($res))
                               {
                                ?>
                                 

 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input id="tname" type="text" name="name"  value="<?php echo $fetch['name']?>" class="form-control customize"  readonly  required/> 
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
                                   
                                    
                                        
                                          
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>House Name</label>
                                        <input id="hname" type="text" name="house_name" value="<?php echo $fetch['house_name']?>" class="form-control customize" readonly  required="required" data-error="required" required/>
                                        <p id="p1"></p>
                 <script>
                 $("#hname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* please enter a valid value*");
        $("#hname").focus();
        
    }
});
    </script>   
                                         
                                            
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                             
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone No</label>
                                        <input id="phone" type="number" name="phone" value="<?php echo $fetch['phone']?>"  class="form-control customize" onchange="Validatep()"; readonly  required/>
                                        
<label class="errormob" style="display:none; color:black" id="mobile_1"></label>
                                              <script>
                                              function Validatep()
                                              {
                                                  var val = document.getElementById('phone').value;
                                                //  var user_phn =/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321)\d{10}$/ ;

                                                  if (!val.match(/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|0000000000|1111111111|22222222222|3333333333|4444444444|5555555555|6666666666|7777777777|8888888888|9999999999|1000000000|2000000000|3000000000|40000000000|5000000000|6000000000|6777777777|7666666666|6888888888|6999999999|7888888888|7999999999|8666666666|8777777777|8999999999|9666666666|9777777777|9888888888|7000000000|8000000000|9000000000)\d{10}$/))
                                                  {
                                                  $("#mobile_1").html('Invalid Phone number..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('phone').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>  
                                        <div class="help-block with-errors"></div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="email" type="email" name="email" class="form-control customize" value="<?php echo $fetch['email']?>"  required="required"  readonly data-error="Valid email is required."   required/>
                                        <?php
                                }
                                ?>
                                
                   <p id="p8"></p>
       <script>
                 $("#email").on("blur", function() {
    if ( $(this).val().match('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$') ) {
       $('#p8').hide();
    } else {
         $('#p8').show();
       $('#p8').text("*  Please enter valid email  *");
        $("#email").focus();
        
    }
});
    </script> 
                                        <div class="help-block with-errors"></div>
                                        
                                               
                                                 
                                    </div>
                                </div>
                               <?php
                               while($fetch1=mysqli_fetch_array($exe9))
                               {
                                ?>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Magazine Name</label>   
                                         <input id="magazine" type="varchar" name="magazine" value="<?php echo $fetch1['magazine']?>"   class="form-control customize" required/>
                                        <p id="p2"></p>
                 <script>
                 $("#magazine").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,30}$') ) {
       $('#p2').hide();
    } else {
         $('#p2').show();
       $('#p2').text("* please enter a valid name *");
        $("#magazine").focus();
        
    }
});
    </script>   
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Unitcost</label>
                                        <input id="unitcost" type="number"  value="<?php echo $fetch1['unitcost']?>" name="unitcost"  onKeyUp="multiply()"  class="form-control customize"  required/>
                                          
                                          <p id="p55"></p>
                 <script>
                 $("#unitcost").on("blur", function() {
                    
    if ( $(this).val() >= 5 && $(this).val() <= 500 ) {
       $('#p55').hide();
    } else {
         $('#p55').show();
       $('#p55').text("* enter a valid value *");
        $("#unitcost").focus();
        
    }
});
    </script>  
                                        
                                        
                                        
                                       
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                 <?php
                                }
                                ?>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Months</label>
                                        <input id="months" type="varchar" name="months"  onKeyUp="multiply()"  class="form-control customize" required/>
                                           <p id="p1"></p>
                 <script>
                 $("#months").on("blur", function() {
                    
    if ( $(this).val() >= 1 && $(this).val() <= 1000 ) {
       $('#p1').hide();
    } else {
         $('#p1').show();
       $('#p1').text("* enter a valid value *");
        $("#months").focus();
        
    }
});
    </script>  
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Total Price</label>
                                        <input id="tprice" type="number" name="tprice" class="form-control customize"  required="required" data-error=" required" required/>
                                        <p id="p10"></p>
                 <script>
                     function multiply() {
  a = Number(document.getElementById('months').value);
  b = Number(document.getElementById('unitcost').value);
  c = a * b;

  document.getElementById('tprice').value = c;
}
                 $("#tprice").on("blur", function() {
    if ( $(this).val().match('^[-+]?[0-9]+\.[0-9]+$') ) {
       $('#p10').hide();
    } else {
         $('#p10').show();
       $('#p10').text("* please enter a valid price *"); 
         $('#tprice').focus(); 
    }
  
});
    </script> 
                                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                               
                            
                            
                  
                               
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>License</label>
                                        <input id="license" type="file" name="license"  accept="image/*" onchange="validateImage()" class="form-control customize" required/>
                                         <script type="text/javascript">
function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("license").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("license").value = '';
        return false;
    }
    return true;
}
</script>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input id="uname" type="text" name="username" class="form-control customize"  required="required" data-error=" required" required/>
                                      <p id="p6"></p>
       <script>
                 $("#uname").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z0-9]{6,10}$') ) {
       $('#p6').hide();
        <?php
         while($fetch4=mysqli_fetch_array($me8))
						{
                            $user=$fetch4['username'];
                        ?>
        if( $(this).val().match('<?php echo $user;?>') )
            {
             $('#p6').show();
       $('#p6').text("*  username must be unique.  *");
        $("#uname").focus();   
            }
        <?php
                        }
        ?>
    } else {
         $('#p6').show();
       $('#p6').text("*  Please enter between 6 and 8 characters  *");
        $("#uname").focus();
        
    }
});
    </script>  
      
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="myInput" type="password" name="password" class="form-control customize"  required="required" data-error=" required" required/>
                                        <p id="p7"></p>
       <script>
                 $("#myInput").on("blur", function() {
    if ( $(this).val().match('(?=.*\d)(?=.*[a-zA-z])(?=.*[a-zA-Z]).{8,}') ) {
       $('#p7').hide();
    } else {
         $('#p7').show();
       $('#p7').text("*Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters*");
        $("#myInput").focus();
        
    }
});
    </script> 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> ConfirmPassword</label>
                                        <input id="confirmpassword" type="password" name="confirmpassword" class="form-control customize"  onblur="return Validate()" required="required" data-error=" required" required/>
                                        
                                        <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("confirmpassword").value;
        var confirmPassword = document.getElementById("myInput").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            myInput.focus();
        }
        return true;
    }
</script>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            </div>
                            
                                    <div class="col-md-12">
                                            <div class="form-group">
                                            <div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required/>
							<label class="label-checkbox100" for="ckb1">
								I accept the terms and Conditions
							</label>
						</div>
                                            </div>
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            </div>
                                </div>-->
                            <div class="row">
                                <div class="col-md-12">
                                    <p><input type="submit" class="btn btn-custom" name="submit"  onclick="return validate()" value="Make Payment"></p>
                                    
                                    
                                    <br>
                                    
		

                                </div>
                            </div>
                                
					<input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" hidden>
					
					<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden>
				
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden>
				<input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>
					<input title="TXN_AMOUNT" tabindex="10"
						type="text" id="tprice" name="TXN_AMOUNT"
						value="1" hidden>
                        <input value="CheckOut" type="submit"	onclick="">
				
                        </div>
                    </form>  
                </div>
              </div>
             <!--CONTACT FORM END-->    
            </div>
        </div>
        
        
        
    </section>
    
    <!--FOOTER START--> 
   <!-- <footer>
        <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="footer-col">
                    <a href="index-2.html">
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