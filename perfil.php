<?php 
	include_once('codigo_fuente/sesion.php');
	$cuenta_personal = $_SESSION['cuenta_personal'];
	include_once('codigo_fuente/conexion.php');
	include_once('codigo_fuente/perfil.php');
	$title = $abstraer_info[0]['usuario'];
	include_once('includes/head.php');
?>
        <div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./portada_post/lenguaje.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="perfil.php">Perfil</a></li>
							<li>Compartir es el objetivo</li>
						</ul>
						<h1 class="white-text"><?php echo $abstraer_info[0]['usuario']; ?></h1>
					</div>
				</div>
			</div>
        </div>

<?php include_once('includes/cursos.php');
include_once('includes/footer.php'); ?>