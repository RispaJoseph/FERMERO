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
$a=$_POST['name'];
$b=$_POST['category'];
$c=$_POST['feedback'];




$str="INSERT INTO `agri3`.`feedback2` (`fid`, `name`,`category`, `feedback`) VALUES (NULL,'$a', '$b', '$c');";

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
        echo("location.href='feedback2.php'");
        ?>
    </script>
    </body>
</html>