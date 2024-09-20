<?php
require('connect.php');

$CardNumber= $_POST['cardnumber'];

$ID=$_POST['userid'];

$foodid=$_POST['foodid'];

$CVV = $_POST['cvv'];

$Seat = $_POST['seats'];

$Totalprice = $_POST['prices'];

$result = $con->query("INSERT INTO orderform (`Card_Number`, `CVV`,`Seats`,`Total_Price`,`UserId`,`FoodId`) VALUES ('$CardNumber', '$CVV','$Seat','$Totalprice','$ID','$foodid')");

$count = $result->num_rows;

header('Location: index.php');
?>