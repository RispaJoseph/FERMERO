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
    $cc=$_POST['category1'];
$d=$_POST['des'];
$e=$_POST['date2']; 
    $z=$_POST['name'];
 $f=$_POST['place']; 
    $g=$_POST['phone'];
    $h=$_POST['salary'];  
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`job` (`nid`, `title`,`category1`,`image`,`des`,`date2`,`name`,`place`,`phone`,`salary`) VALUES (NULL,'$c', '$cc','$image','$d','$e','$z','$f','$g','$h');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('job successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding job')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addjob.php'");
        ?>
    </script>
    </body>
</html>
