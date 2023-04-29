
<?php
include('dbconnection.php');
include('session.php');

$k=$_GET['b'];





$s="delete from cart3 where pid='$k'";
mysqli_query($con,$s);
    echo"<script>";
         echo("location.href='shopping-cart2.php'");
         echo"</script>";



   
   

mysqli_close($con);
?>



