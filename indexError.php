<?php 
        session_start();
        session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo del Sistema-->
    <title>Sistema de Coordinación de Calidad</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/select2.css" rel="stylesheet">
     

    <link href='img/icono.ico' rel='shortcut icon' type='image/x-icon' />

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
              <img src="img/logonuevo.png" style="width:112px;">
          </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- aqui van a ir los modulos. de la barra-->
       
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-brand" href="#">Sistema de Coordinación de Calidad</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <br>
   
    
    <div class="container" style="margin-top:30px">
      
      <div class="col-md-4 col-md-offset-4">
            <div class="logogrande">
              <img src="img/logo.png" width="55%">
            </div>
             <div class="mensajeError">
              <b>Datos Incorrectos o Empleado No Registrado</b>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading" align="center"><h3 class="panel-title"><strong>Acceso al Sistema </strong></h3></div>
             <div class="panel-body">
               <form role="form" action="autenticar.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1"><span class='glyphicon glyphicon-user'></span>&nbsp;Nombre del Empleado:</label>
                <input type="text" class="form-control" name="nombre" style="border-radius:0px" id="nombre" placeholder="Introduzca Usuario" required onkeyup="validar();" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"><span class='glyphicon glyphicon-download-alt'></span>&nbsp;Clave: </label>
                <input type="password" class="form-control" style="border-radius:0px" id="clave" name="clave" placeholder="Introduzca Contraseña" required onkeyup="validar();">
              </div>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button  type="submit" name="entrar" class="btn btn btn-primary" id="entrar" disabled="disabled">Entrar!</button>
              <button  type="reset" class="btn btn btn-default" >Borrar</button>

            </form>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#myModal">Registrar Nuevo Empleado</button>

              <!-- Modal para Registro de Usuarios -->
                <?php require_once("registro/registro.php") ?>
                       
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
        <script src="js/jquery-1.11.1.js"></script>
        <script src="js/jquery.validate.js"></script>
        


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Validación del formulario de registro-->
    <script type="text/javascript">
      $(function(){
       $('#formulario').validate({
           rules: {
           'nombre': {required: true},
           'apellido': {required: true},
           'cedula': { required: true, number: true },
           'email': { required: true, email: true },
           'edad': {required: true},
           'cargo': {required:true},
           'usuario': {required:true},
           'password': {required: true},
           'password_conf': {required:true, equalTo: "#password"}
           },
       messages: {
           'nombre': '<font color="red" size="2">Debe Ingresar Nombres</font>',
           'apellido': '<font color="red" size="2">Debe Ingresar Apellidos</font>',
           'cedula': { required: '<font color="red" size="2">Debe Ingresar la Cédula</font>', number: '<font color="red" size="2">Debe Ser un Número</font>' },
           'email': { required: '<font color="red" size="2">Debe Ingresar un Correo</font>', email: '<font color="red" size="2">Debe Ingresar un Correo Válido. Por ejemplo: ejemplo@hotmail.com</font>' },
           'edad': {required: '<font color="red" size="2">Debe Seleccionar una Edad</font>'},
           'cargo': {required: '<font color="red" size="2">Debe Seleccionar un Cargo</font>'},
           'usuario': {required: '<font color="red" size="2">Debe Ingresar un Usuario</font>'},
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

    <!-- Comprobar que el usuario no se repita -->
    <script type="text/javascript">

$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#usuario").focus();
                                                 
      //comprobamos si se pulsa una tecla
      $("#usuario").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#usuario").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(0).queue(function(n) {      
                                           
                  $("#resultado").html('<img src="ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
    </script>



    <script type="text/javascript">
    
    //funcion para activar boton de entrar cuando se llene el formulario de entrar
    function validar(){
      var nombre = document.getElementById("nombre");
      var clave = document.getElementById("clave");
      if(nombre.value != "" && clave.value != ""){
          document.getElementById("entrar").disabled = "";  
      }else{
        document.getElementById("entrar").disabled = "disabled"; 
      }
    }
 
    </script>

    <script src="js/select2.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

      $('select').select2();
      });
      </script>

   
  </body>
</html>