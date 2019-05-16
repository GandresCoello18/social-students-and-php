<?php 
    $consulta = $conexion->prepare("SELECT * FROM cuentas_usuario WHERE id_usuario = :id_usuario");
    $consulta->execute(array(
        ':id_usuario' => $cuenta_personal_2
    ));
    $consulta = $consulta->fetch();
?>