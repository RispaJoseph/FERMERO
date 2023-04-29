<?php
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}
include('dbconnection.php');


if(isset($_POST["submit"]))
{

$c=$_POST['title'];
    $cc=$_POST['service'];
$d=$_POST['des'];
$e=$_POST['date2']; 
    $z=$_POST['name'];
 $f=$_POST['place']; 
    $g=$_POST['phone'];
    $h=$_POST['price'];  
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`lease` (`nid`, `title`,`service`,`image`,`des`,`date2`,`name`,`place`,`phone`,`price`) VALUES (NULL,'$c', '$cc','$image','$d','$e','$z','$f','$g','$h');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert(' Land details successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding details')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addlease.php'");
        ?>
    </script>
    </body>
</html>
