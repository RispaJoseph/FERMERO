
<?php
include('dbconnection.php');
include('session.php');
$k=$_GET['m'];






$sql1="update category  set status='1' where category_id='$k'";
$exe1=mysqli_query($con,$sql1);
    header("location:view_category.php");


   
   

mysqli_close($con);
?>



