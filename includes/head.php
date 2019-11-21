<?php
		require_once('codigo_fuente/conexion.php');
		if(!empty($_SESSION['cuenta_personal'])){
			$cuenta_personal_2 = $_SESSION['cuenta_personal'];
			require_once('codigo_fuente/head.php');
		}
		if(isset($_POST['cambiar'])){
			$carpeta = 'img_perfil/';
			$nombre_del_documento = $_FILES['cambiar_foto']['name'];
			$tamano_del_documento = $_FILES['cambiar_foto']['size'];
			$temporal = $_FILES['cambiar_foto']['tmp_name'];
			if($tamano_del_documento != '0' || $tamano_del_documento != 0){
			opendir($carpeta);
      $destino = $carpeta.$nombre_del_documento;
			copy($temporal,$destino);
			}
			$remplazar = $conexion->prepare("UPDATE cuentas_usuario SET avatar = :avatar WHERE id_usuario = :id_usuario ");
			$remplazar->execute(array(
				':avatar' => $nombre_del_documento,
				':id_usuario' => $cuenta_personal_2
			));
			//echo "<script>window.location.reload();</script>";
		}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" type="text/css" href="css/modificacion.css">
		 <link rel="stylesheet" type="text/css" href="css/login.css">
		 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<title><?php echo $title; ?></title>
    </head>
		<style>
 		label[for=" nuestroinput"] {
 			font-size: 14px;
 			font-weight: 600;
 			color: #fff;
 			background-color: #106BA0;
 			display: inline-block;
 			transition: all .5s;
 			cursor: pointer;
 			padding: 15px 40px !important;
 			text-transform: uppercase;
 			width: fit-content;
 			text-align: center;
 }
 #menu_comandos{
	 display: none;
 }
		</style>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<?php 
							if(!empty($_SESSION['cuenta_personal'])){
								$consulta_Avatar = $consulta['avatar'];
								echo 	"<a class='logo' href='perfil'>
												<img src='./img_perfil/$consulta_Avatar' alt='logo' style='border-radius: 50%;'>
											</a>
											<a data-toggle='modal' data-target='#myModal' style='color:#fff; cursor:pointer;'>Cambiar Foto</a>";
							}else{
								$_SESSION['cuenta_personal'] = null;
								echo 	"<a class='logo' href='index'>
												<img src='./img/logo-alt.webp' alt='logo'>
											</a>"; 
							}
						?>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index" id="nav-inicio">Inicio</a></li>
						<?php 
							if(!empty($_SESSION['cuenta_personal'])){
								echo "<li><a href='cerrar.php' id='nav-login'>Cerar session</a></li>";
							}else{
								$_SESSION['cuenta_personal'] = null;
								echo "<li><a href='login' id='nav-login'>Login</a></li>";
							}
						?>
						<li><a href="cursos" id="nav-cursos">Cursos</a></li>
						<li><a href="blog" id="nav-blog">Blog</a></li>
						<li><a href="contact" id="nav-contact">Contact</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->
				
				<div class="row">
					<div class="col-sm-12">
							
<div id="text_reconocido" style="width: 65%; padding: 5px; height: 30px; border-radius: 10px; position: fixed; right: 0px; background-color: #fff; box-shadow: 2px 2px #FF6700; top: 80px; z-index: 99;">
Pronuncia: Menu de comandos.....
</div>
<article id='menu_comandos' style="overflow-y: scroll; padding: 5px; width: 250px; height: 350px; background-color: #fff; position: fixed; right: 0px; top: 110px; border: 1px solid #FF6700; border-radius: 5px;">
							<h6 class="text-center">Menu Comandos</h6>
							<ul>
								<li><h6>Scroll menu - Desliza el menu de comandos</h6></li>
								<li><h6>Deslizar pantalla arriba / abajo - Mueve el Scroll de pantalla</h6></li>
								<li><h6>Abrir pestaña /nombre de la pagina - Abre dicha pagina</li>
								<li><h6>Iniciar session - inicia tu perfil</h6></li>
								<li><h6>Cerrar session - cierra la session de tu perfil</h6></li>
								<li><h6>Todos los cursos - Muestra la serie de cursos disponibles</h6></li>
								<li><h6>Post recientes - Muestra los ultimos articulos</h6></li>
								<li><h6>Siguiente clase - Mustra el video siguiente de la serie</h6></li>
								<li><h6>Cerrar menu de comandos - oculta el area de los comandos</h6></li>
							</ul>
</article>

					</div>
				</div>
			</div>
		</header>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> <label for="nuestroinput">Selecciona tu imagen <?php //echo $consulta['usuario']; ?> </label></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
			<p>Por el momento no podemos mover tu imagen al destino establecido, si cambias tu foto de perfil solo vivira en el cache de tu navegador mas no en nuestra base de datos.</p>
				<form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        	<input type="file" name="cambiar_foto" id="nuestroinput" class="btn btn-secondary">
					<button type="submit" name="cambiar" class="form-control btn btn-success">Subir</button>
				</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>