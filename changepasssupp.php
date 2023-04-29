<?php
include('dbconnection.php'); 
include('session.php');
$user=$_SESSION['sess'];
$qsr="select * from login where username='$user'";
$mov=mysqli_query($con,$qsr);
$sql="select * from reg where username='$user'";
$res=mysqli_query($con,$sql);
if(isset($_POST['submit']))
{
    $a=$_POST['memname'];
    $mql="update login set password='$a' where username='$user'";
    if(mysqli_query($con,$mql))
    {
          echo "<script>";echo "alert('Password updated!')";echo"</script>";
         echo "<script>";
        echo("location.href='changepasssupp.php'");
        echo"</script>";
    }
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
                     
                     
                      </li>
                        </li>
                         <li class="nav-item">
                        <a class="nav-link" href="home_supplier.php">HOME</a>
                      </li>
                           <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PRODUCTS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="addseed_a.php">ADD PRODUCTS</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="viewseed.php">VIEW PRODUCTS</a></li>
                          
                          
                        </ul>
                      </li>
                      

                      <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">PURCHASE<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="./warsaw/shop2.php">OUR SHOP</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/shopping-cart3.php">SHOPPING CART</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="./warsaw/wishlist.php">WISH LIST</a></li>
                          
                          
                        </ul>
                      </li>
                      
                      
                      
                      
                        
                      
                      
                         <li class="nav-item">
                        <a class="nav-link" href="gallery_supplier.php">GALLERY</a>
                      </li>
                   
       <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">ADD<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="feedback3.php">FEEDBACK</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="complaint3.php">COMPLAINT</a></li>
                          
                          
                        </ul>
                      </li>
                         
                                         <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="home.php" data-toggle="dropdown">SETTINGS<span class="caret-drop"></span></a>
                        <ul class="dropdown-menu">
                          <li class="divider-top"></li>
                          <li><a class="dropdown-item" href="editprofilesupplier.php">PROFILE</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="changepasssupp.php">CHANGE PASSWORD</a></li>
                          
                          
                        </ul>
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
                    <h2>Change<span></span>  Password</h2>
                  </div>
                 
                </div>
              </div>
              <!--CONTACT INFORMATION END-->
                
              <!--CONTACT FORM START-->        
              <div class="col-lg-6 space-break">
                <div class="contact-form">
                    <form  method="post" action=""  >
                        <div class="messages"></div>
                        <div class="controls">
                            <label>Current Password</label>
                             <?php
         while($fe=mysqli_fetch_array($mov))
						{
                            $user=$fe['password'];
                           
                        ?>
                            <input id="name11" type="password" class="form-control customize"  name="memname1" onChange="getCity32(this.value);"  required>
       <p id="p101"></p>
                 <script src="jquery-3.2.1.min.js" type="text/javascript"></script>     
           <script>
function getCity32(val) {
	$.ajax({
	type: "POST",
	url: "getCity32.php",
	data:'state_id='+val,
	success: function(data){
		$("#p101").html(data);
	}
	});
}

</script>   <?php }
                            ?><br><br>
                            <label>New Password</label>
         <input id="name10" type="password" class="form-control customize" name="memname" required>
       <p id="p102"></p>
                 <script>
                 $("#name10").on("blur", function() {
    if ( $(this).val().match('^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})') ) {
       $('#p102').hide();
       
        if($(this).val()==$('#name11').val())
            {
 $('#p102').show();
       $('#p102').text("*  Please choose a new password  *");
        $("#name10").val("");   
            }
        else
            {
                
}
        <?php
                      
        ?>
    }else {
        
       $('#p102').show();
       $('#p102').text("*Must contain at least one number and one uppercase and lowercase letter and special character, and at least 8 or more characters*");
        $("#name10").val("");
        
    }
});
    </script>   
       
       <br><br>
                            <label>Confirm Password</label>
        <input id="mob1" type="password" name="memmobile" class="form-control customize"  onblur="Validate()"  required>
       <p id="p39"></p>
            
            
         <script type="text/javascript">
 function Validate() {
        var password = document.getElementById("name10").value;
        var confirmPassword = document.getElementById("mob1").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
             document.getElementById("mob1").value="";
            memmobile.focus();
        }
        return true;
    }
</script>
       
                            <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required/>
							<label class="label-checkbox100" for="ckb1">
								I accept the terms and Conditions
							</label>
						</div>
                            
       <br> <br> 
     <input type="submit" class="btn btn-custom" name="submit"   value="CHANGE PASSWORD">
           
                          
                        </div>
                    </form>  
                </div>
              </div>
             <!--CONTACT FORM END-->    
            </div>
        </div>
        
        
        
    </section>
    
  
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