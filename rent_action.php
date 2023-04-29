<?php

include('dbconnection.php');



if(isset($_POST['submit']))
{

$a=$_POST['machine_name'];
$b=$_POST['from'];
$c=$_POST['to'];
$d=$_POST['total_rent'];





$str="INSERT INTO `agri3`.`rent` (`rid`, `machine_name`, `from`, `to`, `total_rent`, `status`) VALUES (NULL, '$a', '$b', '$c', '$d', '1');";


if(mysqli_query($con,$str))
{
    header("location:rentmachine.php");
}
mysqli_close($con);
}
?>