<?php
	echo $formUsuario=$_POST['usuario'];
	exit();
	 $dbconn = pg_connect("host=localhost dbname=hidropaez user=postgres password=1234")
    or die('No se ha podido conectar: ' . pg_last_error());

	$sql = "SELECT id_empleado from empleado where usuario='$formUsuario'";
	$resultado = pg_query($sql, $conexion);
	if(pg_fetch_assoc($resultado)){
	    echo "false";
	}else{
	    echo "true";
	}
?>