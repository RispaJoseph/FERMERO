<?php
include('dbconnection.php'); 
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}




if(isset($_POST["submit"]))
{

$c=$_POST['title'];
$d=$_POST['des'];
    $s=$_POST['des1'];
    
    $e=date("y/m/d");
     $f=date("h:i:sa",time());
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    $file1=$_FILES['image1']['name'];
     $location1=$_FILES['image1']['tmp_name'];
$image=addslashes(file_get_contents($location));
    $image1=addslashes(file_get_contents($location1));
$a=move_uploaded_file($location,$folder.$file);
    $b=move_uploaded_file($location1,$folder.$file1);

   $file2=$_FILES['image2']['name'];
     $location2=$_FILES['image2']['tmp_name'];
    $image2=addslashes(file_get_contents($location2));
$c=move_uploaded_file($location2,$folder.$file2);
   
    
    
        $str="INSERT INTO `agri3`.`agripedia` (`nid`, `title`,`image`,`des`,`image1`,`image2`,`des1`,`date`,`time`) VALUES (NULL,'$c', '$a','$d','$b','$c','$s','$e','$f');";

if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('Story successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding Story')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./success.php'");
        ?>
    </script>
    </body>
</html>
