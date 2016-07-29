<?php
	session_start();
	include("conex.php");
	$usuario = $_POST["nombre"];
	$clave = $_POST["clave"];

	$clave = md5($clave);


	$sql = ("SELECT * from empleados where usuario = '$usuario' and clave ='$clave'");
	$result = pg_query($sql);

	$num = pg_num_rows($result);
	$row = pg_fetch_array($result);

	if($num > 0){
		$_SESSION["aut"]="si";
		$_SESSION["usuario"] = $row["usuario"];
		header("location:formato/home.php");
		
	}else{
		
        echo "<meta http-equiv='refresh' content='0,url=indexError.php'>";
	}	
	

	
	
	
 ?>