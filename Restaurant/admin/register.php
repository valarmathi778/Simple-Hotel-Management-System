<?php

session_start();

require('connect.php');

$EmailId = $_POST['Email'];

$Password = $_POST['password'];

$result = $con->query("SELECT * FROM admin WHERE `Email`='$EmailId' AND `Password`='$Password'");

$count = $result->num_rows;

if($count > 0){
	$_SESSION["semail"] = $EmailId ;
	header('location:home.php');
}
else {
	header('location:index.php');
}


?>
