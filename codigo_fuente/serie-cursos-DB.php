<?php

$consulta_item_cursos = $conexion->prepare('SELECT * FROM serie_de_cursos WHERE id_cursos = :id_cursos');
$consulta_item_cursos->execute(array(
    ':id_cursos' => $tema
));
$consulta_item_cursos = $consulta_item_cursos->fetchall();

if(!$_GET['tema']) header('location: cursos.php');

?>