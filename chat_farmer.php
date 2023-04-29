<?php
include('session.php');
include('dbconnection.php'); 



if(isset($_POST["submit"]))
{

$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['phone'];
    $e=$_POST['message'];


    
    
    
    
    
    
    
    






   
    
    
        $str="INSERT INTO `agri3`.`admin_chat` (`cid`, `name`, `email`, `phone`, `message`) VALUES (NULL,  '$b', '$c', '$d', '$e');";

if(mysqli_query($con,$str))
{
    
    echo "<script>";
	      echo "alert('product successfully added')";
	     echo "</script>";
  
}
        else
        {
            echo "<script>";
	      echo "alert('error adding product')";
	     echo "</script>";
        }
    }
mysqli_close($con);

?>
<html>
<body>
    <script>
    <?php
        echo("location.href='view_adminproducts_a.php'");
        ?>
    </script>
    </body>
</html>
