<?php

include('dbconnection.php');
if (! empty($_POST["machine_name"])) {
    $m=$_POST["machine_name"];
    $query = "SELECT * FROM addmachine WHERE machine_name = '$m'";
    $results = mysqli_query($con,$query);
      
?>
  

<input id="rate" type="varchar" value="<?php echo $city["mid"]; ?>" <?php echo $city["rate"]; ?> name="rate"  class="form-control customize" required/>
                                  

?>