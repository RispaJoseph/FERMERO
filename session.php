

<?php

@ob_start();
session_start();
if(!isset($_SESSION['sess']))
{
header("location:index.php");
} 


?>
