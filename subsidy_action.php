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
 $cc=$_POST['category_name'];
       
$d=$_POST['des'];
$e=$_POST['unit'];    
 $f=$_POST['comp']; 
    $g=$_POST['amount'];   
      $gg=$_POST['percentage']; 
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`subsidy` (`nid`, `title`,`category_name`,`image`,`des`,`unit`,`comp`,`amount`,`percentage`) VALUES (NULL,'$c','$cc','$image','$d','$e','$f','$g','$gg');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('subsidy successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding subsidy')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addsubsidy.php'");
        ?>
    </script>
    </body>
</html>
