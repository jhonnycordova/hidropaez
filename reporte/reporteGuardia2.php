<?php 

	include('../tcpdf/config/tcpdf_config.php');   
	include('../tcpdf/tcpdf.php');
  include('../conex.php');

    $fecha = $_POST["fecha"];
    $sistema = $_POST["sistema"];



    $sql2 = ("SELECT * from formato_diario where fecha = '$fecha' and id_sistema = '$sistema'");
    $result2 = pg_query($sql2);
    $row2 = pg_fetch_array($result2);
    $num2 = pg_num_rows($result2);

    $sql3 = ("SELECT * from sistemas where id_sistema = '$sistema'");
    $result3 = pg_query($sql3);
    $row3 = pg_fetch_array($result3);

    $sql4 = ("SELECT * from empleados where id_empleado = '$row2[id_empleado]'");
    $result4 = pg_query($sql4);
    $row4 = pg_fetch_array($result4);


    if ($num2 > 0) {
        
                class MIPDF extends TCPDF {
              public function Header() {
                  /*ponemos color al texto y a las lineas */
                  $this->SetTextColor(0,0,0);
                  $this->SetDrawColor(0,0,0);
                  /* definimos variables con titulo y subtitulo */
                  $titulo="Coordinación de Calidad";
                  $subtitulo="Reporte Fto. Diario";
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
        $MiPDF->setHeaderMargin(2);
        $MiPDF->setFooterMargin(15);
         $MiPDF->setHeaderFont(Array('times', '', 14));
        $MiPDF->setFooterFont(Array('helvetica', 'I', 10));
        /* fijamos el modo de visualizacion, agregamos dos paginas
           y visualizamos el resultado */
        $MiPDF->SetDisplayMode('fullpage');
        $MiPDF->AddPage();

        $html = '<br><br><br><br><br><div align="right"><b>Reporte Fto. Diario del Día:<font color="red"> '.$row2['fecha'].'</font>   </b></div> <br>';


        $MiPDF->writeHTML($html, true, false, true, false, '');

        $tabla = '<table border="1">
                    <tr>
                      <td bgcolor="grey" width="30%">
                        <font color="white"><b>Planta:</b></font>
                      </td>
                      <td colspan="3" width="70%">
                        '.$row3["nombre"].'
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4">

                      </td>
                    </tr>
                    <tr>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Ht:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["ht"].'
                        </td>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Sulfato de Al Consumido:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["sulconsumido"].'
                        </td>
                        

                    </tr>
                       <tr>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Gas Cloro Consumido:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["gasconsumido"].'
                        </td>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Cal Consumida:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["calconsumido"].'
                        </td>

                    </tr>
                     <tr>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Hipoclorito:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["hipoclorito"].'
                        </td>
                        <td bgcolor="grey" width="30%">
                          <font color="white"><b>Cl Residual:</b></font>

                        </td>
                        <td width="20%">
                          '.$row2["clresidual"].'
                        </td>

                    </tr>

                    <tr>
                      <td bgcolor="grey" width="30%" rowspan="2">
                          <font color="white"><b>Falla: </b></font>
                      </td>
                      <td>
                        Eléctrica: '.$row2["fallaelectrica"].'
                      </td>
                      <td bgcolor="grey" width="30%">
                         <font color="white"><b>Policloruro: </b></font>
                        </td>
                        <td width="20%">
                          '.$row2["policloruro"].'
                        </td>
                    </tr>

                    <tr> 
                      <td>
                        Mecánica: '.$row2["fallamecanica"].'
                      </td>
                      <td bgcolor="grey">
                        <font color="white"><b>Gas Cloro (150lb): </b></font>
                      </td>
                      <td>
                        '.$row2["gasclorolb"].'
                      </td>
                      

                    </tr>
                   

                  </table>';

          $MiPDF->writeHTML($tabla, true, false, true, false, '');

         

          $tabla3 = '<table border="1">
                      <tr >
                        <td colspan="4" bgcolor="grey" align="center">

                           <font color="white">  <b> Producción m<sup>3</sup></b></font>
                        </td>

                       
                      </tr>        
                        <tr>
                            <td bgcolor="#DCDEDE" align="center">
                                Cruda
                            </td>
                            <td bgcolor="#DCDEDE" align="center">
                                C. Acum
                            </td>
                            <td bgcolor="#DCDEDE" align="center">
                                Potabilizada
                            </td>
                            <td bgcolor="#DCDEDE" align="center">
                                P. Acum
                            </td>
                        </tr>

                        <tr>
                            <td  align="center">
                                '.$row2["procruda"].'
                            </td>
                            <td  align="center">
                                '.$row2["procacum"].'
                            </td>
                            <td  align="center">
                                '.$row2["propota"].'
                            </td>
                            <td  align="center">
                                '.$row2["propacum"].'
                            </td>
                        </tr>
                    </table>';

          $MiPDF->writeHTML($tabla3, true, false, true, false, '');

          $tabla4 = '<table border="1">
                        <tr>
                            <td align="center" bgcolor="grey">
                                <font color="white"> <b>Observaciones</b></font>
                            </td>
                        </tr>

                        <tr>
                            <td height="60$">
                                '.$row2["observaciones"].'
                            </td>
                        </tr>
                    </table>';

          $MiPDF->writeHTML($tabla4, true, false, true, false, '');

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

        $MiPDF->Output('reporteDiario', 'D');

}else{
       echo "<script>alert('No Hay Registro de Formato para ese Dia!') </script>";
      echo "<meta http-equiv='refresh' content='0,url=reporteGuardia.php'>";
    }

  

 ?>