<?php

    require_once('../codigo_fuente/sesion.php');
	require_once('../codigo_fuente/conexion.php');
	if(!$_GET['user']) header('location: ../blog.php');
	$user = $_GET['user'];
	require_once('includes/datos_user.php');

	$title = $consulta['titulo'];
	require_once('includes/head_post.php');

?>