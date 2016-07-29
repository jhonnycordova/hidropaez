<?php 
     include("../conex.php");
     include("seguridad.php");
    	$idUsuario = $_POST["idUsuario"];
      $fecha = $_POST["fecha"];
      $contador = 0;

      //San Juan de los Morros
      $servicio_sanjuan = $_POST["servicio_sanjuan"];
      if (empty($servicio_sanjuan)) {
            $servicio_sanjuan = 0;
      }

      $danado_sanjuan = $_POST["danado_sanjuan"];
       if (empty($danado_sanjuan)) {
            $danado_sanjuan = 0;
      }

      $consmax_sanjuan = $_POST["consmax_sanjuan"];
       if (empty($consmax_sanjuan)) {
            $consmax_sanjuan = 0;
      }

      $recibido_gascloro_sanjuan = $_POST["recibido_gascloro_sanjuan"];
       if (empty($recibido_gascloro_sanjuan)) {
            $recibido_gascloro_sanjuan = 0;
      }

      $recibido_sulfato_sanjuan = $_POST["recibido_sulfato_sanjuan"];
      if (empty($recibido_sulfato_sanjuan)) {
            $recibido_sulfato_sanjuan = 0;
      }

      $recibido_cal_sanjuan = $_POST["recibido_cal_sanjuan"];
      if (empty($recibido_cal_sanjuan)) {
            $recibido_cal_sanjuan = 0;
      }

      $recibido_hipoclorito_sanjuan = $_POST["recibido_hipoclorito_sanjuan"];
      if (empty($recibido_hipoclorito_sanjuan)) {
            $recibido_hipoclorito_sanjuan = 0;
      }

      $recibido_poli_sanjuan = $_POST["recibido_poli_sanjuan"];
      if (empty($recibido_poli_sanjuan)) {
            $recibido_poli_sanjuan = 0;
      }

      $recibido_clorolb_sanjuan = $_POST["recibido_clorolb_sanjuan"];
       if (empty($recibido_clorolb_sanjuan)) {
            $recibido_clorolb_sanjuan = 0;
      }

      $traspasos_gascloro_sanjuan = $_POST["traspasos_gascloro_sanjuan"];
       if (empty($traspasos_gascloro_sanjuan)) {
            $traspasos_gascloro_sanjuan = 0;
      }

      $traspasos_sulfato_sanjuan = $_POST["traspasos_sulfato_sanjuan"];
      if (empty($traspasos_sulfato_sanjuan)) {
            $traspasos_sulfato_sanjuan = 0;
      }

      $traspasos_cal_sanjuan = $_POST["traspasos_cal_sanjuan"];
      if (empty($traspasos_cal_sanjuan)) {
            $traspasos_cal_sanjuan = 0;
      }

      $traspasos_hipoclorito_sanjuan = $_POST["traspasos_hipoclorito_sanjuan"];
      if (empty($traspasos_hipoclorito_sanjuan)) {
            $traspasos_hipoclorito_sanjuan = 0;
      }

      $traspasos_poli_sanjuan = $_POST["traspasos_poli_sanjuan"];
      if (empty($traspasos_poli_sanjuan)) {
            $traspasos_poli_sanjuan = 0;
      }

      $traspasos_clorolb_sanjuan = $_POST["traspasos_clorolb_sanjuan"];
      if (empty($traspasos_clorolb_sanjuan)) {
            $traspasos_clorolb_sanjuan = 0;
      }


      $aplicacion_gascloro_sanjuan = $_POST["aplicacion_gascloro_sanjuan"];
      if (empty($aplicacion_gascloro_sanjuan)) {
            $aplicacion_gascloro_sanjuan = 0;
      }

      $aplicacion_sulfato_sanjuan = $_POST["aplicacion_sulfato_sanjuan"];
       if (empty($aplicacion_sulfato_sanjuan)) {
            $aplicacion_sulfato_sanjuan = 0;
      }

      $aplicacion_cal_sanjuan = $_POST["aplicacion_cal_sanjuan"];
       if (empty($aplicacion_cal_sanjuan)) {
            $aplicacion_cal_sanjuan = 0;
      }

      $aplicacion_hipoclorito_sanjuan = $_POST["aplicacion_hipoclorito_sanjuan"];
       if (empty($aplicacion_hipoclorito_sanjuan)) {
            $aplicacion_hipoclorito_sanjuan = 0;
      }

      $aplicacion_poli_sanjuan = $_POST["aplicacion_poli_sanjuan"];
       if (empty($aplicacion_poli_sanjuan)) {
            $aplicacion_poli_sanjuan = 0;
      }

      $aplicacion_clorolb_sanjuan = $_POST["aplicacion_clorolb_sanjuan"];
       if (empty($aplicacion_clorolb_sanjuan)) {
            $aplicacion_clorolb_sanjuan = 0;
      }

      $duracion_gascloro_sanjuan = $_POST["duracion_gascloro_sanjuan"];
       if (empty($duracion_gascloro_sanjuan)) {
            $duracion_gascloro_sanjuan = 0;
      }

      $duracion_sulfato_sanjuan = $_POST["duracion_sulfato_sanjuan"];
      if (empty($duracion_sulfato_sanjuan)) {
            $duracion_sulfato_sanjuan = 0;
      }

      $duracion_cal_sanjuan = $_POST["duracion_cal_sanjuan"];
      if (empty($duracion_cal_sanjuan)) {
            $duracion_cal_sanjuan = 0;
      }

      $duracion_hipoclorito_sanjuan = $_POST["duracion_hipoclorito_sanjuan"];
      if (empty($duracion_hipoclorito_sanjuan)) {
            $duracion_hipoclorito_sanjuan = 0;
      }

      $duracion_poli_sanjuan = $_POST["duracion_poli_sanjuan"];
      if (empty($duracion_poli_sanjuan)) {
            $duracion_poli_sanjuan = 0;
      }

      $duracion_clorolb_sanjuan = $_POST["duracion_clorolb_sanjuan"];
      if (empty($duracion_clorolb_sanjuan)) {
            $duracion_clorolb_sanjuan = 0;
      }

      $saldo_gascloro_sanjuan = $_POST["saldo_gascloro_sanjuan"];
      if (empty($saldo_gascloro_sanjuan)) {
            $saldo_gascloro_sanjuan = 0;
      }

      $saldo_sulfato_sanjuan = $_POST["saldo_sulfato_sanjuan"];
      if (empty($saldo_sulfato_sanjuan)) {
            $saldo_sulfato_sanjuan = 0;
      }

      $saldo_cal_sanjuan = $_POST["saldo_cal_sanjuan"];
      if (empty($saldo_cal_sanjuan)) {
            $saldo_cal_sanjuan = 0;
      }

      $saldo_hipoclorito_sanjuan = $_POST["saldo_hipoclorito_sanjuan"];
      if (empty($saldo_hipoclorito_sanjuan)) {
            $saldo_hipoclorito_sanjuan = 0;
      }

      $saldo_poli_sanjuan = $_POST["saldo_poli_sanjuan"];
      if (empty($saldo_poli_sanjuan)) {
            $saldo_poli_sanjuan = 0;
      }

      $saldo_clorolb_sanjuan = $_POST["saldo_clorolb_sanjuan"];
      if (empty($saldo_clorolb_sanjuan)) {
            $saldo_clorolb_sanjuan = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSanJuan = ("SELECT * FROM formato_diario where id_sistema = 1 and fecha = '$fecha'");
      $resultSanJuan = pg_query($sqlSanJuan);
      $rowSanJuan = pg_fetch_array($resultSanJuan);

                  $AlmacenSanJuan = ("SELECT * FROM almacenes where id_sistema = 1");
                  $resultAlmacenSanJuan = pg_query($AlmacenSanJuan);
                  $rowAlmacenSanJuan = pg_fetch_array($resultAlmacenSanJuan);
                  $cilindros_llenos_sanjuan = $rowAlmacenSanJuan[cilindros_llenos];
                  $cilindros_vacios_sanjuan = $rowAlmacenSanJuan[cilindros_vacios];

      if ($rowSanJuan['reporte'] == 't') {
            $SanJuan = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (1, '$fecha',
               '$idUsuario', '$servicio_sanjuan', '$danado_sanjuan', '$consmax_sanjuan',
                '$recibido_gascloro_sanjuan', '$recibido_sulfato_sanjuan', '$recibido_cal_sanjuan', 
                '$recibido_hipoclorito_sanjuan', '$recibido_poli_sanjuan', '$recibido_clorolb_sanjuan',
                 '$traspasos_gascloro_sanjuan', '$traspasos_sulfato_sanjuan', '$traspasos_cal_sanjuan', 
                 '$traspasos_hipoclorito_sanjuan', '$traspasos_poli_sanjuan', '$traspasos_clorolb_sanjuan',
                  '$aplicacion_gascloro_sanjuan', '$aplicacion_sulfato_sanjuan', '$aplicacion_cal_sanjuan', 
                  '$aplicacion_hipoclorito_sanjuan', '$aplicacion_poli_sanjuan', '$aplicacion_clorolb_sanjuan', 
                  '$duracion_gascloro_sanjuan', '$duracion_sulfato_sanjuan', '$duracion_cal_sanjuan',
                   '$duracion_hipoclorito_sanjuan', '$duracion_poli_sanjuan', '$duracion_clorolb_sanjuan', '$cilindros_llenos_sanjuan', '$cilindros_vacios_sanjuan', '$saldo_gascloro_sanjuan', '$saldo_sulfato_sanjuan', '$saldo_cal_sanjuan', '$saldo_hipoclorito_sanjuan', '$saldo_poli_sanjuan', '$saldo_clorolb_sanjuan')");
            if (pg_query($SanJuan)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenSanJuan['sulaluminio'] + $recibido_sulfato_sanjuan - $traspasos_sulfato_sanjuan;
                  $nuevoGascloro = $rowAlmacenSanJuan['gascloro'] + $recibido_gascloro_sanjuan - $traspasos_gascloro_sanjuan;
                  $nuevoCal = $rowAlmacenSanJuan['cal'] + $recibido_cal_sanjuan - $traspasos_cal_sanjuan;
                  $nuevoHipoclorito = $rowAlmacenSanJuan['hipoclorito'] + $recibido_hipoclorito_sanjuan - $traspasos_hipoclorito_sanjuan;
                  $nuevoPolicloruro = $rowAlmacenSanJuan['policloruro'] + $recibido_poli_sanjuan - $traspasos_poli_sanjuan;
                  $nuevoGasClorolb = $rowAlmacenSanJuan['gasclorolb'] + $recibido_clorolb_sanjuan - $traspasos_clorolb_sanjuan;

                  $updateAlmacenSanJuan = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro', cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 1 ");
                  if (pg_query($updateAlmacenSanJuan)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de San Juan!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada San Juan!') </script>";
            }
      }else{
            $SanJuan = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (1, '$fecha', '$idUsuario')");
            if (pg_query($SanJuan)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  San Juan!') </script>";
            }
      }



      //Calabozo  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_calabozo = $_POST["servicio_calabozo"];
      if (empty($servicio_calabozo)) {
            $servicio_calabozo = 0;
      }

      $danado_calabozo = $_POST["danado_calabozo"];
       if (empty($danado_calabozo)) {
            $danado_calabozo = 0;
      }

      $consmax_calabozo = $_POST["consmax_calabozo"];
       if (empty($consmax_calabozo)) {
            $consmax_calabozo = 0;
      }

      $recibido_gascloro_calabozo = $_POST["recibido_gascloro_calabozo"];
       if (empty($recibido_gascloro_calabozo)) {
            $recibido_gascloro_calabozo = 0;
      }

      $recibido_sulfato_calabozo = $_POST["recibido_sulfato_calabozo"];
      if (empty($recibido_sulfato_calabozo)) {
            $recibido_sulfato_calabozo = 0;
      }

      $recibido_cal_calabozo = $_POST["recibido_cal_calabozo"];
      if (empty($recibido_cal_calabozo)) {
            $recibido_cal_calabozo = 0;
      }

      $recibido_hipoclorito_calabozo = $_POST["recibido_hipoclorito_calabozo"];
      if (empty($recibido_hipoclorito_calabozo)) {
            $recibido_hipoclorito_calabozo = 0;
      }

      $recibido_poli_calabozo = $_POST["recibido_poli_calabozo"];
      if (empty($recibido_poli_calabozo)) {
            $recibido_poli_calabozo = 0;
      }

      $recibido_clorolb_calabozo = $_POST["recibido_clorolb_calabozo"];
       if (empty($recibido_clorolb_calabozo)) {
            $recibido_clorolb_calabozo = 0;
      }

      $traspasos_gascloro_calabozo = $_POST["traspasos_gascloro_calabozo"];
       if (empty($traspasos_gascloro_calabozo)) {
            $traspasos_gascloro_calabozo = 0;
      }

      $traspasos_sulfato_calabozo = $_POST["traspasos_sulfato_calabozo"];
      if (empty($traspasos_sulfato_calabozo)) {
            $traspasos_sulfato_calabozo = 0;
      }

      $traspasos_cal_calabozo = $_POST["traspasos_cal_calabozo"];
      if (empty($traspasos_cal_calabozo)) {
            $traspasos_cal_calabozo = 0;
      }

      $traspasos_hipoclorito_calabozo = $_POST["traspasos_hipoclorito_calabozo"];
      if (empty($traspasos_hipoclorito_calabozo)) {
            $traspasos_hipoclorito_calabozo = 0;
      }

      $traspasos_poli_calabozo = $_POST["traspasos_poli_calabozo"];
      if (empty($traspasos_poli_calabozo)) {
            $traspasos_poli_calabozo = 0;
      }

      $traspasos_clorolb_calabozo = $_POST["traspasos_clorolb_calabozo"];
      if (empty($traspasos_clorolb_calabozo)) {
            $traspasos_clorolb_calabozo = 0;
      }


      $aplicacion_gascloro_calabozo = $_POST["aplicacion_gascloro_calabozo"];
      if (empty($aplicacion_gascloro_calabozo)) {
            $aplicacion_gascloro_calabozo = 0;
      }

      $aplicacion_sulfato_calabozo = $_POST["aplicacion_sulfato_calabozo"];
       if (empty($aplicacion_sulfato_calabozo)) {
            $aplicacion_sulfato_calabozo = 0;
      }

      $aplicacion_cal_calabozo = $_POST["aplicacion_cal_calabozo"];
       if (empty($aplicacion_cal_calabozo)) {
            $aplicacion_cal_calabozo = 0;
      }

      $aplicacion_hipoclorito_calabozo = $_POST["aplicacion_hipoclorito_calabozo"];
       if (empty($aplicacion_hipoclorito_calabozo)) {
            $aplicacion_hipoclorito_calabozo = 0;
      }

      $aplicacion_poli_calabozo = $_POST["aplicacion_poli_calabozo"];
       if (empty($aplicacion_poli_calabozo)) {
            $aplicacion_poli_calabozo = 0;
      }

      $aplicacion_clorolb_calabozo = $_POST["aplicacion_clorolb_calabozo"];
       if (empty($aplicacion_clorolb_calabozo)) {
            $aplicacion_clorolb_calabozo = 0;
      }

      $duracion_gascloro_calabozo = $_POST["duracion_gascloro_calabozo"];
       if (empty($duracion_gascloro_calabozo)) {
            $duracion_gascloro_calabozo = 0;
      }

      $duracion_sulfato_calabozo = $_POST["duracion_sulfato_calabozo"];
      if (empty($duracion_sulfato_calabozo)) {
            $duracion_sulfato_calabozo = 0;
      }

      $duracion_cal_calabozo = $_POST["duracion_cal_calabozo"];
      if (empty($duracion_cal_calabozo)) {
            $duracion_cal_calabozo = 0;
      }

      $duracion_hipoclorito_calabozo = $_POST["duracion_hipoclorito_calabozo"];
      if (empty($duracion_hipoclorito_calabozo)) {
            $duracion_hipoclorito_calabozo = 0;
      }

      $duracion_poli_calabozo = $_POST["duracion_poli_calabozo"];
      if (empty($duracion_poli_calabozo)) {
            $duracion_poli_calabozo = 0;
      }

      $duracion_clorolb_calabozo = $_POST["duracion_clorolb_calabozo"];
      if (empty($duracion_clorolb_calabozo)) {
            $duracion_clorolb_calabozo = 0;
      }

      $saldo_gascloro_calabozo = $_POST["saldo_gascloro_calabozo"];
      if (empty($saldo_gascloro_calabozo)) {
            $saldo_gascloro_calabozo = 0;
      }

      $saldo_sulfato_calabozo = $_POST["saldo_sulfato_calabozo"];
      if (empty($saldo_sulfato_calabozo)) {
            $saldo_sulfato_calabozo = 0;
      }

      $saldo_cal_calabozo = $_POST["saldo_cal_calabozo"];
      if (empty($saldo_cal_calabozo)) {
            $saldo_cal_calabozo = 0;
      }

      $saldo_hipoclorito_calabozo = $_POST["saldo_hipoclorito_calabozo"];
      if (empty($saldo_hipoclorito_calabozo)) {
            $saldo_hipoclorito_calabozo = 0;
      }

      $saldo_poli_calabozo = $_POST["saldo_poli_calabozo"];
      if (empty($saldo_poli_calabozo)) {
            $saldo_poli_calabozo = 0;
      }

      $saldo_clorolb_calabozo = $_POST["saldo_clorolb_calabozo"];
      if (empty($saldo_clorolb_calabozo)) {
            $saldo_clorolb_calabozo = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlCalabozo = ("SELECT * FROM formato_diario where id_sistema = 2 and fecha = '$fecha'");
      $resultCalabozo = pg_query($sqlCalabozo);
      $rowCalabozo = pg_fetch_array($resultCalabozo);

                  $AlmacenCalabozo = ("SELECT * FROM almacenes where id_sistema = 2");
                  $resultAlmacenCalabozo = pg_query($AlmacenCalabozo);
                  $rowAlmacenCalabozo = pg_fetch_array($resultAlmacenCalabozo);
                  $cilindros_llenos_calabozo = $rowAlmacenCalabozo[cilindros_llenos];
                  $cilindros_vacios_calabozo = $rowAlmacenCalabozo[cilindros_vacios];


      if ($rowCalabozo['reporte'] == 't') {
            $Calabozo = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (2, '$fecha',
               '$idUsuario', '$servicio_calabozo', '$danado_calabozo', '$consmax_calabozo',
                '$recibido_gascloro_calabozo', '$recibido_sulfato_calabozo', '$recibido_cal_calabozo', 
                '$recibido_hipoclorito_calabozo', '$recibido_poli_calabozo', '$recibido_clorolb_calabozo',
                 '$traspasos_gascloro_calabozo', '$traspasos_sulfato_calabozo', '$traspasos_cal_calabozo', 
                 '$traspasos_hipoclorito_calabozo', '$traspasos_poli_calabozo', '$traspasos_clorolb_calabozo',
                  '$aplicacion_gascloro_calabozo', '$aplicacion_sulfato_calabozo', '$aplicacion_cal_calabozo', 
                  '$aplicacion_hipoclorito_calabozo', '$aplicacion_poli_calabozo', '$aplicacion_clorolb_calabozo', 
                  '$duracion_gascloro_calabozo', '$duracion_sulfato_calabozo', '$duracion_cal_calabozo',
                   '$duracion_hipoclorito_calabozo', '$duracion_poli_calabozo', '$duracion_clorolb_calabozo', '$cilindros_llenos_calabozo', '$cilindros_vacios_calabozo', '$saldo_gascloro_calabozo', '$saldo_sulfato_calabozo', '$saldo_cal_calabozo', '$saldo_hipoclorito_calabozo', '$saldo_poli_calabozo', '$saldo_clorolb_calabozo')");
            if (pg_query($Calabozo)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenCalabozo['sulaluminio'] + $recibido_sulfato_calabozo - $traspasos_sulfato_calabozo;
                  $nuevoGascloro = $rowAlmacenCalabozo['gascloro'] + $recibido_gascloro_calabozo - $traspasos_gascloro_calabozo;
                  $nuevoCal = $rowAlmacenCalabozo['cal'] + $recibido_cal_calabozo - $traspasos_cal_calabozo;
                  $nuevoHipoclorito = $rowAlmacenCalabozo['hipoclorito'] + $recibido_hipoclorito_calabozo - $traspasos_hipoclorito_calabozo;
                  $nuevoPolicloruro = $rowAlmacenCalabozo['policloruro'] + $recibido_poli_calabozo - $traspasos_poli_calabozo;
                  $nuevoGasClorolb = $rowAlmacenCalabozo['gasclorolb'] + $recibido_clorolb_calabozo - $traspasos_clorolb_calabozo;

                  $updateAlmacenCalabozo = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro', cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 2 ");
                  if (pg_query($updateAlmacenCalabozo)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Calabozo!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Calabozo!') </script>";
            }
      }else{
            $Calabozo = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (2, '$fecha', '$idUsuario')");
            if (pg_query($Calabozo)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  CALABOZO!') </script>";
            }
      }


       //Altagracia de Orituco  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_altagracia = $_POST["servicio_altagracia"];
      if (empty($servicio_altagracia)) {
            $servicio_altagracia = 0;
      }

      $danado_altagracia = $_POST["danado_altagracia"];
       if (empty($danado_altagracia)) {
            $danado_altagracia = 0;
      }

      $consmax_altagracia = $_POST["consmax_altagracia"];
       if (empty($consmax_altagracia)) {
            $consmax_altagracia = 0;
      }

      $recibido_gascloro_altagracia = $_POST["recibido_gascloro_altagracia"];
       if (empty($recibido_gascloro_altagracia)) {
            $recibido_gascloro_altagracia = 0;
      }

      $recibido_sulfato_altagracia = $_POST["recibido_sulfato_altagracia"];
      if (empty($recibido_sulfato_altagracia)) {
            $recibido_sulfato_altagracia = 0;
      }

      $recibido_cal_altagracia = $_POST["recibido_cal_altagracia"];
      if (empty($recibido_cal_altagracia)) {
            $recibido_cal_altagracia = 0;
      }

      $recibido_hipoclorito_altagracia = $_POST["recibido_hipoclorito_altagracia"];
      if (empty($recibido_hipoclorito_altagracia)) {
            $recibido_hipoclorito_altagracia = 0;
      }

      $recibido_poli_altagracia = $_POST["recibido_poli_altagracia"];
      if (empty($recibido_poli_altagracia)) {
            $recibido_poli_altagracia = 0;
      }

      $recibido_clorolb_altagracia = $_POST["recibido_clorolb_altagracia"];
       if (empty($recibido_clorolb_altagracia)) {
            $recibido_clorolb_altagracia = 0;
      }

      $traspasos_gascloro_altagracia = $_POST["traspasos_gascloro_altagracia"];
       if (empty($traspasos_gascloro_altagracia)) {
            $traspasos_gascloro_altagracia = 0;
      }

      $traspasos_sulfato_altagracia = $_POST["traspasos_sulfato_altagracia"];
      if (empty($traspasos_sulfato_altagracia)) {
            $traspasos_sulfato_altagracia = 0;
      }

      $traspasos_cal_altagracia = $_POST["traspasos_cal_altagracia"];
      if (empty($traspasos_cal_altagracia)) {
            $traspasos_cal_altagracia = 0;
      }

      $traspasos_hipoclorito_altagracia = $_POST["traspasos_hipoclorito_altagracia"];
      if (empty($traspasos_hipoclorito_altagracia)) {
            $traspasos_hipoclorito_altagracia = 0;
      }

      $traspasos_poli_altagracia = $_POST["traspasos_poli_altagracia"];
      if (empty($traspasos_poli_altagracia)) {
            $traspasos_poli_altagracia = 0;
      }

      $traspasos_clorolb_altagracia = $_POST["traspasos_clorolb_altagracia"];
      if (empty($traspasos_clorolb_altagracia)) {
            $traspasos_clorolb_altagracia = 0;
      }


      $aplicacion_gascloro_altagracia = $_POST["aplicacion_gascloro_altagracia"];
      if (empty($aplicacion_gascloro_altagracia)) {
            $aplicacion_gascloro_altagracia = 0;
      }

      $aplicacion_sulfato_altagracia = $_POST["aplicacion_sulfato_altagracia"];
       if (empty($aplicacion_sulfato_altagracia)) {
            $aplicacion_sulfato_altagracia = 0;
      }

      $aplicacion_cal_altagracia = $_POST["aplicacion_cal_altagracia"];
       if (empty($aplicacion_cal_altagracia)) {
            $aplicacion_cal_altagracia = 0;
      }

      $aplicacion_hipoclorito_altagracia = $_POST["aplicacion_hipoclorito_altagracia"];
       if (empty($aplicacion_hipoclorito_altagracia)) {
            $aplicacion_hipoclorito_altagracia = 0;
      }

      $aplicacion_poli_altagracia = $_POST["aplicacion_poli_altagracia"];
       if (empty($aplicacion_poli_altagracia)) {
            $aplicacion_poli_altagracia = 0;
      }

      $aplicacion_clorolb_altagracia = $_POST["aplicacion_clorolb_altagracia"];
       if (empty($aplicacion_clorolb_altagracia)) {
            $aplicacion_clorolb_altagracia = 0;
      }

      $duracion_gascloro_altagracia = $_POST["duracion_gascloro_altagracia"];
       if (empty($duracion_gascloro_altagracia)) {
            $duracion_gascloro_altagracia = 0;
      }

      $duracion_sulfato_altagracia = $_POST["duracion_sulfato_altagracia"];
      if (empty($duracion_sulfato_altagracia)) {
            $duracion_sulfato_altagracia = 0;
      }

      $duracion_cal_altagracia = $_POST["duracion_cal_altagracia"];
      if (empty($duracion_cal_altagracia)) {
            $duracion_cal_altagracia = 0;
      }

      $duracion_hipoclorito_altagracia = $_POST["duracion_hipoclorito_altagracia"];
      if (empty($duracion_hipoclorito_altagracia)) {
            $duracion_hipoclorito_altagracia = 0;
      }

      $duracion_poli_altagracia = $_POST["duracion_poli_altagracia"];
      if (empty($duracion_poli_altagracia)) {
            $duracion_poli_altagracia = 0;
      }

      $duracion_clorolb_altagracia = $_POST["duracion_clorolb_altagracia"];
      if (empty($duracion_clorolb_altagracia)) {
            $duracion_clorolb_altagracia = 0;
      }

      $saldo_gascloro_altagracia = $_POST["saldo_gascloro_altagracia"];
      if (empty($saldo_gascloro_altagracia)) {
            $saldo_gascloro_altagracia = 0;
      }

      $saldo_sulfato_altagracia = $_POST["saldo_sulfato_altagracia"];
      if (empty($saldo_sulfato_altagracia)) {
            $saldo_sulfato_altagracia = 0;
      }

      $saldo_cal_altagracia = $_POST["saldo_cal_altagracia"];
      if (empty($saldo_cal_altagracia)) {
            $saldo_cal_altagracia = 0;
      }

      $saldo_hipoclorito_altagracia = $_POST["saldo_hipoclorito_altagracia"];
      if (empty($saldo_hipoclorito_altagracia)) {
            $saldo_hipoclorito_altagracia = 0;
      }

      $saldo_poli_altagracia = $_POST["saldo_poli_altagracia"];
      if (empty($saldo_poli_altagracia)) {
            $saldo_poli_altagracia = 0;
      }

      $saldo_clorolb_altagracia = $_POST["saldo_clorolb_altagracia"];
      if (empty($saldo_clorolb_altagracia)) {
            $saldo_clorolb_altagracia = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlAltagracia = ("SELECT * FROM formato_diario where id_sistema = 3 and fecha = '$fecha'");
      $resultAltagracia = pg_query($sqlAltagracia);
      $rowAltagracia = pg_fetch_array($resultAltagracia);

                 $AlmacenAltagracia = ("SELECT * FROM almacenes where id_sistema = 3");
                  $resultAlmacenAltagracia = pg_query($AlmacenAltagracia);
                  $rowAlmacenAltagracia = pg_fetch_array($resultAlmacenAltagracia);
                  $cilindros_llenos_altagracia = $rowAlmacenAltagracia[cilindros_llenos];
                  $cilindros_vacios_altagracia = $rowAlmacenAltagracia[cilindros_vacios];

      if ($rowAltagracia['reporte'] == 't') {
            $Altagracia = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (3, '$fecha',
               '$idUsuario', '$servicio_altagracia', '$danado_altagracia', '$consmax_altagracia',
                '$recibido_gascloro_altagracia', '$recibido_sulfato_altagracia', '$recibido_cal_altagracia', 
                '$recibido_hipoclorito_altagracia', '$recibido_poli_altagracia', '$recibido_clorolb_altagracia',
                 '$traspasos_gascloro_altagracia', '$traspasos_sulfato_altagracia', '$traspasos_cal_altagracia', 
                 '$traspasos_hipoclorito_altagracia', '$traspasos_poli_altagracia', '$traspasos_clorolb_altagracia',
                  '$aplicacion_gascloro_altagracia', '$aplicacion_sulfato_altagracia', '$aplicacion_cal_altagracia', 
                  '$aplicacion_hipoclorito_altagracia', '$aplicacion_poli_altagracia', '$aplicacion_clorolb_altagracia', 
                  '$duracion_gascloro_altagracia', '$duracion_sulfato_altagracia', '$duracion_cal_altagracia',
                   '$duracion_hipoclorito_altagracia', '$duracion_poli_altagracia', '$duracion_clorolb_altagracia', '$cilindros_llenos_altagracia', '$cilindros_vacios_altagracia', '$saldo_gascloro_altagracia', '$saldo_sulfato_altagracia', '$saldo_cal_altagracia', '$saldo_hipoclorito_altagracia', '$saldo_poli_altagracia', '$saldo_clorolb_altagracia')");
            if (pg_query($Altagracia)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenAltagracia['sulaluminio'] + $recibido_sulfato_altagracia - $traspasos_sulfato_altagracia;
                  $nuevoGascloro = $rowAlmacenAltagracia['gascloro'] + $recibido_gascloro_altagracia - $traspasos_gascloro_altagracia;
                  $nuevoCal = $rowAlmacenAltagracia['cal'] + $recibido_cal_altagracia - $traspasos_cal_altagracia;
                  $nuevoHipoclorito = $rowAlmacenAltagracia['hipoclorito'] + $recibido_hipoclorito_altagracia - $traspasos_hipoclorito_altagracia;
                  $nuevoPolicloruro = $rowAlmacenAltagracia['policloruro'] + $recibido_poli_altagracia - $traspasos_poli_altagracia;
                  $nuevoGasClorolb = $rowAlmacenAltagracia['gasclorolb'] + $recibido_clorolb_altagracia - $traspasos_clorolb_altagracia;

                  $updateAlmacenAltagracia = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 3");
                  if (pg_query($updateAlmacenAltagracia)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Altagracia!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Altagracia!') </script>";
            }
      }else{
            $Altagracia = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (3, '$fecha', '$idUsuario')");
            if (pg_query($Altagracia)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Altagracia!') </script>";
            }
      }



       //Valle de la Pascua  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_valle = $_POST["servicio_valle"];
      if (empty($servicio_valle)) {
            $servicio_valle = 0;
      }

      $danado_valle = $_POST["danado_valle"];
       if (empty($danado_valle)) {
            $danado_valle = 0;
      }

      $consmax_valle = $_POST["consmax_valle"];
       if (empty($consmax_valle)) {
            $consmax_valle = 0;
      }

      $recibido_gascloro_valle = $_POST["recibido_gascloro_valle"];
       if (empty($recibido_gascloro_valle)) {
            $recibido_gascloro_valle = 0;
      }

      $recibido_sulfato_valle = $_POST["recibido_sulfato_valle"];
      if (empty($recibido_sulfato_valle)) {
            $recibido_sulfato_valle = 0;
      }

      $recibido_cal_valle = $_POST["recibido_cal_valle"];
      if (empty($recibido_cal_valle)) {
            $recibido_cal_valle = 0;
      }

      $recibido_hipoclorito_valle = $_POST["recibido_hipoclorito_valle"];
      if (empty($recibido_hipoclorito_valle)) {
            $recibido_hipoclorito_valle = 0;
      }

      $recibido_poli_valle = $_POST["recibido_poli_valle"];
      if (empty($recibido_poli_valle)) {
            $recibido_poli_valle = 0;
      }

      $recibido_clorolb_valle = $_POST["recibido_clorolb_valle"];
       if (empty($recibido_clorolb_valle)) {
            $recibido_clorolb_valle = 0;
      }

      $traspasos_gascloro_valle = $_POST["traspasos_gascloro_valle"];
       if (empty($traspasos_gascloro_valle)) {
            $traspasos_gascloro_valle = 0;
      }

      $traspasos_sulfato_valle = $_POST["traspasos_sulfato_valle"];
      if (empty($traspasos_sulfato_valle)) {
            $traspasos_sulfato_valle = 0;
      }

      $traspasos_cal_valle = $_POST["traspasos_cal_valle"];
      if (empty($traspasos_cal_valle)) {
            $traspasos_cal_valle = 0;
      }

      $traspasos_hipoclorito_valle = $_POST["traspasos_hipoclorito_valle"];
      if (empty($traspasos_hipoclorito_valle)) {
            $traspasos_hipoclorito_valle = 0;
      }

      $traspasos_poli_valle = $_POST["traspasos_poli_valle"];
      if (empty($traspasos_poli_valle)) {
            $traspasos_poli_valle = 0;
      }

      $traspasos_clorolb_valle = $_POST["traspasos_clorolb_valle"];
      if (empty($traspasos_clorolb_valle)) {
            $traspasos_clorolb_valle = 0;
      }


      $aplicacion_gascloro_valle = $_POST["aplicacion_gascloro_valle"];
      if (empty($aplicacion_gascloro_valle)) {
            $aplicacion_gascloro_valle = 0;
      }

      $aplicacion_sulfato_valle = $_POST["aplicacion_sulfato_valle"];
       if (empty($aplicacion_sulfato_valle)) {
            $aplicacion_sulfato_valle = 0;
      }

      $aplicacion_cal_valle = $_POST["aplicacion_cal_valle"];
       if (empty($aplicacion_cal_valle)) {
            $aplicacion_cal_valle = 0;
      }

      $aplicacion_hipoclorito_valle = $_POST["aplicacion_hipoclorito_valle"];
       if (empty($aplicacion_hipoclorito_valle)) {
            $aplicacion_hipoclorito_valle = 0;
      }

      $aplicacion_poli_valle = $_POST["aplicacion_poli_valle"];
       if (empty($aplicacion_poli_valle)) {
            $aplicacion_poli_valle = 0;
      }

      $aplicacion_clorolb_valle = $_POST["aplicacion_clorolb_valle"];
       if (empty($aplicacion_clorolb_valle)) {
            $aplicacion_clorolb_valle = 0;
      }

      $duracion_gascloro_valle = $_POST["duracion_gascloro_valle"];
       if (empty($duracion_gascloro_valle)) {
            $duracion_gascloro_valle = 0;
      }

      $duracion_sulfato_valle = $_POST["duracion_sulfato_valle"];
      if (empty($duracion_sulfato_valle)) {
            $duracion_sulfato_valle = 0;
      }

      $duracion_cal_valle = $_POST["duracion_cal_valle"];
      if (empty($duracion_cal_valle)) {
            $duracion_cal_valle = 0;
      }

      $duracion_hipoclorito_valle = $_POST["duracion_hipoclorito_valle"];
      if (empty($duracion_hipoclorito_valle)) {
            $duracion_hipoclorito_valle = 0;
      }

      $duracion_poli_valle = $_POST["duracion_poli_valle"];
      if (empty($duracion_poli_valle)) {
            $duracion_poli_valle = 0;
      }

      $duracion_clorolb_valle = $_POST["duracion_clorolb_valle"];
      if (empty($duracion_clorolb_valle)) {
            $duracion_clorolb_valle = 0;
      }

       $saldo_gascloro_valle = $_POST["saldo_gascloro_valle"];
      if (empty($saldo_gascloro_valle)) {
            $saldo_gascloro_valle = 0;
      }

      $saldo_sulfato_valle = $_POST["saldo_sulfato_valle"];
      if (empty($saldo_sulfato_valle)) {
            $saldo_sulfato_valle = 0;
      }

      $saldo_cal_valle = $_POST["saldo_cal_valle"];
      if (empty($saldo_cal_valle)) {
            $saldo_cal_valle = 0;
      }

      $saldo_hipoclorito_valle = $_POST["saldo_hipoclorito_valle"];
      if (empty($saldo_hipoclorito_valle)) {
            $saldo_hipoclorito_valle = 0;
      }

      $saldo_poli_valle = $_POST["saldo_poli_valle"];
      if (empty($saldo_poli_valle)) {
            $saldo_poli_valle = 0;
      }

      $saldo_clorolb_valle = $_POST["saldo_clorolb_valle"];
      if (empty($saldo_clorolb_valle)) {
            $saldo_clorolb_valle = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlValle = ("SELECT * FROM formato_diario where id_sistema = 4 and fecha = '$fecha'");
      $resultValle = pg_query($sqlValle);
      $rowValle = pg_fetch_array($resultValle);

                  $AlmacenValle = ("SELECT * FROM almacenes where id_sistema = 4");
                  $resultAlmacenValle = pg_query($AlmacenValle);
                  $rowAlmacenValle = pg_fetch_array($resultAlmacenValle);
                  $cilindros_llenos_valle = $rowAlmacenValle[cilindros_llenos];
                  $cilindros_vacios_valle = $rowAlmacenValle[cilindros_vacios];

      if ($rowValle['reporte'] == 't') {
            $Valle = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (4, '$fecha',
               '$idUsuario', '$servicio_valle', '$danado_valle', '$consmax_valle',
                '$recibido_gascloro_valle', '$recibido_sulfato_valle', '$recibido_cal_valle', 
                '$recibido_hipoclorito_valle', '$recibido_poli_valle', '$recibido_clorolb_valle',
                 '$traspasos_gascloro_valle', '$traspasos_sulfato_valle', '$traspasos_cal_valle', 
                 '$traspasos_hipoclorito_valle', '$traspasos_poli_valle', '$traspasos_clorolb_valle',
                  '$aplicacion_gascloro_valle', '$aplicacion_sulfato_valle', '$aplicacion_cal_valle', 
                  '$aplicacion_hipoclorito_valle', '$aplicacion_poli_valle', '$aplicacion_clorolb_valle', 
                  '$duracion_gascloro_valle', '$duracion_sulfato_valle', '$duracion_cal_valle',
                   '$duracion_hipoclorito_valle', '$duracion_poli_valle', '$duracion_clorolb_valle', '$cilindros_llenos_valle', '$cilindros_vacios_valle', '$saldo_gascloro_valle', '$saldo_sulfato_valle', '$saldo_cal_valle', '$saldo_hipoclorito_valle', '$saldo_poli_valle', '$saldo_clorolb_valle')");
            if (pg_query($Valle)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenValle['sulaluminio'] + $recibido_sulfato_valle - $traspasos_sulfato_valle;
                  $nuevoGascloro = $rowAlmacenValle['gascloro'] + $recibido_gascloro_valle - $traspasos_gascloro_valle;
                  $nuevoCal = $rowAlmacenValle['cal'] + $recibido_cal_valle - $traspasos_cal_valle;
                  $nuevoHipoclorito = $rowAlmacenValle['hipoclorito'] + $recibido_hipoclorito_valle - $traspasos_hipoclorito_valle;
                  $nuevoPolicloruro = $rowAlmacenValle['policloruro'] + $recibido_poli_valle - $traspasos_poli_valle;
                  $nuevoGasClorolb = $rowAlmacenValle['gasclorolb'] + $recibido_clorolb_valle - $traspasos_clorolb_valle;

                  $updateAlmacenValle = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 4");
                  if (pg_query($updateAlmacenValle)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Valle!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Valle!') </script>";
            }
      }else{
            $Valle = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (4, '$fecha', '$idUsuario')");
            if (pg_query($Valle)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Valle!') </script>";
            }
      }

        //Tucupido  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_tucupido = $_POST["servicio_tucupido"];
      if (empty($servicio_tucupido)) {
            $servicio_tucupido = 0;
      }

      $danado_tucupido = $_POST["danado_tucupido"];
       if (empty($danado_tucupido)) {
            $danado_tucupido = 0;
      }

      $consmax_tucupido = $_POST["consmax_tucupido"];
       if (empty($consmax_tucupido)) {
            $consmax_tucupido = 0;
      }

      $recibido_gascloro_tucupido = $_POST["recibido_gascloro_tucupido"];
       if (empty($recibido_gascloro_tucupido)) {
            $recibido_gascloro_tucupido = 0;
      }

      $recibido_sulfato_tucupido = $_POST["recibido_sulfato_tucupido"];
      if (empty($recibido_sulfato_tucupido)) {
            $recibido_sulfato_tucupido = 0;
      }

      $recibido_cal_tucupido = $_POST["recibido_cal_tucupido"];
      if (empty($recibido_cal_tucupido)) {
            $recibido_cal_tucupido = 0;
      }

      $recibido_hipoclorito_tucupido = $_POST["recibido_hipoclorito_tucupido"];
      if (empty($recibido_hipoclorito_tucupido)) {
            $recibido_hipoclorito_tucupido = 0;
      }

      $recibido_poli_tucupido = $_POST["recibido_poli_tucupido"];
      if (empty($recibido_poli_tucupido)) {
            $recibido_poli_tucupido = 0;
      }

      $recibido_clorolb_tucupido = $_POST["recibido_clorolb_tucupido"];
       if (empty($recibido_clorolb_tucupido)) {
            $recibido_clorolb_tucupido = 0;
      }

      $traspasos_gascloro_tucupido = $_POST["traspasos_gascloro_tucupido"];
       if (empty($traspasos_gascloro_tucupido)) {
            $traspasos_gascloro_tucupido = 0;
      }

      $traspasos_sulfato_tucupido = $_POST["traspasos_sulfato_tucupido"];
      if (empty($traspasos_sulfato_tucupido)) {
            $traspasos_sulfato_tucupido = 0;
      }

      $traspasos_cal_tucupido = $_POST["traspasos_cal_tucupido"];
      if (empty($traspasos_cal_tucupido)) {
            $traspasos_cal_tucupido = 0;
      }

      $traspasos_hipoclorito_tucupido = $_POST["traspasos_hipoclorito_tucupido"];
      if (empty($traspasos_hipoclorito_tucupido)) {
            $traspasos_hipoclorito_tucupido = 0;
      }

      $traspasos_poli_tucupido = $_POST["traspasos_poli_tucupido"];
      if (empty($traspasos_poli_tucupido)) {
            $traspasos_poli_tucupido = 0;
      }

      $traspasos_clorolb_tucupido = $_POST["traspasos_clorolb_tucupido"];
      if (empty($traspasos_clorolb_tucupido)) {
            $traspasos_clorolb_tucupido = 0;
      }


      $aplicacion_gascloro_tucupido = $_POST["aplicacion_gascloro_tucupido"];
      if (empty($aplicacion_gascloro_tucupido)) {
            $aplicacion_gascloro_tucupido = 0;
      }

      $aplicacion_sulfato_tucupido = $_POST["aplicacion_sulfato_tucupido"];
       if (empty($aplicacion_sulfato_tucupido)) {
            $aplicacion_sulfato_tucupido = 0;
      }

      $aplicacion_cal_tucupido = $_POST["aplicacion_cal_tucupido"];
       if (empty($aplicacion_cal_tucupido)) {
            $aplicacion_cal_tucupido = 0;
      }

      $aplicacion_hipoclorito_tucupido = $_POST["aplicacion_hipoclorito_tucupido"];
       if (empty($aplicacion_hipoclorito_tucupido)) {
            $aplicacion_hipoclorito_tucupido = 0;
      }

      $aplicacion_poli_tucupido = $_POST["aplicacion_poli_tucupido"];
       if (empty($aplicacion_poli_tucupido)) {
            $aplicacion_poli_tucupido = 0;
      }

      $aplicacion_clorolb_tucupido = $_POST["aplicacion_clorolb_tucupido"];
       if (empty($aplicacion_clorolb_tucupido)) {
            $aplicacion_clorolb_tucupido = 0;
      }

      $duracion_gascloro_tucupido = $_POST["duracion_gascloro_tucupido"];
       if (empty($duracion_gascloro_tucupido)) {
            $duracion_gascloro_tucupido = 0;
      }

      $duracion_sulfato_tucupido = $_POST["duracion_sulfato_tucupido"];
      if (empty($duracion_sulfato_tucupido)) {
            $duracion_sulfato_tucupido = 0;
      }

      $duracion_cal_tucupido = $_POST["duracion_cal_tucupido"];
      if (empty($duracion_cal_tucupido)) {
            $duracion_cal_tucupido = 0;
      }

      $duracion_hipoclorito_tucupido = $_POST["duracion_hipoclorito_tucupido"];
      if (empty($duracion_hipoclorito_tucupido)) {
            $duracion_hipoclorito_tucupido = 0;
      }

      $duracion_poli_tucupido = $_POST["duracion_poli_tucupido"];
      if (empty($duracion_poli_tucupido)) {
            $duracion_poli_tucupido = 0;
      }

      $duracion_clorolb_tucupido = $_POST["duracion_clorolb_tucupido"];
      if (empty($duracion_clorolb_tucupido)) {
            $duracion_clorolb_tucupido = 0;
      }

      $saldo_gascloro_tucupido = $_POST["saldo_gascloro_tucupido"];
      if (empty($saldo_gascloro_tucupido)) {
            $saldo_gascloro_tucupido = 0;
      }

      $saldo_sulfato_tucupido = $_POST["saldo_sulfato_tucupido"];
      if (empty($saldo_sulfato_tucupido)) {
            $saldo_sulfato_tucupido = 0;
      }

      $saldo_cal_tucupido = $_POST["saldo_cal_tucupido"];
      if (empty($saldo_cal_tucupido)) {
            $saldo_cal_tucupido = 0;
      }

      $saldo_hipoclorito_tucupido = $_POST["saldo_hipoclorito_tucupido"];
      if (empty($saldo_hipoclorito_tucupido)) {
            $saldo_hipoclorito_tucupido = 0;
      }

      $saldo_poli_tucupido = $_POST["saldo_poli_tucupido"];
      if (empty($saldo_poli_tucupido)) {
            $saldo_poli_tucupido = 0;
      }

      $saldo_clorolb_tucupido = $_POST["saldo_clorolb_tucupido"];
      if (empty($saldo_clorolb_tucupido)) {
            $saldo_clorolb_tucupido = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlTucupido = ("SELECT * FROM formato_diario where id_sistema = 5 and fecha = '$fecha'");
      $resultTucupido = pg_query($sqlTucupido);
      $rowTucupido = pg_fetch_array($resultTucupido);

                  $AlmacenTucupido = ("SELECT * FROM almacenes where id_sistema = 5");
                  $resultAlmacenTucupido = pg_query($AlmacenTucupido);
                  $rowAlmacenTucupido = pg_fetch_array($resultAlmacenTucupido);
                  $cilindros_llenos_tucupido = $rowAlmacenTucupido[cilindros_llenos];
                  $cilindros_vacios_tucupido = $rowAlmacenTucupido[cilindros_vacios];

      if ($rowTucupido['reporte'] == 't') {
            $Tucupido = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (5, '$fecha',
               '$idUsuario', '$servicio_tucupido', '$danado_tucupido', '$consmax_tucupido',
                '$recibido_gascloro_tucupido', '$recibido_sulfato_tucupido', '$recibido_cal_tucupido', 
                '$recibido_hipoclorito_tucupido', '$recibido_poli_tucupido', '$recibido_clorolb_tucupido',
                 '$traspasos_gascloro_tucupido', '$traspasos_sulfato_tucupido', '$traspasos_cal_tucupido', 
                 '$traspasos_hipoclorito_tucupido', '$traspasos_poli_tucupido', '$traspasos_clorolb_tucupido',
                  '$aplicacion_gascloro_tucupido', '$aplicacion_sulfato_tucupido', '$aplicacion_cal_tucupido', 
                  '$aplicacion_hipoclorito_tucupido', '$aplicacion_poli_tucupido', '$aplicacion_clorolb_tucupido', 
                  '$duracion_gascloro_tucupido', '$duracion_sulfato_tucupido', '$duracion_cal_tucupido',
                   '$duracion_hipoclorito_tucupido', '$duracion_poli_tucupido', '$duracion_clorolb_tucupido', '$cilindros_llenos_tucupido', '$cilindros_vacios_tucupido', '$saldo_gascloro_tucupido', '$saldo_sulfato_tucupido', '$saldo_cal_tucupido', '$saldo_hipoclorito_tucupido', '$saldo_poli_tucupido', '$saldo_clorolb_tucupido')");
            if (pg_query($Tucupido)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenTucupido['sulaluminio'] + $recibido_sulfato_tucupido - $traspasos_sulfato_tucupido;
                  $nuevoGascloro = $rowAlmacenTucupido['gascloro'] + $recibido_gascloro_tucupido - $traspasos_gascloro_tucupido;
                  $nuevoCal = $rowAlmacenTucupido['cal'] + $recibido_cal_tucupido - $traspasos_cal_tucupido;
                  $nuevoHipoclorito = $rowAlmacenTucupido['hipoclorito'] + $recibido_hipoclorito_tucupido - $traspasos_hipoclorito_tucupido;
                  $nuevoPolicloruro = $rowAlmacenTucupido['policloruro'] + $recibido_poli_tucupido - $traspasos_poli_tucupido;
                  $nuevoGasClorolb = $rowAlmacenTucupido['gasclorolb'] + $recibido_clorolb_tucupido - $traspasos_clorolb_tucupido;

                  $updateAlmacenTucupido = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 5");
                  if (pg_query($updateAlmacenTucupido)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Tucupido!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Tucupido!') </script>";
            }
      }else{
            $Tucupido = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (5, '$fecha', '$idUsuario')");
            if (pg_query($Tucupido)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Tucupido!') </script>";
            }
      }

        //San Jose de Guaribe  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_sanjose = $_POST["servicio_sanjose"];
      if (empty($servicio_sanjose)) {
            $servicio_sanjose = 0;
      }

      $danado_sanjose = $_POST["danado_sanjose"];
       if (empty($danado_sanjose)) {
            $danado_sanjose = 0;
      }

      $consmax_sanjose = $_POST["consmax_sanjose"];
       if (empty($consmax_sanjose)) {
            $consmax_sanjose = 0;
      }

      $recibido_gascloro_sanjose = $_POST["recibido_gascloro_sanjose"];
       if (empty($recibido_gascloro_sanjose)) {
            $recibido_gascloro_sanjose = 0;
      }

      $recibido_sulfato_sanjose = $_POST["recibido_sulfato_sanjose"];
      if (empty($recibido_sulfato_sanjose)) {
            $recibido_sulfato_sanjose = 0;
      }

      $recibido_cal_sanjose = $_POST["recibido_cal_sanjose"];
      if (empty($recibido_cal_sanjose)) {
            $recibido_cal_sanjose = 0;
      }

      $recibido_hipoclorito_sanjose = $_POST["recibido_hipoclorito_sanjose"];
      if (empty($recibido_hipoclorito_sanjose)) {
            $recibido_hipoclorito_sanjose = 0;
      }

      $recibido_poli_sanjose = $_POST["recibido_poli_sanjose"];
      if (empty($recibido_poli_sanjose)) {
            $recibido_poli_sanjose = 0;
      }

      $recibido_clorolb_sanjose = $_POST["recibido_clorolb_sanjose"];
       if (empty($recibido_clorolb_sanjose)) {
            $recibido_clorolb_sanjose = 0;
      }

      $traspasos_gascloro_sanjose = $_POST["traspasos_gascloro_sanjose"];
       if (empty($traspasos_gascloro_sanjose)) {
            $traspasos_gascloro_sanjose = 0;
      }

      $traspasos_sulfato_sanjose = $_POST["traspasos_sulfato_sanjose"];
      if (empty($traspasos_sulfato_sanjose)) {
            $traspasos_sulfato_sanjose = 0;
      }

      $traspasos_cal_sanjose = $_POST["traspasos_cal_sanjose"];
      if (empty($traspasos_cal_sanjose)) {
            $traspasos_cal_sanjose = 0;
      }

      $traspasos_hipoclorito_sanjose = $_POST["traspasos_hipoclorito_sanjose"];
      if (empty($traspasos_hipoclorito_sanjose)) {
            $traspasos_hipoclorito_sanjose = 0;
      }

      $traspasos_poli_sanjose = $_POST["traspasos_poli_sanjose"];
      if (empty($traspasos_poli_sanjose)) {
            $traspasos_poli_sanjose = 0;
      }

      $traspasos_clorolb_sanjose = $_POST["traspasos_clorolb_sanjose"];
      if (empty($traspasos_clorolb_sanjose)) {
            $traspasos_clorolb_sanjose = 0;
      }


      $aplicacion_gascloro_sanjose = $_POST["aplicacion_gascloro_sanjose"];
      if (empty($aplicacion_gascloro_sanjose)) {
            $aplicacion_gascloro_sanjose = 0;
      }

      $aplicacion_sulfato_sanjose = $_POST["aplicacion_sulfato_sanjose"];
       if (empty($aplicacion_sulfato_sanjose)) {
            $aplicacion_sulfato_sanjose = 0;
      }

      $aplicacion_cal_sanjose = $_POST["aplicacion_cal_sanjose"];
       if (empty($aplicacion_cal_sanjose)) {
            $aplicacion_cal_sanjose = 0;
      }

      $aplicacion_hipoclorito_sanjose = $_POST["aplicacion_hipoclorito_sanjose"];
       if (empty($aplicacion_hipoclorito_sanjose)) {
            $aplicacion_hipoclorito_sanjose = 0;
      }

      $aplicacion_poli_sanjose = $_POST["aplicacion_poli_sanjose"];
       if (empty($aplicacion_poli_sanjose)) {
            $aplicacion_poli_sanjose = 0;
      }

      $aplicacion_clorolb_sanjose = $_POST["aplicacion_clorolb_sanjose"];
       if (empty($aplicacion_clorolb_sanjose)) {
            $aplicacion_clorolb_sanjose = 0;
      }

      $duracion_gascloro_sanjose = $_POST["duracion_gascloro_sanjose"];
       if (empty($duracion_gascloro_sanjose)) {
            $duracion_gascloro_sanjose = 0;
      }

      $duracion_sulfato_sanjose = $_POST["duracion_sulfato_sanjose"];
      if (empty($duracion_sulfato_sanjose)) {
            $duracion_sulfato_sanjose = 0;
      }

      $duracion_cal_sanjose = $_POST["duracion_cal_sanjose"];
      if (empty($duracion_cal_sanjose)) {
            $duracion_cal_sanjose = 0;
      }

      $duracion_hipoclorito_sanjose = $_POST["duracion_hipoclorito_sanjose"];
      if (empty($duracion_hipoclorito_sanjose)) {
            $duracion_hipoclorito_sanjose = 0;
      }

      $duracion_poli_sanjose = $_POST["duracion_poli_sanjose"];
      if (empty($duracion_poli_sanjose)) {
            $duracion_poli_sanjose = 0;
      }

      $duracion_clorolb_sanjose = $_POST["duracion_clorolb_sanjose"];
      if (empty($duracion_clorolb_sanjose)) {
            $duracion_clorolb_sanjose = 0;
      }

      $saldo_gascloro_sanjose = $_POST["saldo_gascloro_sanjose"];
      if (empty($saldo_gascloro_sanjose)) {
            $saldo_gascloro_sanjose = 0;
      }

      $saldo_sulfato_sanjose = $_POST["saldo_sulfato_sanjose"];
      if (empty($saldo_sulfato_sanjose)) {
            $saldo_sulfato_sanjose = 0;
      }

      $saldo_cal_sanjose = $_POST["saldo_cal_sanjose"];
      if (empty($saldo_cal_sanjose)) {
            $saldo_cal_sanjose = 0;
      }

      $saldo_hipoclorito_sanjose = $_POST["saldo_hipoclorito_sanjose"];
      if (empty($saldo_hipoclorito_sanjose)) {
            $saldo_hipoclorito_sanjose = 0;
      }

      $saldo_poli_sanjose = $_POST["saldo_poli_sanjose"];
      if (empty($saldo_poli_sanjose)) {
            $saldo_poli_sanjose = 0;
      }

      $saldo_clorolb_sanjose = $_POST["saldo_clorolb_sanjose"];
      if (empty($saldo_clorolb_sanjose)) {
            $saldo_clorolb_sanjose = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSanJose = ("SELECT * FROM formato_diario where id_sistema = 6 and fecha = '$fecha'");
      $resultSanJose = pg_query($sqlSanJose);
      $rowSanJose = pg_fetch_array($resultSanJose);

                  $AlmacenSanJose = ("SELECT * FROM almacenes where id_sistema = 6");
                  $resultAlmacenSanJose = pg_query($AlmacenSanJose);
                  $rowAlmacenSanJose = pg_fetch_array($resultAlmacenSanJose);
                  $cilindros_llenos_sanjose = $rowAlmacenSanJose[cilindros_llenos];
                  $cilindros_vacios_sanjose = $rowAlmacenSanJose[cilindros_vacios];

      if ($rowSanJose['reporte'] == 't') {
            $SanJose = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (6, '$fecha',
               '$idUsuario', '$servicio_sanjose', '$danado_sanjose', '$consmax_sanjose',
                '$recibido_gascloro_sanjose', '$recibido_sulfato_sanjose', '$recibido_cal_sanjose', 
                '$recibido_hipoclorito_sanjose', '$recibido_poli_sanjose', '$recibido_clorolb_sanjose',
                 '$traspasos_gascloro_sanjose', '$traspasos_sulfato_sanjose', '$traspasos_cal_sanjose', 
                 '$traspasos_hipoclorito_sanjose', '$traspasos_poli_sanjose', '$traspasos_clorolb_sanjose',
                  '$aplicacion_gascloro_sanjose', '$aplicacion_sulfato_sanjose', '$aplicacion_cal_sanjose', 
                  '$aplicacion_hipoclorito_sanjose', '$aplicacion_poli_sanjose', '$aplicacion_clorolb_sanjose', 
                  '$duracion_gascloro_sanjose', '$duracion_sulfato_sanjose', '$duracion_cal_sanjose',
                   '$duracion_hipoclorito_sanjose', '$duracion_poli_sanjose', '$duracion_clorolb_sanjose', '$cilindros_llenos_sanjose', '$cilindros_vacios_sanjose', '$saldo_gascloro_sanjose', '$saldo_sulfato_sanjose', '$saldo_cal_sanjose', '$saldo_hipoclorito_sanjose', '$saldo_poli_sanjose', '$saldo_clorolb_sanjose')");
            if (pg_query($SanJose)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                 

                  $nuevoSulfato = $rowAlmacenSanJose['sulaluminio'] + $recibido_sulfato_sanjose - $traspasos_sulfato_sanjose;
                  $nuevoGascloro = $rowAlmacenSanJose['gascloro'] + $recibido_gascloro_sanjose - $traspasos_gascloro_sanjose;
                  $nuevoCal = $rowAlmacenSanJose['cal'] + $recibido_cal_sanjose - $traspasos_cal_sanjose;
                  $nuevoHipoclorito = $rowAlmacenSanJose['hipoclorito'] + $recibido_hipoclorito_sanjose - $traspasos_hipoclorito_sanjose;
                  $nuevoPolicloruro = $rowAlmacenSanJose['policloruro'] + $recibido_poli_sanjose - $traspasos_poli_sanjose;
                  $nuevoGasClorolb = $rowAlmacenSanJose['gasclorolb'] + $recibido_clorolb_sanjose - $traspasos_clorolb_sanjose;

                  $updateAlmacenSanJose = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 6");
                  if (pg_query($updateAlmacenSanJose)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de SanJose!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada SanJose!') </script>";
            }
      }else{
            $SanJose = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (6, '$fecha', '$idUsuario')");
            if (pg_query($SanJose)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  SanJose!') </script>";
            }
      }

       //Zaraza  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_zaraza = $_POST["servicio_zaraza"];
      if (empty($servicio_zaraza)) {
            $servicio_zaraza = 0;
      }

      $danado_zaraza = $_POST["danado_zaraza"];
       if (empty($danado_zaraza)) {
            $danado_zaraza = 0;
      }

      $consmax_zaraza = $_POST["consmax_zaraza"];
       if (empty($consmax_zaraza)) {
            $consmax_zaraza = 0;
      }

      $recibido_gascloro_zaraza = $_POST["recibido_gascloro_zaraza"];
       if (empty($recibido_gascloro_zaraza)) {
            $recibido_gascloro_zaraza = 0;
      }

      $recibido_sulfato_zaraza = $_POST["recibido_sulfato_zaraza"];
      if (empty($recibido_sulfato_zaraza)) {
            $recibido_sulfato_zaraza = 0;
      }

      $recibido_cal_zaraza = $_POST["recibido_cal_zaraza"];
      if (empty($recibido_cal_zaraza)) {
            $recibido_cal_zaraza = 0;
      }

      $recibido_hipoclorito_zaraza = $_POST["recibido_hipoclorito_zaraza"];
      if (empty($recibido_hipoclorito_zaraza)) {
            $recibido_hipoclorito_zaraza = 0;
      }

      $recibido_poli_zaraza = $_POST["recibido_poli_zaraza"];
      if (empty($recibido_poli_zaraza)) {
            $recibido_poli_zaraza = 0;
      }

      $recibido_clorolb_zaraza = $_POST["recibido_clorolb_zaraza"];
       if (empty($recibido_clorolb_zaraza)) {
            $recibido_clorolb_zaraza = 0;
      }

      $traspasos_gascloro_zaraza = $_POST["traspasos_gascloro_zaraza"];
       if (empty($traspasos_gascloro_zaraza)) {
            $traspasos_gascloro_zaraza = 0;
      }

      $traspasos_sulfato_zaraza = $_POST["traspasos_sulfato_zaraza"];
      if (empty($traspasos_sulfato_zaraza)) {
            $traspasos_sulfato_zaraza = 0;
      }

      $traspasos_cal_zaraza = $_POST["traspasos_cal_zaraza"];
      if (empty($traspasos_cal_zaraza)) {
            $traspasos_cal_zaraza = 0;
      }

      $traspasos_hipoclorito_zaraza = $_POST["traspasos_hipoclorito_zaraza"];
      if (empty($traspasos_hipoclorito_zaraza)) {
            $traspasos_hipoclorito_zaraza = 0;
      }

      $traspasos_poli_zaraza = $_POST["traspasos_poli_zaraza"];
      if (empty($traspasos_poli_zaraza)) {
            $traspasos_poli_zaraza = 0;
      }

      $traspasos_clorolb_zaraza = $_POST["traspasos_clorolb_zaraza"];
      if (empty($traspasos_clorolb_zaraza)) {
            $traspasos_clorolb_zaraza = 0;
      }


      $aplicacion_gascloro_zaraza = $_POST["aplicacion_gascloro_zaraza"];
      if (empty($aplicacion_gascloro_zaraza)) {
            $aplicacion_gascloro_zaraza = 0;
      }

      $aplicacion_sulfato_zaraza = $_POST["aplicacion_sulfato_zaraza"];
       if (empty($aplicacion_sulfato_zaraza)) {
            $aplicacion_sulfato_zaraza = 0;
      }

      $aplicacion_cal_zaraza = $_POST["aplicacion_cal_zaraza"];
       if (empty($aplicacion_cal_zaraza)) {
            $aplicacion_cal_zaraza = 0;
      }

      $aplicacion_hipoclorito_zaraza = $_POST["aplicacion_hipoclorito_zaraza"];
       if (empty($aplicacion_hipoclorito_zaraza)) {
            $aplicacion_hipoclorito_zaraza = 0;
      }

      $aplicacion_poli_zaraza = $_POST["aplicacion_poli_zaraza"];
       if (empty($aplicacion_poli_zaraza)) {
            $aplicacion_poli_zaraza = 0;
      }

      $aplicacion_clorolb_zaraza = $_POST["aplicacion_clorolb_zaraza"];
       if (empty($aplicacion_clorolb_zaraza)) {
            $aplicacion_clorolb_zaraza = 0;
      }

      $duracion_gascloro_zaraza = $_POST["duracion_gascloro_zaraza"];
       if (empty($duracion_gascloro_zaraza)) {
            $duracion_gascloro_zaraza = 0;
      }

      $duracion_sulfato_zaraza = $_POST["duracion_sulfato_zaraza"];
      if (empty($duracion_sulfato_zaraza)) {
            $duracion_sulfato_zaraza = 0;
      }

      $duracion_cal_zaraza = $_POST["duracion_cal_zaraza"];
      if (empty($duracion_cal_zaraza)) {
            $duracion_cal_zaraza = 0;
      }

      $duracion_hipoclorito_zaraza = $_POST["duracion_hipoclorito_zaraza"];
      if (empty($duracion_hipoclorito_zaraza)) {
            $duracion_hipoclorito_zaraza = 0;
      }

      $duracion_poli_zaraza = $_POST["duracion_poli_zaraza"];
      if (empty($duracion_poli_zaraza)) {
            $duracion_poli_zaraza = 0;
      }

      $duracion_clorolb_zaraza = $_POST["duracion_clorolb_zaraza"];
      if (empty($duracion_clorolb_zaraza)) {
            $duracion_clorolb_zaraza = 0;
      }

      $saldo_gascloro_zaraza = $_POST["saldo_gascloro_zaraza"];
      if (empty($saldo_gascloro_zaraza)) {
            $saldo_gascloro_zaraza = 0;
      }

      $saldo_sulfato_zaraza = $_POST["saldo_sulfato_zaraza"];
      if (empty($saldo_sulfato_zaraza)) {
            $saldo_sulfato_zaraza = 0;
      }

      $saldo_cal_zaraza = $_POST["saldo_cal_zaraza"];
      if (empty($saldo_cal_zaraza)) {
            $saldo_cal_zaraza = 0;
      }

      $saldo_hipoclorito_zaraza = $_POST["saldo_hipoclorito_zaraza"];
      if (empty($saldo_hipoclorito_zaraza)) {
            $saldo_hipoclorito_zaraza = 0;
      }

      $saldo_poli_zaraza = $_POST["saldo_poli_zaraza"];
      if (empty($saldo_poli_zaraza)) {
            $saldo_poli_zaraza = 0;
      }

      $saldo_clorolb_zaraza = $_POST["saldo_clorolb_zaraza"];
      if (empty($saldo_clorolb_zaraza)) {
            $saldo_clorolb_zaraza = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlZaraza = ("SELECT * FROM formato_diario where id_sistema = 7 and fecha = '$fecha'");
      $resultZaraza = pg_query($sqlZaraza);
      $rowZaraza = pg_fetch_array($resultZaraza);

                  $AlmacenZaraza = ("SELECT * FROM almacenes where id_sistema = 7");
                  $resultAlmacenZaraza = pg_query($AlmacenZaraza);
                  $rowAlmacenZaraza = pg_fetch_array($resultAlmacenZaraza);
                  $cilindros_llenos_zaraza = $rowAlmacenZaraza[cilindros_llenos];
                  $cilindros_vacios_zaraza = $rowAlmacenZaraza[cilindros_vacios];

      if ($rowZaraza['reporte'] == 't') {
            $Zaraza = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (7, '$fecha',
               '$idUsuario', '$servicio_zaraza', '$danado_zaraza', '$consmax_zaraza',
                '$recibido_gascloro_zaraza', '$recibido_sulfato_zaraza', '$recibido_cal_zaraza', 
                '$recibido_hipoclorito_zaraza', '$recibido_poli_zaraza', '$recibido_clorolb_zaraza',
                 '$traspasos_gascloro_zaraza', '$traspasos_sulfato_zaraza', '$traspasos_cal_zaraza', 
                 '$traspasos_hipoclorito_zaraza', '$traspasos_poli_zaraza', '$traspasos_clorolb_zaraza',
                  '$aplicacion_gascloro_zaraza', '$aplicacion_sulfato_zaraza', '$aplicacion_cal_zaraza', 
                  '$aplicacion_hipoclorito_zaraza', '$aplicacion_poli_zaraza', '$aplicacion_clorolb_zaraza', 
                  '$duracion_gascloro_zaraza', '$duracion_sulfato_zaraza', '$duracion_cal_zaraza',
                   '$duracion_hipoclorito_zaraza', '$duracion_poli_zaraza', '$duracion_clorolb_zaraza', '$cilindros_llenos_zaraza', '$cilindros_vacios_zaraza', '$saldo_gascloro_zaraza', '$saldo_sulfato_zaraza', '$saldo_cal_zaraza', '$saldo_hipoclorito_zaraza', '$saldo_poli_zaraza', '$saldo_clorolb_zaraza')");
            if (pg_query($Zaraza)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenZaraza['sulaluminio'] + $recibido_sulfato_zaraza - $traspasos_sulfato_zaraza;
                  $nuevoGascloro = $rowAlmacenZaraza['gascloro'] + $recibido_gascloro_zaraza - $traspasos_gascloro_zaraza;
                  $nuevoCal = $rowAlmacenZaraza['cal'] + $recibido_cal_zaraza - $traspasos_cal_zaraza;
                  $nuevoHipoclorito = $rowAlmacenZaraza['hipoclorito'] + $recibido_hipoclorito_zaraza - $traspasos_hipoclorito_zaraza;
                  $nuevoPolicloruro = $rowAlmacenZaraza['policloruro'] + $recibido_poli_zaraza - $traspasos_poli_zaraza;
                  $nuevoGasClorolb = $rowAlmacenZaraza['gasclorolb'] + $recibido_clorolb_zaraza - $traspasos_clorolb_zaraza;

                  $updateAlmacenZaraza = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 7");
                  if (pg_query($updateAlmacenZaraza)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Zaraza!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Zaraza!') </script>";
            }
      }else{
            $Zaraza = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (7, '$fecha', '$idUsuario')");
            if (pg_query($Zaraza)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Zaraza!') </script>";
            }
      }

        //El Socorro  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_socorro = $_POST["servicio_socorro"];
      if (empty($servicio_socorro)) {
            $servicio_socorro = 0;
      }

      $danado_socorro = $_POST["danado_socorro"];
       if (empty($danado_socorro)) {
            $danado_socorro = 0;
      }

      $consmax_socorro = $_POST["consmax_socorro"];
       if (empty($consmax_socorro)) {
            $consmax_socorro = 0;
      }

      $recibido_gascloro_socorro = $_POST["recibido_gascloro_socorro"];
       if (empty($recibido_gascloro_socorro)) {
            $recibido_gascloro_socorro = 0;
      }

      $recibido_sulfato_socorro = $_POST["recibido_sulfato_socorro"];
      if (empty($recibido_sulfato_socorro)) {
            $recibido_sulfato_socorro = 0;
      }

      $recibido_cal_socorro = $_POST["recibido_cal_socorro"];
      if (empty($recibido_cal_socorro)) {
            $recibido_cal_socorro = 0;
      }

      $recibido_hipoclorito_socorro = $_POST["recibido_hipoclorito_socorro"];
      if (empty($recibido_hipoclorito_socorro)) {
            $recibido_hipoclorito_socorro = 0;
      }

      $recibido_poli_socorro = $_POST["recibido_poli_socorro"];
      if (empty($recibido_poli_socorro)) {
            $recibido_poli_socorro = 0;
      }

      $recibido_clorolb_socorro = $_POST["recibido_clorolb_socorro"];
       if (empty($recibido_clorolb_socorro)) {
            $recibido_clorolb_socorro = 0;
      }

      $traspasos_gascloro_socorro = $_POST["traspasos_gascloro_socorro"];
       if (empty($traspasos_gascloro_socorro)) {
            $traspasos_gascloro_socorro = 0;
      }

      $traspasos_sulfato_socorro = $_POST["traspasos_sulfato_socorro"];
      if (empty($traspasos_sulfato_socorro)) {
            $traspasos_sulfato_socorro = 0;
      }

      $traspasos_cal_socorro = $_POST["traspasos_cal_socorro"];
      if (empty($traspasos_cal_socorro)) {
            $traspasos_cal_socorro = 0;
      }

      $traspasos_hipoclorito_socorro = $_POST["traspasos_hipoclorito_socorro"];
      if (empty($traspasos_hipoclorito_socorro)) {
            $traspasos_hipoclorito_socorro = 0;
      }

      $traspasos_poli_socorro = $_POST["traspasos_poli_socorro"];
      if (empty($traspasos_poli_socorro)) {
            $traspasos_poli_socorro = 0;
      }

      $traspasos_clorolb_socorro = $_POST["traspasos_clorolb_socorro"];
      if (empty($traspasos_clorolb_socorro)) {
            $traspasos_clorolb_socorro = 0;
      }


      $aplicacion_gascloro_socorro = $_POST["aplicacion_gascloro_socorro"];
      if (empty($aplicacion_gascloro_socorro)) {
            $aplicacion_gascloro_socorro = 0;
      }

      $aplicacion_sulfato_socorro = $_POST["aplicacion_sulfato_socorro"];
       if (empty($aplicacion_sulfato_socorro)) {
            $aplicacion_sulfato_socorro = 0;
      }

      $aplicacion_cal_socorro = $_POST["aplicacion_cal_socorro"];
       if (empty($aplicacion_cal_socorro)) {
            $aplicacion_cal_socorro = 0;
      }

      $aplicacion_hipoclorito_socorro = $_POST["aplicacion_hipoclorito_socorro"];
       if (empty($aplicacion_hipoclorito_socorro)) {
            $aplicacion_hipoclorito_socorro = 0;
      }

      $aplicacion_poli_socorro = $_POST["aplicacion_poli_socorro"];
       if (empty($aplicacion_poli_socorro)) {
            $aplicacion_poli_socorro = 0;
      }

      $aplicacion_clorolb_socorro = $_POST["aplicacion_clorolb_socorro"];
       if (empty($aplicacion_clorolb_socorro)) {
            $aplicacion_clorolb_socorro = 0;
      }

      $duracion_gascloro_socorro = $_POST["duracion_gascloro_socorro"];
       if (empty($duracion_gascloro_socorro)) {
            $duracion_gascloro_socorro = 0;
      }

      $duracion_sulfato_socorro = $_POST["duracion_sulfato_socorro"];
      if (empty($duracion_sulfato_socorro)) {
            $duracion_sulfato_socorro = 0;
      }

      $duracion_cal_socorro = $_POST["duracion_cal_socorro"];
      if (empty($duracion_cal_socorro)) {
            $duracion_cal_socorro = 0;
      }

      $duracion_hipoclorito_socorro = $_POST["duracion_hipoclorito_socorro"];
      if (empty($duracion_hipoclorito_socorro)) {
            $duracion_hipoclorito_socorro = 0;
      }

      $duracion_poli_socorro = $_POST["duracion_poli_socorro"];
      if (empty($duracion_poli_socorro)) {
            $duracion_poli_socorro = 0;
      }

      $duracion_clorolb_socorro = $_POST["duracion_clorolb_socorro"];
      if (empty($duracion_clorolb_socorro)) {
            $duracion_clorolb_socorro = 0;
      }

      $saldo_gascloro_socorro = $_POST["saldo_gascloro_socorro"];
      if (empty($saldo_gascloro_socorro)) {
            $saldo_gascloro_socorro = 0;
      }

      $saldo_sulfato_socorro = $_POST["saldo_sulfato_socorro"];
      if (empty($saldo_sulfato_socorro)) {
            $saldo_sulfato_socorro = 0;
      }

      $saldo_cal_socorro = $_POST["saldo_cal_socorro"];
      if (empty($saldo_cal_socorro)) {
            $saldo_cal_socorro = 0;
      }

      $saldo_hipoclorito_socorro = $_POST["saldo_hipoclorito_socorro"];
      if (empty($saldo_hipoclorito_socorro)) {
            $saldo_hipoclorito_socorro = 0;
      }

      $saldo_poli_socorro = $_POST["saldo_poli_socorro"];
      if (empty($saldo_poli_socorro)) {
            $saldo_poli_socorro = 0;
      }

      $saldo_clorolb_socorro = $_POST["saldo_clorolb_socorro"];
      if (empty($saldo_clorolb_socorro)) {
            $saldo_clorolb_socorro = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSocorro = ("SELECT * FROM formato_diario where id_sistema = 8 and fecha = '$fecha'");
      $resultSocorro = pg_query($sqlSocorro);
      $rowSocorro = pg_fetch_array($resultSocorro);

                  $AlmacenSocorro = ("SELECT * FROM almacenes where id_sistema = 8");
                  $resultAlmacenSocorro = pg_query($AlmacenSocorro);
                  $rowAlmacenSocorro = pg_fetch_array($resultAlmacenSocorro);
                   $cilindros_llenos_socorro = $rowAlmacenSocorro[cilindros_llenos];
                  $cilindros_vacios_socorro = $rowAlmacenSocorro[cilindros_vacios];


      if ($rowSocorro['reporte'] == 't') {
            $Socorro = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (8, '$fecha',
               '$idUsuario', '$servicio_socorro', '$danado_socorro', '$consmax_socorro',
                '$recibido_gascloro_socorro', '$recibido_sulfato_socorro', '$recibido_cal_socorro', 
                '$recibido_hipoclorito_socorro', '$recibido_poli_socorro', '$recibido_clorolb_socorro',
                 '$traspasos_gascloro_socorro', '$traspasos_sulfato_socorro', '$traspasos_cal_socorro', 
                 '$traspasos_hipoclorito_socorro', '$traspasos_poli_socorro', '$traspasos_clorolb_socorro',
                  '$aplicacion_gascloro_socorro', '$aplicacion_sulfato_socorro', '$aplicacion_cal_socorro', 
                  '$aplicacion_hipoclorito_socorro', '$aplicacion_poli_socorro', '$aplicacion_clorolb_socorro', 
                  '$duracion_gascloro_socorro', '$duracion_sulfato_socorro', '$duracion_cal_socorro',
                   '$duracion_hipoclorito_socorro', '$duracion_poli_socorro', '$duracion_clorolb_socorro', '$cilindros_llenos_socorro', '$cilindros_vacios_socorro', '$saldo_gascloro_socorro', '$saldo_sulfato_socorro', '$saldo_cal_socorro', '$saldo_hipoclorito_socorro', '$saldo_poli_socorro', '$saldo_clorolb_socorro')");
            if (pg_query($Socorro)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                 
                  $nuevoSulfato = $rowAlmacenSocorro['sulaluminio'] + $recibido_sulfato_socorro - $traspasos_sulfato_socorro;
                  $nuevoGascloro = $rowAlmacenSocorro['gascloro'] + $recibido_gascloro_socorro - $traspasos_gascloro_socorro;
                  $nuevoCal = $rowAlmacenSocorro['cal'] + $recibido_cal_socorro - $traspasos_cal_socorro;
                  $nuevoHipoclorito = $rowAlmacenSocorro['hipoclorito'] + $recibido_hipoclorito_socorro - $traspasos_hipoclorito_socorro;
                  $nuevoPolicloruro = $rowAlmacenSocorro['policloruro'] + $recibido_poli_socorro - $traspasos_poli_socorro;
                  $nuevoGasClorolb = $rowAlmacenSocorro['gasclorolb'] + $recibido_clorolb_socorro - $traspasos_clorolb_socorro;

                  $updateAlmacenSocorro = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 8");
                  if (pg_query($updateAlmacenSocorro)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Socorro!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Socorro!') </script>";
            }
      }else{
            $Socorro = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (8, '$fecha', '$idUsuario')");
            if (pg_query($Socorro)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Socorro!') </script>";
            }
      }


       //Santa Maria de Ipire  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_santamaria = $_POST["servicio_santamaria"];
      if (empty($servicio_santamaria)) {
            $servicio_santamaria = 0;
      }

      $danado_santamaria = $_POST["danado_santamaria"];
       if (empty($danado_santamaria)) {
            $danado_santamaria = 0;
      }

      $consmax_santamaria = $_POST["consmax_santamaria"];
       if (empty($consmax_santamaria)) {
            $consmax_santamaria = 0;
      }

      $recibido_gascloro_santamaria = $_POST["recibido_gascloro_santamaria"];
       if (empty($recibido_gascloro_santamaria)) {
            $recibido_gascloro_santamaria = 0;
      }

      $recibido_sulfato_santamaria = $_POST["recibido_sulfato_santamaria"];
      if (empty($recibido_sulfato_santamaria)) {
            $recibido_sulfato_santamaria = 0;
      }

      $recibido_cal_santamaria = $_POST["recibido_cal_santamaria"];
      if (empty($recibido_cal_santamaria)) {
            $recibido_cal_santamaria = 0;
      }

      $recibido_hipoclorito_santamaria = $_POST["recibido_hipoclorito_santamaria"];
      if (empty($recibido_hipoclorito_santamaria)) {
            $recibido_hipoclorito_santamaria = 0;
      }

      $recibido_poli_santamaria = $_POST["recibido_poli_santamaria"];
      if (empty($recibido_poli_santamaria)) {
            $recibido_poli_santamaria = 0;
      }

      $recibido_clorolb_santamaria = $_POST["recibido_clorolb_santamaria"];
       if (empty($recibido_clorolb_santamaria)) {
            $recibido_clorolb_santamaria = 0;
      }

      $traspasos_gascloro_santamaria = $_POST["traspasos_gascloro_santamaria"];
       if (empty($traspasos_gascloro_santamaria)) {
            $traspasos_gascloro_santamaria = 0;
      }

      $traspasos_sulfato_santamaria = $_POST["traspasos_sulfato_santamaria"];
      if (empty($traspasos_sulfato_santamaria)) {
            $traspasos_sulfato_santamaria = 0;
      }

      $traspasos_cal_santamaria = $_POST["traspasos_cal_santamaria"];
      if (empty($traspasos_cal_santamaria)) {
            $traspasos_cal_santamaria = 0;
      }

      $traspasos_hipoclorito_santamaria = $_POST["traspasos_hipoclorito_santamaria"];
      if (empty($traspasos_hipoclorito_santamaria)) {
            $traspasos_hipoclorito_santamaria = 0;
      }

      $traspasos_poli_santamaria = $_POST["traspasos_poli_santamaria"];
      if (empty($traspasos_poli_santamaria)) {
            $traspasos_poli_santamaria = 0;
      }

      $traspasos_clorolb_santamaria = $_POST["traspasos_clorolb_santamaria"];
      if (empty($traspasos_clorolb_santamaria)) {
            $traspasos_clorolb_santamaria = 0;
      }


      $aplicacion_gascloro_santamaria = $_POST["aplicacion_gascloro_santamaria"];
      if (empty($aplicacion_gascloro_santamaria)) {
            $aplicacion_gascloro_santamaria = 0;
      }

      $aplicacion_sulfato_santamaria = $_POST["aplicacion_sulfato_santamaria"];
       if (empty($aplicacion_sulfato_santamaria)) {
            $aplicacion_sulfato_santamaria = 0;
      }

      $aplicacion_cal_santamaria = $_POST["aplicacion_cal_santamaria"];
       if (empty($aplicacion_cal_santamaria)) {
            $aplicacion_cal_santamaria = 0;
      }

      $aplicacion_hipoclorito_santamaria = $_POST["aplicacion_hipoclorito_santamaria"];
       if (empty($aplicacion_hipoclorito_santamaria)) {
            $aplicacion_hipoclorito_santamaria = 0;
      }

      $aplicacion_poli_santamaria = $_POST["aplicacion_poli_santamaria"];
       if (empty($aplicacion_poli_santamaria)) {
            $aplicacion_poli_santamaria = 0;
      }

      $aplicacion_clorolb_santamaria = $_POST["aplicacion_clorolb_santamaria"];
       if (empty($aplicacion_clorolb_santamaria)) {
            $aplicacion_clorolb_santamaria = 0;
      }

      $duracion_gascloro_santamaria = $_POST["duracion_gascloro_santamaria"];
       if (empty($duracion_gascloro_santamaria)) {
            $duracion_gascloro_santamaria = 0;
      }

      $duracion_sulfato_santamaria = $_POST["duracion_sulfato_santamaria"];
      if (empty($duracion_sulfato_santamaria)) {
            $duracion_sulfato_santamaria = 0;
      }

      $duracion_cal_santamaria = $_POST["duracion_cal_santamaria"];
      if (empty($duracion_cal_santamaria)) {
            $duracion_cal_santamaria = 0;
      }

      $duracion_hipoclorito_santamaria = $_POST["duracion_hipoclorito_santamaria"];
      if (empty($duracion_hipoclorito_santamaria)) {
            $duracion_hipoclorito_santamaria = 0;
      }

      $duracion_poli_santamaria = $_POST["duracion_poli_santamaria"];
      if (empty($duracion_poli_santamaria)) {
            $duracion_poli_santamaria = 0;
      }

      $duracion_clorolb_santamaria = $_POST["duracion_clorolb_santamaria"];
      if (empty($duracion_clorolb_santamaria)) {
            $duracion_clorolb_santamaria = 0;
      }

      $saldo_gascloro_santamaria = $_POST["saldo_gascloro_santamaria"];
      if (empty($saldo_gascloro_santamaria)) {
            $saldo_gascloro_santamaria = 0;
      }

      $saldo_sulfato_santamaria = $_POST["saldo_sulfato_santamaria"];
      if (empty($saldo_sulfato_santamaria)) {
            $saldo_sulfato_santamaria = 0;
      }

      $saldo_cal_santamaria = $_POST["saldo_cal_santamaria"];
      if (empty($saldo_cal_santamaria)) {
            $saldo_cal_santamaria = 0;
      }

      $saldo_hipoclorito_santamaria = $_POST["saldo_hipoclorito_santamaria"];
      if (empty($saldo_hipoclorito_santamaria)) {
            $saldo_hipoclorito_santamaria = 0;
      }

      $saldo_poli_santamaria = $_POST["saldo_poli_santamaria"];
      if (empty($saldo_poli_santamaria)) {
            $saldo_poli_santamaria = 0;
      }

      $saldo_clorolb_santamaria = $_POST["saldo_clorolb_santamaria"];
      if (empty($saldo_clorolb_santamaria)) {
            $saldo_clorolb_santamaria = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSantaMaria = ("SELECT * FROM formato_diario where id_sistema = 9 and fecha = '$fecha'");
      $resultSantaMaria = pg_query($sqlSantaMaria);
      $rowSantaMaria = pg_fetch_array($resultSantaMaria);

                  $AlmacenSantaMaria = ("SELECT * FROM almacenes where id_sistema = 9");
                  $resultAlmacenSantaMaria = pg_query($AlmacenSantaMaria);
                  $rowAlmacenSantaMaria = pg_fetch_array($resultAlmacenSantaMaria);
                   $cilindros_llenos_santamaria = $rowAlmacenSantaMaria[cilindros_llenos];
                  $cilindros_vacios_santamaria = $rowAlmacenSantaMaria[cilindros_vacios];

      if ($rowSantaMaria['reporte'] == 't') {
            $SantaMaria = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (9, '$fecha',
               '$idUsuario', '$servicio_santamaria', '$danado_santamaria', '$consmax_santamaria',
                '$recibido_gascloro_santamaria', '$recibido_sulfato_santamaria', '$recibido_cal_santamaria', 
                '$recibido_hipoclorito_santamaria', '$recibido_poli_santamaria', '$recibido_clorolb_santamaria',
                 '$traspasos_gascloro_santamaria', '$traspasos_sulfato_santamaria', '$traspasos_cal_santamaria', 
                 '$traspasos_hipoclorito_santamaria', '$traspasos_poli_santamaria', '$traspasos_clorolb_santamaria',
                  '$aplicacion_gascloro_santamaria', '$aplicacion_sulfato_santamaria', '$aplicacion_cal_santamaria', 
                  '$aplicacion_hipoclorito_santamaria', '$aplicacion_poli_santamaria', '$aplicacion_clorolb_santamaria', 
                  '$duracion_gascloro_santamaria', '$duracion_sulfato_santamaria', '$duracion_cal_santamaria',
                   '$duracion_hipoclorito_santamaria', '$duracion_poli_santamaria', '$duracion_clorolb_santamaria', '$cilindros_llenos_santamaria', '$cilindros_vacios_santamaria', '$saldo_gascloro_santamaria', '$saldo_sulfato_santamaria', '$saldo_cal_santamaria', '$saldo_hipoclorito_santamaria', '$saldo_poli_santamaria', '$saldo_clorolb_santamaria')");
            if (pg_query($SantaMaria)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenSantaMaria['sulaluminio'] + $recibido_sulfato_santamaria - $traspasos_sulfato_santamaria;
                  $nuevoGascloro = $rowAlmacenSantaMaria['gascloro'] + $recibido_gascloro_santamaria - $traspasos_gascloro_santamaria;
                  $nuevoCal = $rowAlmacenSantaMaria['cal'] + $recibido_cal_santamaria - $traspasos_cal_santamaria;
                  $nuevoHipoclorito = $rowAlmacenSantaMaria['hipoclorito'] + $recibido_hipoclorito_santamaria - $traspasos_hipoclorito_santamaria;
                  $nuevoPolicloruro = $rowAlmacenSantaMaria['policloruro'] + $recibido_poli_santamaria - $traspasos_poli_santamaria;
                  $nuevoGasClorolb = $rowAlmacenSantaMaria['gasclorolb'] + $recibido_clorolb_santamaria - $traspasos_clorolb_santamaria;

                  $updateAlmacenSantaMaria = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 9");
                  if (pg_query($updateAlmacenSantaMaria)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de SantaMaria!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada SantaMaria!') </script>";
            }
      }else{
            $SantaMaria = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (9, '$fecha', '$idUsuario')");
            if (pg_query($SantaMaria)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  SantaMaria!') </script>";
            }
      }

       //Espino  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_espino = $_POST["servicio_espino"];
      if (empty($servicio_espino)) {
            $servicio_espino = 0;
      }

      $danado_espino = $_POST["danado_espino"];
       if (empty($danado_espino)) {
            $danado_espino = 0;
      }

      $consmax_espino = $_POST["consmax_espino"];
       if (empty($consmax_espino)) {
            $consmax_espino = 0;
      }

      $recibido_gascloro_espino = $_POST["recibido_gascloro_espino"];
       if (empty($recibido_gascloro_espino)) {
            $recibido_gascloro_espino = 0;
      }

      $recibido_sulfato_espino = $_POST["recibido_sulfato_espino"];
      if (empty($recibido_sulfato_espino)) {
            $recibido_sulfato_espino = 0;
      }

      $recibido_cal_espino = $_POST["recibido_cal_espino"];
      if (empty($recibido_cal_espino)) {
            $recibido_cal_espino = 0;
      }

      $recibido_hipoclorito_espino = $_POST["recibido_hipoclorito_espino"];
      if (empty($recibido_hipoclorito_espino)) {
            $recibido_hipoclorito_espino = 0;
      }

      $recibido_poli_espino = $_POST["recibido_poli_espino"];
      if (empty($recibido_poli_espino)) {
            $recibido_poli_espino = 0;
      }

      $recibido_clorolb_espino = $_POST["recibido_clorolb_espino"];
       if (empty($recibido_clorolb_espino)) {
            $recibido_clorolb_espino = 0;
      }

      $traspasos_gascloro_espino = $_POST["traspasos_gascloro_espino"];
       if (empty($traspasos_gascloro_espino)) {
            $traspasos_gascloro_espino = 0;
      }

      $traspasos_sulfato_espino = $_POST["traspasos_sulfato_espino"];
      if (empty($traspasos_sulfato_espino)) {
            $traspasos_sulfato_espino = 0;
      }

      $traspasos_cal_espino = $_POST["traspasos_cal_espino"];
      if (empty($traspasos_cal_espino)) {
            $traspasos_cal_espino = 0;
      }

      $traspasos_hipoclorito_espino = $_POST["traspasos_hipoclorito_espino"];
      if (empty($traspasos_hipoclorito_espino)) {
            $traspasos_hipoclorito_espino = 0;
      }

      $traspasos_poli_espino = $_POST["traspasos_poli_espino"];
      if (empty($traspasos_poli_espino)) {
            $traspasos_poli_espino = 0;
      }

      $traspasos_clorolb_espino = $_POST["traspasos_clorolb_espino"];
      if (empty($traspasos_clorolb_espino)) {
            $traspasos_clorolb_espino = 0;
      }


      $aplicacion_gascloro_espino = $_POST["aplicacion_gascloro_espino"];
      if (empty($aplicacion_gascloro_espino)) {
            $aplicacion_gascloro_espino = 0;
      }

      $aplicacion_sulfato_espino = $_POST["aplicacion_sulfato_espino"];
       if (empty($aplicacion_sulfato_espino)) {
            $aplicacion_sulfato_espino = 0;
      }

      $aplicacion_cal_espino = $_POST["aplicacion_cal_espino"];
       if (empty($aplicacion_cal_espino)) {
            $aplicacion_cal_espino = 0;
      }

      $aplicacion_hipoclorito_espino = $_POST["aplicacion_hipoclorito_espino"];
       if (empty($aplicacion_hipoclorito_espino)) {
            $aplicacion_hipoclorito_espino = 0;
      }

      $aplicacion_poli_espino = $_POST["aplicacion_poli_espino"];
       if (empty($aplicacion_poli_espino)) {
            $aplicacion_poli_espino = 0;
      }

      $aplicacion_clorolb_espino = $_POST["aplicacion_clorolb_espino"];
       if (empty($aplicacion_clorolb_espino)) {
            $aplicacion_clorolb_espino = 0;
      }

      $duracion_gascloro_espino = $_POST["duracion_gascloro_espino"];
       if (empty($duracion_gascloro_espino)) {
            $duracion_gascloro_espino = 0;
      }

      $duracion_sulfato_espino = $_POST["duracion_sulfato_espino"];
      if (empty($duracion_sulfato_espino)) {
            $duracion_sulfato_espino = 0;
      }

      $duracion_cal_espino = $_POST["duracion_cal_espino"];
      if (empty($duracion_cal_espino)) {
            $duracion_cal_espino = 0;
      }

      $duracion_hipoclorito_espino = $_POST["duracion_hipoclorito_espino"];
      if (empty($duracion_hipoclorito_espino)) {
            $duracion_hipoclorito_espino = 0;
      }

      $duracion_poli_espino = $_POST["duracion_poli_espino"];
      if (empty($duracion_poli_espino)) {
            $duracion_poli_espino = 0;
      }

      $duracion_clorolb_espino = $_POST["duracion_clorolb_espino"];
      if (empty($duracion_clorolb_espino)) {
            $duracion_clorolb_espino = 0;
      }

      $saldo_gascloro_espino = $_POST["saldo_gascloro_espino"];
      if (empty($saldo_gascloro_espino)) {
            $saldo_gascloro_espino = 0;
      }

      $saldo_sulfato_espino = $_POST["saldo_sulfato_espino"];
      if (empty($saldo_sulfato_espino)) {
            $saldo_sulfato_espino = 0;
      }

      $saldo_cal_espino = $_POST["saldo_cal_espino"];
      if (empty($saldo_cal_espino)) {
            $saldo_cal_espino = 0;
      }

      $saldo_hipoclorito_espino = $_POST["saldo_hipoclorito_espino"];
      if (empty($saldo_hipoclorito_espino)) {
            $saldo_hipoclorito_espino = 0;
      }

      $saldo_poli_espino = $_POST["saldo_poli_espino"];
      if (empty($saldo_poli_espino)) {
            $saldo_poli_espino = 0;
      }

      $saldo_clorolb_espino = $_POST["saldo_clorolb_espino"];
      if (empty($saldo_clorolb_espino)) {
            $saldo_clorolb_espino = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlEspino = ("SELECT * FROM formato_diario where id_sistema = 10 and fecha = '$fecha'");
      $resultEspino = pg_query($sqlEspino);
      $rowEspino = pg_fetch_array($resultEspino);

                   $AlmacenEspino = ("SELECT * FROM almacenes where id_sistema = 10");
                  $resultAlmacenEspino = pg_query($AlmacenEspino);
                  $rowAlmacenEspino = pg_fetch_array($resultAlmacenEspino);
                   $cilindros_llenos_espino = $rowAlmacenEspino[cilindros_llenos];
                  $cilindros_vacios_espino = $rowAlmacenEspino[cilindros_vacios];

      if ($rowEspino['reporte'] == 't') {
            $Espino = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (10, '$fecha',
               '$idUsuario', '$servicio_espino', '$danado_espino', '$consmax_espino',
                '$recibido_gascloro_espino', '$recibido_sulfato_espino', '$recibido_cal_espino', 
                '$recibido_hipoclorito_espino', '$recibido_poli_espino', '$recibido_clorolb_espino',
                 '$traspasos_gascloro_espino', '$traspasos_sulfato_espino', '$traspasos_cal_espino', 
                 '$traspasos_hipoclorito_espino', '$traspasos_poli_espino', '$traspasos_clorolb_espino',
                  '$aplicacion_gascloro_espino', '$aplicacion_sulfato_espino', '$aplicacion_cal_espino', 
                  '$aplicacion_hipoclorito_espino', '$aplicacion_poli_espino', '$aplicacion_clorolb_espino', 
                  '$duracion_gascloro_espino', '$duracion_sulfato_espino', '$duracion_cal_espino',
                   '$duracion_hipoclorito_espino', '$duracion_poli_espino', '$duracion_clorolb_espino', '$cilindros_llenos_espino', '$cilindros_vacios_espino', '$saldo_gascloro_espino', '$saldo_sulfato_espino', '$saldo_cal_espino', '$saldo_hipoclorito_espino', '$saldo_poli_espino', '$saldo_clorolb_espino')");
            if (pg_query($Espino)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenEspino['sulaluminio'] + $recibido_sulfato_espino - $traspasos_sulfato_espino;
                  $nuevoGascloro = $rowAlmacenEspino['gascloro'] + $recibido_gascloro_espino - $traspasos_gascloro_espino;
                  $nuevoCal = $rowAlmacenEspino['cal'] + $recibido_cal_espino - $traspasos_cal_espino;
                  $nuevoHipoclorito = $rowAlmacenEspino['hipoclorito'] + $recibido_hipoclorito_espino - $traspasos_hipoclorito_espino;
                  $nuevoPolicloruro = $rowAlmacenEspino['policloruro'] + $recibido_poli_espino - $traspasos_poli_espino;
                  $nuevoGasClorolb = $rowAlmacenEspino['gasclorolb'] + $recibido_clorolb_espino - $traspasos_clorolb_espino;

                  $updateAlmacenEspino = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 10");
                  if (pg_query($updateAlmacenEspino)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Espino!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Espino!') </script>";
            }
      }else{
            $Espino = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (10, '$fecha', '$idUsuario')");
            if (pg_query($Espino)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Espino!') </script>";
            }
      }

      //Guardatinajas  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_guardatinajas = $_POST["servicio_guardatinajas"];
      if (empty($servicio_guardatinajas)) {
            $servicio_guardatinajas = 0;
      }

      $danado_guardatinajas = $_POST["danado_guardatinajas"];
       if (empty($danado_guardatinajas)) {
            $danado_guardatinajas = 0;
      }

      $consmax_guardatinajas = $_POST["consmax_guardatinajas"];
       if (empty($consmax_guardatinajas)) {
            $consmax_guardatinajas = 0;
      }

      $recibido_gascloro_guardatinajas = $_POST["recibido_gascloro_guardatinajas"];
       if (empty($recibido_gascloro_guardatinajas)) {
            $recibido_gascloro_guardatinajas = 0;
      }

      $recibido_sulfato_guardatinajas = $_POST["recibido_sulfato_guardatinajas"];
      if (empty($recibido_sulfato_guardatinajas)) {
            $recibido_sulfato_guardatinajas = 0;
      }

      $recibido_cal_guardatinajas = $_POST["recibido_cal_guardatinajas"];
      if (empty($recibido_cal_guardatinajas)) {
            $recibido_cal_guardatinajas = 0;
      }

      $recibido_hipoclorito_guardatinajas = $_POST["recibido_hipoclorito_guardatinajas"];
      if (empty($recibido_hipoclorito_guardatinajas)) {
            $recibido_hipoclorito_guardatinajas = 0;
      }

      $recibido_poli_guardatinajas = $_POST["recibido_poli_guardatinajas"];
      if (empty($recibido_poli_guardatinajas)) {
            $recibido_poli_guardatinajas = 0;
      }

      $recibido_clorolb_guardatinajas = $_POST["recibido_clorolb_guardatinajas"];
       if (empty($recibido_clorolb_guardatinajas)) {
            $recibido_clorolb_guardatinajas = 0;
      }

      $traspasos_gascloro_guardatinajas = $_POST["traspasos_gascloro_guardatinajas"];
       if (empty($traspasos_gascloro_guardatinajas)) {
            $traspasos_gascloro_guardatinajas = 0;
      }

      $traspasos_sulfato_guardatinajas = $_POST["traspasos_sulfato_guardatinajas"];
      if (empty($traspasos_sulfato_guardatinajas)) {
            $traspasos_sulfato_guardatinajas = 0;
      }

      $traspasos_cal_guardatinajas = $_POST["traspasos_cal_guardatinajas"];
      if (empty($traspasos_cal_guardatinajas)) {
            $traspasos_cal_guardatinajas = 0;
      }

      $traspasos_hipoclorito_guardatinajas = $_POST["traspasos_hipoclorito_guardatinajas"];
      if (empty($traspasos_hipoclorito_guardatinajas)) {
            $traspasos_hipoclorito_guardatinajas = 0;
      }

      $traspasos_poli_guardatinajas = $_POST["traspasos_poli_guardatinajas"];
      if (empty($traspasos_poli_guardatinajas)) {
            $traspasos_poli_guardatinajas = 0;
      }

      $traspasos_clorolb_guardatinajas = $_POST["traspasos_clorolb_guardatinajas"];
      if (empty($traspasos_clorolb_guardatinajas)) {
            $traspasos_clorolb_guardatinajas = 0;
      }


      $aplicacion_gascloro_guardatinajas = $_POST["aplicacion_gascloro_guardatinajas"];
      if (empty($aplicacion_gascloro_guardatinajas)) {
            $aplicacion_gascloro_guardatinajas = 0;
      }

      $aplicacion_sulfato_guardatinajas = $_POST["aplicacion_sulfato_guardatinajas"];
       if (empty($aplicacion_sulfato_guardatinajas)) {
            $aplicacion_sulfato_guardatinajas = 0;
      }

      $aplicacion_cal_guardatinajas = $_POST["aplicacion_cal_guardatinajas"];
       if (empty($aplicacion_cal_guardatinajas)) {
            $aplicacion_cal_guardatinajas = 0;
      }

      $aplicacion_hipoclorito_guardatinajas = $_POST["aplicacion_hipoclorito_guardatinajas"];
       if (empty($aplicacion_hipoclorito_guardatinajas)) {
            $aplicacion_hipoclorito_guardatinajas = 0;
      }

      $aplicacion_poli_guardatinajas = $_POST["aplicacion_poli_guardatinajas"];
       if (empty($aplicacion_poli_guardatinajas)) {
            $aplicacion_poli_guardatinajas = 0;
      }

      $aplicacion_clorolb_guardatinajas = $_POST["aplicacion_clorolb_guardatinajas"];
       if (empty($aplicacion_clorolb_guardatinajas)) {
            $aplicacion_clorolb_guardatinajas = 0;
      }

      $duracion_gascloro_guardatinajas = $_POST["duracion_gascloro_guardatinajas"];
       if (empty($duracion_gascloro_guardatinajas)) {
            $duracion_gascloro_guardatinajas = 0;
      }

      $duracion_sulfato_guardatinajas = $_POST["duracion_sulfato_guardatinajas"];
      if (empty($duracion_sulfato_guardatinajas)) {
            $duracion_sulfato_guardatinajas = 0;
      }

      $duracion_cal_guardatinajas = $_POST["duracion_cal_guardatinajas"];
      if (empty($duracion_cal_guardatinajas)) {
            $duracion_cal_guardatinajas = 0;
      }

      $duracion_hipoclorito_guardatinajas = $_POST["duracion_hipoclorito_guardatinajas"];
      if (empty($duracion_hipoclorito_guardatinajas)) {
            $duracion_hipoclorito_guardatinajas = 0;
      }

      $duracion_poli_guardatinajas = $_POST["duracion_poli_guardatinajas"];
      if (empty($duracion_poli_guardatinajas)) {
            $duracion_poli_guardatinajas = 0;
      }

      $duracion_clorolb_guardatinajas = $_POST["duracion_clorolb_guardatinajas"];
      if (empty($duracion_clorolb_guardatinajas)) {
            $duracion_clorolb_guardatinajas = 0;
      }

      $saldo_gascloro_guardatinajas = $_POST["saldo_gascloro_guardatinajas"];
      if (empty($saldo_gascloro_guardatinajas)) {
            $saldo_gascloro_guardatinajas = 0;
      }

      $saldo_sulfato_guardatinajas = $_POST["saldo_sulfato_guardatinajas"];
      if (empty($saldo_sulfato_guardatinajas)) {
            $saldo_sulfato_guardatinajas = 0;
      }

      $saldo_cal_guardatinajas = $_POST["saldo_cal_guardatinajas"];
      if (empty($saldo_cal_guardatinajas)) {
            $saldo_cal_guardatinajas = 0;
      }

      $saldo_hipoclorito_guardatinajas = $_POST["saldo_hipoclorito_guardatinajas"];
      if (empty($saldo_hipoclorito_guardatinajas)) {
            $saldo_hipoclorito_guardatinajas = 0;
      }

      $saldo_poli_guardatinajas = $_POST["saldo_poli_guardatinajas"];
      if (empty($saldo_poli_guardatinajas)) {
            $saldo_poli_guardatinajas = 0;
      }

      $saldo_clorolb_guardatinajas = $_POST["saldo_clorolb_guardatinajas"];
      if (empty($saldo_clorolb_guardatinajas)) {
            $saldo_clorolb_guardatinajas = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlGuardatinajas = ("SELECT * FROM formato_diario where id_sistema = 11 and fecha = '$fecha'");
      $resultGuardatinajas = pg_query($sqlGuardatinajas);
      $rowGuardatinajas = pg_fetch_array($resultGuardatinajas);

                   $AlmacenGuardatinajas = ("SELECT * FROM almacenes where id_sistema = 11");
                  $resultAlmacenGuardatinajas = pg_query($AlmacenGuardatinajas);
                  $rowAlmacenGuardatinajas = pg_fetch_array($resultAlmacenGuardatinajas);
                  $cilindros_llenos_guardatinajas = $rowAlmacenGuardatinajas[cilindros_llenos];
                  $cilindros_vacios_guardatinajas = $rowAlmacenGuardatinajas[cilindros_vacios];

      if ($rowGuardatinajas['reporte'] == 't') {
            $Guardatinajas = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (11, '$fecha',
               '$idUsuario', '$servicio_guardatinajas', '$danado_guardatinajas', '$consmax_guardatinajas',
                '$recibido_gascloro_guardatinajas', '$recibido_sulfato_guardatinajas', '$recibido_cal_guardatinajas', 
                '$recibido_hipoclorito_guardatinajas', '$recibido_poli_guardatinajas', '$recibido_clorolb_guardatinajas',
                 '$traspasos_gascloro_guardatinajas', '$traspasos_sulfato_guardatinajas', '$traspasos_cal_guardatinajas', 
                 '$traspasos_hipoclorito_guardatinajas', '$traspasos_poli_guardatinajas', '$traspasos_clorolb_guardatinajas',
                  '$aplicacion_gascloro_guardatinajas', '$aplicacion_sulfato_guardatinajas', '$aplicacion_cal_guardatinajas', 
                  '$aplicacion_hipoclorito_guardatinajas', '$aplicacion_poli_guardatinajas', '$aplicacion_clorolb_guardatinajas', 
                  '$duracion_gascloro_guardatinajas', '$duracion_sulfato_guardatinajas', '$duracion_cal_guardatinajas',
                   '$duracion_hipoclorito_guardatinajas', '$duracion_poli_guardatinajas', '$duracion_clorolb_guardatinajas', '$cilindros_llenos_guardatinajas', '$cilindros_vacios_guardatinajas', '$saldo_gascloro_guardatinajas', '$saldo_sulfato_guardatinajas', '$saldo_cal_guardatinajas', '$saldo_hipoclorito_guardatinajas', '$saldo_poli_guardatinajas', '$saldo_clorolb_guardatinajas')");
            if (pg_query($Guardatinajas)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenGuardatinajas['sulaluminio'] + $recibido_sulfato_guardatinajas - $traspasos_sulfato_guardatinajas;
                  $nuevoGascloro = $rowAlmacenGuardatinajas['gascloro'] + $recibido_gascloro_guardatinajas - $traspasos_gascloro_guardatinajas;
                  $nuevoCal = $rowAlmacenGuardatinajas['cal'] + $recibido_cal_guardatinajas - $traspasos_cal_guardatinajas;
                  $nuevoHipoclorito = $rowAlmacenGuardatinajas['hipoclorito'] + $recibido_hipoclorito_guardatinajas - $traspasos_hipoclorito_guardatinajas;
                  $nuevoPolicloruro = $rowAlmacenGuardatinajas['policloruro'] + $recibido_poli_guardatinajas - $traspasos_poli_guardatinajas;
                  $nuevoGasClorolb = $rowAlmacenGuardatinajas['gasclorolb'] + $recibido_clorolb_guardatinajas - $traspasos_clorolb_guardatinajas;

                  $updateAlmacenGuardatinajas = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 11");
                  if (pg_query($updateAlmacenGuardatinajas)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Guardatinajas!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Guardatinajas!') </script>";
            }
      }else{
            $Guardatinajas = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (11, '$fecha', '$idUsuario')");
            if (pg_query($Guardatinajas)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Guardatinajas!') </script>";
            }
      }


      //San Rafael de Laya  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_sanrafael = $_POST["servicio_sanrafael"];
      if (empty($servicio_sanrafael)) {
            $servicio_sanrafael = 0;
      }

      $danado_sanrafael = $_POST["danado_sanrafael"];
       if (empty($danado_sanrafael)) {
            $danado_sanrafael = 0;
      }

      $consmax_sanrafael = $_POST["consmax_sanrafael"];
       if (empty($consmax_sanrafael)) {
            $consmax_sanrafael = 0;
      }

      $recibido_gascloro_sanrafael = $_POST["recibido_gascloro_sanrafael"];
       if (empty($recibido_gascloro_sanrafael)) {
            $recibido_gascloro_sanrafael = 0;
      }

      $recibido_sulfato_sanrafael = $_POST["recibido_sulfato_sanrafael"];
      if (empty($recibido_sulfato_sanrafael)) {
            $recibido_sulfato_sanrafael = 0;
      }

      $recibido_cal_sanrafael = $_POST["recibido_cal_sanrafael"];
      if (empty($recibido_cal_sanrafael)) {
            $recibido_cal_sanrafael = 0;
      }

      $recibido_hipoclorito_sanrafael = $_POST["recibido_hipoclorito_sanrafael"];
      if (empty($recibido_hipoclorito_sanrafael)) {
            $recibido_hipoclorito_sanrafael = 0;
      }

      $recibido_poli_sanrafael = $_POST["recibido_poli_sanrafael"];
      if (empty($recibido_poli_sanrafael)) {
            $recibido_poli_sanrafael = 0;
      }

      $recibido_clorolb_sanrafael = $_POST["recibido_clorolb_sanrafael"];
       if (empty($recibido_clorolb_sanrafael)) {
            $recibido_clorolb_sanrafael = 0;
      }

      $traspasos_gascloro_sanrafael = $_POST["traspasos_gascloro_sanrafael"];
       if (empty($traspasos_gascloro_sanrafael)) {
            $traspasos_gascloro_sanrafael = 0;
      }

      $traspasos_sulfato_sanrafael = $_POST["traspasos_sulfato_sanrafael"];
      if (empty($traspasos_sulfato_sanrafael)) {
            $traspasos_sulfato_sanrafael = 0;
      }

      $traspasos_cal_sanrafael = $_POST["traspasos_cal_sanrafael"];
      if (empty($traspasos_cal_sanrafael)) {
            $traspasos_cal_sanrafael = 0;
      }

      $traspasos_hipoclorito_sanrafael = $_POST["traspasos_hipoclorito_sanrafael"];
      if (empty($traspasos_hipoclorito_sanrafael)) {
            $traspasos_hipoclorito_sanrafael = 0;
      }

      $traspasos_poli_sanrafael = $_POST["traspasos_poli_sanrafael"];
      if (empty($traspasos_poli_sanrafael)) {
            $traspasos_poli_sanrafael = 0;
      }

      $traspasos_clorolb_sanrafael = $_POST["traspasos_clorolb_sanrafael"];
      if (empty($traspasos_clorolb_sanrafael)) {
            $traspasos_clorolb_sanrafael = 0;
      }


      $aplicacion_gascloro_sanrafael = $_POST["aplicacion_gascloro_sanrafael"];
      if (empty($aplicacion_gascloro_sanrafael)) {
            $aplicacion_gascloro_sanrafael = 0;
      }

      $aplicacion_sulfato_sanrafael = $_POST["aplicacion_sulfato_sanrafael"];
       if (empty($aplicacion_sulfato_sanrafael)) {
            $aplicacion_sulfato_sanrafael = 0;
      }

      $aplicacion_cal_sanrafael = $_POST["aplicacion_cal_sanrafael"];
       if (empty($aplicacion_cal_sanrafael)) {
            $aplicacion_cal_sanrafael = 0;
      }

      $aplicacion_hipoclorito_sanrafael = $_POST["aplicacion_hipoclorito_sanrafael"];
       if (empty($aplicacion_hipoclorito_sanrafael)) {
            $aplicacion_hipoclorito_sanrafael = 0;
      }

      $aplicacion_poli_sanrafael = $_POST["aplicacion_poli_sanrafael"];
       if (empty($aplicacion_poli_sanrafael)) {
            $aplicacion_poli_sanrafael = 0;
      }

      $aplicacion_clorolb_sanrafael = $_POST["aplicacion_clorolb_sanrafael"];
       if (empty($aplicacion_clorolb_sanrafael)) {
            $aplicacion_clorolb_sanrafael = 0;
      }

      $duracion_gascloro_sanrafael = $_POST["duracion_gascloro_sanrafael"];
       if (empty($duracion_gascloro_sanrafael)) {
            $duracion_gascloro_sanrafael = 0;
      }

      $duracion_sulfato_sanrafael = $_POST["duracion_sulfato_sanrafael"];
      if (empty($duracion_sulfato_sanrafael)) {
            $duracion_sulfato_sanrafael = 0;
      }

      $duracion_cal_sanrafael = $_POST["duracion_cal_sanrafael"];
      if (empty($duracion_cal_sanrafael)) {
            $duracion_cal_sanrafael = 0;
      }

      $duracion_hipoclorito_sanrafael = $_POST["duracion_hipoclorito_sanrafael"];
      if (empty($duracion_hipoclorito_sanrafael)) {
            $duracion_hipoclorito_sanrafael = 0;
      }

      $duracion_poli_sanrafael = $_POST["duracion_poli_sanrafael"];
      if (empty($duracion_poli_sanrafael)) {
            $duracion_poli_sanrafael = 0;
      }

      $duracion_clorolb_sanrafael = $_POST["duracion_clorolb_sanrafael"];
      if (empty($duracion_clorolb_sanrafael)) {
            $duracion_clorolb_sanrafael = 0;
      }

      $saldo_gascloro_sanrafael = $_POST["saldo_gascloro_sanrafael"];
      if (empty($saldo_gascloro_sanrafael)) {
            $saldo_gascloro_sanrafael = 0;
      }

      $saldo_sulfato_sanrafael = $_POST["saldo_sulfato_sanrafael"];
      if (empty($saldo_sulfato_sanrafael)) {
            $saldo_sulfato_sanrafael = 0;
      }

      $saldo_cal_sanrafael = $_POST["saldo_cal_sanrafael"];
      if (empty($saldo_cal_sanrafael)) {
            $saldo_cal_sanrafael = 0;
      }

      $saldo_hipoclorito_sanrafael = $_POST["saldo_hipoclorito_sanrafael"];
      if (empty($saldo_hipoclorito_sanrafael)) {
            $saldo_hipoclorito_sanrafael = 0;
      }

      $saldo_poli_sanrafael = $_POST["saldo_poli_sanrafael"];
      if (empty($saldo_poli_sanrafael)) {
            $saldo_poli_sanrafael = 0;
      }

      $saldo_clorolb_sanrafael = $_POST["saldo_clorolb_sanrafael"];
      if (empty($saldo_clorolb_sanrafael)) {
            $saldo_clorolb_sanrafael = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSanRafael = ("SELECT * FROM formato_diario where id_sistema = 12 and fecha = '$fecha'");
      $resultSanRafael = pg_query($sqlSanRafael);
      $rowSanRafael = pg_fetch_array($resultSanRafael);

                  $AlmacenSanRafael = ("SELECT * FROM almacenes where id_sistema = 12");
                  $resultAlmacenSanRafael = pg_query($AlmacenSanRafael);
                  $rowAlmacenSanRafael = pg_fetch_array($resultAlmacenSanRafael);
                  $cilindros_llenos_sanrafael = $rowAlmacenSanRafael[cilindros_llenos];
                  $cilindros_vacios_sanrafael = $rowAlmacenSanRafael[cilindros_vacios];


      if ($rowSanRafael['reporte'] == 't') {
            $SanRafael = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (12, '$fecha',
               '$idUsuario', '$servicio_sanrafael', '$danado_sanrafael', '$consmax_sanrafael',
                '$recibido_gascloro_sanrafael', '$recibido_sulfato_sanrafael', '$recibido_cal_sanrafael', 
                '$recibido_hipoclorito_sanrafael', '$recibido_poli_sanrafael', '$recibido_clorolb_sanrafael',
                 '$traspasos_gascloro_sanrafael', '$traspasos_sulfato_sanrafael', '$traspasos_cal_sanrafael', 
                 '$traspasos_hipoclorito_sanrafael', '$traspasos_poli_sanrafael', '$traspasos_clorolb_sanrafael',
                  '$aplicacion_gascloro_sanrafael', '$aplicacion_sulfato_sanrafael', '$aplicacion_cal_sanrafael', 
                  '$aplicacion_hipoclorito_sanrafael', '$aplicacion_poli_sanrafael', '$aplicacion_clorolb_sanrafael', 
                  '$duracion_gascloro_sanrafael', '$duracion_sulfato_sanrafael', '$duracion_cal_sanrafael',
                   '$duracion_hipoclorito_sanrafael', '$duracion_poli_sanrafael', '$duracion_clorolb_sanrafael', '$cilindros_llenos_sanrafael', '$cilindros_vacios_sanrafael', '$saldo_gascloro_sanrafael', '$saldo_sulfato_sanrafael', '$saldo_cal_sanrafael', '$saldo_hipoclorito_sanrafael', '$saldo_poli_sanrafael', '$saldo_clorolb_sanrafael')");
            if (pg_query($SanRafael)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                  

                  $nuevoSulfato = $rowAlmacenSanRafael['sulaluminio'] + $recibido_sulfato_sanrafael - $traspasos_sulfato_sanrafael;
                  $nuevoGascloro = $rowAlmacenSanRafael['gascloro'] + $recibido_gascloro_sanrafael - $traspasos_gascloro_sanrafael;
                  $nuevoCal = $rowAlmacenSanRafael['cal'] + $recibido_cal_sanrafael - $traspasos_cal_sanrafael;
                  $nuevoHipoclorito = $rowAlmacenSanRafael['hipoclorito'] + $recibido_hipoclorito_sanrafael - $traspasos_hipoclorito_sanrafael;
                  $nuevoPolicloruro = $rowAlmacenSanRafael['policloruro'] + $recibido_poli_sanrafael - $traspasos_poli_sanrafael;
                  $nuevoGasClorolb = $rowAlmacenSanRafael['gasclorolb'] + $recibido_clorolb_sanrafael - $traspasos_clorolb_sanrafael;

                  $updateAlmacenSanRafael = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 12");
                  if (pg_query($updateAlmacenSanRafael)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de SanRafael!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada SanRafael!') </script>";
            }
      }else{
            $SanRafael = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (12, '$fecha', '$idUsuario')");
            if (pg_query($SanRafael)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  SanRafael!') </script>";
            }
      }

      //Chaguaramas  ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_chaguaramas = $_POST["servicio_chaguaramas"];
      if (empty($servicio_chaguaramas)) {
            $servicio_chaguaramas = 0;
      }

      $danado_chaguaramas = $_POST["danado_chaguaramas"];
       if (empty($danado_chaguaramas)) {
            $danado_chaguaramas = 0;
      }

      $consmax_chaguaramas = $_POST["consmax_chaguaramas"];
       if (empty($consmax_chaguaramas)) {
            $consmax_chaguaramas = 0;
      }

      $recibido_gascloro_chaguaramas = $_POST["recibido_gascloro_chaguaramas"];
       if (empty($recibido_gascloro_chaguaramas)) {
            $recibido_gascloro_chaguaramas = 0;
      }

      $recibido_sulfato_chaguaramas = $_POST["recibido_sulfato_chaguaramas"];
      if (empty($recibido_sulfato_chaguaramas)) {
            $recibido_sulfato_chaguaramas = 0;
      }

      $recibido_cal_chaguaramas = $_POST["recibido_cal_chaguaramas"];
      if (empty($recibido_cal_chaguaramas)) {
            $recibido_cal_chaguaramas = 0;
      }

      $recibido_hipoclorito_chaguaramas = $_POST["recibido_hipoclorito_chaguaramas"];
      if (empty($recibido_hipoclorito_chaguaramas)) {
            $recibido_hipoclorito_chaguaramas = 0;
      }

      $recibido_poli_chaguaramas = $_POST["recibido_poli_chaguaramas"];
      if (empty($recibido_poli_chaguaramas)) {
            $recibido_poli_chaguaramas = 0;
      }

      $recibido_clorolb_chaguaramas = $_POST["recibido_clorolb_chaguaramas"];
       if (empty($recibido_clorolb_chaguaramas)) {
            $recibido_clorolb_chaguaramas = 0;
      }

      $traspasos_gascloro_chaguaramas = $_POST["traspasos_gascloro_chaguaramas"];
       if (empty($traspasos_gascloro_chaguaramas)) {
            $traspasos_gascloro_chaguaramas = 0;
      }

      $traspasos_sulfato_chaguaramas = $_POST["traspasos_sulfato_chaguaramas"];
      if (empty($traspasos_sulfato_chaguaramas)) {
            $traspasos_sulfato_chaguaramas = 0;
      }

      $traspasos_cal_chaguaramas = $_POST["traspasos_cal_chaguaramas"];
      if (empty($traspasos_cal_chaguaramas)) {
            $traspasos_cal_chaguaramas = 0;
      }

      $traspasos_hipoclorito_chaguaramas = $_POST["traspasos_hipoclorito_chaguaramas"];
      if (empty($traspasos_hipoclorito_chaguaramas)) {
            $traspasos_hipoclorito_chaguaramas = 0;
      }

      $traspasos_poli_chaguaramas = $_POST["traspasos_poli_chaguaramas"];
      if (empty($traspasos_poli_chaguaramas)) {
            $traspasos_poli_chaguaramas = 0;
      }

      $traspasos_clorolb_chaguaramas = $_POST["traspasos_clorolb_chaguaramas"];
      if (empty($traspasos_clorolb_chaguaramas)) {
            $traspasos_clorolb_chaguaramas = 0;
      }


      $aplicacion_gascloro_chaguaramas = $_POST["aplicacion_gascloro_chaguaramas"];
      if (empty($aplicacion_gascloro_chaguaramas)) {
            $aplicacion_gascloro_chaguaramas = 0;
      }

      $aplicacion_sulfato_chaguaramas = $_POST["aplicacion_sulfato_chaguaramas"];
       if (empty($aplicacion_sulfato_chaguaramas)) {
            $aplicacion_sulfato_chaguaramas = 0;
      }

      $aplicacion_cal_chaguaramas = $_POST["aplicacion_cal_chaguaramas"];
       if (empty($aplicacion_cal_chaguaramas)) {
            $aplicacion_cal_chaguaramas = 0;
      }

      $aplicacion_hipoclorito_chaguaramas = $_POST["aplicacion_hipoclorito_chaguaramas"];
       if (empty($aplicacion_hipoclorito_chaguaramas)) {
            $aplicacion_hipoclorito_chaguaramas = 0;
      }

      $aplicacion_poli_chaguaramas = $_POST["aplicacion_poli_chaguaramas"];
       if (empty($aplicacion_poli_chaguaramas)) {
            $aplicacion_poli_chaguaramas = 0;
      }

      $aplicacion_clorolb_chaguaramas = $_POST["aplicacion_clorolb_chaguaramas"];
       if (empty($aplicacion_clorolb_chaguaramas)) {
            $aplicacion_clorolb_chaguaramas = 0;
      }

      $duracion_gascloro_chaguaramas = $_POST["duracion_gascloro_chaguaramas"];
       if (empty($duracion_gascloro_chaguaramas)) {
            $duracion_gascloro_chaguaramas = 0;
      }

      $duracion_sulfato_chaguaramas = $_POST["duracion_sulfato_chaguaramas"];
      if (empty($duracion_sulfato_chaguaramas)) {
            $duracion_sulfato_chaguaramas = 0;
      }

      $duracion_cal_chaguaramas = $_POST["duracion_cal_chaguaramas"];
      if (empty($duracion_cal_chaguaramas)) {
            $duracion_cal_chaguaramas = 0;
      }

      $duracion_hipoclorito_chaguaramas = $_POST["duracion_hipoclorito_chaguaramas"];
      if (empty($duracion_hipoclorito_chaguaramas)) {
            $duracion_hipoclorito_chaguaramas = 0;
      }

      $duracion_poli_chaguaramas = $_POST["duracion_poli_chaguaramas"];
      if (empty($duracion_poli_chaguaramas)) {
            $duracion_poli_chaguaramas = 0;
      }

      $duracion_clorolb_chaguaramas = $_POST["duracion_clorolb_chaguaramas"];
      if (empty($duracion_clorolb_chaguaramas)) {
            $duracion_clorolb_chaguaramas = 0;
      }

      $saldo_gascloro_chaguaramas = $_POST["saldo_gascloro_chaguaramas"];
      if (empty($saldo_gascloro_chaguaramas)) {
            $saldo_gascloro_chaguaramas = 0;
      }

      $saldo_sulfato_chaguaramas = $_POST["saldo_sulfato_chaguaramas"];
      if (empty($saldo_sulfato_chaguaramas)) {
            $saldo_sulfato_chaguaramas = 0;
      }

      $saldo_cal_chaguaramas = $_POST["saldo_cal_chaguaramas"];
      if (empty($saldo_cal_chaguaramas)) {
            $saldo_cal_chaguaramas = 0;
      }

      $saldo_hipoclorito_chaguaramas = $_POST["saldo_hipoclorito_chaguaramas"];
      if (empty($saldo_hipoclorito_chaguaramas)) {
            $saldo_hipoclorito_chaguaramas = 0;
      }

      $saldo_poli_chaguaramas = $_POST["saldo_poli_chaguaramas"];
      if (empty($saldo_poli_chaguaramas)) {
            $saldo_poli_chaguaramas = 0;
      }

      $saldo_clorolb_chaguaramas = $_POST["saldo_clorolb_chaguaramas"];
      if (empty($saldo_clorolb_chaguaramas)) {
            $saldo_clorolb_chaguaramas = 0;
      }
      //Consultamos el formato Diario de San Juan de ese dia
      $sqlChaguaramas = ("SELECT * FROM formato_diario where id_sistema = 13 and fecha = '$fecha'");
      $resultChaguaramas = pg_query($sqlChaguaramas);
      $rowChaguaramas = pg_fetch_array($resultChaguaramas);

                  $AlmacenChaguaramas = ("SELECT * FROM almacenes where id_sistema = 13");
                  $resultAlmacenChaguaramas = pg_query($AlmacenChaguaramas);
                  $rowAlmacenChaguaramas = pg_fetch_array($resultAlmacenChaguaramas);
                  $cilindros_llenos_chaguaramas = $rowAlmacenChaguaramas[cilindros_llenos];
                  $cilindros_vacios_chaguaramas = $rowAlmacenChaguaramas[cilindros_vacios];

      if ($rowChaguaramas['reporte'] == 't') {
            $Chaguaramas = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (13, '$fecha',
               '$idUsuario', '$servicio_chaguaramas', '$danado_chaguaramas', '$consmax_chaguaramas',
                '$recibido_gascloro_chaguaramas', '$recibido_sulfato_chaguaramas', '$recibido_cal_chaguaramas', 
                '$recibido_hipoclorito_chaguaramas', '$recibido_poli_chaguaramas', '$recibido_clorolb_chaguaramas',
                 '$traspasos_gascloro_chaguaramas', '$traspasos_sulfato_chaguaramas', '$traspasos_cal_chaguaramas', 
                 '$traspasos_hipoclorito_chaguaramas', '$traspasos_poli_chaguaramas', '$traspasos_clorolb_chaguaramas',
                  '$aplicacion_gascloro_chaguaramas', '$aplicacion_sulfato_chaguaramas', '$aplicacion_cal_chaguaramas', 
                  '$aplicacion_hipoclorito_chaguaramas', '$aplicacion_poli_chaguaramas', '$aplicacion_clorolb_chaguaramas', 
                  '$duracion_gascloro_chaguaramas', '$duracion_sulfato_chaguaramas', '$duracion_cal_chaguaramas',
                   '$duracion_hipoclorito_chaguaramas', '$duracion_poli_chaguaramas', '$duracion_clorolb_chaguaramas', '$cilindros_llenos_chaguaramas', '$cilindros_vacios_chaguaramas', '$saldo_gascloro_chaguaramas', '$saldo_sulfato_chaguaramas', '$saldo_cal_chaguaramas', '$saldo_hipoclorito_chaguaramas', '$saldo_poli_chaguaramas', '$saldo_clorolb_chaguaramas')");
            if (pg_query($Chaguaramas)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                 

                  $nuevoSulfato = $rowAlmacenChaguaramas['sulaluminio'] + $recibido_sulfato_chaguaramas - $traspasos_sulfato_chaguaramas;
                  $nuevoGascloro = $rowAlmacenChaguaramas['gascloro'] + $recibido_gascloro_chaguaramas - $traspasos_gascloro_chaguaramas;
                  $nuevoCal = $rowAlmacenChaguaramas['cal'] + $recibido_cal_chaguaramas - $traspasos_cal_chaguaramas;
                  $nuevoHipoclorito = $rowAlmacenChaguaramas['hipoclorito'] + $recibido_hipoclorito_chaguaramas - $traspasos_hipoclorito_chaguaramas;
                  $nuevoPolicloruro = $rowAlmacenChaguaramas['policloruro'] + $recibido_poli_chaguaramas - $traspasos_poli_chaguaramas;
                  $nuevoGasClorolb = $rowAlmacenChaguaramas['gasclorolb'] + $recibido_clorolb_chaguaramas - $traspasos_clorolb_chaguaramas;

                  $updateAlmacenChaguaramas = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 13");
                  if (pg_query($updateAlmacenChaguaramas)) {
                       
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de Chaguaramas!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada Chaguaramas!') </script>";
            }
      }else{
            $Chaguaramas = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (13, '$fecha', '$idUsuario')");
            if (pg_query($Chaguaramas)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  Chaguaramas!') </script>";
            }
      }


       //Sombrero Galeria ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_somGaleria = $_POST["servicio_somGaleria"];
      if (empty($servicio_somGaleria)) {
            $servicio_somGaleria = 0;
      }

      $danado_somGaleria = $_POST["danado_somGaleria"];
       if (empty($danado_somGaleria)) {
            $danado_somGaleria = 0;
      }

      $consmax_somGaleria = $_POST["consmax_somGaleria"];
       if (empty($consmax_somGaleria)) {
            $consmax_somGaleria = 0;
      }

      $recibido_gascloro_somGaleria = $_POST["recibido_gascloro_somGaleria"];
       if (empty($recibido_gascloro_somGaleria)) {
            $recibido_gascloro_somGaleria = 0;
      }

      $recibido_sulfato_somGaleria = $_POST["recibido_sulfato_somGaleria"];
      if (empty($recibido_sulfato_somGaleria)) {
            $recibido_sulfato_somGaleria = 0;
      }

      $recibido_cal_somGaleria = $_POST["recibido_cal_somGaleria"];
      if (empty($recibido_cal_somGaleria)) {
            $recibido_cal_somGaleria = 0;
      }

      $recibido_hipoclorito_somGaleria = $_POST["recibido_hipoclorito_somGaleria"];
      if (empty($recibido_hipoclorito_somGaleria)) {
            $recibido_hipoclorito_somGaleria = 0;
      }

      $recibido_poli_somGaleria = $_POST["recibido_poli_somGaleria"];
      if (empty($recibido_poli_somGaleria)) {
            $recibido_poli_somGaleria = 0;
      }

      $recibido_clorolb_somGaleria = $_POST["recibido_clorolb_somGaleria"];
       if (empty($recibido_clorolb_somGaleria)) {
            $recibido_clorolb_somGaleria = 0;
      }

      $traspasos_gascloro_somGaleria = $_POST["traspasos_gascloro_somGaleria"];
       if (empty($traspasos_gascloro_somGaleria)) {
            $traspasos_gascloro_somGaleria = 0;
      }

      $traspasos_sulfato_somGaleria = $_POST["traspasos_sulfato_somGaleria"];
      if (empty($traspasos_sulfato_somGaleria)) {
            $traspasos_sulfato_somGaleria = 0;
      }

      $traspasos_cal_somGaleria = $_POST["traspasos_cal_somGaleria"];
      if (empty($traspasos_cal_somGaleria)) {
            $traspasos_cal_somGaleria = 0;
      }

      $traspasos_hipoclorito_somGaleria = $_POST["traspasos_hipoclorito_somGaleria"];
      if (empty($traspasos_hipoclorito_somGaleria)) {
            $traspasos_hipoclorito_somGaleria = 0;
      }

      $traspasos_poli_somGaleria = $_POST["traspasos_poli_somGaleria"];
      if (empty($traspasos_poli_somGaleria)) {
            $traspasos_poli_somGaleria = 0;
      }

      $traspasos_clorolb_somGaleria = $_POST["traspasos_clorolb_somGaleria"];
      if (empty($traspasos_clorolb_somGaleria)) {
            $traspasos_clorolb_somGaleria = 0;
      }


      $aplicacion_gascloro_somGaleria = $_POST["aplicacion_gascloro_somGaleria"];
      if (empty($aplicacion_gascloro_somGaleria)) {
            $aplicacion_gascloro_somGaleria = 0;
      }

      $aplicacion_sulfato_somGaleria = $_POST["aplicacion_sulfato_somGaleria"];
       if (empty($aplicacion_sulfato_somGaleria)) {
            $aplicacion_sulfato_somGaleria = 0;
      }

      $aplicacion_cal_somGaleria = $_POST["aplicacion_cal_somGaleria"];
       if (empty($aplicacion_cal_somGaleria)) {
            $aplicacion_cal_somGaleria = 0;
      }

      $aplicacion_hipoclorito_somGaleria = $_POST["aplicacion_hipoclorito_somGaleria"];
       if (empty($aplicacion_hipoclorito_somGaleria)) {
            $aplicacion_hipoclorito_somGaleria = 0;
      }

      $aplicacion_poli_somGaleria = $_POST["aplicacion_poli_somGaleria"];
       if (empty($aplicacion_poli_somGaleria)) {
            $aplicacion_poli_somGaleria = 0;
      }

      $aplicacion_clorolb_somGaleria = $_POST["aplicacion_clorolb_somGaleria"];
       if (empty($aplicacion_clorolb_somGaleria)) {
            $aplicacion_clorolb_somGaleria = 0;
      }

      $duracion_gascloro_somGaleria = $_POST["duracion_gascloro_somGaleria"];
       if (empty($duracion_gascloro_somGaleria)) {
            $duracion_gascloro_somGaleria = 0;
      }

      $duracion_sulfato_somGaleria = $_POST["duracion_sulfato_somGaleria"];
      if (empty($duracion_sulfato_somGaleria)) {
            $duracion_sulfato_somGaleria = 0;
      }

      $duracion_cal_somGaleria = $_POST["duracion_cal_somGaleria"];
      if (empty($duracion_cal_somGaleria)) {
            $duracion_cal_somGaleria = 0;
      }

      $duracion_hipoclorito_somGaleria = $_POST["duracion_hipoclorito_somGaleria"];
      if (empty($duracion_hipoclorito_somGaleria)) {
            $duracion_hipoclorito_somGaleria = 0;
      }

      $duracion_poli_somGaleria = $_POST["duracion_poli_somGaleria"];
      if (empty($duracion_poli_somGaleria)) {
            $duracion_poli_somGaleria = 0;
      }

      $duracion_clorolb_somGaleria = $_POST["duracion_clorolb_somGaleria"];
      if (empty($duracion_clorolb_somGaleria)) {
            $duracion_clorolb_somGaleria = 0;
      }

      $saldo_gascloro_somGaleria = $_POST["saldo_gascloro_somGaleria"];
      if (empty($saldo_gascloro_somGaleria)) {
            $saldo_gascloro_somGaleria = 0;
      }

      $saldo_sulfato_somGaleria = $_POST["saldo_sulfato_somGaleria"];
      if (empty($saldo_sulfato_somGaleria)) {
            $saldo_sulfato_somGaleria = 0;
      }

      $saldo_cal_somGaleria = $_POST["saldo_cal_somGaleria"];
      if (empty($saldo_cal_somGaleria)) {
            $saldo_cal_somGaleria = 0;
      }

      $saldo_hipoclorito_somGaleria = $_POST["saldo_hipoclorito_somGaleria"];
      if (empty($saldo_hipoclorito_somGaleria)) {
            $saldo_hipoclorito_somGaleria = 0;
      }

      $saldo_poli_somGaleria = $_POST["saldo_poli_somGaleria"];
      if (empty($saldo_poli_somGaleria)) {
            $saldo_poli_somGaleria = 0;
      }

      $saldo_clorolb_somGaleria = $_POST["saldo_clorolb_somGaleria"];
      if (empty($saldo_clorolb_somGaleria)) {
            $saldo_clorolb_somGaleria = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSomGaleria = ("SELECT * FROM formato_diario where id_sistema = 14 and fecha = '$fecha'");
      $resultSomGaleria = pg_query($sqlSomGaleria);
      $rowSomGaleria = pg_fetch_array($resultSomGaleria);

                  $AlmacenSomGaleria = ("SELECT * FROM almacenes where id_sistema = 14");
                  $resultAlmacenSomGaleria = pg_query($AlmacenSomGaleria);
                  $rowAlmacenSomGaleria = pg_fetch_array($resultAlmacenSomGaleria);
                   $cilindros_llenos_somGaleria = $rowAlmacenSomGaleria[cilindros_llenos];
                  $cilindros_vacios_somGaleria = $rowAlmacenSomGaleria[cilindros_vacios];

      if ($rowSomGaleria['reporte'] == 't') {
            $SomGaleria = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (14, '$fecha',
               '$idUsuario', '$servicio_somGaleria', '$danado_somGaleria', '$consmax_somGaleria',
                '$recibido_gascloro_somGaleria', '$recibido_sulfato_somGaleria', '$recibido_cal_somGaleria', 
                '$recibido_hipoclorito_somGaleria', '$recibido_poli_somGaleria', '$recibido_clorolb_somGaleria',
                 '$traspasos_gascloro_somGaleria', '$traspasos_sulfato_somGaleria', '$traspasos_cal_somGaleria', 
                 '$traspasos_hipoclorito_somGaleria', '$traspasos_poli_somGaleria', '$traspasos_clorolb_somGaleria',
                  '$aplicacion_gascloro_somGaleria', '$aplicacion_sulfato_somGaleria', '$aplicacion_cal_somGaleria', 
                  '$aplicacion_hipoclorito_somGaleria', '$aplicacion_poli_somGaleria', '$aplicacion_clorolb_somGaleria', 
                  '$duracion_gascloro_somGaleria', '$duracion_sulfato_somGaleria', '$duracion_cal_somGaleria',
                   '$duracion_hipoclorito_somGaleria', '$duracion_poli_somGaleria', '$duracion_clorolb_somGaleria', '$cilindros_llenos_somGaleria', '$cilindros_vacios_somGaleria', '$saldo_gascloro_somGaleria', '$saldo_sulfato_somGaleria', '$saldo_cal_somGaleria', '$saldo_hipoclorito_somGaleria', '$saldo_poli_somGaleria', '$saldo_clorolb_somGaleria')");
            if (pg_query($SomGaleria)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                 

                  $nuevoSulfato = $rowAlmacenSomGaleria['sulaluminio'] + $recibido_sulfato_somGaleria - $traspasos_sulfato_somGaleria;
                  $nuevoGascloro = $rowAlmacenSomGaleria['gascloro'] + $recibido_gascloro_somGaleria - $traspasos_gascloro_somGaleria;
                  $nuevoCal = $rowAlmacenSomGaleria['cal'] + $recibido_cal_somGaleria - $traspasos_cal_somGaleria;
                  $nuevoHipoclorito = $rowAlmacenSomGaleria['hipoclorito'] + $recibido_hipoclorito_somGaleria - $traspasos_hipoclorito_somGaleria;
                  $nuevoPolicloruro = $rowAlmacenSomGaleria['policloruro'] + $recibido_poli_somGaleria - $traspasos_poli_somGaleria;
                  $nuevoGasClorolb = $rowAlmacenSomGaleria['gasclorolb'] + $recibido_clorolb_somGaleria - $traspasos_clorolb_somGaleria;

                  $updateAlmacenSomGaleria = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 14");
                  if (pg_query($updateAlmacenSomGaleria)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de SomGaleria!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada SomGaleria!') </script>";
            }
      }else{
            $SomGaleria = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (14, '$fecha', '$idUsuario')");
            if (pg_query($SomGaleria)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  SomGaleria!') </script>";
            }
      }


      //Sombrero Obrero ///////////////////////////////////////////////////////////////////////////////////////////////
      $servicio_somObrero = $_POST["servicio_somObrero"];
      if (empty($servicio_somObrero)) {
            $servicio_somObrero = 0;
      }

      $danado_somObrero = $_POST["danado_somObrero"];
       if (empty($danado_somObrero)) {
            $danado_somObrero = 0;
      }

      $consmax_somObrero = $_POST["consmax_somObrero"];
       if (empty($consmax_somObrero)) {
            $consmax_somObrero = 0;
      }

      $recibido_gascloro_somObrero = $_POST["recibido_gascloro_somObrero"];
       if (empty($recibido_gascloro_somObrero)) {
            $recibido_gascloro_somObrero = 0;
      }

      $recibido_sulfato_somObrero = $_POST["recibido_sulfato_somObrero"];
      if (empty($recibido_sulfato_somObrero)) {
            $recibido_sulfato_somObrero = 0;
      }

      $recibido_cal_somObrero = $_POST["recibido_cal_somObrero"];
      if (empty($recibido_cal_somObrero)) {
            $recibido_cal_somObrero = 0;
      }

      $recibido_hipoclorito_somObrero = $_POST["recibido_hipoclorito_somObrero"];
      if (empty($recibido_hipoclorito_somObrero)) {
            $recibido_hipoclorito_somObrero = 0;
      }

      $recibido_poli_somObrero = $_POST["recibido_poli_somObrero"];
      if (empty($recibido_poli_somObrero)) {
            $recibido_poli_somObrero = 0;
      }

      $recibido_clorolb_somObrero = $_POST["recibido_clorolb_somObrero"];
       if (empty($recibido_clorolb_somObrero)) {
            $recibido_clorolb_somObrero = 0;
      }

      $traspasos_gascloro_somObrero = $_POST["traspasos_gascloro_somObrero"];
       if (empty($traspasos_gascloro_somObrero)) {
            $traspasos_gascloro_somObrero = 0;
      }

      $traspasos_sulfato_somObrero = $_POST["traspasos_sulfato_somObrero"];
      if (empty($traspasos_sulfato_somObrero)) {
            $traspasos_sulfato_somObrero = 0;
      }

      $traspasos_cal_somObrero = $_POST["traspasos_cal_somObrero"];
      if (empty($traspasos_cal_somObrero)) {
            $traspasos_cal_somObrero = 0;
      }

      $traspasos_hipoclorito_somObrero = $_POST["traspasos_hipoclorito_somObrero"];
      if (empty($traspasos_hipoclorito_somObrero)) {
            $traspasos_hipoclorito_somObrero = 0;
      }

      $traspasos_poli_somObrero = $_POST["traspasos_poli_somObrero"];
      if (empty($traspasos_poli_somObrero)) {
            $traspasos_poli_somObrero = 0;
      }

      $traspasos_clorolb_somObrero = $_POST["traspasos_clorolb_somObrero"];
      if (empty($traspasos_clorolb_somObrero)) {
            $traspasos_clorolb_somObrero = 0;
      }


      $aplicacion_gascloro_somObrero = $_POST["aplicacion_gascloro_somObrero"];
      if (empty($aplicacion_gascloro_somObrero)) {
            $aplicacion_gascloro_somObrero = 0;
      }

      $aplicacion_sulfato_somObrero = $_POST["aplicacion_sulfato_somObrero"];
       if (empty($aplicacion_sulfato_somObrero)) {
            $aplicacion_sulfato_somObrero = 0;
      }

      $aplicacion_cal_somObrero = $_POST["aplicacion_cal_somObrero"];
       if (empty($aplicacion_cal_somObrero)) {
            $aplicacion_cal_somObrero = 0;
      }

      $aplicacion_hipoclorito_somObrero = $_POST["aplicacion_hipoclorito_somObrero"];
       if (empty($aplicacion_hipoclorito_somObrero)) {
            $aplicacion_hipoclorito_somObrero = 0;
      }

      $aplicacion_poli_somObrero = $_POST["aplicacion_poli_somObrero"];
       if (empty($aplicacion_poli_somObrero)) {
            $aplicacion_poli_somObrero = 0;
      }

      $aplicacion_clorolb_somObrero = $_POST["aplicacion_clorolb_somObrero"];
       if (empty($aplicacion_clorolb_somObrero)) {
            $aplicacion_clorolb_somObrero = 0;
      }

      $duracion_gascloro_somObrero = $_POST["duracion_gascloro_somObrero"];
       if (empty($duracion_gascloro_somObrero)) {
            $duracion_gascloro_somObrero = 0;
      }

      $duracion_sulfato_somObrero = $_POST["duracion_sulfato_somObrero"];
      if (empty($duracion_sulfato_somObrero)) {
            $duracion_sulfato_somObrero = 0;
      }

      $duracion_cal_somObrero = $_POST["duracion_cal_somObrero"];
      if (empty($duracion_cal_somObrero)) {
            $duracion_cal_somObrero = 0;
      }

      $duracion_hipoclorito_somObrero = $_POST["duracion_hipoclorito_somObrero"];
      if (empty($duracion_hipoclorito_somObrero)) {
            $duracion_hipoclorito_somObrero = 0;
      }

      $duracion_poli_somObrero = $_POST["duracion_poli_somObrero"];
      if (empty($duracion_poli_somObrero)) {
            $duracion_poli_somObrero = 0;
      }

      $duracion_clorolb_somObrero = $_POST["duracion_clorolb_somObrero"];
      if (empty($duracion_clorolb_somObrero)) {
            $duracion_clorolb_somObrero = 0;
      }

      $saldo_gascloro_somObrero = $_POST["saldo_gascloro_somObrero"];
      if (empty($saldo_gascloro_somObrero)) {
            $saldo_gascloro_somObrero = 0;
      }

      $saldo_sulfato_somObrero = $_POST["saldo_sulfato_somObrero"];
      if (empty($saldo_sulfato_somObrero)) {
            $saldo_sulfato_somObrero = 0;
      }

      $saldo_cal_somObrero = $_POST["saldo_cal_somObrero"];
      if (empty($saldo_cal_somObrero)) {
            $saldo_cal_somObrero = 0;
      }

      $saldo_hipoclorito_somObrero = $_POST["saldo_hipoclorito_somObrero"];
      if (empty($saldo_hipoclorito_somObrero)) {
            $saldo_hipoclorito_somObrero = 0;
      }

      $saldo_poli_somObrero = $_POST["saldo_poli_somObrero"];
      if (empty($saldo_poli_somObrero)) {
            $saldo_poli_somObrero = 0;
      }

      $saldo_clorolb_somObrero = $_POST["saldo_clorolb_somObrero"];
      if (empty($saldo_clorolb_somObrero)) {
            $saldo_clorolb_somObrero = 0;
      }

      //Consultamos el formato Diario de San Juan de ese dia
      $sqlSomObrero = ("SELECT * FROM formato_diario where id_sistema = 15 and fecha = '$fecha'");
      $resultSomObrero = pg_query($sqlSomObrero);
      $rowSomObrero = pg_fetch_array($resultSomObrero);

                   $AlmacenSomObrero = ("SELECT * FROM almacenes where id_sistema = 15");
                  $resultAlmacenSomObrero = pg_query($AlmacenSomObrero);
                  $rowAlmacenSomObrero = pg_fetch_array($resultAlmacenSomObrero);
                  $cilindros_llenos_somObrero = $rowAlmacenSomObrero[cilindros_llenos];
                  $cilindros_vacios_somObrero = $rowAlmacenSomObrero[cilindros_vacios];


      if ($rowSomObrero['reporte'] == 't') {
            $SomObrero = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado, servicio, danado,
             consmax, recibido_gascloro, recibido_sulfato, recibido_cal, recibido_hipoclorito, recibido_poli,
            recibido_clorolb, traspasos_gascloro, traspasos_sulfato, traspasos_cal, traspasos_hipoclorito,
            traspasos_poli, traspasos_clorolb, aplicacion_gascloro, aplicacion_sulfato, aplicacion_cal,
             aplicacion_hipoclorito, aplicacion_poli, aplicacion_clorolb, duracion_gascloro, duracion_sulfato,
              duracion_cal, duracion_hipoclorito, duracion_poli, duracion_clorolb, cilindros_llenos, cilindros_vacios, saldo_gascloro, saldo_sulfato, saldo_cal, saldo_hipoclorito, saldo_poli, saldo_clorolb) VALUES (15, '$fecha',
               '$idUsuario', '$servicio_somObrero', '$danado_somObrero', '$consmax_somObrero',
                '$recibido_gascloro_somObrero', '$recibido_sulfato_somObrero', '$recibido_cal_somObrero', 
                '$recibido_hipoclorito_somObrero', '$recibido_poli_somObrero', '$recibido_clorolb_somObrero',
                 '$traspasos_gascloro_somObrero', '$traspasos_sulfato_somObrero', '$traspasos_cal_somObrero', 
                 '$traspasos_hipoclorito_somObrero', '$traspasos_poli_somObrero', '$traspasos_clorolb_somObrero',
                  '$aplicacion_gascloro_somObrero', '$aplicacion_sulfato_somObrero', '$aplicacion_cal_somObrero', 
                  '$aplicacion_hipoclorito_somObrero', '$aplicacion_poli_somObrero', '$aplicacion_clorolb_somObrero', 
                  '$duracion_gascloro_somObrero', '$duracion_sulfato_somObrero', '$duracion_cal_somObrero',
                   '$duracion_hipoclorito_somObrero', '$duracion_poli_somObrero', '$duracion_clorolb_somObrero', '$cilindros_llenos_somObrero', '$cilindros_vacios_somObrero', '$saldo_gascloro_somObrero', '$saldo_sulfato_somObrero', '$saldo_cal_somObrero', '$saldo_hipoclorito_somObrero', '$saldo_poli_somObrero', '$saldo_clorolb_somObrero')");
            if (pg_query($SomObrero)) {
                  $contador++;
                  

                 //Aqui Actualizamos El Almacen Segun los traspasos o recibidos
                 

                  $nuevoSulfato = $rowAlmacenSomObrero['sulaluminio'] + $recibido_sulfato_somObrero - $traspasos_sulfato_somObrero;
                  $nuevoGascloro = $rowAlmacenSomObrero['gascloro'] + $recibido_gascloro_somObrero - $traspasos_gascloro_somObrero;
                  $nuevoCal = $rowAlmacenSomObrero['cal'] + $recibido_cal_somObrero - $traspasos_cal_somObrero;
                  $nuevoHipoclorito = $rowAlmacenSomObrero['hipoclorito'] + $recibido_hipoclorito_somObrero - $traspasos_hipoclorito_somObrero;
                  $nuevoPolicloruro = $rowAlmacenSomObrero['policloruro'] + $recibido_poli_somObrero - $traspasos_poli_somObrero;
                  $nuevoGasClorolb = $rowAlmacenSomObrero['gasclorolb'] + $recibido_clorolb_somObrero - $traspasos_clorolb_somObrero;

                  $updateAlmacenSomObrero = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro',
                   cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPolicloruro', gasclorolb = '$nuevoGasClorolb' where id_sistema = 15");
                  if (pg_query($updateAlmacenSomObrero)) {
                        
                  }else{
                        echo "<script>alert('Pero no Modifique aAlmacen de SomObrero!') </script>";
                  }

            }else{
                  echo "<script>alert('No Ingreso Nada SomObrero!') </script>";
            }
      }else{
            $SomObrero = ("INSERT INTO formato_sustancias (id_sistema, fecha, id_empleado) VALUES (15, '$fecha', '$idUsuario')");
            if (pg_query($SomObrero)) {
                  $contador++;
                  
            }else{
                  echo "<script>alert('No Ingreso los DATOS  SomObrero!') </script>";
            }
      }


      if ($contador == 15) {
            echo "<script>alert('El Formato se ha registrado correctamente!') </script>"; 
            echo "<meta http-equiv='refresh' content='0,url=home.php'>";
      }else{
           echo "<script>alert('Hubo Errores, No Guardado correctamente!') </script>"; 
           echo "<meta http-equiv='refresh' content='0,url=home.php'>"; 
      }











 ?>
