<?php
include('dbconnection.php');  
     $a=$_POST['name'];
     
     $c=$_POST['age'];
     $d=$_POST['house_name'];
     $e=$_POST['place'];
     $f=$_POST['phone'];
     $g=$_POST['email'];
     $h=$_POST['adhar'];
     $j=$_POST['username'];
     $k=$_POST['password'];
$r=MD5($k);
    
    $file=$_FILES['photo']['name'];
      $location=$_FILES['photo']['tmp_name'];
      $folder="image/";
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
 $sql="INSERT INTO `agri3`.`reg` (`reg_id`, `name`, `photo`, `age`, `house_name`, `place`, `phone`, `email`,  `username`, `password`, `status`) VALUES (NULL, '$a', '$image', '$c', '$d', '$e', '$f', '$g',  '$j', '$r', '0')";
}
if(mysqli_query($con,$sql))
{
    echo "<script>";
echo "alert('registered successfully.')";echo"</script>"; 
        
        
}

$sql3="INSERT INTO `agri3`.`login` (`login_id`, `username`, `password`,`email`, `user_type`, `status`) VALUES (NULL, '$j', '$k', '$g','0', '0')";
if(mysqli_query($con,$sql3))
    {
 echo "<script>";
echo "alert('Please login for more options')";echo"</script>"; 
        
        
}

  
 $sql1="INSERT INTO `agri3`.`farmer` (`username`,  `adhar`,`status`) VALUES ( '$j',  '$h',  '0')";

mysqli_query($con,$sql1);

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

