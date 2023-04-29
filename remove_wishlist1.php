
<?php
include('dbconnection.php');
include('session.php'); 

$k=$_GET['b'];





$s="delete from wish where pid='$k'";
mysqli_query($con,$s);
    echo"<script>";
         echo("location.href='./warsaw/wishlist1.php'");
         echo"</script>";



   
   

mysqli_close($con);
?>



