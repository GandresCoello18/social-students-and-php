<?php
	include_once('codigo_fuente/sesion.php');
	$title = 'Social Students';
	require_once('includes/head.php');
	$num_curso = 4;
	require_once('codigo_fuente/cursos.php');
	
$objeto = new Cursos();
$resul = $objeto::abstraer_cursos($num_curso, $conexion);
?>

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.webp)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Social Students</h1>
							<p class="lead white-text">Compartir tus conocimientos con otros estudiantes es crecer profecionalmente y tu tambien puedes hacerlo.</p>
							<a class="main-button icon-button" href="login">Empezar ahora</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2>Lo que puedes obtener</h2>
							<p class="lead">3 elementos fundamentales.</p>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Cursos Tech</h4>
								<p>Contiene una serie de tutoriales en video para la explicacion del tema.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Grupos de estudiantes</h4>
								<p>Cualquier estudiante puede compartir su conocimiento en social students.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Comunidad</h4>
								<p>Puede preguntar si tienes algun inquietud respecto a algun tema.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/about.webp" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container" style="position: relative; top: -60px;">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Mas Recientes</h2>
						<p class="lead">Observa los nuevos contenidos que tenemos para ti.</p>
					</div>
				</div>
				<!-- /row -->
					<?php include_once('includes/cursos.php'); ?>
				<!-- courses -->
				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="cursos">Mas Cursos</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		<!-- Call To Action -->
		<div id="cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.webp)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h2 class="white-text">Aprende en cualquier momento de tu dia</h2>
						<p class="lead white-text">Conoce el contenido que ofrece las instituciones tecnologicas.</p>
						<a class="main-button icon-button" href="cursos">Saber mas</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Lo que puedes obtener</h2>
						<p class="lead">3 elementos fundamentales.</p>
					</div>

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Cursos Tech</h4>
								<p>Contiene una serie de tutoriales en video para la explicacion del tema.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Grupos de estudiantes</h4>
								<p>Cualquier estudiante puede compartir su conocimiento en social students.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Comunidad</h4>
								<p>Puede preguntar si tienes algun inquietud respecto a algun tema.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

				</div>
				<!-- /row -->

				<hr class="section-hr">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h3>¿Como funciona social students?</h3>
						<p class="lead">Compartir es el objetivo principal.</p>
						<p>Al momento que compartes tus conocimientos se obtiene 2 valiosas cosas, 1°) El que enseña aprende dos veces. 2°) Ayudas a que otras personas a aprender. </p>
					</div>

					<div class="col-md-5 col-md-offset-1">
						<a class="about-video" href="#">
							<img src="./img/about-video.webp" alt="">
							<i class="play-icon fa fa-play"></i>
						</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.webp)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contacto</h2>
						<p class="lead white-text">¿Tienes dudas? envia un mensaje para aclarar cualquier inquietud.</p>
						<a class="main-button icon-button" href="contact">Enviar mensaje</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

		<!-- Footer -->
		<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '97GfnaDb5N';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
<?php
	include_once('includes/footer.php');
?>