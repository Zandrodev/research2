<?php
error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demologin";

$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn)
{
  echo "Connection ok";
}
else {
  echo "Connection failed".mysqli_connect_error();
}
 ?>
