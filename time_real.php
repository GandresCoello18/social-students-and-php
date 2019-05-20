<?php
include_once('codigo_fuente/conexion.php');
    $id_item = $_POST['id_item_video'];

    $consulta = $conexion->prepare('SELECT comentarios.texto, comentarios.fecha, cuentas_usuario.avatar, cuentas_usuario.usuario FROM comentarios INNER JOIN cuentas_usuario ON comentarios.id_usuario = cuentas_usuario.id_usuario WHERE id_serie = :id_serie ORDER BY id_comentario DESC');
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
      }
?>