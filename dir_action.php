<?php
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}
include('dbconnection.php'); 



if(isset($_POST["submit"]))
{


    $cc=$_POST['category1'];
    $c=$_POST['title'];
   
 $f=$_POST['place']; 
    $g=$_POST['district'];   
    $d=$_POST['phone'];
$e=$_POST['des']; 
    $dd=$_POST['email'];
$ee=$_POST['web']; 
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`dir` (`nid`,`category1`, `title`,`image`,`place`,`district`,`phone`,`des`,`email`,`web`) VALUES (NULL,'$cc', '$c','$image','$f','$g','$d','$e','$dd','$ee');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('directory successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding directory')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./adddirectory.php'");
        ?>
    </script>
    </body>
</html>
