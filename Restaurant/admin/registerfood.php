<?php
require('connect.php');

$RecipeName = $_REQUEST['rnm'];
$Ingredients = $_REQUEST['ing'];
$MealType = $_REQUEST['mt'];
$Cusinie = $_REQUEST['cus'];
$ServingSize = $_REQUEST['ss'];
$img = $_FILES['Meal']['name'];
$Type = $_REQUEST['type'];
$Description = $_REQUEST['description'];

$res = $con->query("INSERT INTO food(`Recipe_Name`, `Ingredients`, `Meal_Type`, `Cuisine`, `Serving_Size`,`Food_Image`,`Image_Type`,`Description`) 
VALUES ('$RecipeName', '$Ingredients', '$MealType', '$Cusinie', '$ServingSize','$img','$Type','$Description')");

$count = mysqli_affected_rows($con);

move_uploaded_file($_FILES['Meal']['tmp_name'], "Food/".$img);

header('location: home.php');

		
?>
