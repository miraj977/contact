<?php
$server = array('127.0.0.1','::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $server)){
	$conn = new mysqli("SERVER","USER","PASS","DB");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$selected = mysqli_select_db($conn,"DB") 
	or die("Could not select database");
}
else
{
	$conn = new mysqli("localhost","root","pass","cv_contact");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$selected = mysqli_select_db($conn,"cv_contact") 
	or die("Could not select database");
}
// Check connection
?>