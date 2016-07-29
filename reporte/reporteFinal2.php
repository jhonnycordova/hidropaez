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
                  $subtitulo="Gerencia General Técnica. Operaciones";
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
                    $this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().
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

        $html = '<br><div align="right"><b>Fecha:<font color="red"> '.$fecha.'</font>   </b></div> <br>';


        $MiPDF->writeHTML($html, true, false, true, false, '');

        $html = '<p align="center" ><b>Reporte Final de los Diferentes <br> Sistemas de Potabilización del Estado Guárico</b></p><br><br>';

         $MiPDF->writeHTML($html, true, false, true, false, ''); 

         $tabla= '<table border="1">
                    <tr style="text-align:center;font-size:10pt;background-color:#302E2E;color:white;">
                        <td>   
                           Sistema de Potabilización 
                        </td>
                        <td style="width:15%">
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
            ';
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
		    	$tabla.= '
         			 <tr align="center" style="font-size:10pt;">
                          <td rowspan="2" style="font-weight:bold;background-color:#E6E6E6">
                            '.$nombreSistema.'
                          </td>
                          <td align="left" style="font-weight:bold;width:15%">
                            Duración (días)
                          </td>';

                          if ($row["id_sistema"]==15 || $row["id_sistema"]==11) {
                            $tabla.='<td>-</td>';
                          }else{
                                if (($row["duracion_gascloro"]<7.0) && ($row2["gasconsumido"]>0)) {
                                $tabla.= ' <td style="background-color:red;color:white;">
                                        '.$row["duracion_gascloro"].'
                                          </td>';
                              }else{
                                  $tabla.= ' <td >
                                        '.$row["duracion_gascloro"].'
                                          </td>';
                              }
                          }

                          


                          if ($row["id_sistema"] == 12 || $row["id_sistema"]== 14 || $row["id_sistema"]== 15) {
                            $tabla.='<td>-</td>';
                          }else{
                                if (($row["duracion_sulfato"]<7.0) && ($row2["sulconsumido"]>0)) {
                                $tabla.= ' <td style="background-color:red;color:white;">
                                        '.$row["duracion_sulfato"].'
                                          </td>';
                              }else{
                                  $tabla.= ' <td >
                                        '.$row["duracion_sulfato"].'
                                          </td>';
                              }
                          }

                           
                         
                          $tabla.='
                          <td>
                            '.$row["duracion_cal"].'
                          </td>
                          <td>
                            '.$row["duracion_hipoclorito"].' 
                          </td>';

                          if ($row["duracion_poli"] == 0 && $row["saldo_poli"]== 0) {
                            $tabla.= '<td>-</td>';
                          }else{
                            $tabla.='<td>
                                  '.$row["duracion_poli"].'
                                </td>';
                          }

                          

                             if ($row["duracion_clorolb"]<7.0 && $row["id_sistema"]==15) {
                            $tabla.= ' <td style="background-color:red;color:white;">
                                        '.$row["duracion_clorolb"].'
                                      </td>';
                          }else{
                              $tabla.= ' <td >
                                    '.$row["duracion_clorolb"].'
                                      </td>';
                          }

                          
                         

                        $tabla.='</tr>
                        <tr align="center" style="font-size:10pt;">
                          <td align="left" style="font-weight:bold">
                            Saldo (Kg)
                          </td>';

                          if ($row["id_sistema"]==15 || $row["id_sistema"]==11) {
                            $tabla.='<td>-</td>';
                          }else{
                            $tabla.=' <td>
                            '.$row["saldo_gascloro"].'
                          </td>';
                          }
                         

                          if ($row["id_sistema"] == 12 || $row["id_sistema"]== 14 || $row["id_sistema"]== 15) {
                            $tabla.='<td>-</td>';
                          }else{
                            $tabla.='<td>
                            '.$row["saldo_sulfato"].'
                          </td>';
                          }


                          
                         $tabla.=' <td>
                            '.$row["saldo_cal"].'
                          </td>
                          <td>
                            '.$row["saldo_hipoclorito"].'
                          </td>';

                          if ($row["saldo_poli"]==0) {
                              $tabla.='<td>-</td>';
                          }else{
                            $tabla.='<td>
                            '.$row["saldo_poli"].'
                          </td>';
                          }
                          
                         $tabla.=' <td>
                            '.$row["saldo_clorolb"].'
                          </td>
                          
                        </tr>
         		';
		    }else{
		    	$tabla.='
		    			    <tr align="center" style="font-size:10pt;">
                          <td style="font-weight:bold;background-color:#E6E6E6">
                            '.$nombreSistema.'
                          </td>
                          <td colspan="7" style="color:red;background-color:#FFCCCC">
                            No Reportó. Se mantienen los valores del día anterior
                          </td>
                          
                        </tr>	
		    			';
		    }

         		break;
         		
         	}
         	
         }

         $tabla.='</table>';

       

         

         $MiPDF->writeHTML($tabla, true, false, true, false, '');

         

        $MiPDF->Output('reporteFinal', 'D');

}else{
       echo "<script>alert('No Hay Registro de Formatos para ese Dia, no se puede generar reporte!') </script>";
      echo "<meta http-equiv='refresh' content='0,url=reporteFinal.php'>";
    }


 ?>