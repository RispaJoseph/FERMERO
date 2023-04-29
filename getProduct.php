<?php
include('dbconnection.php');
if (! empty($_POST["category_name"])) {
    $m=$_POST["category_name"];
    $query = "SELECT * FROM addproadmin WHERE category_name = '$m'";
    $results = mysqli_query($con,$query);
    ?>
<option value="">Select product</option>
<?php
    while($product=mysqli_fetch_array($results)) {
        ?>
<option value="<?php echo $product["pid"]; ?>"><?php echo $product["product_name"]; ?></option>
<?php
    }
}
?>