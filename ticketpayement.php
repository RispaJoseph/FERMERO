<?php
 
include('dbconnection.php');
include('session.php'); 


 


$g=$_GET['b'];
$c=$_GET['c'];



if(isset($_POST['submit'])){
    
    $card=$_POST['num'];
    $amount=$_POST['amount'];
    $exp=$_POST['mm']."/".$_POST['yy'];
    $cvv=$_POST['cvv'];
    $holder=strtoupper($_POST['name']);
    
    $check=mysqli_query($con,"select * from bank_info where (cardno='$card' and cvv='$cvv') and (exp='$exp' and status='0') and name='$holder'");
    $no=mysqli_num_rows($check);
    $bank=mysqli_fetch_array($check);
    if($no!=0){ 
     
    $mail=$bank['mail'];
            $to = $mail;
        $from="ADMIN";
        $subject = "Your Recovered Password";
        $password = rand();
        $password_hash = md5($password);
        $message = "Please use this password to login " . $password;
        $headers = "From:".$from;     
      if(mail($to, $subject, $message, $headers)){
           $sql5=mysqli_query($con,"update bank_info set otp='$password' where cardno='$card'"); 
                     $query = array(
                  'b'=>$c,
                    'c' => $bank['bank_id'],
                  'd' => $g,
                    
                               );
                $query = http_build_query($query);
                    header("location:otp2.php?".$query);
            }
        else{ ?>
             <div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>   Check internet connectivity.</center>
  </div>
      <?php  }

   }else{ ?>
         <div id=div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>   Invalid card entry.</center>
  </div>
    <?php  }
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
                          <li><a class="dropdown-item" href="./warsaw/directory.php">DIRECTORY</a></li>
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
                    <h2>Payment<span>Details</span></h2>
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
                    <form  method="post"  enctype="multipart/form-data" >
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                
                                
                                
                                
                                
                                
    
                                
                                
                                      
  
                                    
               
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>  <label>NAME ON CARD</label></label>   
                                         
                                           <input type="text" name="name" id="name" class="form-control customize" placeholder="Card Owner Name" required />
                                    <script>
                                    $("#name").on("blur", function() {
                                    if ( $(this).val() !=0 ) {
                                    if($(this).val().match('^[a-zA-Z][a-zA-Z]{1,20}')){
                                    $('#e').hide();
                                    }else
                                    {
                                    $('#e').show();
                                    $('#e').css('background-color', '#FFFFDF');
                                    $('#e').text("* invalid name *");
                                    $("#name").val('');       
                                    }
                                    } else {
                                    $('#e').show();
                                    $('#e').text("* Please fill the field *");
                                    }
                                    });
                                    </script> 
                                    
                                        <div class="help-block with-errors"></div>
                                            <center><p id="e" style="color:red"></p></center>
                                    </div>
                                </div>

           
                                         
                                        
     
                                        
                          
                            </div>
                               
                                
                                       
                                
                                
                                
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Card Number</label>
                                   <input type="number" maxlength="16" class="form-control customize" id="card" onblur="check()" placeholder=" Card Number" name="num" required/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                        
                                        <script>
                                        $("#card").on("blur", function() {

                                        if ( $(this).val() !=0 ) {
                                            if($(this).val().match('^5[1-5][0-9]{14}$')){
                                                $('#c').text("MASTERCARD");
                                                $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else if($(this).val().match('^4[0-9]{12}(?:[0-9]{3})?$')){
                                                $('#c').text("VISA");
                                                    $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else if($(this).val().match('^3[47][0-9]{13}$')){
                                                $('#c').text("EXPRESS");
                                                    $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else
                                               {
                                                      $('#c').show();
                                                     $('#c').css('background-color', '#FFFFDF');
                                                 $('#c').css('color', 'red');
                                        $('#c').text("* invalid card number *");
                                             $("#card").val('');       
                                   
                                               }
                                       
                                               } else {
                                        $('#c').show();
                                        $('#c').text("* Please fill the field *");
                                   

                                        }
                                        
                                        });
                                        </script> 	
                                        
                                        
                                        
                                       
                                        <div class="help-block with-errors"></div>
                                        <center><p id="c" style="color:red"></p></center>
                                    </div>
                                </div>
                            
                            
                             <div class="col-md-12">
                                    <div class="form-group">
                            	<label>CVV</label>
															
                                              <input type="password" name="cvv" id="cvv" class="form-control customize" placeholder="***" required>
                                      
                                        <script>
                                        $("#cvv").on("blur", function() {

                                        if ( $(this).val() !=0 ) {
                                            if($(this).val().match('^[0-9]{3,3}$')){
                                              $('#d').hide();
                                               }else
                                               {
                                                $('#d').show();
                                                   $('#d').css('background-color', '#FFFFDF');
                                        $('#d').text("* invalid cvv *");
                                             $("#cvv").val('');       
                                               }
                                               } else {
                                        $('#d').show();
                                        $('#d').text("* Please fill the field *");
                                          }
                                        
                                        });
                                        </script> 
                                                      
                                        <div class="help-block with-errors"></div>
                                         <center><p id="d" style="color:red"></p></center>
                               
                                    </div>
                                </div>
                            
                            
                            
                            
                             <div class="col-md-12">
                                    <div class="form-group">
                            
                            
                            <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                   <br><label><span class="hidden-xs"><select name="mm"class="form-control customize" required>
                                    <option value="">mm</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                        </select></span></label> 
                                   <label><span class="hidden-xs"><select name="yy" class="form-control customize" required>
                                    <option>yy</option>
                                    <?php   
                                       $year = date("Y");
                                       $year2=$year+20;
                                       for($i=1990;$i<=$year2;$i++){
                                            echo '<option value="'.$i.'"';
                                            if( $i ==  $year ) {
                                            echo ' selected="selected"';
                                            }
                                            echo ' >'.$i.'</option>';
                                      
                                       }
                                       ?>
    
                                        </select></span></label> 
                    <div class="help-block with-errors"></div>
                                   
                               
                                 </div>
                            </div>
                            
                                 
                                 <div class="col-md-12">
                                     
                                 
                                    <div class="form-group">
                                 
                                 
									 <label for="aAmount" class="control-label">Amount</label>
			            <input type="text" class="form-control customize"  value="<?php echo $g; ?>"  id="amount"   name="amount" placeholder=""  onchange=""; readonly>
                                 
                    <div class="help-block with-errors"></div>
                                    </div>
                                     
                                </div>
                                 
                            <div class="row">
                                <div class="col-md-12">
                                    <p> <input type="submit" class="btn btn-custom" name="submit"  onclick="return validate()" value="Pay Now"></p>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
              </div>
             <!--CONTACT FORM END-->    
            </div>
        </div>
        
        
        
    </section>
    
   
                
                                
                               
        
        
  
    <!--FOOTER START--> 
   

    <!--<footer>
        <div class="container">
            <div class="row">
                 <div class="col-lg-5">
                <div class="footer-col">
                    <form method="POST">
    
				<table class="table table-striped" align="center">
					<thead>
						<tr>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>CATEGORY</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>PRODUCT</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>DESCRIPTION</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>QUANTITY</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>UNITCOST</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>TOTALPRICE</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>EDIT</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>DISABLE</i></h5></th>
                            
						 
                        </tr>

						</thead>
					<tbody>
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						        <tr>
                                    
							<td><?php echo $fetch['category_name']?></td>
                                    <td><?php echo $fetch['product_name']?></td>
                                    <td><?php echo $fetch['des']?></td>
                                    <td><?php echo $fetch['quantity']?></td>
                                    <td><?php echo $fetch['unitcost']?></td>
                                    <td><?php echo $fetch['tprice']?></td>
                                                                        
<td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_updates.php?m=<?php echo $fetch['pid'];?>"><font ><b>edit</b></font></a></td>
                                                                          
<td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_deletes.php?m=<?php echo $fetch['pid'];?>"><font ><b>Disable</b></font></a></td>                                  
                                   
                        </tr>
							
							<?php }?>                                    
</table>
</td>
                   
                                                       					
							<td></td><td></td>

						<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                					<?php
						
mysqli_close($con);
						?>
					</tbody>
				</table>
                </div>
                
			</form>
                    
                </div>
              </div>
                
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
						 <?php
						while($fetch=mysqli_fetch_array($exe))
						{
							?>
						        <tr>
							<td><?php echo $fetch['category_name']?></td>
                                    <td><?php echo $fetch['product_name']?></td>
                                    <td><?php echo $fetch['des']?></td>
                                    <td><?php echo $fetch['quantity']?></td>
                                    <td><?php echo $fetch['unitcost']?></td>
                                    <td><?php echo $fetch['tprice']?></td>
                                                                        

                                    <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_updates.php">Edit</a></td>
                                    
                                    <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange" href="product_delete.php">Delete</a></td>
                        </tr>
							
							<?php }?>                                    
</table>
</td>
                   
                                                       					
							<td></td><td></td>

						<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                					<?php
						
mysqli_close($con);
						?>
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