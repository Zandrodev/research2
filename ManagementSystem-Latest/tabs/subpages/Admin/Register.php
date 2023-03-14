
<?php
$Name = $_POST ['Name'];
$UserID = $_POST ['UserID'];
$Password = $_POST ['Password'];
$Department = $_POST ['Department'];
$Occupation = $_POST ['Occupation'];
$Email = $_POST ['Email'];
$Contact = $_POST ['Contact'];

$conn = new mysqli('localhost', 'root','','demologin');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into loginform(Name, UserID, Password, Department, Occupation, Email, Contact) values(?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssi",$Name, $UserID, $Password, $Department, $Occupation, $Email, $Contact);
  $stmt->execute();
  header("Location:Admin.php#employee");
  $stmt->close();
  $conn->close();
}
 ?>
