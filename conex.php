<?php 
	// Conectando y seleccionado la base de datos  
//debes modicar las extensiones en php.ini la de pgsql y pdo_pgsql y copiar la librería lbpq.dll que esta en PHP al apache
$dbconn = pg_connect("host=localhost dbname=hidropaez user=postgres password=1234")
    or die('No se ha podido conectar: ' . pg_last_error());
 ?>