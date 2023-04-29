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
$c=$_POST['complaint'];
    $d=$_POST['status'];




$str="INSERT INTO `agri3`.`complaint` (`cid`, `name`,`category`, `complaint`,`status`) VALUES (NULL,'$a', '$b', '$c','$d');";

}
if(mysqli_query($con,$str))
{
      echo "<script>";
	      echo "alert('complaint successfully added')";
	     echo "</script>";
}
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='logout.php'");
        ?>
    </script>
    </body>
</html>