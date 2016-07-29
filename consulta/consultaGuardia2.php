<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    $usuario = $_SESSION["usuario"];
    $fecha = $_POST["fecha"];
    $sistema = $_POST["sistema"];
 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);

    $sql2 = ("SELECT * from formato_diario where fecha = '$fecha' and id_sistema = '$sistema'");
    $result2 = pg_query($sql2);
    $row2 = pg_fetch_array($result2);
    $num2 = pg_num_rows($result2);




    //dando nombre a los sistemas
    if ($sistema == 1) {
      $nombreSistema = "San Juan de los Morros";
    }
     if ($sistema == 2) {
      $nombreSistema = "Calabozo";
    }
     if ($sistema == 3) {
      $nombreSistema = "Altagracia de Orituco";
    }
    if ($sistema == 4) {
      $nombreSistema = "Valle de la Pascua";
    }
    if ($sistema == 5) {
      $nombreSistema = "Tucupido";
    }
    if ($sistema == 6) {
      $nombreSistema = "San José de Guaribe";
    }
    if ($sistema == 7) {
      $nombreSistema = "Zaraza";
    }
    if ($sistema == 8) {
      $nombreSistema = "El Socorro";
    }
    if ($sistema == 9) {
      $nombreSistema = "Santa María de Ipire";
    }
    if ($sistema == 10) {
      $nombreSistema = "Espino";
    }
    if ($sistema == 11) {
      $nombreSistema = "Guardatinajas";
    }
    if ($sistema == 12) {
      $nombreSistema = "San Rafael de Laya";
    }
    if ($sistema == 13) {
      $nombreSistema = "Chaguaramas";
    }
    if ($sistema == 14) {
      $nombreSistema = "Sombrero Galería";
    }
    if ($sistema == 15) {
      $nombreSistema = "Sombrero Est. Banco Obrero";
    }

    
    
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
      <link href="../css/select2.css" rel="stylesheet"> 
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
                if ($num2 >0) {
                
                
             ?>
                 <form class="form-horizontal" role="form" id="formulario" action="../reporte/reporteGuardia2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Formato Diario. Dia: <font color="red"><?php echo $row2['fecha']; ?></font></div></legend>

                      <!-- Text input-->
                      <div class="form-group" >
                       <label class="col-sm-1 control-label" for="textinput">Sistema:</label>
                       <div class="col-sm-4">
                            <select style="width:100%" name="sistema" id="sistema">
                      
                            <option value="<?php echo $sistema; ?>"><?php echo $nombreSistema; ?></option>
                            
                          </select>
                        </div>

                        <label class="col-sm-1 control-label" for="textinput">Fecha:</label>
                        <div class="col-sm-3">
                          <input type="date" placeholder="" class="form-control" value="<?php echo $row2[fecha];?>" name="fecha" id="fecha" readonly >
                        </div>
                        
                      </div>
                      <?php 
                          if ($row2[reporte] == 't') {
                           
                       ?>
                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Ht:</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="ht" id="ht" value="<?php echo $row2[ht]; ?>" readonly>
                        </div>
                        <label class="col-sm-3 control-label" for="textinput">Sulfato de Al Consumido (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="sulconsumido" id="sulconsumido" value="<?php echo $row2[sulconsumido]; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Gas Cloro Consumido 2000lb (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="gasconsumido" id="gasconsumido" value="<?php echo $row2[gasconsumido]; ?>" readonly>
                        </div>
                        <label class="col-sm-3 control-label" for="textinput">Cal Consumida (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="calconsumido" id="calconsumido" value="<?php echo $row2[calconsumido]; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Hipoclorito (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="hipoclorito" id="hipoclorito" value="<?php echo $row2[hipoclorito]; ?>" readonly>
                        </div>
                        <label class="col-sm-3 control-label" for="textinput">Policloruro (L):</label>
                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="policloruro" id="policloruro" value="<?php echo $row2[policloruro]; ?>" readonly>
                              
                            </div>
                      </div>


                         

                         <div class="form-group">
                            
                          
                             <label class="col-sm-3 control-label" for="textinput">Gas Cloro 150lb (Kg):</label>
                              <div class="col-sm-3">
                                <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="gasclorolb" id="gasclorolb" value="<?php echo $row2[gasclorolb]; ?>" readonly >
                              </div>
                              <label class="col-sm-3 control-label" style="margin-top:-20px;" for="textinput"><br>Falla:</label>
                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="Eléctrica" class="form-control" name="fallaelectrica" id="fallaelectrica" value="<?php echo $row2[fallaelectrica]; ?>" readonly>
                              <input type="number"  step="0.01" placeholder="Mecánica" class="form-control" name="fallamecanica" id="fallamecanica" value="<?php echo $row2[fallamecanica]; ?>" readonly>
                            </div>
                        
                          
                            
                        </div>

                         <div class="form-group" >
                            
                            
                            
                        </div>


                        <div class="titulo1-form"><b>Producción (m<sup>3</sup>)</b></div>
                         <div class="form-group">
                           
                            <div class="col-sm-3">
                             <input type="number"  step="0.01" placeholder="Cruda" class="form-control" name="procruda" id="procruda" value="<?php echo $row2[procruda]; ?>" readonly>
                              
                            </div>

                           
                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="C. acum." class="form-control" name="procacum" id="procacum" value="<?php echo $row2[procacum]; ?>" readonly>
                              
                            </div>

                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="Potabilizada" class="form-control" name="propota" id="propota" value="<?php echo $row2[propota]; ?>" readonly>
                              
                            </div>
                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="P. acum." class="form-control" name="propacum" id="propacum" value="<?php echo $row2[propacum]; ?>" readonly>
                              
                            </div>
                            
                            
                        </div>

                        <div class="titulo1-form"><b>Observaciones</b></div>
                         <div class="form-group">
                           
                            <textarea class="form-control" rows="3" name="observaciones" id="observaciones" readonly=""><?php echo $row2["observaciones"]; ?></textarea>
                        </div>

                              <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-5">
                                    <div class="pull-right">
                                      <a href="consultaGuardia.php" class="btn btn-primary">Atrás</a>
                                     <?php echo "<a href='../formato/modificarFormato.php?fecha=$fecha&sistema=$sistema' class='btn btn-primary'>Modificar</a>" ?>
                                        <button type="submit" class="btn btn-danger">Reporte PDF</button>

                                      
                                    </div>
                                  </div>
                                </div>

                        <?php 
                          }else{


                         ?>
                         <div align="center" style="color:red; font-weight:bold; font-size:12pt;">Este Sistema No reportó este día</div>
                            <div class="form-group" >
                              <div class="col-sm-offset-2 col-sm-5">
                                <div class="pull-right">
                                <br>
                                  <a href="consultaGuardia.php" class="btn btn-primary">Atrás</a>
                                   <?php echo "<a href='../formato/modificarFormato.php?fecha=$fecha&sistema=$sistema' class='btn btn-primary'>Modificar</a>" ?>
                                 
                                </div>
                              </div>
                            </div>

                         <?php 
                          }
                          ?>
                       
                

                    </fieldset>
                </form>
          
          <?php }else{
             ?>
                <div align="center" style="color:#330000"><font size="3"><b>No Hay Registro de Formato Diario para ese Día</b></font></div>
                <br>
                <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-6">
                          <div class="pull-right">
                            <a href="consultaGuardia.php" class="btn btn-primary">Atrás</a>
                             
                            
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
     <script src="../js/select2.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/boton.js"></script>
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