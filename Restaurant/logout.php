
<?php
session_start();
unset($_SESSION["emailid"]);
unset($_SESSION["password"]);
header("Location:index.php");
?>