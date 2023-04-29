


<?php

include('dbconnection.php'); 
include('session.php');


$sq3="select * from addplant";
$exe=mysqli_query($con,$sq3);




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
        table
        {
            padding-top: 200px;
            position:absolute;
            top:150px;
            
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
                        </li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="./demo/vertical-default-light/admin.php">HOME</a>
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
                       
                        
                          
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                      </li>
                                   
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
                    <h2>Add<span> Commercial Products</span></h2>
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
                    <form  method="POST" action="plant_action.php" enctype="multipart/form-data">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                
                                       <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        
 <p><select id="category_id" type="dropdown"  class="form-control customize" name="category_name" required>
                    <option value="">--Category--</option> 
                      <option value=" Grow Bags">Grow Bags</option>  
     <option value="Vermi Beds">Vermi Beds</option>
     <option value="Cultivation Beds">Cultivation Beds</option>
     <option value="Seedling Tray">Seedling Tray</option>
      
         <option value="Shade Net">Shade Net</option>
        <option value="Coir Pith Block">Coir Pith Block</option>
       
          

                    


                    


                    

                     
                     </select>
                               
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>             
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>   
                                         <input id="title" type="varchar" name="title"  class="form-control customize" required/>
                                        <p id="p32"></p>
                 <script>
                 $("#title").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z  ]{3,60}$') ) {
       $('#p32').hide();
    } else {
         $('#p32').show();
       $('#p32').text("* please enter a valid title *");
        $("#title").focus();
        
    }
});
    </script>   
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                     
                               
                                
                        <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>   
                                         <input id="image" type="file" name="image" accept="image/*"  class="form-control customize"  onchange="validateImage()" required/>
                                        <script type="text/javascript">
function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("image").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif" ) {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("image").value = '';
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
                                        <label>Description</label>  
                                        <textarea id="des" name="des" class="form-control customize"  ></textarea>
                                        <p id="p0"></p>
                 <script>
                 $("#des").on("blur", function() {
    if ( $(this).val().match('^[a-zA-Z ]{3,500}$') ) {
       $('#p0').hide();
    } else {
         $('#p0').show();
       $('#p0').text("* please enter a valid  description *"); 
         $('#des').focus(); 
    }
  
});
    </script> 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                       
                                     

                    


                    

                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input id="phone" type="varchar" name="phone"   class="form-control customize" onchange="Validatep()"; required/>
                                        
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
                                        <label>UnitCost</label>
                                        <input id="unitcost" type="number" name="unitcost"   class="form-control customize"  required/>
                                          
                                          <p id="p55"></p>
                 <script>
                 $("#unitcost").on("blur", function() {
                    
    if ( $(this).val() >= 1 && $(this).val() <= 50000 ) {
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
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mininum Order Quantity </label>
                                        <input id="quantity" type="number" name="quantity"   class="form-control customize"  required/>
                                          
                                          <p id="p55"></p>
                 <script>
                 $("#quantity").on("blur", function() {
                    
    if ( $(this).val() >= 1 && $(this).val() <= 50 ) {
       $('#p55').hide();
    } else {
         $('#p55').show();
       $('#p55').text("* enter a valid value *");
        $("#quantity").focus();
        
    }
});
    </script>  
                                        
                                        
                                        
                                       
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><input type="submit" class="btn btn-custom" name="submit" value="Add Details"></p>
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
   <!-- <footer>
        <div class="container">
            <div class="row">
                 <div class="col-lg-5">
                <table class="table table-striped">
					<thead>
						<tr>
											
<th  style="color:rgb(181,230,29);"   ><h5><i>CATEGORY</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>PRODUCT</i></h5></th>
                            <th  style="color:rgb(181,230,29);"   ><h5><i>DESCRIPTION</i></h5></th>
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
                                     <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange;"  href="addproadmin_updates.php?m=<?php echo $fetch['pid'];?>"><font ><b>edit</b></font></a></td>
                                     <td><a  style="padding:5px;width:25%;font-size:20px;font-family:cooper black;color:orange;"  href="addproadmin_deletes.php?m=<?php echo $fetch['pid'];?>"><font ><b>disable</b></font></a></td>
                                     
                                   
							<?php }?> 
                                    
                                    
                                     </tr>	
                                    


                    
                                                       					
							<td></td><td></td>

					
                					<?php
						
mysqli_close($con);
						?>
					</tbody>
				</table>
                </div>
                
			
              </div>
                
            
                            

    
				
                    
                
			
                

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