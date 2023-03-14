<?php
include("Admin/connection.php")
;
date_default_timezone_set('Asia/Manila');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
// Get the user ID and attendance status from the form
$UserID = $_SESSION['UserID'];
$Status = $_POST['Status'];
$Name = $_SESSION['Name'];
// Get the current date
$Date = Date('y-m-d');
$Time = Date('h:i:s a');

$sql = "UPDATE loginform SET Status = '$Status' WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);

// Insert the attendance record into the database
$sql = "INSERT INTO attendance (Name,UserID, Date, Time, Status) VALUES ('$Name','$UserID', '$Date','$Time', '$Status')";
if (mysqli_query($conn, $sql)) {
    header("Location:employee.php");
} else {
    echo "Error recording attendance: " . mysqli_error($conn);
}

if (!$result) {
    echo "Error updating record: " . mysqli_error($conn);
} else {
    header("Location:employee.php");
}
// Close the database connection
mysqli_close($conn);
?>
<form method="post" action="attendance.php">
<div><label><input type="radio" name="Status" value="Present"> Present</label><br>
    <label><input type="radio" name="Status" value="Absent"> Absent</label><br>
    <input type="submit" value="Submit"></div>
  </form>
