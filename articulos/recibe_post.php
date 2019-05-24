<?php

echo $_POST['message'] . ' ';
echo $_POST['id_item_video'];

include_once('../codigo_fuente/conexion.php');
session_start();
date_default_timezone_set('America/Guayaquil');
   $id_usuario = $_SESSION['cuenta_personal'];
     $text = $_POST['message'];
     $id_item = $_POST['id_item_video'];

   if($text != ''){
      $insertar = $conexion->prepare('INSERT INTO comentario_post (texto, fecha, id_usuario, id_post) VALUES (:texto, :fecha, :id_usuario, :id_post)');
      $insertar->execute(array(
        ':texto' => $text,
        ':fecha' => date(DATE_RFC2822),
        ':id_usuario' => $id_usuario,
        ':id_post' => $id_item
      ));
  }

?>