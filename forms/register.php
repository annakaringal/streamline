<?php

require_once ('connect.php');

// escape variables for security
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$sql="INSERT INTO sl_users (username,password,email)
		VALUES ('$username', '$password', '$email')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

header( 'Location: '.$path.'success.php?e-mail='.urldecode($email) );
?>