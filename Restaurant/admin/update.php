 <?php
require('connect.php');

$id = $_REQUEST['id'];
$RecipeName = $_REQUEST['rnm'];
$Ingredients = $_REQUEST['ing'];
$MealType = $_REQUEST['mt'];
$Cusinie = $_REQUEST['cus'];
$ServingSize = $_REQUEST['ss'];
$Type = $_REQUEST['type'];
$Description = $_REQUEST['description'];
if(empty($_FILES['Meal']['name']))
{
$res = $con->query("UPDATE food 
						SET `Recipe_Name`='$RecipeName' ,
						    `Ingredients`='$Ingredients',
					        `Meal_Type`='$MealType', 
					        `Cuisine`='$Cusinie', 
							`Serving_Size`='$ServingSize',
							`Image_Type`='$Type',
							`Description`='$Description'
					  WHERE `Food_Id`='$id'");
}else{
	$img = $_FILES['Meal']['name'];
	$res = $con->query("UPDATE food 
						SET `Recipe_Name`='$RecipeName' ,
						    `Ingredients`='$Ingredients',
					        `Meal_Type`='$MealType', 
					        `Cuisine`='$Cusinie', 
							`Serving_Size`='$ServingSize', 
							`Food_Image`='$img',
							`Image_Type`='$Type',
							`Description`='$Description'
					  WHERE `Food_Id`='$id'");

}
header('location: gallery.php');
		
?>
