<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    include('../funciones/funciones.php');
    $usuario = $_SESSION["usuario"];
    $fecha = $_POST["fecha"];
 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);
    $idUsuario = $row["id_empleado"];

    //vamos a consultar los almacenes
    $almacenes = ("SELECT * from almacenes");
    $resultAlmacenes = pg_query($almacenes);
    
    while ($rowAlmacenes = pg_fetch_array($resultAlmacenes)) {
      
      if ($rowAlmacenes[id_sistema]==1) {
        
        $id_sistema_sanjuan = $rowAlmacenes[id_sistema];
        $htacum_sanjuan = $rowAlmacenes[htacum];
        $sulaluminio_sanjuan = $rowAlmacenes[sulaluminio];
        $gascloro_sanjuan = $rowAlmacenes[gascloro];
        $cal_sanjuan = $rowAlmacenes[cal];
        $cilindros_llenos_sanjuan = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_sanjuan = $rowAlmacenes[cilindros_vacios];
        $clresidual_sanjuan = $rowAlmacenes[clresidual];
        $hipoclorito_sanjuan = $rowAlmacenes[hipoclorito];
        $policloruro_sanjuan = $rowAlmacenes[policloruro];
        $gasclorolb_sanjuan = $rowAlmacenes[gasclorolb];


    }

     if ($rowAlmacenes[id_sistema]==2) {
        
        $id_sistema_calabozo = $rowAlmacenes[id_sistema];
        $htacum_calabozo = $rowAlmacenes[htacum];
        $sulaluminio_calabozo = $rowAlmacenes[sulaluminio];
        $gascloro_calabozo = $rowAlmacenes[gascloro];
        $cal_calabozo = $rowAlmacenes[cal];
        $cilindros_llenos_calabozo = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_calabozo = $rowAlmacenes[cilindros_vacios];
        $clresidual_calabozo = $rowAlmacenes[clresidual];
        $hipoclorito_calabozo = $rowAlmacenes[hipoclorito];
        $policloruro_calabozo = $rowAlmacenes[policloruro];
        $gasclorolb_calabozo = $rowAlmacenes[gasclorolb];
        
    }

     if ($rowAlmacenes[id_sistema]==3) {
        
        $id_sistema_altagracia = $rowAlmacenes[id_sistema];
        $htacum_altagracia = $rowAlmacenes[htacum];
        $sulaluminio_altagracia = $rowAlmacenes[sulaluminio];
        $gascloro_altagracia = $rowAlmacenes[gascloro];
        $cal_altagracia = $rowAlmacenes[cal];
        $cilindros_llenos_altagracia = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_altagracia = $rowAlmacenes[cilindros_vacios];
        $clresidual_altagracia = $rowAlmacenes[clresidual];
        $hipoclorito_altagracia = $rowAlmacenes[hipoclorito];
        $policloruro_altagracia = $rowAlmacenes[policloruro];
        $gasclorolb_altagracia = $rowAlmacenes[gasclorolb];
    }

     if ($rowAlmacenes[id_sistema]==4) {
        
        $id_sistema_valle = $rowAlmacenes[id_sistema];
        $htacum_valle = $rowAlmacenes[htacum];
        $sulaluminio_valle = $rowAlmacenes[sulaluminio];
        $gascloro_valle = $rowAlmacenes[gascloro];
        $cal_valle = $rowAlmacenes[cal];
        $cilindros_llenos_valle = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_valle = $rowAlmacenes[cilindros_vacios];
        $clresidual_valle = $rowAlmacenes[clresidual];
        $hipoclorito_valle = $rowAlmacenes[hipoclorito];
        $policloruro_valle = $rowAlmacenes[policloruro];
        $gasclorolb_valle = $rowAlmacenes[gasclorolb];   
    }

     if ($rowAlmacenes[id_sistema]==5) {
        
        $id_sistema_tucupido = $rowAlmacenes[id_sistema];
        $htacum_tucupido = $rowAlmacenes[htacum];
        $sulaluminio_tucupido = $rowAlmacenes[sulaluminio];
        $gascloro_tucupido = $rowAlmacenes[gascloro];
        $cal_tucupido = $rowAlmacenes[cal];
        $cilindros_llenos_tucupido = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_tucupido = $rowAlmacenes[cilindros_vacios];
        $clresidual_tucupido = $rowAlmacenes[clresidual];
        $hipoclorito_tucupido = $rowAlmacenes[hipoclorito];
        $policloruro_tucupido = $rowAlmacenes[policloruro];
        $gasclorolb_tucupido = $rowAlmacenes[gasclorolb]; 
        
    }

      if ($rowAlmacenes[id_sistema]==6) {
        
        $id_sistema_sanjose = $rowAlmacenes[id_sistema];
        $htacum_sanjose = $rowAlmacenes[htacum];
        $sulaluminio_sanjose = $rowAlmacenes[sulaluminio];
        $gascloro_sanjose = $rowAlmacenes[gascloro];
        $cal_sanjose = $rowAlmacenes[cal];
        $cilindros_llenos_sanjose = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_sanjose = $rowAlmacenes[cilindros_vacios];
        $clresidual_sanjose = $rowAlmacenes[clresidual];
        $hipoclorito_sanjose = $rowAlmacenes[hipoclorito];
        $policloruro_sanjose = $rowAlmacenes[policloruro];
        $gasclorolb_sanjose = $rowAlmacenes[gasclorolb]; 
        
    }

      if ($rowAlmacenes[id_sistema]==7) {
        
        $id_sistema_zaraza = $rowAlmacenes[id_sistema];
        $htacum_zaraza = $rowAlmacenes[htacum];
        $sulaluminio_zaraza = $rowAlmacenes[sulaluminio];
        $gascloro_zaraza = $rowAlmacenes[gascloro];
        $cal_zaraza = $rowAlmacenes[cal];
        $cilindros_llenos_zaraza = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_zaraza = $rowAlmacenes[cilindros_vacios];
        $clresidual_zaraza = $rowAlmacenes[clresidual];
        $hipoclorito_zaraza = $rowAlmacenes[hipoclorito];
        $policloruro_zaraza = $rowAlmacenes[policloruro];
        $gasclorolb_zaraza = $rowAlmacenes[gasclorolb]; 

    }

      if ($rowAlmacenes[id_sistema]==8) {
        
        $id_sistema_socorro = $rowAlmacenes[id_sistema];
        $htacum_socorro = $rowAlmacenes[htacum];
        $sulaluminio_socorro = $rowAlmacenes[sulaluminio];
        $gascloro_socorro = $rowAlmacenes[gascloro];
        $cal_socorro = $rowAlmacenes[cal];
        $cilindros_llenos_socorro = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_socorro = $rowAlmacenes[cilindros_vacios];
        $clresidual_socorro = $rowAlmacenes[clresidual];
        $hipoclorito_socorro = $rowAlmacenes[hipoclorito];
        $policloruro_socorro = $rowAlmacenes[policloruro];
        $gasclorolb_socorro = $rowAlmacenes[gasclorolb]; 
        
    }

      if ($rowAlmacenes[id_sistema]==9) {
        
        $id_sistema_santamaria = $rowAlmacenes[id_sistema];
        $htacum_santamaria = $rowAlmacenes[htacum];
        $sulaluminio_santamaria = $rowAlmacenes[sulaluminio];
        $gascloro_santamaria = $rowAlmacenes[gascloro];
        $cal_santamaria = $rowAlmacenes[cal];
        $cilindros_llenos_santamaria = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_santamaria = $rowAlmacenes[cilindros_vacios];
        $clresidual_santamaria = $rowAlmacenes[clresidual];
        $hipoclorito_santamaria = $rowAlmacenes[hipoclorito];
        $policloruro_santamaria = $rowAlmacenes[policloruro];
        $gasclorolb_santamaria = $rowAlmacenes[gasclorolb]; 
        
    }

     if ($rowAlmacenes[id_sistema]==10) {
        
        $id_sistema_espino = $rowAlmacenes[id_sistema];
        $htacum_espino = $rowAlmacenes[htacum];
        $sulaluminio_espino = $rowAlmacenes[sulaluminio];
        $gascloro_espino = $rowAlmacenes[gascloro];
        $cal_espino = $rowAlmacenes[cal];
        $cilindros_llenos_espino = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_espino = $rowAlmacenes[cilindros_vacios];
        $clresidual_espino = $rowAlmacenes[clresidual];
        $hipoclorito_espino = $rowAlmacenes[hipoclorito];
        $policloruro_espino = $rowAlmacenes[policloruro];
        $gasclorolb_espino = $rowAlmacenes[gasclorolb]; 
       
    }

     if ($rowAlmacenes[id_sistema]==11) {
        
        $id_sistema_guardatinajas = $rowAlmacenes[id_sistema];
        $htacum_guardatinajas = $rowAlmacenes[htacum];
        $sulaluminio_guardatinajas = $rowAlmacenes[sulaluminio];
        $gascloro_guardatinajas = $rowAlmacenes[gascloro];
        $cal_guardatinajas = $rowAlmacenes[cal];
        $cilindros_llenos_guardatinajas = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_guardatinajas = $rowAlmacenes[cilindros_vacios];
        $clresidual_guardatinajas = $rowAlmacenes[clresidual];
        $hipoclorito_guardatinajas = $rowAlmacenes[hipoclorito];
        $policloruro_guardatinajas = $rowAlmacenes[policloruro];
        $gasclorolb_guardatinajas = $rowAlmacenes[gasclorolb];
        
    }

     if ($rowAlmacenes[id_sistema]==12) {
        
        $id_sistema_sanrafael = $rowAlmacenes[id_sistema];
        $htacum_sanrafael = $rowAlmacenes[htacum];
        $sulaluminio_sanrafael = $rowAlmacenes[sulaluminio];
        $gascloro_sanrafael = $rowAlmacenes[gascloro];
        $cal_sanrafael = $rowAlmacenes[cal];
        $cilindros_llenos_sanrafael = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_sanrafael = $rowAlmacenes[cilindros_vacios];
        $clresidual_sanrafael = $rowAlmacenes[clresidual];
        $hipoclorito_sanrafael = $rowAlmacenes[hipoclorito];
        $policloruro_sanrafael = $rowAlmacenes[policloruro];
        $gasclorolb_sanrafael = $rowAlmacenes[gasclorolb];
        
    }

    if ($rowAlmacenes[id_sistema]==13) {
        
        $id_sistema_chaguaramas = $rowAlmacenes[id_sistema];
        $htacum_chaguaramas = $rowAlmacenes[htacum];
        $sulaluminio_chaguaramas = $rowAlmacenes[sulaluminio];
        $gascloro_chaguaramas = $rowAlmacenes[gascloro];
        $cal_chaguaramas = $rowAlmacenes[cal];
        $cilindros_llenos_chaguaramas = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_chaguaramas = $rowAlmacenes[cilindros_vacios];
        $clresidual_chaguaramas = $rowAlmacenes[clresidual];
        $hipoclorito_chaguaramas = $rowAlmacenes[hipoclorito];
        $policloruro_chaguaramas = $rowAlmacenes[policloruro];
        $gasclorolb_chaguaramas = $rowAlmacenes[gasclorolb];
        
    }

      if ($rowAlmacenes[id_sistema]==14) {
        
        $id_sistema_somGaleria = $rowAlmacenes[id_sistema];
        $htacum_somGaleria = $rowAlmacenes[htacum];
        $sulaluminio_somGaleria = $rowAlmacenes[sulaluminio];
        $gascloro_somGaleria = $rowAlmacenes[gascloro];
        $cal_somGaleria = $rowAlmacenes[cal];
        $cilindros_llenos_somGaleria = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_somGaleria = $rowAlmacenes[cilindros_vacios];
        $clresidual_somGaleria = $rowAlmacenes[clresidual];
        $hipoclorito_somGaleria = $rowAlmacenes[hipoclorito];
        $policloruro_somGaleria = $rowAlmacenes[policloruro];
        $gasclorolb_somGaleria = $rowAlmacenes[gasclorolb];
       
    }

      if ($rowAlmacenes[id_sistema]==15) {
        
        $id_sistema_somObrero = $rowAlmacenes[id_sistema];
        $htacum_somObrero = $rowAlmacenes[htacum];
        $sulaluminio_somObrero = $rowAlmacenes[sulaluminio];
        $gascloro_somObrero = $rowAlmacenes[gascloro];
        $cal_somObrero = $rowAlmacenes[cal];
        $cilindros_llenos_somObrero = $rowAlmacenes[cilindros_llenos];
        $cilindros_vacios_somObrero = $rowAlmacenes[cilindros_vacios];
        $clresidual_somObrero = $rowAlmacenes[clresidual];
        $hipoclorito_somObrero = $rowAlmacenes[hipoclorito];
        $policloruro_somObrero = $rowAlmacenes[policloruro];
        $gasclorolb_somObrero = $rowAlmacenes[gasclorolb]; 
        
    }

  }

  //verifico que los 15 sistemas haya hecho el reporte diario
  $verifico = ("SELECT COUNT(fecha) from formato_diario where fecha = '$fecha'");
    $resultVerifico = pg_query($verifico);
    $rowVerifico = pg_fetch_array($resultVerifico);
    

    if ($rowVerifico[count]<15) {
            echo "<script>alert('Faltan Sistemas por el Formato Diario, no se puede Generar el Reporte!') </script>";
            echo "<meta http-equiv='refresh' content='0,url=sustancias.php'>";
    }

     //verifico que los 15 sistemas haya hecho el reporte diario
  $verifico2 = ("SELECT COUNT(fecha) from formato_sustancias where fecha = '$fecha'");
    $resultVerifico2 = pg_query($verifico2);
    $rowVerifico2 = pg_fetch_array($resultVerifico2);
    

    if ($rowVerifico2[count]==15) {
            echo "<script>alert('Ya se genero el reporte de Sustancias Quimicas de este dia!') </script>";
            echo "<meta http-equiv='refresh' content='0,url=sustancias.php'>";
    }

  //Consulta de los formatos diarios de cada sistema
    //San Juan de Los Morros
    $formatoSanJuan = ("SELECT * FROM formato_diario where id_sistema = 1 and fecha = '$fecha'");   
    $resultSanJuan = pg_query($formatoSanJuan);
    $rowSanJuan = pg_fetch_array($resultSanJuan);



     //Calabozo
    $formatoCalabozo = ("SELECT * FROM formato_diario where id_sistema = 2 and fecha = '$fecha'");   
    $resultCalabozo = pg_query($formatoCalabozo);
    $rowCalabozo = pg_fetch_array($resultCalabozo);

    //Altagracia de Orituco
    $formatoAltagracia = ("SELECT * FROM formato_diario where id_sistema = 3 and fecha = '$fecha'");   
    $resultAltagracia = pg_query($formatoAltagracia);
    $rowAltagracia = pg_fetch_array($resultAltagracia);

     //Valle de la Pascua
    $formatoValle = ("SELECT * FROM formato_diario where id_sistema = 4 and fecha = '$fecha'");   
    $resultValle = pg_query($formatoValle);
    $rowValle = pg_fetch_array($resultValle);

    //Tucupido
    $formatoTucupido = ("SELECT * FROM formato_diario where id_sistema = 5 and fecha = '$fecha'");   
    $resultTucupido = pg_query($formatoTucupido);
    $rowTucupido = pg_fetch_array($resultTucupido);

     //San Jose de Guaribe
    $formatoSanJose = ("SELECT * FROM formato_diario where id_sistema = 6 and fecha = '$fecha'");   
    $resultSanJose = pg_query($formatoSanJose);
    $rowSanJose = pg_fetch_array($resultSanJose);

     //Zaraza
    $formatoZaraza = ("SELECT * FROM formato_diario where id_sistema = 7 and fecha = '$fecha'");   
    $resultZaraza = pg_query($formatoZaraza);
    $rowZaraza = pg_fetch_array($resultZaraza);


     //El Socorro
    $formatoSocorro = ("SELECT * FROM formato_diario where id_sistema = 8 and fecha = '$fecha'");   
    $resultSocorro = pg_query($formatoSocorro);
    $rowSocorro = pg_fetch_array($resultSocorro);

      //Santa Maria de Ipire
    $formatoSantaMaria = ("SELECT * FROM formato_diario where id_sistema = 9 and fecha = '$fecha'");   
    $resultSantaMaria = pg_query($formatoSantaMaria);
    $rowSantaMaria = pg_fetch_array($resultSantaMaria);

    //Espino
    $formatoEspino = ("SELECT * FROM formato_diario where id_sistema = 10 and fecha = '$fecha'");   
    $resultEspino = pg_query($formatoEspino);
    $rowEspino = pg_fetch_array($resultEspino);

    //Guardatinajas
    $formatoGuardatinajas = ("SELECT * FROM formato_diario where id_sistema = 11 and fecha = '$fecha'");   
    $resultGuardatinajas = pg_query($formatoGuardatinajas);
    $rowGuardatinajas = pg_fetch_array($resultGuardatinajas);

      //San Rafael de Laya
    $formatoSanRafael = ("SELECT * FROM formato_diario where id_sistema = 12 and fecha = '$fecha'");   
    $resultSanRafael = pg_query($formatoSanRafael);
    $rowSanRafael = pg_fetch_array($resultSanRafael);

     //Chaguaramas
    $formatoChaguaramas = ("SELECT * FROM formato_diario where id_sistema = 13 and fecha = '$fecha'");   
    $resultChaguaramas = pg_query($formatoChaguaramas);
    $rowChaguaramas = pg_fetch_array($resultChaguaramas);

    //Sombrero Galeria
    $formatoSomGaleria = ("SELECT * FROM formato_diario where id_sistema = 14 and fecha = '$fecha'");   
    $resultSomGaleria = pg_query($formatoSomGaleria);
    $rowSomGaleria = pg_fetch_array($resultSomGaleria);

    //Sombrero Obrero
    $formatoSomObrero = ("SELECT * FROM formato_diario where id_sistema = 15 and fecha = '$fecha'");   
    $resultSomObrero = pg_query($formatoSomObrero);
    $rowSomObrero = pg_fetch_array($resultSomObrero);


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo del Sistema-->
    <title>Formatos</title>
    
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/pestanas.css" rel="stylesheet">
      <link href="../css/select2.css" rel="stylesheet">
       <link href='../img/icono.ico' rel='shortcut icon' type='image/x-icon' />
  </head>
  <body onload="calculoSanJuan();" >
   <!-- Barra de Navegación -->   
    <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- este es el header de la pagina, donde esta el hidropaez y eso -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
          <div class="logobarra">
              <img src="../img/logonuevo.png" style="width:112px;">
          </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- aqui van a ir los modulos. de la barra-->
        <li><a href="home.php">Inicio</a></li>
        <li class="active"><a href="#">Llenar Formato</a></li>
         <li><a href="../consulta/consultaGuardia.php">Consultas</a></li>
        <li><a href="../reporte/reporteGuardia.php">Reportes</a></li>
        <li><a href="../sistemas/sistemas.php">Sistemas</a></li>
       
       
        
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'></span> <?php echo $row["nombres"]; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" data-toggle="modal" data-target="#cambiarClave"><span class="glyphicon glyphicon-transfer"></span> Cambiar Clave</a></li>
            <li><a href="#" data-toggle="modal" data-target="#Modificar"><span class="glyphicon glyphicon-list"></span> Modificar Información Empleado</a></il>


            
            <li class="divider"></li>
            <li><a href="../index.php"><span class="glyphicon glyphicon-arrow-left"></span> Cerrar Sesión</a></li>
            
          </ul>
        </li>
        <li><a class="navbar-brand" href="#">&nbsp; &nbsp;&nbsp;Sistema de Coordinación de Calidad</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <br>
   
    <div class="container2">
    <div class="row">
    <!-- Button trigger modal -->
               

        <?php require_once('../empleados/modificarEmpleado.php'); ?>
        <?php require_once('../empleados/cambiarClave.php'); ?>
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <label style="cursor:pointer;" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-tasks">
                            </span> Formatos</label>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-align-left"></span><a href="formato.php" > Formato Diario</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file"></span><a href="formatoParametro.php" > Fto. Parámetros Fisicoquímicos</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-filter"></span><a href="sustancias.php" > Fto. Sustancias Químicas</a>
                                    </td>
                                </tr>
                               
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <label style="cursor:pointer;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-search">
                            </span> Consultas</label>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-align-justify"></span><a href="../consulta/consultaGuardia.php"> Consulta Diaria</a> 
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt"></span><a href="../consulta/consultaParametros.php"> Cta. Parámetros Fisicoquímicos</a> 
                                    </td>
                                </tr>
                                  <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-zoom-in"></span><a href="../consulta/consultaSustancias.php"> Cta. Sustancias Químicas</a> 
                                    </td>
                                </tr>
                                  <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="../consulta/consultaReporte.php"> Reporte Final</a> 
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-map-marker"></span><a href="../consulta/normas.pdf"> Normas del Agua</a> 
                                    </td>
                                </tr>
                              
                              
                               
                                
                            </table>
                        </div>
                    </div>
                </div>
              
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <label style="cursor:pointer;" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span> Reportes</label>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                  <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-sort-by-attributes"></span><a href="../reporte/reporteGuardia.php"> Reporte Fto. Diario</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-sort-by-attributes-alt"></span><a href="../reporte/reporteParametros.php"> Rpte. Parámetros Fisicoquímicos</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-indent-left"></span><a href="../reporte/reporteSustancias.php"> Rpte. Sustancias Químicas</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-floppy-save"></span><a href="../reporte/reporteFinal.php"> Reporte Final</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <form class="form-horizontal" role="form" id="formulario" name="formulario" action="formatoSustancias2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Formato de Sustancias Químicas</div></legend>
                       <div class="form-group" style="margin-left:300px;">
                        <label class="col-sm-1 control-label" for="textinput">Fecha:</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="" class="form-control" value="<?php echo $fecha;?>" name="fecha" id="fecha" readonly >
                          <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idUsuario;?>">
                        </div>
                        
                      </div>
                        

                        <div class="col-md-13">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#SanJuan" data-toggle="tab">San Juan de los Morros</a></li>
                                            <li><a href="#Calabozo" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calabozo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#Altagracia" data-toggle="tab">&nbsp;&nbsp;Altagracia de Orituco&nbsp;&nbsp;</a></li>
                                            <li><a href="#VallePascua" data-toggle="tab">&nbsp;&nbsp;&nbsp;Valle de la Pascua&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#Tucupido" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tucupido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            
                                        </ul>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                    <!-- Para San Juan de los Morros-->
                                        <div class="tab-pane fade in active" id="SanJuan">
                                         <?php 
                                              $sistema = "sanjuan";
                                              $numeroSistema = 1;
                                              if ($rowSanJuan['reporte'] == 't') {
                                                  crearTabla($sistema, $numeroSistema, $gascloro_sanjuan, $sulaluminio_sanjuan, $cal_sanjuan, $hipoclorito_sanjuan, $policloruro_sanjuan, $rowSanJuan['ht'], $rowSanJuan['gasconsumido'], $rowSanJuan['sulconsumido'], $rowSanJuan['calconsumido'], $rowSanJuan['hipoclorito'], $rowSanJuan['policloruro'], $cilindros_llenos_sanjuan, $cilindros_vacios_sanjuan, $gasclorolb_sanjuan, $rowSanJuan['gasclorolb']);
                                              }else{
                                                    crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_sanjuan, $sulaluminio_sanjuan, $cal_sanjuan, $hipoclorito_sanjuan, $policloruro_sanjuan, $rowSanJuan['ht'], $rowSanJuan['gasconsumido'], $rowSanJuan['sulconsumido'], $rowSanJuan['calconsumido'], $rowSanJuan['hipoclorito'], $rowSanJuan['policloruro'], $cilindros_llenos_sanjuan, $cilindros_vacios_sanjuan, $gasclorolb_sanjuan, $rowSanJuan['gasclorolb'] );
                                                    echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                              } 

                                        ?>                                  
                                        </div>

                                        <!-- Para Calabozo-->
                                        <div class="tab-pane fade" id="Calabozo">
                                            <?php 
                                                  $sistema = "calabozo";
                                                  $numeroSistema = 2;
                                                  if ($rowCalabozo['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_calabozo, $sulaluminio_calabozo, $cal_calabozo, $hipoclorito_calabozo, $policloruro_calabozo, $rowCalabozo['ht'], $rowCalabozo['gasconsumido'], $rowCalabozo['sulconsumido'], $rowCalabozo['calconsumido'], $rowCalabozo['hipoclorito'], $rowCalabozo['policloruro'], $cilindros_llenos_calabozo, $cilindros_vacios_calabozo, $gasclorolb_calabozo, $rowCalabozo['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_calabozo, $sulaluminio_calabozo, $cal_calabozo, $hipoclorito_calabozo, $policloruro_calabozo, $rowCalabozo['ht'], $rowCalabozo['gasconsumido'], $rowCalabozo['sulconsumido'], $rowCalabozo['calconsumido'], $rowCalabozo['hipoclorito'], $rowCalabozo['policloruro'], $cilindros_llenos_calabozo, $cilindros_vacios_calabozo, $gasclorolb_calabozo, $rowCalabozo['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 

                                        </div>

                                        <!-- Para Altagracia de Orituco-->
                                        <div class="tab-pane fade" id="Altagracia">
                                            <?php 
                                                  $sistema = "altagracia";
                                                  $numeroSistema = 3;
                                                  if ($rowAltagracia['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_altagracia, $sulaluminio_altagracia, $cal_altagracia, $hipoclorito_altagracia, $policloruro_altagracia, $rowAltagracia['ht'], $rowAltagracia['gasconsumido'], $rowAltagracia['sulconsumido'], $rowAltagracia['calconsumido'], $rowAltagracia['hipoclorito'], $rowAltagracia['policloruro'], $cilindros_llenos_altagracia, $cilindros_vacios_altagracia, $gasclorolb_altagracia, $rowAltagracia['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_altagracia, $sulaluminio_altagracia, $cal_altagracia, $hipoclorito_altagracia, $policloruro_altagracia, $rowAltagracia['ht'], $rowAltagracia['gasconsumido'], $rowAltagracia['sulconsumido'], $rowAltagracia['calconsumido'], $rowAltagracia['hipoclorito'], $rowAltagracia['policloruro'], $cilindros_llenos_altagracia, $cilindros_vacios_altagracia, $gasclorolb_altagracia, $rowAltagracia['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 

                                        </div>

                                        <!-- Para Valle de la Pascua-->

                                        <div class="tab-pane fade" id="VallePascua">
                                             <?php 
                                                  $sistema = "valle";
                                                  $numeroSistema = 4;
                                                  if ($rowValle['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_valle, $sulaluminio_valle, $cal_valle, $hipoclorito_valle, $policloruro_valle, $rowValle['ht'], $rowValle['gasconsumido'], $rowValle['sulconsumido'], $rowValle['calconsumido'], $rowValle['hipoclorito'], $rowValle['policloruro'], $cilindros_llenos_valle, $cilindros_vacios_valle, $gasclorolb_valle, $rowValle['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_valle, $sulaluminio_valle, $cal_valle, $hipoclorito_valle, $policloruro_valle, $rowValle['ht'], $rowValle['gasconsumido'], $rowValle['sulconsumido'], $rowValle['calconsumido'], $rowValle['hipoclorito'], $rowValle['policloruro'], $cilindros_llenos_valle, $cilindros_vacios_valle, $gasclorolb_valle, $rowValle['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                            
                                        </div>

                                        <!-- Para Tucupido-->
                                        <div class="tab-pane fade" id="Tucupido">
                                           <?php 
                                                  $sistema = "tucupido";
                                                  $numeroSistema = 5;
                                                  if ($rowTucupido['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_tucupido, $sulaluminio_tucupido, $cal_tucupido, $hipoclorito_tucupido, $policloruro_tucupido, $rowTucupido['ht'], $rowTucupido['gasconsumido'], $rowTucupido['sulconsumido'], $rowTucupido['calconsumido'], $rowTucupido['hipoclorito'], $rowTucupido['policloruro'], $cilindros_llenos_tucupido, $cilindros_vacios_tucupido, $gasclorolb_tucupido, $rowTucupido['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_tucupido, $sulaluminio_tucupido, $cal_tucupido, $hipoclorito_tucupido, $policloruro_tucupido, $rowTucupido['ht'], $rowTucupido['gasconsumido'], $rowTucupido['sulconsumido'], $rowTucupido['calconsumido'], $rowTucupido['hipoclorito'], $rowTucupido['policloruro'], $cilindros_llenos_tucupido, $cilindros_vacios_tucupido, $gasclorolb_tucupido, $rowTucupido['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Más Pestañas -->
                        <!-- Más Pestañas -->
                        <!-- Más Pestañas -->
                        <div class="col-md-13">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#SanJose" data-toggle="tab">San Jose de Guaribe</a></li>
                                            <li><a href="#Zaraza" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zaraza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#Chaguaramas" data-toggle="tab">&nbsp;&nbsp;Chaguaramas&nbsp;&nbsp;</a></li>
                                            <li><a href="#SantaMaria" data-toggle="tab">&nbsp;&nbsp;&nbsp;Santa María de Ipire&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#Socorro" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El Socorro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            
                                        </ul>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                    <!-- Para San Jose de Guaribe-->
                                        <div class="tab-pane fade in active" id="SanJose">
                                            <?php 
                                                  $sistema = "sanjose";
                                                  $numeroSistema = 6;
                                                  if ($rowSanJose['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_sanjose, $sulaluminio_sanjose, $cal_sanjose, $hipoclorito_sanjose, $policloruro_sanjose, $rowSanJose['ht'], $rowSanJose['gasconsumido'], $rowSanJose['sulconsumido'], $rowSanJose['calconsumido'], $rowSanJose['hipoclorito'], $rowSanJose['policloruro'], $cilindros_llenos_sanjose, $cilindros_vacios_sanjose, $gasclorolb_sanjose, $rowSanJose['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_sanjose, $sulaluminio_sanjose, $cal_sanjose, $hipoclorito_sanjose, $policloruro_sanjose, $rowSanJose['ht'], $rowSanJose['gasconsumido'], $rowSanJose['sulconsumido'], $rowSanJose['calconsumido'], $rowSanJose['hipoclorito'], $rowSanJose['policloruro'], $cilindros_llenos_sanjose, $cilindros_vacios_sanjose, $gasclorolb_sanjose, $rowSanJose['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                        </div>

                                        <!-- Para Zaraza-->
                                        <div class="tab-pane fade" id="Zaraza">
                                          <?php 
                                                  $sistema = "zaraza";
                                                  $numeroSistema = 7;
                                                  if ($rowZaraza['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_zaraza, $sulaluminio_zaraza, $cal_zaraza, $hipoclorito_zaraza, $policloruro_zaraza, $rowZaraza['ht'], $rowZaraza['gasconsumido'], $rowZaraza['sulconsumido'], $rowZaraza['calconsumido'], $rowZaraza['hipoclorito'], $rowZaraza['policloruro'], $cilindros_llenos_zaraza, $cilindros_vacios_zaraza, $gasclorolb_zaraza, $rowZaraza['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_zaraza, $sulaluminio_zaraza, $cal_zaraza, $hipoclorito_zaraza, $policloruro_zaraza, $rowZaraza['ht'], $rowZaraza['gasconsumido'], $rowZaraza['sulconsumido'], $rowZaraza['calconsumido'], $rowZaraza['hipoclorito'], $rowZaraza['policloruro'], $cilindros_llenos_zaraza, $cilindros_vacios_zaraza, $gasclorolb_zaraza, $rowZaraza['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>

                                        </div>
                                        <!-- Para Chaguaramas-->
                                        <div class="tab-pane fade" id="Chaguaramas">
                                             <?php 
                                                  $sistema = "chaguaramas";
                                                  $numeroSistema = 13;
                                                  if ($rowChaguaramas['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_chaguaramas, $sulaluminio_chaguaramas, $cal_chaguaramas, $hipoclorito_chaguaramas, $policloruro_chaguaramas, $rowChaguaramas['ht'], $rowChaguaramas['gasconsumido'], $rowChaguaramas['sulconsumido'], $rowChaguaramas['calconsumido'], $rowChaguaramas['hipoclorito'], $rowChaguaramas['policloruro'], $cilindros_llenos_chaguaramas, $cilindros_vacios_chaguaramas, $gasclorolb_chaguaramas, $rowChaguaramas['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_chaguaramas, $sulaluminio_chaguaramas, $cal_chaguaramas, $hipoclorito_chaguaramas, $policloruro_chaguaramas, $rowChaguaramas['ht'], $rowChaguaramas['gasconsumido'], $rowChaguaramas['sulconsumido'], $rowChaguaramas['calconsumido'], $rowChaguaramas['hipoclorito'], $rowChaguaramas['policloruro'], $cilindros_llenos_chaguaramas, $cilindros_vacios_chaguaramas, $gasclorolb_chaguaramas, $rowChaguaramas['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>
                                        </div>

                                        <!-- Para Santa Maria de Ipire-->
                                        <div class="tab-pane fade" id="SantaMaria">
                                            <?php 
                                                  $sistema = "santamaria";
                                                  $numeroSistema = 9;
                                                  if ($rowSantaMaria['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_santamaria, $sulaluminio_santamaria, $cal_santamaria, $hipoclorito_santamaria, $policloruro_santamaria, $rowSantaMaria['ht'], $rowSantaMaria['gasconsumido'], $rowSantaMaria['sulconsumido'], $rowSantaMaria['calconsumido'], $rowSantaMaria['hipoclorito'], $rowSantaMaria['policloruro'], $cilindros_llenos_santamaria, $cilindros_vacios_santamaria, $gasclorolb_santamaria, $rowSantaMaria['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_santamaria, $sulaluminio_santamaria, $cal_santamaria, $hipoclorito_santamaria, $policloruro_santamaria, $rowSantaMaria['ht'], $rowSantaMaria['gasconsumido'], $rowSantaMaria['sulconsumido'], $rowSantaMaria['calconsumido'], $rowSantaMaria['hipoclorito'], $rowSantaMaria['policloruro'], $cilindros_llenos_santamaria, $cilindros_vacios_santamaria, $gasclorolb_santamaria, $rowSantaMaria['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>
                                        </div>

                                        <!-- Para El Soccorro-->
                                        <div class="tab-pane fade" id="Socorro">

                                             <?php 
                                                  $sistema = "socorro";
                                                  $numeroSistema = 8;
                                                  if ($rowSocorro['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_socorro, $sulaluminio_socorro, $cal_socorro, $hipoclorito_socorro, $policloruro_socorro, $rowSocorro['ht'], $rowSocorro['gasconsumido'], $rowSocorro['sulconsumido'], $rowSocorro['calconsumido'], $rowSocorro['hipoclorito'], $rowSocorro['policloruro'], $cilindros_llenos_socorro, $cilindros_vacios_socorro, $gasclorolb_socorro, $rowSocorro['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_socorro, $sulaluminio_socorro, $cal_socorro, $hipoclorito_socorro, $policloruro_socorro, $rowSocorro['ht'], $rowSocorro['gasconsumido'], $rowSocorro['sulconsumido'], $rowSocorro['calconsumido'], $rowSocorro['hipoclorito'], $rowSocorro['policloruro'], $cilindros_llenos_socorro, $cilindros_vacios_socorro, $gasclorolb_socorro, $rowSocorro['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Ultima Fila de Pestañas -->
                        <div class="col-md-13">
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#Guardatinajas" data-toggle="tab">Guardatinajas</a></li>
                                            <li><a href="#Espino" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Espino&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#SanRafael" data-toggle="tab">&nbsp;&nbsp;San Rafael de Laya&nbsp;&nbsp;</a></li>
                                            <li><a href="#SomGaleria" data-toggle="tab">&nbsp;&nbsp;&nbsp;Sombrero Galería &nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="#SomObrero" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sombrero Bco. Obrero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            
                                        </ul>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                    <!-- Para Guardatinajas-->
                                        <div class="tab-pane fade in active" id="Guardatinajas">
                                          <?php 
                                                  $sistema = "guardatinajas";
                                                  $numeroSistema = 11;
                                                  if ($rowGuardatinajas['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_guardatinajas, $sulaluminio_guardatinajas, $cal_guardatinajas, $hipoclorito_guardatinajas, $policloruro_guardatinajas, $rowGuardatinajas['ht'], $rowGuardatinajas['gasconsumido'], $rowGuardatinajas['sulconsumido'], $rowGuardatinajas['calconsumido'], $rowGuardatinajas['hipoclorito'], $rowGuardatinajas['policloruro'], $cilindros_llenos_guardatinajas, $cilindros_vacios_guardatinajas, $gasclorolb_guardatinajas, $rowGuardatinajas['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_guardatinajas, $sulaluminio_guardatinajas, $cal_guardatinajas, $hipoclorito_guardatinajas, $policloruro_guardatinajas, $rowGuardatinajas['ht'], $rowGuardatinajas['gasconsumido'], $rowGuardatinajas['sulconsumido'], $rowGuardatinajas['calconsumido'], $rowGuardatinajas['hipoclorito'], $rowGuardatinajas['policloruro'], $cilindros_llenos_guardatinajas, $cilindros_vacios_guardatinajas, $gasclorolb_guardatinajas, $rowGuardatinajas['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?>
                                        </div>

                                        <!-- Para Espino-->
                                        <div class="tab-pane fade" id="Espino">
                                           <?php 
                                                  $sistema = "espino";
                                                  $numeroSistema = 10;
                                                  if ($rowEspino['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_espino, $sulaluminio_espino, $cal_espino, $hipoclorito_espino, $policloruro_espino, $rowEspino['ht'], $rowEspino['gasconsumido'], $rowEspino['sulconsumido'], $rowEspino['calconsumido'], $rowEspino['hipoclorito'], $rowEspino['policloruro'], $cilindros_llenos_espino, $cilindros_vacios_espino, $gasclorolb_espino, $rowEspino['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_espino, $sulaluminio_espino, $cal_espino, $hipoclorito_espino, $policloruro_espino, $rowEspino['ht'], $rowEspino['gasconsumido'], $rowEspino['sulconsumido'], $rowEspino['calconsumido'], $rowEspino['hipoclorito'], $rowEspino['policloruro'], $cilindros_llenos_espino, $cilindros_vacios_espino, $gasclorolb_espino, $rowEspino['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                        </div>
                                        <!-- Para San Rafael de Laya-->
                                        <div class="tab-pane fade" id="SanRafael">
                                            <?php 
                                                  $sistema = "sanrafael";
                                                  $numeroSistema = 12;
                                                  if ($rowSanRafael['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_sanrafael, $sulaluminio_sanrafael, $cal_sanrafael, $hipoclorito_sanrafael, $policloruro_sanrafael, $rowSanRafael['ht'], $rowSanRafael['gasconsumido'], $rowSanRafael['sulconsumido'], $rowSanRafael['calconsumido'], $rowSanRafael['hipoclorito'], $rowSanRafael['policloruro'], $cilindros_llenos_sanrafael, $cilindros_vacios_sanrafael, $gasclorolb_sanrafael, $rowSanRafael['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_sanrafael, $sulaluminio_sanrafael, $cal_sanrafael, $hipoclorito_sanrafael, $policloruro_sanrafael, $rowSanRafael['ht'], $rowSanRafael['gasconsumido'], $rowSanRafael['sulconsumido'], $rowSanRafael['calconsumido'], $rowSanRafael['hipoclorito'], $rowSanRafael['policloruro'], $cilindros_llenos_sanrafael, $cilindros_vacios_sanrafael, $gasclorolb_sanrafael, $rowSanRafael['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                        </div>

                                        <!-- Para Sombrero Galeria-->
                                        <div class="tab-pane fade" id="SomGaleria">
                                            <?php 
                                                  $sistema = "somGaleria";
                                                  $numeroSistema = 14;
                                                  if ($rowSomGaleria['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_somGaleria, $sulaluminio_somGaleria, $cal_somGaleria, $hipoclorito_somGaleria, $policloruro_somGaleria, $rowSomGaleria['ht'], $rowSomGaleria['gasconsumido'], $rowSomGaleria['sulconsumido'], $rowSomGaleria['calconsumido'], $rowSomGaleria['hipoclorito'], $rowSomGaleria['policloruro'], $cilindros_llenos_somGaleria, $cilindros_vacios_somGaleria, $gasclorolb_somGaleria, $rowSomGaleria['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_somGaleria, $sulaluminio_somGaleria, $cal_somGaleria, $hipoclorito_somGaleria, $policloruro_somGaleria, $rowSomGaleria['ht'], $rowSomGaleria['gasconsumido'], $rowSomGaleria['sulconsumido'], $rowSomGaleria['calconsumido'], $rowSomGaleria['hipoclorito'], $rowSomGaleria['policloruro'], $cilindros_llenos_somGaleria, $cilindros_vacios_somGaleria, $gasclorolb_somGaleria, $rowSomGaleria['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                        </div>

                                        <!-- Para Sombrero Banco-->
                                        <div class="tab-pane fade" id="SomObrero">
                                            <?php 
                                                  $sistema = "somObrero";
                                                  $numeroSistema = 15;
                                                  if ($rowSomObrero['reporte'] == 't') {
                                                      crearTabla($sistema, $numeroSistema, $gascloro_somObrero, $sulaluminio_somObrero, $cal_somObrero, $hipoclorito_somObrero, $policloruro_somObrero, $rowSomObrero['ht'], $rowSomObrero['gasconsumido'], $rowSomObrero['sulconsumido'], $rowSomObrero['calconsumido'], $rowSomObrero['hipoclorito'], $rowSomObrero['policloruro'], $cilindros_llenos_somObrero, $cilindros_vacios_somObrero, $gasclorolb_somObrero, $rowSomObrero['gasclorolb']);
                                                  }else{
                                                        crearTablaNoMostrada($sistema, $numeroSistema, $gascloro_somObrero, $sulaluminio_somObrero, $cal_somObrero, $hipoclorito_somObrero, $policloruro_somObrero, $rowSomObrero['ht'], $rowSomObrero['gasconsumido'], $rowSomObrero['sulconsumido'], $rowSomObrero['calconsumido'], $rowSomObrero['hipoclorito'], $rowSomObrero['policloruro'], $cilindros_llenos_somObrero, $cilindros_vacios_somObrero, $gasclorolb_somObrero, $rowSomObrero['gasclorolb']);
                                                        echo "<div align='center' style='font-size:12pt;color:red;font-weight:bold;'>Este sistema no reportó, se mantienen los datos del día anterior.</div>";
                                                  } 

                                            ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de los sistemas -->
                        <br>
                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">
                            <input type="button" class="btn btn-primary" onclick="pregunta()" value="Guardar">
                            <button type="reset" class="btn btn-default">Limpiar</button>
                            
                          </div>
                        </div>
                      </div>
                         

                    </fieldset>
                </form>
           
              
            </div>
        </div>
    </div>
</div>

    <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left" align="center">© 2014 - Hidrológica Páez, C.A. - Coordinación de Calidad
           <a href="http://www.hidropaez.gob.ve" target="_blank" >Sitio Web: HidroPáez</a>
      </p>
     
    </div>
    

    
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="../js/jquery-1.11.1.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">

        function pregunta(){
                  if (confirm('¿Está Seguro de Guardar Estos Datos?  \n Si tiene Dudas, Cancele y Revise Nuevamente')) {
                    document.formulario.submit();
                  };
                }
                

    //funciones

    
      function calculoSaldoSulfato(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_sulfato_sanjuan = parseFloat(document.getElementById('recibido_sulfato_sanjuan').value);
            var saldo_sulfato_sanjuan = parseFloat(document.getElementById('saldo_sulfato_sanjuan').value);
            var traspasos_sulfato_sanjuan = parseFloat(document.getElementById('traspasos_sulfato_sanjuan').value);
            
            if (!isNaN(recibido_sulfato_sanjuan) & !isNaN(traspasos_sulfato_sanjuan)) {
                var nuevo_saldo_sulfato_sanjuan = (saldo + recibido_sulfato_sanjuan - traspasos_sulfato_sanjuan);
            }else{
                if (isNaN(recibido_sulfato_sanjuan)) {
                var nuevo_saldo_sulfato_sanjuan = (saldo - traspasos_sulfato_sanjuan);
                }else{
                     if (isNaN(traspasos_sulfato_sanjuan)) {
                    var nuevo_saldo_sulfato_sanjuan = (saldo + recibido_sulfato_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_sanjuan)) {
                document.getElementById('saldo_sulfato_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_sanjuan').value = nuevo_saldo_sulfato_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_sulfato_calabozo = parseFloat(document.getElementById('recibido_sulfato_calabozo').value);
            var saldo_sulfato_calabozo = parseFloat(document.getElementById('saldo_sulfato_calabozo').value);
            var traspasos_sulfato_calabozo = parseFloat(document.getElementById('traspasos_sulfato_calabozo').value);
            
            if (!isNaN(recibido_sulfato_calabozo) & !isNaN(traspasos_sulfato_calabozo)) {
                var nuevo_saldo_sulfato_calabozo = (saldo + recibido_sulfato_calabozo - traspasos_sulfato_calabozo);
            }else{
                if (isNaN(recibido_sulfato_calabozo)) {
                var nuevo_saldo_sulfato_calabozo = (saldo - traspasos_sulfato_calabozo);
                }else{
                     if (isNaN(traspasos_sulfato_calabozo)) {
                    var nuevo_saldo_sulfato_calabozo = (saldo + recibido_sulfato_calabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_calabozo)) {
                document.getElementById('saldo_sulfato_calabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_calabozo').value = nuevo_saldo_sulfato_calabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_sulfato_altagracia = parseFloat(document.getElementById('recibido_sulfato_altagracia').value);
            var saldo_sulfato_altagracia = parseFloat(document.getElementById('saldo_sulfato_altagracia').value);
            var traspasos_sulfato_altagracia = parseFloat(document.getElementById('traspasos_sulfato_altagracia').value);
            
            if (!isNaN(recibido_sulfato_altagracia) & !isNaN(traspasos_sulfato_altagracia)) {
                var nuevo_saldo_sulfato_altagracia = (saldo + recibido_sulfato_altagracia - traspasos_sulfato_altagracia);
            }else{
                if (isNaN(recibido_sulfato_altagracia)) {
                var nuevo_saldo_sulfato_altagracia = (saldo - traspasos_sulfato_altagracia);
                }else{
                     if (isNaN(traspasos_sulfato_altagracia)) {
                    var nuevo_saldo_sulfato_altagracia = (saldo + recibido_sulfato_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_altagracia)) {
                document.getElementById('saldo_sulfato_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_altagracia').value = nuevo_saldo_sulfato_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_sulfato_valle = parseFloat(document.getElementById('recibido_sulfato_valle').value);
            var saldo_sulfato_valle = parseFloat(document.getElementById('saldo_sulfato_valle').value);
            var traspasos_sulfato_valle = parseFloat(document.getElementById('traspasos_sulfato_valle').value);
            
            if (!isNaN(recibido_sulfato_valle) & !isNaN(traspasos_sulfato_valle)) {
                var nuevo_saldo_sulfato_valle = (saldo + recibido_sulfato_valle - traspasos_sulfato_valle);
            }else{
                if (isNaN(recibido_sulfato_valle)) {
                var nuevo_saldo_sulfato_valle = (saldo - traspasos_sulfato_valle);
                }else{
                     if (isNaN(traspasos_sulfato_valle)) {
                    var nuevo_saldo_sulfato_valle = (saldo + recibido_sulfato_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_valle)) {
                document.getElementById('saldo_sulfato_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_valle').value = nuevo_saldo_sulfato_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_sulfato_tucupido = parseFloat(document.getElementById('recibido_sulfato_tucupido').value);
            var saldo_sulfato_tucupido = parseFloat(document.getElementById('saldo_sulfato_tucupido').value);
            var traspasos_sulfato_tucupido = parseFloat(document.getElementById('traspasos_sulfato_tucupido').value);
            
            if (!isNaN(recibido_sulfato_tucupido) & !isNaN(traspasos_sulfato_tucupido)) {
                var nuevo_saldo_sulfato_tucupido = (saldo + recibido_sulfato_tucupido - traspasos_sulfato_tucupido);
            }else{
                if (isNaN(recibido_sulfato_tucupido)) {
                var nuevo_saldo_sulfato_tucupido = (saldo - traspasos_sulfato_tucupido);
                }else{
                     if (isNaN(traspasos_sulfato_tucupido)) {
                    var nuevo_saldo_sulfato_tucupido = (saldo + recibido_sulfato_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_tucupido)) {
                document.getElementById('saldo_sulfato_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_tucupido').value = nuevo_saldo_sulfato_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_sulfato_sanjose = parseFloat(document.getElementById('recibido_sulfato_sanjose').value);
            var saldo_sulfato_sanjose = parseFloat(document.getElementById('saldo_sulfato_sanjose').value);
            var traspasos_sulfato_sanjose = parseFloat(document.getElementById('traspasos_sulfato_sanjose').value);
            
            if (!isNaN(recibido_sulfato_sanjose) & !isNaN(traspasos_sulfato_sanjose)) {
                var nuevo_saldo_sulfato_sanjose = (saldo + recibido_sulfato_sanjose - traspasos_sulfato_sanjose);
            }else{
                if (isNaN(recibido_sulfato_sanjose)) {
                var nuevo_saldo_sulfato_sanjose = (saldo - traspasos_sulfato_sanjose);
                }else{
                     if (isNaN(traspasos_sulfato_sanjose)) {
                    var nuevo_saldo_sulfato_sanjose = (saldo + recibido_sulfato_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_sanjose)) {
                document.getElementById('saldo_sulfato_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_sanjose').value = nuevo_saldo_sulfato_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_sulfato_zaraza = parseFloat(document.getElementById('recibido_sulfato_zaraza').value);
            var saldo_sulfato_zaraza = parseFloat(document.getElementById('saldo_sulfato_zaraza').value);
            var traspasos_sulfato_zaraza = parseFloat(document.getElementById('traspasos_sulfato_zaraza').value);
            
            if (!isNaN(recibido_sulfato_zaraza) & !isNaN(traspasos_sulfato_zaraza)) {
                var nuevo_saldo_sulfato_zaraza = (saldo + recibido_sulfato_zaraza - traspasos_sulfato_zaraza);
            }else{
                if (isNaN(recibido_sulfato_zaraza)) {
                var nuevo_saldo_sulfato_zaraza = (saldo - traspasos_sulfato_zaraza);
                }else{
                     if (isNaN(traspasos_sulfato_zaraza)) {
                    var nuevo_saldo_sulfato_zaraza = (saldo + recibido_sulfato_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_zaraza)) {
                document.getElementById('saldo_sulfato_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_zaraza').value = nuevo_saldo_sulfato_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_sulfato_socorro = parseFloat(document.getElementById('recibido_sulfato_socorro').value);
            var saldo_sulfato_socorro = parseFloat(document.getElementById('saldo_sulfato_socorro').value);
            var traspasos_sulfato_socorro = parseFloat(document.getElementById('traspasos_sulfato_socorro').value);
            
            if (!isNaN(recibido_sulfato_socorro) & !isNaN(traspasos_sulfato_socorro)) {
                var nuevo_saldo_sulfato_socorro = (saldo + recibido_sulfato_socorro - traspasos_sulfato_socorro);
            }else{
                if (isNaN(recibido_sulfato_socorro)) {
                var nuevo_saldo_sulfato_socorro = (saldo - traspasos_sulfato_socorro);
                }else{
                     if (isNaN(traspasos_sulfato_socorro)) {
                    var nuevo_saldo_sulfato_socorro = (saldo + recibido_sulfato_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_socorro)) {
                document.getElementById('saldo_sulfato_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_socorro').value = nuevo_saldo_sulfato_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_sulfato_santamaria = parseFloat(document.getElementById('recibido_sulfato_santamaria').value);
            var saldo_sulfato_santamaria = parseFloat(document.getElementById('saldo_sulfato_santamaria').value);
            var traspasos_sulfato_santamaria = parseFloat(document.getElementById('traspasos_sulfato_santamaria').value);
            
            if (!isNaN(recibido_sulfato_santamaria) & !isNaN(traspasos_sulfato_santamaria)) {
                var nuevo_saldo_sulfato_santamaria = (saldo + recibido_sulfato_santamaria - traspasos_sulfato_santamaria);
            }else{
                if (isNaN(recibido_sulfato_santamaria)) {
                var nuevo_saldo_sulfato_santamaria = (saldo - traspasos_sulfato_santamaria);
                }else{
                     if (isNaN(traspasos_sulfato_santamaria)) {
                    var nuevo_saldo_sulfato_santamaria = (saldo + recibido_sulfato_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_santamaria)) {
                document.getElementById('saldo_sulfato_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_santamaria').value = nuevo_saldo_sulfato_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_sulfato_espino = parseFloat(document.getElementById('recibido_sulfato_espino').value);
            var saldo_sulfato_espino = parseFloat(document.getElementById('saldo_sulfato_espino').value);
            var traspasos_sulfato_espino = parseFloat(document.getElementById('traspasos_sulfato_espino').value);
            
            if (!isNaN(recibido_sulfato_espino) & !isNaN(traspasos_sulfato_espino)) {
                var nuevo_saldo_sulfato_espino = (saldo + recibido_sulfato_espino - traspasos_sulfato_espino);
            }else{
                if (isNaN(recibido_sulfato_espino)) {
                var nuevo_saldo_sulfato_espino = (saldo - traspasos_sulfato_espino);
                }else{
                     if (isNaN(traspasos_sulfato_espino)) {
                    var nuevo_saldo_sulfato_espino = (saldo + recibido_sulfato_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_espino)) {
                document.getElementById('saldo_sulfato_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_espino').value = nuevo_saldo_sulfato_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_sulfato_guardatinajas = parseFloat(document.getElementById('recibido_sulfato_guardatinajas').value);
            var saldo_sulfato_guardatinajas = parseFloat(document.getElementById('saldo_sulfato_guardatinajas').value);
            var traspasos_sulfato_guardatinajas = parseFloat(document.getElementById('traspasos_sulfato_guardatinajas').value);
            
            if (!isNaN(recibido_sulfato_guardatinajas) & !isNaN(traspasos_sulfato_guardatinajas)) {
                var nuevo_saldo_sulfato_guardatinajas = (saldo + recibido_sulfato_guardatinajas - traspasos_sulfato_guardatinajas);
            }else{
                if (isNaN(recibido_sulfato_guardatinajas)) {
                var nuevo_saldo_sulfato_guardatinajas = (saldo - traspasos_sulfato_guardatinajas);
                }else{
                     if (isNaN(traspasos_sulfato_guardatinajas)) {
                    var nuevo_saldo_sulfato_guardatinajas = (saldo + recibido_sulfato_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_guardatinajas)) {
                document.getElementById('saldo_sulfato_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_guardatinajas').value = nuevo_saldo_sulfato_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_sulfato_sanrafael = parseFloat(document.getElementById('recibido_sulfato_sanrafael').value);
            var saldo_sulfato_sanrafael = parseFloat(document.getElementById('saldo_sulfato_sanrafael').value);
            var traspasos_sulfato_sanrafael = parseFloat(document.getElementById('traspasos_sulfato_sanrafael').value);
            
            if (!isNaN(recibido_sulfato_sanrafael) & !isNaN(traspasos_sulfato_sanrafael)) {
                var nuevo_saldo_sulfato_sanrafael = (saldo + recibido_sulfato_sanrafael - traspasos_sulfato_sanrafael);
            }else{
                if (isNaN(recibido_sulfato_sanrafael)) {
                var nuevo_saldo_sulfato_sanrafael = (saldo - traspasos_sulfato_sanrafael);
                }else{
                     if (isNaN(traspasos_sulfato_sanrafael)) {
                    var nuevo_saldo_sulfato_sanrafael = (saldo + recibido_sulfato_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_sanrafael)) {
                document.getElementById('saldo_sulfato_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_sanrafael').value = nuevo_saldo_sulfato_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_sulfato_chaguaramas = parseFloat(document.getElementById('recibido_sulfato_chaguaramas').value);
            var saldo_sulfato_chaguaramas = parseFloat(document.getElementById('saldo_sulfato_chaguaramas').value);
            var traspasos_sulfato_chaguaramas = parseFloat(document.getElementById('traspasos_sulfato_chaguaramas').value);
            
            if (!isNaN(recibido_sulfato_chaguaramas) & !isNaN(traspasos_sulfato_chaguaramas)) {
                var nuevo_saldo_sulfato_chaguaramas = (saldo + recibido_sulfato_chaguaramas - traspasos_sulfato_chaguaramas);
            }else{
                if (isNaN(recibido_sulfato_chaguaramas)) {
                var nuevo_saldo_sulfato_chaguaramas = (saldo - traspasos_sulfato_chaguaramas);
                }else{
                     if (isNaN(traspasos_sulfato_chaguaramas)) {
                    var nuevo_saldo_sulfato_chaguaramas = (saldo + recibido_sulfato_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_chaguaramas)) {
                document.getElementById('saldo_sulfato_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_chaguaramas').value = nuevo_saldo_sulfato_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_sulfato_somGaleria = parseFloat(document.getElementById('recibido_sulfato_somGaleria').value);
            var saldo_sulfato_somGaleria = parseFloat(document.getElementById('saldo_sulfato_somGaleria').value);
            var traspasos_sulfato_somGaleria = parseFloat(document.getElementById('traspasos_sulfato_somGaleria').value);
            
            if (!isNaN(recibido_sulfato_somGaleria) & !isNaN(traspasos_sulfato_somGaleria)) {
                var nuevo_saldo_sulfato_somGaleria = (saldo + recibido_sulfato_somGaleria - traspasos_sulfato_somGaleria);
            }else{
                if (isNaN(recibido_sulfato_somGaleria)) {
                var nuevo_saldo_sulfato_somGaleria = (saldo - traspasos_sulfato_somGaleria);
                }else{
                     if (isNaN(traspasos_sulfato_somGaleria)) {
                    var nuevo_saldo_sulfato_somGaleria = (saldo + recibido_sulfato_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_somGaleria)) {
                document.getElementById('saldo_sulfato_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_somGaleria').value = nuevo_saldo_sulfato_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_sulfato_somObrero = parseFloat(document.getElementById('recibido_sulfato_somObrero').value);
            var saldo_sulfato_somObrero = parseFloat(document.getElementById('saldo_sulfato_somObrero').value);
            var traspasos_sulfato_somObrero = parseFloat(document.getElementById('traspasos_sulfato_somObrero').value);
            
            if (!isNaN(recibido_sulfato_somObrero) & !isNaN(traspasos_sulfato_somObrero)) {
                var nuevo_saldo_sulfato_somObrero = (saldo + recibido_sulfato_somObrero - traspasos_sulfato_somObrero);
            }else{
                if (isNaN(recibido_sulfato_somObrero)) {
                var nuevo_saldo_sulfato_somObrero = (saldo - traspasos_sulfato_somObrero);
                }else{
                     if (isNaN(traspasos_sulfato_somObrero)) {
                    var nuevo_saldo_sulfato_somObrero = (saldo + recibido_sulfato_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_sulfato_somObrero)) {
                document.getElementById('saldo_sulfato_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_sulfato_somObrero').value = nuevo_saldo_sulfato_somObrero.toFixed(2);
            }

        }



       
        
      }

      
      function calculoSaldoGasCloro(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_gascloro_sanjuan = parseFloat(document.getElementById('recibido_gascloro_sanjuan').value);
            var saldo_gascloro_sanjuan = parseFloat(document.getElementById('saldo_gascloro_sanjuan').value);
            var traspasos_gascloro_sanjuan = parseFloat(document.getElementById('traspasos_gascloro_sanjuan').value);
            
            if (!isNaN(recibido_gascloro_sanjuan) & !isNaN(traspasos_gascloro_sanjuan)) {
                var nuevo_saldo_gascloro_sanjuan = (saldo + recibido_gascloro_sanjuan - traspasos_gascloro_sanjuan);
            }else{
                if (isNaN(recibido_gascloro_sanjuan)) {
                var nuevo_saldo_gascloro_sanjuan = (saldo - traspasos_gascloro_sanjuan);
                }else{
                     if (isNaN(traspasos_gascloro_sanjuan)) {
                    var nuevo_saldo_gascloro_sanjuan = (saldo + recibido_gascloro_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_sanjuan)) {
                document.getElementById('saldo_gascloro_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_sanjuan').value = nuevo_saldo_gascloro_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_gascloro_calabozo = parseFloat(document.getElementById('recibido_gascloro_calabozo').value);
            var saldo_gascloro_calabozo = parseFloat(document.getElementById('saldo_gascloro_calabozo').value);
            var traspasos_gascloro_calabozo = parseFloat(document.getElementById('traspasos_gascloro_calabozo').value);
            
            if (!isNaN(recibido_gascloro_calabozo) & !isNaN(traspasos_gascloro_calabozo)) {
                var nuevo_saldo_gascloro_calabozo = (saldo + recibido_gascloro_calabozo - traspasos_gascloro_calabozo);
            }else{
                if (isNaN(recibido_gascloro_calabozo)) {
                var nuevo_saldo_gascloro_calabozo = (saldo - traspasos_gascloro_calabozo);
                }else{
                     if (isNaN(traspasos_gascloro_calabozo)) {
                    var nuevo_saldo_gascloro_calabozo = (saldo + recibido_gascloro_calabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_calabozo)) {
                document.getElementById('saldo_gascloro_calabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_calabozo').value = nuevo_saldo_gascloro_calabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_gascloro_altagracia = parseFloat(document.getElementById('recibido_gascloro_altagracia').value);
            var saldo_gascloro_altagracia = parseFloat(document.getElementById('saldo_gascloro_altagracia').value);
            var traspasos_gascloro_altagracia = parseFloat(document.getElementById('traspasos_gascloro_altagracia').value);
            
            if (!isNaN(recibido_gascloro_altagracia) & !isNaN(traspasos_gascloro_altagracia)) {
                var nuevo_saldo_gascloro_altagracia = (saldo + recibido_gascloro_altagracia - traspasos_gascloro_altagracia);
            }else{
                if (isNaN(recibido_gascloro_altagracia)) {
                var nuevo_saldo_gascloro_altagracia = (saldo - traspasos_gascloro_altagracia);
                }else{
                     if (isNaN(traspasos_gascloro_altagracia)) {
                    var nuevo_saldo_gascloro_altagracia = (saldo + recibido_gascloro_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_altagracia)) {
                document.getElementById('saldo_gascloro_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_altagracia').value = nuevo_saldo_gascloro_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_gascloro_valle = parseFloat(document.getElementById('recibido_gascloro_valle').value);
            var saldo_gascloro_valle = parseFloat(document.getElementById('saldo_gascloro_valle').value);
            var traspasos_gascloro_valle = parseFloat(document.getElementById('traspasos_gascloro_valle').value);
            
            if (!isNaN(recibido_gascloro_valle) & !isNaN(traspasos_gascloro_valle)) {
                var nuevo_saldo_gascloro_valle = (saldo + recibido_gascloro_valle - traspasos_gascloro_valle);
            }else{
                if (isNaN(recibido_gascloro_valle)) {
                var nuevo_saldo_gascloro_valle = (saldo - traspasos_gascloro_valle);
                }else{
                     if (isNaN(traspasos_gascloro_valle)) {
                    var nuevo_saldo_gascloro_valle = (saldo + recibido_gascloro_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_valle)) {
                document.getElementById('saldo_gascloro_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_valle').value = nuevo_saldo_gascloro_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_gascloro_tucupido = parseFloat(document.getElementById('recibido_gascloro_tucupido').value);
            var saldo_gascloro_tucupido = parseFloat(document.getElementById('saldo_gascloro_tucupido').value);
            var traspasos_gascloro_tucupido = parseFloat(document.getElementById('traspasos_gascloro_tucupido').value);
            
            if (!isNaN(recibido_gascloro_tucupido) & !isNaN(traspasos_gascloro_tucupido)) {
                var nuevo_saldo_gascloro_tucupido = (saldo + recibido_gascloro_tucupido - traspasos_gascloro_tucupido);
            }else{
                if (isNaN(recibido_gascloro_tucupido)) {
                var nuevo_saldo_gascloro_tucupido = (saldo - traspasos_gascloro_tucupido);
                }else{
                     if (isNaN(traspasos_gascloro_tucupido)) {
                    var nuevo_saldo_gascloro_tucupido = (saldo + recibido_gascloro_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_tucupido)) {
                document.getElementById('saldo_gascloro_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_tucupido').value = nuevo_saldo_gascloro_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_gascloro_sanjose = parseFloat(document.getElementById('recibido_gascloro_sanjose').value);
            var saldo_gascloro_sanjose = parseFloat(document.getElementById('saldo_gascloro_sanjose').value);
            var traspasos_gascloro_sanjose = parseFloat(document.getElementById('traspasos_gascloro_sanjose').value);
            
            if (!isNaN(recibido_gascloro_sanjose) & !isNaN(traspasos_gascloro_sanjose)) {
                var nuevo_saldo_gascloro_sanjose = (saldo + recibido_gascloro_sanjose - traspasos_gascloro_sanjose);
            }else{
                if (isNaN(recibido_gascloro_sanjose)) {
                var nuevo_saldo_gascloro_sanjose = (saldo - traspasos_gascloro_sanjose);
                }else{
                     if (isNaN(traspasos_gascloro_sanjose)) {
                    var nuevo_saldo_gascloro_sanjose = (saldo + recibido_gascloro_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_sanjose)) {
                document.getElementById('saldo_gascloro_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_sanjose').value = nuevo_saldo_gascloro_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_gascloro_zaraza = parseFloat(document.getElementById('recibido_gascloro_zaraza').value);
            var saldo_gascloro_zaraza = parseFloat(document.getElementById('saldo_gascloro_zaraza').value);
            var traspasos_gascloro_zaraza = parseFloat(document.getElementById('traspasos_gascloro_zaraza').value);
            
            if (!isNaN(recibido_gascloro_zaraza) & !isNaN(traspasos_gascloro_zaraza)) {
                var nuevo_saldo_gascloro_zaraza = (saldo + recibido_gascloro_zaraza - traspasos_gascloro_zaraza);
            }else{
                if (isNaN(recibido_gascloro_zaraza)) {
                var nuevo_saldo_gascloro_zaraza = (saldo - traspasos_gascloro_zaraza);
                }else{
                     if (isNaN(traspasos_gascloro_zaraza)) {
                    var nuevo_saldo_gascloro_zaraza = (saldo + recibido_gascloro_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_zaraza)) {
                document.getElementById('saldo_gascloro_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_zaraza').value = nuevo_saldo_gascloro_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_gascloro_socorro = parseFloat(document.getElementById('recibido_gascloro_socorro').value);
            var saldo_gascloro_socorro = parseFloat(document.getElementById('saldo_gascloro_socorro').value);
            var traspasos_gascloro_socorro = parseFloat(document.getElementById('traspasos_gascloro_socorro').value);
            
            if (!isNaN(recibido_gascloro_socorro) & !isNaN(traspasos_gascloro_socorro)) {
                var nuevo_saldo_gascloro_socorro = (saldo + recibido_gascloro_socorro - traspasos_gascloro_socorro);
            }else{
                if (isNaN(recibido_gascloro_socorro)) {
                var nuevo_saldo_gascloro_socorro = (saldo - traspasos_gascloro_socorro);
                }else{
                     if (isNaN(traspasos_gascloro_socorro)) {
                    var nuevo_saldo_gascloro_socorro = (saldo + recibido_gascloro_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_socorro)) {
                document.getElementById('saldo_gascloro_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_socorro').value = nuevo_saldo_gascloro_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_gascloro_santamaria = parseFloat(document.getElementById('recibido_gascloro_santamaria').value);
            var saldo_gascloro_santamaria = parseFloat(document.getElementById('saldo_gascloro_santamaria').value);
            var traspasos_gascloro_santamaria = parseFloat(document.getElementById('traspasos_gascloro_santamaria').value);
            
            if (!isNaN(recibido_gascloro_santamaria) & !isNaN(traspasos_gascloro_santamaria)) {
                var nuevo_saldo_gascloro_santamaria = (saldo + recibido_gascloro_santamaria - traspasos_gascloro_santamaria);
            }else{
                if (isNaN(recibido_gascloro_santamaria)) {
                var nuevo_saldo_gascloro_santamaria = (saldo - traspasos_gascloro_santamaria);
                }else{
                     if (isNaN(traspasos_gascloro_santamaria)) {
                    var nuevo_saldo_gascloro_santamaria = (saldo + recibido_gascloro_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_santamaria)) {
                document.getElementById('saldo_gascloro_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_santamaria').value = nuevo_saldo_gascloro_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_gascloro_espino = parseFloat(document.getElementById('recibido_gascloro_espino').value);
            var saldo_gascloro_espino = parseFloat(document.getElementById('saldo_gascloro_espino').value);
            var traspasos_gascloro_espino = parseFloat(document.getElementById('traspasos_gascloro_espino').value);
            
            if (!isNaN(recibido_gascloro_espino) & !isNaN(traspasos_gascloro_espino)) {
                var nuevo_saldo_gascloro_espino = (saldo + recibido_gascloro_espino - traspasos_gascloro_espino);
            }else{
                if (isNaN(recibido_gascloro_espino)) {
                var nuevo_saldo_gascloro_espino = (saldo - traspasos_gascloro_espino);
                }else{
                     if (isNaN(traspasos_gascloro_espino)) {
                    var nuevo_saldo_gascloro_espino = (saldo + recibido_gascloro_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_espino)) {
                document.getElementById('saldo_gascloro_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_espino').value = nuevo_saldo_gascloro_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_gascloro_guardatinajas = parseFloat(document.getElementById('recibido_gascloro_guardatinajas').value);
            var saldo_gascloro_guardatinajas = parseFloat(document.getElementById('saldo_gascloro_guardatinajas').value);
            var traspasos_gascloro_guardatinajas = parseFloat(document.getElementById('traspasos_gascloro_guardatinajas').value);
            
            if (!isNaN(recibido_gascloro_guardatinajas) & !isNaN(traspasos_gascloro_guardatinajas)) {
                var nuevo_saldo_gascloro_guardatinajas = (saldo + recibido_gascloro_guardatinajas - traspasos_gascloro_guardatinajas);
            }else{
                if (isNaN(recibido_gascloro_guardatinajas)) {
                var nuevo_saldo_gascloro_guardatinajas = (saldo - traspasos_gascloro_guardatinajas);
                }else{
                     if (isNaN(traspasos_gascloro_guardatinajas)) {
                    var nuevo_saldo_gascloro_guardatinajas = (saldo + recibido_gascloro_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_guardatinajas)) {
                document.getElementById('saldo_gascloro_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_guardatinajas').value = nuevo_saldo_gascloro_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_gascloro_sanrafael = parseFloat(document.getElementById('recibido_gascloro_sanrafael').value);
            var saldo_gascloro_sanrafael = parseFloat(document.getElementById('saldo_gascloro_sanrafael').value);
            var traspasos_gascloro_sanrafael = parseFloat(document.getElementById('traspasos_gascloro_sanrafael').value);
            
            if (!isNaN(recibido_gascloro_sanrafael) & !isNaN(traspasos_gascloro_sanrafael)) {
                var nuevo_saldo_gascloro_sanrafael = (saldo + recibido_gascloro_sanrafael - traspasos_gascloro_sanrafael);
            }else{
                if (isNaN(recibido_gascloro_sanrafael)) {
                var nuevo_saldo_gascloro_sanrafael = (saldo - traspasos_gascloro_sanrafael);
                }else{
                     if (isNaN(traspasos_gascloro_sanrafael)) {
                    var nuevo_saldo_gascloro_sanrafael = (saldo + recibido_gascloro_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_sanrafael)) {
                document.getElementById('saldo_gascloro_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_sanrafael').value = nuevo_saldo_gascloro_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_gascloro_chaguaramas = parseFloat(document.getElementById('recibido_gascloro_chaguaramas').value);
            var saldo_gascloro_chaguaramas = parseFloat(document.getElementById('saldo_gascloro_chaguaramas').value);
            var traspasos_gascloro_chaguaramas = parseFloat(document.getElementById('traspasos_gascloro_chaguaramas').value);
            
            if (!isNaN(recibido_gascloro_chaguaramas) & !isNaN(traspasos_gascloro_chaguaramas)) {
                var nuevo_saldo_gascloro_chaguaramas = (saldo + recibido_gascloro_chaguaramas - traspasos_gascloro_chaguaramas);
            }else{
                if (isNaN(recibido_gascloro_chaguaramas)) {
                var nuevo_saldo_gascloro_chaguaramas = (saldo - traspasos_gascloro_chaguaramas);
                }else{
                     if (isNaN(traspasos_gascloro_chaguaramas)) {
                    var nuevo_saldo_gascloro_chaguaramas = (saldo + recibido_gascloro_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_chaguaramas)) {
                document.getElementById('saldo_gascloro_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_chaguaramas').value = nuevo_saldo_gascloro_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_gascloro_somGaleria = parseFloat(document.getElementById('recibido_gascloro_somGaleria').value);
            var saldo_gascloro_somGaleria = parseFloat(document.getElementById('saldo_gascloro_somGaleria').value);
            var traspasos_gascloro_somGaleria = parseFloat(document.getElementById('traspasos_gascloro_somGaleria').value);
            
            if (!isNaN(recibido_gascloro_somGaleria) & !isNaN(traspasos_gascloro_somGaleria)) {
                var nuevo_saldo_gascloro_somGaleria = (saldo + recibido_gascloro_somGaleria - traspasos_gascloro_somGaleria);
            }else{
                if (isNaN(recibido_gascloro_somGaleria)) {
                var nuevo_saldo_gascloro_somGaleria = (saldo - traspasos_gascloro_somGaleria);
                }else{
                     if (isNaN(traspasos_gascloro_somGaleria)) {
                    var nuevo_saldo_gascloro_somGaleria = (saldo + recibido_gascloro_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_somGaleria)) {
                document.getElementById('saldo_gascloro_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_somGaleria').value = nuevo_saldo_gascloro_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_gascloro_somObrero = parseFloat(document.getElementById('recibido_gascloro_somObrero').value);
            var saldo_gascloro_somObrero = parseFloat(document.getElementById('saldo_gascloro_somObrero').value);
            var traspasos_gascloro_somObrero = parseFloat(document.getElementById('traspasos_gascloro_somObrero').value);
            
            if (!isNaN(recibido_gascloro_somObrero) & !isNaN(traspasos_gascloro_somObrero)) {
                var nuevo_saldo_gascloro_somObrero = (saldo + recibido_gascloro_somObrero - traspasos_gascloro_somObrero);
            }else{
                if (isNaN(recibido_gascloro_somObrero)) {
                var nuevo_saldo_gascloro_somObrero = (saldo - traspasos_gascloro_somObrero);
                }else{
                     if (isNaN(traspasos_gascloro_somObrero)) {
                    var nuevo_saldo_gascloro_somObrero = (saldo + recibido_gascloro_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_gascloro_somObrero)) {
                document.getElementById('saldo_gascloro_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_gascloro_somObrero').value = nuevo_saldo_gascloro_somObrero.toFixed(2);
            }

        }
        
      }

      function calculoSaldoCal(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_cal_sanjuan = parseFloat(document.getElementById('recibido_cal_sanjuan').value);
            var saldo_cal_sanjuan = parseFloat(document.getElementById('saldo_cal_sanjuan').value);
            var traspasos_cal_sanjuan = parseFloat(document.getElementById('traspasos_cal_sanjuan').value);
            
            if (!isNaN(recibido_cal_sanjuan) & !isNaN(traspasos_cal_sanjuan)) {
                var nuevo_saldo_cal_sanjuan = (saldo + recibido_cal_sanjuan - traspasos_cal_sanjuan);
            }else{
                if (isNaN(recibido_cal_sanjuan)) {
                var nuevo_saldo_cal_sanjuan = (saldo - traspasos_cal_sanjuan);
                }else{
                     if (isNaN(traspasos_cal_sanjuan)) {
                    var nuevo_saldo_cal_sanjuan = (saldo + recibido_cal_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_sanjuan)) {
                document.getElementById('saldo_cal_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_sanjuan').value = nuevo_saldo_cal_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_cal_calabozo = parseFloat(document.getElementById('recibido_cal_calabozo').value);
            var saldo_cal_calabozo = parseFloat(document.getElementById('saldo_cal_calabozo').value);
            var traspasos_cal_calabozo = parseFloat(document.getElementById('traspasos_cal_calabozo').value);
            
            if (!isNaN(recibido_cal_calabozo) & !isNaN(traspasos_cal_calabozo)) {
                var nuevo_saldo_cal_calabozo = (saldo + recibido_cal_calabozo - traspasos_cal_calabozo);
            }else{
                if (isNaN(recibido_cal_calabozo)) {
                var nuevo_saldo_cal_calabozo = (saldo - traspasos_cal_calabozo);
                }else{
                     if (isNaN(traspasos_cal_calabozo)) {
                    var nuevo_saldo_cal_calabozo = (saldo + recibido_cal_calabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_calabozo)) {
                document.getElementById('saldo_cal_calabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_calabozo').value = nuevo_saldo_cal_calabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_cal_altagracia = parseFloat(document.getElementById('recibido_cal_altagracia').value);
            var saldo_cal_altagracia = parseFloat(document.getElementById('saldo_cal_altagracia').value);
            var traspasos_cal_altagracia = parseFloat(document.getElementById('traspasos_cal_altagracia').value);
            
            if (!isNaN(recibido_cal_altagracia) & !isNaN(traspasos_cal_altagracia)) {
                var nuevo_saldo_cal_altagracia = (saldo + recibido_cal_altagracia - traspasos_cal_altagracia);
            }else{
                if (isNaN(recibido_cal_altagracia)) {
                var nuevo_saldo_cal_altagracia = (saldo - traspasos_cal_altagracia);
                }else{
                     if (isNaN(traspasos_cal_altagracia)) {
                    var nuevo_saldo_cal_altagracia = (saldo + recibido_cal_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_altagracia)) {
                document.getElementById('saldo_cal_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_altagracia').value = nuevo_saldo_cal_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_cal_valle = parseFloat(document.getElementById('recibido_cal_valle').value);
            var saldo_cal_valle = parseFloat(document.getElementById('saldo_cal_valle').value);
            var traspasos_cal_valle = parseFloat(document.getElementById('traspasos_cal_valle').value);
            
            if (!isNaN(recibido_cal_valle) & !isNaN(traspasos_cal_valle)) {
                var nuevo_saldo_cal_valle = (saldo + recibido_cal_valle - traspasos_cal_valle);
            }else{
                if (isNaN(recibido_cal_valle)) {
                var nuevo_saldo_cal_valle = (saldo - traspasos_cal_valle);
                }else{
                     if (isNaN(traspasos_cal_valle)) {
                    var nuevo_saldo_cal_valle = (saldo + recibido_cal_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_valle)) {
                document.getElementById('saldo_cal_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_valle').value = nuevo_saldo_cal_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_cal_tucupido = parseFloat(document.getElementById('recibido_cal_tucupido').value);
            var saldo_cal_tucupido = parseFloat(document.getElementById('saldo_cal_tucupido').value);
            var traspasos_cal_tucupido = parseFloat(document.getElementById('traspasos_cal_tucupido').value);
            
            if (!isNaN(recibido_cal_tucupido) & !isNaN(traspasos_cal_tucupido)) {
                var nuevo_saldo_cal_tucupido = (saldo + recibido_cal_tucupido - traspasos_cal_tucupido);
            }else{
                if (isNaN(recibido_cal_tucupido)) {
                var nuevo_saldo_cal_tucupido = (saldo - traspasos_cal_tucupido);
                }else{
                     if (isNaN(traspasos_cal_tucupido)) {
                    var nuevo_saldo_cal_tucupido = (saldo + recibido_cal_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_tucupido)) {
                document.getElementById('saldo_cal_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_tucupido').value = nuevo_saldo_cal_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_cal_sanjose = parseFloat(document.getElementById('recibido_cal_sanjose').value);
            var saldo_cal_sanjose = parseFloat(document.getElementById('saldo_cal_sanjose').value);
            var traspasos_cal_sanjose = parseFloat(document.getElementById('traspasos_cal_sanjose').value);
            
            if (!isNaN(recibido_cal_sanjose) & !isNaN(traspasos_cal_sanjose)) {
                var nuevo_saldo_cal_sanjose = (saldo + recibido_cal_sanjose - traspasos_cal_sanjose);
            }else{
                if (isNaN(recibido_cal_sanjose)) {
                var nuevo_saldo_cal_sanjose = (saldo - traspasos_cal_sanjose);
                }else{
                     if (isNaN(traspasos_cal_sanjose)) {
                    var nuevo_saldo_cal_sanjose = (saldo + recibido_cal_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_sanjose)) {
                document.getElementById('saldo_cal_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_sanjose').value = nuevo_saldo_cal_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_cal_zaraza = parseFloat(document.getElementById('recibido_cal_zaraza').value);
            var saldo_cal_zaraza = parseFloat(document.getElementById('saldo_cal_zaraza').value);
            var traspasos_cal_zaraza = parseFloat(document.getElementById('traspasos_cal_zaraza').value);
            
            if (!isNaN(recibido_cal_zaraza) & !isNaN(traspasos_cal_zaraza)) {
                var nuevo_saldo_cal_zaraza = (saldo + recibido_cal_zaraza - traspasos_cal_zaraza);
            }else{
                if (isNaN(recibido_cal_zaraza)) {
                var nuevo_saldo_cal_zaraza = (saldo - traspasos_cal_zaraza);
                }else{
                     if (isNaN(traspasos_cal_zaraza)) {
                    var nuevo_saldo_cal_zaraza = (saldo + recibido_cal_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_zaraza)) {
                document.getElementById('saldo_cal_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_zaraza').value = nuevo_saldo_cal_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_cal_socorro = parseFloat(document.getElementById('recibido_cal_socorro').value);
            var saldo_cal_socorro = parseFloat(document.getElementById('saldo_cal_socorro').value);
            var traspasos_cal_socorro = parseFloat(document.getElementById('traspasos_cal_socorro').value);
            
            if (!isNaN(recibido_cal_socorro) & !isNaN(traspasos_cal_socorro)) {
                var nuevo_saldo_cal_socorro = (saldo + recibido_cal_socorro - traspasos_cal_socorro);
            }else{
                if (isNaN(recibido_cal_socorro)) {
                var nuevo_saldo_cal_socorro = (saldo - traspasos_cal_socorro);
                }else{
                     if (isNaN(traspasos_cal_socorro)) {
                    var nuevo_saldo_cal_socorro = (saldo + recibido_cal_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_socorro)) {
                document.getElementById('saldo_cal_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_socorro').value = nuevo_saldo_cal_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_cal_santamaria = parseFloat(document.getElementById('recibido_cal_santamaria').value);
            var saldo_cal_santamaria = parseFloat(document.getElementById('saldo_cal_santamaria').value);
            var traspasos_cal_santamaria = parseFloat(document.getElementById('traspasos_cal_santamaria').value);
            
            if (!isNaN(recibido_cal_santamaria) & !isNaN(traspasos_cal_santamaria)) {
                var nuevo_saldo_cal_santamaria = (saldo + recibido_cal_santamaria - traspasos_cal_santamaria);
            }else{
                if (isNaN(recibido_cal_santamaria)) {
                var nuevo_saldo_cal_santamaria = (saldo - traspasos_cal_santamaria);
                }else{
                     if (isNaN(traspasos_cal_santamaria)) {
                    var nuevo_saldo_cal_santamaria = (saldo + recibido_cal_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_santamaria)) {
                document.getElementById('saldo_cal_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_santamaria').value = nuevo_saldo_cal_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_cal_espino = parseFloat(document.getElementById('recibido_cal_espino').value);
            var saldo_cal_espino = parseFloat(document.getElementById('saldo_cal_espino').value);
            var traspasos_cal_espino = parseFloat(document.getElementById('traspasos_cal_espino').value);
            
            if (!isNaN(recibido_cal_espino) & !isNaN(traspasos_cal_espino)) {
                var nuevo_saldo_cal_espino = (saldo + recibido_cal_espino - traspasos_cal_espino);
            }else{
                if (isNaN(recibido_cal_espino)) {
                var nuevo_saldo_cal_espino = (saldo - traspasos_cal_espino);
                }else{
                     if (isNaN(traspasos_cal_espino)) {
                    var nuevo_saldo_cal_espino = (saldo + recibido_cal_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_espino)) {
                document.getElementById('saldo_cal_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_espino').value = nuevo_saldo_cal_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_cal_guardatinajas = parseFloat(document.getElementById('recibido_cal_guardatinajas').value);
            var saldo_cal_guardatinajas = parseFloat(document.getElementById('saldo_cal_guardatinajas').value);
            var traspasos_cal_guardatinajas = parseFloat(document.getElementById('traspasos_cal_guardatinajas').value);
            
            if (!isNaN(recibido_cal_guardatinajas) & !isNaN(traspasos_cal_guardatinajas)) {
                var nuevo_saldo_cal_guardatinajas = (saldo + recibido_cal_guardatinajas - traspasos_cal_guardatinajas);
            }else{
                if (isNaN(recibido_cal_guardatinajas)) {
                var nuevo_saldo_cal_guardatinajas = (saldo - traspasos_cal_guardatinajas);
                }else{
                     if (isNaN(traspasos_cal_guardatinajas)) {
                    var nuevo_saldo_cal_guardatinajas = (saldo + recibido_cal_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_guardatinajas)) {
                document.getElementById('saldo_cal_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_guardatinajas').value = nuevo_saldo_cal_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_cal_sanrafael = parseFloat(document.getElementById('recibido_cal_sanrafael').value);
            var saldo_cal_sanrafael = parseFloat(document.getElementById('saldo_cal_sanrafael').value);
            var traspasos_cal_sanrafael = parseFloat(document.getElementById('traspasos_cal_sanrafael').value);
            
            if (!isNaN(recibido_cal_sanrafael) & !isNaN(traspasos_cal_sanrafael)) {
                var nuevo_saldo_cal_sanrafael = (saldo + recibido_cal_sanrafael - traspasos_cal_sanrafael);
            }else{
                if (isNaN(recibido_cal_sanrafael)) {
                var nuevo_saldo_cal_sanrafael = (saldo - traspasos_cal_sanrafael);
                }else{
                     if (isNaN(traspasos_cal_sanrafael)) {
                    var nuevo_saldo_cal_sanrafael = (saldo + recibido_cal_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_sanrafael)) {
                document.getElementById('saldo_cal_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_sanrafael').value = nuevo_saldo_cal_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_cal_chaguaramas = parseFloat(document.getElementById('recibido_cal_chaguaramas').value);
            var saldo_cal_chaguaramas = parseFloat(document.getElementById('saldo_cal_chaguaramas').value);
            var traspasos_cal_chaguaramas = parseFloat(document.getElementById('traspasos_cal_chaguaramas').value);
            
            if (!isNaN(recibido_cal_chaguaramas) & !isNaN(traspasos_cal_chaguaramas)) {
                var nuevo_saldo_cal_chaguaramas = (saldo + recibido_cal_chaguaramas - traspasos_cal_chaguaramas);
            }else{
                if (isNaN(recibido_cal_chaguaramas)) {
                var nuevo_saldo_cal_chaguaramas = (saldo - traspasos_cal_chaguaramas);
                }else{
                     if (isNaN(traspasos_cal_chaguaramas)) {
                    var nuevo_saldo_cal_chaguaramas = (saldo + recibido_cal_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_chaguaramas)) {
                document.getElementById('saldo_cal_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_chaguaramas').value = nuevo_saldo_cal_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_cal_somGaleria = parseFloat(document.getElementById('recibido_cal_somGaleria').value);
            var saldo_cal_somGaleria = parseFloat(document.getElementById('saldo_cal_somGaleria').value);
            var traspasos_cal_somGaleria = parseFloat(document.getElementById('traspasos_cal_somGaleria').value);
            
            if (!isNaN(recibido_cal_somGaleria) & !isNaN(traspasos_cal_somGaleria)) {
                var nuevo_saldo_cal_somGaleria = (saldo + recibido_cal_somGaleria - traspasos_cal_somGaleria);
            }else{
                if (isNaN(recibido_cal_somGaleria)) {
                var nuevo_saldo_cal_somGaleria = (saldo - traspasos_cal_somGaleria);
                }else{
                     if (isNaN(traspasos_cal_somGaleria)) {
                    var nuevo_saldo_cal_somGaleria = (saldo + recibido_cal_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_somGaleria)) {
                document.getElementById('saldo_cal_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_somGaleria').value = nuevo_saldo_cal_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_cal_somObrero = parseFloat(document.getElementById('recibido_cal_somObrero').value);
            var saldo_cal_somObrero = parseFloat(document.getElementById('saldo_cal_somObrero').value);
            var traspasos_cal_somObrero = parseFloat(document.getElementById('traspasos_cal_somObrero').value);
            
            if (!isNaN(recibido_cal_somObrero) & !isNaN(traspasos_cal_somObrero)) {
                var nuevo_saldo_cal_somObrero = (saldo + recibido_cal_somObrero - traspasos_cal_somObrero);
            }else{
                if (isNaN(recibido_cal_somObrero)) {
                var nuevo_saldo_cal_somObrero = (saldo - traspasos_cal_somObrero);
                }else{
                     if (isNaN(traspasos_cal_somObrero)) {
                    var nuevo_saldo_cal_somObrero = (saldo + recibido_cal_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_cal_somObrero)) {
                document.getElementById('saldo_cal_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_cal_somObrero').value = nuevo_saldo_cal_somObrero.toFixed(2);
            }

        }
        
      }

      function calculoSaldoHipoclorito(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_hipoclorito_sanjuan = parseFloat(document.getElementById('recibido_hipoclorito_sanjuan').value);
            var saldo_hipoclorito_sanjuan = parseFloat(document.getElementById('saldo_hipoclorito_sanjuan').value);
            var traspasos_hipoclorito_sanjuan = parseFloat(document.getElementById('traspasos_hipoclorito_sanjuan').value);
            
            if (!isNaN(recibido_hipoclorito_sanjuan) & !isNaN(traspasos_hipoclorito_sanjuan)) {
                var nuevo_saldo_hipoclorito_sanjuan = (saldo + recibido_hipoclorito_sanjuan - traspasos_hipoclorito_sanjuan);
            }else{
                if (isNaN(recibido_hipoclorito_sanjuan)) {
                var nuevo_saldo_hipoclorito_sanjuan = (saldo - traspasos_hipoclorito_sanjuan);
                }else{
                     if (isNaN(traspasos_hipoclorito_sanjuan)) {
                    var nuevo_saldo_hipoclorito_sanjuan = (saldo + recibido_hipoclorito_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_sanjuan)) {
                document.getElementById('saldo_hipoclorito_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_sanjuan').value = nuevo_saldo_hipoclorito_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_hipoclorito_hipocloritoabozo = parseFloat(document.getElementById('recibido_hipoclorito_hipocloritoabozo').value);
            var saldo_hipoclorito_hipocloritoabozo = parseFloat(document.getElementById('saldo_hipoclorito_hipocloritoabozo').value);
            var traspasos_hipoclorito_hipocloritoabozo = parseFloat(document.getElementById('traspasos_hipoclorito_hipocloritoabozo').value);
            
            if (!isNaN(recibido_hipoclorito_hipocloritoabozo) & !isNaN(traspasos_hipoclorito_hipocloritoabozo)) {
                var nuevo_saldo_hipoclorito_hipocloritoabozo = (saldo + recibido_hipoclorito_hipocloritoabozo - traspasos_hipoclorito_hipocloritoabozo);
            }else{
                if (isNaN(recibido_hipoclorito_hipocloritoabozo)) {
                var nuevo_saldo_hipoclorito_hipocloritoabozo = (saldo - traspasos_hipoclorito_hipocloritoabozo);
                }else{
                     if (isNaN(traspasos_hipoclorito_hipocloritoabozo)) {
                    var nuevo_saldo_hipoclorito_hipocloritoabozo = (saldo + recibido_hipoclorito_hipocloritoabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_hipocloritoabozo)) {
                document.getElementById('saldo_hipoclorito_hipocloritoabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_hipocloritoabozo').value = nuevo_saldo_hipoclorito_hipocloritoabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_hipoclorito_altagracia = parseFloat(document.getElementById('recibido_hipoclorito_altagracia').value);
            var saldo_hipoclorito_altagracia = parseFloat(document.getElementById('saldo_hipoclorito_altagracia').value);
            var traspasos_hipoclorito_altagracia = parseFloat(document.getElementById('traspasos_hipoclorito_altagracia').value);
            
            if (!isNaN(recibido_hipoclorito_altagracia) & !isNaN(traspasos_hipoclorito_altagracia)) {
                var nuevo_saldo_hipoclorito_altagracia = (saldo + recibido_hipoclorito_altagracia - traspasos_hipoclorito_altagracia);
            }else{
                if (isNaN(recibido_hipoclorito_altagracia)) {
                var nuevo_saldo_hipoclorito_altagracia = (saldo - traspasos_hipoclorito_altagracia);
                }else{
                     if (isNaN(traspasos_hipoclorito_altagracia)) {
                    var nuevo_saldo_hipoclorito_altagracia = (saldo + recibido_hipoclorito_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_altagracia)) {
                document.getElementById('saldo_hipoclorito_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_altagracia').value = nuevo_saldo_hipoclorito_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_hipoclorito_valle = parseFloat(document.getElementById('recibido_hipoclorito_valle').value);
            var saldo_hipoclorito_valle = parseFloat(document.getElementById('saldo_hipoclorito_valle').value);
            var traspasos_hipoclorito_valle = parseFloat(document.getElementById('traspasos_hipoclorito_valle').value);
            
            if (!isNaN(recibido_hipoclorito_valle) & !isNaN(traspasos_hipoclorito_valle)) {
                var nuevo_saldo_hipoclorito_valle = (saldo + recibido_hipoclorito_valle - traspasos_hipoclorito_valle);
            }else{
                if (isNaN(recibido_hipoclorito_valle)) {
                var nuevo_saldo_hipoclorito_valle = (saldo - traspasos_hipoclorito_valle);
                }else{
                     if (isNaN(traspasos_hipoclorito_valle)) {
                    var nuevo_saldo_hipoclorito_valle = (saldo + recibido_hipoclorito_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_valle)) {
                document.getElementById('saldo_hipoclorito_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_valle').value = nuevo_saldo_hipoclorito_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_hipoclorito_tucupido = parseFloat(document.getElementById('recibido_hipoclorito_tucupido').value);
            var saldo_hipoclorito_tucupido = parseFloat(document.getElementById('saldo_hipoclorito_tucupido').value);
            var traspasos_hipoclorito_tucupido = parseFloat(document.getElementById('traspasos_hipoclorito_tucupido').value);
            
            if (!isNaN(recibido_hipoclorito_tucupido) & !isNaN(traspasos_hipoclorito_tucupido)) {
                var nuevo_saldo_hipoclorito_tucupido = (saldo + recibido_hipoclorito_tucupido - traspasos_hipoclorito_tucupido);
            }else{
                if (isNaN(recibido_hipoclorito_tucupido)) {
                var nuevo_saldo_hipoclorito_tucupido = (saldo - traspasos_hipoclorito_tucupido);
                }else{
                     if (isNaN(traspasos_hipoclorito_tucupido)) {
                    var nuevo_saldo_hipoclorito_tucupido = (saldo + recibido_hipoclorito_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_tucupido)) {
                document.getElementById('saldo_hipoclorito_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_tucupido').value = nuevo_saldo_hipoclorito_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_hipoclorito_sanjose = parseFloat(document.getElementById('recibido_hipoclorito_sanjose').value);
            var saldo_hipoclorito_sanjose = parseFloat(document.getElementById('saldo_hipoclorito_sanjose').value);
            var traspasos_hipoclorito_sanjose = parseFloat(document.getElementById('traspasos_hipoclorito_sanjose').value);
            
            if (!isNaN(recibido_hipoclorito_sanjose) & !isNaN(traspasos_hipoclorito_sanjose)) {
                var nuevo_saldo_hipoclorito_sanjose = (saldo + recibido_hipoclorito_sanjose - traspasos_hipoclorito_sanjose);
            }else{
                if (isNaN(recibido_hipoclorito_sanjose)) {
                var nuevo_saldo_hipoclorito_sanjose = (saldo - traspasos_hipoclorito_sanjose);
                }else{
                     if (isNaN(traspasos_hipoclorito_sanjose)) {
                    var nuevo_saldo_hipoclorito_sanjose = (saldo + recibido_hipoclorito_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_sanjose)) {
                document.getElementById('saldo_hipoclorito_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_sanjose').value = nuevo_saldo_hipoclorito_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_hipoclorito_zaraza = parseFloat(document.getElementById('recibido_hipoclorito_zaraza').value);
            var saldo_hipoclorito_zaraza = parseFloat(document.getElementById('saldo_hipoclorito_zaraza').value);
            var traspasos_hipoclorito_zaraza = parseFloat(document.getElementById('traspasos_hipoclorito_zaraza').value);
            
            if (!isNaN(recibido_hipoclorito_zaraza) & !isNaN(traspasos_hipoclorito_zaraza)) {
                var nuevo_saldo_hipoclorito_zaraza = (saldo + recibido_hipoclorito_zaraza - traspasos_hipoclorito_zaraza);
            }else{
                if (isNaN(recibido_hipoclorito_zaraza)) {
                var nuevo_saldo_hipoclorito_zaraza = (saldo - traspasos_hipoclorito_zaraza);
                }else{
                     if (isNaN(traspasos_hipoclorito_zaraza)) {
                    var nuevo_saldo_hipoclorito_zaraza = (saldo + recibido_hipoclorito_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_zaraza)) {
                document.getElementById('saldo_hipoclorito_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_zaraza').value = nuevo_saldo_hipoclorito_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_hipoclorito_socorro = parseFloat(document.getElementById('recibido_hipoclorito_socorro').value);
            var saldo_hipoclorito_socorro = parseFloat(document.getElementById('saldo_hipoclorito_socorro').value);
            var traspasos_hipoclorito_socorro = parseFloat(document.getElementById('traspasos_hipoclorito_socorro').value);
            
            if (!isNaN(recibido_hipoclorito_socorro) & !isNaN(traspasos_hipoclorito_socorro)) {
                var nuevo_saldo_hipoclorito_socorro = (saldo + recibido_hipoclorito_socorro - traspasos_hipoclorito_socorro);
            }else{
                if (isNaN(recibido_hipoclorito_socorro)) {
                var nuevo_saldo_hipoclorito_socorro = (saldo - traspasos_hipoclorito_socorro);
                }else{
                     if (isNaN(traspasos_hipoclorito_socorro)) {
                    var nuevo_saldo_hipoclorito_socorro = (saldo + recibido_hipoclorito_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_socorro)) {
                document.getElementById('saldo_hipoclorito_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_socorro').value = nuevo_saldo_hipoclorito_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_hipoclorito_santamaria = parseFloat(document.getElementById('recibido_hipoclorito_santamaria').value);
            var saldo_hipoclorito_santamaria = parseFloat(document.getElementById('saldo_hipoclorito_santamaria').value);
            var traspasos_hipoclorito_santamaria = parseFloat(document.getElementById('traspasos_hipoclorito_santamaria').value);
            
            if (!isNaN(recibido_hipoclorito_santamaria) & !isNaN(traspasos_hipoclorito_santamaria)) {
                var nuevo_saldo_hipoclorito_santamaria = (saldo + recibido_hipoclorito_santamaria - traspasos_hipoclorito_santamaria);
            }else{
                if (isNaN(recibido_hipoclorito_santamaria)) {
                var nuevo_saldo_hipoclorito_santamaria = (saldo - traspasos_hipoclorito_santamaria);
                }else{
                     if (isNaN(traspasos_hipoclorito_santamaria)) {
                    var nuevo_saldo_hipoclorito_santamaria = (saldo + recibido_hipoclorito_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_santamaria)) {
                document.getElementById('saldo_hipoclorito_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_santamaria').value = nuevo_saldo_hipoclorito_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_hipoclorito_espino = parseFloat(document.getElementById('recibido_hipoclorito_espino').value);
            var saldo_hipoclorito_espino = parseFloat(document.getElementById('saldo_hipoclorito_espino').value);
            var traspasos_hipoclorito_espino = parseFloat(document.getElementById('traspasos_hipoclorito_espino').value);
            
            if (!isNaN(recibido_hipoclorito_espino) & !isNaN(traspasos_hipoclorito_espino)) {
                var nuevo_saldo_hipoclorito_espino = (saldo + recibido_hipoclorito_espino - traspasos_hipoclorito_espino);
            }else{
                if (isNaN(recibido_hipoclorito_espino)) {
                var nuevo_saldo_hipoclorito_espino = (saldo - traspasos_hipoclorito_espino);
                }else{
                     if (isNaN(traspasos_hipoclorito_espino)) {
                    var nuevo_saldo_hipoclorito_espino = (saldo + recibido_hipoclorito_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_espino)) {
                document.getElementById('saldo_hipoclorito_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_espino').value = nuevo_saldo_hipoclorito_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_hipoclorito_guardatinajas = parseFloat(document.getElementById('recibido_hipoclorito_guardatinajas').value);
            var saldo_hipoclorito_guardatinajas = parseFloat(document.getElementById('saldo_hipoclorito_guardatinajas').value);
            var traspasos_hipoclorito_guardatinajas = parseFloat(document.getElementById('traspasos_hipoclorito_guardatinajas').value);
            
            if (!isNaN(recibido_hipoclorito_guardatinajas) & !isNaN(traspasos_hipoclorito_guardatinajas)) {
                var nuevo_saldo_hipoclorito_guardatinajas = (saldo + recibido_hipoclorito_guardatinajas - traspasos_hipoclorito_guardatinajas);
            }else{
                if (isNaN(recibido_hipoclorito_guardatinajas)) {
                var nuevo_saldo_hipoclorito_guardatinajas = (saldo - traspasos_hipoclorito_guardatinajas);
                }else{
                     if (isNaN(traspasos_hipoclorito_guardatinajas)) {
                    var nuevo_saldo_hipoclorito_guardatinajas = (saldo + recibido_hipoclorito_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_guardatinajas)) {
                document.getElementById('saldo_hipoclorito_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_guardatinajas').value = nuevo_saldo_hipoclorito_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_hipoclorito_sanrafael = parseFloat(document.getElementById('recibido_hipoclorito_sanrafael').value);
            var saldo_hipoclorito_sanrafael = parseFloat(document.getElementById('saldo_hipoclorito_sanrafael').value);
            var traspasos_hipoclorito_sanrafael = parseFloat(document.getElementById('traspasos_hipoclorito_sanrafael').value);
            
            if (!isNaN(recibido_hipoclorito_sanrafael) & !isNaN(traspasos_hipoclorito_sanrafael)) {
                var nuevo_saldo_hipoclorito_sanrafael = (saldo + recibido_hipoclorito_sanrafael - traspasos_hipoclorito_sanrafael);
            }else{
                if (isNaN(recibido_hipoclorito_sanrafael)) {
                var nuevo_saldo_hipoclorito_sanrafael = (saldo - traspasos_hipoclorito_sanrafael);
                }else{
                     if (isNaN(traspasos_hipoclorito_sanrafael)) {
                    var nuevo_saldo_hipoclorito_sanrafael = (saldo + recibido_hipoclorito_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_sanrafael)) {
                document.getElementById('saldo_hipoclorito_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_sanrafael').value = nuevo_saldo_hipoclorito_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_hipoclorito_chaguaramas = parseFloat(document.getElementById('recibido_hipoclorito_chaguaramas').value);
            var saldo_hipoclorito_chaguaramas = parseFloat(document.getElementById('saldo_hipoclorito_chaguaramas').value);
            var traspasos_hipoclorito_chaguaramas = parseFloat(document.getElementById('traspasos_hipoclorito_chaguaramas').value);
            
            if (!isNaN(recibido_hipoclorito_chaguaramas) & !isNaN(traspasos_hipoclorito_chaguaramas)) {
                var nuevo_saldo_hipoclorito_chaguaramas = (saldo + recibido_hipoclorito_chaguaramas - traspasos_hipoclorito_chaguaramas);
            }else{
                if (isNaN(recibido_hipoclorito_chaguaramas)) {
                var nuevo_saldo_hipoclorito_chaguaramas = (saldo - traspasos_hipoclorito_chaguaramas);
                }else{
                     if (isNaN(traspasos_hipoclorito_chaguaramas)) {
                    var nuevo_saldo_hipoclorito_chaguaramas = (saldo + recibido_hipoclorito_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_chaguaramas)) {
                document.getElementById('saldo_hipoclorito_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_chaguaramas').value = nuevo_saldo_hipoclorito_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_hipoclorito_somGaleria = parseFloat(document.getElementById('recibido_hipoclorito_somGaleria').value);
            var saldo_hipoclorito_somGaleria = parseFloat(document.getElementById('saldo_hipoclorito_somGaleria').value);
            var traspasos_hipoclorito_somGaleria = parseFloat(document.getElementById('traspasos_hipoclorito_somGaleria').value);
            
            if (!isNaN(recibido_hipoclorito_somGaleria) & !isNaN(traspasos_hipoclorito_somGaleria)) {
                var nuevo_saldo_hipoclorito_somGaleria = (saldo + recibido_hipoclorito_somGaleria - traspasos_hipoclorito_somGaleria);
            }else{
                if (isNaN(recibido_hipoclorito_somGaleria)) {
                var nuevo_saldo_hipoclorito_somGaleria = (saldo - traspasos_hipoclorito_somGaleria);
                }else{
                     if (isNaN(traspasos_hipoclorito_somGaleria)) {
                    var nuevo_saldo_hipoclorito_somGaleria = (saldo + recibido_hipoclorito_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_somGaleria)) {
                document.getElementById('saldo_hipoclorito_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_somGaleria').value = nuevo_saldo_hipoclorito_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_hipoclorito_somObrero = parseFloat(document.getElementById('recibido_hipoclorito_somObrero').value);
            var saldo_hipoclorito_somObrero = parseFloat(document.getElementById('saldo_hipoclorito_somObrero').value);
            var traspasos_hipoclorito_somObrero = parseFloat(document.getElementById('traspasos_hipoclorito_somObrero').value);
            
            if (!isNaN(recibido_hipoclorito_somObrero) & !isNaN(traspasos_hipoclorito_somObrero)) {
                var nuevo_saldo_hipoclorito_somObrero = (saldo + recibido_hipoclorito_somObrero - traspasos_hipoclorito_somObrero);
            }else{
                if (isNaN(recibido_hipoclorito_somObrero)) {
                var nuevo_saldo_hipoclorito_somObrero = (saldo - traspasos_hipoclorito_somObrero);
                }else{
                     if (isNaN(traspasos_hipoclorito_somObrero)) {
                    var nuevo_saldo_hipoclorito_somObrero = (saldo + recibido_hipoclorito_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_hipoclorito_somObrero)) {
                document.getElementById('saldo_hipoclorito_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_hipoclorito_somObrero').value = nuevo_saldo_hipoclorito_somObrero.toFixed(2);
            }

        }
        
      }

      function calculoSaldoPoli(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_poli_sanjuan = parseFloat(document.getElementById('recibido_poli_sanjuan').value);
            var saldo_poli_sanjuan = parseFloat(document.getElementById('saldo_poli_sanjuan').value);
            var traspasos_poli_sanjuan = parseFloat(document.getElementById('traspasos_poli_sanjuan').value);
            
            if (!isNaN(recibido_poli_sanjuan) & !isNaN(traspasos_poli_sanjuan)) {
                var nuevo_saldo_poli_sanjuan = (saldo + recibido_poli_sanjuan - traspasos_poli_sanjuan);
            }else{
                if (isNaN(recibido_poli_sanjuan)) {
                var nuevo_saldo_poli_sanjuan = (saldo - traspasos_poli_sanjuan);
                }else{
                     if (isNaN(traspasos_poli_sanjuan)) {
                    var nuevo_saldo_poli_sanjuan = (saldo + recibido_poli_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_sanjuan)) {
                document.getElementById('saldo_poli_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_sanjuan').value = nuevo_saldo_poli_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_poli_poliabozo = parseFloat(document.getElementById('recibido_poli_poliabozo').value);
            var saldo_poli_poliabozo = parseFloat(document.getElementById('saldo_poli_poliabozo').value);
            var traspasos_poli_poliabozo = parseFloat(document.getElementById('traspasos_poli_poliabozo').value);
            
            if (!isNaN(recibido_poli_poliabozo) & !isNaN(traspasos_poli_poliabozo)) {
                var nuevo_saldo_poli_poliabozo = (saldo + recibido_poli_poliabozo - traspasos_poli_poliabozo);
            }else{
                if (isNaN(recibido_poli_poliabozo)) {
                var nuevo_saldo_poli_poliabozo = (saldo - traspasos_poli_poliabozo);
                }else{
                     if (isNaN(traspasos_poli_poliabozo)) {
                    var nuevo_saldo_poli_poliabozo = (saldo + recibido_poli_poliabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_poliabozo)) {
                document.getElementById('saldo_poli_poliabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_poliabozo').value = nuevo_saldo_poli_poliabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_poli_altagracia = parseFloat(document.getElementById('recibido_poli_altagracia').value);
            var saldo_poli_altagracia = parseFloat(document.getElementById('saldo_poli_altagracia').value);
            var traspasos_poli_altagracia = parseFloat(document.getElementById('traspasos_poli_altagracia').value);
            
            if (!isNaN(recibido_poli_altagracia) & !isNaN(traspasos_poli_altagracia)) {
                var nuevo_saldo_poli_altagracia = (saldo + recibido_poli_altagracia - traspasos_poli_altagracia);
            }else{
                if (isNaN(recibido_poli_altagracia)) {
                var nuevo_saldo_poli_altagracia = (saldo - traspasos_poli_altagracia);
                }else{
                     if (isNaN(traspasos_poli_altagracia)) {
                    var nuevo_saldo_poli_altagracia = (saldo + recibido_poli_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_altagracia)) {
                document.getElementById('saldo_poli_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_altagracia').value = nuevo_saldo_poli_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_poli_valle = parseFloat(document.getElementById('recibido_poli_valle').value);
            var saldo_poli_valle = parseFloat(document.getElementById('saldo_poli_valle').value);
            var traspasos_poli_valle = parseFloat(document.getElementById('traspasos_poli_valle').value);
            
            if (!isNaN(recibido_poli_valle) & !isNaN(traspasos_poli_valle)) {
                var nuevo_saldo_poli_valle = (saldo + recibido_poli_valle - traspasos_poli_valle);
            }else{
                if (isNaN(recibido_poli_valle)) {
                var nuevo_saldo_poli_valle = (saldo - traspasos_poli_valle);
                }else{
                     if (isNaN(traspasos_poli_valle)) {
                    var nuevo_saldo_poli_valle = (saldo + recibido_poli_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_valle)) {
                document.getElementById('saldo_poli_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_valle').value = nuevo_saldo_poli_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_poli_tucupido = parseFloat(document.getElementById('recibido_poli_tucupido').value);
            var saldo_poli_tucupido = parseFloat(document.getElementById('saldo_poli_tucupido').value);
            var traspasos_poli_tucupido = parseFloat(document.getElementById('traspasos_poli_tucupido').value);
            
            if (!isNaN(recibido_poli_tucupido) & !isNaN(traspasos_poli_tucupido)) {
                var nuevo_saldo_poli_tucupido = (saldo + recibido_poli_tucupido - traspasos_poli_tucupido);
            }else{
                if (isNaN(recibido_poli_tucupido)) {
                var nuevo_saldo_poli_tucupido = (saldo - traspasos_poli_tucupido);
                }else{
                     if (isNaN(traspasos_poli_tucupido)) {
                    var nuevo_saldo_poli_tucupido = (saldo + recibido_poli_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_tucupido)) {
                document.getElementById('saldo_poli_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_tucupido').value = nuevo_saldo_poli_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_poli_sanjose = parseFloat(document.getElementById('recibido_poli_sanjose').value);
            var saldo_poli_sanjose = parseFloat(document.getElementById('saldo_poli_sanjose').value);
            var traspasos_poli_sanjose = parseFloat(document.getElementById('traspasos_poli_sanjose').value);
            
            if (!isNaN(recibido_poli_sanjose) & !isNaN(traspasos_poli_sanjose)) {
                var nuevo_saldo_poli_sanjose = (saldo + recibido_poli_sanjose - traspasos_poli_sanjose);
            }else{
                if (isNaN(recibido_poli_sanjose)) {
                var nuevo_saldo_poli_sanjose = (saldo - traspasos_poli_sanjose);
                }else{
                     if (isNaN(traspasos_poli_sanjose)) {
                    var nuevo_saldo_poli_sanjose = (saldo + recibido_poli_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_sanjose)) {
                document.getElementById('saldo_poli_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_sanjose').value = nuevo_saldo_poli_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_poli_zaraza = parseFloat(document.getElementById('recibido_poli_zaraza').value);
            var saldo_poli_zaraza = parseFloat(document.getElementById('saldo_poli_zaraza').value);
            var traspasos_poli_zaraza = parseFloat(document.getElementById('traspasos_poli_zaraza').value);
            
            if (!isNaN(recibido_poli_zaraza) & !isNaN(traspasos_poli_zaraza)) {
                var nuevo_saldo_poli_zaraza = (saldo + recibido_poli_zaraza - traspasos_poli_zaraza);
            }else{
                if (isNaN(recibido_poli_zaraza)) {
                var nuevo_saldo_poli_zaraza = (saldo - traspasos_poli_zaraza);
                }else{
                     if (isNaN(traspasos_poli_zaraza)) {
                    var nuevo_saldo_poli_zaraza = (saldo + recibido_poli_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_zaraza)) {
                document.getElementById('saldo_poli_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_zaraza').value = nuevo_saldo_poli_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_poli_socorro = parseFloat(document.getElementById('recibido_poli_socorro').value);
            var saldo_poli_socorro = parseFloat(document.getElementById('saldo_poli_socorro').value);
            var traspasos_poli_socorro = parseFloat(document.getElementById('traspasos_poli_socorro').value);
            
            if (!isNaN(recibido_poli_socorro) & !isNaN(traspasos_poli_socorro)) {
                var nuevo_saldo_poli_socorro = (saldo + recibido_poli_socorro - traspasos_poli_socorro);
            }else{
                if (isNaN(recibido_poli_socorro)) {
                var nuevo_saldo_poli_socorro = (saldo - traspasos_poli_socorro);
                }else{
                     if (isNaN(traspasos_poli_socorro)) {
                    var nuevo_saldo_poli_socorro = (saldo + recibido_poli_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_socorro)) {
                document.getElementById('saldo_poli_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_socorro').value = nuevo_saldo_poli_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_poli_santamaria = parseFloat(document.getElementById('recibido_poli_santamaria').value);
            var saldo_poli_santamaria = parseFloat(document.getElementById('saldo_poli_santamaria').value);
            var traspasos_poli_santamaria = parseFloat(document.getElementById('traspasos_poli_santamaria').value);
            
            if (!isNaN(recibido_poli_santamaria) & !isNaN(traspasos_poli_santamaria)) {
                var nuevo_saldo_poli_santamaria = (saldo + recibido_poli_santamaria - traspasos_poli_santamaria);
            }else{
                if (isNaN(recibido_poli_santamaria)) {
                var nuevo_saldo_poli_santamaria = (saldo - traspasos_poli_santamaria);
                }else{
                     if (isNaN(traspasos_poli_santamaria)) {
                    var nuevo_saldo_poli_santamaria = (saldo + recibido_poli_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_santamaria)) {
                document.getElementById('saldo_poli_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_santamaria').value = nuevo_saldo_poli_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_poli_espino = parseFloat(document.getElementById('recibido_poli_espino').value);
            var saldo_poli_espino = parseFloat(document.getElementById('saldo_poli_espino').value);
            var traspasos_poli_espino = parseFloat(document.getElementById('traspasos_poli_espino').value);
            
            if (!isNaN(recibido_poli_espino) & !isNaN(traspasos_poli_espino)) {
                var nuevo_saldo_poli_espino = (saldo + recibido_poli_espino - traspasos_poli_espino);
            }else{
                if (isNaN(recibido_poli_espino)) {
                var nuevo_saldo_poli_espino = (saldo - traspasos_poli_espino);
                }else{
                     if (isNaN(traspasos_poli_espino)) {
                    var nuevo_saldo_poli_espino = (saldo + recibido_poli_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_espino)) {
                document.getElementById('saldo_poli_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_espino').value = nuevo_saldo_poli_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_poli_guardatinajas = parseFloat(document.getElementById('recibido_poli_guardatinajas').value);
            var saldo_poli_guardatinajas = parseFloat(document.getElementById('saldo_poli_guardatinajas').value);
            var traspasos_poli_guardatinajas = parseFloat(document.getElementById('traspasos_poli_guardatinajas').value);
            
            if (!isNaN(recibido_poli_guardatinajas) & !isNaN(traspasos_poli_guardatinajas)) {
                var nuevo_saldo_poli_guardatinajas = (saldo + recibido_poli_guardatinajas - traspasos_poli_guardatinajas);
            }else{
                if (isNaN(recibido_poli_guardatinajas)) {
                var nuevo_saldo_poli_guardatinajas = (saldo - traspasos_poli_guardatinajas);
                }else{
                     if (isNaN(traspasos_poli_guardatinajas)) {
                    var nuevo_saldo_poli_guardatinajas = (saldo + recibido_poli_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_guardatinajas)) {
                document.getElementById('saldo_poli_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_guardatinajas').value = nuevo_saldo_poli_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_poli_sanrafael = parseFloat(document.getElementById('recibido_poli_sanrafael').value);
            var saldo_poli_sanrafael = parseFloat(document.getElementById('saldo_poli_sanrafael').value);
            var traspasos_poli_sanrafael = parseFloat(document.getElementById('traspasos_poli_sanrafael').value);
            
            if (!isNaN(recibido_poli_sanrafael) & !isNaN(traspasos_poli_sanrafael)) {
                var nuevo_saldo_poli_sanrafael = (saldo + recibido_poli_sanrafael - traspasos_poli_sanrafael);
            }else{
                if (isNaN(recibido_poli_sanrafael)) {
                var nuevo_saldo_poli_sanrafael = (saldo - traspasos_poli_sanrafael);
                }else{
                     if (isNaN(traspasos_poli_sanrafael)) {
                    var nuevo_saldo_poli_sanrafael = (saldo + recibido_poli_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_sanrafael)) {
                document.getElementById('saldo_poli_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_sanrafael').value = nuevo_saldo_poli_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_poli_chaguaramas = parseFloat(document.getElementById('recibido_poli_chaguaramas').value);
            var saldo_poli_chaguaramas = parseFloat(document.getElementById('saldo_poli_chaguaramas').value);
            var traspasos_poli_chaguaramas = parseFloat(document.getElementById('traspasos_poli_chaguaramas').value);
            
            if (!isNaN(recibido_poli_chaguaramas) & !isNaN(traspasos_poli_chaguaramas)) {
                var nuevo_saldo_poli_chaguaramas = (saldo + recibido_poli_chaguaramas - traspasos_poli_chaguaramas);
            }else{
                if (isNaN(recibido_poli_chaguaramas)) {
                var nuevo_saldo_poli_chaguaramas = (saldo - traspasos_poli_chaguaramas);
                }else{
                     if (isNaN(traspasos_poli_chaguaramas)) {
                    var nuevo_saldo_poli_chaguaramas = (saldo + recibido_poli_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_chaguaramas)) {
                document.getElementById('saldo_poli_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_chaguaramas').value = nuevo_saldo_poli_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_poli_somGaleria = parseFloat(document.getElementById('recibido_poli_somGaleria').value);
            var saldo_poli_somGaleria = parseFloat(document.getElementById('saldo_poli_somGaleria').value);
            var traspasos_poli_somGaleria = parseFloat(document.getElementById('traspasos_poli_somGaleria').value);
            
            if (!isNaN(recibido_poli_somGaleria) & !isNaN(traspasos_poli_somGaleria)) {
                var nuevo_saldo_poli_somGaleria = (saldo + recibido_poli_somGaleria - traspasos_poli_somGaleria);
            }else{
                if (isNaN(recibido_poli_somGaleria)) {
                var nuevo_saldo_poli_somGaleria = (saldo - traspasos_poli_somGaleria);
                }else{
                     if (isNaN(traspasos_poli_somGaleria)) {
                    var nuevo_saldo_poli_somGaleria = (saldo + recibido_poli_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_somGaleria)) {
                document.getElementById('saldo_poli_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_somGaleria').value = nuevo_saldo_poli_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_poli_somObrero = parseFloat(document.getElementById('recibido_poli_somObrero').value);
            var saldo_poli_somObrero = parseFloat(document.getElementById('saldo_poli_somObrero').value);
            var traspasos_poli_somObrero = parseFloat(document.getElementById('traspasos_poli_somObrero').value);
            
            if (!isNaN(recibido_poli_somObrero) & !isNaN(traspasos_poli_somObrero)) {
                var nuevo_saldo_poli_somObrero = (saldo + recibido_poli_somObrero - traspasos_poli_somObrero);
            }else{
                if (isNaN(recibido_poli_somObrero)) {
                var nuevo_saldo_poli_somObrero = (saldo - traspasos_poli_somObrero);
                }else{
                     if (isNaN(traspasos_poli_somObrero)) {
                    var nuevo_saldo_poli_somObrero = (saldo + recibido_poli_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_poli_somObrero)) {
                document.getElementById('saldo_poli_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_poli_somObrero').value = nuevo_saldo_poli_somObrero.toFixed(2);
            }

        }
        
      }

      function calculoSaldoClorolb(saldo, numeroSistema){
       
        var saldo = saldo;
        var numeroSistema = numeroSistema;

         //San Juan de los morros
        
        if (numeroSistema == 1) {
            var recibido_clorolb_sanjuan = parseFloat(document.getElementById('recibido_clorolb_sanjuan').value);
            var saldo_clorolb_sanjuan = parseFloat(document.getElementById('saldo_clorolb_sanjuan').value);
            var traspasos_clorolb_sanjuan = parseFloat(document.getElementById('traspasos_clorolb_sanjuan').value);
            
            if (!isNaN(recibido_clorolb_sanjuan) & !isNaN(traspasos_clorolb_sanjuan)) {
                var nuevo_saldo_clorolb_sanjuan = (saldo + recibido_clorolb_sanjuan - traspasos_clorolb_sanjuan);
            }else{
                if (isNaN(recibido_clorolb_sanjuan)) {
                var nuevo_saldo_clorolb_sanjuan = (saldo - traspasos_clorolb_sanjuan);
                }else{
                     if (isNaN(traspasos_clorolb_sanjuan)) {
                    var nuevo_saldo_clorolb_sanjuan = (saldo + recibido_clorolb_sanjuan);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_sanjuan)) {
                document.getElementById('saldo_clorolb_sanjuan').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_sanjuan').value = nuevo_saldo_clorolb_sanjuan.toFixed(2);
            }

            

        }

        //Calabozo
        if (numeroSistema == 2) {
            var recibido_clorolb_clorolbabozo = parseFloat(document.getElementById('recibido_clorolb_clorolbabozo').value);
            var saldo_clorolb_clorolbabozo = parseFloat(document.getElementById('saldo_clorolb_clorolbabozo').value);
            var traspasos_clorolb_clorolbabozo = parseFloat(document.getElementById('traspasos_clorolb_clorolbabozo').value);
            
            if (!isNaN(recibido_clorolb_clorolbabozo) & !isNaN(traspasos_clorolb_clorolbabozo)) {
                var nuevo_saldo_clorolb_clorolbabozo = (saldo + recibido_clorolb_clorolbabozo - traspasos_clorolb_clorolbabozo);
            }else{
                if (isNaN(recibido_clorolb_clorolbabozo)) {
                var nuevo_saldo_clorolb_clorolbabozo = (saldo - traspasos_clorolb_clorolbabozo);
                }else{
                     if (isNaN(traspasos_clorolb_clorolbabozo)) {
                    var nuevo_saldo_clorolb_clorolbabozo = (saldo + recibido_clorolb_clorolbabozo);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_clorolbabozo)) {
                document.getElementById('saldo_clorolb_clorolbabozo').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_clorolbabozo').value = nuevo_saldo_clorolb_clorolbabozo.toFixed(2);
            }

        }

        //altagracia
        if (numeroSistema == 3) {
            var recibido_clorolb_altagracia = parseFloat(document.getElementById('recibido_clorolb_altagracia').value);
            var saldo_clorolb_altagracia = parseFloat(document.getElementById('saldo_clorolb_altagracia').value);
            var traspasos_clorolb_altagracia = parseFloat(document.getElementById('traspasos_clorolb_altagracia').value);
            
            if (!isNaN(recibido_clorolb_altagracia) & !isNaN(traspasos_clorolb_altagracia)) {
                var nuevo_saldo_clorolb_altagracia = (saldo + recibido_clorolb_altagracia - traspasos_clorolb_altagracia);
            }else{
                if (isNaN(recibido_clorolb_altagracia)) {
                var nuevo_saldo_clorolb_altagracia = (saldo - traspasos_clorolb_altagracia);
                }else{
                     if (isNaN(traspasos_clorolb_altagracia)) {
                    var nuevo_saldo_clorolb_altagracia = (saldo + recibido_clorolb_altagracia);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_altagracia)) {
                document.getElementById('saldo_clorolb_altagracia').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_altagracia').value = nuevo_saldo_clorolb_altagracia.toFixed(2);
            }

        }

        //valle
        if (numeroSistema == 4) {
            var recibido_clorolb_valle = parseFloat(document.getElementById('recibido_clorolb_valle').value);
            var saldo_clorolb_valle = parseFloat(document.getElementById('saldo_clorolb_valle').value);
            var traspasos_clorolb_valle = parseFloat(document.getElementById('traspasos_clorolb_valle').value);
            
            if (!isNaN(recibido_clorolb_valle) & !isNaN(traspasos_clorolb_valle)) {
                var nuevo_saldo_clorolb_valle = (saldo + recibido_clorolb_valle - traspasos_clorolb_valle);
            }else{
                if (isNaN(recibido_clorolb_valle)) {
                var nuevo_saldo_clorolb_valle = (saldo - traspasos_clorolb_valle);
                }else{
                     if (isNaN(traspasos_clorolb_valle)) {
                    var nuevo_saldo_clorolb_valle = (saldo + recibido_clorolb_valle);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_valle)) {
                document.getElementById('saldo_clorolb_valle').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_valle').value = nuevo_saldo_clorolb_valle.toFixed(2);
            }

        }

        //tucupido
        if (numeroSistema == 5) {
            var recibido_clorolb_tucupido = parseFloat(document.getElementById('recibido_clorolb_tucupido').value);
            var saldo_clorolb_tucupido = parseFloat(document.getElementById('saldo_clorolb_tucupido').value);
            var traspasos_clorolb_tucupido = parseFloat(document.getElementById('traspasos_clorolb_tucupido').value);
            
            if (!isNaN(recibido_clorolb_tucupido) & !isNaN(traspasos_clorolb_tucupido)) {
                var nuevo_saldo_clorolb_tucupido = (saldo + recibido_clorolb_tucupido - traspasos_clorolb_tucupido);
            }else{
                if (isNaN(recibido_clorolb_tucupido)) {
                var nuevo_saldo_clorolb_tucupido = (saldo - traspasos_clorolb_tucupido);
                }else{
                     if (isNaN(traspasos_clorolb_tucupido)) {
                    var nuevo_saldo_clorolb_tucupido = (saldo + recibido_clorolb_tucupido);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_tucupido)) {
                document.getElementById('saldo_clorolb_tucupido').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_tucupido').value = nuevo_saldo_clorolb_tucupido.toFixed(2);
            }

        }

         //sanjose
        if (numeroSistema == 6) {
            var recibido_clorolb_sanjose = parseFloat(document.getElementById('recibido_clorolb_sanjose').value);
            var saldo_clorolb_sanjose = parseFloat(document.getElementById('saldo_clorolb_sanjose').value);
            var traspasos_clorolb_sanjose = parseFloat(document.getElementById('traspasos_clorolb_sanjose').value);
            
            if (!isNaN(recibido_clorolb_sanjose) & !isNaN(traspasos_clorolb_sanjose)) {
                var nuevo_saldo_clorolb_sanjose = (saldo + recibido_clorolb_sanjose - traspasos_clorolb_sanjose);
            }else{
                if (isNaN(recibido_clorolb_sanjose)) {
                var nuevo_saldo_clorolb_sanjose = (saldo - traspasos_clorolb_sanjose);
                }else{
                     if (isNaN(traspasos_clorolb_sanjose)) {
                    var nuevo_saldo_clorolb_sanjose = (saldo + recibido_clorolb_sanjose);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_sanjose)) {
                document.getElementById('saldo_clorolb_sanjose').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_sanjose').value = nuevo_saldo_clorolb_sanjose.toFixed(2);
            }

        }

        //zaraza
        if (numeroSistema == 7) {
            var recibido_clorolb_zaraza = parseFloat(document.getElementById('recibido_clorolb_zaraza').value);
            var saldo_clorolb_zaraza = parseFloat(document.getElementById('saldo_clorolb_zaraza').value);
            var traspasos_clorolb_zaraza = parseFloat(document.getElementById('traspasos_clorolb_zaraza').value);
            
            if (!isNaN(recibido_clorolb_zaraza) & !isNaN(traspasos_clorolb_zaraza)) {
                var nuevo_saldo_clorolb_zaraza = (saldo + recibido_clorolb_zaraza - traspasos_clorolb_zaraza);
            }else{
                if (isNaN(recibido_clorolb_zaraza)) {
                var nuevo_saldo_clorolb_zaraza = (saldo - traspasos_clorolb_zaraza);
                }else{
                     if (isNaN(traspasos_clorolb_zaraza)) {
                    var nuevo_saldo_clorolb_zaraza = (saldo + recibido_clorolb_zaraza);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_zaraza)) {
                document.getElementById('saldo_clorolb_zaraza').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_zaraza').value = nuevo_saldo_clorolb_zaraza.toFixed(2);
            }

        }

        //socorro
        if (numeroSistema == 8) {
            var recibido_clorolb_socorro = parseFloat(document.getElementById('recibido_clorolb_socorro').value);
            var saldo_clorolb_socorro = parseFloat(document.getElementById('saldo_clorolb_socorro').value);
            var traspasos_clorolb_socorro = parseFloat(document.getElementById('traspasos_clorolb_socorro').value);
            
            if (!isNaN(recibido_clorolb_socorro) & !isNaN(traspasos_clorolb_socorro)) {
                var nuevo_saldo_clorolb_socorro = (saldo + recibido_clorolb_socorro - traspasos_clorolb_socorro);
            }else{
                if (isNaN(recibido_clorolb_socorro)) {
                var nuevo_saldo_clorolb_socorro = (saldo - traspasos_clorolb_socorro);
                }else{
                     if (isNaN(traspasos_clorolb_socorro)) {
                    var nuevo_saldo_clorolb_socorro = (saldo + recibido_clorolb_socorro);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_socorro)) {
                document.getElementById('saldo_clorolb_socorro').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_socorro').value = nuevo_saldo_clorolb_socorro.toFixed(2);
            }

        }

        //santamaria
        if (numeroSistema == 9) {
            var recibido_clorolb_santamaria = parseFloat(document.getElementById('recibido_clorolb_santamaria').value);
            var saldo_clorolb_santamaria = parseFloat(document.getElementById('saldo_clorolb_santamaria').value);
            var traspasos_clorolb_santamaria = parseFloat(document.getElementById('traspasos_clorolb_santamaria').value);
            
            if (!isNaN(recibido_clorolb_santamaria) & !isNaN(traspasos_clorolb_santamaria)) {
                var nuevo_saldo_clorolb_santamaria = (saldo + recibido_clorolb_santamaria - traspasos_clorolb_santamaria);
            }else{
                if (isNaN(recibido_clorolb_santamaria)) {
                var nuevo_saldo_clorolb_santamaria = (saldo - traspasos_clorolb_santamaria);
                }else{
                     if (isNaN(traspasos_clorolb_santamaria)) {
                    var nuevo_saldo_clorolb_santamaria = (saldo + recibido_clorolb_santamaria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_santamaria)) {
                document.getElementById('saldo_clorolb_santamaria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_santamaria').value = nuevo_saldo_clorolb_santamaria.toFixed(2);
            }

        }

        //espino
        if (numeroSistema == 10) {
            var recibido_clorolb_espino = parseFloat(document.getElementById('recibido_clorolb_espino').value);
            var saldo_clorolb_espino = parseFloat(document.getElementById('saldo_clorolb_espino').value);
            var traspasos_clorolb_espino = parseFloat(document.getElementById('traspasos_clorolb_espino').value);
            
            if (!isNaN(recibido_clorolb_espino) & !isNaN(traspasos_clorolb_espino)) {
                var nuevo_saldo_clorolb_espino = (saldo + recibido_clorolb_espino - traspasos_clorolb_espino);
            }else{
                if (isNaN(recibido_clorolb_espino)) {
                var nuevo_saldo_clorolb_espino = (saldo - traspasos_clorolb_espino);
                }else{
                     if (isNaN(traspasos_clorolb_espino)) {
                    var nuevo_saldo_clorolb_espino = (saldo + recibido_clorolb_espino);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_espino)) {
                document.getElementById('saldo_clorolb_espino').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_espino').value = nuevo_saldo_clorolb_espino.toFixed(2);
            }

        }

        //guardatinajas
        if (numeroSistema == 11) {
            var recibido_clorolb_guardatinajas = parseFloat(document.getElementById('recibido_clorolb_guardatinajas').value);
            var saldo_clorolb_guardatinajas = parseFloat(document.getElementById('saldo_clorolb_guardatinajas').value);
            var traspasos_clorolb_guardatinajas = parseFloat(document.getElementById('traspasos_clorolb_guardatinajas').value);
            
            if (!isNaN(recibido_clorolb_guardatinajas) & !isNaN(traspasos_clorolb_guardatinajas)) {
                var nuevo_saldo_clorolb_guardatinajas = (saldo + recibido_clorolb_guardatinajas - traspasos_clorolb_guardatinajas);
            }else{
                if (isNaN(recibido_clorolb_guardatinajas)) {
                var nuevo_saldo_clorolb_guardatinajas = (saldo - traspasos_clorolb_guardatinajas);
                }else{
                     if (isNaN(traspasos_clorolb_guardatinajas)) {
                    var nuevo_saldo_clorolb_guardatinajas = (saldo + recibido_clorolb_guardatinajas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_guardatinajas)) {
                document.getElementById('saldo_clorolb_guardatinajas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_guardatinajas').value = nuevo_saldo_clorolb_guardatinajas.toFixed(2);
            }

        }

        //sanrafael
        if (numeroSistema == 12) {
            var recibido_clorolb_sanrafael = parseFloat(document.getElementById('recibido_clorolb_sanrafael').value);
            var saldo_clorolb_sanrafael = parseFloat(document.getElementById('saldo_clorolb_sanrafael').value);
            var traspasos_clorolb_sanrafael = parseFloat(document.getElementById('traspasos_clorolb_sanrafael').value);
            
            if (!isNaN(recibido_clorolb_sanrafael) & !isNaN(traspasos_clorolb_sanrafael)) {
                var nuevo_saldo_clorolb_sanrafael = (saldo + recibido_clorolb_sanrafael - traspasos_clorolb_sanrafael);
            }else{
                if (isNaN(recibido_clorolb_sanrafael)) {
                var nuevo_saldo_clorolb_sanrafael = (saldo - traspasos_clorolb_sanrafael);
                }else{
                     if (isNaN(traspasos_clorolb_sanrafael)) {
                    var nuevo_saldo_clorolb_sanrafael = (saldo + recibido_clorolb_sanrafael);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_sanrafael)) {
                document.getElementById('saldo_clorolb_sanrafael').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_sanrafael').value = nuevo_saldo_clorolb_sanrafael.toFixed(2);
            }

        }

        //chaguaramas
        if (numeroSistema == 13) {
            var recibido_clorolb_chaguaramas = parseFloat(document.getElementById('recibido_clorolb_chaguaramas').value);
            var saldo_clorolb_chaguaramas = parseFloat(document.getElementById('saldo_clorolb_chaguaramas').value);
            var traspasos_clorolb_chaguaramas = parseFloat(document.getElementById('traspasos_clorolb_chaguaramas').value);
            
            if (!isNaN(recibido_clorolb_chaguaramas) & !isNaN(traspasos_clorolb_chaguaramas)) {
                var nuevo_saldo_clorolb_chaguaramas = (saldo + recibido_clorolb_chaguaramas - traspasos_clorolb_chaguaramas);
            }else{
                if (isNaN(recibido_clorolb_chaguaramas)) {
                var nuevo_saldo_clorolb_chaguaramas = (saldo - traspasos_clorolb_chaguaramas);
                }else{
                     if (isNaN(traspasos_clorolb_chaguaramas)) {
                    var nuevo_saldo_clorolb_chaguaramas = (saldo + recibido_clorolb_chaguaramas);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_chaguaramas)) {
                document.getElementById('saldo_clorolb_chaguaramas').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_chaguaramas').value = nuevo_saldo_clorolb_chaguaramas.toFixed(2);
            }

        }

        //somGaleria
        if (numeroSistema == 14) {
            var recibido_clorolb_somGaleria = parseFloat(document.getElementById('recibido_clorolb_somGaleria').value);
            var saldo_clorolb_somGaleria = parseFloat(document.getElementById('saldo_clorolb_somGaleria').value);
            var traspasos_clorolb_somGaleria = parseFloat(document.getElementById('traspasos_clorolb_somGaleria').value);
            
            if (!isNaN(recibido_clorolb_somGaleria) & !isNaN(traspasos_clorolb_somGaleria)) {
                var nuevo_saldo_clorolb_somGaleria = (saldo + recibido_clorolb_somGaleria - traspasos_clorolb_somGaleria);
            }else{
                if (isNaN(recibido_clorolb_somGaleria)) {
                var nuevo_saldo_clorolb_somGaleria = (saldo - traspasos_clorolb_somGaleria);
                }else{
                     if (isNaN(traspasos_clorolb_somGaleria)) {
                    var nuevo_saldo_clorolb_somGaleria = (saldo + recibido_clorolb_somGaleria);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_somGaleria)) {
                document.getElementById('saldo_clorolb_somGaleria').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_somGaleria').value = nuevo_saldo_clorolb_somGaleria.toFixed(2);
            }

        }

        //somObrero
        if (numeroSistema == 15) {
            var recibido_clorolb_somObrero = parseFloat(document.getElementById('recibido_clorolb_somObrero').value);
            var saldo_clorolb_somObrero = parseFloat(document.getElementById('saldo_clorolb_somObrero').value);
            var traspasos_clorolb_somObrero = parseFloat(document.getElementById('traspasos_clorolb_somObrero').value);
            
            if (!isNaN(recibido_clorolb_somObrero) & !isNaN(traspasos_clorolb_somObrero)) {
                var nuevo_saldo_clorolb_somObrero = (saldo + recibido_clorolb_somObrero - traspasos_clorolb_somObrero);
            }else{
                if (isNaN(recibido_clorolb_somObrero)) {
                var nuevo_saldo_clorolb_somObrero = (saldo - traspasos_clorolb_somObrero);
                }else{
                     if (isNaN(traspasos_clorolb_somObrero)) {
                    var nuevo_saldo_clorolb_somObrero = (saldo + recibido_clorolb_somObrero);
                    }      
                }
            }

            if (isNaN(nuevo_saldo_clorolb_somObrero)) {
                document.getElementById('saldo_clorolb_somObrero').value = saldo.toFixed(2);
            }else{
                document.getElementById('saldo_clorolb_somObrero').value = nuevo_saldo_clorolb_somObrero.toFixed(2);
            }

        }
        
      }

      function calculoSanJuan(){

        //inicio de lo calculos de san juan
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_sanjuan =  document.getElementById('consumo_gascloro_sanjuan').value;
          var ht_sanjuan = document.getElementById('ht_sanjuan').value;

          var aplicacion_gascloro_sanjuan = parseFloat(consumo_gascloro_sanjuan/ht_sanjuan);
          document.getElementById('aplicacion_gascloro_sanjuan').value = aplicacion_gascloro_sanjuan.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_sanjuan = document.getElementById('consumo_sulfato_sanjuan').value;
         var aplicacion_sulfato_sanjuan = parseFloat(consumo_sulfato_sanjuan/ht_sanjuan);

         document.getElementById('aplicacion_sulfato_sanjuan').value = aplicacion_sulfato_sanjuan.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_sanjuan = document.getElementById('consumo_cal_sanjuan').value;
         var aplicacion_cal_sanjuan = parseFloat(consumo_cal_sanjuan/ht_sanjuan);

         document.getElementById('aplicacion_cal_sanjuan').value = aplicacion_cal_sanjuan.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_sanjuan = document.getElementById('consumo_hipoclorito_sanjuan').value;
         var aplicacion_hipoclorito_sanjuan = parseFloat(consumo_hipoclorito_sanjuan/ht_sanjuan);

         document.getElementById('aplicacion_hipoclorito_sanjuan').value = aplicacion_hipoclorito_sanjuan.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_sanjuan = document.getElementById('consumo_poli_sanjuan').value;
         var aplicacion_poli_sanjuan = parseFloat(consumo_poli_sanjuan/ht_sanjuan);

         document.getElementById('aplicacion_poli_sanjuan').value = aplicacion_poli_sanjuan.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_sanjuan').value;
          document.getElementById('aplicacion_clorolb_sanjuan').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_sanjuan = document.getElementById('saldo_gascloro_sanjuan').value;
         if (consumo_gascloro_sanjuan==0) {

            var duracion_gascloro_sanjuan = 0.00;
         }else{
          var duracion_gascloro_sanjuan = parseFloat(saldo_gascloro_sanjuan/consumo_gascloro_sanjuan);
         }
         
        
         document.getElementById('duracion_gascloro_sanjuan').value = duracion_gascloro_sanjuan.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_sanjuan = document.getElementById('saldo_sulfato_sanjuan').value;
         if (consumo_sulfato_sanjuan==0) {

            var duracion_sulfato_sanjuan = 0.00;
         }else{
          var duracion_sulfato_sanjuan = parseFloat(saldo_sulfato_sanjuan/consumo_sulfato_sanjuan);
         }
       
         document.getElementById('duracion_sulfato_sanjuan').value = duracion_sulfato_sanjuan.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_sanjuan = document.getElementById('saldo_cal_sanjuan').value;
         if (consumo_cal_sanjuan==0) {

            var duracion_cal_sanjuan = 0.00;
         }else{
          var duracion_cal_sanjuan = parseFloat(saldo_cal_sanjuan/consumo_cal_sanjuan);
         }
       
         document.getElementById('duracion_cal_sanjuan').value = duracion_cal_sanjuan.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_sanjuan = document.getElementById('saldo_hipoclorito_sanjuan').value;
         if (consumo_hipoclorito_sanjuan==0) {

            var duracion_hipoclorito_sanjuan = 0.00;
         }else{
          var duracion_hipoclorito_sanjuan = parseFloat(saldo_hipoclorito_sanjuan/consumo_hipoclorito_sanjuan);
         }
       
         document.getElementById('duracion_hipoclorito_sanjuan').value = duracion_hipoclorito_sanjuan.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_sanjuan = document.getElementById('saldo_poli_sanjuan').value;
         if (consumo_poli_sanjuan==0) {

            var duracion_poli_sanjuan = 0.00;
         }else{
          var duracion_poli_sanjuan = parseFloat(saldo_poli_sanjuan/consumo_poli_sanjuan);
         }
       
         document.getElementById('duracion_poli_sanjuan').value = duracion_poli_sanjuan.toFixed(1);

          //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_sanjuan = document.getElementById('consumo_clorolb_sanjuan').value; 
         var saldo_clorolb_sanjuan = document.getElementById('saldo_clorolb_sanjuan').value;
         if (consumo_clorolb_sanjuan==0) {

            var duracion_clorolb_sanjuan = 0.00;
         }else{
          var duracion_clorolb_sanjuan = parseFloat(saldo_clorolb_sanjuan/consumo_clorolb_sanjuan);
         }
       
         document.getElementById('duracion_clorolb_sanjuan').value = duracion_clorolb_sanjuan.toFixed(1);

            
        
        
    //fin de los calculos de San Juan       

    //inicio de lo calculos de Calabozo
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_calabozo =  document.getElementById('consumo_gascloro_calabozo').value;
          var ht_calabozo = document.getElementById('ht_calabozo').value;

          var aplicacion_gascloro_calabozo = parseFloat(consumo_gascloro_calabozo/ht_calabozo);
          document.getElementById('aplicacion_gascloro_calabozo').value = aplicacion_gascloro_calabozo.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_calabozo = document.getElementById('consumo_sulfato_calabozo').value;
         var aplicacion_sulfato_calabozo = parseFloat(consumo_sulfato_calabozo/ht_calabozo);

         document.getElementById('aplicacion_sulfato_calabozo').value = aplicacion_sulfato_calabozo.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_calabozo = document.getElementById('consumo_cal_calabozo').value;
         var aplicacion_cal_calabozo = parseFloat(consumo_cal_calabozo/ht_calabozo);

         document.getElementById('aplicacion_cal_calabozo').value = aplicacion_cal_calabozo.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_calabozo = document.getElementById('consumo_hipoclorito_calabozo').value;
         var aplicacion_hipoclorito_calabozo = parseFloat(consumo_hipoclorito_calabozo/ht_calabozo);

         document.getElementById('aplicacion_hipoclorito_calabozo').value = aplicacion_hipoclorito_calabozo.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_calabozo = document.getElementById('consumo_poli_calabozo').value;
         var aplicacion_poli_calabozo = parseFloat(consumo_poli_calabozo/ht_calabozo);

         document.getElementById('aplicacion_poli_calabozo').value = aplicacion_poli_calabozo.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_calabozo').value;
          document.getElementById('aplicacion_clorolb_calabozo').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_calabozo = document.getElementById('saldo_gascloro_calabozo').value;
         if (consumo_gascloro_calabozo==0) {

            var duracion_gascloro_calabozo = 0.00;
         }else{
          var duracion_gascloro_calabozo = parseFloat(saldo_gascloro_calabozo/consumo_gascloro_calabozo);
         }
         
        
         document.getElementById('duracion_gascloro_calabozo').value = duracion_gascloro_calabozo.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_calabozo = document.getElementById('saldo_sulfato_calabozo').value;
         if (consumo_sulfato_calabozo==0) {

            var duracion_sulfato_calabozo = 0.00;
         }else{
          var duracion_sulfato_calabozo = parseFloat(saldo_sulfato_calabozo/consumo_sulfato_calabozo);
         }
       
         document.getElementById('duracion_sulfato_calabozo').value = duracion_sulfato_calabozo.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_calabozo = document.getElementById('saldo_cal_calabozo').value;
         if (consumo_cal_calabozo==0) {

            var duracion_cal_calabozo = 0.00;
         }else{
          var duracion_cal_calabozo = parseFloat(saldo_cal_calabozo/consumo_cal_calabozo);
         }
       
         document.getElementById('duracion_cal_calabozo').value = duracion_cal_calabozo.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_calabozo = document.getElementById('saldo_hipoclorito_calabozo').value;
         if (consumo_hipoclorito_calabozo==0) {

            var duracion_hipoclorito_calabozo = 0.00;
         }else{
          var duracion_hipoclorito_calabozo = parseFloat(saldo_hipoclorito_calabozo/consumo_hipoclorito_calabozo);
         }
       
         document.getElementById('duracion_hipoclorito_calabozo').value = duracion_hipoclorito_calabozo.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_calabozo = document.getElementById('saldo_poli_calabozo').value;
         if (consumo_poli_calabozo==0) {

            var duracion_poli_calabozo = 0.00;
         }else{
          var duracion_poli_calabozo = parseFloat(saldo_poli_calabozo/consumo_poli_calabozo);
         }
       
         document.getElementById('duracion_poli_calabozo').value = duracion_poli_calabozo.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_calabozo = document.getElementById('consumo_clorolb_calabozo').value; 
         var saldo_clorolb_calabozo = document.getElementById('saldo_clorolb_calabozo').value;
         if (consumo_clorolb_calabozo==0) {

            var duracion_clorolb_calabozo = 0.00;
         }else{
          var duracion_clorolb_calabozo = parseFloat(saldo_clorolb_calabozo/consumo_clorolb_calabozo);
         }
       
         document.getElementById('duracion_clorolb_calabozo').value = duracion_clorolb_calabozo.toFixed(1);

       

    //fin de los calculos de Calabozo      

    //inicio de lo calculos de Altagracia
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_altagracia =  document.getElementById('consumo_gascloro_altagracia').value;
          var ht_altagracia = document.getElementById('ht_altagracia').value;

          var aplicacion_gascloro_altagracia = parseFloat(consumo_gascloro_altagracia/ht_altagracia);
          document.getElementById('aplicacion_gascloro_altagracia').value = aplicacion_gascloro_altagracia.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_altagracia = document.getElementById('consumo_sulfato_altagracia').value;
         var aplicacion_sulfato_altagracia = parseFloat(consumo_sulfato_altagracia/ht_altagracia);

         document.getElementById('aplicacion_sulfato_altagracia').value = aplicacion_sulfato_altagracia.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_altagracia = document.getElementById('consumo_cal_altagracia').value;
         var aplicacion_cal_altagracia = parseFloat(consumo_cal_altagracia/ht_altagracia);

         document.getElementById('aplicacion_cal_altagracia').value = aplicacion_cal_altagracia.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_altagracia = document.getElementById('consumo_hipoclorito_altagracia').value;
         var aplicacion_hipoclorito_altagracia = parseFloat(consumo_hipoclorito_altagracia/ht_altagracia);

         document.getElementById('aplicacion_hipoclorito_altagracia').value = aplicacion_hipoclorito_altagracia.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_altagracia = document.getElementById('consumo_poli_altagracia').value;
         var aplicacion_poli_altagracia = parseFloat(consumo_poli_altagracia/ht_altagracia);

         document.getElementById('aplicacion_poli_altagracia').value = aplicacion_poli_altagracia.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_altagracia').value;
          document.getElementById('aplicacion_clorolb_altagracia').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_altagracia = document.getElementById('saldo_gascloro_altagracia').value;
         if (consumo_gascloro_altagracia==0) {

            var duracion_gascloro_altagracia = 0.00;
         }else{
          var duracion_gascloro_altagracia = parseFloat(saldo_gascloro_altagracia/consumo_gascloro_altagracia);
         }
         
        
         document.getElementById('duracion_gascloro_altagracia').value = duracion_gascloro_altagracia.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_altagracia = document.getElementById('saldo_sulfato_altagracia').value;
         if (consumo_sulfato_altagracia==0) {

            var duracion_sulfato_altagracia = 0.00;
         }else{
          var duracion_sulfato_altagracia = parseFloat(saldo_sulfato_altagracia/consumo_sulfato_altagracia);
         }
       
         document.getElementById('duracion_sulfato_altagracia').value = duracion_sulfato_altagracia.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_altagracia = document.getElementById('saldo_cal_altagracia').value;
         if (consumo_cal_altagracia==0) {

            var duracion_cal_altagracia = 0.00;
         }else{
          var duracion_cal_altagracia = parseFloat(saldo_cal_altagracia/consumo_cal_altagracia);
         }
       
         document.getElementById('duracion_cal_altagracia').value = duracion_cal_altagracia.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_altagracia = document.getElementById('saldo_hipoclorito_altagracia').value;
         if (consumo_hipoclorito_altagracia==0) {

            var duracion_hipoclorito_altagracia = 0.00;
         }else{
          var duracion_hipoclorito_altagracia = parseFloat(saldo_hipoclorito_altagracia/consumo_hipoclorito_altagracia);
         }
       
         document.getElementById('duracion_hipoclorito_altagracia').value = duracion_hipoclorito_altagracia.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_altagracia = document.getElementById('saldo_poli_altagracia').value;
         if (consumo_poli_altagracia==0) {

            var duracion_poli_altagracia = 0.00;
         }else{
          var duracion_poli_altagracia = parseFloat(saldo_poli_altagracia/consumo_poli_altagracia);
         }
       
         document.getElementById('duracion_poli_altagracia').value = duracion_poli_altagracia.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_altagracia = document.getElementById('consumo_clorolb_altagracia').value; 
         var saldo_clorolb_altagracia = document.getElementById('saldo_clorolb_altagracia').value;
         if (consumo_clorolb_altagracia==0) {

            var duracion_clorolb_altagracia = 0.00;
         }else{
          var duracion_clorolb_altagracia = parseFloat(saldo_clorolb_altagracia/consumo_clorolb_altagracia);
         }
       
         document.getElementById('duracion_clorolb_altagracia').value = duracion_clorolb_altagracia.toFixed(1);

       

    //fin de los calculos de Altagracia
       
       //inicio de lo calculos de Valle de la Pascua
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_valle =  document.getElementById('consumo_gascloro_valle').value;
          var ht_valle = document.getElementById('ht_valle').value;

          var aplicacion_gascloro_valle = parseFloat(consumo_gascloro_valle/ht_valle);
          document.getElementById('aplicacion_gascloro_valle').value = aplicacion_gascloro_valle.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_valle = document.getElementById('consumo_sulfato_valle').value;
         var aplicacion_sulfato_valle = parseFloat(consumo_sulfato_valle/ht_valle);

         document.getElementById('aplicacion_sulfato_valle').value = aplicacion_sulfato_valle.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_valle = document.getElementById('consumo_cal_valle').value;
         var aplicacion_cal_valle = parseFloat(consumo_cal_valle/ht_valle);

         document.getElementById('aplicacion_cal_valle').value = aplicacion_cal_valle.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_valle = document.getElementById('consumo_hipoclorito_valle').value;
         var aplicacion_hipoclorito_valle = parseFloat(consumo_hipoclorito_valle/ht_valle);

         document.getElementById('aplicacion_hipoclorito_valle').value = aplicacion_hipoclorito_valle.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_valle = document.getElementById('consumo_poli_valle').value;
         var aplicacion_poli_valle = parseFloat(consumo_poli_valle/ht_valle);

         document.getElementById('aplicacion_poli_valle').value = aplicacion_poli_valle.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_valle').value;
          document.getElementById('aplicacion_clorolb_valle').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_valle = document.getElementById('saldo_gascloro_valle').value;
         if (consumo_gascloro_valle==0) {

            var duracion_gascloro_valle = 0.00;
         }else{
          var duracion_gascloro_valle = parseFloat(saldo_gascloro_valle/consumo_gascloro_valle);
         }
         
        
         document.getElementById('duracion_gascloro_valle').value = duracion_gascloro_valle.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_valle = document.getElementById('saldo_sulfato_valle').value;
         if (consumo_sulfato_valle==0) {

            var duracion_sulfato_valle = 0.00;
         }else{
          var duracion_sulfato_valle = parseFloat(saldo_sulfato_valle/consumo_sulfato_valle);
         }
       
         document.getElementById('duracion_sulfato_valle').value = duracion_sulfato_valle.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_valle = document.getElementById('saldo_cal_valle').value;
         if (consumo_cal_valle==0) {

            var duracion_cal_valle = 0.00;
         }else{
          var duracion_cal_valle = parseFloat(saldo_cal_valle/consumo_cal_valle);
         }
       
         document.getElementById('duracion_cal_valle').value = duracion_cal_valle.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_valle = document.getElementById('saldo_hipoclorito_valle').value;
         if (consumo_hipoclorito_valle==0) {

            var duracion_hipoclorito_valle = 0.00;
         }else{
          var duracion_hipoclorito_valle = parseFloat(saldo_hipoclorito_valle/consumo_hipoclorito_valle);
         }
       
         document.getElementById('duracion_hipoclorito_valle').value = duracion_hipoclorito_valle.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_valle = document.getElementById('saldo_poli_valle').value;
         if (consumo_poli_valle==0) {

            var duracion_poli_valle = 0.00;
         }else{
          var duracion_poli_valle = parseFloat(saldo_poli_valle/consumo_poli_valle);
         }
       
         document.getElementById('duracion_poli_valle').value = duracion_poli_valle.toFixed(1);

          //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_valle = document.getElementById('consumo_clorolb_valle').value; 
         var saldo_clorolb_valle = document.getElementById('saldo_clorolb_valle').value;
         if (consumo_clorolb_valle==0) {

            var duracion_clorolb_valle = 0.00;
         }else{
          var duracion_clorolb_valle = parseFloat(saldo_clorolb_valle/consumo_clorolb_valle);
         }
       
         document.getElementById('duracion_clorolb_valle').value = duracion_clorolb_valle.toFixed(1);

       

    //fin de los calculos de Valle de la Pascua

    //inicio de lo calculos de Tucupido
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_tucupido =  document.getElementById('consumo_gascloro_tucupido').value;
          var ht_tucupido = document.getElementById('ht_tucupido').value;

          var aplicacion_gascloro_tucupido = parseFloat(consumo_gascloro_tucupido/ht_tucupido);
          document.getElementById('aplicacion_gascloro_tucupido').value = aplicacion_gascloro_tucupido.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_tucupido = document.getElementById('consumo_sulfato_tucupido').value;
         var aplicacion_sulfato_tucupido = parseFloat(consumo_sulfato_tucupido/ht_tucupido);

         document.getElementById('aplicacion_sulfato_tucupido').value = aplicacion_sulfato_tucupido.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_tucupido = document.getElementById('consumo_cal_tucupido').value;
         var aplicacion_cal_tucupido = parseFloat(consumo_cal_tucupido/ht_tucupido);

         document.getElementById('aplicacion_cal_tucupido').value = aplicacion_cal_tucupido.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_tucupido = document.getElementById('consumo_hipoclorito_tucupido').value;
         var aplicacion_hipoclorito_tucupido = parseFloat(consumo_hipoclorito_tucupido/ht_tucupido);

         document.getElementById('aplicacion_hipoclorito_tucupido').value = aplicacion_hipoclorito_tucupido.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_tucupido = document.getElementById('consumo_poli_tucupido').value;
         var aplicacion_poli_tucupido = parseFloat(consumo_poli_tucupido/ht_tucupido);

         document.getElementById('aplicacion_poli_tucupido').value = aplicacion_poli_tucupido.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_tucupido').value;
          document.getElementById('aplicacion_clorolb_tucupido').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_tucupido = document.getElementById('saldo_gascloro_tucupido').value;
         if (consumo_gascloro_tucupido==0) {

            var duracion_gascloro_tucupido = 0.00;
         }else{
          var duracion_gascloro_tucupido = parseFloat(saldo_gascloro_tucupido/consumo_gascloro_tucupido);
         }
         
        
         document.getElementById('duracion_gascloro_tucupido').value = duracion_gascloro_tucupido.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_tucupido = document.getElementById('saldo_sulfato_tucupido').value;
         if (consumo_sulfato_tucupido==0) {

            var duracion_sulfato_tucupido = 0.00;
         }else{
          var duracion_sulfato_tucupido = parseFloat(saldo_sulfato_tucupido/consumo_sulfato_tucupido);
         }
       
         document.getElementById('duracion_sulfato_tucupido').value = duracion_sulfato_tucupido.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_tucupido = document.getElementById('saldo_cal_tucupido').value;
         if (consumo_cal_tucupido==0) {

            var duracion_cal_tucupido = 0.00;
         }else{
          var duracion_cal_tucupido = parseFloat(saldo_cal_tucupido/consumo_cal_tucupido);
         }
       
         document.getElementById('duracion_cal_tucupido').value = duracion_cal_tucupido.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_tucupido = document.getElementById('saldo_hipoclorito_tucupido').value;
         if (consumo_hipoclorito_tucupido==0) {

            var duracion_hipoclorito_tucupido = 0.00;
         }else{
          var duracion_hipoclorito_tucupido = parseFloat(saldo_hipoclorito_tucupido/consumo_hipoclorito_tucupido);
         }
       
         document.getElementById('duracion_hipoclorito_tucupido').value = duracion_hipoclorito_tucupido.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_tucupido = document.getElementById('saldo_poli_tucupido').value;
         if (consumo_poli_tucupido==0) {

            var duracion_poli_tucupido = 0.00;
         }else{
          var duracion_poli_tucupido = parseFloat(saldo_poli_tucupido/consumo_poli_tucupido);
         }
       
         document.getElementById('duracion_poli_tucupido').value = duracion_poli_tucupido.toFixed(1);

          //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_tucupido = document.getElementById('consumo_clorolb_tucupido').value; 
         var saldo_clorolb_tucupido = document.getElementById('saldo_clorolb_tucupido').value;
         if (consumo_clorolb_tucupido==0) {

            var duracion_clorolb_tucupido = 0.00;
         }else{
          var duracion_clorolb_tucupido = parseFloat(saldo_clorolb_tucupido/consumo_clorolb_tucupido);
         }
       
         document.getElementById('duracion_clorolb_tucupido').value = duracion_clorolb_tucupido.toFixed(1);

    //fin de los calculos de Tucupido

    //inicio de lo calculos de San Jose de Guaribe
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_sanjose =  document.getElementById('consumo_gascloro_sanjose').value;
          var ht_sanjose = document.getElementById('ht_sanjose').value;

          var aplicacion_gascloro_sanjose = parseFloat(consumo_gascloro_sanjose/ht_sanjose);
          document.getElementById('aplicacion_gascloro_sanjose').value = aplicacion_gascloro_sanjose.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_sanjose = document.getElementById('consumo_sulfato_sanjose').value;
         var aplicacion_sulfato_sanjose = parseFloat(consumo_sulfato_sanjose/ht_sanjose);

         document.getElementById('aplicacion_sulfato_sanjose').value = aplicacion_sulfato_sanjose.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_sanjose = document.getElementById('consumo_cal_sanjose').value;
         var aplicacion_cal_sanjose = parseFloat(consumo_cal_sanjose/ht_sanjose);

         document.getElementById('aplicacion_cal_sanjose').value = aplicacion_cal_sanjose.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_sanjose = document.getElementById('consumo_hipoclorito_sanjose').value;
         var aplicacion_hipoclorito_sanjose = parseFloat(consumo_hipoclorito_sanjose/ht_sanjose);

         document.getElementById('aplicacion_hipoclorito_sanjose').value = aplicacion_hipoclorito_sanjose.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_sanjose = document.getElementById('consumo_poli_sanjose').value;
         var aplicacion_poli_sanjose = parseFloat(consumo_poli_sanjose/ht_sanjose);

         document.getElementById('aplicacion_poli_sanjose').value = aplicacion_poli_sanjose.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_sanjose').value;
          document.getElementById('aplicacion_clorolb_sanjose').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_sanjose = document.getElementById('saldo_gascloro_sanjose').value;
         if (consumo_gascloro_sanjose==0) {

            var duracion_gascloro_sanjose = 0.00;
         }else{
          var duracion_gascloro_sanjose = parseFloat(saldo_gascloro_sanjose/consumo_gascloro_sanjose);
         }
         
        
         document.getElementById('duracion_gascloro_sanjose').value = duracion_gascloro_sanjose.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_sanjose = document.getElementById('saldo_sulfato_sanjose').value;
         if (consumo_sulfato_sanjose==0) {

            var duracion_sulfato_sanjose = 0.00;
         }else{
          var duracion_sulfato_sanjose = parseFloat(saldo_sulfato_sanjose/consumo_sulfato_sanjose);
         }
       
         document.getElementById('duracion_sulfato_sanjose').value = duracion_sulfato_sanjose.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_sanjose = document.getElementById('saldo_cal_sanjose').value;
         if (consumo_cal_sanjose==0) {

            var duracion_cal_sanjose = 0.00;
         }else{
          var duracion_cal_sanjose = parseFloat(saldo_cal_sanjose/consumo_cal_sanjose);
         }
       
         document.getElementById('duracion_cal_sanjose').value = duracion_cal_sanjose.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_sanjose = document.getElementById('saldo_hipoclorito_sanjose').value;
         if (consumo_hipoclorito_sanjose==0) {

            var duracion_hipoclorito_sanjose = 0.00;
         }else{
          var duracion_hipoclorito_sanjose = parseFloat(saldo_hipoclorito_sanjose/consumo_hipoclorito_sanjose);
         }
       
         document.getElementById('duracion_hipoclorito_sanjose').value = duracion_hipoclorito_sanjose.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_sanjose = document.getElementById('saldo_poli_sanjose').value;
         if (consumo_poli_sanjose==0) {

            var duracion_poli_sanjose = 0.00;
         }else{
          var duracion_poli_sanjose = parseFloat(saldo_poli_sanjose/consumo_poli_sanjose);
         }
       
         document.getElementById('duracion_poli_sanjose').value = duracion_poli_sanjose.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_sanjose = document.getElementById('consumo_clorolb_sanjose').value; 
         var saldo_clorolb_sanjose = document.getElementById('saldo_clorolb_sanjose').value;
         if (consumo_clorolb_sanjose==0) {

            var duracion_clorolb_sanjose = 0.00;
         }else{
          var duracion_clorolb_sanjose = parseFloat(saldo_clorolb_sanjose/consumo_clorolb_sanjose);
         }
       
         document.getElementById('duracion_clorolb_sanjose').value = duracion_clorolb_sanjose.toFixed(1);

    //fin de los calculos de San Jose de Guaribe
         
          //inicio de lo calculos de Zaraza
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_zaraza =  document.getElementById('consumo_gascloro_zaraza').value;
          var ht_zaraza = document.getElementById('ht_zaraza').value;

          var aplicacion_gascloro_zaraza = parseFloat(consumo_gascloro_zaraza/ht_zaraza);
          document.getElementById('aplicacion_gascloro_zaraza').value = aplicacion_gascloro_zaraza.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_zaraza = document.getElementById('consumo_sulfato_zaraza').value;
         var aplicacion_sulfato_zaraza = parseFloat(consumo_sulfato_zaraza/ht_zaraza);

         document.getElementById('aplicacion_sulfato_zaraza').value = aplicacion_sulfato_zaraza.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_zaraza = document.getElementById('consumo_cal_zaraza').value;
         var aplicacion_cal_zaraza = parseFloat(consumo_cal_zaraza/ht_zaraza);

         document.getElementById('aplicacion_cal_zaraza').value = aplicacion_cal_zaraza.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_zaraza = document.getElementById('consumo_hipoclorito_zaraza').value;
         var aplicacion_hipoclorito_zaraza = parseFloat(consumo_hipoclorito_zaraza/ht_zaraza);

         document.getElementById('aplicacion_hipoclorito_zaraza').value = aplicacion_hipoclorito_zaraza.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_zaraza = document.getElementById('consumo_poli_zaraza').value;
         var aplicacion_poli_zaraza = parseFloat(consumo_poli_zaraza/ht_zaraza);

         document.getElementById('aplicacion_poli_zaraza').value = aplicacion_poli_zaraza.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_zaraza').value;
          document.getElementById('aplicacion_clorolb_zaraza').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_zaraza = document.getElementById('saldo_gascloro_zaraza').value;
         if (consumo_gascloro_zaraza==0) {

            var duracion_gascloro_zaraza = 0.00;
         }else{
          var duracion_gascloro_zaraza = parseFloat(saldo_gascloro_zaraza/consumo_gascloro_zaraza);
         }
         
        
         document.getElementById('duracion_gascloro_zaraza').value = duracion_gascloro_zaraza.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_zaraza = document.getElementById('saldo_sulfato_zaraza').value;
         if (consumo_sulfato_zaraza==0) {

            var duracion_sulfato_zaraza = 0.00;
         }else{
          var duracion_sulfato_zaraza = parseFloat(saldo_sulfato_zaraza/consumo_sulfato_zaraza);
         }
       
         document.getElementById('duracion_sulfato_zaraza').value = duracion_sulfato_zaraza.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_zaraza = document.getElementById('saldo_cal_zaraza').value;
         if (consumo_cal_zaraza==0) {

            var duracion_cal_zaraza = 0.00;
         }else{
          var duracion_cal_zaraza = parseFloat(saldo_cal_zaraza/consumo_cal_zaraza);
         }
       
         document.getElementById('duracion_cal_zaraza').value = duracion_cal_zaraza.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_zaraza = document.getElementById('saldo_hipoclorito_zaraza').value;
         if (consumo_hipoclorito_zaraza==0) {

            var duracion_hipoclorito_zaraza = 0.00;
         }else{
          var duracion_hipoclorito_zaraza = parseFloat(saldo_hipoclorito_zaraza/consumo_hipoclorito_zaraza);
         }
       
         document.getElementById('duracion_hipoclorito_zaraza').value = duracion_hipoclorito_zaraza.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_zaraza = document.getElementById('saldo_poli_zaraza').value;
         if (consumo_poli_zaraza==0) {

            var duracion_poli_zaraza = 0.00;
         }else{
          var duracion_poli_zaraza = parseFloat(saldo_poli_zaraza/consumo_poli_zaraza);
         }
       
         document.getElementById('duracion_poli_zaraza').value = duracion_poli_zaraza.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_zaraza = document.getElementById('consumo_clorolb_zaraza').value; 
         var saldo_clorolb_zaraza = document.getElementById('saldo_clorolb_zaraza').value;
         if (consumo_clorolb_zaraza==0) {

            var duracion_clorolb_zaraza = 0.00;
         }else{
          var duracion_clorolb_zaraza = parseFloat(saldo_clorolb_zaraza/consumo_clorolb_zaraza);
         }
       
         document.getElementById('duracion_clorolb_zaraza').value = duracion_clorolb_zaraza.toFixed(1);

    //fin de los calculos de Zaraza 

    //inicio de lo calculos de Chaguaramas
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_chaguaramas =  document.getElementById('consumo_gascloro_chaguaramas').value;
          var ht_chaguaramas = document.getElementById('ht_chaguaramas').value;

          var aplicacion_gascloro_chaguaramas = parseFloat(consumo_gascloro_chaguaramas/ht_chaguaramas);
          document.getElementById('aplicacion_gascloro_chaguaramas').value = aplicacion_gascloro_chaguaramas.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_chaguaramas = document.getElementById('consumo_sulfato_chaguaramas').value;
         var aplicacion_sulfato_chaguaramas = parseFloat(consumo_sulfato_chaguaramas/ht_chaguaramas);

         document.getElementById('aplicacion_sulfato_chaguaramas').value = aplicacion_sulfato_chaguaramas.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_chaguaramas = document.getElementById('consumo_cal_chaguaramas').value;
         var aplicacion_cal_chaguaramas = parseFloat(consumo_cal_chaguaramas/ht_chaguaramas);

         document.getElementById('aplicacion_cal_chaguaramas').value = aplicacion_cal_chaguaramas.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_chaguaramas = document.getElementById('consumo_hipoclorito_chaguaramas').value;
         var aplicacion_hipoclorito_chaguaramas = parseFloat(consumo_hipoclorito_chaguaramas/ht_chaguaramas);

         document.getElementById('aplicacion_hipoclorito_chaguaramas').value = aplicacion_hipoclorito_chaguaramas.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_chaguaramas = document.getElementById('consumo_poli_chaguaramas').value;
         var aplicacion_poli_chaguaramas = parseFloat(consumo_poli_chaguaramas/ht_chaguaramas);

         document.getElementById('aplicacion_poli_chaguaramas').value = aplicacion_poli_chaguaramas.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_chaguaramas').value;
          document.getElementById('aplicacion_clorolb_chaguaramas').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_chaguaramas = document.getElementById('saldo_gascloro_chaguaramas').value;
         if (consumo_gascloro_chaguaramas==0) {

            var duracion_gascloro_chaguaramas = 0.00;
         }else{
          var duracion_gascloro_chaguaramas = parseFloat(saldo_gascloro_chaguaramas/consumo_gascloro_chaguaramas);
         }
         
        
         document.getElementById('duracion_gascloro_chaguaramas').value = duracion_gascloro_chaguaramas.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_chaguaramas = document.getElementById('saldo_sulfato_chaguaramas').value;
         if (consumo_sulfato_chaguaramas==0) {

            var duracion_sulfato_chaguaramas = 0.00;
         }else{
          var duracion_sulfato_chaguaramas = parseFloat(saldo_sulfato_chaguaramas/consumo_sulfato_chaguaramas);
         }
       
         document.getElementById('duracion_sulfato_chaguaramas').value = duracion_sulfato_chaguaramas.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_chaguaramas = document.getElementById('saldo_cal_chaguaramas').value;
         if (consumo_cal_chaguaramas==0) {

            var duracion_cal_chaguaramas = 0.00;
         }else{
          var duracion_cal_chaguaramas = parseFloat(saldo_cal_chaguaramas/consumo_cal_chaguaramas);
         }
       
         document.getElementById('duracion_cal_chaguaramas').value = duracion_cal_chaguaramas.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_chaguaramas = document.getElementById('saldo_hipoclorito_chaguaramas').value;
         if (consumo_hipoclorito_chaguaramas==0) {

            var duracion_hipoclorito_chaguaramas = 0.00;
         }else{
          var duracion_hipoclorito_chaguaramas = parseFloat(saldo_hipoclorito_chaguaramas/consumo_hipoclorito_chaguaramas);
         }
       
         document.getElementById('duracion_hipoclorito_chaguaramas').value = duracion_hipoclorito_chaguaramas.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_chaguaramas = document.getElementById('saldo_poli_chaguaramas').value;
         if (consumo_poli_chaguaramas==0) {

            var duracion_poli_chaguaramas = 0.00;
         }else{
          var duracion_poli_chaguaramas = parseFloat(saldo_poli_chaguaramas/consumo_poli_chaguaramas);
         }
       
         document.getElementById('duracion_poli_chaguaramas').value = duracion_poli_chaguaramas.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_chaguaramas = document.getElementById('consumo_clorolb_chaguaramas').value; 
         var saldo_clorolb_chaguaramas = document.getElementById('saldo_clorolb_chaguaramas').value;
         if (consumo_clorolb_chaguaramas==0) {

            var duracion_clorolb_chaguaramas = 0.00;
         }else{
          var duracion_clorolb_chaguaramas = parseFloat(saldo_clorolb_chaguaramas/consumo_clorolb_chaguaramas);
         }
       
         document.getElementById('duracion_clorolb_chaguaramas').value = duracion_clorolb_chaguaramas.toFixed(1);

    //fin de los calculos de Chaguaramas

    //inicio de lo calculos de Santa MAria de Ipire
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_santamaria =  document.getElementById('consumo_gascloro_santamaria').value;
          var ht_santamaria = document.getElementById('ht_santamaria').value;

          var aplicacion_gascloro_santamaria = parseFloat(consumo_gascloro_santamaria/ht_santamaria);
          document.getElementById('aplicacion_gascloro_santamaria').value = aplicacion_gascloro_santamaria.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_santamaria = document.getElementById('consumo_sulfato_santamaria').value;
         var aplicacion_sulfato_santamaria = parseFloat(consumo_sulfato_santamaria/ht_santamaria);

         document.getElementById('aplicacion_sulfato_santamaria').value = aplicacion_sulfato_santamaria.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_santamaria = document.getElementById('consumo_cal_santamaria').value;
         var aplicacion_cal_santamaria = parseFloat(consumo_cal_santamaria/ht_santamaria);

         document.getElementById('aplicacion_cal_santamaria').value = aplicacion_cal_santamaria.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_santamaria = document.getElementById('consumo_hipoclorito_santamaria').value;
         var aplicacion_hipoclorito_santamaria = parseFloat(consumo_hipoclorito_santamaria/ht_santamaria);

         document.getElementById('aplicacion_hipoclorito_santamaria').value = aplicacion_hipoclorito_santamaria.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_santamaria = document.getElementById('consumo_poli_santamaria').value;
         var aplicacion_poli_santamaria = parseFloat(consumo_poli_santamaria/ht_santamaria);

         document.getElementById('aplicacion_poli_santamaria').value = aplicacion_poli_santamaria.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_santamaria').value;
          document.getElementById('aplicacion_clorolb_santamaria').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_santamaria = document.getElementById('saldo_gascloro_santamaria').value;
         if (consumo_gascloro_santamaria==0) {

            var duracion_gascloro_santamaria = 0.00;
         }else{
          var duracion_gascloro_santamaria = parseFloat(saldo_gascloro_santamaria/consumo_gascloro_santamaria);
         }
         
        
         document.getElementById('duracion_gascloro_santamaria').value = duracion_gascloro_santamaria.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_santamaria = document.getElementById('saldo_sulfato_santamaria').value;
         if (consumo_sulfato_santamaria==0) {

            var duracion_sulfato_santamaria = 0.00;
         }else{
          var duracion_sulfato_santamaria = parseFloat(saldo_sulfato_santamaria/consumo_sulfato_santamaria);
         }
       
         document.getElementById('duracion_sulfato_santamaria').value = duracion_sulfato_santamaria.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_santamaria = document.getElementById('saldo_cal_santamaria').value;
         if (consumo_cal_santamaria==0) {

            var duracion_cal_santamaria = 0.00;
         }else{
          var duracion_cal_santamaria = parseFloat(saldo_cal_santamaria/consumo_cal_santamaria);
         }
       
         document.getElementById('duracion_cal_santamaria').value = duracion_cal_santamaria.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_santamaria = document.getElementById('saldo_hipoclorito_santamaria').value;
         if (consumo_hipoclorito_santamaria==0) {

            var duracion_hipoclorito_santamaria = 0.00;
         }else{
          var duracion_hipoclorito_santamaria = parseFloat(saldo_hipoclorito_santamaria/consumo_hipoclorito_santamaria);
         }
       
         document.getElementById('duracion_hipoclorito_santamaria').value = duracion_hipoclorito_santamaria.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_santamaria = document.getElementById('saldo_poli_santamaria').value;
         if (consumo_poli_santamaria==0) {

            var duracion_poli_santamaria = 0.00;
         }else{
          var duracion_poli_santamaria = parseFloat(saldo_poli_santamaria/consumo_poli_santamaria);
         }
       
         document.getElementById('duracion_poli_santamaria').value = duracion_poli_santamaria.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_santamaria = document.getElementById('consumo_clorolb_santamaria').value; 
         var saldo_clorolb_santamaria = document.getElementById('saldo_clorolb_santamaria').value;
         if (consumo_clorolb_santamaria==0) {

            var duracion_clorolb_santamaria = 0.00;
         }else{
          var duracion_clorolb_santamaria = parseFloat(saldo_clorolb_santamaria/consumo_clorolb_santamaria);
         }
       
         document.getElementById('duracion_clorolb_santamaria').value = duracion_clorolb_santamaria.toFixed(1);

    //fin de los calculos de Santa Maria de Ipire

     //inicio de lo calculos deEl Socorro
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_socorro =  document.getElementById('consumo_gascloro_socorro').value;
          var ht_socorro = document.getElementById('ht_socorro').value;

          var aplicacion_gascloro_socorro = parseFloat(consumo_gascloro_socorro/ht_socorro);
          document.getElementById('aplicacion_gascloro_socorro').value = aplicacion_gascloro_socorro.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_socorro = document.getElementById('consumo_sulfato_socorro').value;
         var aplicacion_sulfato_socorro = parseFloat(consumo_sulfato_socorro/ht_socorro);

         document.getElementById('aplicacion_sulfato_socorro').value = aplicacion_sulfato_socorro.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_socorro = document.getElementById('consumo_cal_socorro').value;
         var aplicacion_cal_socorro = parseFloat(consumo_cal_socorro/ht_socorro);

         document.getElementById('aplicacion_cal_socorro').value = aplicacion_cal_socorro.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_socorro = document.getElementById('consumo_hipoclorito_socorro').value;
         var aplicacion_hipoclorito_socorro = parseFloat(consumo_hipoclorito_socorro/ht_socorro);

         document.getElementById('aplicacion_hipoclorito_socorro').value = aplicacion_hipoclorito_socorro.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_socorro = document.getElementById('consumo_poli_socorro').value;
         var aplicacion_poli_socorro = parseFloat(consumo_poli_socorro/ht_socorro);

         document.getElementById('aplicacion_poli_socorro').value = aplicacion_poli_socorro.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_socorro').value;
          document.getElementById('aplicacion_clorolb_socorro').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_socorro = document.getElementById('saldo_gascloro_socorro').value;
         if (consumo_gascloro_socorro==0) {

            var duracion_gascloro_socorro = 0.00;
         }else{
          var duracion_gascloro_socorro = parseFloat(saldo_gascloro_socorro/consumo_gascloro_socorro);
         }
         
        
         document.getElementById('duracion_gascloro_socorro').value = duracion_gascloro_socorro.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_socorro = document.getElementById('saldo_sulfato_socorro').value;
         if (consumo_sulfato_socorro==0) {

            var duracion_sulfato_socorro = 0.00;
         }else{
          var duracion_sulfato_socorro = parseFloat(saldo_sulfato_socorro/consumo_sulfato_socorro);
         }
       
         document.getElementById('duracion_sulfato_socorro').value = duracion_sulfato_socorro.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_socorro = document.getElementById('saldo_cal_socorro').value;
         if (consumo_cal_socorro==0) {

            var duracion_cal_socorro = 0.00;
         }else{
          var duracion_cal_socorro = parseFloat(saldo_cal_socorro/consumo_cal_socorro);
         }
       
         document.getElementById('duracion_cal_socorro').value = duracion_cal_socorro.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_socorro = document.getElementById('saldo_hipoclorito_socorro').value;
         if (consumo_hipoclorito_socorro==0) {

            var duracion_hipoclorito_socorro = 0.00;
         }else{
          var duracion_hipoclorito_socorro = parseFloat(saldo_hipoclorito_socorro/consumo_hipoclorito_socorro);
         }
       
         document.getElementById('duracion_hipoclorito_socorro').value = duracion_hipoclorito_socorro.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_socorro = document.getElementById('saldo_poli_socorro').value;
         if (consumo_poli_socorro==0) {

            var duracion_poli_socorro = 0.00;
         }else{
          var duracion_poli_socorro = parseFloat(saldo_poli_socorro/consumo_poli_socorro);
         }
       
         document.getElementById('duracion_poli_socorro').value = duracion_poli_socorro.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_socorro = document.getElementById('consumo_clorolb_socorro').value; 
         var saldo_clorolb_socorro = document.getElementById('saldo_clorolb_socorro').value;
         if (consumo_clorolb_socorro==0) {

            var duracion_clorolb_socorro = 0.00;
         }else{
          var duracion_clorolb_socorro = parseFloat(saldo_clorolb_socorro/consumo_clorolb_socorro);
         }
       
         document.getElementById('duracion_clorolb_socorro').value = duracion_clorolb_socorro.toFixed(1);

    //fin de los calculos de El Socorro

    //inicio de lo calculos Guardatinajas
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_guardatinajas =  document.getElementById('consumo_gascloro_guardatinajas').value;
          var ht_guardatinajas = document.getElementById('ht_guardatinajas').value;

          var aplicacion_gascloro_guardatinajas = parseFloat(consumo_gascloro_guardatinajas/ht_guardatinajas);
          document.getElementById('aplicacion_gascloro_guardatinajas').value = aplicacion_gascloro_guardatinajas.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_guardatinajas = document.getElementById('consumo_sulfato_guardatinajas').value;
         var aplicacion_sulfato_guardatinajas = parseFloat(consumo_sulfato_guardatinajas/ht_guardatinajas);

         document.getElementById('aplicacion_sulfato_guardatinajas').value = aplicacion_sulfato_guardatinajas.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_guardatinajas = document.getElementById('consumo_cal_guardatinajas').value;
         var aplicacion_cal_guardatinajas = parseFloat(consumo_cal_guardatinajas/ht_guardatinajas);

         document.getElementById('aplicacion_cal_guardatinajas').value = aplicacion_cal_guardatinajas.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_guardatinajas = document.getElementById('consumo_hipoclorito_guardatinajas').value;
         var aplicacion_hipoclorito_guardatinajas = parseFloat(consumo_hipoclorito_guardatinajas/ht_guardatinajas);

         document.getElementById('aplicacion_hipoclorito_guardatinajas').value = aplicacion_hipoclorito_guardatinajas.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_guardatinajas = document.getElementById('consumo_poli_guardatinajas').value;
         var aplicacion_poli_guardatinajas = parseFloat(consumo_poli_guardatinajas/ht_guardatinajas);

         document.getElementById('aplicacion_poli_guardatinajas').value = aplicacion_poli_guardatinajas.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_guardatinajas').value;
          document.getElementById('aplicacion_clorolb_guardatinajas').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_guardatinajas = document.getElementById('saldo_gascloro_guardatinajas').value;
         if (consumo_gascloro_guardatinajas==0) {

            var duracion_gascloro_guardatinajas = 0.00;
         }else{
          var duracion_gascloro_guardatinajas = parseFloat(saldo_gascloro_guardatinajas/consumo_gascloro_guardatinajas);
         }
         
        
         document.getElementById('duracion_gascloro_guardatinajas').value = duracion_gascloro_guardatinajas.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_guardatinajas = document.getElementById('saldo_sulfato_guardatinajas').value;
         if (consumo_sulfato_guardatinajas==0) {

            var duracion_sulfato_guardatinajas = 0.00;
         }else{
          var duracion_sulfato_guardatinajas = parseFloat(saldo_sulfato_guardatinajas/consumo_sulfato_guardatinajas);
         }
       
         document.getElementById('duracion_sulfato_guardatinajas').value = duracion_sulfato_guardatinajas.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_guardatinajas = document.getElementById('saldo_cal_guardatinajas').value;
         if (consumo_cal_guardatinajas==0) {

            var duracion_cal_guardatinajas = 0.00;
         }else{
          var duracion_cal_guardatinajas = parseFloat(saldo_cal_guardatinajas/consumo_cal_guardatinajas);
         }
       
         document.getElementById('duracion_cal_guardatinajas').value = duracion_cal_guardatinajas.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_guardatinajas = document.getElementById('saldo_hipoclorito_guardatinajas').value;
         if (consumo_hipoclorito_guardatinajas==0) {

            var duracion_hipoclorito_guardatinajas = 0.00;
         }else{
          var duracion_hipoclorito_guardatinajas = parseFloat(saldo_hipoclorito_guardatinajas/consumo_hipoclorito_guardatinajas);
         }
       
         document.getElementById('duracion_hipoclorito_guardatinajas').value = duracion_hipoclorito_guardatinajas.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_guardatinajas = document.getElementById('saldo_poli_guardatinajas').value;
         if (consumo_poli_guardatinajas==0) {

            var duracion_poli_guardatinajas = 0.00;
         }else{
          var duracion_poli_guardatinajas = parseFloat(saldo_poli_guardatinajas/consumo_poli_guardatinajas);
         }
       
         document.getElementById('duracion_poli_guardatinajas').value = duracion_poli_guardatinajas.toFixed(1);

           //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_guardatinajas = document.getElementById('consumo_clorolb_guardatinajas').value; 
         var saldo_clorolb_guardatinajas = document.getElementById('saldo_clorolb_guardatinajas').value;
         if (consumo_clorolb_guardatinajas==0) {

            var duracion_clorolb_guardatinajas = 0.00;
         }else{
          var duracion_clorolb_guardatinajas = parseFloat(saldo_clorolb_guardatinajas/consumo_clorolb_guardatinajas);
         }
       
         document.getElementById('duracion_clorolb_guardatinajas').value = duracion_clorolb_guardatinajas.toFixed(1);

    //fin de los calculos de Guardatinajas

    //inicio de lo calculos Espino
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_espino =  document.getElementById('consumo_gascloro_espino').value;
          var ht_espino = document.getElementById('ht_espino').value;

          var aplicacion_gascloro_espino = parseFloat(consumo_gascloro_espino/ht_espino);
          document.getElementById('aplicacion_gascloro_espino').value = aplicacion_gascloro_espino.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_espino = document.getElementById('consumo_sulfato_espino').value;
         var aplicacion_sulfato_espino = parseFloat(consumo_sulfato_espino/ht_espino);

         document.getElementById('aplicacion_sulfato_espino').value = aplicacion_sulfato_espino.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_espino = document.getElementById('consumo_cal_espino').value;
         var aplicacion_cal_espino = parseFloat(consumo_cal_espino/ht_espino);

         document.getElementById('aplicacion_cal_espino').value = aplicacion_cal_espino.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_espino = document.getElementById('consumo_hipoclorito_espino').value;
         var aplicacion_hipoclorito_espino = parseFloat(consumo_hipoclorito_espino/ht_espino);

         document.getElementById('aplicacion_hipoclorito_espino').value = aplicacion_hipoclorito_espino.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_espino = document.getElementById('consumo_poli_espino').value;
         var aplicacion_poli_espino = parseFloat(consumo_poli_espino/ht_espino);

         document.getElementById('aplicacion_poli_espino').value = aplicacion_poli_espino.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_espino').value;
          document.getElementById('aplicacion_clorolb_espino').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_espino = document.getElementById('saldo_gascloro_espino').value;
         if (consumo_gascloro_espino==0) {

            var duracion_gascloro_espino = 0.00;
         }else{
          var duracion_gascloro_espino = parseFloat(saldo_gascloro_espino/consumo_gascloro_espino);
         }
         
        
         document.getElementById('duracion_gascloro_espino').value = duracion_gascloro_espino.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_espino = document.getElementById('saldo_sulfato_espino').value;
         if (consumo_sulfato_espino==0) {

            var duracion_sulfato_espino = 0.00;
         }else{
          var duracion_sulfato_espino = parseFloat(saldo_sulfato_espino/consumo_sulfato_espino);
         }
       
         document.getElementById('duracion_sulfato_espino').value = duracion_sulfato_espino.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_espino = document.getElementById('saldo_cal_espino').value;
         if (consumo_cal_espino==0) {

            var duracion_cal_espino = 0.00;
         }else{
          var duracion_cal_espino = parseFloat(saldo_cal_espino/consumo_cal_espino);
         }
       
         document.getElementById('duracion_cal_espino').value = duracion_cal_espino.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_espino = document.getElementById('saldo_hipoclorito_espino').value;
         if (consumo_hipoclorito_espino==0) {

            var duracion_hipoclorito_espino = 0.00;
         }else{
          var duracion_hipoclorito_espino = parseFloat(saldo_hipoclorito_espino/consumo_hipoclorito_espino);
         }
       
         document.getElementById('duracion_hipoclorito_espino').value = duracion_hipoclorito_espino.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_espino = document.getElementById('saldo_poli_espino').value;
         if (consumo_poli_espino==0) {

            var duracion_poli_espino = 0.00;
         }else{
          var duracion_poli_espino = parseFloat(saldo_poli_espino/consumo_poli_espino);
         }
       
         document.getElementById('duracion_poli_espino').value = duracion_poli_espino.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_espino = document.getElementById('consumo_clorolb_espino').value; 
         var saldo_clorolb_espino = document.getElementById('saldo_clorolb_espino').value;
         if (consumo_clorolb_espino==0) {

            var duracion_clorolb_espino = 0.00;
         }else{
          var duracion_clorolb_espino = parseFloat(saldo_clorolb_espino/consumo_clorolb_espino);
         }
       
         document.getElementById('duracion_clorolb_espino').value = duracion_clorolb_espino.toFixed(1);



    //fin de los calculos de Espino

    //inicio de lo calculos San Rafael
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_sanrafael =  document.getElementById('consumo_gascloro_sanrafael').value;
          var ht_sanrafael = document.getElementById('ht_sanrafael').value;

          var aplicacion_gascloro_sanrafael = parseFloat(consumo_gascloro_sanrafael/ht_sanrafael);
          document.getElementById('aplicacion_gascloro_sanrafael').value = aplicacion_gascloro_sanrafael.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_sanrafael = document.getElementById('consumo_sulfato_sanrafael').value;
         var aplicacion_sulfato_sanrafael = parseFloat(consumo_sulfato_sanrafael/ht_sanrafael);

         document.getElementById('aplicacion_sulfato_sanrafael').value = aplicacion_sulfato_sanrafael.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_sanrafael = document.getElementById('consumo_cal_sanrafael').value;
         var aplicacion_cal_sanrafael = parseFloat(consumo_cal_sanrafael/ht_sanrafael);

         document.getElementById('aplicacion_cal_sanrafael').value = aplicacion_cal_sanrafael.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_sanrafael = document.getElementById('consumo_hipoclorito_sanrafael').value;
         var aplicacion_hipoclorito_sanrafael = parseFloat(consumo_hipoclorito_sanrafael/ht_sanrafael);

         document.getElementById('aplicacion_hipoclorito_sanrafael').value = aplicacion_hipoclorito_sanrafael.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_sanrafael = document.getElementById('consumo_poli_sanrafael').value;
         var aplicacion_poli_sanrafael = parseFloat(consumo_poli_sanrafael/ht_sanrafael);

         document.getElementById('aplicacion_poli_sanrafael').value = aplicacion_poli_sanrafael.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_sanrafael').value;
          document.getElementById('aplicacion_clorolb_sanrafael').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_sanrafael = document.getElementById('saldo_gascloro_sanrafael').value;
         if (consumo_gascloro_sanrafael==0) {

            var duracion_gascloro_sanrafael = 0.00;
         }else{
          var duracion_gascloro_sanrafael = parseFloat(saldo_gascloro_sanrafael/consumo_gascloro_sanrafael);
         }
         
        
         document.getElementById('duracion_gascloro_sanrafael').value = duracion_gascloro_sanrafael.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_sanrafael = document.getElementById('saldo_sulfato_sanrafael').value;
         if (consumo_sulfato_sanrafael==0) {

            var duracion_sulfato_sanrafael = 0.00;
         }else{
          var duracion_sulfato_sanrafael = parseFloat(saldo_sulfato_sanrafael/consumo_sulfato_sanrafael);
         }
       
         document.getElementById('duracion_sulfato_sanrafael').value = duracion_sulfato_sanrafael.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_sanrafael = document.getElementById('saldo_cal_sanrafael').value;
         if (consumo_cal_sanrafael==0) {

            var duracion_cal_sanrafael = 0.00;
         }else{
          var duracion_cal_sanrafael = parseFloat(saldo_cal_sanrafael/consumo_cal_sanrafael);
         }
       
         document.getElementById('duracion_cal_sanrafael').value = duracion_cal_sanrafael.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_sanrafael = document.getElementById('saldo_hipoclorito_sanrafael').value;
         if (consumo_hipoclorito_sanrafael==0) {

            var duracion_hipoclorito_sanrafael = 0.00;
         }else{
          var duracion_hipoclorito_sanrafael = parseFloat(saldo_hipoclorito_sanrafael/consumo_hipoclorito_sanrafael);
         }
       
         document.getElementById('duracion_hipoclorito_sanrafael').value = duracion_hipoclorito_sanrafael.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_sanrafael = document.getElementById('saldo_poli_sanrafael').value;
         if (consumo_poli_sanrafael==0) {

            var duracion_poli_sanrafael = 0.00;
         }else{
          var duracion_poli_sanrafael = parseFloat(saldo_poli_sanrafael/consumo_poli_sanrafael);
         }
       
         document.getElementById('duracion_poli_sanrafael').value = duracion_poli_sanrafael.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_sanrafael = document.getElementById('consumo_clorolb_sanrafael').value; 
         var saldo_clorolb_sanrafael = document.getElementById('saldo_clorolb_sanrafael').value;
         if (consumo_clorolb_sanrafael==0) {

            var duracion_clorolb_sanrafael = 0.00;
         }else{
          var duracion_clorolb_sanrafael = parseFloat(saldo_clorolb_sanrafael/consumo_clorolb_sanrafael);
         }
       
         document.getElementById('duracion_clorolb_sanrafael').value = duracion_clorolb_sanrafael.toFixed(1);

    //fin de los calculos de San Rafael

     //inicio de lo calculos Sombrero galeria
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_somGaleria =  document.getElementById('consumo_gascloro_somGaleria').value;
          var ht_somGaleria = document.getElementById('ht_somGaleria').value;

          var aplicacion_gascloro_somGaleria = parseFloat(consumo_gascloro_somGaleria/ht_somGaleria);
          document.getElementById('aplicacion_gascloro_somGaleria').value = aplicacion_gascloro_somGaleria.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_somGaleria = document.getElementById('consumo_sulfato_somGaleria').value;
         var aplicacion_sulfato_somGaleria = parseFloat(consumo_sulfato_somGaleria/ht_somGaleria);

         document.getElementById('aplicacion_sulfato_somGaleria').value = aplicacion_sulfato_somGaleria.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_somGaleria = document.getElementById('consumo_cal_somGaleria').value;
         var aplicacion_cal_somGaleria = parseFloat(consumo_cal_somGaleria/ht_somGaleria);

         document.getElementById('aplicacion_cal_somGaleria').value = aplicacion_cal_somGaleria.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_somGaleria = document.getElementById('consumo_hipoclorito_somGaleria').value;
         var aplicacion_hipoclorito_somGaleria = parseFloat(consumo_hipoclorito_somGaleria/ht_somGaleria);

         document.getElementById('aplicacion_hipoclorito_somGaleria').value = aplicacion_hipoclorito_somGaleria.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_somGaleria = document.getElementById('consumo_poli_somGaleria').value;
         var aplicacion_poli_somGaleria = parseFloat(consumo_poli_somGaleria/ht_somGaleria);

         document.getElementById('aplicacion_poli_somGaleria').value = aplicacion_poli_somGaleria.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_somGaleria').value;
          document.getElementById('aplicacion_clorolb_somGaleria').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_somGaleria = document.getElementById('saldo_gascloro_somGaleria').value;
         if (consumo_gascloro_somGaleria==0) {

            var duracion_gascloro_somGaleria = 0.00;
         }else{
          var duracion_gascloro_somGaleria = parseFloat(saldo_gascloro_somGaleria/consumo_gascloro_somGaleria);
         }
         
        
         document.getElementById('duracion_gascloro_somGaleria').value = duracion_gascloro_somGaleria.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_somGaleria = document.getElementById('saldo_sulfato_somGaleria').value;
         if (consumo_sulfato_somGaleria==0) {

            var duracion_sulfato_somGaleria = 0.00;
         }else{
          var duracion_sulfato_somGaleria = parseFloat(saldo_sulfato_somGaleria/consumo_sulfato_somGaleria);
         }
       
         document.getElementById('duracion_sulfato_somGaleria').value = duracion_sulfato_somGaleria.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_somGaleria = document.getElementById('saldo_cal_somGaleria').value;
         if (consumo_cal_somGaleria==0) {

            var duracion_cal_somGaleria = 0.00;
         }else{
          var duracion_cal_somGaleria = parseFloat(saldo_cal_somGaleria/consumo_cal_somGaleria);
         }
       
         document.getElementById('duracion_cal_somGaleria').value = duracion_cal_somGaleria.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_somGaleria = document.getElementById('saldo_hipoclorito_somGaleria').value;
         if (consumo_hipoclorito_somGaleria==0) {

            var duracion_hipoclorito_somGaleria = 0.00;
         }else{
          var duracion_hipoclorito_somGaleria = parseFloat(saldo_hipoclorito_somGaleria/consumo_hipoclorito_somGaleria);
         }
       
         document.getElementById('duracion_hipoclorito_somGaleria').value = duracion_hipoclorito_somGaleria.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_somGaleria = document.getElementById('saldo_poli_somGaleria').value;
         if (consumo_poli_somGaleria==0) {

            var duracion_poli_somGaleria = 0.00;
         }else{
          var duracion_poli_somGaleria = parseFloat(saldo_poli_somGaleria/consumo_poli_somGaleria);
         }
       
         document.getElementById('duracion_poli_somGaleria').value = duracion_poli_somGaleria.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_somGaleria = document.getElementById('consumo_clorolb_somGaleria').value; 
         var saldo_clorolb_somGaleria = document.getElementById('saldo_clorolb_somGaleria').value;
         if (consumo_clorolb_somGaleria==0) {

            var duracion_clorolb_somGaleria = 0.00;
         }else{
          var duracion_clorolb_somGaleria = parseFloat(saldo_clorolb_somGaleria/consumo_clorolb_somGaleria);
         }
       
         document.getElementById('duracion_clorolb_somGaleria').value = duracion_clorolb_somGaleria.toFixed(1);

    //fin de los calculos de Sombrero Galeria

    //inicio de lo calculos Sombrero Obrero
        //calculo para la Relación = Aplicacion - Gas cloro
        
          
          var consumo_gascloro_somObrero =  document.getElementById('consumo_gascloro_somObrero').value;
          var ht_somObrero = document.getElementById('ht_somObrero').value;

          var aplicacion_gascloro_somObrero = parseFloat(consumo_gascloro_somObrero/ht_somObrero);
          document.getElementById('aplicacion_gascloro_somObrero').value = aplicacion_gascloro_somObrero.toFixed(2);

          //calculo para la Relación = Aplicacion - Sulfato de Aluminio

         var consumo_sulfato_somObrero = document.getElementById('consumo_sulfato_somObrero').value;
         var aplicacion_sulfato_somObrero = parseFloat(consumo_sulfato_somObrero/ht_somObrero);

         document.getElementById('aplicacion_sulfato_somObrero').value = aplicacion_sulfato_somObrero.toFixed(2);

         //calculo para la Relación = Aplicacion - Cal Hidratada
         var consumo_cal_somObrero = document.getElementById('consumo_cal_somObrero').value;
         var aplicacion_cal_somObrero = parseFloat(consumo_cal_somObrero/ht_somObrero);

         document.getElementById('aplicacion_cal_somObrero').value = aplicacion_cal_somObrero.toFixed(2);

         //calculo para la Relación = Aplicacion - Hipoclorito
         var consumo_hipoclorito_somObrero = document.getElementById('consumo_hipoclorito_somObrero').value;
         var aplicacion_hipoclorito_somObrero = parseFloat(consumo_hipoclorito_somObrero/ht_somObrero);

         document.getElementById('aplicacion_hipoclorito_somObrero').value = aplicacion_hipoclorito_somObrero.toFixed(2);

         //calculo para la Relación = Aplicacion - Policloruro
         var consumo_poli_somObrero = document.getElementById('consumo_poli_somObrero').value;
         var aplicacion_poli_somObrero = parseFloat(consumo_poli_somObrero/ht_somObrero);

         document.getElementById('aplicacion_poli_somObrero').value = aplicacion_poli_somObrero.toFixed(2);

         //llevar todo a mayusculas
         var aplicacion_cloro = document.getElementById('aplicacion_clorolb_somObrero').value;
          document.getElementById('aplicacion_clorolb_somObrero').value = aplicacion_cloro.toUpperCase();

          //calculo para la relación = Duracion - Gas cloro
          
         var saldo_gascloro_somObrero = document.getElementById('saldo_gascloro_somObrero').value;
         if (consumo_gascloro_somObrero==0) {

            var duracion_gascloro_somObrero = 0.00;
         }else{
          var duracion_gascloro_somObrero = parseFloat(saldo_gascloro_somObrero/consumo_gascloro_somObrero);
         }
         
        
         document.getElementById('duracion_gascloro_somObrero').value = duracion_gascloro_somObrero.toFixed(1);

         //calculo para la relación = Duracion - Sulfato
          
         var saldo_sulfato_somObrero = document.getElementById('saldo_sulfato_somObrero').value;
         if (consumo_sulfato_somObrero==0) {

            var duracion_sulfato_somObrero = 0.00;
         }else{
          var duracion_sulfato_somObrero = parseFloat(saldo_sulfato_somObrero/consumo_sulfato_somObrero);
         }
       
         document.getElementById('duracion_sulfato_somObrero').value = duracion_sulfato_somObrero.toFixed(1);

          //calculo para la relación = Duracion - Cal
          
         var saldo_cal_somObrero = document.getElementById('saldo_cal_somObrero').value;
         if (consumo_cal_somObrero==0) {

            var duracion_cal_somObrero = 0.00;
         }else{
          var duracion_cal_somObrero = parseFloat(saldo_cal_somObrero/consumo_cal_somObrero);
         }
       
         document.getElementById('duracion_cal_somObrero').value = duracion_cal_somObrero.toFixed(1);

          //calculo para la relación = Duracion - Hipoclorito
          
         var saldo_hipoclorito_somObrero = document.getElementById('saldo_hipoclorito_somObrero').value;
         if (consumo_hipoclorito_somObrero==0) {

            var duracion_hipoclorito_somObrero = 0.00;
         }else{
          var duracion_hipoclorito_somObrero = parseFloat(saldo_hipoclorito_somObrero/consumo_hipoclorito_somObrero);
         }
       
         document.getElementById('duracion_hipoclorito_somObrero').value = duracion_hipoclorito_somObrero.toFixed(1);

          //calculo para la relación = Duracion - Policloruro
          
         var saldo_poli_somObrero = document.getElementById('saldo_poli_somObrero').value;
         if (consumo_poli_somObrero==0) {

            var duracion_poli_somObrero = 0.00;
         }else{
          var duracion_poli_somObrero = parseFloat(saldo_poli_somObrero/consumo_poli_somObrero);
         }
       
         document.getElementById('duracion_poli_somObrero').value = duracion_poli_somObrero.toFixed(1);

         //calculo para la relación = Duracion - Clorolb
         var consumo_clorolb_somObrero = document.getElementById('consumo_clorolb_somObrero').value; 
         var saldo_clorolb_somObrero = document.getElementById('saldo_clorolb_somObrero').value;
         if (consumo_clorolb_somObrero==0) {

            var duracion_clorolb_somObrero = 0.00;
         }else{
          var duracion_clorolb_somObrero = parseFloat(saldo_clorolb_somObrero/consumo_clorolb_somObrero);
         }
       
         document.getElementById('duracion_clorolb_somObrero').value = duracion_clorolb_somObrero.toFixed(1);

    //fin de los calculos de Sombrero Obrero

      }


    </script>
    <script src="../js/select2.min.js"></script>
    

    <script type="text/javascript">
      $(document).ready(function(){

      $('select').select2();
      });
      </script>

         <script src="../js/jquery.validate.js"></script>
        <script type="text/javascript">
                  $(function(){
                   $('#modificar').validate({
                       rules: {
                        'claveVieja': {required: true},
                       'password': {required: true},
                       'password_conf': {required:true, equalTo: "#password"}
                       },
                   messages: {
                      'claveVieja': {required: '<font color="red" size="2">Debe Ingresar su Antigua Clave</font>'},
                       'password': {required: '<font color="red" size="2">Debe Ingresar Clave</font>'},
                       'password_conf': {required: '<font color="red" size="2">Debe Repetir la Clave</font>', equalTo: '<font color="red" size="2">Las Contraseñas No Son Iguales</font>'}
                       
                   },
                   debug: true,
                   /*errorElement: 'div',*/
                   //errorContainer: $('#errores'),
                   submitHandler: function(form){
                       form.submit();
                   }
                });
            });
        </script>
         <script type="text/javascript">
              $(function(){
               $('#empleado').validate({
                   rules: {
                   'nombre': {required: true},
                   'apellido': {required: true},
                   'cedula': { required: true, number: true },
                    'email': { required: true, email: true },
                    'edad': {required: true},
                    'cargo': {required:true}

                   },
               messages: {
                  'nombre': {required: '<font color="red" size="2">Debe Su Nombre</font>'},
                   'apellido': {required: '<font color="red" size="2">Debe Ingresar Su Apellido</font>'},
                   'cedula': { required: '<font color="red" size="2">Debe Ingresar la Cédula</font>', number: '<font color="red" size="2">Debe Ser un Número</font>' },
                    'email': { required: '<font color="red" size="2">Debe Ingresar un Correo</font>', email: '<font color="red" size="2">Debe Ingresar un Correo Válido. Por ejemplo: ejemplo@hotmail.com</font>' },
                   'edad': {required: '<font color="red" size="2">Debe Seleccionar una Edad</font>'},
                    'cargo': {required: '<font color="red" size="2">Debe Seleccionar un Cargo</font>'}
               },
               debug: true,
               /*errorElement: 'div',*/
               //errorContainer: $('#errores'),
               submitHandler: function(form){
                   form.submit();
               }
            });
        });
    </script>
 
  </body>
</html>