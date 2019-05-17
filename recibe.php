<?php
include_once('codigo_fuente/conexion.php');
session_start();
date_default_timezone_set('America/Guayaquil');
   $id_usuario = $_SESSION['cuenta_personal'];
     $text = $_POST['message'];
     $id_item = $_POST['id_item_video'];
 
     $insertar = $conexion->prepare('INSERT INTO comentarios (texto, fecha, id_usuario, id_serie) VALUES (:texto, :fecha, :id_usuario, :id_serie)');
     $insertar->execute(array(
        ':texto' => $text,
        ':fecha' => date(DATE_RFC2822),
        ':id_usuario' => $id_usuario,
        ':id_serie' => $id_item
     ));
      
     $consulta = $conexion->prepare('SELECT * FROM comentarios WHERE id_serie = :id_serie');
     $consulta->execute(array(
        ':id_serie' => $id_item
     ));
     $consulta = $consulta->fetchall();
     $uno = 1;
      for($i=0; $i<count($consulta); $i++){
         $pasaText = $consulta[$i][1];
         $pasaFecha = $consulta[$i][2];
     
           echo "<div class='media-left'>
                  <img src='./img/avatar-1.jpg' alt=''>
                 </div>
            <div class='media-body'>
               <h4 class='media-heading'>John Doe</h4>
               <p>$pasaText</p>
               <div class='date-reply'><span>$pasaFecha</span><a href='#' class='reply'>Responder</a></div>
            </div><br/>";    
      }
?>