<?php 
	include("../conex.php");
    include("seguridad.php");

    $fecha = $_POST["fecha"];
    $idUsuario = $_POST["idUsuario"];
 	$contadorReportaron = 0;
 	$contadorNoReportaron = 0;
    //Recibo y guardo los datos de San Juan de los Morros
    $noReporto = $_POST["noReporto"];

    if ($noReporto=='No Reportó') {

    	
    	$cloroSanJuan = $_POST["cloroSanJuan"];
    	if (empty($cloroSanJuan)) {
    		$cloroSanJuan = 0;
    	}

    	$turcrudaSanJuan = $_POST["turcrudaSanJuan"];
    	if (empty($turcrudaSanJuan)) {
    		$turcrudaSanJuan = 0;
    	}

    	$turfiltradaSanJuan = $_POST["turfiltradaSanJuan"];
    	if (empty($turfiltradaSanJuan)) {
    		$turfiltradaSanJuan = 0;
    	}

	    $colorcrudaSanJuan = $_POST["colorcrudaSanJuan"];
	    if (empty($colorcrudaSanJuan)) {
    		$colorcrudaSanJuan = 0;
    	}

	    $colorfiltradaSanJuan = $_POST["colorfiltradaSanJuan"];
	    if (empty($colorfiltradaSanJuan)) {
    		$colorfiltradaSanJuan = 0;
    	}

	    $phcrudaSanJuan = $_POST["phcrudaSanJuan"];
	    if (empty($phcrudaSanJuan)) {
    		$phcrudaSanJuan = 0;
    	}

	    $phfiltradaSanJuan = $_POST["phfiltradaSanJuan"];
	    if (empty($phfiltradaSanJuan)) {
    		$phfiltradaSanJuan = 0;
    	}
	   

	    		$sqlSanJuan = ("UPDATE sanjuan_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSanJuan', turcruda = '$turcrudaSanJuan', turfiltrada = '$turfiltradaSanJuan', colorcruda = '$colorcrudaSanJuan', colorfiltrada = '$colorfiltradaSanJuan', phcruda = '$phcrudaSanJuan', phfiltrada = '$phfiltradaSanJuan', reporte = true where fecha = '$fecha' ");

				if(pg_query($sqlSanJuan)){
					$contadorReportaron++;
				}else{

					echo "<script>alert('San Juan No Modificado!') </script>";
					echo "<meta http-equiv='refresh' content='0,url=home.php'>";
				}


    }else{
    		
    		$sqlSanJuan = ("UPDATE sanjuan_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
    		if(pg_query($sqlSanJuan)){
					$contadorNoReportaron++;
				}else{
					echo "<script>alert('Error San Juan!') </script>";
					echo "<meta http-equiv='refresh' content='0,url=home.php'>";
				}
    	
    	 }






   //Recibo los datos de Calabozo
   
    $noReporto2 = $_POST["noReporto2"];

    if ($noReporto2=='No Reportó') {
    	
    	$cloroCalabozo = $_POST["cloroCalabozo"];
    	if (empty($cloroCalabozo)) {
    		$cloroCalabozo = 0;
    	}


    	  $turcrudaCalabozo = $_POST["turcrudaCalabozo"];
    	  if (empty($turcrudaCalabozo)) {
    		$turcrudaCalabozo = 0;
    	}

    	$turfiltradaCalabozo = $_POST["turfiltradaCalabozo"];
    	if (empty($turfiltradaCalabozo)) {
    		$turfiltradaCalabozo = 0;
    	}

	    $colorcrudaCalabozo = $_POST["colorcrudaCalabozo"];
	    if (empty($colorcrudaCalabozo)) {
    		$colorcrudaCalabozo = 0;
    	}

	    $colorfiltradaCalabozo = $_POST["colorfiltradaCalabozo"];
	    if (empty($colorfiltradaCalabozo)) {
    		$colorfiltradaCalabozo = 0;
    	}

	    $phcrudaCalabozo = $_POST["phcrudaCalabozo"];
	    if (empty($phcrudaCalabozo)) {
    		$phcrudaCalabozo = 0;
    	}

	    $phfiltradaCalabozo = $_POST["phfiltradaCalabozo"];
	    if (empty($phfiltradaCalabozo)) {
    		$phfiltradaCalabozo = 0;
    	}

	   			$sqlCalabozo = ("UPDATE calabozo_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroCalabozo', turcruda = '$turcrudaCalabozo', turfiltrada = '$turfiltradaCalabozo', colorcruda = '$colorcrudaCalabozo', colorfiltrada = '$colorfiltradaCalabozo', phcruda = '$phcrudaCalabozo', phfiltrada = '$phfiltradaCalabozo', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlCalabozo)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Calabozo No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
    }else{
    		$sqlCalabozo = ("UPDATE calabozo_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlCalabozo)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Calabozo!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
    }

     //Recibo y Guardo los datos de Altagracia
   
    $noReporto3 = $_POST["noReporto3"];

    if ($noReporto3=='No Reportó') {
    	
    	$cloroAltagracia = $_POST["cloroAltagracia"];
    	if (empty($cloroAltagracia)) {
    		$cloroAltagracia = 0;
    	}

    	  $turcrudaAltagracia = $_POST["turcrudaAltagracia"];
    	  if (empty($turcrudaAltagracia)) {
    		$turcrudaAltagracia = 0;
    	}

    	  $turfiltradaAltagracia = $_POST["turfiltradaAltagracia"];
    	  if (empty($turfiltradaAltagracia)) {
    		$turfiltradaAltagracia = 0;
    	}

	    $colorcrudaAltagracia = $_POST["colorcrudaAltagracia"];
	    if (empty($colorcrudaAltagracia)) {
    		$colorcrudaAltagracia = 0;
    	}

	    $colorfiltradaAltagracia = $_POST["colorfiltradaAltagracia"];
	    if (empty($colorfiltradaAltagracia)) {
    		$colorfiltradaAltagracia = 0;
    	}

	    $phcrudaAltagracia = $_POST["phcrudaAltagracia"];
	    if (empty($phcrudaAltagracia)) {
    		$phcrudaAltagracia = 0;
    	}

	    $phfiltradaAltagracia = $_POST["phfiltradaAltagracia"];
	    if (empty($phfiltradaAltagracia)) {
    		$phfiltradaAltagracia = 0;
    	}
	   
	   		$sqlAltagracia = ("UPDATE altagracia_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroAltagracia', turcruda = '$turcrudaAltagracia', turfiltrada = '$turfiltradaAltagracia', colorcruda = '$colorcrudaAltagracia', colorfiltrada = '$colorfiltradaAltagracia', phcruda = '$phcrudaAltagracia', phfiltrada = '$phfiltradaAltagracia', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlAltagracia)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Altagracia No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlAltagracia = ("UPDATE altagracia_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlAltagracia)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Altagracia!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
    }


     //Recibo y guardo los datos de Valle de la pAscua
   
    $noReporto4 = $_POST["noReporto4"];

    if ($noReporto4=='No Reportó') {
    	
    	$cloroVallePascua = $_POST["cloroVallePascua"];
    	if (empty($cloroVallePascua)) {
    		$cloroVallePascua = 0;
    	}

    	  $turcrudaVallePascua = $_POST["turcrudaVallePascua"];
    	  if (empty($turcrudaVallePascua)) {
    		$turcrudaVallePascua = 0;
    	}

    	  $turfiltradaVallePascua = $_POST["turfiltradaVallePascua"];
    	  if (empty($turfiltradaVallePascua)) {
    		$turfiltradaVallePascua = 0;
    	}

	    $colorcrudaVallePascua = $_POST["colorcrudaVallePascua"];
	    if (empty($colorcrudaVallePascua)) {
    		$colorcrudaVallePascua = 0;
    	}

	    $colorfiltradaVallePascua = $_POST["colorfiltradaVallePascua"];
	    if (empty($colorfiltradaVallePascua)) {
    		$colorfiltradaVallePascua = 0;
    	}

	    $phcrudaVallePascua = $_POST["phcrudaVallePascua"];
	    if (empty($phcrudaVallePascua)) {
    		$phcrudaVallePascua = 0;
    	}

	    $phfiltradaVallePascua = $_POST["phfiltradaVallePascua"];
	    if (empty($phfiltradaVallePascua)) {
    		$phfiltradaVallePascua = 0;
    	}

	   			$sqlVallePascua = ("UPDATE valle_pascua_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroVallePascua', turcruda = '$turcrudaVallePascua', turfiltrada = '$turfiltradaVallePascua', colorcruda = '$colorcrudaVallePascua', colorfiltrada = '$colorfiltradaVallePascua', phcruda = '$phcrudaVallePascua', phfiltrada = '$phfiltradaVallePascua', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlVallePascua)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Valle de La Pascua No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlVallePascua = ("UPDATE valle_pascua_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlVallePascua)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Valle de la Pascua!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
    }

     //Recibo y guardo los datos de Tucupido
   
    $noReporto5 = $_POST["noReporto5"];

    if ($noReporto5=='No Reportó') {
    	
    	$cloroTucupido = $_POST["cloroTucupido"];
    	if (empty($cloroTucupido)) {
    		$cloroTucupido = 0;
    	}

    	  $turcrudaTucupido = $_POST["turcrudaTucupido"];
    	  if (empty($turcrudaTucupido)) {
    		$turcrudaTucupido = 0;
    	}

    	  $turfiltradaTucupido = $_POST["turfiltradaTucupido"];
    	  if (empty($turfiltradaTucupido)) {
    		$turfiltradaTucupido = 0;
    	}

	    $colorcrudaTucupido = $_POST["colorcrudaTucupido"];
	    if (empty($colorcrudaTucupido)) {
    		$colorcrudaTucupido = 0;
    	}

	    $colorfiltradaTucupido = $_POST["colorfiltradaTucupido"];
	    if (empty($colorfiltradaTucupido)) {
    		$colorfiltradaTucupido = 0;
    	}

	    $phcrudaTucupido = $_POST["phcrudaTucupido"];
	    if (empty($phcrudaTucupido)) {
    		$phcrudaTucupido = 0;
    	}

	    $phfiltradaTucupido = $_POST["phfiltradaTucupido"];
	    if (empty($phfiltradaTucupido)) {
    		$phfiltradaTucupido = 0;
    	}

	   			 $sqlTucupido = ("UPDATE tucupido_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroTucupido', turcruda = '$turcrudaTucupido', turfiltrada = '$turfiltradaTucupido', colorcruda = '$colorcrudaTucupido', colorfiltrada = '$colorfiltradaTucupido', phcruda = '$phcrudaTucupido', phfiltrada = '$phfiltradaTucupido', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlTucupido)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Tucupido No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlTucupido = ("UPDATE tucupido_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlTucupido)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Tucupido!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
    }

    //Recibo y guardo los datos de San Jose de Guaribe
   
    $noReporto6 = $_POST["noReporto6"];

    if ($noReporto6=='No Reportó') {
    	
    	$cloroSanJose = $_POST["cloroSanJose"];
    	if (empty($cloroSanJose)) {
    		$cloroSanJose = 0;
    	}

    	$turcrudaSanJose = $_POST["turcrudaSanJose"];
    	if (empty($turcrudaSanJose)) {
    		$turcrudaSanJose = 0;
    	}

    	$turfiltradaSanJose = $_POST["turfiltradaSanJose"];
    	if (empty($turfiltradaSanJose)) {
    		$turfiltradaSanJose = 0;
    	}

	    $colorcrudaSanJose = $_POST["colorcrudaSanJose"];
	    if (empty($colorcrudaSanJose)) {
    		$colorcrudaSanJose = 0;
    	}

	    $colorfiltradaSanJose = $_POST["colorfiltradaSanJose"];
	    if (empty($colorfiltradaSanJose)) {
    		$colorfiltradaSanJose = 0;
    	}

	    $phcrudaSanJose = $_POST["phcrudaSanJose"];
	    if (empty($phcrudaSanJose)) {
    		$phcrudaSanJose = 0;
    	}

	    $phfiltradaSanJose = $_POST["phfiltradaSanJose"];
	    if (empty($phfiltradaSanJose)) {
    		$phfiltradaSanJose = 0;
    	}

    			 $sqlSanJose = ("UPDATE san_jose_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSanJose', turcruda = '$turcrudaSanJose', turfiltrada = '$turfiltradaSanJose', colorcruda = '$colorcrudaSanJose', colorfiltrada = '$colorfiltradaSanJose', phcruda = '$phcrudaSanJose', phfiltrada = '$phfiltradaSanJose', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSanJose)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('San Jose No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	   
	    
	    
    }else{
    		$sqlSanJose = ("UPDATE san_jose_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSanJose)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error San Jose!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

	 //Recibo y guardo los datos de Zaraza
   
    $noReporto7 = $_POST["noReporto7"];

    if ($noReporto7=='No Reportó') {
    	
    	$cloroZaraza = $_POST["cloroZaraza"];
    	if (empty($cloroZaraza)) {
    		$cloroZaraza = 0;
    	}

    	$turcrudaZaraza = $_POST["turcrudaZaraza"];
    	if (empty($turcrudaZaraza)) {
    		$turcrudaZaraza = 0;
    	}

    	$turfiltradaZaraza = $_POST["turfiltradaZaraza"];
    	if (empty($turfiltradaZaraza)) {
    		$turfiltradaZaraza = 0;
    	}

	    $colorcrudaZaraza = $_POST["colorcrudaZaraza"];
	    if (empty($colorcrudaZaraza)) {
    		$colorcrudaZaraza = 0;
    	}

	    $colorfiltradaZaraza = $_POST["colorfiltradaZaraza"];
	    if (empty($colorfiltradaZaraza)) {
    		$colorfiltradaZaraza = 0;
    	}

	    $phcrudaZaraza = $_POST["phcrudaZaraza"];
	    if (empty($phcrudaZaraza)) {
    		$phcrudaZaraza = 0;
    	}

	    $phfiltradaZaraza = $_POST["phfiltradaZaraza"];
	    if (empty($phfiltradaZaraza)) {
    		$phfiltradaZaraza = 0;
    	}

    			$sqlZaraza = ("UPDATE zaraza_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroZaraza', turcruda = '$turcrudaZaraza', turfiltrada = '$turfiltradaZaraza', colorcruda = '$colorcrudaZaraza', colorfiltrada = '$colorfiltradaZaraza', phcruda = '$phcrudaZaraza', phfiltrada = '$phfiltradaZaraza', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlZaraza)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Zaraza No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlZaraza = ("UPDATE zaraza_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlZaraza)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Zaraza!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}


	 //Recibo Y GUARDO  los datos de El Socrro
   
    $noReporto8 = $_POST["noReporto8"];

    if ($noReporto8=='No Reportó') {
    	
    	$cloroSocorro = $_POST["cloroSocorro"];
    	if (empty($cloroSocorro)) {
    		$cloroSocorro = 0;
    	}

    	$turcrudaSocorro = $_POST["turcrudaSocorro"];
    	if (empty($turcrudaSocorro)) {
    		$turcrudaSocorro = 0;
    	}

    	$turfiltradaSocorro = $_POST["turfiltradaSocorro"];
    	if (empty($turfiltradaSocorro)) {
    		$turfiltradaSocorro = 0;
    	}

	    $colorcrudaSocorro = $_POST["colorcrudaSocorro"];
	    if (empty($colorcrudaSocorro)) {
    		$colorcrudaSocorro = 0;
    	}

	    $colorfiltradaSocorro = $_POST["colorfiltradaSocorro"];
	    if (empty($colorfiltradaSocorro)) {
    		$colorfiltradaSocorro = 0;
    	}

	    $phcrudaSocorro = $_POST["phcrudaSocorro"];
	    if (empty($phcrudaSocorro)) {
    		$phcrudaSocorro = 0;
    	}

	    $phfiltradaSocorro = $_POST["phfiltradaSocorro"];
	    if (empty($phfiltradaSocorro)) {
    		$phfiltradaSocorro = 0;
    	}

    			$sqlSocorro = ("UPDATE socorro_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSocorro', turcruda = '$turcrudaSocorro', turfiltrada = '$turfiltradaSocorro', colorcruda = '$colorcrudaSocorro', colorfiltrada = '$colorfiltradaSocorro', phcruda = '$phcrudaSocorro', phfiltrada = '$phfiltradaSocorro', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSocorro)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('El Socorro No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    	    
	    
    }else{
    		$sqlSocorro = ("UPDATE socorro_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSocorro)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error El Socorro!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

		 //Recibo y guardo los datos de Santa Maria de IPIRE
   
    $noReporto9 = $_POST["noReporto9"];

    if ($noReporto9=='No Reportó') {
    	
    	$cloroSantaMaria = $_POST["cloroSantaMaria"];
    	if (empty($cloroSantaMaria)) {
    		$cloroSantaMaria = 0;
    	}

    	$turcrudaSantaMaria = $_POST["turcrudaSantaMaria"];
    	if (empty($turcrudaSantaMaria)) {
    		$turcrudaSantaMaria = 0;
    	}

    	$turfiltradaSantaMaria = $_POST["turfiltradaSantaMaria"];
    	if (empty($turfiltradaSantaMaria)) {
    		$turfiltradaSantaMaria = 0;
    	}

	    $colorcrudaSantaMaria = $_POST["colorcrudaSantaMaria"];
	    if (empty($colorcrudaSantaMaria)) {
    		$colorcrudaSantaMaria = 0;
    	}

	    $colorfiltradaSantaMaria = $_POST["colorfiltradaSantaMaria"];
	    if (empty($colorfiltradaSantaMaria)) {
    		$colorfiltradaSantaMaria = 0;
    	}

	    $phcrudaSantaMaria = $_POST["phcrudaSantaMaria"];
	    if (empty($phcrudaSantaMaria)) {
    		$phcrudaSantaMaria = 0;
    	}

	    $phfiltradaSantaMaria = $_POST["phfiltradaSantaMaria"];
	    if (empty($phfiltradaSantaMaria)) {
    		$phfiltradaSantaMaria = 0;
    	}


    		$sqlSantaMaria = ("UPDATE santa_maria_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSantaMaria', turcruda = '$turcrudaSantaMaria', turfiltrada = '$turfiltradaSantaMaria', colorcruda = '$colorcrudaSantaMaria', colorfiltrada = '$colorfiltradaSantaMaria', phcruda = '$phcrudaSantaMaria', phfiltrada = '$phfiltradaSantaMaria', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSantaMaria)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Santa Maria No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlSantaMaria = ("UPDATE santa_maria_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSantaMaria)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Santa Maria!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

//Recibo y guaardo los datos de Espino
   
    $noReporto10 = $_POST["noReporto10"];

    if ($noReporto10=='No Reportó') {
    	
    	$cloroEspino = $_POST["cloroEspino"];
    	if (empty($cloroEspino)) {
    		$cloroEspino = 0;
    	}

    	$turcrudaEspino = $_POST["turcrudaEspino"];
    	if (empty($turcrudaEspino)) {
    		$turcrudaEspino = 0;
    	}

    	$turfiltradaEspino = $_POST["turfiltradaEspino"];
    	if (empty($turfiltradaEspino)) {
    		$turfiltradaEspino = 0;
    	}

	    $colorcrudaEspino = $_POST["colorcrudaEspino"];
	    if (empty($colorcrudaEspino)) {
    		$colorcrudaEspino = 0;
    	}

	    $colorfiltradaEspino = $_POST["colorfiltradaEspino"];
	    if (empty($colorfiltradaEspino)) {
    		$colorfiltradaEspino = 0;
    	}

	    $phcrudaEspino = $_POST["phcrudaEspino"];
	    if (empty($phcrudaEspino)) {
    		$phcrudaEspino = 0;
    	}

	    $phfiltradaEspino = $_POST["phfiltradaEspino"];
	    if (empty($phfiltradaEspino)) {
    		$phfiltradaEspino = 0;
    	}

    		$sqlEspino = ("UPDATE espino_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroEspino', turcruda = '$turcrudaEspino', turfiltrada = '$turfiltradaEspino', colorcruda = '$colorcrudaEspino', colorfiltrada = '$colorfiltradaEspino', phcruda = '$phcrudaEspino', phfiltrada = '$phfiltradaEspino', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlEspino)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Espino No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlEspino = ("UPDATE espino_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlEspino)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Espino!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

	//Recibo y guardo los datos de Guardatinajas
   
    $noReporto11 = $_POST["noReporto11"];

    if ($noReporto11=='No Reportó') {
    	
    	$cloroGuardatinajas = $_POST["cloroGuardatinajas"];
    	if (empty($cloroGuardatinajas)) {
    		$cloroGuardatinajas = 0;
    	}

    	$turcrudaGuardatinajas = $_POST["turcrudaGuardatinajas"];
    	if (empty($turcrudaGuardatinajas)) {
    		$turcrudaGuardatinajas = 0;
    	}

    	$turfiltradaGuardatinajas = $_POST["turfiltradaGuardatinajas"];
    	if (empty($turfiltradaGuardatinajas)) {
    		$turfiltradaGuardatinajas = 0;
    	}

	    $colorcrudaGuardatinajas = $_POST["colorcrudaGuardatinajas"];
	    if (empty($colorcrudaGuardatinajas)) {
    		$colorcrudaGuardatinajas = 0;
    	}

	    $colorfiltradaGuardatinajas = $_POST["colorfiltradaGuardatinajas"];
	    if (empty($colorfiltradaGuardatinajas)) {
    		$colorfiltradaGuardatinajas = 0;
    	}

	    $phcrudaGuardatinajas = $_POST["phcrudaGuardatinajas"];
	    if (empty($phcrudaGuardatinajas)) {
    		$phcrudaGuardatinajas = 0;
    	}

	    $phfiltradaGuardatinajas = $_POST["phfiltradaGuardatinajas"];
	    if (empty($phfiltradaGuardatinajas)) {
    		$phfiltradaGuardatinajas = 0;
    	}

	    	  $sqlGuardatinajas = ("UPDATE guardatinajas_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroGuardatinajas', turcruda = '$turcrudaGuardatinajas', turfiltrada = '$turfiltradaGuardatinajas', colorcruda = '$colorcrudaGuardatinajas', colorfiltrada = '$colorfiltradaGuardatinajas', phcruda = '$phcrudaGuardatinajas', phfiltrada = '$phfiltradaGuardatinajas', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlGuardatinajas)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Guardatinajas No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlGuardatinajas = ("UPDATE guardatinajas_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlGuardatinajas)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Guardatinajas!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

	//Recibo y guardo los datos de San Rafael de Laya
   
    $noReporto12 = $_POST["noReporto12"];

    if ($noReporto12=='No Reportó') {
    	
    	$cloroSanRafael = $_POST["cloroSanRafael"];
    	if (empty($cloroSanRafael)) {
    		$cloroSanRafael = 0;
    	}

    	$turcrudaSanRafael = $_POST["turcrudaSanRafael"];
    	if (empty($turcrudaSanRafael)) {
    		$turcrudaSanRafael = 0;
    	}

    	$turfiltradaSanRafael = $_POST["turfiltradaSanRafael"];
    	if (empty($turfiltradaSanRafael)) {
    		$turfiltradaSanRafael = 0;
    	}

	    $colorcrudaSanRafael = $_POST["colorcrudaSanRafael"];
	    if (empty($colorcrudaSanRafael)) {
    		$colorcrudaSanRafael = 0;
    	}

	    $colorfiltradaSanRafael = $_POST["colorfiltradaSanRafael"];
	    if (empty($colorfiltradaSanRafael)) {
    		$colorfiltradaSanRafael = 0;
    	}

	    $phcrudaSanRafael = $_POST["phcrudaSanRafael"];
	    if (empty($phcrudaSanRafael)) {
    		$phcrudaSanRafael = 0;
    	}

	    $phfiltradaSanRafael = $_POST["phfiltradaSanRafael"];
	    if (empty($phfiltradaSanRafael)) {
    		$phfiltradaSanRafael = 0;
    	}

	   			  $sqlSanRafael = ("UPDATE san_rafael_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSanRafael', turcruda = '$turcrudaSanRafael', turfiltrada = '$turfiltradaSanRafael', colorcruda = '$colorcrudaSanRafael', colorfiltrada = '$colorfiltradaSanRafael', phcruda = '$phcrudaSanRafael', phfiltrada = '$phfiltradaSanRafael', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSanRafael)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('San Rafael No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlSanRafael = ("UPDATE san_rafael_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSanRafael)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error San Rafael!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }

	}

	//Recibo y guardo los datos de Chaguaramas
   
    $noReporto13 = $_POST["noReporto13"];

    if ($noReporto13=='No Reportó') {
    	
    	$cloroChaguaramas = $_POST["cloroChaguaramas"];
    	if (empty($cloroChaguaramas)) {
    		$cloroChaguaramas = 0;
    	}

    	$turcrudaChaguaramas = $_POST["turcrudaChaguaramas"];
    	if (empty($turcrudaChaguaramas)) {
    		$turcrudaChaguaramas = 0;
    	}

    	$turfiltradaChaguaramas = $_POST["turfiltradaChaguaramas"];
    	if (empty($turfiltradaChaguaramas)) {
    		$turfiltradaChaguaramas = 0;
    	}

	    $colorcrudaChaguaramas = $_POST["colorcrudaChaguaramas"];
	    if (empty($colorcrudaChaguaramas)) {
    		$colorcrudaChaguaramas = 0;
    	}

	    $colorfiltradaChaguaramas = $_POST["colorfiltradaChaguaramas"];
	    if (empty($colorfiltradaChaguaramas)) {
    		$colorfiltradaChaguaramas = 0;
    	}

	    $phcrudaChaguaramas = $_POST["phcrudaChaguaramas"];
	    if (empty($phcrudaChaguaramas)) {
    		$phcrudaChaguaramas = 0;
    	}

	    $phfiltradaChaguaramas = $_POST["phfiltradaChaguaramas"];
	    if (empty($phfiltradaChaguaramas)) {
    		$phfiltradaChaguaramas = 0;
    	}

	    	  $sqlChaguaramas = ("UPDATE chaguaramas_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroChaguaramas', turcruda = '$turcrudaChaguaramas', turfiltrada = '$turfiltradaChaguaramas', colorcruda = '$colorcrudaChaguaramas', colorfiltrada = '$colorfiltradaChaguaramas', phcruda = '$phcrudaChaguaramas', phfiltrada = '$phfiltradaChaguaramas', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlChaguaramas)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Chaguaramas No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
	    
    }else{
    		$sqlChaguaramas = ("UPDATE chaguaramas_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlChaguaramas)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Chaguaramas!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }

	}

	//Recibo y guardo los datos de SOmbrero Galeria
   
    $noReporto14 = $_POST["noReporto14"];

    if ($noReporto14=='No Reportó') {
    	
    	$cloroSomGaleria = $_POST["cloroSomGaleria"];
    	if (empty($cloroSomGaleria)) {
    		$cloroSomGaleria = 0;
    	}

    	$turcrudaSomGaleria = $_POST["turcrudaSomGaleria"];
    	if (empty($turcrudaSomGaleria)) {
    		$turcrudaSomGaleria = 0;
    	}

    	$turfiltradaSomGaleria = $_POST["turfiltradaSomGaleria"];
    	if (empty($turfiltradaSomGaleria)) {
    		$turfiltradaSomGaleria = 0;
    	}

	    $colorcrudaSomGaleria = $_POST["colorcrudaSomGaleria"];
	    if (empty($colorcrudaSomGaleria)) {
    		$colorcrudaSomGaleria = 0;
    	}

	    $colorfiltradaSomGaleria = $_POST["colorfiltradaSomGaleria"];
	    if (empty($colorfiltradaSomGaleria)) {
    		$colorfiltradaSomGaleria = 0;
    	}

	    $phcrudaSomGaleria = $_POST["phcrudaSomGaleria"];
	    if (empty($phcrudaSomGaleria)) {
    		$phcrudaSomGaleria = 0;
    	}

	    $phfiltradaSomGaleria = $_POST["phfiltradaSomGaleria"];
	    if (empty($phfiltradaSomGaleria)) {
    		$phfiltradaSomGaleria = 0;
    	}

    			 $sqlSomGaleria = ("UPDATE som_galeria_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSomGaleria', turcruda = '$turcrudaSomGaleria', turfiltrada = '$turfiltradaSomGaleria', colorcruda = '$colorcrudaSomGaleria', colorfiltrada = '$colorfiltradaSomGaleria', phcruda = '$phcrudaSomGaleria', phfiltrada = '$phfiltradaSomGaleria', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSomGaleria)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Sombrero galeria No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	   
	    
	    
    }else{
    		$sqlSomGaleria = ("UPDATE som_galeria_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSomGaleria)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Sombrero Galeria!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }

	}

	//Recibo y guardo los datos de SOmbrero Banco Obrero
   
    $noReporto15 = $_POST["noReporto15"];

    if ($noReporto15=='No Reportó') {
    	
    	$cloroSomObrero = $_POST["cloroSomObrero"];
    	if (empty($cloroSomObrero)) {
    		$cloroSomObrero = 0;
    	}

    	$turcrudaSomObrero = $_POST["turcrudaSomObrero"];
    	if (empty($turcrudaSomObrero)) {
    		$turcrudaSomObrero = 0;
    	}

    	$turfiltradaSomObrero = $_POST["turfiltradaSomObrero"];
    	if (empty($turfiltradaSomObrero)) {
    		$turfiltradaSomObrero = 0;
    	}

	    $colorcrudaSomObrero = $_POST["colorcrudaSomObrero"];
	    if (empty($colorcrudaSomObrero)) {
    		$colorcrudaSomObrero = 0;
    	}

	    $colorfiltradaSomObrero = $_POST["colorfiltradaSomObrero"];
	    if (empty($colorfiltradaSomObrero)) {
    		$colorfiltradaSomObrero = 0;
    	}

	    $phcrudaSomObrero = $_POST["phcrudaSomObrero"];
	    if (empty($phcrudaSomObrero)) {
    		$phcrudaSomObrero = 0;
    	}

	    $phfiltradaSomObrero = $_POST["phfiltradaSomObrero"];
	    if (empty($phfiltradaSomObrero)) {
    		$phfiltradaSomObrero = 0;
    	}
	    
	   			 $sqlSomObrero = ("UPDATE som_obrero_parametros set id_empleado = '$idUsuario', fecha = '$fecha', cloro = '$cloroSomObrero', turcruda = '$turcrudaSomObrero', turfiltrada = '$turfiltradaSomObrero', colorcruda = '$colorcrudaSomObrero', colorfiltrada = '$colorfiltradaSomObrero', phcruda = '$phcrudaSomObrero', phfiltrada = '$phfiltradaSomObrero', reporte = true where fecha = '$fecha' ");

                if(pg_query($sqlSomObrero)){
                    $contadorReportaron++;
                }else{

                    echo "<script>alert('Sombrero Obrero No Modificado!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	    
    }else{
    		$sqlSomObrero = ("UPDATE som_obrero_parametros set id_empleado = '$idUsuario', fecha = '$fecha', reporte = false where fecha = '$fecha' ");
            if(pg_query($sqlSomObrero)){
                    $contadorNoReportaron++;
                }else{
                    echo "<script>alert('Error Sombrero Obrero!') </script>";
                    echo "<meta http-equiv='refresh' content='0,url=home.php'>";
                }
	}

/*
  	echo "<script>alert('Reportaron ".$contadorReportaron."') </script>";
  	echo "<script>alert('No Reportaron ".$contadorNoReportaron."') </script>";*/

  	if ($contadorReportaron + $contadorNoReportaron == 15) {
  		echo "<script>alert('Bien, se Modificaron Reportados y No reportados en la base de datos') </script>";
  		echo "<meta http-equiv='refresh' content='0,url=home.php'>";
  	}else{
  		echo "<script>alert('Error, No se guardo algo') </script>";
  		echo "<meta http-equiv='refresh' content='0,url=home.php'>";
  	}


  



 ?>