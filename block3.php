
<?php

include('dbconnection.php'); 
include('session.php');

$k=$_GET['m'];







$sql1="update reg set status='6' where reg_id='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:userview.php");


   
   

mysqli_close($con);
?>



