
<?php


include('../dbconnection.php');
include('session.php');

$k=$_GET['b'];



$s="delete from cart1 where pid='$k'";

mysqli_query($con,$s);
    echo"<script>";
         echo("location.href='supp_cart.php'");
         echo"</script>";



   
   

mysqli_close($con);
?>



