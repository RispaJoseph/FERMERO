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


$c=$_POST['magazine'];
   
$d=$_POST['des'];

$f=$_POST['unitcost'];



$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{

$str="INSERT INTO `agri3`.`magazine` (`pid`,  `magazine`,`image`, `des`,  `unitcost`) VALUES (NULL,  '$c', '$image','$d', '$f');";

}
if(mysqli_query($con,$str))
{
      echo "<script>";
	      echo "alert('magazine successfully added')";
	     echo "</script>";
}
mysqli_close($con);
}
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='addmagazine.php'");
        ?>
    </script>
    </body>
</html>