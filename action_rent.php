<?php

include('dbconnection.php'); 



if(isset($_POST['submit']))
{
$a=$_POST['machine_name'];
$b=$_POST['date2'];
$c=$_POST['to'];
$d=$_POST['total_rent'];





$str="INSERT INTO `agri3`.`rent` (`rid`, `machine_name`, `date2`, `to`, `total_rent`) VALUES (NULL, '$a', '$b', '$c', '$d');";


if(mysqli_query($con,$str))
{
    header("location:rentmachine.php");
}
mysqli_close($con);
}
?>