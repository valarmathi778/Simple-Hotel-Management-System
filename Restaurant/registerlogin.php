<?php

require('connect.php');

$Name = $_POST['Name'];

$Number = $_POST['number'];

$Email = $_POST['Email'];

$Guests = $_POST['guest'];

$Date = $_POST['datepicker2'];

$Addinfo = $_POST['Message'];



$res = $con->query("INSERT INTO fooduser(`Name`, `Mobile_Number`,`Email`,`Guest`,`Date`,`Add_Info`) 
VALUES ('$Name', '$Number','$Email','$Guests','$Date','$Addinfo')");

$count = mysqli_affected_rows($con);

$count = $result->num_rows;

header('location:index.php');

?>
