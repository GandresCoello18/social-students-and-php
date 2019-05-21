<?php

$consulta_buscar = $conexion->prepare("SELECT * FROM post INNER JOIN cuentas_usuario ON post.id_usuario = cuentas_usuario.id_usuario WHERE titulo  LIKE '%$buscando%' ");
$consulta_buscar->execute();
$post = $consulta_buscar->fetchall();

$consulta_buscar_2 = $conexion->prepare("SELECT * FROM cursos WHERE titulo LIKE '%$buscando%' ");
$consulta_buscar_2->execute();
$resul = $consulta_buscar_2->fetchall();

?>