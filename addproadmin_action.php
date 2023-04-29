<?php
include('dbconnection.php'); 
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}
$con=mysqli_connect("localhost","root","","agri3");



if(isset($_POST["submit"]))
{

$b=$_POST['category_name'];
$c=$_POST['product_name'];
$d=$_POST['des'];
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    $z= strtolower("$c");
    
    
    
    
    
    
    
    






   $check="SELECT * FROM addproadmin WHERE product_name='$z'";
    $sql=mysqli_query($con,$check);
    $count=mysqli_num_rows($sql);
    
    if($count>0)
    {
        echo "<script>";
	      echo "alert('product exists')";
	     echo "</script>";
    }
    else
    {
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`addproadmin` (`pid`, `image`, `category_name`, `product_name`, `des`, `status`) VALUES (NULL, '$image', '$b', '$c', '$d', '1');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('product successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding product')";
	     echo "</script>";
        }
    }
mysqli_close($con);
}
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='view_adminproducts_a.php'");
        ?>
    </script>
    </body>
</html>
