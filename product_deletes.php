
<?php
include('dbconnection.php');
include('session.php');
$k=$_GET['m'];







$sql1="update addproadmin set status='9' where pid='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:viewdisabledadminproducts.php");


   
   

mysqli_close($con);
?>



