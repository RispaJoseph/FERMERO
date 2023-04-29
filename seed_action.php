<?php

include('dbconnection.php');
session_start();
if(!isset($_SESSION['sess']))
{
header("location:home.php");
} 


if(isset($_POST['submit']))
{

$b=$_POST['category_name'];
$c=$_POST['product_name'];
$d=$_POST['des'];
$e=$_POST['quantity'];
$f=$_POST['unitcost'];
$g=$_POST['tprice'];
    $z=$_POST['amount'];
    $r=$_SESSION['sess'];


$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{



$str="INSERT INTO `agri3`.`addprosupp` (`pid`, `category_name`, `product_name`, `image`,`des`, `quantity`, `unitcost`, `tprice`, `status`,`username`,`amount`) VALUES (NULL, '$b', '$c','$image', '$d', '$e', '$f', '$g', '1','$r','$z');";
}

if(mysqli_query($con,$str))
{
     echo "<script>";
	      echo "alert('product successfully added')";
	     echo "</script>";
}
mysqli_close($con);
}
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='viewseed.php'");
        ?>
    </script>
    </body>
</html>