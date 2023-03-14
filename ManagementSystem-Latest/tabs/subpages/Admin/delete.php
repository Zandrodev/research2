<?php
include("connection.php");
error_reporting(0);
$Name=$_GET['Name'];
$query = "Delete From Loginform where Name = '$Name'";

$result=mysqli_query($conn,$query);
if($result)
{
  header("Location:Admin.php#employee");
}
else {
  echo "Failed to delete";
}
?>
