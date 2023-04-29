
<?php

include('dbconnection.php');
include('session.php');
$k=$_GET['m'];







$sql1="update addproduct set status='9' where pid='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:viewdisabledfarmerproducts.php");


   
   

mysqli_close($con);
?>



