
<?php
include('dbconnection.php');
include('session.php');

$k=$_GET['m'];







$sql1="update addmachine set status='1' where mid='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:viewmachine.php");


   
   

mysqli_close($con);
?>



