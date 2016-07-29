<?php 
	include('../tcpdf/config/tcpdf_config.php');   
	include('../tcpdf/tcpdf.php');
	include('../conex.php');
	include('seguridad.php');

    $fecha = $_POST["fecha"];

    //Consultamos San Juan
    $sqlSanJuan = ("SELECT * from sanjuan_parametros where fecha = '$fecha'");
    $resultSanJuan = pg_query($sqlSanJuan);
    $rowSanJuan = pg_fetch_array($resultSanJuan);
    $numSanJuan = pg_num_rows($resultSanJuan);


    //para traerme el usuario

    $sql4 = ("SELECT * from empleados where id_empleado = '$rowSanJuan[id_empleado]'");
    $result4 = pg_query($sql4);
    $row4 = pg_fetch_array($result4);


    //Consultamos Altagracia
     $sqlAltagracia = ("SELECT * from altagracia_parametros where fecha = '$fecha'");
    $resultAltagracia = pg_query($sqlAltagracia);
    $rowAltagracia = pg_fetch_array($resultAltagracia);
    $numAltagracia = pg_num_rows($resultAltagracia);
    
    
    //Consultamos Calabozo
    $sqlCalabozo = ("SELECT * from calabozo_parametros where fecha = '$fecha'");
    $resultCalabozo = pg_query($sqlCalabozo);
    $rowCalabozo = pg_fetch_array($resultCalabozo);
    $numCalabozo = pg_num_rows($resultCalabozo);

    //Consultamos Chaguaramas
    $sqlChaguaramas = ("SELECT * from chaguaramas_parametros where fecha = '$fecha'");
    $resultChaguaramas = pg_query($sqlChaguaramas);
    $rowChaguaramas = pg_fetch_array($resultChaguaramas);
    $numChaguaramas = pg_num_rows($resultChaguaramas);


    //Consultamos Espino
    $sqlEspino = ("SELECT * from espino_parametros where fecha = '$fecha'");
    $resultEspino = pg_query($sqlEspino);
    $rowEspino = pg_fetch_array($resultEspino);
    $numEspino = pg_num_rows($resultEspino);

    //Consultamos Guardatinajas
    $sqlGuardatinajas = ("SELECT * from guardatinajas_parametros where fecha = '$fecha'");
    $resultGuardatinajas = pg_query($sqlGuardatinajas);
    $rowGuardatinajas = pg_fetch_array($resultGuardatinajas);
    $numGuardatinajas = pg_num_rows($resultGuardatinajas);

    //Consultamos SanJose
    $sqlSanJose = ("SELECT * from san_jose_parametros where fecha = '$fecha'");
    $resultSanJose = pg_query($sqlSanJose);
    $rowSanJose = pg_fetch_array($resultSanJose);
    $numSanJose = pg_num_rows($resultSanJose);

    //Consultamos SanRafael
    $sqlSanRafael = ("SELECT * from san_rafael_parametros where fecha = '$fecha'");
    $resultSanRafael = pg_query($sqlSanRafael);
    $rowSanRafael = pg_fetch_array($resultSanRafael);
    $numSanRafael = pg_num_rows($resultSanRafael);

    //Consultamos SantaMaria
    $sqlSantaMaria = ("SELECT * from santa_maria_parametros where fecha = '$fecha'");
    $resultSantaMaria = pg_query($sqlSantaMaria);
    $rowSantaMaria = pg_fetch_array($resultSantaMaria);
    $numSantaMaria = pg_num_rows($resultSantaMaria);

    //Consultamos Socorro
    $sqlSocorro = ("SELECT * from socorro_parametros where fecha = '$fecha'");
    $resultSocorro = pg_query($sqlSocorro);
    $rowSocorro = pg_fetch_array($resultSocorro);
    $numSocorro = pg_num_rows($resultSocorro);

    //Consultamos SomGaleria
    $sqlSomGaleria = ("SELECT * from som_galeria_parametros where fecha = '$fecha'");
    $resultSomGaleria = pg_query($sqlSomGaleria);
    $rowSomGaleria = pg_fetch_array($resultSomGaleria);
    $numSomGaleria = pg_num_rows($resultSomGaleria);

    //Consultamos SomObrero
    $sqlSomObrero = ("SELECT * from som_obrero_parametros where fecha = '$fecha'");
    $resultSomObrero = pg_query($sqlSomObrero);
    $rowSomObrero = pg_fetch_array($resultSomObrero);
    $numSomObrero = pg_num_rows($resultSomObrero);

    //Consultamos Tucupido
    $sqlTucupido = ("SELECT * from tucupido_parametros where fecha = '$fecha'");
    $resultTucupido = pg_query($sqlTucupido);
    $rowTucupido = pg_fetch_array($resultTucupido);
    $numTucupido = pg_num_rows($resultTucupido);

    //Consultamos VallePascua
    $sqlVallePascua = ("SELECT * from valle_pascua_parametros where fecha = '$fecha'");
    $resultVallePascua = pg_query($sqlVallePascua);
    $rowVallePascua = pg_fetch_array($resultVallePascua);
    $numVallePascua = pg_num_rows($resultVallePascua);

    //Consultamos Zaraza
    $sqlZaraza = ("SELECT * from zaraza_parametros where fecha = '$fecha'");
    $resultZaraza = pg_query($sqlZaraza);
    $rowZaraza = pg_fetch_array($resultZaraza);
    $numZaraza = pg_num_rows($resultZaraza);

    if ($numSanJuan > 0) {
        
                class MIPDF extends TCPDF {
              public function Header() {
                  /*ponemos color al texto y a las lineas */
                  $this->SetTextColor(0,0,0);
                  $this->SetDrawColor(0,0,0);
                  /* definimos variables con titulo y subtitulo */
                  $titulo="Coordinación de Calidad";
                  $subtitulo="Reporte Diario de Parámetros Fisicoquímicos ";
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

        $html = '<br><br><br><br><br><div align="right"><b>Fecha:<font color="red"> '.$fecha.'</font>   </b></div> <br>';


        $MiPDF->writeHTML($html, true, false, true, false, '');

        $html = '<p align="center" ><b>Reporte Diario de los Parámetros Fisicoquímicos de los Diferentes <br> Sistemas de Potabilización del Estado Guárico</b></p><br>';

         $MiPDF->writeHTML($html, true, false, true, false, '');

         $tabla = '<table border="1">
         			<tr bgcolor="#302E2E" style="color:white; font-weight:bold">
         				<td rowspan="2" align="center" width="25%">
         					<br><br>Sistemas
         				</td>
         				<td rowspan="2" align="center">
         					Cloro Residual (ppm)
         				</td>
         				<td colspan="2" align="center" width="16%">
         					Turbiedad (NTU)
         				</td>
         				<td colspan="2" align="center">
         					Color (Unidades Pt - Co)
         				</td>
         				<td colspan="2" align="center" width="16%">
         					pH
         				</td>
         			</tr>
         			<tr bgcolor="#302E2E" style="color:white; font-weight:bold; font-size: 10pt;">
         				<td align="center">
         					Cruda
         				</td>
         				<td align="center">
         					Filtrada
         				</td>
         				<td align="center">
         					Cruda
         				</td>
         				<td align="center">
         					Filtrada
         				</td>
         				<td align="center">
         					Cruda
         				</td>
         				<td align="center">
         					Filtrada
         				</td>
         			</tr>
         			<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>San Juan de los Morros
         				</td>';

         		if ($rowSanJuan['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJuan["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Calabozo
         				</td>';

         		if ($rowCalabozo['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowCalabozo["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Altagracia de Orituco
         				</td>';

         		if ($rowAltagracia['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowAltagracia["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Valle de la Pascua
         				</td>';

         		if ($rowVallePascua['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowVallePascua["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Tucupido
         				</td>';

         		if ($rowTucupido['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowTucupido["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>San José de Guaribe
         				</td>';

         		if ($rowSanJose['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanJose["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Zaraza
         				</td>';

         		if ($rowZaraza['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowZaraza["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>El Socorro
         				</td>';

         		if ($rowSocorro['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSocorro["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Santa María de Ipire
         				</td>';

         		if ($rowSantaMaria['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSantaMaria["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Espino
         				</td>';

         		if ($rowEspino['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowEspino["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowEspino["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Guardatinajas
         				</td>';

         		if ($rowGuardatinajas['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowGuardatinajas["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>San Rafael de Laya
         				</td>';

         		if ($rowSanRafael['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSanRafael["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Chaguaramas
         				</td>';

         		if ($rowChaguaramas['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowChaguaramas["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Sombrero Galería
         				</td>';

         		if ($rowSomGaleria['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomGaleria["phfiltrada"].'
         					</td>
         					</tr>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr>';
         		}

         		$tabla.='<tr >
         				<td bgcolor="grey" style="color:white; font-size:10pt; font-weight:bold; height:20px; " align="center"  >
         					<br>Sombrero Est. Bco. Obrero
         				</td>';

         		if ($rowSomObrero['reporte']== 't') {
         			$tabla.='<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["cloro"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["turcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["turfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["colorcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["colorfiltrada"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["phcruda"].'
         					</td>
         					<td style="font-size:11pt;" align="center">
         						'.$rowSomObrero["phfiltrada"].'
         					</td>
         					</tr></table>';

         		}else{
         			$tabla.='<td colspan="7" bgcolor="#FFE0E0" align="center" style="color:red;">No Reportó</td></tr></table>';
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

        $MiPDF->Output('ReporteParametros', 'D');

}else{
       echo "<script>alert('No Hay Registro de Formato para ese Dia!') </script>";
      echo "<meta http-equiv='refresh' content='0,url=reporteParametros.php'>";
    }



 ?>