<?php 
	
	include('../conex.php');
	include('../formato/seguridad.php');

	$usuario = $_POST["usuario"];

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$edad = $_POST["edad"];
	
	$email = $_POST["email"];

	$sql = ("UPDATE empleados set nombres = '$nombre', apellidos = '$apellido', cedula = '$cedula', edad = '$edad', email = '$email' where usuario = '$usuario'");

	if(pg_query($sql)){
		echo "<script>alert('Modificacion Exitosa!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
	}else{
		echo "<script>alert('NO Modificado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
	}



 ?>