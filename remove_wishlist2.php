
<?php
include('dbconnection.php');
include('session.php');

$k=$_GET['b'];





$s="delete from wish1 where pid='$k'";
mysqli_query($con,$s);
    echo"<script>";
         echo("location.href='./warsaw/wishlist2.php'");
         echo"</script>";



   
   

mysqli_close($con);
?>



