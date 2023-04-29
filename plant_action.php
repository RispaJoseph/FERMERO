<?php
session_start();

if(!isset($_SESSION['sess']))
{
header("location:home.php");
}


include('dbconnection.php');


if(isset($_POST["submit"]))
{
$cc=$_POST['category_name'];
 
$c=$_POST['title'];
 
$d=$_POST['des'];
    
$e=$_POST['phone'];  
    $f=$_POST['unitcost'];
    $g=$_POST['quantity'];
    
$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
    
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
    
    
    
        $str="INSERT INTO `agri3`.`plant` (`nid`, `category_name`,`title`,`image`,`des`,`phone`,`unitcost`,`quantity`) VALUES (NULL,'$cc','$c', '$image','$d','$e','$f','$g');";
}
if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('Details successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding Details')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='./addplant.php'");
        ?>
    </script>
    </body>
</html>
