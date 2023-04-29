<?php
include('dbconnection.php');
if (! empty($_POST["category"])) {
    $m=$_POST["category"];
    $query = "SELECT * FROM addproadmin WHERE category_name = '$m'";
    $results = mysqli_query($con,$query);
    ?>
<option value="">Select Product</option>
<?php
    while($city=mysqli_fetch_array($results)) {
        ?>
<option value="<?php echo $city["product_name"]; ?>"><?php echo $city["product_name"]; ?></option>
<?php
    }
}
?>