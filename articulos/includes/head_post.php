<?php
		require_once('../codigo_fuente/conexion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title><?php echo $title; ?></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="../font/flaticon.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link type="text/css" rel="stylesheet" href="../css/modificacion.css"/>
    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="../index.php">
							<img src="../img/<?php echo $consulta['avatar']; ?>" alt="logo" style="border-radius:50%;">
						</a>
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
						<li><a href="../index.php" id="nav-inicio">Inicio</a></li>
						<?php 
							if(!empty($_SESSION['cuenta_personal'])){
								echo "<li><a href='../cerrar.php' id='nav-login'>Cerar session</a></li>";
							}else{
								$_SESSION['cuenta_personal'] = null;
								echo "<li><a href='../login.php' id='nav-login'>Login</a></li>";
							}
						?>
						<li><a href="../cursos.php" id="nav-cursos">Cursos</a></li>
						<li><a href="../blog.php" id="nav-blog">Blog</a></li>
						<li><a href="../contact.php" id="nav-contact">Contact</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->
			</div>
		</header>


		<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(../img/<?php echo $consulta['imagen']; ?>)"></div>
<!-- /Backgound Image -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<ul class="hero-area-tree">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li>Compartir es el Objetivo</li>
			</ul>
			<h1 class="white-text"><?php echo $consulta['titulo']; ?></h1>
			<ul class="blog-post-meta">
				<li class="blog-meta-author">De : <a href="#"><?php echo $consulta['usuario']; ?></a></li>
				<li><?php echo $consulta['fecha']; ?></li>
				<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></li>
			</ul>
		</div>
	</div>
</div>

</div>