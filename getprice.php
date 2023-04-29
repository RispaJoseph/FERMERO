<?php
include('dbconnection.php');
if (! empty($_POST["machine_name"])) {
    $m=$_POST["machine_name"];
    $query = "SELECT rate FROM addmachine WHERE machine_name = '$m'";
    $results = mysqli_query($con,$query);
    $row=mysqli_fetch_array(results)
    if(mysqli_num_rows(results) >0){
        echo'<input type="text" id="rate" value="'.$row["rate"].''">'
    
    }
    
}