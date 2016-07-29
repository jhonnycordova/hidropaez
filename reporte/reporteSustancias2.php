<?php 
	include('../tcpdf/config/tcpdf_config.php');   
	include('../tcpdf/tcpdf.php');
	include('../conex.php');
	include('seguridad.php');

	$fecha = $_POST["fecha"];



	//consultamos el formato_sustancias
	$sql = ("SELECT * FROM formato_sustancias where fecha = '$fecha' order by id_sistema asc");
	$result = pg_query($sql);
	    
    $num = pg_num_rows($result);

    //consultamos el formato_diario
    $sql2 = ("SELECT * FROM formato_diario where fecha = '$fecha' order by id_sistema asc");
	$result2 = pg_query($sql2);
    
    $num2 = pg_num_rows($result2);

   



  if ($num > 0) {
        
                class MIPDF extends TCPDF {
              public function Header() {
                  /*ponemos color al texto y a las lineas */
                  $this->SetTextColor(0,0,0);
                  $this->SetDrawColor(0,0,0);
                  /* definimos variables con titulo y subtitulo */
                  $titulo="Coordinación de Calidad";
                  $subtitulo="Reporte Diario de Sustancias Químicas ";
                  /* posicionamos el puto de insercion 2mm. debajo
                     del borde del papel */
                  $this->SetY(8);
                  /* escribimos el titulo con la fuente que se establezca
                  por el método opcion SetHeaderFont */
                  $this->SetFont('helvetica', 'B', 14);

                  $this->Cell(0, 5,$titulo,0,1,'C');
                   /* modificamos tipografia para el subtitulo
                    e insertamos este */
                  $this->SetFont('helvetica', '', 12);
                  $this->Cell(0, 2,$subtitulo,0,1,'C');
                  /* trazamos un rectangulo sombreado que por sus dimensiones
                  ocupará el area de texto de la pagina */
                  
                  /*trazamos una linea roja debajo del encabezado */
                  $this->Line(15,30,195,30); 
                  /* insertamos una imagen de fondo con 15% de opacidad */
               
                  $this->Image('logo.png',0,0,30,30,
                                '','','N','','','L');
                  /* recuperamos la opacidad por defecto */
                  
              }
               public function Footer() {
                    /* establecemos el color del texto */
                    $this->SetTextColor(0,0,0);
                    /* insertamos numero de pagina y total de paginas*/
                    $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().
                                       ' de un total de '.
                                       $this-> getAliasNbPages(),
                                       0, false, 'C', 0, '', 0, false, 'T', 'M');
                    $this->SetDrawColor(0,0,0);
                    /* dibujamos una linea roja delimitadora del pie de página */
                    $this->Line(15,282,195,282);

              }
          }
  
          /* creamos un nuevo objeto usando la clase extendida ConPies */
        $MiPDF = new MIPDF();
        /* definimos margenes de encanbezado y pie de pagina,
           tipos de letra para encabezados y piel */
        $MiPDF->setHeaderMargin(5);
        $MiPDF->setFooterMargin(15);
         $MiPDF->setHeaderFont(Array('times', '', 14));
        $MiPDF->setFooterFont(Array('helvetica', 'I', 10));
        $MiPDF->SetMargins(10,30,10,true);	

        /* fijamos el modo de visualizacion, agregamos dos paginas
           y visualizamos el resultado */
        $MiPDF->SetDisplayMode('fullpage');
        $MiPDF->AddPage();

        $html = '<br><br><div align="right"><b>Fecha:<font color="red"> '.$fecha.'</font>   </b></div> <br>';


        $MiPDF->writeHTML($html, true, false, true, false, '');

        $html = '<p align="center" ><b>Reporte Diario de las Sustancias Químicas de los Diferentes <br> Sistemas de Potabilización del Estado Guárico</b></p>';

         $MiPDF->writeHTML($html, true, false, true, false, ''); 

         $contador = 0;
         while ($row = pg_fetch_array($result)) {
         	while ($row2 = pg_fetch_array($result2)) {
         	

         	if ($row["id_sistema"] == 1) {
		      $nombreSistema = "San Juan de los Morros";
		    }
		     if ($row["id_sistema"] == 2) {
		      $nombreSistema = "Calabozo";
		    }
		     if ($row["id_sistema"] == 3) {
		      $nombreSistema = "Altagracia de Orituco";
		    }
		    if ($row["id_sistema"] == 4) {
		      $nombreSistema = "Valle de la Pascua";
		    }
		    if ($row["id_sistema"] == 5) {
		      $nombreSistema = "Tucupido";
		    }
		    if ($row["id_sistema"] == 6) {
		      $nombreSistema = "San José de Guaribe";
		    }
		    if ($row["id_sistema"] == 7) {
		      $nombreSistema = "Zaraza";
		    }
		    if ($row["id_sistema"] == 8) {
		      $nombreSistema = "El Socorro";
		    }
		    if ($row["id_sistema"] == 9) {
		      $nombreSistema = "Santa María de Ipire";
		    }
		    if ($row["id_sistema"] == 10) {
		      $nombreSistema = "Espino";
		    }
		    if ($row["id_sistema"] == 11) {
		      $nombreSistema = "Guardatinajas";
		    }
		    if ($row["id_sistema"] == 12) {
		      $nombreSistema = "San Rafael de Laya";
		    }
		    if ($row["id_sistema"] == 13) {
		      $nombreSistema = "Chaguaramas";
		    }
		    if ($row["id_sistema"] == 14) {
		      $nombreSistema = "Sombrero Galería";
		    }
		    if ($row["id_sistema"] == 15) {
		      $nombreSistema = "Sombrero Est. Banco Obrero";
		    }

		    if ($row2["reporte"] == 't') {
		    	$tabla.= '<table border="1">
         			<tr>
         				<td colspan="9" align="center" style="background-color:#302E2E;color:white;font-weight:bold;">
         					'.$nombreSistema.'
         				</td>
         			</tr>
         			<tr align="center" style="font-size:8pt;background-color:#B8B8B8">
         				<td colspan="2" align="center" style="font-size:8pt;">
         					Cantidad de Cilindros de Gas Cloro/ Consumo Máximo de Sulfato/Horas Trabajadas 
         				</td>
         				<td style="width:17%;">
         					Relación
         				</td>
         				<td>
         					Gas Cloro 
         				</td>
         				<td>
         					Sulfato de Aluminio
         				</td>
         				<td width="50px">
         					Cal <br>Hidratada
         				</td>
         				<td>
         					Hipoclorito de Calcio
         				</td>
         				<td width="50px">
         					Policloruro
         				</td>
         				<td width="47px">
         					Gas Cloro (150 lb)
         				</td>
         			</tr>
         			<tr style="font-size:8pt;">
         				<td width="95px">
         					Llenos:
         				</td>
         				<td width="25px">
         					'.$row["cilindros_llenos"].'
         				</td>
         				<td>
         					Recibidos (Kg)
         				</td>
         				<td>
         					'.$row["recibido_gascloro"].'
         				</td>
         				<td>
         					'.$row["recibido_sulfato"].'
         				</td>
         				<td>
         					'.$row["recibido_cal"].'
         				</td>
         				<td>
         					'.$row["recibido_hipoclorito"].'
         				</td>
         				<td>
         					'.$row["recibido_poli"].'
         				</td>
         				<td>
         					'.$row["recibido_clorolb"].'
         				</td>
         			</tr>
         			<tr style="font-size:8pt;">
         				<td>
         					Vacios:
         				</td>
         				<td>
         					'.$row["cilindros_vacios"].'
         				</td>
         				<td>
         					Consumo (Kg/día)
         				</td>
         				<td>
         					'.$row2["gasconsumido"].'
         				</td>
						<td>
         					'.$row2["sulconsumido"].'
         				</td>
         				<td>
         					'.$row2["calconsumido"].'
         				</td>
         				<td>
         					'.$row2["hipoclorito"].'
         				</td>
         				<td>
         					'.$row2["policloruro"].'
         				</td> 
         				<td>
         					'.$row2["gasclorolb"].'
         				</td>        				

         			</tr>
         			<tr style="font-size:8pt;">
         				<td>
         					En Servicio:
         				</td>
         				<td>
         					'.$row["servicio"].'
         				</td>
         				<td>
         					Traspasos (Kg)
         				</td>
         				<td>
         					'.$row["traspasos_gascloro"].'
         				</td>
         				<td>
         					'.$row["traspasos_sulfato"].'
         				</td>
         				<td>
         					'.$row["traspasos_cal"].'
         				</td>
         				<td>
         					'.$row["traspasos_hipoclorito"].'
         				</td>
         				<td>
         					'.$row["traspasos_poli"].'
         				</td>
         				<td>
         					'.$row["traspasos_clorolb"].'
         				</td>         			
         			</tr>
         			<tr style="font-size:8pt;">
         				<td>
         					Dañados:
         				</td>
         				<td>
         					'.$row["danado"].'
         				</td>
         				<td>
         					Aplicación (Kg/h)
         				</td>
         				<td>
         					'.$row["aplicacion_gascloro"].'
         				</td>
         				<td>
         					'.$row["aplicacion_sulfato"].'
         				</td>
         				<td>
         					'.$row["aplicacion_cal"].'
         				</td>
         				<td>
         					'.$row["aplicacion_hipoclorito"].'
         				</td>
         				<td>
         					'.$row["aplicacion_poli"].'
         				</td>
         				<td>
         					'.$row["aplicacion_clorolb"].'
         				</td>         			
         			</tr>
         			<tr style="font-size:8pt;">
         				<td>
         					Cons. Max:
         				</td>
         				<td>
         					'.$row["consmax"].'
         				</td>
         				<td>
         					Saldo en Depósito (Kg)
         				</td>
         				<td>
         					'.$row["saldo_gascloro"].'
         				</td>
         				<td>
         					'.$row["saldo_sulfato"].'
         				</td>
         				<td>
         					'.$row["saldo_cal"].'
         				</td>
         				<td>
         					'.$row["saldo_hipoclorito"].'
         				</td>
         				<td>
         					'.$row["saldo_poli"].'
         				</td>
         				<td>
         					'.$row["saldo_clorolb"].'
         				</td>         			
         			</tr>
         			<tr style="font-size:8pt;">
         				<td>
         					Hr. T:
         				</td>
         				<td>
         					'.$row2["ht"].'
         				</td>
         				<td>
         					Duración (días)
         				</td>
         				<td>
         					'.$row["duracion_gascloro"].'
         				</td>
         				<td>
         					'.$row["duracion_sulfato"].'
         				</td>
         				<td>
         					'.$row["duracion_cal"].'
         				</td>
         				<td>
         					'.$row["duracion_hipoclorito"].'
         				</td>
         				<td>
         					'.$row["duracion_poli"].'
         				</td>
         				<td>
         					'.$row["duracion_clorolb"].'
         				</td>         			
         			</tr>
         		</table><br>';

                     $sql4 = ("SELECT * from empleados where id_empleado = '$row[id_empleado]'");
                     $result4 = pg_query($sql4);
                     $row4 = pg_fetch_array($result4);
                
		    }else{
		    	$tabla.='<table border="1">
		    				<tr>
		         				<td colspan="9" align="center" style="background-color:#302E2E;color:white;font-weight:bold;">
		         					'.$nombreSistema.'
		         				</td>
		         			</tr>
		         			<tr style="font-size:10pt; color:red; font-weight:bold;background-color:#FFCACA ">
		         				<td colspan="9" align="center">
		         				Este sistema no reportó ese dia
		         				</td>
		         			</tr>
		    			</table><br>';
		    }

         		break;
         		
         	}
         	
         }

       

        

         $MiPDF->writeHTML($tabla, true, false, true, false, '');

         $tabla5 = '<table border="0" align="center">

                        <tr>
                        <td>&nbsp;&nbsp;&nbsp;Antentamente,<br><br><br>



                        _________________________
                        </td>
                        </tr>

                        <tr>
                          <td>
                              '.$row4["nombres"].' '.$row4["apellidos"].'
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <br><br>Coordinación de Calidad
                          </td>
                        </tr>
                      </table>';

          $MiPDF->writeHTML($tabla5, true, false, true, false, '');

        $MiPDF->Output('reporteSustancias', 'D');

}else{
       echo "<script>alert('No Hay Registro de Formato para ese Dia!') </script>";
      echo "<meta http-equiv='refresh' content='0,url=reporteSustancias.php'>";
    }


 ?>