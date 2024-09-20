<?php
require('connect.php');

$id = $_REQUEST['id'];

$res = $con->query("DELETE FROM food WHERE Food_Id=$id");

header('location: gallery.php');

?>