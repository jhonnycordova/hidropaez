<?php 
       include("../conex.php");
       include("seguridad.php");
       $idUsuario = $_POST["idUsuario"];
       $sistema = $_POST["sistema"];
       $fecha = $_POST["fecha"];


       //determino si viene vacia la variable, y si es asi, le asigno cero para que no de error en BD
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

       //recibiendo las variables que ya tenia, las viejas, las primeras cargadas

       

        $policloruro = $_POST["policloruro"];
       if (empty($policloruro)) {
            $policloruro = 0;
       }

        

       $gasclorolb = $_POST["gasclorolb"];
       if (empty($gasclorolb)) {
            $gasclorolb = 0;
       }

       

       $noReporto = $_POST["noReporto"];


       $observaciones = $_POST["observaciones"];


        //consulto los almacenes 
          $sql2 = ("SELECT * FROM almacenes where id_sistema = '$sistema'");
          $result2 = pg_query($sql2);
          $row2 = pg_fetch_array($result2);
       //calculos para actualizar los almacenes también

          $consulta = ("SELECT * from formato_diario where fecha = '$fecha' and id_sistema = '$sistema'");
          $resultConsulta = pg_query($consulta);
          $rowConsulta = pg_fetch_array($resultConsulta);

         
            $nuevoHtAcum = $row2[htacum] - $rowConsulta[ht]  + $ht;
            $nuevoSulfato = $row2[sulaluminio] + $rowConsulta[sulconsumido] - $sulconsumido;
            $nuevoGas = $row2[gascloro] +  $rowConsulta[gasconsumido] - $gasconsumido;
            $nuevoCal = $row2[cal] + $rowConsulta[calconsumido] - $calconsumido;
            $nuevoHipoclorito = $row2[hipoclorito] + $rowConsulta[hipoclorito] - $hipoclorito;
            
            $nuevoPolicloruro = $row2[policloruro] + $rowConsulta[policloruro] - $policloruro;
            $nuevoGasClorolb = $row2[gasclorolb] + $rowConsulta[gasclorolb] - $gasclorolb;
            
            $sql = ("UPDATE formato_diario set id_empleado = '$idUsuario', ht = '$ht', sulconsumido = '$sulconsumido', gasconsumido = '$gasconsumido', calconsumido = '$calconsumido', hipoclorito = '$hipoclorito',  fallaelectrica = '$fallaelectrica', fallamecanica = '$fallamecanica', procruda = '$procruda', procacum = '$procacum', propota = '$propota', propacum = '$propacum', observaciones = '$observaciones', policloruro = '$policloruro', reporte = true, gasclorolb = '$gasclorolb' where fecha = '$fecha' and id_sistema = '$sistema'  ");


        if ($noReporto == 'Si Reportó') {
            $nuevoHtAcum = $row2[htacum] - $rowConsulta[ht];
            $nuevoSulfato = $row2[sulaluminio] + $rowConsulta[sulconsumido];
            $nuevoGas = $row2[gascloro] +  $rowConsulta[gasconsumido];
            $nuevoCal = $row2[cal] + $rowConsulta[calconsumido];
            $nuevoHipoclorito = $row2[hipoclorito] + $rowConsulta[hipoclorito];
            
            $nuevoPolicloruro = $row2[policloruro] + $rowConsulta[policloruro];
            $nuevoGasClorolb= $row2[gasclorolb] + $rowConsulta[gasclorolb];
            $sql = ("UPDATE formato_diario set id_empleado = '$idUsuario', ht = 0, sulconsumido = 0, gasconsumido = 0, calconsumido = 0, hipoclorito = 0, fallaelectrica = 0, fallamecanica = 0, procruda = 0, procacum = 0, propota = 0, propacum = 0, observaciones = 0, policloruro = 0, reporte = false, gasclorolb = 0 where fecha = '$fecha' and id_sistema = '$sistema'  ");
        }
       
        $sqlUpdate = ("UPDATE almacenes SET htacum = '$nuevoHtAcum', sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGas', cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = '$sistema'");

        //actualizo el formato_sustancias
          $sql3 = ("SELECT * FROM formato_sustancias where fecha = '$fecha' and id_sistema = '$sistema'");
          $result3 = pg_query($sql3);
          $row3 = pg_fetch_array($result3);

          $nuevoSaldoGasCloro = $row3['saldo_gascloro'] + $rowConsulta['gasconsumido'] - $gasconsumido;
          $nuevoSaldoSulfato = $row3['saldo_sulfato'] + $rowConsulta['sulconsumido'] - $sulconsumido;
          $nuevoSaldoCal = $row3['saldo_cal'] + $rowConsulta['calconsumido'] - $calconsumido;
          $nuevoSaldoHipoclorito = $row3['saldo_hipoclorito'] + $rowConsulta['hipoclorito'] - $hipoclorito;
          $nuevoSaldoPoli = $row3['saldo_poli'] + $rowConsulta['policloruro'] - $policloruro;
          $nuevoSaldoGasClorolb = $row3['saldo_clorolb'] + $rowConsulta['gasclorolb'] - $gasclorolb;

          $sqlUpdateSustancias = ("UPDATE formato_sustancias set saldo_gascloro = '$nuevoSaldoGasCloro', saldo_sulfato = '$nuevoSaldoSulfato', saldo_cal = '$nuevoSaldoCal', saldo_hipoclorito = '$nuevoSaldoHipoclorito', saldo_poli = '$nuevoSaldoPoli', saldo_clorolb = '$nuevoSaldoGasClorolb' where fecha = '$fecha' and id_sistema = '$sistema' ");
          if (pg_query($sqlUpdateSustancias)) {
            
          }else{
            echo "<script>alert('NO Actualizado Sustancias!') </script>";
          }

       if(pg_query($sql)){
              if (pg_query($sqlUpdate)) {
        
                }else{
                  echo "<script>alert('NO Actualizado!') </script>";
                }
              echo "<script>alert('Modificacion Exitosa!') </script>";
              echo "<meta http-equiv='refresh' content='0,url=home.php'>";
       }else{
              echo "<script>alert('No Modificado!') </script>";
              echo "<meta http-equiv='refresh' content='0,url=formato.php'>";
       }


 ?>
