<?php
include_once('codigo_fuente/conexion.php');
session_start();
date_default_timezone_set('America/Guayaquil');
   $id_usuario = $_SESSION['cuenta_personal'];
     $text = $_POST['message'];
     $id_item = $_POST['id_item_video'];

   if($text != ''){
      $insertar = $conexion->prepare('INSERT INTO comentarios (texto, fecha, id_usuario, id_serie) VALUES (:texto, :fecha, :id_usuario, :id_serie)');
      $insertar->execute(array(
        ':texto' => $text,
        ':fecha' => date(DATE_RFC2822),
        ':id_usuario' => $id_usuario,
        ':id_serie' => $id_item
      ));
      
     /*$consulta = $conexion->prepare('SELECT comentarios.texto, comentarios.fecha, cuentas_usuario.avatar, cuentas_usuario.usuario FROM comentarios INNER JOIN cuentas_usuario ON comentarios.id_usuario = cuentas_usuario.id_usuario WHERE id_serie = :id_serie');
     $consulta->execute(array(
        ':id_serie' => $id_item
     ));
     $consulta = $consulta->fetchall();
     
      for($i=0; $i<count($consulta); $i++){
         $pasaText = $consulta[$i]['texto'];
         $pasaFecha = $consulta[$i]['fecha'];
         $pasaAvanta = $consulta[$i]['avatar'];
         $pasaUsuario = $consulta[$i]['usuario'];

           echo "<div class='media-left'>
                  <img src='./img/$pasaAvanta' alt=''>
                 </div>
            <div class='media-body'>
               <h4 class='media-heading'>$pasaUsuario</h4>
               <p>$pasaText</p>
               <div class='date-reply'><span>$pasaFecha</span><a href='#' class='reply'>Responder</a></div>
            </div><br/>";    
      }*/
   }
?>