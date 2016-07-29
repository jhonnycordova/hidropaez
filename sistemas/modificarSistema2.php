<?php 
       
       include('../conex.php');
       include('seguridad.php');

      

       $sistema = $_POST["sistema"];

       $htacum = $_POST["htacum"];
       if (empty($htacum)) {
                     $htacum = 0;
       }

       $sulaluminio = $_POST["sulaluminio"];
        if (empty($sulaluminio)) {
                     $sulaluminio = 0;
       }


       $gascloro = $_POST["gascloro"];
       if (empty($gascloro)) {
                     $gascloro = 0;
       }


       $cal = $_POST["cal"];
       if (empty($cal)) {
                     $cal = 0;
       }


       $cilindros_llenos = $_POST["cilindros_llenos"];
       if (empty($cilindros_llenos)) {
                     $cilindros_llenos = 0;
       }

       $cilindros_vacios = $_POST["cilindros_vacios"];
       if (empty($cilindros_vacios)) {
                     $cilindros_vacios = 0;
       }

       $clresidual = $_POST["clresidual"];
       if (empty($clresidual)) {
           $clresidual = 0;
       }

        $hipoclorito = $_POST["hipoclorito"];
       if (empty($hipoclorito)) {
           $hipoclorito = 0;
       }

        $policloruro = $_POST["policloruro"];
       if (empty($policloruro)) {
           $policloruro = 0;
       }

        $gasclorolb = $_POST["gasclorolb"];
       if (empty($gasclorolb)) {
           $gasclorolb = 0;
       }



       

     

     $sql = ("UPDATE almacenes set htacum = '$htacum', sulaluminio = '$sulaluminio', gascloro = '$gascloro', cal = '$cal', cilindros_llenos = '$cilindros_llenos', cilindros_vacios = '$cilindros_vacios', clresidual = '$clresidual', hipoclorito = '$hipoclorito', policloruro = '$policloruro', gasclorolb = '$gasclorolb' where id_sistema = '$sistema'");


       if(pg_query($sql)){
              echo "<script>alert('Modificacion Exitosa!') </script>";
              echo "<meta http-equiv='refresh' content='0,url=../formato/home.php'>";
       }else{
              echo "<script>alert('NO Modificado!') </script>";
              echo "<meta http-equiv='refresh' content='0,url=../formato/home.php'>";
       }


 ?>