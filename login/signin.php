<?php
require_once('../connect.php');
// escape variables for security
$password = mysqli_real_escape_string($con, $_POST['password']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$sql="SELECT * FROM sl_users
	WHERE email='$email' and password='$password'";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
header("Location: ".$URL."success.php");
?>