
<?php
include('dbconnection.php');
include('session.php');

$k=$_GET['m'];







$sql1="update addprosupp set status='1' where pid='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:viewseed.php");


   
   

mysqli_close($con);
?>



