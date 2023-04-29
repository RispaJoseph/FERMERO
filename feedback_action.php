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
    $dd=$_POST['status'];
$a=$_POST['name'];

$b=$_POST['feedback'];
$c=$_POST['review'];
    $d=$_POST['response'];
    $e=$_POST['support'];
$f=$_POST['satis'];
    $cc=$_POST['feed'];



$str="INSERT INTO `agri3`.`feedback` (`fid`, `name`, `feedback`,`review`,`response`,`support`,`satis`,`feed`,`status`) VALUES (NULL,'$a', '$b', '$c','$d','$e','$f','$cc','$dd');";

}
if(mysqli_query($con,$str))
{
      echo "<script>";
	      echo "alert('feedback successfully added')";
	     echo "</script>";
}


mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='home.php'");
        ?>
    </script>
    </body>
</html>
