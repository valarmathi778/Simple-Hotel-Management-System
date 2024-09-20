<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.7.1.js"></script>
  <script src="js/bootstrap.min.js"></script>  

</head>
<body>
<form action="Foodform.php">
<button type="submit" style="background-color: green; color: white; pointer: cursor; width: 100px; height: 50px; border: 2px black;">Add Food</button>
</form>
</body>
</html>

<?php
session_start();

$EmailId = $_SESSION['semail'];

if(isset($_SESSION['semail']) && !empty($_SESSION['semail'])) {
	header("location: home.php");
	}
	else{
		header("location: index.php");
	}
?>