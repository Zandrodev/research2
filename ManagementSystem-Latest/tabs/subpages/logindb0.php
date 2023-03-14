<?php
$host="localhost";
$Username="root";
$Pass="";
$db="demologin";
session_start();
$data = mysqli_connect($host,$Username,$Pass,$db);
mysqli_select_db($data, 'demologin');

if(isset($_POST['UserID'])){
    $UserID=$_POST['UserID'];
    $Password=$_POST['Password'];

    $sql = "select * from loginform where UserID='".$UserID."'AND Password='".$Password."'";
    $qul ="select * from maint where User='".$UserID."'AND Pass='".$Password."'";
    $quer ="select Name from loginform where UserID='".$UserID."'";

    $rlt =mysqli_query($data,$qul);
    $run =mysqli_fetch_array($rlt);

    $result=mysqli_query($data,$sql,);
    $row =mysqli_fetch_array($result);

    $na = mysqli_query($data, $quer);
    $naw = mysqli_fetch_assoc($na);
    $Name = $row['Name'];
    if($row["Usertype"]=="User")
    {


        $_SESSION['UserID'] = $UserID;
        $_SESSION['Name'] = $Name;

        header("Location:Employee.php");
        exit();
    }
    elseif($run["Usertype"]=="Admin")
    {
         header("Location:Admin/Admin.php");
    }
    else{
      header("Location:loginpage.php?error=Incorrect User or Pass");
      exit();
    }

    }


?>
