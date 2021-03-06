<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<img src="../img/logo.webp" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="../index.php">Inicio</a></li>
							<?php 
							if(!empty($_SESSION['cuenta_personal'])){
								echo "<li><a href='../cerrar.php'>Cerar session</a></li>";
							}else{
								$_SESSION['cuenta_personal'] = null;
								echo "<li><a href='../login.php'>Login</a></li>";
							}
						?>
							<li><a href="../cursos.php">Cursos</a></li>
							<li><a href="../blog.php">Blog</a></li>
							<li><a href="../contact.php">Contacto</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="https://www.facebook.com/andres.coellogoyes" target="_blanck" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/coellogoyes/" target="_blanck" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCHWsGkCRqlNKnoxYkC_ZRxQ?view_as=subscriber" target="_blanck" class="youtube"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">

						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

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

		<!-- jQuery Plugins -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/main.js"></script>

	</body>
</html>
