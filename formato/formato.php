<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("../conex.php");
    include("seguridad.php");
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
      <link href="../css/select2.css" rel="stylesheet">
      <link href="../css/datepicker.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/alertify.core.css" />
      <link rel="stylesheet" href="../css/alertify.default.css" />
       <link href='../img/icono.ico' rel='shortcut icon' type='image/x-icon' />
  </head>
  <body onload="boton();">
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
                <form class="form-horizontal" role="form" id="formulario" action="formato2.php" method="post">
                    <fieldset>

                      <!-- Nombre del Formulario -->
                      <legend><div class="titulo-form">Formato Diario</div></legend>

                      <!-- Text input-->
                       <div class="form-group">
                        <label class="col-sm-3 control-label" for="textinput">Planta:</label>
                        <div class="col-sm-4" style="margin-left:-152px;">
                            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
                            <select style="width:100%" name="sistema" id="sistema">
                      
                           
                            <option value="1">San Juan de los Morros</option>
                            <option value="2">Calabozo</option>
                            <option value="3">Altagracia de Orituco</option>
                            <option value="4">Valle de la Pascua</option>
                            <option value="5">Tucupido</option>
                            <option value="6">San José de Guaribe</option>
                            <option value="7">Zaraza</option>
                            <option value="8">El Socorro</option>
                            <option value="9">Santa María de Ipire</option>
                            <option value="10">Espino</option>
                            <option value="11">Guardatinajas</option>
                            <option value="12">San Rafael de Laya</option>
                            <option value="13">Chaguaramas</option>
                            <option value="14">Sombrero Galería</option>
                            <option value="15">Sombrero Est.Banco Obrero</option>
                          </select>
                        </div>

                        <label class="col-sm-1 control-label" for="textinput">Fecha:</label>
                        <div class="col-sm-3">
                          <input type="text" placeholder="" class="form-control" value="<?php echo date("d/m/Y");?>" name="fecha" id="fecha" >
                        </div>

                        <div class="col-sm-3">
                          <input type="text" class="btn btn-danger " size="7" id="noReporto" name="noReporto" value="No Reportó" onclick="boton()" readonly></input>
                        </div>
                      </div>
                      <hr>
                      <!-- Aqui empieza los input-->
                      <div class="form-group" id="panel1">
                        <label class="col-sm-3 control-label" for="textinput" >Ht:</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="ht" id="ht">
                        </div>
                        <label class="col-sm-3 control-label" for="textinput">Sulfato de Al Consumido (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="sulconsumido" id="sulconsumido">
                        </div>
                      </div>

                      <div class="form-group" id="panel2">
                        <label class="col-sm-3 control-label" for="textinput">Gas Cloro Consumido 2000lb (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="gasconsumido" id="gasconsumido">
                        </div>
                        <label class="col-sm-3 control-label" for="textinput">Cal Consumida (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="calconsumido" id="calconsumido">
                        </div>
                      </div>

                      <div class="form-group" id="panel3">
                        <label class="col-sm-3 control-label" for="textinput">Hipoclorito (Kg):</label>
                        <div class="col-sm-3">
                          <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="hipoclorito" id="hipoclorito">
                        </div>
                         <label class="col-sm-3 control-label" for="textinput">Policloruro (L):</label>
                              <div class="col-sm-3">
                                <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="policloruro" id="policloruro">
                              </div>
                      </div>


                         <div class="form-group" id="panel4">
                           
                              <label class="col-sm-3 control-label" for="textinput">Gas Cloro 150lb (Kg):</label>
                              <div class="col-sm-3">
                                <input type="number"  step="0.01" placeholder="0.00" class="form-control" name="gasclorolb" id="gasclorolb">
                              </div>
                             <label class="col-sm-3 control-label" style="margin-top:-20px;" for="textinput"><br>Falla:</label>
                            <div class="col-sm-3">
                              <input type="number"  step="0.01" placeholder="Eléctrica" class="form-control" name="fallaelectrica" id="fallaelectrica">
                              <input type="number"  step="0.01" placeholder="Mecánica" class="form-control" name="fallamecanica" id="fallamecanica">
                            </div>
                        

                        </div>

                        <div class="form-group" id="panel10">
                            
                           
                            
                        </div>

                        <div class="titulo1-form" id="titulo"><b>Producción (m<sup>3</sup>)</b></div>
                         <div class="form-group">
                           
                            <div class="col-sm-3" id="panel5">
                             <input type="number"  step="0.01" placeholder="Cruda" class="form-control" name="procruda" id="procruda">
                              
                            </div>

                           
                            <div class="col-sm-3" id="panel6">
                              <input type="number"  step="0.01" placeholder="C. acum." class="form-control" name="procacum" id="procacum">
                              
                            </div>

                            <div class="col-sm-3" id="panel7">
                              <input type="number"  step="0.01" placeholder="Potabilizada" class="form-control" name="propota" id="propota">
                              
                            </div>
                            <div class="col-sm-3" id="panel8">
                              <input type="number"  step="0.01" placeholder="P. acum." class="form-control" name="propacum" id="propacum">
                              
                            </div>
                            
                            
                        </div>

                        <div class="titulo1-form" id="titulo2"><b>Observaciones</b></div>
                         <div class="form-group" id="panel9">
                           
                            <textarea class="form-control" rows="3" name="observaciones" id="observaciones"></textarea>
                        </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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
    <script src="../js/select2.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/alertify.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){

      $('select').select2();
      $('#fecha').datepicker({
         format: 'dd/mm/yyyy',
          startDate: '-3d'
      });
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