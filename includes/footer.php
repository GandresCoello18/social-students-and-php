<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index">
								<img src="./img/logo.webp" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="index">Inicio</a></li>
							<?php 
							if(!empty($_SESSION['cuenta_personal'])){
								echo "<li><a href='cerrar.php'>Cerar session</a></li>";
							}else{
								$_SESSION['cuenta_personal'] = null;
								echo "<li><a href='login'>Login</a></li>";
							}
						?>
							<li><a href="cursos">Cursos</a></li>
							<li><a href="blog">Blog</a></li>
							<li><a href="contact">Contacto</a></li>
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
		<link href="https://social-students.herokuapp.com/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="https://social-students.herokuapp.com/font/flaticon.css" rel="stylesheet"/>
		<!-- Font Awesome Icon -->
		<link href="https://social-students.herokuapp.com/css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom stlylesheet -->
		<link href="https://social-students.herokuapp.com/css/style.css" rel="stylesheet"/>
		<link href="https://social-students.herokuapp.com/css/modificacion.css" rel="stylesheet"/>

		<!-- jQuery Plugins -->
		<script src="https://social-students.herokuapp.com/js/jquery.min.js"></script>
		<script src="https://social-students.herokuapp.com/js/bootstrap.min.js"></script>
		<script src="https://social-students.herokuapp.com/js/main.js"></script>

	</body>
</html>
