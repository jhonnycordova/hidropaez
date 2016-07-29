<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    $usuario = $_SESSION["usuario"];
    $fecha = $_GET["fecha"];

 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);
    $idUsuario = $row['id_empleado'];

    //Consulta de cada uno de los sistemas

    //Consultamos San Juan
    $sqlSanJuan = ("SELECT * from sanjuan_parametros where fecha = '$fecha'");
    $resultSanJuan = pg_query($sqlSanJuan);
    $rowSanJuan = pg_fetch_array($resultSanJuan);
    $numSanJuan = pg_num_rows($resultSanJuan);

    //Consultamos Altagracia
     $sqlAltagracia = ("SELECT * from altagracia_parametros where fecha = '$fecha'");
    $resultAltagracia = pg_query($sqlAltagracia);
    $rowAltagracia = pg_fetch_array($resultAltagracia);
    $numAltagracia = pg_num_rows($resultAltagracia);
    
    
    //Consultamos Calabozo
    $sqlCalabozo = ("SELECT * from calabozo_parametros where fecha = '$fecha'");
    $resultCalabozo = pg_query($sqlCalabozo);
    $rowCalabozo = pg_fetch_array($resultCalabozo);
    $numCalabozo = pg_num_rows($resultCalabozo);

    //Consultamos Chaguaramas
    $sqlChaguaramas = ("SELECT * from chaguaramas_parametros where fecha = '$fecha'");
    $resultChaguaramas = pg_query($sqlChaguaramas);
    $rowChaguaramas = pg_fetch_array($resultChaguaramas);
    $numChaguaramas = pg_num_rows($resultChaguaramas);


    //Consultamos Espino
    $sqlEspino = ("SELECT * from espino_parametros where fecha = '$fecha'");
    $resultEspino = pg_query($sqlEspino);
    $rowEspino = pg_fetch_array($resultEspino);
    $numEspino = pg_num_rows($resultEspino);

    //Consultamos Guardatinajas
    $sqlGuardatinajas = ("SELECT * from guardatinajas_parametros where fecha = '$fecha'");
    $resultGuardatinajas = pg_query($sqlGuardatinajas);
    $rowGuardatinajas = pg_fetch_array($resultGuardatinajas);
    $numGuardatinajas = pg_num_rows($resultGuardatinajas);

    //Consultamos SanJose
    $sqlSanJose = ("SELECT * from san_jose_parametros where fecha = '$fecha'");
    $resultSanJose = pg_query($sqlSanJose);
    $rowSanJose = pg_fetch_array($resultSanJose);
    $numSanJose = pg_num_rows($resultSanJose);

    //Consultamos SanRafael
    $sqlSanRafael = ("SELECT * from san_rafael_parametros where fecha = '$fecha'");
    $resultSanRafael = pg_query($sqlSanRafael);
    $rowSanRafael = pg_fetch_array($resultSanRafael);
    $numSanRafael = pg_num_rows($resultSanRafael);

    //Consultamos SantaMaria
    $sqlSantaMaria = ("SELECT * from santa_maria_parametros where fecha = '$fecha'");
    $resultSantaMaria = pg_query($sqlSantaMaria);
    $rowSantaMaria = pg_fetch_array($resultSantaMaria);
    $numSantaMaria = pg_num_rows($resultSantaMaria);

    //Consultamos Socorro
    $sqlSocorro = ("SELECT * from socorro_parametros where fecha = '$fecha'");
    $resultSocorro = pg_query($sqlSocorro);
    $rowSocorro = pg_fetch_array($resultSocorro);
    $numSocorro = pg_num_rows($resultSocorro);

    //Consultamos SomGaleria
    $sqlSomGaleria = ("SELECT * from som_galeria_parametros where fecha = '$fecha'");
    $resultSomGaleria = pg_query($sqlSomGaleria);
    $rowSomGaleria = pg_fetch_array($resultSomGaleria);
    $numSomGaleria = pg_num_rows($resultSomGaleria);

    //Consultamos SomObrero
    $sqlSomObrero = ("SELECT * from som_obrero_parametros where fecha = '$fecha'");
    $resultSomObrero = pg_query($sqlSomObrero);
    $rowSomObrero = pg_fetch_array($resultSomObrero);
    $numSomObrero = pg_num_rows($resultSomObrero);

    //Consultamos Tucupido
    $sqlTucupido = ("SELECT * from tucupido_parametros where fecha = '$fecha'");
    $resultTucupido = pg_query($sqlTucupido);
    $rowTucupido = pg_fetch_array($resultTucupido);
    $numTucupido = pg_num_rows($resultTucupido);

    //Consultamos VallePascua
    $sqlVallePascua = ("SELECT * from valle_pascua_parametros where fecha = '$fecha'");
    $resultVallePascua = pg_query($sqlVallePascua);
    $rowVallePascua = pg_fetch_array($resultVallePascua);
    $numVallePascua = pg_num_rows($resultVallePascua);

    //Consultamos Zaraza
    $sqlZaraza = ("SELECT * from zaraza_parametros where fecha = '$fecha'");
    $resultZaraza = pg_query($sqlZaraza);
    $rowZaraza = pg_fetch_array($resultZaraza);
    $numZaraza = pg_num_rows($resultZaraza);

    
    
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
      <link href="../css/panel.css" rel="stylesheet">

       <link href='../img/icono.ico' rel='shortcut icon' type='image/x-icon' />
  </head>
  <body onload=" boton(); boton2(); boton3(); boton4(); boton5(); boton6(); boton7(); boton8(); boton9(); boton10(); boton11(); boton12(); boton13(); boton14(); boton15(); ocultar()" >
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
        <div class="col-sm-3 col-md-3" style="position: fixed;    z-index: 1;">
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
                                        <span class="glyphicon glyphicon-file"></span><a href="#" > Fto. Parámetros Fisicoquímicos</a>
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
        <div class="col-sm-9 col-md-9" style="left: 325px;">
            <div class="well" >
               <form class="form-horizontal" role="form" id="formulario" name="formulario" action="modificarParametros2.php" method="post">
                  <legend><div class="titulo-form">Formato de Parámetros Fisicoquímicos</div></legend>

                      <div class="form-group" style="margin-left:300px;">
                        <label class="col-sm-1 control-label" for="textinput">Fecha:</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="" class="form-control" value="<?php echo $fecha;?>" name="fecha" id="fecha" readonly>
                        </div>
                      </div>



                      <!-- Sistema de San Juan de los Morros -->

                      <?php 
                        if ($rowSanJuan[reporte] == 't') {
                         
                     ?> 

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary ">
                                <div class="panel-heading" id="panel1">
                                    <h3 class="panel-title" align="center">
                                        San Juan de los Morros</h3>
                                   <div id="agregar" id="agregar"><span class="pull-left clickable" ><i id="click" class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto" name="noReporto" value="No Reportó" onclick="boton()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo1">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJuan" value="<?php echo $rowSanJuan[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJuan" value="<?php echo $rowSanJuan[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJuan" value="<?php echo $rowSanJuan[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJuan" value="<?php echo $rowSanJuan[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJuan" value="<?php echo $rowSanJuan[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJuan" value="<?php echo $rowSanJuan[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJuan" value="<?php echo $rowSanJuan[phfiltrada] ?>">
                                          <input type="hidden"  name="idUsuario" value="<?php echo $idUsuario; ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary ">
                                <div class="panel-heading" id="panel1" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                        San Juan de los Morros</h3>
                                   <div id="agregar" id="agregar"><span class="pull-left clickable" style="display:none"><i id="click" class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto" name="noReporto" value="Si Reportó" onclick="boton()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo1">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJuan" value="<?php echo $rowSanJuan[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJuan" value="<?php echo $rowSanJuan[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJuan" value="<?php echo $rowSanJuan[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJuan" value="<?php echo $rowSanJuan[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJuan" value="<?php echo $rowSanJuan[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJuan" value="<?php echo $rowSanJuan[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJuan" value="<?php echo $rowSanJuan[phfiltrada] ?>">
                                          <input type="hidden"  name="idUsuario" value="<?php echo $idUsuario; ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>



                         <?php } ?>



                      

                      <!-- Sistema de Calabozo -->
                    <?php 
                        if ($rowCalabozo[reporte] == 't') {
                         
                     ?>                    

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel2">
                                    <h3 class="panel-title" align="center">
                                        Calabozo</h3>
                                   <div id="agregar2" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto2" name="noReporto2" value="No Reportó" onclick="boton2()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo2">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroCalabozo" value="<?php echo $rowCalabozo[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaCalabozo" value="<?php echo $rowCalabozo[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaCalabozo" value="<?php echo $rowCalabozo[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaCalabozo" value="<?php echo $rowCalabozo[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaCalabozo" value="<?php echo $rowCalabozo[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaCalabozo" value="<?php echo $rowCalabozo[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaCalabozo" value="<?php echo $rowCalabozo[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel2" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                        Calabozo</h3>
                                   <div id="agregar2" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto2" name="noReporto2" value="Si Reportó" onclick="boton2()" readonly></input></span>

                                    
                                </div>

                                   <div class="panel-body" id="cuerpo2">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroCalabozo" value="<?php echo $rowCalabozo[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaCalabozo" value="<?php echo $rowCalabozo[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaCalabozo" value="<?php echo $rowCalabozo[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaCalabozo" value="<?php echo $rowCalabozo[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaCalabozo" value="<?php echo $rowCalabozo[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaCalabozo" value="<?php echo $rowCalabozo[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaCalabozo" value="<?php echo $rowCalabozo[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                                
                            </div>
                        </div>
                      </div>
                      <?php } ?>

                     
                       <!-- Sistema de Altagracia de Orituco -->

                       <?php 
                        if ($rowAltagracia[reporte]== 't') {
                          
                        ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel3">
                                    <h3 class="panel-title" align="center">
                                        Altagracia de Orituco</h3>
                                   <div id="agregar3" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto3" name="noReporto3" value="No Reportó" onclick="boton3()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo3">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroAltagracia" value="<?php echo $rowAltagracia[cloro] ?>">
                                        </td> 
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaAltagracia" value="<?php echo $rowAltagracia[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaAltagracia" value="<?php echo $rowAltagracia[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaAltagracia" value="<?php echo $rowAltagracia[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaAltagracia" value="<?php echo $rowAltagracia[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaAltagracia" value="<?php echo $rowAltagracia[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaAltagracia" value="<?php echo $rowAltagracia[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel3" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                        Altagracia de Orituco</h3>
                                   <div id="agregar3" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto3" name="noReporto3" value="Si Reportó" onclick="boton3()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo3">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroAltagracia" value="<?php echo $rowAltagracia[cloro] ?>">
                                        </td> 
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaAltagracia" value="<?php echo $rowAltagracia[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaAltagracia" value="<?php echo $rowAltagracia[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaAltagracia" value="<?php echo $rowAltagracia[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaAltagracia" value="<?php echo $rowAltagracia[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaAltagracia" value="<?php echo $rowAltagracia[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaAltagracia" value="<?php echo $rowAltagracia[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                         <?php } ?>

                      <!-- Sistema de Valle de la Pascua -->

                      <?php 
                        if ($rowVallePascua[reporte]== 't') {
                         
                       ?>
                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel4">
                                    <h3 class="panel-title" align="center">
                                        Valle de la Pascua</h3>
                                   <div id="agregar4" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto4" name="noReporto4" value="No Reportó" onclick="boton4()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo4">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroVallePascua" value="<?php echo $rowVallePascua[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaVallePascua"  value="<?php echo $rowVallePascua[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaVallePascua"  value="<?php echo $rowVallePascua[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaVallePascua"  value="<?php echo $rowVallePascua[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaVallePascua"  value="<?php echo $rowVallePascua[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaVallePascua"  value="<?php echo $rowVallePascua[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaVallePascua"  value="<?php echo $rowVallePascua[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else {

                         ?>
                           <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel4" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                        Valle de la Pascua</h3>
                                   <div id="agregar4" ><span class="pull-left clickable" style="display:none"><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto4" name="noReporto4" value="Si Reportó" onclick="boton4()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo4">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroVallePascua" value="<?php echo $rowVallePascua[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaVallePascua"  value="<?php echo $rowVallePascua[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaVallePascua"  value="<?php echo $rowVallePascua[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaVallePascua"  value="<?php echo $rowVallePascua[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaVallePascua"  value="<?php echo $rowVallePascua[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaVallePascua"  value="<?php echo $rowVallePascua[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaVallePascua"  value="<?php echo $rowVallePascua[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>


                         <?php } ?>

                      <!-- Sistema de Tucupido -->

                      <?php 
                        if ($rowTucupido[reporte]=='t') {
                          
                        
                       ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel5">
                                    <h3 class="panel-title" align="center">
                                       Tucupido</h3>
                                   <div id="agregar5" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto5" name="noReporto5" value="No Reportó" onclick="boton5()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo5">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroTucupido" value="<?php echo $rowTucupido[cloro]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaTucupido" value="<?php echo $rowTucupido[turcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaTucupido" value="<?php echo $rowTucupido[turfiltrada]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaTucupido" value="<?php echo $rowTucupido[colorcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaTucupido" value="<?php echo $rowTucupido[colorfiltrada]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaTucupido" value="<?php echo $rowTucupido[phcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaTucupido" value="<?php echo $rowTucupido[phfiltrada]?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel5" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                       Tucupido</h3>
                                   <div id="agregar5" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto5" name="noReporto5" value="Si Reportó" onclick="boton5()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo5">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroTucupido" value="<?php echo $rowTucupido[cloro]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaTucupido" value="<?php echo $rowTucupido[turcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaTucupido" value="<?php echo $rowTucupido[turfiltrada]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaTucupido" value="<?php echo $rowTucupido[colorcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaTucupido" value="<?php echo $rowTucupido[colorfiltrada]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaTucupido" value="<?php echo $rowTucupido[phcruda]?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaTucupido" value="<?php echo $rowTucupido[phfiltrada]?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de San José de Guaribe -->

                      <?php 
                        if ($rowSanJose[reporte]=='t') {
                          
                        
                       ?>
                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel6">
                                    <h3 class="panel-title" align="center">
                                       San José de Guaribe</h3>
                                   <div id="agregar6" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto6" name="noReporto6" value="No Reportó" onclick="boton6()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo6">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJose" value="<?php echo $rowSanJose[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJose" value="<?php echo $rowSanJose[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJose" value="<?php echo $rowSanJose[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJose" value="<?php echo $rowSanJose[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJose" value="<?php echo $rowSanJose[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJose" value="<?php echo $rowSanJose[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJose" value="<?php echo $rowSanJose[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else {

                         ?>
                           <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel6" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                       San José de Guaribe</h3>
                                   <div id="agregar6" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto6" name="noReporto6" value="Si Reportó" onclick="boton6()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo6">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJose" value="<?php echo $rowSanJose[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJose" value="<?php echo $rowSanJose[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJose" value="<?php echo $rowSanJose[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJose" value="<?php echo $rowSanJose[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJose" value="<?php echo $rowSanJose[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJose" value="<?php echo $rowSanJose[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJose" value="<?php echo $rowSanJose[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                         <?php } ?>


                      <!-- Sistema de Zaraza -->
                      <?php 
                        if ($rowZaraza[reporte]=='t') {

                       ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel7">
                                    <h3 class="panel-title" align="center">
                                       Zaraza</h3>
                                   <div id="agregar7" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto7" name="noReporto7" value="No Reportó" onclick="boton7()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo7">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroZaraza" value="<?php echo $rowZaraza[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaZaraza" value="<?php echo $rowZaraza[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaZaraza" value="<?php echo $rowZaraza[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaZaraza" value="<?php echo $rowZaraza[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaZaraza" value="<?php echo $rowZaraza[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaZaraza" value="<?php echo $rowZaraza[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaZaraza" value="<?php echo $rowZaraza[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel7" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                       Zaraza</h3>
                                   <div id="agregar7" ><span class="pull-left clickable" style="display:none"><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto7" name="noReporto7" value="Si Reportó" onclick="boton7()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo7">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroZaraza" value="<?php echo $rowZaraza[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaZaraza" value="<?php echo $rowZaraza[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaZaraza" value="<?php echo $rowZaraza[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaZaraza" value="<?php echo $rowZaraza[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaZaraza" value="<?php echo $rowZaraza[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaZaraza" value="<?php echo $rowZaraza[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaZaraza" value="<?php echo $rowZaraza[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                       <!-- Sistema de El Socorro -->

                       <?php 
                        if ($rowSocorro[reporte]=='t') {
                          
                        
                        ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel8">
                                    <h3 class="panel-title" align="center">
                                       El Socorro</h3>
                                   <div id="agregar8" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto8" name="noReporto8" value="No Reportó" onclick="boton8()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo8">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSocorro" value="<?php echo $rowSocorro[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSocorro" value="<?php echo $rowSocorro[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSocorro" value="<?php echo $rowSocorro[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSocorro" value="<?php echo $rowSocorro[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSocorro" value="<?php echo $rowSocorro[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSocorro" value="<?php echo $rowSocorro[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSocorro" value="<?php echo $rowSocorro[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel8" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                       El Socorro</h3>
                                   <div id="agregar8" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto8" name="noReporto8" value="Si Reportó" onclick="boton8()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo8">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSocorro" value="<?php echo $rowSocorro[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSocorro" value="<?php echo $rowSocorro[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSocorro" value="<?php echo $rowSocorro[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSocorro" value="<?php echo $rowSocorro[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSocorro" value="<?php echo $rowSocorro[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSocorro" value="<?php echo $rowSocorro[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSocorro" value="<?php echo $rowSocorro[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de Santa María de Ipire -->

                      <?php 
                        if ($rowSantaMaria[reporte]=='t') {
                        
                       ?>
                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel9">
                                    <h3 class="panel-title" align="center">
                                       Santa María de Ipire</h3>
                                   <div id="agregar9" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto9" name="noReporto9" value="No Reportó" onclick="boton9()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo9">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSantaMaria" value="<?php echo $rowSantaMaria[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSantaMaria" value="<?php echo $rowSantaMaria[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSantaMaria" value="<?php echo $rowSantaMaria[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSantaMaria" value="<?php echo $rowSantaMaria[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSantaMaria" value="<?php echo $rowSantaMaria[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSantaMaria" value="<?php echo $rowSantaMaria[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSantaMaria" value="<?php echo $rowSantaMaria[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel9" style="background-color:#B20000">
                                    <h3 class="panel-title" align="center">
                                       Santa María de Ipire</h3>
                                   <div id="agregar9" ><span class="pull-left clickable" style="display:none"><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto9" name="noReporto9" value="Si Reportó" onclick="boton9()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo9">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSantaMaria" value="<?php echo $rowSantaMaria[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSantaMaria" value="<?php echo $rowSantaMaria[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSantaMaria" value="<?php echo $rowSantaMaria[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSantaMaria" value="<?php echo $rowSantaMaria[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSantaMaria" value="<?php echo $rowSantaMaria[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSantaMaria" value="<?php echo $rowSantaMaria[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSantaMaria" value="<?php echo $rowSantaMaria[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de Espino -->

                      <?php 
                        if ($rowEspino[reporte]=='t') {
                          
                       ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel10">
                                    <h3 class="panel-title" align="center">
                                       Espino</h3>
                                   <div id="agregar10" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto10" name="noReporto10" value="No Reportó" onclick="boton10()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo10">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroEspino" value="<?php echo $rowEspino[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaEspino" value="<?php echo $rowEspino[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaEspino" value="<?php echo $rowEspino[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaEspino" value="<?php echo $rowEspino[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaEspino" value="<?php echo $rowEspino[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaEspino" value="<?php echo $rowEspino[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaEspino" value="<?php echo $rowEspino[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel10" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       Espino</h3>
                                   <div id="agregar10" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto10" name="noReporto10" value="Si Reportó" onclick="boton10()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo10">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroEspino" value="<?php echo $rowEspino[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaEspino" value="<?php echo $rowEspino[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaEspino" value="<?php echo $rowEspino[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaEspino" value="<?php echo $rowEspino[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaEspino" value="<?php echo $rowEspino[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaEspino" value="<?php echo $rowEspino[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaEspino" value="<?php echo $rowEspino[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de Guardatinajas -->

                      <?php 
                      if ($rowGuardatinajas[reporte]=='t') {
                        
                       ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel11">
                                    <h3 class="panel-title" align="center">
                                       Guardatinajas</h3>
                                   <div id="agregar11" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto11" name="noReporto11" value="No Reportó" onclick="boton11()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo11">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroGuardatinajas" value="<?php echo $rowGuardatinajas[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel11" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       Guardatinajas</h3>
                                   <div id="agregar11" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto11" name="noReporto11" value="Si Reportó" onclick="boton11()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo11">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroGuardatinajas" value="<?php echo $rowGuardatinajas[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaGuardatinajas" value="<?php echo $rowGuardatinajas[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaGuardatinajas" value="<?php echo $rowGuardatinajas[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de San Rafael de Laya -->
                      <?php 
                        if ($rowSanRafael[reporte]=='t') {
                         
                       ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel12">
                                    <h3 class="panel-title" align="center">
                                       San Rafael de Laya</h3>
                                   <div id="agregar12" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto12" name="noReporto12" value="No Reportó" onclick="boton12()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo12">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanRafael" value="<?php echo $rowSanRafael[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanRafael" value="<?php echo $rowSanRafael[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanRafael" value="<?php echo $rowSanRafael[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanRafael" value="<?php echo $rowSanRafael[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanRafael" value="<?php echo $rowSanRafael[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanRafael" value="<?php echo $rowSanRafael[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanRafael" value="<?php echo $rowSanRafael[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel12" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       San Rafael de Laya</h3>
                                   <div id="agregar12" ><span class="pull-left clickable" style="display:none"><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto12" name="noReporto12" value="Si Reportó" onclick="boton12()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo12">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanRafael" value="<?php echo $rowSanRafael[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanRafael" value="<?php echo $rowSanRafael[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanRafael" value="<?php echo $rowSanRafael[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanRafael" value="<?php echo $rowSanRafael[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanRafael" value="<?php echo $rowSanRafael[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanRafael" value="<?php echo $rowSanRafael[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanRafael" value="<?php echo $rowSanRafael[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                      <!-- Sistema de Chaguaramas -->
                      <?php 
                        if ($rowChaguaramas[reporte]=='t') {
                          
                       ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel13">
                                    <h3 class="panel-title" align="center">
                                       Chaguaramas</h3>
                                   <div id="agregar13" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto13" name="noReporto13" value="No Reportó" onclick="boton13()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo13">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroChaguaramas" value="<?php echo $rowChaguaramas[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaChaguaramas" value="<?php echo $rowChaguaramas[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaChaguaramas" value="<?php echo $rowChaguaramas[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaChaguaramas" value="<?php echo $rowChaguaramas[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaChaguaramas" value="<?php echo $rowChaguaramas[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaChaguaramas" value="<?php echo $rowChaguaramas[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaChaguaramas" value="<?php echo $rowChaguaramas[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else {

                        ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel13" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       Chaguaramas</h3>
                                   <div id="agregar13" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto13" name="noReporto13" value="Si Reportó" onclick="boton13()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo13">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroChaguaramas" value="<?php echo $rowChaguaramas[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaChaguaramas" value="<?php echo $rowChaguaramas[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaChaguaramas" value="<?php echo $rowChaguaramas[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaChaguaramas" value="<?php echo $rowChaguaramas[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaChaguaramas" value="<?php echo $rowChaguaramas[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaChaguaramas" value="<?php echo $rowChaguaramas[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaChaguaramas" value="<?php echo $rowChaguaramas[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                        <?php } ?>


                      <!-- Sistema de Sombrero Galeria -->

                      <?php 
                        if ($rowSomGaleria[reporte]=='t') {
                          
                       ?>


                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel14">
                                    <h3 class="panel-title" align="center">
                                       Sombrero Galería</h3>
                                   <div id="agregar14" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto14" name="noReporto14" value="No Reportó" onclick="boton14()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo14">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomGaleria" value="<?php echo $rowSomGaleria[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomGaleria" value="<?php echo $rowSomGaleria[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomGaleria" value="<?php echo $rowSomGaleria[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomGaleria" value="<?php echo $rowSomGaleria[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomGaleria" value="<?php echo $rowSomGaleria[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomGaleria" value="<?php echo $rowSomGaleria[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomGaleria" value="<?php echo $rowSomGaleria[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel14" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       Sombrero Galería</h3>
                                   <div id="agregar14" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto14" name="noReporto14" value="Si Reportó" onclick="boton14()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo14">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomGaleria" value="<?php echo $rowSomGaleria[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomGaleria" value="<?php echo $rowSomGaleria[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomGaleria" value="<?php echo $rowSomGaleria[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomGaleria" value="<?php echo $rowSomGaleria[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomGaleria" value="<?php echo $rowSomGaleria[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomGaleria" value="<?php echo $rowSomGaleria[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomGaleria" value="<?php echo $rowSomGaleria[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php }?>

                      <!-- Sistema de Sombrero Banco Obrero -->
                      <?php 
                        if ($rowSomObrero[reporte]=='t') {
                          
                       ?>

                      <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel15">
                                    <h3 class="panel-title" align="center">
                                       Sombrero Est. Banco Obrero</h3>
                                   <div id="agregar15" ><span class="pull-left clickable" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-danger btn-sm" size="7" id="noReporto15" name="noReporto15" value="No Reportó" onclick="boton15()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo15">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomObrero" value="<?php echo $rowSomObrero[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomObrero"value="<?php echo $rowSomObrero[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomObrero" value="<?php echo $rowSomObrero[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomObrero" value="<?php echo $rowSomObrero[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomObrero" value="<?php echo $rowSomObrero[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomObrero" value="<?php echo $rowSomObrero[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomObrero" value="<?php echo $rowSomObrero[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      <?php }else{

                         ?>
                         <div class="form-group" >
                          <div class="col-md-12" >
                            <div class="panel panel-primary">
                                <div class="panel-heading" id="panel15" style="background-color:#b20000">
                                    <h3 class="panel-title" align="center">
                                       Sombrero Est. Banco Obrero</h3>
                                   <div id="agregar15" ><span class="pull-left clickable" style="display:none" ><i class="glyphicon glyphicon-minus"></i></span></div> 
                                    <span class="pull-right"><input type="text" class="btn btn-primary btn-sm" size="7" id="noReporto15" name="noReporto15" value="Si Reportó" onclick="boton15()" readonly></input></span>

                                    
                                </div>

                                <div class="panel-body" id="cuerpo15">
                                     <table class="table table-bordered">
                                      <tr class="active" align="center">
                                          <td rowspan="2">
                                             <b> Cloro Residual<br>
                                              (ppm)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Turbiedad (NTU)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>Color (Unidades Pt-Co)</b>
                                          </td>
                                          <td colspan="2">
                                            <b>pH</b>
                                          </td>
                                      </tr>
                                      <tr align="center">
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                        <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                         <td>
                                          Cruda
                                        </td>
                                        <td>
                                          Filtrada
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomObrero" value="<?php echo $rowSomObrero[cloro] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomObrero"value="<?php echo $rowSomObrero[turcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomObrero" value="<?php echo $rowSomObrero[turfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomObrero" value="<?php echo $rowSomObrero[colorcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomObrero" value="<?php echo $rowSomObrero[colorfiltrada] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomObrero" value="<?php echo $rowSomObrero[phcruda] ?>">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomObrero" value="<?php echo $rowSomObrero[phfiltrada] ?>">
                                        </td>
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                         <?php } ?>

                    <!-- fin de sistemas -->

                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">
                          <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
                            <input type="button"  class="btn btn-primary" onclick="pregunta()" value="Modificar">
                            <button type="reset" class="btn btn-default">Limpiar</button>
                            
                          </div>
                        </div>
                      </div>

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
        <script src="../js/panel.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <script type="text/javascript">

    function pregunta(){
      if (confirm('¿Está Seguro de Modificar Estos Datos?  \n Si tiene Dudas, Cancele y Revise Nuevamente')) {
        document.formulario.submit();
      };
    }

    function ocultar(){
      $(document).ready(function () {
    //esta funcion de abajo recoge los paneles
    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();
    });
    }
   
    
    function boton(){
      
    var boton = $("#noReporto").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto").click(function(){

            $('#agregar').hide(); //muestro mediante id
            $('#cuerpo1').hide(); //muestro mediante id
            $("#noReporto").attr('value', 'Si Reportó');
             $("#noReporto").removeClass('btn-danger');
             $("#noReporto").addClass('btn-primary');
            $("#panel1").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto").click(function(){

            $('#agregar').show(); //muestro mediante id
            $('#cuerpo1').show(); //muestro mediante id
            $("#noReporto").attr('value', 'No Reportó');
             $("#noReporto").removeClass('btn-primary');
             $("#noReporto").addClass('btn-danger');


            $("#panel1").css("background-color","#302E2E");
            
         });
       
    });

    }


       
    }  

    function boton2(){
       var boton = $("#noReporto2").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto2").click(function(){

            $('#agregar2').hide(); //muestro mediante id
            $('#cuerpo2').hide(); //muestro mediante id
            $("#noReporto2").attr('value', 'Si Reportó');
             $("#noReporto2").removeClass('btn-danger');
             $("#noReporto2").addClass('btn-primary');
            $("#panel2").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto2").click(function(){

            $('#agregar2').show(); //muestro mediante id
            $('#cuerpo2').show(); //muestro mediante id
            $("#noReporto2").attr('value', 'No Reportó');
             $("#noReporto2").removeClass('btn-primary');
             $("#noReporto2").addClass('btn-danger');


            $("#panel2").css("background-color","#302E2E");

            
         });
       
    });

    }
       
    } 

    function boton3(){
       var boton = $("#noReporto3").val();

    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto3").click(function(){

            $('#agregar3').hide(); //muestro mediante id
            $('#cuerpo3').hide(); //muestro mediante id
            $("#noReporto3").attr('value', 'Si Reportó');
             $("#noReporto3").removeClass('btn-danger');
             $("#noReporto3").addClass('btn-primary');
            $("#panel3").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto3").click(function(){

            $('#agregar3').show(); //muestro mediante id
            $('#cuerpo3').show(); //muestro mediante id
            $("#noReporto3").attr('value', 'No Reportó');
             $("#noReporto3").removeClass('btn-primary');
             $("#noReporto3").addClass('btn-danger');


            $("#panel3").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    } 

    function boton4(){
       var boton = $("#noReporto4").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto4").click(function(){

            $('#agregar4').hide(); //muestro mediante id
            $('#cuerpo4').hide(); //muestro mediante id
            $("#noReporto4").attr('value', 'Si Reportó');
             $("#noReporto4").removeClass('btn-danger');
             $("#noReporto4").addClass('btn-primary');
            $("#panel4").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto4").click(function(){

            $('#agregar4').show(); //muestro mediante id
            $('#cuerpo4').show(); //muestro mediante id
            $("#noReporto4").attr('value', 'No Reportó');
             $("#noReporto4").removeClass('btn-primary');
             $("#noReporto4").addClass('btn-danger');


            $("#panel4").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton5(){
       var boton = $("#noReporto5").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto5").click(function(){

            $('#agregar5').hide(); //muestro mediante id
            $('#cuerpo5').hide(); //muestro mediante id
            $("#noReporto5").attr('value', 'Si Reportó');
             $("#noReporto5").removeClass('btn-danger');
             $("#noReporto5").addClass('btn-primary');
            $("#panel5").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto5").click(function(){

            $('#agregar5').show(); //muestro mediante id
            $('#cuerpo5').show(); //muestro mediante id
            $("#noReporto5").attr('value', 'No Reportó');
             $("#noReporto5").removeClass('btn-primary');
             $("#noReporto5").addClass('btn-danger');


            $("#panel5").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton6(){
       var boton = $("#noReporto6").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto6").click(function(){

            $('#agregar6').hide(); //muestro mediante id
            $('#cuerpo6').hide(); //muestro mediante id
            $("#noReporto6").attr('value', 'Si Reportó');
             $("#noReporto6").removeClass('btn-danger');
             $("#noReporto6").addClass('btn-primary');
            $("#panel6").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto6").click(function(){

            $('#agregar6').show(); //muestro mediante id
            $('#cuerpo6').show(); //muestro mediante id
            $("#noReporto6").attr('value', 'No Reportó');
             $("#noReporto6").removeClass('btn-primary');
             $("#noReporto6").addClass('btn-danger');


            $("#panel6").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton7(){
       var boton = $("#noReporto7").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto7").click(function(){

            $('#agregar7').hide(); //muestro mediante id
            $('#cuerpo7').hide(); //muestro mediante id
            $("#noReporto7").attr('value', 'Si Reportó');
             $("#noReporto7").removeClass('btn-danger');
             $("#noReporto7").addClass('btn-primary');
            $("#panel7").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto7").click(function(){

            $('#agregar7').show(); //muestro mediante id
            $('#cuerpo7').show(); //muestro mediante id
            $("#noReporto7").attr('value', 'No Reportó');
             $("#noReporto7").removeClass('btn-primary');
             $("#noReporto7").addClass('btn-danger');


            $("#panel7").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton8(){
       var boton = $("#noReporto8").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto8").click(function(){

            $('#agregar8').hide(); //muestro mediante id
            $('#cuerpo8').hide(); //muestro mediante id
            $("#noReporto8").attr('value', 'Si Reportó');
             $("#noReporto8").removeClass('btn-danger');
             $("#noReporto8").addClass('btn-primary');
            $("#panel8").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto8").click(function(){

            $('#agregar8').show(); //muestro mediante id
            $('#cuerpo8').show(); //muestro mediante id
            $("#noReporto8").attr('value', 'No Reportó');
             $("#noReporto8").removeClass('btn-primary');
             $("#noReporto8").addClass('btn-danger');


            $("#panel8").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton9(){
       var boton = $("#noReporto9").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto9").click(function(){

            $('#agregar9').hide(); //muestro mediante id
            $('#cuerpo9').hide(); //muestro mediante id
            $("#noReporto9").attr('value', 'Si Reportó');
             $("#noReporto9").removeClass('btn-danger');
             $("#noReporto9").addClass('btn-primary');
            $("#panel9").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto9").click(function(){

            $('#agregar9').show(); //muestro mediante id
            $('#cuerpo9').show(); //muestro mediante id
            $("#noReporto9").attr('value', 'No Reportó');
             $("#noReporto9").removeClass('btn-primary');
             $("#noReporto9").addClass('btn-danger');


            $("#panel9").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton10(){
       var boton = $("#noReporto10").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto10").click(function(){

            $('#agregar10').hide(); //muestro mediante id
            $('#cuerpo10').hide(); //muestro mediante id
            $("#noReporto10").attr('value', 'Si Reportó');
             $("#noReporto10").removeClass('btn-danger');
             $("#noReporto10").addClass('btn-primary');
            $("#panel10").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto10").click(function(){

            $('#agregar10').show(); //muestro mediante id
            $('#cuerpo10').show(); //muestro mediante id
            $("#noReporto10").attr('value', 'No Reportó');
             $("#noReporto10").removeClass('btn-primary');
             $("#noReporto10").addClass('btn-danger');


            $("#panel10").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton11(){
       var boton = $("#noReporto11").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto11").click(function(){

            $('#agregar11').hide(); //muestro mediante id
            $('#cuerpo11').hide(); //muestro mediante id
            $("#noReporto11").attr('value', 'Si Reportó');
             $("#noReporto11").removeClass('btn-danger');
             $("#noReporto11").addClass('btn-primary');
            $("#panel11").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto11").click(function(){

            $('#agregar11').show(); //muestro mediante id
            $('#cuerpo11').show(); //muestro mediante id
            $("#noReporto11").attr('value', 'No Reportó');
             $("#noReporto11").removeClass('btn-primary');
             $("#noReporto11").addClass('btn-danger');


            $("#panel11").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton12(){
       var boton = $("#noReporto12").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto12").click(function(){

            $('#agregar12').hide(); //muestro mediante id
            $('#cuerpo12').hide(); //muestro mediante id
            $("#noReporto12").attr('value', 'Si Reportó');
             $("#noReporto12").removeClass('btn-danger');
             $("#noReporto12").addClass('btn-primary');
            $("#panel12").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto12").click(function(){

            $('#agregar12').show(); //muestro mediante id
            $('#cuerpo12').show(); //muestro mediante id
            $("#noReporto12").attr('value', 'No Reportó');
             $("#noReporto12").removeClass('btn-primary');
             $("#noReporto12").addClass('btn-danger');


            $("#panel12").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton13(){
       var boton = $("#noReporto13").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto13").click(function(){

            $('#agregar13').hide(); //muestro mediante id
            $('#cuerpo13').hide(); //muestro mediante id
            $("#noReporto13").attr('value', 'Si Reportó');
             $("#noReporto13").removeClass('btn-danger');
             $("#noReporto13").addClass('btn-primary');
            $("#panel13").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto13").click(function(){

            $('#agregar13').show(); //muestro mediante id
            $('#cuerpo13').show(); //muestro mediante id
            $("#noReporto13").attr('value', 'No Reportó');
             $("#noReporto13").removeClass('btn-primary');
             $("#noReporto13").addClass('btn-danger');


            $("#panel13").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton14(){
       var boton = $("#noReporto14").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto14").click(function(){

            $('#agregar14').hide(); //muestro mediante id
            $('#cuerpo14').hide(); //muestro mediante id
            $("#noReporto14").attr('value', 'Si Reportó');
             $("#noReporto14").removeClass('btn-danger');
             $("#noReporto14").addClass('btn-primary');
            $("#panel14").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto14").click(function(){

            $('#agregar14').show(); //muestro mediante id
            $('#cuerpo14').show(); //muestro mediante id
            $("#noReporto14").attr('value', 'No Reportó');
             $("#noReporto14").removeClass('btn-primary');
             $("#noReporto14").addClass('btn-danger');


            $("#panel14").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }

    function boton15(){
       var boton = $("#noReporto15").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto15").click(function(){

            $('#agregar15').hide(); //muestro mediante id
            $('#cuerpo15').hide(); //muestro mediante id
            $("#noReporto15").attr('value', 'Si Reportó');
             $("#noReporto15").removeClass('btn-danger');
             $("#noReporto15").addClass('btn-primary');
            $("#panel15").css("background-color","#B20000");
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto15").click(function(){

            $('#agregar15').show(); //muestro mediante id
            $('#cuerpo15').show(); //muestro mediante id
            $("#noReporto15").attr('value', 'No Reportó');
             $("#noReporto15").removeClass('btn-primary');
             $("#noReporto15").addClass('btn-danger');


            $("#panel15").css("background-color","#302E2E");
            
         });
       
    });

    }
       
    }



   
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