<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    include("../funciones/funciones.php");
    $usuario = $_SESSION["usuario"];
 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);
    $idUsuario = $row['id_empleado'];

    
    
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
      <link href="../css/datepicker.css" rel="stylesheet">
      <link href="../css/select2.css" rel="stylesheet">
      
      


       <link href='../img/icono.ico' rel='shortcut icon' type='image/x-icon' />
  </head>
  <body onload=" boton(); boton2(); boton3(); boton4(); boton5(); boton6(); boton7(); boton8(); boton9(); boton10(); boton11(); boton12(); boton13(); boton14(); boton15();" >
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
               <form class="form-horizontal" role="form" id="formulario" name="formulario" action="formatoParametro2.php" method="post">
                  <legend><div class="titulo-form">Formato de Parámetros Fisicoquímicos</div></legend>

                      <div class="form-group" style="margin-left:300px;">
                        <label class="col-sm-1 control-label" for="textinput">Fecha:</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="" class="form-control" value="<?php echo date("d/m/Y");?>" name="fecha" id="fecha" >
                        </div>
                      </div>
                      <!-- Sistema de San Juan de los Morros -->
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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJuan" id="cloroSanJuan" onchange="mostrarMensajeCloro('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJuan" id="turcrudaSanJuan" onchange="mostrarMensajeTurcruda('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJuan" id="turfiltradaSanJuan" onchange="mostrarMensajeTurfiltrada('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJuan" id="colorcrudaSanJuan" onchange="mostrarMensajeColorcruda('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJuan" id="colorfiltradaSanJuan" onchange="mostrarMensajeColorfiltrada('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJuan" id="phcrudaSanJuan" onchange="mostrarMensajePhcruda('SanJuan')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJuan" id="phfiltradaSanJuan" onchange="mostrarMensajePhfiltrada('SanJuan')">
                                          <input type="hidden"  name="idUsuario" value="<?php echo $idUsuario; ?>">
                                        </td>
                                      </tr>
                                      <tr id="mensajeSanJuan" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSanJuan" readonly="">
                                        </td>
                                        
                                      </tr>
                                     
                                      
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>
                      

                      <!-- Sistema de Calabozo -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroCalabozo" id="cloroCalabozo" onchange="mostrarMensajeCloro('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaCalabozo" id="turcrudaCalabozo" onchange="mostrarMensajeTurcruda('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaCalabozo" id="turfiltradaCalabozo" onchange="mostrarMensajeTurfiltrada('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaCalabozo" id="colorcrudaCalabozo" onchange="mostrarMensajeColorcruda('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaCalabozo" id="colorfiltradaCalabozo" onchange="mostrarMensajeColorfiltrada('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaCalabozo" id="phcrudaCalabozo" onchange="mostrarMensajePhcruda('Calabozo')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaCalabozo" id="phfiltradaCalabozo" onchange="mostrarMensajePhfiltrada('Calabozo')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeCalabozo" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaCalabozo" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                       <!-- Sistema de Altagracia de Orituco -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroAltagracia" id="cloroAltagracia" onchange="mostrarMensajeCloro('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaAltagracia" id="turcrudaAltagracia" onchange="mostrarMensajeTurcruda('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaAltagracia" id="turfiltradaAltagracia" onchange="mostrarMensajeTurfiltrada('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaAltagracia" id="colorcrudaAltagracia" onchange="mostrarMensajeColorcruda('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaAltagracia" id="colorfiltradaAltagracia" onchange="mostrarMensajeColorfiltrada('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaAltagracia" id="phcrudaAltagracia" onchange="mostrarMensajePhcruda('Altagracia')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaAltagracia" id="phfiltradaAltagracia" onchange="mostrarMensajePhfiltrada('Altagracia')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeAltagracia" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaAltagracia" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Valle de la Pascua -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroVallePascua" id="cloroVallePascua" onchange="mostrarMensajeCloro('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaVallePascua" id="turcrudaVallePascua" onchange="mostrarMensajeTurcruda('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaVallePascua" id="turfiltradaVallePascua" onchange="mostrarMensajeTurfiltrada('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaVallePascua" id="colorcrudaVallePascua" onchange="mostrarMensajeColorcruda('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaVallePascua" id="colorfiltradaVallePascua" onchange="mostrarMensajeColorfiltrada('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaVallePascua" id="phcrudaVallePascua" onchange="mostrarMensajePhcruda('VallePascua')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaVallePascua" id="phfiltradaVallePascua" onchange="mostrarMensajePhfiltrada('VallePascua')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeVallePascua" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaVallePascua" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Tucupido -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroTucupido" id="cloroTucupido" onchange="mostrarMensajeCloro('Tucupido')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaTucupido" id="turcrudaTucupido" onchange="mostrarMensajeTurcruda('Tucupido')" >
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaTucupido" id="turfiltradaTucupido" onchange="mostrarMensajeTurfiltrada('Tucupido')" >
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaTucupido" id="colorcrudaTucupido" onchange="mostrarMensajeColorcruda('Tucupido')" >
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaTucupido" id="colorfiltradaTucupido" onchange="mostrarMensajeColorfiltrada('Tucupido')" >
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaTucupido" id="phcrudaTucupido" onchange="mostrarMensajePhcruda('Tucupido')" >
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaTucupido" id="phfiltradaTucupido" onchange="mostrarMensajePhfiltrada('Tucupido')" >
                                        </td>
                                      </tr>
                                      <tr id="mensajeTucupido" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaTucupido" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de San José de Guaribe -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanJose" id="cloroSanJose" onchange="mostrarMensajeCloro('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanJose" id="turcrudaSanJose" onchange="mostrarMensajeTurcruda('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanJose" id="turfiltradaSanJose" onchange="mostrarMensajeTurfiltrada('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanJose" id="colorcrudaSanJose" onchange="mostrarMensajeColorcruda('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanJose" id="colorfiltradaSanJose" onchange="mostrarMensajeColorfiltrada('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanJose" id="phcrudaSanJose" onchange="mostrarMensajePhcruda('SanJose')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanJose" id="phfiltradaSanJose" onchange="mostrarMensajePhfiltrada('SanJose')">
                                        </td>
                                      </tr>
                                       <tr id="mensajeSanJose" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSanJose" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>


                      <!-- Sistema de Zaraza -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroZaraza" id="cloroZaraza" onchange="mostrarMensajeCloro('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaZaraza" id="turcrudaZaraza" onchange="mostrarMensajeTurcruda('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaZaraza" id="turfiltradaZaraza" onchange="mostrarMensajeTurfiltrada('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaZaraza" id="colorcrudaZaraza" onchange="mostrarMensajeColorcruda('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaZaraza" id="colorfiltradaZaraza" onchange="mostrarMensajeColorfiltrada('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaZaraza" id="phcrudaZaraza" onchange="mostrarMensajePhcruda('Zaraza')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaZaraza" id="phfiltradaZaraza" onchange="mostrarMensajePhfiltrada('Zaraza')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeZaraza" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaZaraza" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                       <!-- Sistema de El Socorro -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSocorro" id="cloroSocorro" onchange="mostrarMensajeCloro('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSocorro" id="turcrudaSocorro" onchange="mostrarMensajeTurcruda('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSocorro" id="turfiltradaSocorro" onchange="mostrarMensajeTurfiltrada('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSocorro" id="colorcrudaSocorro" onchange="mostrarMensajeColorcruda('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSocorro" id="colorfiltradaSocorro" onchange="mostrarMensajeColorfiltrada('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSocorro" id="phcrudaSocorro" onchange="mostrarMensajePhcruda('Socorro')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSocorro" id="phfiltradaSocorro" onchange="mostrarMensajePhfiltrada('Socorro')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeSocorro" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSocorro" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Santa María de Ipire -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSantaMaria" id="cloroSantaMaria" onchange="mostrarMensajeCloro('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSantaMaria" id="turcrudaSantaMaria" onchange="mostrarMensajeTurcruda('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSantaMaria" id="turfiltradaSantaMaria" onchange="mostrarMensajeTurfiltrada('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSantaMaria" id="colorcrudaSantaMaria" onchange="mostrarMensajeColorcruda('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSantaMaria" id="colorfiltradaSantaMaria" onchange="mostrarMensajeColorfiltrada('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSantaMaria" id="phcrudaSantaMaria" onchange="mostrarMensajePhcruda('SantaMaria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSantaMaria" id="phfiltradaSantaMaria" onchange="mostrarMensajePhfiltrada('SantaMaria')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeSantaMaria" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSantaMaria" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Espino -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroEspino" id="cloroEspino" onchange="mostrarMensajeCloro('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaEspino" id="turcrudaEspino" onchange="mostrarMensajeTurcruda('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaEspino" id="turfiltradaEspino" onchange="mostrarMensajeTurfiltrada('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaEspino" id="colorcrudaEspino" onchange="mostrarMensajeColorcruda('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaEspino" id="colorfiltradaEspino" onchange="mostrarMensajeColorfiltrada('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaEspino" id="phcrudaEspino" onchange="mostrarMensajePhcruda('Espino')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaEspino" id="phfiltradaEspino" onchange="mostrarMensajePhfiltrada('Espino')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeEspino" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaEspino" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Guardatinajas -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroGuardatinajas" id="cloroGuardatinajas" onchange="mostrarMensajeCloro('Guardatinajas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaGuardatinajas" id="turcrudaGuardatinajas" onchange="mostrarMensajeTurcruda('Guardatinajas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaGuardatinajas" id="turfiltradaGuardatinajas" onchange="mostrarMensajeTurfiltrada('Guardatinajas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaGuardatinajas" id="colorcrudaGuardatinajas" onchange="mostrarMensajeColorcruda('Guardatinajas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaGuardatinajas" id="colorfiltradaGuardatinajas" onchange="mostrarMensajeColorfiltrada('Guardatinajas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaGuardatinajas" id="phcrudaGuardatinajas" onchange="mostrarMensajePhcruda('Guardatinajas')"> 
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaGuardatinajas" id="phfiltradaGuardatinajas" onchange="mostrarMensajePhfiltrada('Guardatinajas')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeGuardatinajas" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaGuardatinajas" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de San Rafael de Laya -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSanRafael" id="cloroSanRafael" onchange="mostrarMensajeCloro('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSanRafael" id="turcrudaSanRafael" onchange="mostrarMensajeTurcruda('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSanRafael" id="turfiltradaSanRafael" onchange="mostrarMensajeTurfiltrada('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSanRafael" id="colorcrudaSanRafael" onchange="mostrarMensajeColorcruda('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSanRafael" id="colorfiltradaSanRafael" onchange="mostrarMensajeColorfiltrada('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSanRafael" id="phcrudaSanRafael" onchange="mostrarMensajePhcruda('SanRafael')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSanRafael" id="phfiltradaSanRafael" onchange="mostrarMensajePhfiltrada('SanRafael')">
                                        </td>
                                      </tr>
                                       <tr id="mensajeSanRafael" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSanRafael" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Chaguaramas -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroChaguaramas" id="cloroChaguaramas" onchange="mostrarMensajeCloro('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaChaguaramas" id="turcrudaChaguaramas" onchange="mostrarMensajeTurcruda('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaChaguaramas" id="turfiltradaChaguaramas" onchange="mostrarMensajeTurfiltrada('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaChaguaramas" id="colorcrudaChaguaramas" onchange="mostrarMensajeColorcruda('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaChaguaramas" id="colorfiltradaChaguaramas" onchange="mostrarMensajeColorfiltrada('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaChaguaramas" id="phcrudaChaguaramas" onchange="mostrarMensajePhcruda('Chaguaramas')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaChaguaramas" id="phfiltradaChaguaramas" onchange="mostrarMensajePhfiltrada('Chaguaramas')">
                                        </td>
                                      </tr>
                                       <tr id="mensajeChaguaramas" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaChaguaramas" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>


                      <!-- Sistema de Sombrero Galeria -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomGaleria" id="cloroSomGaleria" onchange="mostrarMensajeCloro('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomGaleria" id="turcrudaSomGaleria" onchange="mostrarMensajeTurcruda('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomGaleria" id="turfiltradaSomGaleria" onchange="mostrarMensajeTurfiltrada('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomGaleria" id="colorcrudaSomGaleria" onchange="mostrarMensajeColorcruda('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomGaleria" id="colorfiltradaSomGaleria" onchange="mostrarMensajeColorfiltrada('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomGaleria"  id="phcrudaSomGaleria" onchange="mostrarMensajePhcruda('SomGaleria')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomGaleria" id="phfiltradaSomGaleria" onchange="mostrarMensajePhfiltrada('SomGaleria')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeSomGaleria" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSomGaleria" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                      <!-- Sistema de Sombrero Banco Obrero -->


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
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="cloroSomObrero" id="cloroSomObrero" onchange="mostrarMensajeCloro('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turcrudaSomObrero" id="turcrudaSomObrero" onchange="mostrarMensajeTurcruda('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="turfiltradaSomObrero" id="turfiltradaSomObrero" onchange="mostrarMensajeTurfiltrada('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorcrudaSomObrero" id="colorcrudaSomObrero" onchange="mostrarMensajeColorcruda('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="colorfiltradaSomObrero" id="colorfiltradaSomObrero" onchange="mostrarMensajeColorfiltrada('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phcrudaSomObrero" id="phcrudaSomObrero" onchange="mostrarMensajePhcruda('SomObrero')">
                                        </td>
                                        <td>
                                          <input type="number" step="0.01" class="form-control" placeholder="0.00" name="phfiltradaSomObrero" id="phfiltradaSomObrero" onchange="mostrarMensajePhfiltrada('SomObrero')">
                                        </td>
                                      </tr>
                                      <tr id="mensajeSomObrero" style="display:none;">
                                        <td colspan="7" align="center">
                                          <input type="text" class="input-alert" value=" " id="alertaSomObrero" readonly="">
                                        </td>
                                        
                                      </tr>
                                    </table>     
                                </div>

                            </div>
                        </div>
                      </div>

                    <!-- fin de sistemas -->

                       <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">
                            <input type="button"  class="btn btn-primary" onclick="pregunta()" value="Registrar">
                            <button type="reset" class="btn btn-default">Limpiar</button>
                            
                          </div>
                        </div>
                      </div>
                      <a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="Click Para ir al Inicio de la Página" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

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
        <script src="../js/select2.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <!--Funcion para el botoncito para ir al inicio de la página -->
    <script type="text/javascript">
        $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
    </script>

    <script type="text/javascript">
        $('#fecha').datepicker({
         format: 'dd/mm/yyyy',
          startDate: '-3d'
      });
        $('select').select2();
    </script>

    <!-- Funciones para mostrar los mensajes -->
    <script type="text/javascript">

    function mostrarMensajeCloro(sistema){
      var sistema = sistema;
      var cloro = document.getElementById('cloro'+sistema).value;
      
      if (cloro>3) {
         $(document).ready(function(){
        
            $("#mensaje"+sistema).css("display","");
            $("#alerta"+sistema).attr('value', 'El Cloro Residual supera a (3.0). Límite aceptado por las normas. ');
            
         });
      
      }else{
         $(document).ready(function(){
            
            $("#mensaje"+sistema).css("display","none");
            
         });
      }

    }

    

      function mostrarMensajeTurfiltrada(sistema){
      var sistema = sistema;
      var turfiltrada = document.getElementById('turfiltrada'+sistema).value;
       if (turfiltrada>10) {
         $(document).ready(function(){
        
            $("#mensaje"+sistema).css("display","");
            $("#alerta"+sistema).attr('value', 'La Turbiedad Filtrada supera a (10). Límite aceptado por las normas. ');
            
         });
      
      }else{
         $(document).ready(function(){
            
            $("#mensaje"+sistema).css("display","none");
            
         });
      }
    }

   

    function mostrarMensajeColorfiltrada(sistema){
      var sistema = sistema;
      var colorfiltrada = document.getElementById('colorfiltrada'+sistema).value;
       if (colorfiltrada>25) {
         $(document).ready(function(){
        
            $("#mensaje"+sistema).css("display","");
            $("#alerta"+sistema).attr('value', 'El Color Filtrado supera a (25). Límite aceptado por las normas. ');
            
         });
      
      }else{
         $(document).ready(function(){
            
            $("#mensaje"+sistema).css("display","none");
            
         });
      }
    }

     

    function mostrarMensajePhfiltrada(sistema){
      var sistema = sistema;
      var phfiltrada = document.getElementById('phfiltrada'+sistema).value;
       if (phfiltrada>9) {
         $(document).ready(function(){
        
            $("#mensaje"+sistema).css("display","");
            $("#alerta"+sistema).attr('value', 'El Ph Filtrada supera a (9). Límite aceptado por las normas. ');
            
         });
      
      }else{
         $(document).ready(function(){
            
            $("#mensaje"+sistema).css("display","none");
            
         });
      }
    }

    </script>

    <script type="text/javascript">

    function pregunta(){
      if (confirm('¿Está Seguro de Enviar Estos Datos?  \n Si tiene Dudas, Cancele y Revise Nuevamente')) {
        document.formulario.submit();
      };
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