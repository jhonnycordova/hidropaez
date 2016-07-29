<?php 
	     include("../conex.php");
       include("seguridad.php");
      	$idUsuario = $_POST["idUsuario"];
      	$sistema = $_POST["sistema"];
        $fecha = $_POST["fecha"];
        
        $noReporto = $_POST["noReporto"];

  if ($noReporto == 'No Reportó') {
          $ht = $_POST["ht"];
       if (empty($ht)) {
        $ht = 0;
       }

       $sulconsumido = $_POST["sulconsumido"];
       if (empty($sulconsumido)) {
              $sulconsumido = 0;
       }

        $gasconsumido = $_POST["gasconsumido"];
       if (empty($gasconsumido)) {
              $gasconsumido = 0;
       }

        $calconsumido = $_POST["calconsumido"];
       if (empty($calconsumido)) {
              $calconsumido = 0;
       }

        $hipoclorito = $_POST["hipoclorito"];
       if (empty($hipoclorito)) {
              $hipoclorito = 0;
       }

       

        $fallaelectrica = $_POST["fallaelectrica"];
       if (empty($fallaelectrica)) {
              $fallaelectrica = 0;
       }

        $fallamecanica = $_POST["fallamecanica"];
       if (empty($fallamecanica)) {
              $fallamecanica = 0;
       }

        $procruda = $_POST["procruda"];
       if (empty($procruda)) {
              $procruda = 0;
       }
        $procacum = $_POST["procacum"];
       if (empty($procacum)) {
              $procacum = 0;
       }
        $propota = $_POST["propota"];
       if (empty($propota)) {
              $propota = 0;
       }

        $propacum = $_POST["propacum"];
       if (empty($propacum)) {
              $propacum = 0;
       }

       $policloruro = $_POST["policloruro"];
       if (empty($policloruro)) {
              $policloruro = 0;
       }

       $gasclorolb = $_POST["gasclorolb"];
       if (empty($gasclorolb)) {
              $gasclorolb = 0;
       }

       $observaciones = $_POST["observaciones"];

        
       

          $sql = ("INSERT INTO formato_diario (id_sistema, fecha, id_empleado, ht, sulconsumido, gasconsumido, calconsumido, hipoclorito, fallaelectrica, fallamecanica, procruda, procacum, propota, propacum, observaciones, policloruro, reporte, gasclorolb) VALUES ('$sistema', '$fecha', '$idUsuario', '$ht', '$sulconsumido', '$gasconsumido', '$calconsumido', '$hipoclorito', '$fallaelectrica', '$fallamecanica', '$procruda', '$procacum', '$propota', '$propacum', '$observaciones', '$policloruro', true, '$gasclorolb' ) ");
          
          //consulto los almacenes 
          $sql2 = ("SELECT * FROM almacenes where id_sistema = '$sistema'");
          $result2 = pg_query($sql2);
          $row2 = pg_fetch_array($result2);

          //calculo para sumar el htacum con el ht del formato diario
          $nuevoHtAcum = $row2[htacum] + $ht;
          $nuevoSulfato = $row2[sulaluminio] - $sulconsumido;
          $nuevoGas = $row2[gascloro] - $gasconsumido;
          $nuevoCal = $row2[cal] - $calconsumido;
          $nuevoClresidual = $row2[clresidual] - $clresidual;
          $nuevoHipoclorito = $row2[hipoclorito] - $hipoclorito;
          $nuevoPolicloruro = $row2[policloruro] - $policloruro;
          $nuevoGasClorolb = $row2[gasclorolb] - $gasclorolb;

          $sqlUpdate = ("UPDATE almacenes SET htacum = '$nuevoHtAcum', sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGas', cal = '$nuevoCal', clresidual = '$nuevoClresidual', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = '$sistema'");


          if(pg_query($sql)){
              if (pg_query($sqlUpdate)) {
                
              }else{
                echo "<script>alert('NO Actualizado!') </script>";
              }
              echo "<meta http-equiv='refresh' content='0,url=formato.php'>";
          }else{
            echo "<script>alert('Formato NO Registrado!') </script>";
            echo "<meta http-equiv='refresh' content='0,url=formato.php'>";
          }

   }else{
        $sql = ("INSERT INTO formato_diario (id_sistema, fecha, id_empleado, reporte) VALUES ('$sistema', '$fecha', '$idUsuario',false) ");
        if (pg_query($sql)) {
            echo "<meta http-equiv='refresh' content='0,url=formato.php'>";
        }else{
          echo "<script>alert('Formato NO Registrado!') </script>";
          echo "<meta http-equiv='refresh' content='0,url=formato.php'>";
        }
   }

      
       //determino si viene vacia la variable, y si es asi, le asigno cero para que no de error en BD
       

 ?>
