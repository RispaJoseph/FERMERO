<?php
include('dbconnection.php');
session_start();
if(!isset($_SESSION['sess']))
{
header("location:home.php");
} 
$r=$_SESSION['sess'];


if(isset($_POST['submit']))
{

$b=$_POST['category_name'];
$c=$_POST['product_name'];
   
$d=$_POST['des'];
$z=$_POST['add_date'];
    $zz=$_POST['expiry_date'];
$e=$_POST['quantity'];
$f=$_POST['unitcost'];
$g=$_POST['tprice'];


$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{

$str="INSERT INTO `agri3`.`addproduct` (`pid`, `category_name`, `product_name`,`image`, `des`,`add_date`,`expiry_date` ,`quantity`, `unitcost`, `tprice`, `status`,`username`) VALUES (NULL, '$b', '$c', '$image','$d', '$zz','$z','$e', '$f', '$g', '1','$r');";

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
        echo("location.href='viewproduct_f.php'");
        ?>
    </script>
    </body>
</html>