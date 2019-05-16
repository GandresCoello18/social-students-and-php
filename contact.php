<?php
	include_once('codigo_fuente/sesion.php');
	$title = 'Contacto';
	require_once('includes/head.php');

	if(isset($_POST['enviar'])){
		require_once('codigo_fuente/contacto.php');
		$datos = array($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);

		$objeto = new Contact();
		$objeto::Guargar($datos, $conexion);
	}
?>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Inicio</a></li>
							<li>Contacto</li>
						</ul>
						<h1 class="white-text">Escribenos...</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Formulario</h4>
							<form action="contact.php" method="post">
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Asunto">
								<textarea class="input" name="message" placeholder="Comentario"></textarea>
								<button type="submit" name="enviar" class="main-button icon-button pull-right">Enviar</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contacto - Informacion</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>goyeselcoca@gmail.com</li>
							<li><i class="fa fa-phone"></i>0979839846</li>
							<li><i class="fa fa-map-marker"></i>Av Enrique Ponce Luque, Babahoyo</li>
						</ul>

						<!-- contact map -->
						<div id="contact-map"></div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->
				
				</div>
				<!-- /row -->
				<iframe style="position: relative: top: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.824103370356!2d-79.54756088554859!3d-1.8116127361825622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d28109a7a09e5%3A0xe03f6555fec9270f!2sInstituto+Tecnol%C3%B3gico+Superior+Babahoyo!5e0!3m2!1ses-419!2sec!4v1557443334755!5m2!1ses-419!2sec" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		<!-- Footer -->
<?php include_once('includes/footer.php'); ?>