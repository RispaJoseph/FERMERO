<?php
include('dbconnection.php');  


session_start();

if(isset($_POST['submit']))
{
$a=$_POST['username'];
$new=trim($a);
$v=$_POST['password'];
 
    $sql="select * from login where username='$new' and password='$v'";
    $exe=mysqli_query($con,$sql);
    $count=mysqli_num_rows($exe);
    if($count>0)
    {
        $fetch=mysqli_fetch_array($exe);
    $utype=$fetch['user_type'];
    $status=$fetch['status'];
    $username=$fetch['username'];
     $password=$fetch['password'];
  
    }
     
    
   
    if($count>0 && $utype==0 && $status='3' )
      {
        $_SESSION['sess']=$fetch['username'];
        header("location:home_farmer.php");
       }
    else if($count>0 && $utype==1 && $status='1')
    {
        $_SESSION['sess']=$fetch['username'];
        
        header("location:home_supplier.php");
       
    }
    else if($count>0 && $utype==2 && $status='2' )
    {
        $_SESSION['sess']=$fetch['username'];
        header("location:./warsaw/home_user.php");  
    }
      else if($count>0 && $utype==3 )
    {
        $_SESSION['sess']=$fetch['username'];
        header("location:./demo/vertical-default-light/admin.php");  
    }
     else
            {
	     echo "<script>";
	      echo "alert('this account is not exist')";
	     echo "</script>";
            }
}
mysqli_close($con);
?>
    
    
    
    
    
    
    
    
    
    
    
    



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		TITLE AND META TAGS
		=============================================== -->
		<title></title>
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
        <link rel="stylesheet" href="css/home-3-styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/css/all.min.css">
        <link rel="stylesheet" href="css/slick.min.css"> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href='css/animation.aos.min.css'>
        <link rel="stylesheet" href="css/animate.min.css">
        <script src="js/modernizr-custom.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="login.php">LOGIN</a>
                      </li>
                       
                       
                       
                       
                       
                      
                        <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">ABOUT US</a>
                      </li>
                       
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.php">CONTACT US</a>
                      </li>
                    </ul>
                  </div>
                </nav>
            </div>
        </div>
        <!--NAVIGATION END-->
    </header> 
	
<!-- <div class="main-slider">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
         <!-- <div class="carousel-item active" style="background-image: url('img/images/slider-bg-5.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Eat Healthy<br><span>stay healthy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
         <!-- <div class="carousel-item" style="background-image: url('img/images/tomato.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Fruit Is <br> <span>natures candy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
        <!--  <div class="carousel-item" style="background-image: url('img/images/hh.jpg')">
            <div class="carousel-caption">
              <h2 class="display-4 animated fadeInLeft">Vegetables Plenty <br><span>body wealthy</span></h2>
              <p class="lead animated fadeInRight">Long established fact that a reader will be distracted by the readable content</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
           <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
    </div>-->
    <div class="sections gallery-background">
        <div class="container">
            <div class="pages-title">
                <h1> <br> <span>LOGIN</span></h1>
                <p><a href="#"></a> &nbsp;  &nbsp; <a href="#"></a></p>
            </div>
        </div>
    </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form  method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" required/ >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="password" name="password"  required/>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required/>
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="forgotpassword.php" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
					<input type="submit" name="submit" class="btn btn-custom" value="login">
				
                    
                    
                    
                    
                    
                    <div>
							<a href="home.php" class="txt3">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 Sign Up
							</a>
						</div>
                    </div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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
</html>