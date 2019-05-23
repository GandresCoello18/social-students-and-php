<?php
require_once('codigo_fuente/sesion.php');
	$title = 'Cursos';
    include_once('includes/head.php');
?>
<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.webp)"></div>
<!-- /Backgound Image -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<ul class="hero-area-tree">
				<li><a href="index">Inicio</a></li>
				<li><a href="cursos">Cursos</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<?php include_once('includes/cursos.php'); ?>

<?php
    include_once('includes/footer.php');
?>