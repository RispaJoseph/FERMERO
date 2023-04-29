<?php
include('dbconnection.php');   
     $a=$_POST['name'];
     $b=$_POST['image'];
     $c=$_POST['age'];
     $d=$_POST['house_name'];
     $e=$_POST['place'];
     $f=$_POST['phone'];
     $g=$_POST['email'];
    
     $j=$_POST['username'];
     $k=$_POST['password'];
    
    
 $sql="INSERT INTO `agri3`.`reg` (`reg_id`, `name`, `photo`, `age`, `house_name`, `place`, `phone`, `email`, `username`, `password`, `status`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$j', '$k', '2');";

if(mysqli_query($con,$sql))
{
    echo "<script>";
echo "alert('registered successfully.')";echo"</script>"; 
        
        
}

$sql3="INSERT INTO `agri3`.`login` (`login_id`, `username`, `password`, `user_type`, `status`) VALUES (NULL, '$j', '$k', '2', '2')";
if(mysqli_query($con,$sql3))
    {
 echo "<script>";
echo "alert('Please login for more options')";echo"</script>"; 
        
        
}

 

 mysqli_close($con);


?>
<html>
<body>
    <script>
    <?php
        echo("location.href='login.php'");
        ?>
    </script>
    </body>
</html>

