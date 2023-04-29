
<?php
$token = '4AdHtiLuh05j2hSxxwH9N6EbuBX1B3I1CgGThWSHNVwbYyZgcTkX07IX1oFD';
$mobile = $_POST['phone'];
$msg = $_POST['message'];
$site = 'Howi';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Compleated...";
}
else{
  echo "Something Went Wrong...";
}
?>
