<?php
include('dbconnection.php');
if (! empty($_POST["category"])) {
    $m=$_POST["category"];
    $query = "SELECT * FROM addprosupp WHERE category_name = '$m'";
    $results = mysqli_query($con,$query);
    ?>
<option value="">Select Product</option>
<?php
    while($city=mysqli_fetch_array($results)) {
        ?>
<option value="<?php echo $city["pid"]; ?>"><?php echo $city["product_name"]; ?></option>
<?php
    }
}
?>