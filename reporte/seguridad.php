<?php ini_set("display_errors", false) ?>
<?php 
	session_start();
	date_default_timezone_set('America/Caracas');

	if($_SESSION["aut"] != "si") header("location:../index.php");
 ?>