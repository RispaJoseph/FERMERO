<?php
include('dbconnection.php');

if(isset($_POST['submit']))
{

$b=$_POST['machine_name'];
$c=$_POST['des'];
$d=$_POST['rate'];
$z=$_POST['name'];
    $y=$_POST['phone'];

$file=$_FILES['image']['name'];
      $location=$_FILES['image']['tmp_name'];
      $folder="image/";
$image=addslashes(file_get_contents($location));
if(move_uploaded_file($location,$folder.$file))
{
  


$str="INSERT INTO `agri3`.`addmachine` (`mid`, `image`, `machine_name`, `des`, `rate`,`name`,`phone`, `status`) VALUES (NULL, '$image', '$b', '$c', '$d','$z','$y', '1');";

}
if(mysqli_query($con,$str))
{
     echo "<script>";
	      echo "alert('machine successfully added')";
	     echo "</script>";
mysqli_close($con);
}
}
?>
<html>
<body>
    <script>
    <?php
        echo("location.href='viewmachine.php'");
        ?>
    </script>
    </body>
</html>