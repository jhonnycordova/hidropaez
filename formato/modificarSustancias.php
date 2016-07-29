<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
    $usuario = $_SESSION["usuario"];
    $fecha = $_GET["fecha"];
    $sistema = $_GET["sistema"];
    $idUsuario = $_GET['idUsuario'];
    
 
    
    $sql = ("SELECT * FROM empleados where usuario = '$usuario'");
    $result = pg_query($sql);
    $row = pg_fetch_array($result);
    $idUsuario = $row["id_empleado"];
    
    $sql2 = ("SELECT * from formato_sustancias where fecha = '$fecha' and id_sistema = '$sistema'");
    $result2 = pg_query($sql2);
    $row2 = pg_fetch_array($result2);

    $sql3 = ("SELECT * from formato_diario where fecha = '$fecha' and id_sistema = '$sistema'");
    $result3 = pg_query($sql3);
    $row3 = pg_fetch_array($result3);


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
    <title>Formatos</title>
    
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/bootstrap.css" rel="stylesheet">
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
                                        <span class="glyphicon glyphicon-align-left"></span><a href="#" > Formato Diario</a>
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
                <form class="form-horizontal" role="form" id="formulario" action="modificarSustancias2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Formato de Sustancias Químicas. Dia: <font color="red"><?php echo $row2['fecha']; ?></font></div></legend>

                    
                      <table border="1" >
                        <tr>
                          <td align="center" style="background-color:#302E2E;color:white;" colspan="9">
                            Reporte Diario de Sustancias Químicas de los Diferentes Sistemas de Potabilización
                          </td>
                           
                        </tr>
                        <tr>
                           <td align="center" style="background-color:grey;color:white;" colspan="9">
                              <?php echo $nombreSistema; ?>
                          </td>
                        </tr>
                        
                         <tr style="font-size:10pt; background-color:#E6E6E6;font-weight:bold;" align="center">
                           <td style="width:25%;" colspan="2">
                             Cantidad de Cilindros de Gas Cloro/Consumo Máximo de Sulfato/Horas Trabajadas
                           </td>
                           <td style="width:20%;">
                             <br>Relación
                           </td>
                           <td style="width:100px;">
                             Gas <br>Cloro
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
                             <br>Policloruro
                           </td>
                           <td style="width:80px;">
                             Gas Cloro (150 lb)
                           </td>

                         </tr>
                         <tr style="font-size:10pt;">
                           <td >
                             Llenos:
                           </td>
                           <td width="8%">
                             <input type="number" class="form-control input-sm-mio" name="cilindros_llenos" value="<?php echo $row2['cilindros_llenos'] ?>"> 
                             <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">
                             <input type="hidden" name="sistema" value="<?php echo $sistema;?>"> 
                             <input type="hidden" name="fecha" value="<?php echo $fecha;?>"> 
                           </td>
                            <td>
                              Recibidos (Kg)
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_gascloro" value="<?php echo $row2['recibido_gascloro'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_sulfato" value="<?php echo $row2['recibido_sulfato'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_cal" value="<?php echo $row2['recibido_cal'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_hipoclorito" value="<?php echo $row2['recibido_hipoclorito'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_poli" value="<?php echo $row2['recibido_poli'] ?>">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="recibido_clorolb" value="<?php echo $row2['recibido_clorolb'] ?>">
                            </td>

                         </tr>

                         <tr style="font-size:10pt;">
                           <td >
                             Vacios:
                           </td>
                           <td>
                             <input type="number" class="form-control input-sm-mio" name="cilindros_vacios" value="<?php echo $row2['cilindros_vacios'] ?>"> 
                           </td>
                            <td>
                              Consumo (Kg/día)
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="gasconsumido" value="<?php echo $row3['gasconsumido'] ?>" readonly>
                            </td>
                            <td>
                               <input type="number" class="form-control input-sm-mio" step="0.01" name="sulconsumido" value="<?php echo $row3['sulconsumido'] ?>" readonly>
                            </td>
                            <td>
                               <input type="number" class="form-control input-sm-mio" step="0.01" name="calconsumido" value="<?php echo $row3['calconsumido'] ?>" readonly>
                            </td>
                            <td>
                               <input type="number" class="form-control input-sm-mio" step="0.01" name="hipoclorito" value="<?php echo $row3['hipoclorito'] ?>" readonly>
                            </td>
                            <td>
                               <input type="number" class="form-control input-sm-mio" step="0.01" name="policloruro" value="<?php echo $row3['policloruro'] ?>" readonly>
                            </td>
                            <td>
                               <input type="number" class="form-control input-sm-mio" step="0.01" name="gasclorolb" value="<?php echo $row3['gasclorolb'] ?>" readonly>
                            </td>

                         </tr>

                          <tr style="font-size:10pt;">
                           <td >
                             En Servicio:
                           </td>
                           <td>
                             <input type="number" class="form-control input-sm-mio" name="servicio" value="<?php echo $row2['servicio'] ?>"> 
                           </td>
                            <td>
                              Traspasos (Kg)
                            </td>
                              <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_gascloro" value="<?php echo $row2['traspasos_gascloro'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_sulfato" value="<?php echo $row2['traspasos_sulfato'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_cal" value="<?php echo $row2['traspasos_cal'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_hipoclorito" value="<?php echo $row2['traspasos_hipoclorito'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_poli" value="<?php echo $row2['traspasos_poli'] ?>">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="traspasos_clorolb" value="<?php echo $row2['traspasos_clorolb'] ?>">
                            </td>

                         </tr>

                         <tr style="font-size:10pt;">
                           <td >
                             Dañados:
                           </td>
                           <td>
                             <input type="number" class="form-control input-sm-mio" name="danado" value="<?php echo $row2['danado'] ?>"> 
                           </td>
                            <td>
                              Aplicación (Kg/h)
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_gascloro" value="<?php echo $row2['aplicacion_gascloro'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_sulfato" value="<?php echo $row2['aplicacion_sulfato'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_cal" value="<?php echo $row2['aplicacion_cal'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_hipoclorito" value="<?php echo $row2['aplicacion_hipoclorito'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_poli" value="<?php echo $row2['aplicacion_poli'] ?>">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="aplicacion_clorolb" value="<?php echo $row2['aplicacion_clorolb'] ?>">
                            </td>

                         </tr>

                         <tr style="font-size:10pt;">
                           <td >
                             Cons. Max.:
                           </td>
                           <td>
                             <input type="number" class="form-control input-sm-mio" name="consmax" value="<?php echo $row2['consmax'] ?>"> 

                           </td>
                            <td>
                              Saldo en Depósito (Kg)
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_gascloro" value="<?php echo $row2['saldo_gascloro'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_sulfato" value="<?php echo $row2['saldo_sulfato'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_cal" value="<?php echo $row2['saldo_cal'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_hipoclorito" value="<?php echo $row2['saldo_hipoclorito'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_poli" value="<?php echo $row2['saldo_poli'] ?>">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="saldo_clorolb" value="<?php echo $row2['saldo_clorolb'] ?>">
                            </td>

                         </tr>

                         <tr style="font-size:10pt;">
                           <td >
                             Ht.T.:
                           </td>
                           <td>
                             <input type="number" class="form-control input-sm-mio" name="ht" value="<?php echo $row3['ht'] ?>" readonly> 
                           </td>
                            <td>
                              Duración (días)
                            </td>
                              <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_gascloro" value="<?php echo $row2['duracion_gascloro'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_sulfato" value="<?php echo $row2['duracion_sulfato'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_cal" value="<?php echo $row2['duracion_cal'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_hipoclorito" value="<?php echo $row2['duracion_hipoclorito'] ?>"> 
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_poli" value="<?php echo $row2['duracion_poli'] ?>">
                            </td>
                            <td>
                              <input type="number" class="form-control input-sm-mio" step="0.01" name="duracion_clorolb" value="<?php echo $row2['duracion_clorolb'] ?>">
                            </td>

                         </tr>

                         </table>

                      <br>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">

                            <button type="submit" class="btn btn-primary">Modificar</button>
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
     <script src="../js/select2.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
     <script type="text/javascript">
      $(document).ready(function(){

      $('select').select2();
      });
      </script>

      <script type="text/javascript">
  
  function boton(){
      
    var boton = $("#noReporto").val();
    if (boton == 'No Reportó') {
      
      $(document).ready(function(){
        $("#noReporto").click(function(){

            $('#panel1').hide(600); 
            $('#panel2').hide(600); 
            $('#panel3').hide(600); 
            $('#panel4').hide(600); 
            $('#panel5').hide(600); 
            $('#panel6').hide(600); 
            $('#panel7').hide(600); 
            $('#panel8').hide(600); 
            $('#panel9').hide(600);
            $('#panel10').hide(600); 
            $('#titulo').hide(600); 
            $('#titulo2').hide(600); 
            
            $("#noReporto").attr('value', 'Si Reportó');
             $("#noReporto").removeClass('btn-danger');
             $("#noReporto").addClass('btn-primary');
           
            
         });
       
    });
    }else{
      
       $(document).ready(function(){
        $("#noReporto").click(function(){

            $('#panel1').show(600); 
            $('#panel2').show(600); 
            $('#panel3').show(600); 
            $('#panel4').show(600); 
            $('#panel5').show(600); 
            $('#panel6').show(600); 
            $('#panel7').show(600); 
            $('#panel8').show(600); 
            $('#panel9').show(600);
            $('#panel10').show(600);  
            $('#titulo').show(600); 
            $('#titulo2').show(600); 
            $("#noReporto").attr('value', 'No Reportó');
             $("#noReporto").removeClass('btn-primary');
             $("#noReporto").addClass('btn-danger');


            
            
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