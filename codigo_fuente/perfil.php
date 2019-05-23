<?php
    $abstraer_info = $conexion->prepare('SELECT * FROM cuentas_usuario WHERE id_usuario = :id_usuario');
    $abstraer_info->execute(array(
        ':id_usuario' => $cuenta_personal
    ));
    $abstraer_info = $abstraer_info->fetchall();

    if(!$_SESSION['cuenta_personal']){
        header('location: login');
    }
?>