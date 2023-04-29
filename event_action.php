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
 $f=$_POST['place']; 
    $g=$_POST['district'];   
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`event` (`nid`, `title`,`category1`,`image`,`des`,`date2`,`place`,`district`) VALUES (NULL,'$c', '$cc','$image','$d','$e','$f','$g');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('Event successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding Event')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addevent.php'");
        ?>
    </script>
    </body>
</html>
