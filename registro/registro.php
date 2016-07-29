                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <div class="logomodal"><img src="img/logocurvashidropaez.png"></div><h4 class="modal-title" id="myModalLabel" align="center">Nuevo Empleado</h4>
                              </div>
                              <div class="modal-body">
                                 <form class="form-horizontal" role="form" id="formulario" action="registro/registrarEmpleado.php" method="post">
                                        <fieldset>

                                          <!-- Text input-->
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Nombres:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Nombres" class="form-control" name="nombre" id="nombre">
                                            </div>
                                          </div>
                                         
                                          <!-- Aqui empieza los input-->
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Apellidos:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Apellidos" class="form-control" name="apellido" id="apellido">
                                            </div>
                                          </div>

                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Cédula:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Cédula" class="form-control" name="cedula" id="cedula">
                                            </div>
                                          </div>

                                           
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Edad:</label>
                                             <div class="col-xs-4">
                                            <?php
                                                echo "<select name='edad' id='edad' required >";
                                                echo "<option value='0'>Seleccione</option>";
                                                for($i=1;$i<101;$i++){
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                                echo "</select>";
                                            ?>
                                            </div>
                                            
                                          </div>
                                         
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Email:</label>
                                            <div class="col-sm-7">
                                              <input type="email" placeholder="Ingrese Correo" class="form-control" name="email" id="email">
                                            </div>
                                          </div>
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Usuario:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Usuario" class="form-control" name="usuario" id="usuario">
                                              <div id="resultado"></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Contraseña:</label>
                                            <div class="col-sm-7">
                                              <input type="password" placeholder="Ingrese Contraseña" class="form-control" name="password" id="password" >
                                            </div>
                                          </div>
                                            <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Repita Contraseña:</label>
                                            <div class="col-sm-7">
                                              <input type="password" placeholder="Repita la Contrasela" class="form-control" name="password_conf" id="password_conf" >
                                            </div>
                                          </div>

                                        </fieldset>
                                         <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary" >Registrar</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                    </form>
                              </div>
                             
                            </div>
                          </div>
    </div>