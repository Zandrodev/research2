<?php
session_start();
if(isset($_POST['username'])){
  session_destroy();
  echo header ("location:loginpage.php");
}
else{
  echo header ("location:../loginpage.php");
}
