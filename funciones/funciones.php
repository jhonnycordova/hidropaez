<?php 
	
	function crearTabla($sistema, $numeroSistema, $gascloro, $sulfato, $cal, $hipoclorito, $policloruro, $ht, $gasconsumido, $sulconsumido, $calconsumido, $hipoclorito_consumido, $policloruro_consumido, $cilindros_llenos, $cilindros_vacios, $gasclorolb, $gasclorolb_consumido){

		echo '<table border="1" style="font-size:9pt; font-weight:bold;">
                                          <tr style="background-color:#BDBDBD; font-weight:bold; font-size:9pt;" align="center">
                                            <td colspan="2" width="20%">
                                              Cantidad de Cilindros de Gas Cloro/Consumo Máximo de Sulfato/Horas Trabajadas
                                            </td>
                                            <td width="20%">
                                              Relación
                                            </td>
                                            <td>
                                              Gas <br>Cloro
                                            </td>
                                            <td>
                                              Sulfato de<br> Aluminio
                                            </td>
                                            <td>
                                              Cal <br>Hidratada
                                            </td>
                                            <td>
                                              Hipoclorito<br> de Calcio
                                            </td>
                                            <td>
                                              Policloruro
                                            </td>
                                            <td>
                                              Gas Cloro <br>(150 lb)
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              Llenos:
                                            </td>
                                            <td width="5%" align="center">
                                               <input type="number" class="form-control input-sm-mio" id="llenos_'.$sistema.'" name="llenos_'.$sistema.'" value="'.$cilindros_llenos.'" readonly>
                                            </td>
                                            <td>
                                              Recibidos (Kg.):
                                            </td>
                                            <td width="10%">
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_gascloro_'.$sistema.'" name="recibido_gascloro_'.$sistema.'" onchange="calculoSaldoGasCloro('.$gascloro.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_sulfato_'.$sistema.'" name="recibido_sulfato_'.$sistema.'" onchange="calculoSaldoSulfato('.$sulfato.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_cal_'.$sistema.'" name="recibido_cal_'.$sistema.'" onchange="calculoSaldoCal('.$cal.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_hipoclorito_'.$sistema.'" name="recibido_hipoclorito_'.$sistema.'" onchange="calculoSaldoHipoclorito('.$hipoclorito.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_poli_'.$sistema.'" name="recibido_poli_'.$sistema.'" onchange="calculoSaldoPoli('.$policloruro.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="recibido_clorolb_'.$sistema.'" name="recibido_clorolb_'.$sistema.'" onchange="calculoSaldoClorolb('.$gasclorolb.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Vacios:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="vacios_'.$sistema.'" name="vacios_'.$sistema.'" value="'.$cilindros_vacios.'" readonly>
                                            </td>
                                            <td>
                                              Consumo (Kg/día):
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_gascloro_'.$sistema.'" name="consumo_gascloro_'.$sistema.'" value="'.$gasconsumido.'"  readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_sulfato_'.$sistema.'" name="consumo_sulfato_'.$sistema.'" value="'.$sulconsumido.'" readonly >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_cal_'.$sistema.'" name="consumo_cal_'.$sistema.'" value="'.$calconsumido.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_hipoclorito_'.$sistema.'" name="consumo_hipoclorito_'.$sistema.'" value="'.$hipoclorito_consumido.'" readonly> 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_poli_'.$sistema.'" name="consumo_poli_'.$sistema.'" value="'.$policloruro_consumido.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" step="0.01" class="form-control input-sm-mio" id="consumo_clorolb_'.$sistema.'" name="consumo_clorolb_'.$sistema.'" value="'.$gasclorolb_consumido.'" readonly >
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              En Servicio:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="servicio_'.$sistema.'" name="servicio_'.$sistema.'">
                                            </td>
                                            <td>
                                              Traspasos (Kg)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_gascloro_'.$sistema.'" name="traspasos_gascloro_'.$sistema.'" onchange="calculoSaldoGasCloro('.$gascloro.', '.$numeroSistema.');calculoSanJuan();" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_sulfato_'.$sistema.'" name="traspasos_sulfato_'.$sistema.'" onchange="calculoSaldoSulfato('.$sulfato.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_cal_'.$sistema.'" name="traspasos_cal_'.$sistema.'" onchange="calculoSaldoCal('.$cal.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_hipoclorito_'.$sistema.'" name="traspasos_hipoclorito_'.$sistema.'" onchange="calculoSaldoHipoclorito('.$hipoclorito.', '.$numeroSistema.');calculoSanJuan();"> 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_poli_'.$sistema.'" name="traspasos_poli_'.$sistema.'" onchange="calculoSaldoPoli('.$policloruro.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            <td>
                                              <input type="text" step="0.01" class="form-control input-sm-mio" id="traspasos_clorolb_'.$sistema.'" name="traspasos_clorolb_'.$sistema.'" onchange="calculoSaldoClorolb('.$gasclorolb.', '.$numeroSistema.');calculoSanJuan();">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Dañados
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="danado_'.$sistema.'" name="danado_'.$sistema.'">
                                            </td>
                                            <td>
                                              Aplicación (Kg/h)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio"  id="aplicacion_gascloro_'.$sistema.'" name="aplicacion_gascloro_'.$sistema.'" > 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_sulfato_'.$sistema.'" name="aplicacion_sulfato_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_cal_'.$sistema.'" name="aplicacion_cal_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_hipoclorito_'.$sistema.'" name="aplicacion_hipoclorito_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_poli_'.$sistema.'" name="aplicacion_poli_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="aplicacion_clorolb_'.$sistema.'" name="aplicacion_clorolb_'.$sistema.'" onchange="calculoSanJuan()">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Cons Max:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="consmax_'.$sistema.'" name="consmax_'.$sistema.'">
                                            </td>
                                            <td>
                                              Saldo en Depósito (Kg)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_gascloro_'.$sistema.'" name="saldo_gascloro_'.$sistema.'" value="'.$gascloro.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_sulfato_'.$sistema.'" name="saldo_sulfato_'.$sistema.'" value="'.$sulfato.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_cal_'.$sistema.'" name="saldo_cal_'.$sistema.'" value="'.$cal.'" readonly>
                                            </td>
                                            <td>
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_hipoclorito_'.$sistema.'" name="saldo_hipoclorito_'.$sistema.'" value="'.$hipoclorito.'" readonly>
                                            </td>
                                            <td>
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_poli_'.$sistema.'" name="saldo_poli_'.$sistema.'" value="'.$policloruro.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="saldo_clorolb_'.$sistema.'" name="saldo_clorolb_'.$sistema.'" value="'.$gasclorolb.'" readonly>
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Hr.T:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" name="ht_'.$sistema.'" id="ht_'.$sistema.'" value="'.$ht.'"  readonly>
                                            </td>
                                            <td>
                                              Duración (Días)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_gascloro_'.$sistema.'" name="duracion_gascloro_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_sulfato_'.$sistema.'" name="duracion_sulfato_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_cal_'.$sistema.'" name="duracion_cal_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_hipoclorito_'.$sistema.'" name="duracion_hipoclorito_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_poli_'.$sistema.'" name="duracion_poli_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="duracion_clorolb_'.$sistema.'" name="duracion_clorolb_'.$sistema.'" >
                                            </td>
                                            
                                          </tr>
                                           
                                         </table>  ';
	}

function crearTablaNoMostrada($sistema, $numeroSistema, $gascloro, $sulfato, $cal, $hipoclorito, $policloruro, $ht, $gasconsumido, $sulconsumido, $calconsumido, $hipoclorito_consumido, $policloruro_consumido, $cilindros_llenos, $cilindros_vacios, $gasclorolb, $gasclorolb_consumido){

    echo '<table border="1" style="font-size:9pt; font-weight:bold; display:none;">
                                          <tr style="background-color:#BDBDBD; font-weight:bold; font-size:9pt;" align="center">
                                            <td colspan="2" width="20%">
                                              Cantidad de Cilindros de Gas Cloro/Consumo Máximo de Sulfato/Horas Trabajadas
                                            </td>
                                            <td width="20%">
                                              Relación
                                            </td>
                                            <td>
                                              Gas <br>Cloro
                                            </td>
                                            <td>
                                              Sulfato de<br> Aluminio
                                            </td>
                                            <td>
                                              Cal <br>Hidratada
                                            </td>
                                            <td>
                                              Hipoclorito<br> de Calcio
                                            </td>
                                            <td>
                                              Policloruro
                                            </td>
                                            <td>
                                              Gas Cloro <br>(150 lb)
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              Llenos:
                                            </td>
                                            <td width="5%" align="center">
                                               <input type="number" class="form-control input-sm-mio" id="llenos_'.$sistema.'" name="llenos_'.$sistema.'" value="'.$cilindros_llenos.'" readonly>
                                            </td>
                                            <td>
                                              Recibidos (Kg.):
                                            </td>
                                            <td width="10%">
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_gascloro_'.$sistema.'" name="recibido_gascloro_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_sulfato_'.$sistema.'" name="recibido_sulfato_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_cal_'.$sistema.'" name="recibido_cal_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_hipoclorito_'.$sistema.'" name="recibido_hipoclorito_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="recibido_poli_'.$sistema.'" name="recibido_poli_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="recibido_clorolb_'.$sistema.'" name="recibido_clorolb_'.$sistema.'">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Vacios:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="vacios_'.$sistema.'" name="vacios_'.$sistema.'" value="'.$cilindros_vacios.'" readonly>
                                            </td>
                                            <td>
                                              Consumo (Kg/día):
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_gascloro_'.$sistema.'" name="consumo_gascloro_'.$sistema.'" value="'.$gasconsumido.'"  readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_sulfato_'.$sistema.'" name="consumo_sulfato_'.$sistema.'" value="'.$sulconsumido.'" readonly >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_cal_'.$sistema.'" name="consumo_cal_'.$sistema.'" value="'.$calconsumido.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_hipoclorito_'.$sistema.'" name="consumo_hipoclorito_'.$sistema.'" value="'.$hipoclorito_consumido.'" readonly> 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="consumo_poli_'.$sistema.'" name="consumo_poli_'.$sistema.'" value="'.$policloruro_consumido.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" step="0.01" class="form-control input-sm-mio" id="consumo_clorolb_'.$sistema.'" name="consumo_clorolb_'.$sistema.'" value="'.$gasclorolb_consumido.'" readonly >
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              En Servicio:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="servicio_'.$sistema.'" name="servicio_'.$sistema.'">
                                            </td>
                                            <td>
                                              Traspasos (Kg)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_gascloro_'.$sistema.'" name="traspasos_gascloro_'.$sistema.'" >
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_sulfato_'.$sistema.'" name="traspasos_sulfato_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_cal_'.$sistema.'" name="traspasos_cal_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_hipoclorito_'.$sistema.'" name="traspasos_hipoclorito_'.$sistema.'"> 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="traspasos_poli_'.$sistema.'" name="traspasos_poli_'.$sistema.'">
                                            </td>
                                            <td>
                                              <input type="text" step="0.01" class="form-control input-sm-mio" id="traspasos_clorolb_'.$sistema.'" name="traspasos_clorolb_'.$sistema.'">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Dañados
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="danado_'.$sistema.'" name="danado_'.$sistema.'">
                                            </td>
                                            <td>
                                              Aplicación (Kg/h)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio"  id="aplicacion_gascloro_'.$sistema.'" name="aplicacion_gascloro_'.$sistema.'" readonly> 
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_sulfato_'.$sistema.'" name="aplicacion_sulfato_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_cal_'.$sistema.'" name="aplicacion_cal_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_hipoclorito_'.$sistema.'" name="aplicacion_hipoclorito_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="aplicacion_poli_'.$sistema.'" name="aplicacion_poli_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="aplicacion_clorolb_'.$sistema.'" name="aplicacion_clorolb_'.$sistema.'" onchange="calculoSanJuan()">
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Cons Max:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" id="consmax_'.$sistema.'" name="consmax_'.$sistema.'">
                                            </td>
                                            <td>
                                              Saldo en Depósito (Kg)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_gascloro_'.$sistema.'" name="saldo_gascloro_'.$sistema.'" value="'.$gascloro.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_sulfato_'.$sistema.'" name="saldo_sulfato_'.$sistema.'" value="'.$sulfato.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_cal_'.$sistema.'" name="saldo_cal_'.$sistema.'" value="'.$cal.'" readonly>
                                            </td>
                                            <td>
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_hipoclorito_'.$sistema.'" name="saldo_hipoclorito_'.$sistema.'" value="'.$hipoclorito.'" readonly>
                                            </td>
                                            <td>
                                             <input type="number" step="0.01" class="form-control input-sm-mio" id="saldo_poli_'.$sistema.'" name="saldo_poli_'.$sistema.'" value="'.$policloruro.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="saldo_clorolb_'.$sistema.'" name="saldo_clorolb_'.$sistema.'" value="'.$gasclorolb.'" readonly>
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>
                                              Hr.T:
                                            </td>
                                            <td>
                                              <input type="number" class="form-control input-sm-mio" name="ht_'.$sistema.'" id="ht_'.$sistema.'" value="'.$ht.'"  readonly>
                                            </td>
                                            <td>
                                              Duración (Días)
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_gascloro_'.$sistema.'" name="duracion_gascloro_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_sulfato_'.$sistema.'" name="duracion_sulfato_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_cal_'.$sistema.'" name="duracion_cal_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_hipoclorito_'.$sistema.'" name="duracion_hipoclorito_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="number" step="0.01" class="form-control input-sm-mio" id="duracion_poli_'.$sistema.'" name="duracion_poli_'.$sistema.'" readonly>
                                            </td>
                                            <td>
                                              <input type="text" class="form-control input-sm-mio" id="duracion_clorolb_'.$sistema.'" name="duracion_clorolb_'.$sistema.'" readonly>
                                            </td>
                                            
                                          </tr>
                                           
                                         </table>  ';
  }




 ?>