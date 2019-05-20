<?php
    $consulta = $conexion->prepare("SELECT * FROM post INNER JOIN cuentas_usuario ON post.id_usuario = cuentas_usuario.id_usuario WHERE post.titulo = :titulo");
    $consulta->execute(array(
        ':titulo' => $user
    ));
    $consulta = $consulta->fetch();


    function cantidad($recibido, $conexion){
        $total_number = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post WHERE categoria = :categoria");
        $total_number->execute(array(
            ':categoria' => $recibido
        ));
        $total_number = $total_number->fetchall();

        $total_filas = $conexion->query("SELECT FOUND_ROWS() as total");
        $total_filas = $total_filas->fetch()['total'];
        return $total_filas;
    }

    function recientes($conexion){
        $reciente = $conexion->prepare("SELECT * FROM post INNER JOIN cuentas_usuario ON post.id_usuario = cuentas_usuario.id_usuario ORDER BY id_post DESC LIMIT 3");
        $reciente->execute();
        $reciente = $reciente->fetchall();
        return $reciente;
    }
?>