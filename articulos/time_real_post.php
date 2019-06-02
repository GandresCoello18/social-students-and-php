<?php
include_once('../codigo_fuente/conexion.php');
    $id_item = $_POST['id_item_video'];

    $consulta = $conexion->prepare('SELECT comentario_post.texto, comentario_post.fecha, cuentas_usuario.avatar, cuentas_usuario.usuario FROM comentario_post INNER JOIN cuentas_usuario ON comentario_post.id_usuario = cuentas_usuario.id_usuario WHERE comentario_post.id_post = :id_post ORDER BY id_coment_post DESC');
     $consulta->execute(array(
        ':id_post' => $id_item
     ));
     $consulta = $consulta->fetchall();
     
      for($i=0; $i<count($consulta); $i++){
         $pasaText = $consulta[$i]['texto'];
         $pasaFecha = $consulta[$i]['fecha'];
         $pasaAvanta = $consulta[$i]['avatar'];
         $pasaUsuario = $consulta[$i]['usuario'];

           echo "<div class='media-left'>
                  <img src='../img_perfil/$pasaAvanta' alt=''>
                 </div>
            <div class='media-body'>
               <h4 class='media-heading'>$pasaUsuario</h4>
               <p>$pasaText</p>
               <div class='date-reply'><span>$pasaFecha</span><a href='#' class='reply'>Responder</a></div>
            </div><br/>";    
      }
?>


<script type="text/javascript">
	if(document.querySelector(".media-left") == null){
      document.querySelector(".alert-info").style.display = "block";
   }else{
      document.querySelector(".alert-info").style.display = "none";
   }
</script>