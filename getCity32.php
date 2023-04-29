<?php
include('dbconnection.php');
if (! empty($_POST["state_id"])) {
    $m=$_POST["state_id"];
    $f=MD5($m);
$s="select * from login where password='$f' and user_type=1";
$res=mysqli_query($con,$s);
$res2=mysqli_fetch_array($res);
    $c=mysqli_num_rows($res);
if($c!=0)
{
?>

   
<p value="<?php echo "correct"?>"></p>
<?php
}
    else
    {?>
     <p value="<?php echo "Wrong password! check the password again"?>"><?php echo "Wrong password! check the password again"?></p>   
    <?php
    }
                                 }

?>