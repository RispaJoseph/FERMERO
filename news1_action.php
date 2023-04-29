<?php
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}
include('dbconnection.php');
if(isset($_POST["submit"]))
{
$a=$_POST['category_name'];
$c=$_POST['title'];
$d=$_POST['des'];
    $e=date("y/m/d");
     $f=date("h:i:sa",time());
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`addnews1` (`nid`,`category_name`, `title`,`image`,`des`,`date`,`time`) VALUES (NULL,'$a','$c', '$image','$d','$e','$f');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('Post successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding Post')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addnews1.php'");
        ?>
    </script>
    </body>
</html>
