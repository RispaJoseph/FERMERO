
<?php

include('dbconnection.php');
include('session.php');

$k=$_GET['b'];





$sql1="update addprosupp set status='5' where pid='$k'";
mysqli_query($con,$sql1);
    echo"<script>";
         echo("location.href='supp_cart.php'");
         echo"</script>";



   
   

mysqli_close($con);
?>



