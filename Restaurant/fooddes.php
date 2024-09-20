 <?php
require('connect.php');

$id = $_REQUEST['id'];
$Type = $_REQUEST['type'];
$Description = $_REQUEST['description'];
if(empty($_FILES['Meal']['name']))
{
$res = $con->query("UPDATE food 
						SET `Image_Type`='$Type',
							`Description`='$Description'
					  WHERE `Food_Id`='$id'");
}else{
	$img = $_FILES['Meal']['name'];
	$res = $con->query("UPDATE food 
						SET `Food_Image`='$img',
							`Image_Type`='$Type',
							`Description`='$Description'
					  WHERE `Food_Id`='$id'");

}
header('location: home.php');
		
?>
