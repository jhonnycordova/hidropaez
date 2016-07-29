<?php 
	include("../conex.php");

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$edad = $_POST["edad"];
	
	$email = $_POST["email"];
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	$password = md5($password);

	


	$sql = ("INSERT INTO empleados (nombres, apellidos, cedula, edad, email, usuario, clave) VALUES ('$nombre', '$apellido', '$cedula', '$edad', '$email', '$usuario', '$password')");

	if(pg_query($sql)){
		echo "<script>alert('Empleado Registrado Satisfactoriamente!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
	}else{
		echo "<script>alert('Empleado NO Registrado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
	}


 ?>