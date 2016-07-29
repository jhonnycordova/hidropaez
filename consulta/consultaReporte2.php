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

   


   //Consular al formato Sustancias
    $sql2 = ("SELECT * from formato_sustancias where fecha = '$fecha' order by id_sistema asc");
    $result2 = pg_query($sql2);
    
    $num2 = pg_num_rows($result2);

     //Consular al formato Sustancias
    $sql3 = ("SELECT * from formato_diario where fecha = '$fecha' order by id_sistema asc ");
    $result3 = pg_query($sql3);
    

 

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
              
                if ($num2 > 0) {
                
             ?>
                <form class="form-horizontal" role="form" id="formulario" action="../reporte/reporteFinal2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Reporte Final. Dia: <font color="red"><?php echo $fecha; ?></font></div></legend>

                      <table class="table table-bordered">
                        <tr>
                          <td colspan="8" align="center" style="background-color:#302E2E;color:white;">
                              Gerencia General Técnica. Operaciones. Reporte de los distintos sistemas de potabilización
                          </td>
                        </tr>
                        <tr align="center" style="background-color:#B8B8B8;font-size:10pt;font-weight:bold;">
                          <td>
                            Sistema de Potabilización
                          </td>
                          <td width="15%">
                            Relación
                          </td>
                          <td>
                            Gas Cloro (2000lb)
                          </td>
                          <td>
                            Sulfato de Aluminio
                          </td>
                          <td>
                            Cal Hidratada
                          </td>
                          <td>
                            Hipoclorito de Calcio
                          </td>
                          <td>
                            Policloruro
                          </td>
                          <td>
                            Gas Cloro (150lb)
                          </td>
                          

                        </tr>
                      <?php 

                        while ($row2 = pg_fetch_array($result2)) {
                          while ($row3 = pg_fetch_array($result3)) {
                              if ($row2["id_sistema"] == 1) {
                                $nombreSistema = "San Juan de los Morros";
                              }
                               if ($row2["id_sistema"] == 2) {
                                $nombreSistema = "Calabozo";
                              }
                               if ($row2["id_sistema"] == 3) {
                                $nombreSistema = "Altagracia de Orituco";
                              }
                              if ($row2["id_sistema"] == 4) {
                                $nombreSistema = "Valle de la Pascua";
                              }
                              if ($row2["id_sistema"] == 5) {
                                $nombreSistema = "Tucupido";
                              }
                              if ($row2["id_sistema"] == 6) {
                                $nombreSistema = "San José de Guaribe";
                              }
                              if ($row2["id_sistema"] == 7) {
                                $nombreSistema = "Zaraza";
                              }
                              if ($row2["id_sistema"] == 8) {
                                $nombreSistema = "El Socorro";
                              }
                              if ($row2["id_sistema"] == 9) {
                                $nombreSistema = "Santa María de Ipire";
                              }
                              if ($row2["id_sistema"] == 10) {
                                $nombreSistema = "Espino";
                              }
                              if ($row2["id_sistema"] == 11) {
                                $nombreSistema = "Guardatinajas";
                              }
                              if ($row2["id_sistema"] == 12) {
                                $nombreSistema = "San Rafael de Laya";
                              }
                              if ($row2["id_sistema"] == 13) {
                                $nombreSistema = "Chaguaramas";
                              }
                              if ($row2["id_sistema"] == 14) {
                                $nombreSistema = "Sombrero Galería";
                              }
                              if ($row2["id_sistema"] == 15) {
                                $nombreSistema = "Sombrero Est. Banco Obrero";
                              }
                            if ($row3["reporte"]== 't') {
                              
                            
                       ?>

                        <tr align="center" style="font-size:10pt;">
                          <td rowspan="2" style="font-weight:bold;background-color:#E6E6E6">
                            <br><?php echo $nombreSistema ?>
                          </td>
                          <td align="left" style="font-weight:bold">
                            Duración (días)
                          </td>
                         <?php if ($row2["id_sistema"]==15 || $row2["id_sistema"]==11) {
                           
                         ?>
                         <td> - </td>
                         <?php }else{

                           ?>



                          <?php if (($row2["duracion_gascloro"]<7.0) && ($row3["gasconsumido"]>0)) {?>
                          <td style="background-color:red;color:white;">
                            <?php echo $row2["duracion_gascloro"] ?>
                          </td>
                          <?php }else{ ?>
                          <td>
                            <?php echo $row2["duracion_gascloro"] ?>
                          </td>
                          <?php } ?>

                          <?php } ?>

                          <?php 
                          if ($row2["id_sistema"] == 12 || $row2["id_sistema"] == 14 || $row2["id_sistema"] == 15 ) {
                            
                           ?>
                           <td>
                             -
                           </td>
                           <?php }else{

                            ?>
                          
                          <?php if (($row2["duracion_sulfato"]<7.0) && ($row3["sulconsumido"]>0)) {?>
                          <td style="background-color:red;color:white;">
                            <?php echo $row2["duracion_sulfato"] ?>
                          </td>
                          <?php }else{ ?>
                          <td>
                            <?php echo $row2["duracion_sulfato"] ?>
                          </td>
                          <?php } ?>

                          <?php } ?>
                          
                          <td>
                            <?php echo $row2["duracion_cal"] ?>
                          </td>
                          <td>
                            <?php echo $row2["duracion_hipoclorito"] ?>
                          </td>
                           <?php if ($row2["duracion_poli"]==0 && $row2["saldo_poli"]==0) {

                             ?>
                             <td >
                              -
                            </td>
                             <?php }else{

                               ?>
                               <td>
                                 <?php echo $row2["duracion_poli"] ?>
                               </td>
                            <?php } ?>
                          
                          
                            <?php if (($row2["duracion_clorolb"]<7.0) && ($row2["id_sistema"]== 15)) {

                             ?>
                             <td style="background-color:red;color:white;">
                            <?php echo $row2["duracion_clorolb"] ?>
                            </td>
                             <?php }else{

                               ?>
                               <td>
                                 <?php echo $row2["duracion_clorolb"] ?>
                               </td>
                            <?php } ?>
                          
                         

                        </tr>
                        <tr align="center" style="font-size:10pt;border-bottom-style:solid;border-bottom-color:grey;border-bottom-width:2px">
                          <td align="left" style="font-weight:bold">
                            Saldo (Kg)
                          </td>
                          <?php if ($row2["id_sistema"]==15 || $row2["id_sistema"]==11) {
                            
                           ?>
                           <td>-</td>
                           <?php }else{

                             ?>
                          <td>
                            <?php echo $row2["saldo_gascloro"] ?>
                          </td>
                          <?php } ?>
                          <?php 
                            if ($row2["id_sistema"] == 12 || $row2["id_sistema"] == 14 || $row2["id_sistema"] == 15 ) {
                              
                           ?>
                           <td> - </td>
                           <?php }else{

                             ?>
                              <td>
                                <?php echo $row2["saldo_sulfato"] ?>
                              </td>
                             <?php } ?>
                         
                          <td>
                            <?php echo $row2["saldo_cal"] ?>
                          </td>
                          <td>
                            <?php echo $row2["saldo_hipoclorito"] ?>
                          </td>
                            <?php if ($row2["saldo_poli"]==0) {

                             ?>
                             <td >
                              -
                            </td>
                             <?php }else{

                               ?>
                               <td>
                                 <?php echo $row2["saldo_poli"] ?>
                               </td>
                            <?php } ?>
                          <td>
                            <?php echo $row2["saldo_clorolb"] ?>
                          </td>
                          
                        </tr>

                        <?php 
                          }else{


                         ?>
                        <tr align="center" style="font-size:10pt;border-bottom-style:solid;border-bottom-color:grey;border-bottom-width:2px">
                          <td style="font-weight:bold;background-color:#E6E6E6">
                            <?php echo $nombreSistema ?>
                          </td>
                          <td colspan="7" style="color:red;background-color:#FFCCCC">
                            No Reportó. Se mantienen los valores del día anterior
                          </td>
                          
                        </tr>

                        <?php } ?>

                       <?php 
                          break;
                        }

                      }

                        ?>
                        </table>
                     
                         <div class="form-group" style="margin-left:0px;">
                            <div class="col-sm-offset-2 col-sm-5">
                              <div class="pull-right">
                                <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
                                <a href="consultaReporte.php" class="btn btn-primary">Atrás</a>
                                
                                <button type="submit" class="btn btn-danger">Reporte PDF</button>

                                
                              </div>
                            </div>
                          </div>


                            
                  </div>
              </div>
                    

                    </fieldset>
                </form>
                 <?php }else{
             ?>
                <div align="center" style="color:#330000"><font size="3"><b>No Hay Registro de Formatos de ese Día, No se puede generar Reporte</b></font></div>
                <br>
                <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-6">
                          <div class="pull-right">
                            <a href="consultaReporte.php" class="btn btn-primary">Atrás</a>
                             
                            
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