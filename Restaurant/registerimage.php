<?php
require('connect.php');

$img = $_FILES['images'];
$type = $_REQUEST['Image_Type];

$res = $con->query("INSERT INTO foodimages(`Images`,`Image_Type`) VALUES ('$img','$type')");

$count = mysqli_affected_rows($con);

move_uploaded_file($_FILES['images']['tmp_name'], "Foodimages/".$img);

header('location: foodselect.php');


?>