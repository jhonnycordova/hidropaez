<?php 
	include('../conex.php');

	$usuario = $_POST["usuario"];

	$claveVieja = $_POST["claveVieja"];
	$clave = $_POST["password"];
	$clave2 = $_POST["password_conf"];

	$claveVieja = md5($claveVieja);

	$sql = ("SELECT * from empleados where usuario = '$usuario' and clave ='$claveVieja'");
	$result = pg_query($sql);

	$num = pg_num_rows($result);
	
	//verifica que la clave ingresa es la antigua de verdad
	$antiguaClave = false;
	if ($num > 0) {
		$antiguaClave = true;
	}else{
		echo "<script>alert('Esa No es Su Antigua Clave!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../formato/formato.php'>";
		
	}

	//verifica que las dos claves son iguales
	$clavesIguales = false;
	if ($clave==$clave2) {
		$clavesIguales = true;
	}else{
		echo "<script>alert('Las Nuevas Claves Ingresadas NO Coinciden!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=../formato/formato.php'>";
	}

	//actualiza la clave

	if ($antiguaClave==true and $clavesIguales==true) {
		$clave = md5($clave);

				$sql1 = ("UPDATE empleados set clave = '$clave' where usuario = '$usuario'");
				if(pg_query($sql1)){
					echo "<script>alert('Cambio de Claves Exitoso!') </script>";
					echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
				}else{
					echo "<script>alert('NO se Cambiaron las Claves!') </script>";
					echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
				}

	}


 ?>