<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            $dbconn = pg_connect("host=localhost dbname=hidropaez user=postgres password=1234")
            or die('No se ha podido conectar: ' . pg_last_error());
       
            $sql = pg_query("SELECT * FROM empleados WHERE usuario = '".$b."'");
             
            $contar = pg_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
            }
      }     
?>