<?php 
       include("../conex.php");
       include("seguridad.php");
       $idUsuario = $_POST["idUsuario"];
       $sistema = $_POST["sistema"];
       $fecha = $_POST["fecha"];


       //determino si viene vacia la variable, y si es asi, le asigno cero para que no de error en BD
       $cilindros_llenos = $_POST["cilindros_llenos"];
       if (empty($cilindros_llenos)) {
         $cilindros_llenos = 0;
       }

        $cilindros_vacios = $_POST["cilindros_vacios"];
       if (empty($cilindros_vacios)) {
         $cilindros_vacios = 0;
       }

        $servicio = $_POST["servicio"];
       if (empty($servicio)) {
         $servicio = 0;
       }

        $danado = $_POST["danado"];
       if (empty($danado)) {
         $danado = 0;
       }

        $consmax = $_POST["consmax"];
       if (empty($consmax)) {
         $consmax = 0;
       }

        $ht = $_POST["ht"];
       if (empty($ht)) {
         $ht = 0;
       }

        $recibido_gascloro = $_POST["recibido_gascloro"];
       if (empty($recibido_gascloro)) {
         $recibido_gascloro = 0;
       }

       $recibido_sulfato = $_POST["recibido_sulfato"];
       if (empty($recibido_sulfato)) {
         $recibido_sulfato = 0;
       }

       $recibido_cal = $_POST["recibido_cal"];
       if (empty($recibido_cal)) {
         $recibido_cal = 0;
       }

       $recibido_hipoclorito = $_POST["recibido_hipoclorito"];
       if (empty($recibido_hipoclorito)) {
         $recibido_hipoclorito = 0;
       }

       $recibido_poli = $_POST["recibido_poli"];
       if (empty($recibido_poli)) {
         $recibido_poli = 0;
       }

        $recibido_clorolb = $_POST["recibido_clorolb"];
       if (empty($recibido_clorolb)) {
         $recibido_clorolb = 0;
       }

       $traspasos_gascloro = $_POST["traspasos_gascloro"];
       if (empty($traspasos_gascloro)) {
         $traspasos_gascloro = 0;
       }

       $traspasos_sulfato = $_POST["traspasos_sulfato"];
       if (empty($traspasos_sulfato)) {
         $traspasos_sulfato = 0;
       }

       $traspasos_cal = $_POST["traspasos_cal"];
       if (empty($traspasos_cal)) {
         $traspasos_cal = 0;
       }

       $traspasos_hipoclorito = $_POST["traspasos_hipoclorito"];
       if (empty($traspasos_hipoclorito)) {
         $traspasos_hipoclorito = 0;
       }

       $traspasos_poli = $_POST["traspasos_poli"];
       if (empty($traspasos_poli)) {
         $traspasos_poli = 0;
       }

        $traspasos_clorolb = $_POST["traspasos_clorolb"];
       if (empty($traspasos_clorolb)) {
         $traspasos_clorolb = 0;
       }

       $aplicacion_gascloro = $_POST["aplicacion_gascloro"];
       if (empty($aplicacion_gascloro)) {
         $aplicacion_gascloro = 0;
       }

       $aplicacion_sulfato = $_POST["aplicacion_sulfato"];
       if (empty($aplicacion_sulfato)) {
         $aplicacion_sulfato = 0;
       }

       $aplicacion_cal = $_POST["aplicacion_cal"];
       if (empty($aplicacion_cal)) {
         $aplicacion_cal = 0;
       }

       $aplicacion_hipoclorito = $_POST["aplicacion_hipoclorito"];
       if (empty($aplicacion_hipoclorito)) {
         $aplicacion_hipoclorito = 0;
       }

       $aplicacion_poli = $_POST["aplicacion_poli"];
       if (empty($aplicacion_poli)) {
         $aplicacion_poli = 0;
       }

        $aplicacion_clorolb = $_POST["aplicacion_clorolb"];
       if (empty($aplicacion_clorolb)) {
         $aplicacion_clorolb = 0;
       }

       $duracion_gascloro = $_POST["duracion_gascloro"];
       if (empty($duracion_gascloro)) {
         $duracion_gascloro = 0;
       }

       $duracion_sulfato = $_POST["duracion_sulfato"];
       if (empty($duracion_sulfato)) {
         $duracion_sulfato = 0;
       }

       $duracion_cal = $_POST["duracion_cal"];
       if (empty($duracion_cal)) {
         $duracion_cal = 0;
       }

       $duracion_hipoclorito = $_POST["duracion_hipoclorito"];
       if (empty($duracion_hipoclorito)) {
         $duracion_hipoclorito = 0;
       }

       $duracion_poli = $_POST["duracion_poli"];
       if (empty($duracion_poli)) {
         $duracion_poli = 0;
       }

        $duracion_clorolb = $_POST["duracion_clorolb"];
       if (empty($duracion_clorolb)) {
         $duracion_clorolb = 0;
       }

        $saldo_gascloro = $_POST["saldo_gascloro"];
       if (empty($saldo_gascloro)) {
         $saldo_gascloro = 0;
       }

       $saldo_sulfato = $_POST["saldo_sulfato"];
       if (empty($saldo_sulfato)) {
         $saldo_sulfato = 0;
       }

       $saldo_cal = $_POST["saldo_cal"];
       if (empty($saldo_cal)) {
         $saldo_cal = 0;
       }

       $saldo_hipoclorito = $_POST["saldo_hipoclorito"];
       if (empty($saldo_hipoclorito)) {
         $saldo_hipoclorito = 0;
       }

       $saldo_poli = $_POST["saldo_poli"];
       if (empty($saldo_poli)) {
         $saldo_poli = 0;
       }

        $saldo_clorolb = $_POST["saldo_clorolb"];
       if (empty($saldo_clorolb)) {
         $saldo_clorolb = 0;
       }

       //consulto el almacen
       $sqlAlmacen = ("SELECT * FROM almacenes where id_sistema = '$sistema'");
       $resultAlmacen = pg_query($sqlAlmacen);
       $rowAlmacen = pg_fetch_array($resultAlmacen);

       //consulto el formato de sustancias de ese dia

      $consulta = ("SELECT * from formato_sustancias where fecha = '$fecha' and id_sistema = '$sistema'");
      $resultConsulta = pg_query($consulta);
      $rowConsulta = pg_fetch_array($resultConsulta);

      $nuevoGascloro = $rowAlmacen['gascloro'] - $rowConsulta['recibido_gascloro'] + $recibido_gascloro;
      $nuevoGascloro = $nuevoGascloro + $rowConsulta['traspasos_gascloro'] - $traspasos_gascloro;

      $nuevoSulfato = $rowAlmacen['sulaluminio'] - $rowConsulta['recibido_sulfato'] + $recibido_sulfato;
      $nuevoSulfato = $nuevoSulfato + $rowConsulta['traspasos_sulfato'] - $traspasos_sulfato;

      $nuevoCal = $rowAlmacen['cal'] - $rowConsulta['recibido_cal'] + $recibido_cal;
      $nuevoCal = $nuevoCal + $rowConsulta['traspasos_cal'] - $traspasos_cal;

      $nuevoHipoclorito = $rowAlmacen['hipoclorito'] - $rowConsulta['recibido_hipoclorito'] + $recibido_hipoclorito;
      $nuevoHipoclorito = $nuevoHipoclorito + $rowConsulta['traspasos_hipoclorito'] - $traspasos_hipoclorito;

      $nuevoPoli = $rowAlmacen['policloruro'] - $rowConsulta['recibido_poli'] + $recibido_poli;
      $nuevoPoli = $nuevoPoli + $rowConsulta['traspasos_poli'] - $traspasos_poli;

      $nuevoGasclorolb = $rowAlmacen['gasclorolb'] - $rowConsulta['recibido_clorolb'] + $recibido_clorolb;
      $nuevoGasclorolb = $nuevoGasclorolb + $rowConsulta['traspasos_clorolb'] - $traspasos_clorolb;

      //Actualizo los saldos
      $nuevoSaldoGasCloro = $saldo_gascloro - $rowConsulta['recibido_gascloro'] + $recibido_gascloro;
      $nuevoSaldoGasCloro = $nuevoSaldoGasCloro + $rowConsulta['traspasos_gascloro'] - $traspasos_gascloro;

      $nuevoSaldoSulfato = $saldo_sulfato - $rowConsulta['recibido_sulfato'] + $recibido_sulfato;
      $nuevoSaldoSulfato = $nuevoSaldoSulfato + $rowConsulta['traspasos_sulfato'] - $traspasos_sulfato;

      $nuevoSaldoCal = $saldo_cal - $rowConsulta['recibido_cal'] + $recibido_cal;
      $nuevoSaldoCal = $nuevoSaldoCal + $rowConsulta['traspasos_cal'] - $traspasos_cal;

      $nuevoSaldoHipoclorito = $saldo_hipoclorito - $rowConsulta['recibido_hipoclorito'] + $recibido_hipoclorito;
      $nuevoSaldoHipoclorito = $nuevoSaldoHipoclorito + $rowConsulta['traspasos_hipoclorito'] - $traspasos_hipoclorito;

      $nuevoSaldoPoli = $saldo_poli - $rowConsulta['recibido_poli'] + $recibido_poli;
      $nuevoSaldoPoli = $nuevoSaldoPoli + $rowConsulta['traspasos_poli'] - $traspasos_poli;

      $nuevoSaldoClorolb = $saldo_clorolb - $rowConsulta['recibido_clorolb'] + $recibido_clorolb;
      $nuevoSaldoClorolb = $nuevoSaldoClorolb + $rowConsulta['traspasos_clorolb'] - $traspasos_clorolb;

      $sql = ("UPDATE formato_sustancias set id_empleado = '$idUsuario', servicio = '$servicio', danado = '$danado', consmax = '$consmax', recibido_gascloro = '$recibido_gascloro', recibido_sulfato = '$recibido_sulfato', recibido_cal = '$recibido_cal', recibido_hipoclorito = '$recibido_hipoclorito', recibido_poli = '$recibido_poli', recibido_clorolb = '$recibido_clorolb', traspasos_gascloro = '$traspasos_gascloro', traspasos_sulfato = '$traspasos_sulfato', traspasos_cal = '$traspasos_cal', traspasos_hipoclorito = '$traspasos_hipoclorito', traspasos_poli = '$traspasos_poli', traspasos_clorolb = '$traspasos_clorolb', aplicacion_gascloro = '$aplicacion_gascloro', aplicacion_sulfato = '$aplicacion_sulfato', aplicacion_cal = '$aplicacion_cal', aplicacion_hipoclorito = '$aplicacion_hipoclorito', aplicacion_poli = '$aplicacion_poli', aplicacion_clorolb = '$aplicacion_clorolb', duracion_gascloro = '$duracion_gascloro', duracion_sulfato = '$duracion_sulfato', duracion_cal = '$duracion_cal', duracion_hipoclorito = '$duracion_hipoclorito', duracion_poli = '$duracion_poli', duracion_clorolb = '$duracion_clorolb', saldo_gascloro = '$nuevoSaldoGasCloro', saldo_sulfato = '$nuevoSaldoSulfato', saldo_cal = '$nuevoSaldoCal', saldo_hipoclorito = '$nuevoSaldoHipoclorito', saldo_poli = '$nuevoSaldoPoli', saldo_clorolb = '$nuevoSaldoClorolb' where fecha = '$fecha' and id_sistema = '$sistema' ");

      $sqlUpdate = ("UPDATE almacenes set sulaluminio = '$nuevoSulfato', gascloro = '$nuevoGascloro', cal = '$nuevoCal', hipoclorito = '$nuevoHipoclorito', policloruro = '$nuevoPoli', gasclorolb = '$nuevoGasclorolb' where id_sistema = '$sistema' ");

      $sql2 = ("UPDATE formato_sustancias set id_empleado = '$idUsuario'");

      if(pg_query($sql2)){

      }else{
        echo "<script>alert('NO Actualizo El Cambio de Usuario!') </script>";
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
              echo "<meta http-equiv='refresh' content='0,url=home.php'>";
       }

 ?>
