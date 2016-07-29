                   
               
                    <div class="modal fade" id="cambiarClave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <div class="logomodal"><img src="../img/logocurvashidropaez.png"></div><h4 class="modal-title" id="myModalLabel" align="center">Cambiar Clave de Acceso</h4>
                              </div>
                              <div class="modal-body">
                                 <form class="form-horizontal" role="form" id="modificar" action="../empleados/cambiarClave2.php" method="post">
                                        <fieldset>

                                          <!-- Text input-->
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Antigua Clave:</label>
                                            <div class="col-sm-7">
                                              <input type="password"  class="form-control" name="claveVieja" id="claveVieja"  required>
                                            </div>
                                          </div>
                                         
                                          <!-- Aqui empieza los input-->
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Nueva Clave:</label>
                                            <div class="col-sm-7">
                                              <input type="password"  class="form-control" name="password" id="password"  required>
                                            </div>
                                          </div>

                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Repita Nueva Clave:</label>
                                            <div class="col-sm-7">
                                              <input type="password"  class="form-control" name="password_conf" id="password_conf"  required>
                                              <input type="hidden" placeholder="Ingrese Correo" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario; ?>" >
                                            </div>
                                          </div>

                                         
                                        </fieldset>
                                         <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary" >Cambiar</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                    </form>
                              </div>
                             
                            </div>
                          </div>
    </div>
