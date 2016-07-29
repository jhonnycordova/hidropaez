<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    $usuario = $_SESSION["usuario"];
    $fecha = $_POST["fecha"];
 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);
    $idUsuario = $row["id_empleado"];

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
    <title>Consultas</title>
    
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/bootstrap.css" rel="stylesheet">
      <link href="../css/boton.css" rel="stylesheet">  
       <link href='../img/icono.ico' rel='shortcut icon' type='image/x-icon' />
  </head>
  <body >
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
        <li><a href="../formato/home.php">Inicio</a></li>
        <li ><a href="../formato/formato.php">Llenar Formato</a></li>
         <li class="active"><a href="#">Consultas</a></li>
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
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-align-left"></span><a href="../formato/formato.php" > Formato Diario</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file"></span><a href="../formato/formatoParametro.php" > Fto. Parámetros Fisicoquímicos</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-filter"></span><a href="../formato/sustancias.php" > Fto. Sustancias Químicas</a>
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
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-align-justify"></span><a href=""> Consulta Diaria</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt"></span><a href="consultaParametros.php"> Cta. Parámetros Fisicoquímicos</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-zoom-in"></span><a href="consultaSustancias.php"> Cta. Sustancias Químicas</a> 
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="consultaReporte.php"> Reporte Final</a> 
                                    </td>
                                </tr>
                              <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-map-marker"></span><a href="normas.pdf"> Normas del Agua</a> 
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
             <?php 
                if ($numSanJuan > 0) {
                
             ?>
                <form class="form-horizontal" role="form" id="formulario" action="../reporte/reporteParametros2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Formato de Parámetros Fisicoquímicos. Dia: <font color="red"><?php echo $rowSanJuan['fecha']; ?></font></div></legend>

                      <table class="table table-bordered" >
                        <tr>
                          <td colspan="8" align="center" bgcolor="#302E2E" style="color:white">
                           Reporte Diario de los Parámetros Fisicoquímicos de los Diferentes Sistemas de Potabilización del Estado Guárico.
                          </td>
                        </tr>
                        <tr>
                          <td rowspan="2" align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <br><b>Sistemas</b>
                          </td>
                          <td rowspan="2" align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <br><b>Color Residual (ppm)</b>
                          </td>
                          <td colspan="2" align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <b>Turbiedad (NTU)</b>
                          </td>
                          <td colspan="2" align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                           <b>Color (Unidades Pt -Co)</b>
                          </td>
                          <td colspan="2" align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                           <b>pH</b>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <b>Cruda</b>
                          </td>
                          <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                           <b> Filtrada</b>
                          </td>
                           <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <b>Cruda</b>
                          </td>
                          <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <b> Filtrada</b>
                          </td>
                           <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                           <b>Cruda</b>
                          </td>
                          <td align="center" bgcolor="#D8D8D8" style="border: 1px solid #818181;">
                            <b> Filtrada</b>
                          </td>
                        </tr>
                        <tr >
                          <td align="center" bgcolor="white">
                            <b>San Juan de los Morros</b>
                          </td>
                          <?php 
                            if ($rowSanJuan['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJuan['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                            
                        </tr>
                        <tr>
                          <td align="center" bgcolor="white">
                            <b>Calabozo</b>
                          </td>

                          <?php 
                            if ($rowCalabozo['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowCalabozo['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>

                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Altagracia de Orituco</b>
                          </td>

                          <?php 
                            if ($rowAltagracia['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowAltagracia['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Valle de la Pascua</b>
                          </td>

                          <?php 
                            if ($rowVallePascua['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowVallePascua['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>

                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Tucupido</b>
                          </td>
                          <?php 
                            if ($rowTucupido['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowTucupido['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>San José de Guaribe</b>
                          </td>
                          <?php 
                            if ($rowSanJose['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanJose['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>

                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Zaraza</b>
                          </td>
                          <?php 
                            if ($rowZaraza['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowZaraza['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>El Socorro</b>
                          </td>
                          <?php 
                            if ($rowSocorro['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSocorro['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Santa María de Iripe</b>
                          </td>
                          <?php 
                            if ($rowSantaMaria['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSantaMaria['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Espino</b>
                          </td>
                          <?php 
                            if ($rowEspino['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowEspino['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Guardatinajas</b>
                          </td>
                          <?php 
                            if ($rowGuardatinajas['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowGuardatinajas['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>San Rafael de Laya</b>
                          </td>
                          <?php 
                            if ($rowSanRafael['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSanRafael['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Chaguaramas</b>
                          </td>
                          <?php 
                            if ($rowChaguaramas['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowChaguaramas['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Sombrero Galería</b>
                          </td>
                          <?php 
                            if ($rowSomGaleria['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomGaleria['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                          <tr>
                          <td align="center" bgcolor="white">
                            <b>Sombrero Est. Bco. Obrero
                            </b>
                          </td>
                          <?php 
                            if ($rowSomObrero['reporte']=='t') {
                              # code...
                            
                           ?>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['cloro']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['turcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['turfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['colorcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['colorfiltrada']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['phcruda']; ?>
                           </td>
                           <td align="center" bgcolor="white">
                              <?php echo $rowSomObrero['phfiltrada']; ?>
                           </td>

                           <?php 
                            }else{


                            ?>
                            <td class="danger" align="center" style="color: red" colspan="7">
                              No Reportó
                            </td>

                            <?php 
                              }
                             ?>
                        </tr>
                      </table>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">
                            <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
                            <a href="consultaParametros.php" class="btn btn-primary">Atrás</a>
                             <?php echo "<a href='../formato/modificarParametros.php?fecha=$fecha&idUsuario=$idUsuario' class='btn btn-primary'>Modificar</a>" ?>
                            <button type="submit" class="btn btn-danger">Reporte PDF</button>

                            
                          </div>
                        </div>
                      </div>

                     

                    </fieldset>
                </form>
                 <?php }else{
             ?>
                <div align="center" style="color:#330000"><font size="3"><b>No Hay Registro de Formato de Parámetros Fisicoquímicos para ese Día</b></font></div>
                <br>
                <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-6">
                          <div class="pull-right">
                            <a href="consultaParametros.php" class="btn btn-primary">Atrás</a>
                             
                            
                          </div>
                        </div>
                      </div>

                <?php } ?>
          
                

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