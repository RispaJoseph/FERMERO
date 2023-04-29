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

$z= strtolower("$a");
    
    
    
    
    
    
    
    






   $check="SELECT * FROM category WHERE category_name='$z'";
    $sql=mysqli_query($con,$check);
    $count=mysqli_num_rows($sql);
    
    if($count>0)
    {
        echo "<script>";
	      echo "alert('category exists')";
	     echo "</script>";
    }
    
    
    
    
    
    
    
    else
    {
        $str="INSERT INTO `agri3`.`category` (`category_id`, `category_name`, `status`) VALUES (NULL, '$a', '1')";
if(mysqli_query($con,$str))
   
    {
       echo "<script>";
	      echo "alert('category successfully added')";
	     echo "</script>";
    }
        else
        {echo "<script>";
	      echo "alert('error adding category')";
	     echo "</script>";
        }
        
    }
}
mysqli_close($con);
    ?>
<html>
<body>
    <script>
    <?php
        echo("location.href='view_category.php'");
        ?>
    </script>
    </body>
</html>

