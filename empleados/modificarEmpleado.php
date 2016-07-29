                   
               
                    <div class="modal fade" id="Modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <div class="logomodal"><img src="../img/logocurvashidropaez.png"></div><h4 class="modal-title" id="myModalLabel" align="center">Modificar Empleado</h4>
                              </div>
                              <div class="modal-body">
                                 <form class="form-horizontal" role="form" id="empleado" action="../empleados/modificarEmpleado2.php" method="post">
                                        <fieldset>

                                          <!-- Text input-->
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Nombres:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Nombres" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombres']; ?>" required>
                                            </div>
                                          </div>
                                         
                                          <!-- Aqui empieza los input-->
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Apellidos:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Apellidos" class="form-control" name="apellido" id="apellido" value="<?php echo $row['apellidos']; ?>" required>
                                            </div>
                                          </div>

                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Cédula:</label>
                                            <div class="col-sm-7">
                                              <input type="text" placeholder="Ingrese Cédula" class="form-control" name="cedula" id="cedula" value="<?php echo $row['cedula']; ?>" required>
                                            </div>
                                          </div>

                                           
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label" for="textinput">Edad:</label>
                                             <div class="col-xs-4">
                                            <?php
                                                echo "<select name='edad' id='edad' required class=' col-sm-7'>";
                                                echo "<option value='$row[edad]'>$row[edad]</option>";
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
                                              <input type="email" placeholder="Ingrese Correo" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>" required>
                                              <input type="hidden" placeholder="Ingrese Correo" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario; ?>" >

                                            </div>
                                          </div>
                                         

                                        </fieldset>
                                         <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary" >Modificar</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                    </form>
                              </div>
                             
                            </div>
                          </div>
    </div>
